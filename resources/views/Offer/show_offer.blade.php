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
                  <h5 class="mb-6 ">{{$offer->offer_name}}</h5>
                  <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$offer->restaurant->restaurant_name}} <span> - </span> {{$offer->restaurant->location}}</p>
                  <div class="flex-shrink-0">
                    <img src="{{url('storage/'.$offer->offer_photo)}}"
                      alt="Generic placeholder image" class="img-fluid"
                      style="width: 180px; border-radius: 20px;">
                  </div>
                  <div class="d-flex justify-content-center rounded-3 p-2 mb-2"
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
                      <h5 class="small text-muted mb-2">عدد الطلبات</h5>
                      <h5 class="mb-0">8</h5>
                    </div>
                  </div>
                  <div class="alert alert-danger mb-0" role="alert"><strong>ملاحظة:</strong> في حال وجود طلبات على هذا العرض لن تستطيع حذفه حتى يتم تسليم الطلبات الى الزبائن او الغاء الطلبات</div>
                  <form method="post" action="{{route('offers.destroy',$offer)}}">
                    @csrf
                    @method("DELETE")
                    <div class="d-flex pt-1">
                        <a href="{{route('offers.index')}}"><button type="button" class="btn btn-primary me-1 flex-grow-1">العودة الى القائمة السابقة</button></a>
                        <button type="submit" class="btn btn-outline-danger flex-grow-1" onclick="var result=confirm(' هل انت متأكد من خيار الحذف؟')
                        if(result){} else{event.preventDefault()}">حذف العرض</button>
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
