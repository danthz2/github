<?php
if ($bg->num_rows() > 0) :
    $bgg = $bg->row();
    $img = $bgg->img;
?>
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('<?= base_url('/assets/home/img/bg/' . $bgg->img) ?>'); height: 350px;"></div>
<?php endif; ?>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="<?= base_url('/assets/home/img/' . $logo) ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title"><?= $sekolah->nama ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="profile-tabs mt-2">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#sejarah" role="tab" data-toggle="tab">
                                    <i class="material-icons">history</i> Sejarah
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#visi" role="tab" data-toggle="tab">
                                    <i class="material-icons">how_to_reg</i> Visi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#misi" role="tab" data-toggle="tab">
                                    <i class="material-icons">directions_run</i> Misi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tujuan" role="tab" data-toggle="tab">
                                    <i class="material-icons">show_chart</i> Tujuan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#motto" role="tab" data-toggle="tab">
                                    <i class="material-icons">favorite</i> Motto
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kurikulum" role="tab" data-toggle="tab">
                                    <i class="material-icons">menu_book</i> Kurikulum
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#guru" role="tab" data-toggle="tab">
                                    <i class="material-icons">face</i> Guru
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center" id="sejarah">
                    <div class="description text-center text-capitalize">
                        <?= $sejarah ?>
                    </div>
                </div>
                <div class="tab-pane text-center" id="visi">
                    <div class="description text-center text-capitalize">
                        <?= $visi ?>
                    </div>
                </div>
                <div class="tab-pane text-center" id="misi">
                    <div class="description text-left text-capitalize">
                        <?= $misi ?>
                    </div>
                </div>
                <div class="tab-pane text-center" id="tujuan">
                    <div class="description text-left text-capitalize">
                        <?= $tujuan ?>
                    </div>
                </div>
                <div class="tab-pane text-center" id="motto">
                    <div class="description text-left text-capitalize">
                        <div class="text-center">
                            <strong><?= $motto ?></strong>
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center" id="kurikulum">
                    <div class="description text-center text-capitalize">
                        <?= $kurikulum ?>
                    </div>
                </div>
                <div class="tab-pane text-center" id="guru">
                    <div class="text-center text-capitalize">

                        <div class="container mt-5 ">
                            <div class="card">

                                <div class="card-header card-header-danger">
                                    <h2 class="card-title text-center ">Profil Guru</h2>

                                </div>
                                <!-- Kepsek & WaKepsek -->
                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-6 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/lina.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Hj. Herlina, S.Pd <br> Jabatan : Kepala Sekolah </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/hasunah.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Hasunah, S.Pd  <br> Jabatan : Wakil Kepala Sekolah </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>


                                    <div class="row">
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/chairunisa.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Chairunisa, S.Pd <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/ela.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Siti Laela Sari, S.Pd <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/Ida.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Ida Farida, S.Pd
                                                        <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/istila.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Istilah, S.Pd
                                                        <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/marsih.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Marsih, S.Pd <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/maryati.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Kusmi Maryati, S.Pd <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/rahma.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Siti Rahma, S.Pd
                                                        <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/rei.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Reihana Baldjun, S.Pd
                                                        <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/Yanti.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Yanti Kusmirani, S.Pd
                                                        <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                                <img class="card-img-top" src="<?= base_url('') ?>assets/img/guru/zahro.png" rel="nofollow" alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title">Nama : Zahro, S.Pd <br> Jabatan : Guru </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex justify-content-center text-center">
                                            <div class="card" style="width: 15rem;">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>