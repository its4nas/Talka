
@extends('Dashboard.layout')

@section('content')


<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
            <br>
            <div class="latest-massage">
                <a href="#" class="latest-message-list">
                    <div class="border-bottom position-relative">
                        <div class="float-left user mr-3">
                            <h5 class="bg-primary text-center rounded-circle text-dark mt-0">v</h5>
                        </div>
                        <div class="message-time">
                            <p class="m-0 "> <strong>Email</strong> </p>
                            <p class="m-0 text-muted">time</p>
                        </div>
                        <div class="massage-desc">
                            <h5 class="font-14 mt-0 text-dark">Victor Zamora</h5>
                            <p class="text-muted">Hey! there I'm available...</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

</div>
<!-- end col -->


@endsection
