@extends('Dashboard.layout')
@section('content')
<div class="container-fluid">

    <form method="post" action="{{route('food_types.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h2 class="mt-0 header-title" style="font-size: 25px">إضافة صنف جديد</h2>
                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">إسم الصنف</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('food_type_name') is-invalid @enderror" value="{{old('food_type_name')}}" type="text" name="food_type_name">
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
                                <button type="submit" class="btn btn-primary">أضف الصنف</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </form>
</div>
@endsection
