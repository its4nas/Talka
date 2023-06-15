<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')
@section('content')
<div class="container-fluid">

    <form method="post" action="{{route('restaurants.store')}}">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h2 class="mt-0 header-title" style="font-size: 25px">إضافة مطعم جديد</h2>
                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">إسم المطعم</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('restaurant_name') is-invalid @enderror" value="{{old('restaurant_name')}}" type="text" name="restaurant_name">
                            </div>
                            @error('restaurant_name')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label">صورة لشعار المطعم</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('restaurant_photo') is-invalid @enderror" type="text" name="restaurant_photo" >
                            </div>
                            @error('restaurant_photo')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">موقع المطعم</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('location') is-invalid @enderror" value="{{old('location')}}" type="Text" name="location" >
                            </div>
                            @error('location')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">وصف لموقع المطعم</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" type="Text" name="description" >
                            </div>
                            @error('description')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <br>
                        <div class="col-xs-6" >
                            <div class="submit-holder">
                                <button type="submit" class="btn btn-primary">أضف المطعم</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </form>
</div>
@endsection
