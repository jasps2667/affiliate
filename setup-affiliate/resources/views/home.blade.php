@extends('master')

@section('title', 'Home Page')

@section('content')
{{-- Hero Section --}}
<div class="bg-dark text-white py-4 position-relative">
  <div class="text-center py-5">
    <h1 class="display-4 fw-bold">
      We simplify affiliate marketing to <br>amplify your growth
    </h1>
    <p class="lead">
      Modern and reliable affiliate tool for subscription-based companies. Easy to set up, yet powerful to scale <br>
      with your growing needs.
    </p>
    <a href="/about" class="btn btn-primary my-3 py-2 px-5">Try For Free</a>
    <p class="lead">14 days free trial. No Credit card required</p>
    <img src="{{ asset('upload/stik.avif') }}" alt="My Image" class="img-fluid" style="max-width: 400px;">
  </div>
</div>

{{-- Overlapping Image --}}
<div class="container position-relative" style="margin-top: -150px; z-index: 5;">
  <div class="m-auto text-center" style="max-width: 1100px;">
    <img src="{{ asset('upload/mid.avif') }}" alt="My Image" class="img-fluid shadow-lg rounded-4 border border-dark">
  </div>
</div>

{{-- Integration Section --}}
<div class="container my-5">
  <div class="row bg-dark text-white rounded-4 overflow-hidden align-items-center" style="min-height: 400px;">
    
    {{-- Left Side --}}
    <div class="col-md-6 px-5 py-5">
      <p class="text-primary fw-semibold mb-2">Integration</p>
      <h2 class="fw-bold mb-4">
        Integrate Seamlessly with <br>
        Stripe, Paddle, Recurly, <br>
        Braintree, Chargebee or our API
      </h2>
      <a href="#" class="btn btn-outline-light px-4 py-2 rounded-pill fw-semibold">
        Explore Integrations
      </a>
    </div>

    {{-- Right Side --}}
    <div class="col-md-6 text-center p-4">
      <img src="{{ asset('upload/integration.avif') }}" alt="Integration Image" class="img-fluid">
    </div>
  </div>
</div>

{{-- Achievements Section --}}
<div class="container my-5 py-5">
  <div class="text-center mb-5">
    <p class="text-danger fw-semibold">Our Achievements</p>
    <h2 class="fw-bold display-6">
      For more than 7 years, we've helped thousands <br>
      of businesses launch and scale highly profitable affiliate programs.
    </h2>
  </div>

  {{-- Stats Row --}}
  <div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
      <div class="border rounded-4 p-4">
        <h3 class="fw-bold">$30M +</h3>
        <p class="text-muted mb-0">Revenue Tracked Each Month</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="border rounded-4 p-4">
        <h3 class="fw-bold">2000+</h3>
        <p class="text-muted mb-0">Customers</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="border rounded-4 p-4">
        <h3 class="fw-bold">7000+</h3>
        <p class="text-muted mb-0">Programs Launched</p>
      </div>
    </div>
  </div>

  {{-- Testimonials Row --}}
  <div class="row g-4">
    <div class="col-md-4">
      <div class="p-4 bg-light rounded-4 h-100">
        <p>“FirstPromoter has proven time and again that it is the ideal platform for our affiliate program. It is intuitive, simple, and the customer service always replies immediately whenever we need help!”</p>
        <div class="d-flex align-items-center mt-4">
          <img src="{{ asset('upload/user1.jpg') }}" alt="User" class="rounded-circle me-3" width="45" height="45">
          <div>
            <strong>Florian Muller</strong><br>
            <small class="text-muted">Affiliate Manager at <a href="#" class="text-decoration-none">Mineq.com</a></small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="p-4 bg-light rounded-4 h-100">
        <p>“We've been using FirstPromoter for over 5 years. It has helped us bring in hundreds of thousands of dollars of additional revenue, while being managed by just a single person.”</p>
        <div class="d-flex align-items-center mt-4">
          <img src="{{ asset('upload/user2.jpg') }}" alt="User" class="rounded-circle me-3" width="45" height="45">
          <div>
            <strong>John O'Nolan</strong><br>
            <small class="text-muted">Founder & CEO at <a href="#" class="text-decoration-none">Ghost.org</a></small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="p-4 bg-light rounded-4 h-100">
        <p>“FirstPromoter has proven time and again that it is the ideal platform for our affiliate program. It is intuitive, simple, and the customer service always replies immediately whenever we need help!”</p>
        <div class="d-flex align-items-center mt-4">
          <img src="{{ asset('upload/user3.jpg') }}" alt="User" class="rounded-circle me-3" width="45" height="45">
          <div>
            <strong>Shubham Sood</strong><br>
            <small class="text-muted">Affiliate Program Lead at <a href="#" class="text-decoration-none">JustCall</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container text-center my-5">
<div class="row justify-content-center align-items-center g-4">
    <div class="col-auto">
      <img src="{{ asset('upload/bar1.webp') }}" alt="Logo 1" class="logo-img">
    </div>
    <div class="col-auto">
      <img src="{{ asset('upload/bar2.avif') }}" alt="Logo 2" class="logo-img">
    </div>
    <div class="col-auto">
      <img src="{{ asset('upload/bar3.webp') }}" alt="Logo 3" class="logo-img">
    </div>
    <div class="col-auto">
      <img src="{{ asset('upload/bar4.avif') }}" alt="Logo 4" class="logo-img">
    </div>
    <div class="col-auto">
      <img src="{{ asset('upload/bar5.avif') }}" alt="Logo 5" class="logo-img">
    </div>
    <div class="col-auto">
      <img src="{{ asset('upload/bar6.png') }}" alt="Logo 6" class="logo-img">
    </div>
  </div>
@include('slider')
</div>
@endsection
