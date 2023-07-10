<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')

@section('content')

    <h1 class="container">{{$user->name}}</h1>

<div class="container">
    <hr />
    <dl class="row">
        <dt class = "col-sm-2">
            اسم المستخدم:
        </dt>
        <dd class = "col-sm-10">
            {{$user->name}}
        </dd>
        <dt class = "col-sm-2">
            البريد الالكتروني:
        </dt>
        <dd class = "col-sm-10">
            {{$user->email}}
        </dd>
        <dt class = "col-sm-2">
            رقم الهاتف:
        </dt>
        <dd class = "col-sm-10">
            {{$user->phone}}
        </dd>
    </dl>

    <div class="alert alert-danger mb-0" role="alert"><strong>ملاحظة:</strong> اذا حذفت هذا الحساب سيتم حذف كل الطلبات المرتبطة بهذا المستخدم</div>
                            <form action="{{route('users.destroy',$user)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="حذف" class="btn btn-danger" onclick="var result=confirm(' هل انت متأكد من خيار الحذف؟')
                                if(result){} else{event.preventDefault()}" /> |
                                <a href="{{route('users.index')}}" style="color: #ffa200">العودة الى القائمة</a>
                            </form>
</div>


@endsection
