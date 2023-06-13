<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->
@extends('Dashboard.layout')

@section('content')

    <h1>Delete</h1>

<h3>Are you sure you want to delete this?</h3>
<div>
    <hr />
    <dl class="row">
        <dt class = "col-sm-2">
            user Name:
        </dt>
        <dd class = "col-sm-10">
            user_name
        </dd>
        <dt class = "col-sm-2">
            user Email:
        </dt>
        <dd class = "col-sm-10">
            user_email
        </dd>
        <dt class = "col-sm-2">
            user Phone:
        </dt>
        <dd class = "col-sm-10">
            user_phone
        </dd>
    </dl>

    <form asp-action="DeleteUser" asp-controller="Admin" method="post">
        <input type="hidden" asp-for="user_id" />
        <input type="submit" value="Delete" class="btn btn-danger" /> |
        <a asp-action="user_list" asp-controller="Admin" style="color: #ffc600">Back to List</a>
    </form>
</div>


@endsection
