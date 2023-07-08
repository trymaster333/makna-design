@extends('admin.layout')
@section('home')

<style>
    input[readonly].form-control,
    textarea[readonly].form-control {
        background-color: #fff;
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About</h1>
    </div>

    <div class="container">
        @foreach($data as $item)
        <div class="row mb-5">

            <div class="col-sm-2 fw-bolder">
                Logo:

                <img src="{{ url('storage/'.$item->image) }}" class="rounded mx-auto d-block img-fluid" alt="logo">
            </div>
            <div class="col-sm-10">

                <div class="row">
                    <div class="col-sm-12">

                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif


                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <label for="nama_perusahaan" class="fw-bolder">Nama Perusahaan:</label>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $item->judul }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <label for="slogan" class="fw-bolder">Slogan:</label>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $item->slogan }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <label for="nama_perusahaan" class="fw-bolder">Deskripsi Perusahaan:</label>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{!! $item->deskripsi !!}</li>
                                </ul>
                            </div>
                        </div>

                        <a href="about/{{ $item->id }}/edit">
                            <button class="btn btn-warning btn-lg">
                                <span data-feather="edit" style="width:1.8rem;height:1.8rem"></span> Edit
                            </button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        @endforeach
    </div>





</main>
<!-- Initialize the rich text editor -->
<script>
    tinymce.init({
    selector: '.rich-text-editor',
    // Additional configuration options if needed
    height: 300
  });
</script>
@endsection