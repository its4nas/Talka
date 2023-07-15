@extends('Home.layout')
@section('content')



<section style="background-color: #37517e;">
    <div class="container">
        <br/>
        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8">
                                <form class="card card-sm">
                                    <div class="card-body row no-gutters align-items-center">
                                        <div class="col">
                                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="ادخل اسم المطعم">
                                        </div>
                                        <!--end of col-->
                                        <div class="col-auto">
                                            <button class="btn btn-lg btn-warning" type="submit">بحث</button>
                                        </div>
                                        <!--end of col-->
                                    </div>
                                </form>
                            </div>
                            <!--end of col-->
                        </div>
    </div>
</section>

<section style="background-color: #eee;">
<div class="container py-5">


    <div class="col-12 p-0  content-end" style="text-align:center">
        <form>
            <span class="btn-group">
                <button class="btn btn-warning" name="FilterText" value="">جميع الاصناف</button>
            </span>
            @foreach ($food_type as $item)
            <span class="btn-group">
                <button class="btn btn-primary" name="FilterText" value="">{{$item->food_type_name}}</button>
            </span>
            @endforeach
        </form>
    </div>


    <br>
    @foreach ($offers as $item)
    @if (empty($item->restaurant->restaurant_name) || empty($item->food_type->food_type_name))
        @else
    <div class="row justify-content-center mb-3">
    <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">

        <div class="card-body">
            <div class="row">
            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                    <img src="{{url('storage/'.$item->offer_photo)}}" width="170px" />
                <a href="#!">
                    <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <h5><b>{{$item->offer_name}}</b></h5>
                <div class="d-flex flex-row">
                <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <span>{{$item->food_type->food_type_name}}</span>
                </div>
                <div class="mt-1 mb-0 text-muted small">
                <h3>{{$item->restaurant->restaurant_name}}</h3>
                </div>
                <p class="text-truncate mb-4 mb-md-0">
                    {{$item->restaurant->location}}
                    <br>
                    {{$item->restaurant->description}}
                </p>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                <h4 class="mb-1 me-1">{{$item->price}}ريال </h4>
                {{-- <span class="text-danger"><s>$20.99</s></span> --}}
                </div>
                {{-- <h6 class="text-success">Free shipping</h6> --}}
                <div class="d-flex flex-column mt-4">
                <button class="btn btn-primary btn-sm" type="button">Details</button>
                <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                    إضافة الى السلة
                </button>
                </div>
            </div>
            </div>
        </div>

        </div>
    </div>
    </div>
    @endif
    @endforeach
</div>
</section>


@endsection
