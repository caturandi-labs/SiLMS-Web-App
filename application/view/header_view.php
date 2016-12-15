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
    <link href="<?php echo URL;?>css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo URL; ?>css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL;?>css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!-- <link href="../vendor/morrisjs/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="<?php echo URL;?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- como box chosen untuk search -->
    <link href="<?php echo URL;?>css/chosen.css" rel="stylesheet" type="text/css">    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <i class="fa fa-user fa-fw"></i>Nama User <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!-- /MENU AICE DARI SINI -->
                        
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#?>""><i class="fa fa-building fa-fw"></i> Identitas Perusahaan</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-gear fa-fw"></i> Kelola Karyawan<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#"><i class="fa fa-users fa-fw"></i>  Karyawan</a></li>
                                        <li><a href="#"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Golongan</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i> Kelola Pengguna</a>
                                </li>
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-ice-lolly-tasted fa-fw"></i> Kelola Es Krim</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-money fa-fw"></i> Kelola Harga</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-building-o fa-fw"></i> Kelola Cabang</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> Gudang<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-users fa-fw"></i> Kelola Supplier</a>
                                </li>
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-circle-arrow-down fa-fw"></i> Barang Masuk</a>
                                </li>
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-circle-arrow-up fa-fw"></i> Validasi Barang Keluar</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-cubes fa-fw"></i> Stok Es Krim</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-check-square-o fa-fw"></i> Stok Opname</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-trash fa-fw"></i> Es Krim Rusak</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-text fa-fw"></i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-users fa-fw"></i> Kelola Sales</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-male fa-fw"></i> Kelola Customer</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Faktur Penjualan</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-table fa-fw"></i> Rekap</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cart-arrow-down fa-fw"></i> Kasir<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Kelola Akun</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-money fa-fw"></i> Kas Harian</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-cart-plus fa-fw"></i> Penjualan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Akuntansi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Kelola Akun</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-file-text-o fa-fw"></i> Jurnal Umum</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Buku Besar</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-balance-scale fa-fw"></i> Neraca & Laba Rugi</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-list-alt fa-fw"></i> Penggajian</a>
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
