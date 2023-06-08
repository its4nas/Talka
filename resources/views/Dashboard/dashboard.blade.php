@extends('Dashboard.layout')

@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">لوحة التحكم</h4>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">الطلبات</h6>
                            <h4 class="mb-3 mt-0 float-right">1,587</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                        </div>

                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Last : 1447</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-info mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">العوائد</h6>
                            <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Last : $47,596</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">المستخدمين</h6>
                            <h4 class="mb-3 mt-0 float-right">15.9</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-tag-text-outline h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Last : 15.8</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">اي شي</h6>
                            <h4 class="mb-3 mt-0 float-right">1890</h4>
                        </div>
                        <div>
                            <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="float-right">
                            <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                        </div>
                        <p class="font-14 m-0">Last : 1776</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">اخر الرسائل</h4>
                        <div class="latest-massage">
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-primary text-center rounded-circle text-white mt-0">v</h5>
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
                                        <h5 class="bg-success text-center rounded-circle text-white mt-0">p</h5>
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
                                        <h5 class="bg-pink text-center rounded-circle text-white mt-0">b</h5>
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


        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">عمليات التوصيل</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#14567</th>
                                        <td>Michael Mitchell</td>
                                        <td>14 Jan</td>
                                        <td>$74</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$148</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14568</th>
                                        <td>Dennis Cervantes</td>
                                        <td>15 Jan</td>
                                        <td>$72</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$144</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14569</th>
                                        <td>Bernard Moats</td>
                                        <td>16 Jan</td>
                                        <td>$86</td>
                                        <td>1</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$86</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14570</th>
                                        <td>Patrick Esquivel</td>
                                        <td>17 Jan</td>
                                        <td>$59</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$118</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14571</th>
                                        <td>Michael Barger</td>
                                        <td>18 Jan</td>
                                        <td>$62</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>$124</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
       <!-- end row -->


       <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">المستخدمين</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#14567</th>
                                    <td>Michael Mitchell</td>
                                    <td>14 Jan</td>
                                    <td>$74</td>
                                    <td>2</td>
                                    <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$148</td>
                                </tr>
                                <tr>
                                    <th scope="row">#14568</th>
                                    <td>Dennis Cervantes</td>
                                    <td>15 Jan</td>
                                    <td>$72</td>
                                    <td>2</td>
                                    <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$144</td>
                                </tr>
                                <tr>
                                    <th scope="row">#14569</th>
                                    <td>Bernard Moats</td>
                                    <td>16 Jan</td>
                                    <td>$86</td>
                                    <td>1</td>
                                    <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$86</td>
                                </tr>
                                <tr>
                                    <th scope="row">#14570</th>
                                    <td>Patrick Esquivel</td>
                                    <td>17 Jan</td>
                                    <td>$59</td>
                                    <td>2</td>
                                    <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 64%;" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$118</td>
                                </tr>
                                <tr>
                                    <th scope="row">#14571</th>
                                    <td>Michael Barger</td>
                                    <td>18 Jan</td>
                                    <td>$62</td>
                                    <td>2</td>
                                    <td>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>$124</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
   <!-- end row -->

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->


@endsection
