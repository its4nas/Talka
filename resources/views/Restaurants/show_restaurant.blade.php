@extends('Dashboard.layout')
@section('content')
<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->

    <div class="container py-5 h-10">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-md-12 col-lg-10 col-xl-8">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-6">
              <div class="d-flex text-black">

                <div class="flex-grow-1 ms-4 ">
                  <h4 class="mb-6 ">{{$restaurant->restaurant_name}}</h4>
                  <h5 class="mb-2 pb-1" style="color: #2b2a2a;">{{$restaurant->location}} <span> - </span> {{$restaurant->description}}</h5>
                  <div class="flex-shrink-0">
                    <img src="{{url('storage/'.$restaurant->restaurant_photo)}}"
                      alt="Generic placeholder image" class="img-fluid"
                      style="width: 180px; border-radius: 20px;">
                  </div>
                  {{-- <div class="d-flex justify-content-center rounded-3 p-2 mb-2"
                    style="background-color: #efefef;">
                    <div>
                      <h5 class="small text-muted mb-2">الصنف</h5>
                      <h5 class="mb-0">{{$offer->food_type->food_type_name}}</h5>
                    </div>
                    <div class="px-5">
                      <p class="small text-muted mb-2">السعر</h5>
                      <h5 class="mb-0">{{$offer->price}}</h5>
                    </div>
                    <div>
                      <h5 class="small text-muted mb-2">عدد العروض</h5>
                      <h5 class="mb-0">8</h5>
                    </div>
                  </div> --}}
                  <div class="alert alert-danger mb-0" role="alert"><strong>ملاحظة:</strong> اذا حذفت المطعم سيتم حذف كل العروض الخاصة بالمطعم</div>
                 <form method="post" action="{{route('restaurants.destroy',$restaurant)}}">
                    @csrf
                    @method("DELETE")
                    <div class="d-flex pt-1">
                        <a href="{{route('restaurants.index')}}"><button type="button" class="btn btn-primary me-1 flex-grow-1">العودة الى القائمة السابقة</button></a>
                        <button type="submit" class="btn btn-outline-danger flex-grow-1" onclick="var result=confirm(' هل انت متأكد من خيار الحذف؟')
                        if(result){} else{event.preventDefault()}">حذف المطعم</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4" style="font-size: 25px">العروض</h4>

                <br><br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                           <tr>
                                <th scope="col">#</th>
                                <th scope="col">إسم العرض</th>
                                <th scope="col">صورة العرض</th>
                                <th scope="col">تاريخ انشاء العرض</th>
                                <th scope="col">السعر</th>
                                <th scope="col">الصنف</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $offers as $item)
                                <tr>
                                    @if ($item->restaurant->id == $restaurant->id)
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->offer_name}}</td>
                                    <td><img src="{{url('storage/'.$item->offer_photo)}}" width="50"></td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->food_type->food_type_name}}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- end colm -->

</div>
@endsection
