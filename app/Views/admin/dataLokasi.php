<?= $this->extend('template/template_admin'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-location-arrow mr-2"></i> DATA LOKASI</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <?php if(session()->getFlashdata('pesan')){ ?>
            <div class="alert alert-primary"><?= session()->getFlashdata('pesan') ?></div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header border-0">
                            <a class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"
                                style="border-radius: 15px; float: right;"><i class="fas fa-plus"
                                    style="margin-right: 5px; "></i>Create</a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Lokasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($lokasi){?>
                                    <?php $no=1; foreach($lokasi as $l){ ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $l['lokasi'] ?></td>

                                        <td><a class="btn button-update" data-id="<?= $l['id']?>" data-toggle="modal"
                                                data-target="#modalUpdate" title="Edit"><i class="fas fa-pen"></i></a>
                                        </td>
                                        <td><a href="/admin/deleteLokasi/<?= $l['id']?>.html"
                                                onclick="return confirm('Yakin Untuk Menghapusnya?');" class="btn"
                                                data-toggle="tooltip" title="Delete"><i
                                                    class="fas fa-trash-alt"></i></a></td>


                                    </tr>
                                    <?php }?>
                                    <?php }else{?>
                                    <div
                                        style="position:absolute;margin: auto;left: 50%;top: 150%;transform: translate(-50%, -50%); text-align:center">
                                        <p>Anda Belum
                                            Menambahkan Lokasi</p>
                                    </div>
                                    <?php }?>

                                    <!-- <tr>
                                        <th class="pag" colspan="10">
                                            <div class="pagination">
                                                <a href=""><i class="fas fa-chevron-left"></i></a>
                                                <a href="">1</a>
                                                <a href="">2</a>
                                                <a href="">3</a>
                                                <a href="">4</a>
                                                <a href="">5</a>
                                                <a href="">6</a>
                                                <a href=""><i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </th>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Create Modal -->
                        <div class="modal fade" id="modalCreate" role="dialog" aria-labelledby="createModal"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="/admin/tambahLokasi.html" method="post">
                                            <?= csrf_field() ?>
                                            <div class="form-group">
                                                <label>Lokasi</label>
                                                <input type="text" name="lokasi" class="form-control">
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Update Modal -->
                        <div class="modal fade" id="modalUpdate" role="dialog" aria-labelledby="createModal"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="/admin/editLokasi.html" method="post">
                                            <?= csrf_field() ?>
                                            <div class="form-group">
                                                <label>Lokasi</label>
                                                <input type="hidden" name="id" id="id" class="form-control">
                                                <input type="text" name="lokasi" id="lokasi" class="form-control">
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Pop Up Profile -->
                        <div class="modal fade" id="modalDetail" role="dialog" aria-labelledby="detailModal"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">PROFILE</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="pfimg">
                                            <img class="pfmodal" src="/img/profile.jpg" alt="">
                                            <h4 class="txtname">Rangga Adi Pradana</h4>
                                        </div>

                                        <div class="form-group">
                                            <p><i class="far fa-envelope fa-xl"></i>ranggapradana161@gmail.com</p>
                                        </div>

                                        <div class="form-group">
                                            <p><i class="fas fa-mobile-alt fa-xl"></i>08xxxxxxxxxx</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <?= $pager->links('userlokasi','paging') ?>
    </div>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
$('.button-update').on('click', function() {


    let id = $(this).attr('data-id')


    $.ajax({
        type: "get",
        url: '/admin/getLokasiByid.html',
        data: {
            id: id

        },
        dataType: "json",
        success: function(response) {

            $('#id').val(response.id)
            $('#lokasi').val(response.lokasi)

        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        }
    });
})
</script>
<?= $this->endSection(); ?>