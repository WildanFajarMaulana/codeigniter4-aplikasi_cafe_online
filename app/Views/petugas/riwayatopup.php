<?= $this->extend('template/template_admin'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-history mr-2"></i> RIWAYAT TOP UP</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php if(session()->getFlashdata('pesan')){ ?>
    <div class="alert alert-primary"><?= session()->getFlashdata('pesan') ?></div>
    <?php } ?>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <!-- <div class="card-header border-0">
                <button id="dropdownMenuButton" type="button" class="btn dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #dddddd;">Nama</button>
                <button id="dropdownMenuButton" type="button" class="btn dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #dddddd;">Email</button>
                <button id="dropdownMenuButton" type="button" class="btn dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #dddddd;">No. Hp</button>
                <button id="dropdownMenuButton" type="button" class="btn dropdown-toggle mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #dddddd;">Tanggal</button>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Deby Saputra Pratama</a>
                  <a class="dropdown-item" href="#">Rangga Adi Pradana</a>
                </div>

              </div> -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. Hp</th>
                                        <th>Jumlah Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($riwayatTopUp){?>

                                    <?php $no=1;foreach($riwayatTopUp as $tp){ ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $tp['nama']?></td>
                                        <td><?= $tp['email']?></td>
                                        <td><?= $tp['nomor']?></td>
                                        <td><?= $tp['r_saldo']?></td>
                                        <td><?= $tp['created_at']?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php }else{?>
                                    <div
                                        style="position:absolute;margin: auto;left: 50%;top: 150%;transform: translate(-50%, -50%); text-align:center">
                                        <p>Belum Ada Riwayat Top Up</p>
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

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <?= $pager->links('usersaldo','paging') ?>
    </div>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>