@extends('Dashboard.layout')

@section('content')

<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
<form method="post" asp-controller="Admin" asp-action="add_job" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h2 class="mt-0 header-title">إضافة طلب جديد</h2>
                    <br>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">إسم المطعم</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="rasturant_name">
                        </div>
                    </div>

                    <br>
                    <h2 class="mt-0 header-title">Qualifications</h2>
                    <br>

                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="Text" name="city">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Range Age</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="age_range">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-time-input" class="col-sm-2 col-form-label">Work hours</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="work_hours">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="job_age">
                                <option value="Both">Both</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label name="job_image" class="col-sm-2 col-form-label">صورة للمطعم</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="resturant_image">
                        </div>
                    </div>

                    <div class="col-xs-6" >
                        <div class="submit-holder">
                            <button type="submit" class="btn btn-primary" name="submit">Add Restaurant</button>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</form>

@endsection
