
<?php $__env->startSection('home'); ?>
<!-- Include the TinyMCE library -->
<script src="https://cdn.tiny.cloud/1/lgwdtkvnhtfje91arydiaouvcak2ezsvb1su3wmkr9mfkpsq/tinymce/6/tinymce.min.js"
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
        <h1 class="h2">About</h1>
    </div>

    <div class="container">
        <form class="mb-5" action="<?php echo e(route('about.update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">

                <div class="col-sm-2 fw-bolder">
                    Logo:
                    <img src="<?php echo e(url('storage/'.$data->image)); ?>" class="rounded mx-auto d-block img-fluid"
                        alt="logo image" id="logo">
                    <input type="file" name="image" id="image" onchange="validateFile(this)">

                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if(session()->has('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('success')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label for="nama_perusahaan" class="form-label fw-bolder">Nama Perusahaan:</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Nama Perusahaan" value="<?php echo e($data->judul); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="slogan" class="form-label fw-bolder">Slogan:</label>
                                <textarea class="form-control" id="slogan" name="slogan"
                                    rows="3"><?php echo e($data->slogan); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bolder">Deskripsi Perusahaan:</label>
                                <textarea class="form-control rich-text-editor" id="deskripsi" name="deskripsi"
                                    rows="3"><?php echo e($data->deskripsi); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>
                                Update</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>





</main>
<!-- Initialize the rich text editor -->
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
    var imgElement = document.getElementById('logo');

    reader.onload = function(e) {
        imgElement.setAttribute('src', e.target.result);
    };

    reader.readAsDataURL(file);

}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/about/edit.blade.php ENDPATH**/ ?>