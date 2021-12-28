<?php

require ("../koneksi.php");

session_start();

if(!isset($_SESSION['username'])) {
	echo "<script>
				alert('Login Terlebih Dahulu!!');
				document.location='../login/index.php';	
			  </script>";	
}

$sesName = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<link rel="stylesheet" href="style.css">
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
 	 		<a href="kelola-konten/kelola_konten.php">Kelola Konten</a>
 	 	</li>
 	 	<li>
 	 		<a href="kelola-ulasan/kelola_ulasan.php">Kelola Ulasan</a>
 	 	</li>
 	 	<li>
 	 		<a href="kelola-akun/kelola_akun.php">Kelola Akun</a>
 	 	</li>
		  <li>
      <a href="../logout/logout.php">LOGOUT</a>
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

<br><br>
    <h2>SELAMAT DATANG ADMIN</h2>

  <div class="line"></div>
  <h3>di Server Website Tirta Agung</h3>


</div>


</div>












<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

</script>


</body>
</html>