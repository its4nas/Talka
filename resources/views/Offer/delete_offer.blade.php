@extends('Dashboard.layout')

@section('content')

<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->



<h1>Delete</h1>

<h3>Are you sure you want to delete this?</h3>
<div>
    <hr />
    <dl class="row">
        <dt class = "col-sm-2">
            Company Name:
        </dt>
        <dd class = "col-sm-10">
            @Model.company_name
        </dd>
        <dt class = "col-sm-2">
            Company Email:
        </dt>
        <dd class = "col-sm-10">
            @Model.company_email
        </dd>
        <dt class = "col-sm-2">
            Company Phone:
        </dt>
        <dd class = "col-sm-10">
            @Model.phone
        </dd>
    </dl>

    <form asp-action="DeleteCompany" asp-controller="Admin" method="post">
        <input type="hidden" asp-for="@Model.company_id" />
        <input type="submit" value="Delete" class="btn btn-danger" /> |
        <a asp-action="company_list" asp-controller="Admin" style="color: #ffc600">Back to List</a>
    </form>
</div>

@endsection
