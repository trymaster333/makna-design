@extends('layout')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up" data-aos-delay="400">{!! $about->slogan !!}</h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#pricing" class="btn-get-started scrollto">Mulai <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img d-none d-md-block" data-aos="fade-left"
                data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img d-block d-sm-block d-md-none" data-aos="fade-left"
                data-aos-delay="200">
                <img src="{{asset('images/logomakna.png')}}" class="img-fluid animated" alt="" style="width:50%;">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>Tentang kami</p>
            </div>

            <div class="row content">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        {!! $about->deskripsi !!}
                    </p>

                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Paket Harga</h2>
                <p>Paket yang kami tawarkan</p>
            </div>

            <div class="row">
                @foreach ($paket_harga as $item)
                <div class="col-lg-12 col-md-12 mb-5">
                    <div class="box recommended" data-aos="zoom-in-right" data-aos-delay="200">
                        <h3>{{$item->judul}}</h3>
                        <h4>@currency($item->harga)<span>{{ $item->satuan }}</span></h4>
                        {!!$item->deskripsi!!}
                        <div class="btn-wrap">
                            <a href="#contact" class="btn-buy">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Pricing Section -->


    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Portofolio</h2>
                <p>Hasil kerja kami</p>
            </div>
            <div class="row">
                @foreach ($portofolio as $item)
                <div class="col-md-6 d-flex align-items-stretch mb-5">
                    <div class="card" style="background-image: url('{{ url('storage/'.$item->cover) }}');"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title"><a
                                    href="{{ route('home.portofolio', $item->id) }}">{{$item->judul}}</a></h5>
                            <p class="card-text">{!! \Illuminate\Support\Str::limit($item->deskripsi, 60,
                                $end='...') !!}</p>
                            <div class="read-more"><a href="{{ route('home.portofolio', $item->id) }}"><i
                                        class="bi bi-arrow-right"></i> Lanjut Baca</a></div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End More Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Review</h2>
                <p>Apa kata mereka?</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($review as $item)
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ url('storage/'.$item->foto) }}" class="testimonial-img" alt="">
                                <h3>{{$item->nama_client}}</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {!!$item->review!!}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>FAQ</h2>
                <p>Sering ditanya</p>
            </div>
            @foreach ($faq as $item)
            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>{!! $item->pertanyaan !!}</h4>
                </div>
                <div class="col-lg-7">
                    {!! $item->jawaban !!}
                </div>
            </div><!-- End F.A.Q Item-->
            @endforeach
        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Hubungi kami</p>
            </div>

            <div class="row justify-content-md-center">
                @foreach ($kontak as $item)
                <div class="col-md-auto mb-5" data-aos="fade-up" data-aos-delay="100">
                    <a target="_blank" href="{{$item->link}}" style="text-decoration: none;">
                        <div class="contact-about">
                            <div class="d-flex aligns-items-center justify-content-center">
                                <img src="{{ url('storage/'.$item->icon) }}" style="width: 50px;" alt="">
                                <h4 class="align-middle">{{$item->kontak}}</h4>
                            </div>


                        </div>
                    </a>

                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


@endsection