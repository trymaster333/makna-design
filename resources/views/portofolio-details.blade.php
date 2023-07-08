@extends('layout')
@section('content')


<!-- ======= Header ======= -->
<!-- End Header -->

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>{!! $data->judul !!}</h2>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <img src="{{ url('storage/'.$data->cover) }}" class="img-fluid mx-auto d-block" alt="...">
      <div class="row">{!! $data->deskripsi !!}</div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

</html>