
@extends('Dashboard.layout')

@section('content')
<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->


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
                                <th scope="col">إسم المطعم</th>
                                <th scope="col">صورة العرض</th>
                                <th scope="col">الموقع</th>
                                <th scope="col">الوصف</th>
                                <th scope="col">السعر</th>
                                <th scope="col">الصنف</th>
                                <th scope="col">الخيارات</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($offers as $item)
                                <tr>
                                    {{-- <th scope="row">{{ $index++ }} </th> --}}
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->offer_name}}</td>
                                    <td>{{$item->restaurant->restaurant_name}}</td>
                                    <td><img src="{{url('storage/'.$item->offer_photo)}}" width="50"></td>
                                    <td>{{$item->restaurant->location}}</td>
                                    <td>{{$item->restaurant->description}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->food_type->food_type_name}}</td>
                                    <td>
                                        <a href="{{route('offers.restore',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الاستعادة؟')
                                        if(result){} else{event.preventDefault()}" style="color: #0080ff;"><button class="btn btn-outline-primary">إستعادة</button></a>
                                       <a href="{{route('offers.forceDelete',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الحذف النهائي؟')
                                       if(result){} else{event.preventDefault()}" style="color: #ff4040;"><button class="btn btn-outline-danger">حذف نهائي</button></a>
                                   </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="container">
                        {!! $offers->render() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end colm -->


</div>

@endsection
