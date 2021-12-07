<?php
	require 'connection.php';
	
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$GetTable = mysqli_query($Conn, "SELECT * FROM data_users WHERE Username = '$Username' AND Password = '$Password'");
	$GetData = mysqli_fetch_array($GetTable);

	if ($Username == "" && $Password == "") {
		echo "
			<script>
				alert('Mohon lengkapi username dan password terlebih dahulu!');
				document.location = 'index.php';
			</script>
		";
	}
	else if ($Username == "") {
		echo "
			<script>
				alert('Mohon lengkapi username terlebih dahulu!');
				document.location = 'index.php';
			</script>
		";
	}
	else if ($Password == "") {
		echo "
			<script>
				alert('Mohon lengkapi password terlebih dahulu!');
				document.location = 'index.php';
			</script>
		";
	}
	else if ($Username == $GetData['Username'] && $Password == $GetData['Password']) {
		echo "
			<script>
				alert('Selamat datang di server website Tirta Agung, $Username!');
				document.location = 'dashboard.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('Username atau password yang kamu masukkan tidak valid!');
				document.location = 'index.php';
			</script>
		";
	}
?>