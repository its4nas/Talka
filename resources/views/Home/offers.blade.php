@extends('Home.layout')
@section('content')



<section style="background-color: #37517e;">
    <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
</section>

<section style="background-color: #eee;">
<div class="container py-5">
    <div class="row justify-content-center mb-3">
    <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
        <div class="card-body">
            <div class="row">
            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                    class="w-100" />
                <a href="#!">
                    <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <h5>Quant trident shirts</h5>
                <div class="d-flex flex-row">
                <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <span>310</span>
                </div>
                <div class="mt-1 mb-0 text-muted small">
                <h3>hello</h3>
                </div>
                <p class="text-truncate mb-4 mb-md-0">
                There are many variations of passages of Lorem Ipsum available, but the
                majority have suffered alteration in some form, by injected humour, or
                randomised words which don't look even slightly believable.
                </p>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                <h4 class="mb-1 me-1">$13.99</h4>
                <span class="text-danger"><s>$20.99</s></span>
                </div>
                <h6 class="text-success">Free shipping</h6>
                <div class="d-flex flex-column mt-4">
                <button class="btn btn-primary btn-sm" type="button">Details</button>
                <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                    Add to wishlist
                </button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>


@endsection
