
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

                            @foreach ( $offers as $item)
                                <tr>
                                    @if (empty($item->restaurant->restaurant_name) || empty($item->food_type->food_type_name))
                                        @else
                                    {{-- <th scope="row">{{ $index++ }} </th> --}}
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->offer_name}}</td>
                                    <td>{{$item->restaurant->restaurant_name}}</td>
                                    <td><img src="{{url('storage/'.$item->offer_photo)}}" width="50"></td>
                                    <td>{{$item->restaurant->location}}</td>
                                    <td>{{$item->restaurant->description}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->food_type->food_type_name}}</td>
                                    <td> <a href="{{route('offers.show',$item)}}" style="color: #0064f1;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                        </svg></a> <b> | </b>
                                        <a href="{{route('offers.edit',$item)}}" style="color: #ffc600;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">

                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg></a> <b> | </b>
                                        <a href="{{route('offers.show',$item)}}" style="color: #ff4040;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg></a>
                                        @endif
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
