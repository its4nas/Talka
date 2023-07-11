@extends('Dashboard.layout')
@section('content')
<div class="container-fluid">

    <form method="post" action="{{route('food_types.update',$food_type)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h2 class="mt-0 header-title" style="font-size: 25px">تعديل صنف</h2>
                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">إسم الصنف</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('food_type_name') is-invalid @enderror" value="{{old('food_type_name',$food_type)}}" type="text" name="food_type_name">
                            </div>
                            @error('food_type_name')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label">صورة لشعار الصنف</label>
                            <div class="col-sm-6">
                                <img src="{{url('storage/'.$food_type->food_type_photo)}}" width="100">
                                <input class="form-control @error('food_type_photo') is-invalid @enderror" type="file" name="food_type_photo" >
                            </div>
                            @error('food_type_photo')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <br>
                        <div class="col-xs-6" >
                            <div class="submit-holder">
                                <button type="submit" class="btn btn-primary">عدل الصنف</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </form>
</div>
@endsection
