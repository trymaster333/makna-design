@extends('admin.layout')
@section('home')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">


<style>
    input[readonly].form-control,
    textarea[readonly].form-control {
        background-color: #fff;
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Konsep Desain</h1>
    </div>

    <div class="container">
        <div class="col-sm-9">

            <div class="row">
                <form class="mb-5" action="{{ route('konsep-desain.update', $data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-sm-12">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-bolder">Judul:</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Nama Kontak" value="{{ $data->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label fw-bolder">Gambar:</label>
                            <img src="{{ url('storage/'.$data->cover) }}" class="rounded d-block img-fluid"
                                style="width:100px; height:100px;" alt="icon" id="icon">
                            <input type="file" name="image" id="image" onchange="validateFile(this)">
                        </div>

                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                            Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</main>
<script>
    tinymce.init({
    selector: '.rich-text-editor',
    // Additional configuration options if needed
    height: 300
  });

  function validateFile(input) {
    var file = input.files[0];
    var fileType = file.type;
    var maxSize = 2 * 1024 * 1024; // 2MB (adjust the size limit as needed)
    
    if (!fileType.startsWith('image/')) {
        // Display an error message or perform any other actions
        alert('File bukan gambar.');
        input.value = ''; // Clear the file input field
    }
    if (file.size > maxSize) {
        // Display an error message or perform any other actions
        alert('Maksimum upload gambar ukuran file 2MB.');
        input.value = ''; // Clear the file input field
    }


    var reader = new FileReader();
    var imgElement = document.getElementById('icon');

    reader.onload = function(e) {
        imgElement.setAttribute('src', e.target.result);
    };

    reader.readAsDataURL(file);

}
</script>
@endsection