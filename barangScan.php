<?php
    include "koneksi.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <!-- <link rel="icon" type="image/png" href="assets/img/favicon.ico"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Auto 2000</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="home.php" class="simple-text">
                    <img src="images/logoHeader.png" width="200px" height="40px"/>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="barang.php">
                        <i class="pe-7s-plus"></i>
                        <p>Barang</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="pe-7s-search"></i>
                        <p>Search Barang</p>
                    </a>
                </li>
                <li>
                    <a href="list.php">
                        <i class="pe-7s-note2"></i>
                        <p>List Barang</p>
                    </a>
                </li>
                <li class="active">
                    <a href="barangScan.php">
                        <i class="pe-7s-note2"></i>
                        <p>Barang Hasil Scan</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Hasil Barang</a>
                </div>
                <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12"><br>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Tujuan</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ol>
                                                    <li><a href="hasilTujuan.php?tujuan=<?php echo "Paster" ?>">Truk Paster</a></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Tujuan</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ol>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_barang" or die(mysqli_error());
                                                        $print = mysqli_query($con, $sql);
                                                    ?>
                                                    <li><a href="hasilTujuan.php?tujuan=<?php echo "Cimahi" ?>">Truk Cimahi</a></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Tujuan</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ol>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_barang" or die(mysqli_error());
                                                        $print = mysqli_query($con, $sql);
                                                    ?>
                                                    <li><a href="hasilTujuan.php?tujuan=<?php echo "Setia Budi" ?>">Truk Setia Budi</a></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Tujuan</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ol>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_barang" or die(mysqli_error());
                                                        $print = mysqli_query($con, $sql);
                                                    ?>
                                                    <li><a href="hasilTujuan.php?tujuan=<?php echo "Asia Afrika" ?>">Truk Asia Afrika</a></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Tujuan</h3>
                                            </div>
                                            <div class="panel-body">
                                                <ol>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_barang" or die(mysqli_error());
                                                        $print = mysqli_query($con, $sql);
                                                    ?>
                                                    <li><a href="hasilTujuan.php?tujuan=<?php echo "Cibiru" ?>">Truk Cibiru</a></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <fieldset>
                                    <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                                        <div class="item form-group">
                                            <label class="control-label col-md-4" for="tgl_masuk">Tanggal Masuk<span class="required"></span></label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="tgl_masuk" class="form-control col-md-7 col-xs-12" name="tgl_masuk" type="date" value="<?php echo date("d-m-Y");?>" required="required">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                        <div class="col-md-6 col-md-offset-5">
                                            <input type="submit" name="cari" value="Cari" class="btn btn-primary">
                                            <input type="reset" value="Reset" class="btn btn-primary">
                                        </div>
                                        </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Detail Barang</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th><div align="center">No Barang</div></th>
                                        <th><div align="center">Nama Barang</div></th>
                                        <th><div align="center">Lebar</div></th>
                                        <th><div align="center">Panjang</div></th>
                                        <th><div align="center">Tinggi</div></th>
                                        <th><div align="center">Berat</div></th>
                                        <th><div align="center">Harga</div></th>
                                        <th><div align="center">Tanggal</div></th>
                                        <th><div align="center">Qty</div></th>
                                        <th><div align="center">Tot. Harga</div></th>
                                        <th><div align="center">Sisa Volume Truck</div></th>
                                        <th><div align="center">Tujuan</div></th>
                                    </thead>
                                    <tbody>

                                        <?php
                                        if (isset($_POST['tgl_masuk'])) {
                                            $tgl=$_POST['tgl_masuk'];
                                            $result = "SELECT * FROM tb_barang WHERE tgl_masuk='$tgl' AND status='True'" or die(mysqli_error());
                                            $print = mysqli_query($con, $result);
                                        } else {
                                            $result = "SELECT * FROM tb_barang WHERE status='True'" or die(mysqli_error());
                                            $print = mysqli_query($con, $result);
                                        
                                        }
                                        
                                        while($data = mysqli_fetch_array($print)) {
                                            $id_barang=$data['id_barang'];
                                            $nama_barang = $data['nama_barang'];
                                            $lebar = $data['lebar'];
                                            $panjang = $data['panjang'];
                                            $tinggi = $data['tinggi'];
                                            $berat = $data['berat'];
                                            $harga = $data['harga'];
                                            $tujuan = $data['tujuan'];
                                            $qty = $data['qty'];
                                            $total = $data['harga'] * $data['qty'];
                                            $truck = $data['truck'];
                                            $volume = $data['volumBarang'];
                                            $sisa = $data['sisaVTB'];
                                        ?>

                                        <tr>
                                            <td><div align="center"><?php echo $data['id_barang']; ?></div></td>
                                            <td><div align="center"><?php echo $data['nama_barang']; ?></div></td>
                                            <td><div align="center"><?php echo $data['lebar']; ?> cm</div></td>
                                            <td><div align="center"><?php echo $data['panjang']; ?> cm</div></td>
                                            <td><div align="center"><?php echo $data['tinggi']; ?> cm</div></td>
                                            <td><div align="center"><?php echo $data['berat']; ?> kg</div></td>
                                            <td><div align="center">Rp <?php echo $data['harga']; ?></div></td>
                                            <td><div align="center"><?php echo $data['tgl_masuk']; ?></div></td>
                                            <td><div align="center"><?php echo $data['qty']; ?></div></td>
                                            <td><div align="center">Rp <?php echo $total; ?></div></td>
                                            <td><div align="center"><?php echo number_format((float)$sisa);?> %</div></td>
                                            <td><div align="center"><a href="hasilTujuan.php?tujuan=<?php echo $data['tujuan']; ?>"><?php echo $data['tujuan']; ?></a></div></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-left">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a>Auto 2000</a>
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
