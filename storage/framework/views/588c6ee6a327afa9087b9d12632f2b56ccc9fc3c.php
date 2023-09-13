
<?php $__env->startSection('home'); ?>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Include the TinyMCE library -->


<script src="https://cdn.tiny.cloud/1/lgwdtkvnhtfje91arydiaouvcak2ezsvb1su3wmkr9mfkpsq/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxH2s2VPtigbYWPLoyYXM9klbxJn8OVKY&libraries=places&region=ID&language=id-ID&callback=initMap">
</script>

<style>
    input[readonly].form-control,
    textarea[readonly].form-control {
        background-color: #fff;
    }
</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Proyek</h1>
    </div>

    <div class="container">
        <form class="mb-5" action="<?php echo e(route('daftar-proyek.update', $data->id)); ?>" method="POST"
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
                                    placeholder="Judul Portofolio" value="<?php echo e($data->judul); ?>" autofocus required>
                            </div>
                            <div class="mb-3">
                                <label for="anggaran" class="form-label fw-bolder">Estimasi Anggaran:</label>
                                <input type="text" class="form-control" id="anggaran" name="anggaran"
                                    placeholder="Rp. ___ ___" value="<?php echo e($data->anggaran); ?>" required>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="luas_tanah" class="form-label fw-bolder">Luas Tanah:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control luas" id="luas_tanah"
                                                name="luas_tanah" placeholder="Luas Tanah / m2"
                                                value="<?php echo e($data->luas_tanah); ?>" required>
                                            <span class="input-group-text" id="basic-addon2">/m2</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="luas_bangunan" class="form-label fw-bolder">Luas Bangunan:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control luas" id="luas_bangunan"
                                                name="luas_bangunan" placeholder="Luas Bangunan / m2"
                                                value="<?php echo e($data->luas_bangunan); ?>" required>
                                            <span class="input-group-text" id="basic-addon2">/m2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="jenis" class="form-label fw-bolder">Jenis Bangunan:</label>
                                        <select type="text" class="form-control" id="jenis" name="jenis"
                                            placeholder="Luas Bangunan / m2">
                                            <option value="Bangun Baru" <?php echo e($data->jenis == 'Bangun Baru' ? 'selected' :
                                                ''); ?>>Bangun Baru</option>
                                            <option value="Renovasi" <?php echo e($data->jenis == 'Renovasi' ? 'selected' : ''); ?>>Renovasi</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="tipe" class="form-label fw-bolder">Tipe Bangunan:</label>
                                        <select class="form-control" id="tipe" name="tipe"
                                            placeholder="Luas Bangunan / m2">
                                            <option value="Rumah" <?php echo e($data->tipe == 'Rumah' ? 'selected' : ''); ?>>Rumah
                                            </option>
                                            <option value="Apartment" <?php echo e($data->tipe == 'Apartment' ? 'selected' : ''); ?>>Apartment</option>
                                            <option value="Kantor" <?php echo e($data->tipe == 'Kantor' ? 'selected' : ''); ?>>Kantor</option>
                                            <option value="Restaurant" <?php echo e($data->tipe == 'Restaurant' ? 'selected' : ''); ?>>Restaurant</option>
                                            <option value="Komersial/Retail" <?php echo e($data->tipe == 'Komersial/Retail' ?
                                                'selected' : ''); ?>>Komersial/Retail</option>
                                            <option value="Lain-lain" <?php echo e($data->tipe == 'Lain-lain' ? 'selected' : ''); ?>>Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bolder">Lokasi:</label>
                                <input type="text" class="form-control" id="autocomplete" name="lokasi"
                                    placeholder="cari lokasi" value="<?php echo e($data->lokasi); ?>" async defer>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="tanggal" class="form-label fw-bolder">Tanggal Pengerjaan:</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="<?php echo e($data->tanggal); ?>" required>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="tipe" class="form-label fw-bolder">Status Proyek:</label>
                                        <select class="form-control" id="status" name="status"
                                            placeholder="Luas Bangunan / m2">
                                            <option value="0" <?php echo e($data->status == '0' ? 'selected' : ''); ?>>
                                                Dalam Penegerjaan
                                            </option>
                                            <option value="1" <?php echo e($data->status == '1' ? 'selected' : ''); ?>>
                                                Selesai
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bolder">Keterangan:</label>
                                <textarea class="form-control rich-text-editor" id="deskripsi"
                                    name="keterangan"><?php echo e($data->keterangan); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="data_penunjang" class="form-label fw-bolder">Data Penunjang:</label>
                                <br><?php if($data->nama_file!=null): ?>
                                <a href="<?php echo e(url('storage/'.$data->data_penunjang)); ?>">
                                    <?php echo e($data->nama_file); ?>

                                </a>
                                <?php endif; ?>

                                <br>
                                <input type="file" name="data_penunjang" id="data_penunjang">
                                <br>
                                <label style="font-size: x-small; color: red;">max upload 10MB *</label>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('anggaran');
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

    const regex = /[^\d.]|\.(?=.*\.)/g;
const subst=``;



$('.luas').keyup(function(){
const str=this.value;
const result = str.replace(regex, subst);
this.value=result;

});

const fileInput = document.getElementById('data_penunjang');

fileInput.addEventListener('change', event => {
  const file = fileInput.files[0];

  const maxFileSizeInMB = 10;
  const maxFileSizeInKB = 1024 * 1024 * maxFileSizeInMB;

  if (file.size > maxFileSizeInKB) {
    alert(`Maksimum ukran file ${maxFileSizeInMB}MB atau kurang.`);
    fileInput.value = ""; // Clear the file input field
  }
});
    //   var input = document.getElementById('autocomplete');
    //   var autocomplete = new google.maps.places.Autocomplete(input);

</script>
<?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/daftar-proyek/edit.blade.php ENDPATH**/ ?>