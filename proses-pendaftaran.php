<?php
    include("config.php");

    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];
        $jurusan = $_POST['departemen'];

        $sql = "INSERT INTO calon_mahasiswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, departemen) VALUE ('$nama', '$alamat', '$gender', '$agama', '$sekolah', '$jurusan')";
        $query = mysqli_query($db, $sql);

        if ($query) {
            ?> <script> 
                alert("Data telah disimpan.");
                window.location.href='./index.php?status=sukses';
                </script> <?php
        }

        else {
            ?> <script>
                alert("Data gagal disimpan.");
                window.location.href='./index.php?status=gagal';
                </script> <?php
        }
    }

    else {
        die("Akses dilarang!");
    }
?>