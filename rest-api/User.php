<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //update user
        include 'DBConfig.php';
        $conn = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);        
        
        //read JSON from client
        $json = file_get_contents('php://input', true);
        $obj = json_decode($json);

        //get JSON object
        $id = $obj->id;
        $nama_lengkap = $obj->nama_lengkap;
        $nomor_hp =$obj->nomor_hp;
        $email_user = $obj->email_user;
        $password_user = $obj->password_user;
        $foto_profil = $obj->$foto_profil;

        $query_update= "update user_tirta set nama_lengkap = '$nama_lengkap',
                                               nomor_hp = '$nomor_hp',
                                               email_user = '$email_user',
                                               password_user = $password_user,
                                               foto_profil = $foto_profil
                                           where id = '$id'";

        $query = mysqli_query($conn, $query_update);
        $check = mysqli_affected_rows($conn);
        $json_array = array();
        $response = "";

        if ($check > 0) {
            $response = array(
                'code' => 200,
                'status' => 'Data sudah diperbaharui!'
            );
        } else {
            $response = array(
                'code' => 400,
                'status' => 'Gagal diperbaharui!'
            );
        }

        print(json_encode($response));
        mysqli_close($conn);

    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
        //select spesific user
        include 'DBConfig.php';
        $conn = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

        $id = $_GET['id'];

        $query_update = "select * from user_tirta where id = '$id'";
        $result = mysqli_fetch_array(mysqli_query($conn, $query_update)); 
        $json_array = array();
        $response = "";

        if (isset($result)) {
            $data = mysqli_query($conn, $query_update);
            while ($row = mysqli_fetch_assoc($data)) {
                $json_array = $row;
            }
            $response = array(
                'code' => 200,
                'status' => 'Sukses',
                'user_list' => $json_array
            );
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Data tidak ditemukan!',
                'user_list' => $json_array
            );
        }
        print(json_encode($response));
        mysqli_close($conn);

    } elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        //delete spesific user
        include 'DBConfig.php';
        $conn = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

        $id = $_GET['id'];

        $query_delete = "delete from user_tirta where id = '$id'";
        $result = mysqli_query($conn, $query_delete);
        $check = mysqli_affected_rows($conn);
        $json_array = array();
        $response = "";

        if ($check > 0) {
            $response = array(
                'code' => 200,
                'status' => 'Data terhapus!'
            );
        } else {
            $response = array(
                'code' => 404,
                'status' => 'Gagal dihapus!'
            );
        }
        print(json_encode($response));
        mysqli_close($conn);
    }
?>