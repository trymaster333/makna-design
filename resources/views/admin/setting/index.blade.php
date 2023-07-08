@extends('admin.layout')
@section('home')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Setting</h1>
    </div>

    <div class="card">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <div class="card-body overflow-auto">
            <table class="display-6">
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        :
                    </td>
                    <td class=" fw-bold">
                        {{$user->name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        :
                    </td>
                    <td class=" fw-bold">
                        {{$user->username}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        :
                    </td>
                    <td class="fw-bold">
                        <label for="" class="mx-auto">{{$user->email}}</label>
                    </td>
                </tr>
            </table>
        </div>

    </div>
    <div class="mt-5">
        <a href="{{route('setting.edit')}}"><button type="button" class="btn btn-primary btn-lg">Ganti
                Email</button></a>
        <a href="{{route('setting.password')}}"><button type="button" class="btn btn-secondary btn-lg">Ganti
                Password</button></a>
    </div>

</main>
@endsection