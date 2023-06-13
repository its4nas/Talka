<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')
@section('content')

<form method="post" action="{{route('restaurants.store')}}">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h2 class="mt-0 header-title">Add New Restaurant</h2>
                    <br>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Restaurant Name</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="restaurant_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Restaurant Photo</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="restaurant_photo" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="Text" name="location" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="Text" name="description" >
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-6" >
                        <div class="submit-holder">
                            <button type="submit" class="btn btn-primary">Add Restaurant</button>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</form>

@endsection
