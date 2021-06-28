<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: linear-gradient(rgb(58,86,183) 42%, rgb(117,197,255) 86%);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-book-reader" style="transform: perspective(0px) translate(2px) scale(1.25) skew(-3deg);"></i></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 15px;">UBYS Dashboard</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="dashboard.php"><i class="fas fa-table"></i><span style="font-size: 15.6px;">Öğrenci</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="table.php"><i class="fas fa-table"></i><span style="font-size: 15.6px;">Öğretmen</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="table2.php"><i class="fas fa-table"></i><span style="font-size: 15.6px;">Dersler</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="table4.php"><i class="fas fa-table"></i><span style="font-size: 15.6px;">Ders Seçimleri</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="table3.php"><i class="fas fa-table"></i><span style="font-size: 15.6px;">Duyurular</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="badge badge-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Ders İşlemleri </h3>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#ekle">Yeni Ders</button>
                    <br>
                    <br>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Subjects Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Ders İsim</th>
                                            <th>Ders Kodu</th>
                                            <th>Hoca İsim</th>
                                            <th>Kredi</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "baglan.php";
                                        $sorgu = $baglan->prepare("SELECT * FROM hoca JOIN ders ON hoca.hoca_id = ders.hoca_id");
                                        $sorgu->execute();
                                        while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>
                                                <td><img class="rounded-circle mr-2" width="30" height="30" src="asset/img/avatars/dictionary.png"><?php echo $sonuc['ders_adi'] ?></td>
                                                <td><?php echo $sonuc['ders_kodu'] ?></td>
                                                <td><?php echo $sonuc['hoca_isim'] ?></td>
                                                <td><?php echo $sonuc['kredi'] ?>P</td>
                                                <td>
                                                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#ders_duzenle<?= $sonuc['ders_id'] ?>" href="#ders_duzenle<?= $sonuc['ders_id'] ?>"><em class="fa fa-pencil"></em></button>
                                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#sil<?= $sonuc['ders_id'] ?>" href="#sil<?= $sonuc['ders_id'] ?>"><em class="fa fa-trash"></em></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Ders İsim</strong></td>
                                            <td><strong>Ders Kodu</strong></td>
                                            <td><strong>Hoca İsim</strong></td>
                                            <td><strong>Kredi</strong></td>
                                            <td><strong>İşlem</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EKLE Modal -->
            <div class="modal fade" id="ekle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Ders Ekleme Sayfası</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="d_ekle.php" method="POST">

                            <label>Ders İsim:</label>
                                    <input class="form-control" type="text" class="field left" value="" name="ders_adi" required>
                                    <br>
                                    <label>Ders Kodu:</label>
                                    <input class="form-control" type="text" value="" name="ders_kodu" required>
                                    <br>
                                    <label>Hoca İsim:</label>
                                    <select class="form-control" name="hoca_isim" required>
                            <?php
                            include "baglan.php";
                            $sorgu = $baglan->prepare("SELECT * FROM hoca ");
                            $sorgu->execute();
                            while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $sonuc['hoca_id']; ?>"><?php echo $sonuc['hoca_isim'] ?></option>

                            <?php } ?>
                        </select>
                                    <br>
                                    <label>Kredi:</label>
                                    <input class="form-control" type="number" value="" name="kredi" required>
                                    <br>
                                <a href="d_ekle.php"><button type="submit" class="btn btn-success ">Ekle</button></a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <?php
            include "baglan.php";
            $sorgu = $baglan->prepare("SELECT * FROM hoca JOIN ders ON hoca.hoca_id = ders.hoca_id");
            $sorgu->execute();
            while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                $ders_id = $sonuc['ders_id'];
            ?>
                <!-- DÜZENLE Modal -->
                <div class="modal fade" id="ders_duzenle<?= $sonuc['ders_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Ders Düzenleme</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="ders_duzenle.php?ders_id=<?= $sonuc["ders_id"] ?>" method="POST">

                                    <label>Ders İsim:</label>
                                    <input class="form-control" type="text" class="field left" value="<?php echo $sonuc['ders_adi']; ?>" name="ders_adi" required>
                                    <br>
                                    <label>Ders Kodu:</label>
                                    <input class="form-control" type="text" value="<?php echo $sonuc['ders_kodu']; ?>" name="ders_kodu" required>
                                    <br>
                                    <label>Hoca İsim:</label>
                                    <input class="form-control" type="text" value="<?php echo $sonuc['hoca_isim']; ?>" name="hoca_isim" readonly>
                                    <br>
                                    <label>Kredi:</label>
                                    <input class="form-control" type="number" value="<?php echo $sonuc['kredi']; ?>" name="kredi" required>
                                    <br>

                                    <a href="ders_duzenle.php?ders_id=<?= $sonuc["ders_id"] ?>"><button type="submit" class="btn btn-success ">Düzenle</button></a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Sil Modal-->
            <?php
            include "baglan.php";
            $sorgu = $baglan->prepare("SELECT * FROM ders");
            $sorgu->execute();
            while ($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                $ders_id = $sonuc['ders_id'];
            ?>
            <div class="modal fade" id="sil<?= $sonuc["ders_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sil</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body"> <b><?= $sonuc['ders_adi'] ?></b> 'adlı dersi silmek istediğinizden emin misiniz?</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary pull-left mx-4" type="button" data-dismiss="modal">İptal
                                </button>
                                <a class="btn btn-danger pull-right mx-4" href="ders_sil.php?ders_id=<?= $sonuc["ders_id"] ?>">Sil</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Dashboard 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>