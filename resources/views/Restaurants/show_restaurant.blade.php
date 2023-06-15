<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')

@section('content')

<div class="container-fluid">
        <div>
            <hr />
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h2 class="mt-0 header-title">{{$restaurant->restaurant_name}}</h2>
                            <div class="container">
                                <h4> أسم المطعم:  {{$restaurant->restaurant_name}}</h4>
                                <br>
                                <h4> موقع المطعم:  {{$restaurant->location}}</h4>
                                <br>
                                <h4> وصف لمكان المطعم:  {{$restaurant->description}}</h4>
                                <br>
                                <h4> تاريخ انشاء حقل المطعم:  {{$restaurant->created_at}}</h4>
                            </div>
                            <form action="{{route('restaurants.destroy',$restaurant)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="hidden" asp-for="user_id" />
                                <input type="submit" value="حذف" class="btn btn-danger" onclick="var result=confirm('هل انت متأكد من خيار الحذف؟')
                                if(result){} else{event.preventDefault()}" /> |
                                <a href="{{route('restaurants.index')}}" style="color: #ffa200">العودة الى القائمة</a>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div>
</div>

@endsection
