<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>طلقة</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/talka_logo.jpg')}}" rel="icon">
  <link href="{{url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/styleRTL.css')}}" rel="stylesheet">

</head>

<body class="rtl">
    <form action="">
        <section class="h-100 gradient-custom">
            <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3" style="background-color:#37517e">
                    <h5 class="mb-0" style="color: white"><span>{{Auth::user()->name}}</span></h5>
                    </div>

                    <div class="card-body">
                    <!-- Single item -->
                    @foreach ( $cart as $item)
                    <div class="row">
                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <!-- Image -->
                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                            <img src="{{url('storage/'.$item->attributes->offer_photo)}}"
                            class="w-100" alt="Blue Jeans Jacket" />
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                            </a>
                        </div>
                        <!-- Image -->
                        </div>

                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                        <!-- Data -->
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->attributes->restaurant_name}}</p>
                        <p>{{$item->attributes->food_type}}</p>
                        <p>{{$item->attributes->location}} {{$item->attributes->description}}</p>

                        <a href="{{route("delete_item_from_cart",$item->id)}}" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                            title="Remove item">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                            title="Move to the wish list">
                            <i class="bi bi-heart-fill"></i>
                        </button>
                        <!-- Data -->
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <!-- Quantity -->
                        <div class="d-flex mb-4" style="max-width: 300px">
                            <a href="{{route("decrease",$item->id)}}" class="btn btn-warning px-3 me-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="bi bi-dash"></i></a>

                            <div class="form-outline">
                            <input id="form1" min="0" name="quantity" value="{{$item->quantity}}" type="number" class="form-control" />
                            </div>

                            <a href="{{route("increase",$item->id)}}" class="btn btn-warning px-3 ms-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="bi bi-plus"></i></a>
                        </div>
                        <!-- Quantity -->

                        <!-- Price -->
                        <p class="text-start text-md-center">
                            <strong>{{$item->price * $item->quantity}} ريال</strong>
                        </p>
                        <!-- Price -->
                        </div>
                    </div>
                    <!-- Single item -->

                    <hr class="my-4" />
                    @endforeach
                    <!-- Single item -->
                    </div>
                </div>


                </div>
                <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header py-3" style="background-color: #e49d47">
                    <h5 class="mb-0"><strong>الاجمالي</strong></h5>
                    </div>
                    <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li
                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Products
                        <span>$53.98</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Shipping
                        <span>Gratis</span>
                        </li>
                        <li
                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                            <strong>إجمالي المبلغ:</strong>

                        </div>
                        <span><strong>{{$total}} ريال</strong></span>
                        </li>
                    </ul>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        تأكيد الطلب
                    </button>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body">
                    <p><strong>بيانات التوصيل:</strong></p>
                    <div class="form-outline">
                        <input type="text" class="form-control" placeholder=" (اختياري) اسم المستخدم"/><br>
                        <input type="tel" class="form-control" placeholder="رقم الهاتف"/><br>
                        <input type="text" class="form-control" placeholder="عنوان التوصيل"/><br>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
    </form>
</body>
</html>
