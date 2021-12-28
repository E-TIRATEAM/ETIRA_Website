<?php

require ("../../koneksi.php");

session_start();

if(!isset($_SESSION['username'])) {
	echo "<script>
				alert('Login Terlebih Dahulu!!');
				document.location='../../login/index.php';	
			  </script>";	
}

$sesName = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Kelola Ulasan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script> -->
	<link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="../../fontawesome-free/css/all.min.css">
</head>
<body>


<div class="wrapper">
	
 <nav id="sidebar">
 	
 	 <div class="sidebar-header">
 	 	<h3>E-TIRA</h3>
 	 </div>
 	 <ul class="lisst-unstyled components">

 	 	<p>Admin Panel</p>
 	 	<li>
 	 		<a href="../kelola-konten/kelola_konten.php">Kelola Konten</a>
 	 	</li>
 	 	<li>
 	 		<a href="kelola_ulasan.php">Kelola Ulasan</a>
 	 	</li>
 	 	<li>
 	 		<a href="../kelola-akun/kelola_akun.php">Kelola Akun</a>
 	 	</li>
      <li>
      <a href="../../logout/logout.php">LOGOUT</a>
    </li>

 	 </ul>
 </nav>


<div id="content">
	
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container-fluid">
  		<button type="button" id="sidebarCollapse" class="btn  btn-info">
  			<i class="fas fa-align-left"></i>
  			<span>Toggle Sidebar</span>
  			
  		</button>
  	</div>
  	  </nav>

        <div class="col-md-10 p-5 pt-2">
    <h3><i class="mr-2"></i></i>ULASAN</h3><hr>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NAMA</th>
          <th scope="col">E-MAIL</th>
          <th scope="col">PESAN</th>
          <th colspan="2" class="text-center" scope="col">AKSI</th>
        </tr>
      </thead>
      <tbody>

          <?php 

            include_once '../../koneksi.php';

            $no = 1;

            $sql = mysqli_query($conn, "SELECT * FROM tb_ulasan");

            while($data = mysqli_fetch_array($sql)) { ?>

              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['pesan']; ?></td>

                <td>
                  <a href="hapus.php?id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toogle="tooltip" title="Delete"></i></a>
                </td> 

              </tr>

        <?php
            }
          ?>

      </tbody>
    </table>
    
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

</script>







</div>


</div>















</body>
</html>