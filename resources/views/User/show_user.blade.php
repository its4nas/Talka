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
                  <h4 class="mb-6 ">{{$user->name}}</h4>
                  <h5 class="mb-2 pb-1" style="color: #2b2a2a;">إسم المستخدم: {{$user->name}}</h5>
                  <h5 class="mb-2 pb-1" style="color: #2b2a2a;">البريد الإلكتروني: {{$user->email}}</h5>
                  <h5 class="mb-2 pb-1" style="color: #2b2a2a;">الصلاحية: @foreach ($user->roles as $role )
                    {{$role->name}}
                  @endforeach</h5>
                  <h5 class="mb-2 pb-1" style="color: #2b2a2a;">رقم الهاتف: {{$user->phone}}</h5>

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
                      <h5 class="small text-muted mb-2">عدد الطلبات</h5>
                      <h5 class="mb-0">8</h5>
                    </div>
                  </div> --}}
                  <div class="alert alert-danger mb-0" role="alert"><strong>ملاحظة:</strong> في حال ارتباط هذا المستخدم بعمليات اخرى لن تستطيع حذفه حتى يتم انجاز هذه العمليات</div>
                  <form method="post" action="{{route('users.destroy',$user)}}">
                    @csrf
                    @method("DELETE")
                    <div class="d-flex pt-1">
                        <a href="{{route('users.index')}}"><button type="button" class="btn btn-primary me-1 flex-grow-1">العودة الى القائمة السابقة</button></a>
                        <button type="submit" class="btn btn-outline-danger flex-grow-1" onclick="var result=confirm(' هل انت متأكد من خيار الحذف؟')
                        if(result){} else{event.preventDefault()}">حذف المستخدم</button>
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

