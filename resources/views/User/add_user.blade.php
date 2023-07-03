<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')
@section('content')

<div class="container-fluid">

    <form method="post" >
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h2 class="mt-0 header-title" style="font-size: 25px">إضافة مستخدم جديد</h2>
                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">إسم المستخدم</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" type="text" name="name">
                            </div>
                            @error('name')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">البريد الالكتروني</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" type="email" name="email" >
                            </div>
                            @error('email')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">رقم الهاتف</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" type="Text" name="description" >
                            </div>
                            @error('phone')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">الصلاحية</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="role">
                                    <option value="">اختر نوع الصلاحية</option>
                                    @foreach ( $roles as $item)

                                    <option value="{{$item->id}}">{{$item->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="col-xs-6" >
                            <div class="submit-holder">
                                <button type="submit" class="btn btn-primary">أضف مستخدم</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </form>
</div>
@endsection
