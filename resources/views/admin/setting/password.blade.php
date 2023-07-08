@extends('admin.layout')
@section('home')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Setting</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="{{ route('password.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="old_password" />
                </div>
                <div class="mb-3">
                    <label>New Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password" />
                </div>
                <div class="mb-3">
                    <label>New Password Confirmation<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password_confirmation" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>

</main>
@endsection