
<?php $__env->startSection('home'); ?>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Konsep Desain</h1>
    </div>

    <div class="container">
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
        <?php endif; ?>
        <a href="<?php echo e(route('konsep-desain.add')); ?>" class=" btn btn-success mb-2"><i class="bi bi-plus"></i>Tambah Data</a>
        <div class="overflow-auto">

            <table id="users-table" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="col-1">#</th>
                        <th>id</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(function () {
            var table = $('#users-table').DataTable({
                language: {url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',},
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('konsep-desain.list')); ?>",
                columns: [
                    { 
                        data: 'DT_RowIndex', 
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                    },
                    {data: 'id', name: 'id', visible:false},
                    {data: 'judul', name: 'judul'},
                    {data: 'cover', name: 'cover', searchable: false,render: function( data, type, full, meta ) {
                        return "<img src=\"/storage/" + data + "\" height=\"50\"/>";
                    }},
                    {
                        data: 'action', 
                        name: 'action', 
                        searchable: false
                    },
                ],
                order: [[1, 'desc']]
            });
            
          });
        </script>
    </div>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ProjectX\makna-design\resources\views/admin/konsep-desain/index.blade.php ENDPATH**/ ?>