<?php
    include("config.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM calon_mahasiswa WHERE id=$id";
        $query = mysqli_query($db, $sql);
        
        if ($query) {
            header('Location: list-mahasiswa.php');
        }

        else {
            die("Gagal menghapus.");
        }
    }

    else {
        die("Akses dilarang!");
    }
?>