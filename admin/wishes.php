<?php

include "../php/config.php";

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM wishes ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Daftar Wish</title>

</head>

<body>

    <h1>🌟 Daftar Wish Umur 15</h1>

    <?php while ($data = mysqli_fetch_assoc($query)) { ?>

        <div>

            <h3>
                Wish #<?php echo $data["id"]; ?>
            </h3>

            <p>
                <b>Harapan:</b><br>
                <?php echo nl2br(htmlspecialchars($data["harapan"])); ?>
            </p>

            <p>
                <b>Keinginan:</b><br>
                <?php echo nl2br(htmlspecialchars($data["keinginan"])); ?>
            </p>

            <p>
                <b>Pesan:</b><br>
                <?php echo nl2br(htmlspecialchars($data["pesan"])); ?>
            </p>

            <small>
                <?php echo $data["tanggal"]; ?>
            </small>

            <hr>

        </div>

    <?php } ?>

</body>

</html>