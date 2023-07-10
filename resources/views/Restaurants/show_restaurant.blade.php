@extends('Dashboard.layout')
@section('content')
<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->

<section class="vh-100" >
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
  </section>

@endsection
