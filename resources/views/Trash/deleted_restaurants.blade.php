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
                                {{-- <td>
                                     <a href="{{route('users.restore',$item)}}" style="color: #ffc600;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg></a> <b> | </b>
                                    <a href="{{route('users.delete',$item)}}" style="color: #ff4040;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg></a>
                                </td> --}}
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
