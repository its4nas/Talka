<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')

@section('content')


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4" >المطاعم المحذوفة</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                           <tr>
                            <th scope="col">#</th>
                            <th scope="col">إسم المطعم</th>
                            <th scope="col">صورة المطعم</th>
                            <th scope="col">الموقع</th>
                            <th scope="col">الوصف</th>
                            <th scope="col">المسؤول عن الحذف</th>
                            <th scope="col">تاريخ حذف المطعم</th>
                            <th scope="col">الخيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $restaurants as $item)


                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->restaurant_name}}</td>
                                    <td><img src="{{url('storage/'.$item->restaurant_photo)}}" width="100"></td>
                                    <td>{{$item->location}}</td>
                                    <td>{{$item->description}}</td>
                                <td>{{$item->deleted_by_who->name}}</td>
                                <td>{{$item->deleted_at}}</td>
                                <td>
                                     <a href="{{route('restaurants.restore',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الاستعادة؟')
                                     if(result){} else{event.preventDefault()}" style="color: #0080ff;"><button class="btn btn-outline-primary">إستعادة</button></a>
                                    <a href="{{route('restaurants.forceDelete',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الحذف النهائي؟')
                                    if(result){} else{event.preventDefault()}" style="color: #ff4040;"><button class="btn btn-outline-danger">حذف نهائي</button></a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div class="container">
                        {!! $restaurants->render() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end colm -->


</div>
@endsection
