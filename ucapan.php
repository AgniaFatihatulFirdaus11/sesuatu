<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ucapan 💌</title>
    <link rel="stylesheet" href="css/ucapan.css">
</head>

<body>
    <div class="container">
    <audio id="bg-music" src="asset/music/ucapan.mp3" loop></audio>
    <h1>💌 A Little Message For You</h1>

    <p>
        Selamat ulang tahun yang ke-15 sayanggg! 🎂
    </p>

    <p>
        Semoga di umur yang baru ini,
        kamu mendapatkan banyak hal baik,
        kamu menemukan banyak alasan untuk tersenyum,
        kamuu bisa mencapai apa yang kamu usahakan,
        dan terus menjadi versi terbaik dari dirimu sendiri.
        Maafin akuu yaa karena akuu belumm bisaa ngasihh apa-apa di ulang tahun kamu,
        aku cuman bisa ngasih kamu sebisa aku, contoh nya web ini.
        Makasihh yaaa sayanggg kamuuu sudaa mauu nemeninn akuu ngeberesinn web iniiii, 
        akuu jugaa mauu mintaa maaff karenaaa inii web nyaa masihh jelekk hehe.
        Lopyuuuu sayanggggggg💖.
    </p>

    <a href="menu.php" class="btn">
        ← Kembali
    </a>
    
    </div>
    <canvas id="particles"></canvas>

    <style>
    #particles {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none; /* biar nggak nge-block klik tombol di bawahnya */
        z-index: 9999;
    }
    </style>
    <script>
        const music = document.getElementById('bg-music');
    
    // coba autoplay
    music.play().catch(() => {
        // kalau diblokir browser, baru play saat halaman disentuh
        document.addEventListener('click', () => {
            music.play();
        }, { once: true });
    });

        const canvas = document.getElementById('particles');
        const ctx = canvas.getContext('2d');

        function resize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resize();
        window.addEventListener('resize', resize);

        const particles = [];
        const jumlahPartikel = 40;

        function buatPartikel() {
            return {
                x: Math.random() * canvas.width,
                y: canvas.height + Math.random() * 100,
                size: Math.random() * 14 + 8,
                speed: Math.random() * 1 + 0.5,
                drift: Math.random() * 1 - 0.5,
                opacity: Math.random() * 0.5 + 0.3,
                emoji: Math.random() > 0.5 ? '💖' : '✨'
            };
        }

        for (let i = 0; i < jumlahPartikel; i++) {
            particles.push(buatPartikel());
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            particles.forEach(p => {
                ctx.globalAlpha = p.opacity;
                ctx.font = `${p.size}px Arial`;
                ctx.fillText(p.emoji, p.x, p.y);

                p.y -= p.speed;
                p.x += p.drift;

                if (p.y < -20) {
                    p.y = canvas.height + 20;
                    p.x = Math.random() * canvas.width;
                }
            });

            requestAnimationFrame(animate);
        }

        animate();
    </script>
</body>

</html>