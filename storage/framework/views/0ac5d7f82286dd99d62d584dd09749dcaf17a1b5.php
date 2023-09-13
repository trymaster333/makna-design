
<?php $__env->startSection('home'); ?>
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
        <h1 class="h2">Kontak</h1>
    </div>

    <div class="container">
        <div class="col-sm-9">

            <div class="row">
                <form class="mb-5" action="<?php echo e(route('kontak.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="col-sm-12">
                        <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="judul" class="form-label fw-bolder">Nama Kontak:</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Nama Kontak"
                                value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label fw-bolder">Kontak:</label>
                            <input type="text" class="form-control" id="kontak" name="kontak"
                                placeholder="Username/Nomor HP" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label fw-bolder">Link:</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="https://..."
                                value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="icon" class="form-label fw-bolder">Icon:</label>
                            <img src="https://placehold.co/400" class="rounded d-block img-fluid"
                                style="width:100px; height:100px;" alt="icon" id="icon">
                                <label style="font-size: x-small; color: red;">max upload 10MB *</label>
                                <br>
                            <input type="file" name="image" id="image" onchange="validateFile(this)">
                        </div>

                        <button type="submit" class="btn btn-success"><i class="bi bi-plus"></i>
                            Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</main>
<script>
  function validateFile(input) {
    var file = input.files[0];
    var fileType = file.type;
    var maxSize = 2 * 1024 * 1024; // 2MB (adjust the size limit as needed)

    if (!fileType.startsWith("image/")) {
        // Display an error message or perform any other actions
        alert("File bukan gambar.");
        input.value = ""; // Clear the file input field
    }
    if (file.size > maxSize) {
        // Display an error message or perform any other actions
        alert("Maksimum upload gambar ukuran file 2MB.");
        input.value = ""; // Clear the file input field
    }

    var reader = new FileReader();
    var imgElement = document.getElementById("icon");

    reader.onload = function (e) {
        imgElement.setAttribute("src", e.target.result);
    };

    reader.readAsDataURL(file);
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/kontak/add.blade.php ENDPATH**/ ?>