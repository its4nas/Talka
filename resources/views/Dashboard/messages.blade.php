
@extends('Dashboard.layout')

@section('content')


<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
            <div class="latest-massage">
                <a href="#" class="latest-message-list">
                    <div class="border-bottom position-relative">
                        <div class="float-left user mr-3">
                            <h5 class="bg-primary text-center rounded-circle text-dark mt-0">v</h5>
                        </div>
                        <div class="message-time">
                            <p class="m-0 text-muted">Just Now</p>
                        </div>
                        <div class="massage-desc">
                            <h5 class="font-14 mt-0 text-dark">Victor Zamora</h5>
                            <p class="text-muted">Hey! there I'm available...</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="latest-message-list">
                    <div class="border-bottom mt-3 position-relative">
                        <div class="float-left user mr-3">
                            <h5 class="bg-success text-center rounded-circle text-dark mt-0">p</h5>
                        </div>
                        <div class="message-time">
                            <p class="m-0 text-muted">2 Min. ago</p>
                        </div>
                        <div class="massage-desc">
                            <h5 class="font-14 mt-0 text-dark">Patrick Beeler</h5>
                            <p class="text-muted">I've finished it! See you so...</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="latest-message-list">
                    <div class="border-bottom mt-3 position-relative">
                        <div class="float-left user mr-3">
                            <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle mb-3">
                        </div>
                        <div class="message-time">
                            <p class="m-0 text-muted">6 Min. ago</p>
                        </div>
                        <div class="massage-desc">
                            <h5 class="font-14 mt-0 text-dark">Ralph Ramirez</h5>
                            <p class="text-muted">This theme is awesome!</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="latest-message-list">
                    <div class="border-bottom mt-3 position-relative">
                        <div class="float-left user mr-3">
                            <h5 class="bg-pink text-center rounded-circle text-dark mt-0">b</h5>
                        </div>
                        <div class="message-time">
                            <p class="m-0 text-muted">01:34 pm</p>
                        </div>
                        <div class="massage-desc">
                            <h5 class="font-14 mt-0 text-dark">Bryan Lacy</h5>
                            <p class="text-muted">I've finished it! See you so...</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="latest-message-list">
                    <div class="mt-3 position-relative">
                        <div class="float-left user mr-3">
                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle mb-3">
                        </div>
                        <div class="message-time">
                            <p class="m-0 text-muted">02:05 pm</p>
                        </div>
                        <div class="massage-desc">
                            <h5 class="font-14 mt-0 text-dark">James Sorrells</h5>
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
