@extends('Dashboard.layout')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4" style="font-size: 25px">الاصناف</h4>

                <br><br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                           <tr>
                                <th scope="col">#</th>
                                <th scope="col">اسم الصنف</th>
                                <th scope="col">صورة الصنف</th>
                                <th scope="col">المسؤول عن الحذف</th>
                                <th scope="col">تاريخ الحذف</th>
                                <th scope="col">الخيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $index = 1
                            @endphp
                            @foreach ( $food_types as $item)
                                <tr>
                                    {{-- <th scope="row">{{ $index++ }} </th> --}}
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->food_type_name}}</td>
                                    <td><img src="{{url('storage/'.$item->food_type_photo)}}" width="100"></td>
                                    <td>{{$item->deleted_by_who->name}}</td>
                                    <td>{{$item->deleted_at}}</td>
                                        <td>
                                            <a href="{{route('food_types.restore',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الاستعادة؟')
                                            if(result){} else{event.preventDefault()}" style="color: #0080ff;"><button class="btn btn-outline-primary">إستعادة</button></a>
                                           <a href="{{route('food_types.forceDelete',$item->id)}}" onclick="var result=confirm(' هل انت متأكد من خيار الحذف النهائي؟')
                                           if(result){} else{event.preventDefault()}" style="color: #ff4040;"><button class="btn btn-outline-danger">حذف نهائي</button></a>
                                       </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="container">
                        {!! $food_types->render() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end colm -->


</div>


@endsection
