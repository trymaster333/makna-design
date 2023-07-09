
<?php $__env->startSection('home'); ?>
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

        <form class="mb-5" action="<?php echo e(route('portofolio.update', $data->id)); ?>" method="POST"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if(session()->has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('success')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bolder">Judul:</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Judul Portofolio" value="<?php echo e($data->judul); ?>" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="icon" class="form-label fw-bolder">Cover:</label>
                                <img src="<?php echo e(url('storage/'.$data->cover)); ?>" class="rounded d-block img-fluid"
                                    style="height:200px;" alt="cover image upload" id="cover">
                                <input type="file" name="image" id="image" onchange="validateFile(this)">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bolder">Deskripsi Portofolio:</label>
                                <textarea class="form-control rich-text-editor" id="deskripsi"
                                    name="deskripsi"><?php echo $data->deskripsi; ?></textarea>
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
    tinymce.init({
    selector: '#deskripsi',
    plugins: 'image table advcode',
    height:500,
    images_upload_url: '/file-upload', // The URL to your Laravel route for handling image uploads
    images_upload_handler: function (blobInfo, success, failure) {
      var xhr, formData;

      xhr = new XMLHttpRequest();
      xhr.withCredentials = false;
      xhr.open('POST', '/file-upload'); // The URL to your Laravel route for handling image uploads

      xhr.onload = function () {
        var json;

        if (xhr.status != 200) {
          failure('HTTP Error: ' + xhr.status);
          return;
        }

        json = JSON.parse(xhr.responseText);

        if (!json || typeof json.location != 'string') {
          failure('Invalid JSON: ' + xhr.responseText);
          return;
        }

        success(json.location);
      };

      formData = new FormData();
      
      formData.append('file', blobInfo.blob(), blobInfo.filename());

      xhr.send(formData);
    }
  });

    function validateFile(input) {
var file = input.files[0];
var fileType = file.type;
var maxSize = 10 * 1024 * 1024; // 2MB (adjust the size limit as needed)

if (!fileType.startsWith('image/')) {
// Display an error message or perform any other actions
alert('File bukan gambar.');
input.value = ''; // Clear the file input field
}
if (file.size > maxSize) {
// Display an error message or perform any other actions
alert('Maksimum upload gambar ukuran file 10MB.');
input.value = ''; // Clear the file input field
}


var reader = new FileReader();
var imgElement = document.getElementById('cover');

reader.onload = function(e) {
imgElement.setAttribute('src', e.target.result);
};

reader.readAsDataURL(file);

}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/portofolio/edit.blade.php ENDPATH**/ ?>