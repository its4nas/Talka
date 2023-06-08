<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')

@section('content')

<form method="post" asp-controller="Admin" asp-action="add_user" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h2 class="mt-0 header-title">Add New User</h2>
                    <br>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="user_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">User Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="user_email" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="Text" name="user_phone" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="Text" name="user_password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="user_age">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">User Role</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="Text" name="user_role">
                        </div>
                    </div>
<br>
                    <div class="col-xs-6" >
                        <div class="submit-holder">
                            <button type="submit" class="btn btn-primary" name="submit">Add User</button>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</form>

@endsection
