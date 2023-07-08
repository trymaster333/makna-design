
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
        <h1 class="h2">FAQ (Sering ditanya)</h1>
    </div>
    <div class="container">
        <form class="mb-5" action="<?php echo e(route('faq.update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="deskripsi" class="form-label fw-bolder">Pertanyaan :</label>
                                <textarea class="form-control" id="pertanyaan" name="pertanyaan"
                                    required><?php echo e($data->pertanyaan); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bolder">Jawaban :</label>
                                <textarea class="form-control rich-text-editor" id="jawaban" name="jawaban"
                                    required><?php echo e($data->jawaban); ?></textarea>
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
    selector: '.rich-text-editor',
    plugins: 'image table advcode',
    height:300,
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
    },
    setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    }
  });

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/faq/edit.blade.php ENDPATH**/ ?>