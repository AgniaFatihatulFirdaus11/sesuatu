<?php

include "php/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $harapan = mysqli_real_escape_string(
        $koneksi,
        $_POST["harapan"]
    );

    $keinginan = mysqli_real_escape_string(
        $koneksi,
        $_POST["keinginan"]
    );

    $pesan = mysqli_real_escape_string(
        $koneksi,
        $_POST["pesan"]
    );


    $query = "INSERT INTO wishes
              (harapan, keinginan, pesan)
              VALUES
              ('$harapan', '$keinginan', '$pesan')";


    if (mysqli_query($koneksi, $query)) {

        echo "
        <script>
            alert('Wish berhasil disimpan 💖');
            window.location.href = 'menu.php';
        </script>
        ";

    } else {

        echo "Gagal menyimpan data: "
             . mysqli_error($koneksi);

    }

}

?>