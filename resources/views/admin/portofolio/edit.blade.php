@extends('admin.layout')
@section('home')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://cdn.tiny.cloud/1/lgwdtkvnhtfje91arydiaouvcak2ezsvb1su3wmkr9mfkpsq/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>


<style>
    input[readonly].form-control,
    textarea[readonly].form-control {
        background-color: #fff;
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Portofolio</h1>
    </div>

    <div class="container">

        <form class="mb-5" action="{{ route('portofolio.update', $data->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bolder">Judul:</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Judul Portofolio" value="{{ $data->judul }}" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label fw-bolder">Cover:</label>
                                <img src="{{ url('storage/'.$data->cover) }}" class="rounded d-block img-fluid"
                                    style="height:200px;" alt="cover image upload" id="cover">
                                <input type="file" name="image" id="image" onchange="validateFile(this)">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bolder">Deskripsi Portofolio:</label>
                                <textarea class="form-control rich-text-editor" id="deskripsi"
                                    name="deskripsi">{!! $data->deskripsi !!}</textarea>
                            </div>
                            <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>


</main>
@include('admin.script')
@endsection