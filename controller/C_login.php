<?php
include_once 'C_koneksi.php';
// buat file di folder controller, nama filenya C_login.php
// didalam file tsb memiliki dua fungsi atau method
//1. register
//2. login 

class C_login{
    //untuk windows, MCOS, ubuntu
    //ini adalah  fungsi dan method untuk memasukan data ke dalam tabel user 
    function register($id,$nama,$email,$pass,$role){
        //instansisasi object atau membuat object dar class C_koneksi
        $conn= new C_koneksi();
       //ini adalah perintah untuk memasukan data kedalam tabel user 
        $sql = "INSERT INTO baru VALUES ('$id','$nama', '$email', '$pass', '$role','')";

        // var_dump($sql);
       //ini code eksekutor 

      $query = mysqli_query($conn->conn(), $sql);

      if ($query) {
          echo "data berhasil ditambahkan";
      }else{
          echo "data gagal ditambahkan";
      }
    }

    function login(){


    }
}