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
                    <li>Daftar Proyek</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="calendar"></i>{{$data->tanggal}}</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="dollar-sign"></i>{{$data->anggaran}}</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="home"></i>{{$data->luas_tanah."m2(LT) /
                                ".$data->luas_bangunan."m2(LB)"}}</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="map-pin"></i>{{$data->lokasi}}</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="home"></i>{{$data->tipe}}</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="card-text"><i data-feather="home"></i>{{$data->jenis}}</p>
                        </div>
                    </div>

                    </p>

                </div>
            </div>
            <div class="row mt-4">
                <b>Keterangan :</b>
                <br>
                {!! $data->keterangan !!}
            </div>
            <div class="row mt-4">
                <b>Data Penunjang :</b>
                <br>
                @if ($data->nama_file!=null)
                <a href="{{ url('storage/'.$data->data_penunjang) }}">
                    {{ $data->nama_file }}
                </a>
                @endif
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection