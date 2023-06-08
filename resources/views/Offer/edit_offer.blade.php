
@extends('Dashboard.layout')

@section('content')

<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
<form method="post" asp-controller="Admin" asp-action="edit_company" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h2 class="mt-0 header-title">Edit Company</h2>
                    <br>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Company ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="hidden" readonly value="@Model.company_id" asp-for="company_id">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" asp-for="company_name" value="@Model.company_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Company Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" asp-for="company_email" value="@Model.company_email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="Text" asp-for="phone" value="@Model.phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="Text" asp-for="password" value="@Model.password">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="example-time-input" class="col-sm-2 col-form-label">Company image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="hidden" asp-for="company_image" value="@Model.company_image">
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-3">

                            <!-- Simple card -->
                            <div class="card m-b-30">
                                <img class="card-img-top img-fluid" src="~/JobImages/@Model.company_image" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-16 mt-0">Company Image</h4>
                                    <p class="card-text" asp-for="company_image">@Model.company_image</p>
                                     <input class="form-control" type="file" asp-for="company_image">
                                </div>
                            </div>

                     </div><!-- end col -->


                    <div class="col-xs-6">
                        <div class="submit-holder">
                            <button type="submit" name="submit">Edit company</button>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</form>

@endsection
