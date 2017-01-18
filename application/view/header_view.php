<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi LMS</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="<?php echo URL; ?>css/bootstrap-material-design.css"> -->
    <link href="<?php echo URL;?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL;?>css/formValidation.min.css">
    <!-- MetisMenu CSS -->
    <link href="<?php echo URL; ?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL;?>css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <!-- <link href="../vendor/morrisjs/morris.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo URL; ?>css/sweetalert.css">
    <link rel="stylesheet" href="<?php echo URL; ?>css/datatables.bootstrap.css">
    
    <!-- Custom Fonts -->
    <link href="<?php echo URL;?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="<?php echo URL; ?>css/datatables.bootstrap.css"> -->
    <link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo URL; ?>css/chosen.css">
    <style>
        .chosen-container, .chosen-container-single{
            width: 300px;
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SiLMS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php echo isset($_SESSION['username']) ? $_SESSION['username']:'User';  ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <div style=" padding :30px;">
                            <img src="<?php echo URL; ?>img/logos.png" style="width:200px;" class="img-responsive img-rounded">
                        </div>
                        <li>
                            <a href="<?php echo URL; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-education"></i>  Akademik<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL; ?>tahunajaran/"><i class="glyphicon glyphicon-calendar fa-fw"></i> Tahun Ajaran</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>kelas/"><i class="fa fa-building fa-fw"></i> Data Kelas</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>prodi/"><i class="fa fa-building fa-fw"></i> Data Prodi</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>jadwal/"><i class="glyphicon glyphicon-th fa-fw"></i> Jadwal Perkuliahan</a>
                                </li>
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-bookmark fa-fw"></i> Nilai Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL ?>absen/"><i class="glyphicon glyphicon-th-list fa-fw"></i> Absensi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL; ?>mahasiswa/"><i class="fa fa-users fa-fw"></i> Mahasiswa</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>dosen/"><i class="glyphicon glyphicon-user fa-fw"></i> Dosen</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>matakuliah/"><i class="glyphicon glyphicon glyphicon-list-alt fa-fw"></i>Mata Kuliah</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>matakuliahjurusan/"><i class="glyphicon glyphicon glyphicon-list-alt fa-fw"></i>Mata Kuliah Jurusan</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>semester/"><i class="fa fa-cubes fa-fw"></i> Semester</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>ruang/"><i class="fa fa-check-square-o fa-fw"></i> Ruang</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-text fa-fw"></i> Personalisasi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL; ?>user/"><i class="fa fa-users fa-fw"></i> Pengguna Aplikasi</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>level/"><i class="fa fa-signal fa-fw"></i> Level User</a>
                                </li> 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
