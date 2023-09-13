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
        <h1 class="h2">Paket Harga</h1>
    </div>

    <div class="container">
        <form class="mb-5" action="{{ route('paket-harga.update', $data->id) }}" method="POST"
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
                                <label for="judul" class="form-label fw-bolder">Nama Paket:</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Nama Paket"
                                    autofocus required value="{{ $data->judul }}">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <label for="judul" class="form-label fw-bolder">Harga:</label>

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="harga" name="harga"
                                            placeholder="Rp." required value="{{$data->harga}}">
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-select" name="satuan" aria-label="Default select example">
                                            <option selected>-</option>
                                            <option value="/M2 Bangunan" @selected($data->satuan == '/M2 Bangunan')>/M2
                                                Bangunan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bolder">Deskripsi:</label>
                                <textarea class="form-control rich-text-editor" id="deskripsi"
                                    name="deskripsi">{{ $data->deskripsi }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="bi bi-plus"></i>
                                Tambah</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>


</main>
<script>
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('harga');
    document.getElementById('harga').value="{{ $data->harga }}";
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>
@include('admin.script')
@endsection