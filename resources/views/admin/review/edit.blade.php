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
        <h1 class="h2">Review</h1>
    </div>

    <div class="container">
        <form class="mb-5" action="{{ route('review.update', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                                <label for="judul" class="form-label fw-bolder">Nama Client:</label>
                                <input type="text" class="form-control" id="nama_client" name="nama_client"
                                    placeholder="Nama Client" autofocus required value="{{ $data->nama_client }}">
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bolder">Review:</label>
                                <textarea class="form-control rich-text-editor" id="review" name="review"
                                    required>{{ $data->review }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label fw-bolder">Cover:</label>
                                <img src="{{ url('storage/'.$data->foto) }}" class="rounded d-block img-fluid"
                                    style="width:100px; height:100px;" alt="foto user" id="foto">
                                <label style="font-size: x-small; color: red;">max upload 2MB *</label>
                                <br>
                                <input type="file" name="image" id="image" onchange="validateFile(this)">
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


<script>
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
var imgElement = document.getElementById('foto');

reader.onload = function(e) {
imgElement.setAttribute('src', e.target.result);
};

reader.readAsDataURL(file);

}
</script>
@endsection