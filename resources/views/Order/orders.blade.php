
@extends('Dashboard.layout')

@section('content')
<!-- boooooooooooooooooooooooooooooooooooooooooooooooooody -->


<h1>Table</h1>

<table class="table table-hover">
    <thead>
        <tr>

            <th scope="col">App ID</th>
            <th scope="col">Company ID</th>
            <th scope="col">Job ID</th>
            <th scope="col">CV</th>
            <th scope="col">Date of App</th>
        </tr>
    </thead>
    <tbody>

        <tr>

            <td>app_id</td>
            <td>company_id</td>
            <td>job_id</td>
            <td>CV</td>
            <td>date_of_app</td>
        </tr>

    </tbody>
</table>
@endsection
