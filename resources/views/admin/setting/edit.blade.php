@extends('admin.layout')
@section('home')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Include the TinyMCE library -->
{{-- <script src="https://cdn.tiny.cloud/1/lgwdtkvnhtfje91arydiaouvcak2ezsvb1su3wmkr9mfkpsq/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script> --}}
{{-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> --}}
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
        <h1 class="h2">Setting</h1>
    </div>

    <div class="container">
        <form class="mb-5" action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
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
                            @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bolder">Nama:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama"
                                    autofocus required value="{{ $data->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label fw-bolder">Username:</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" autofocus required value="{{ $data->username }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bolder">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email@email.com" autofocus required value="{{ $data->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bolder">Masukkan Password:</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" autofocus required value="">
                            </div>
                            <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                                Ubah</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

</main>



@endsection