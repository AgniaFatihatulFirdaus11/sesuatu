<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri 📸</title>
    <link rel="stylesheet" href="css/galeri.css">

</head>

<body>
    <div class="container">
    <audio id="bg-music" src="asset/music/abadi.mp3" loop></audio>
    <h1>📸 Our Memories</h1>
    <div class="container-galeri fade-in">
        <div class="grid-galeri">
        <div class="kolom kanan">
            <div class="box">
                <img src="asset/images/dia/9e.jpg"  class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/home.jpg" class="memories" alt=""><br>
                <h2>AGNIA'S HOUSE</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/Hzia1.jpg" class="memories" alt=""><br>
                <h2>ZIA'S HOUSE</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/Hzia2.jpg" class="memories" alt=""><br>
                <h2>ZIA'S HOUSE</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/batik1.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/kls7.jpg" class="memories" alt=""><br>
                <h2>7-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/3s.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <video src="asset/images/dia/tiktok.mp4" class="memories" type="video/mp4" controls></video><br>
                <h2>GOR FIRDAUS</h2>
            </div>
        </div>
        <div class="kolom kiri">
            <div class="box">
                <img src="asset/images/dia/kls2.jpg" class="memories" alt="">  <br>
                <h2>9-E CLASS</h2> 
            </div>
            <div class="box">
                <img src="asset/images/dia/kls1.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/batik2.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/3s1.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/3s2.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/hoodie.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/hoodie2.jpg" class="memories" alt=""><br>
                <h2>9-E CLASS</h2>
            </div>
            <div class="box">
                <img src="asset/images/dia/gor.jpg" class="memories" alt=""><br>
                <h2>GOR FIRDAUS</h2>
            </div>
            <div class="box">
                <video src="asset/images/dia/gor.mp4" class="memories" type="video/mp4" controls></video><br>
                <h2>GOR FIRDAUS</h2>
            </div>
        </div>
        </div>
    </div>
    </div><br><br>
    <a href="menu.php" class="btn">
        ← Kembali
    </a>
    <script>
        const music = document.getElementById('bg-music');
    
    // coba autoplay
    music.play().catch(() => {
        // kalau diblokir browser, baru play saat halaman disentuh
        document.addEventListener('click', () => {
            music.play();
        }, { once: true });
    });
    </script>
</body>

</html>