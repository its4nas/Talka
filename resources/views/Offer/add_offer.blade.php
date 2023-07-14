<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')
@section('content')
<div class="container-fluid">

    <form method="post" action="{{route('offers.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h2 class="mt-0 header-title" style="font-size: 25px">إضافة عرض جديد</h2>
                        <br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">إسم المطعم</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="restaurant">
                                    <option>اختر المطعم</option>
                                    @foreach ( $restaurants as $item)

                                    <option value="{{$item->id}}">{{$item->restaurant_name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">إسم العرض</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('offer_name') is-invalid @enderror" value="{{old('offer_name')}}" type="text" name="offer_name">
                            </div>
                            @error('offer_name')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>



                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label">صورة للعرض</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('offer_photo') is-invalid @enderror" type="file" name="offer_photo" >
                            </div>
                            @error('offer_photo')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">السعر</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" type="Text" name="price" >
                            </div>
                            @error('price')
                            <div style="color:red" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">الصنف</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="food_type">
                                    <option value="">اختر صنف الطعام</option>
                                    @foreach ( $food_types as $item)

                                    <option value="{{$item->id}}">{{$item->food_type_name}}</option>

                                    @endforeach
                                </select>
                            </div>
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
