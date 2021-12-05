<?php
    include("config.php");

    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];
        $jurusan = $_POST['departemen'];

        $sql = "UPDATE calon_mahasiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$gender', agama='$agama', sekolah_asal='$sekolah', departemen='$jurusan' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            ?> <script> 
                alert("Data telah disimpan.");
                window.location.href='./list-mahasiswa.php';
                </script> <?php
        }

        else {
            die("Gagal menyimpan.");
        }
    }

    else {
        die("Akses dilarang!");
    }
?>