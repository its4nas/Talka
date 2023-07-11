<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')

@section('content')


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4" >المستخدمون المحذوفون</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                           <tr>
                                <th scope="col">ID</th>
                                <th scope="col">اسم المستخدم</th>
                                <th scope="col">البريد الالكتروني</th>
                                <th scope="col">الصلاحية</th>
                                <th scope="col">رقم الهاتف</th>
                                <th scope="col">المسؤول عن الحذف</th>
                                <th scope="col">تاريخ الحذف</th>
                                <th scope="col">الخيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $users as $item)


                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td><div>
                                    @foreach ( $item->roles as $role )
                                    {{$role->name}}
                                    @endforeach
                                </div></td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->deleted_by_who->name}}</td>
                                <td>{{$item->deleted_at}}</td>
                                <td>
                                    <a href="{{route('users.restore',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الاستعادة؟')
                                        if(result){} else{event.preventDefault()}" style="color: #ffc600;"><button class="btn btn-outline-primary">إستعادة</button></a>
                                    <a href="{{route('users.forceDelete',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الحذف النهائي؟')
                                    if(result){} else{event.preventDefault()}" style="color: #ff4040;"><button class="btn btn-outline-danger">حذف نهائي</button></a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <div class="container">
                        {!! $users->render() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end colm -->


</div>
@endsection
