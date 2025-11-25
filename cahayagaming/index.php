<?php
// Ambil data dari API
$data = file_get_contents("http://localhost/p5/tugas/daryat/gamepsku/gameps.php");
$games = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Game</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            margin: 0;
            padding: 0;
            color: #fff;
        }

        /* === NAVBAR === */
        .navbar {
            background: linear-gradient(90deg, #1e3c72, #2a5298);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
            width: 100%;
            box-sizing: border-box;
        }
        .navbar img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar h1 {
            margin: 0;
            font-size: 1.5em;
            letter-spacing: 1px;
            text-shadow: 0 0 8px rgba(255,255,255,0.4);
        }

        h1.page-title {
            text-align: center;
            margin: 20px 0 15px;
            font-size: 2em;
            letter-spacing: 1.5px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
        }

        /* === SEARCH BOX === */
        #searchBox {
            display: block;
            margin: 10px auto 25px;
            padding: 10px 15px;
            width: 60%;
            border-radius: 8px;
            border: none;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        .games-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
            max-width: 1300px;
            margin: auto;
            padding: 0 15px 40px;
        }

        @media (max-width: 1100px) {
            .games-container { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 768px) {
            .games-container { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 480px) {
            .games-container { grid-template-columns: 1fr; }
        }

        .game-card {
            background: #fff;
            color: #333;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.25);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        /* 🎨 Efek Hover Card */
        .game-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 12px 20px rgba(0,0,0,0.35);
        }
        .game-card img {
            width: 100%;
            border-bottom: 1px solid #eee;
            display: block;
            border-radius: 12px 12px 0 0;
            box-shadow: inset 0 -2px 5px rgba(0,0,0,0.15);
        }
        .game-card h3 {
            margin: 12px 8px 4px;
            font-size: 16px;
            color: #222;
        }

        .genre {
            display: inline-block;
            margin: 0 8px 8px;
            font-size: 13px;
            color: #000;
            background: #a6f7a6;
            padding: 2px 6px;
            border-radius: 4px;
        }

        .game-card p {
            font-size: 12px;
            line-height: 1.4;
            color: #666;
            margin: 0 8px 12px;
        }
        .btn {
            display: inline-block;
            margin: 0 8px 12px;
            padding: 6px 12px;
            background: #2a5298;
            color: white;
            border-radius: 6px;
            font-size: 12px;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #1e3c72;
        }

        /* === MODAL === */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            justify-content: center;
            align-items: center;
            padding: 15px;
        }
        .modal-content {
            background: #fff;
            color: #333;
            max-width: 700px;
            width: 100%;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            gap: 15px;
            position: relative;
            animation: popUp 0.35s ease; /* ✨ Animasi Modal */
        }
        @keyframes popUp {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        .modal-left {
            flex: 0 0 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-right: 1px solid #ccc;
            padding-right: 15px;
        }
        .modal-left img {
            max-width: 100%;
            max-height: 300px;
            border-radius: 8px;
            object-fit: contain;
        }
        .modal-right {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .modal-right h2 {
            margin-top: 0;
        }
        #modalJenis {
            margin: 5px 0 10px;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            color: #333;
            background: #eee;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            transition: 0.3s;
        }
        .close-btn:hover {
            background: #ccc;
            transform: scale(1.1);
        }

        /* === FOOTER === */
        footer {
            background: #1e3c72;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            letter-spacing: 0.5px;
            width: 100%;
            box-sizing: border-box;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <img src="img/ps.png" alt="Logo">
    <h1>CAHAYA GAMING</h1>
</div>

<h1 class="page-title">🎮 Daftar Game PS 4</h1>

<!-- 🔍 Search Box -->
<input type="text" id="searchBox" placeholder="Cari game...">

<div class="games-container">                         
<?php foreach ($games as $game): ?>
    <div class="game-card">
        <img src="../gamepsku/<?php echo $game['foto']; ?>" alt="<?php echo $game['nama_game']; ?>">
        <h3><?php echo $game['nama_game']; ?></h3>
        <span class="genre"><?php echo $game['jenis_game']; ?></span>
        <p><?php echo $game['deskripsi']; ?></p>
        <button class="btn" 
            data-nama="<?php echo htmlspecialchars($game['nama_game']); ?>" 
            data-jenis="<?php echo htmlspecialchars($game['jenis_game']); ?>" 
            data-detail="<?php echo htmlspecialchars($game['deskripsi_detail']); ?>" 
            data-foto="../gamepsku/<?php echo $game['foto']; ?>">
            Detail
        </button>
    </div>
<?php endforeach; ?>
</div>

<!-- Modal -->
<div class="modal" id="detailModal">
    <div class="modal-content">
        <span class="close-btn" id="closeModal">&times;</span>
        <div class="modal-left">
            <img id="modalImage" src="" alt="">
        </div>
        <div class="modal-right">
            <h2 id="modalNama"></h2>
            <span class="genre" id="modalJenis"></span>
            <p id="modalDetail"></p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    &copy; <?php echo date("Y"); ?> Koleksi Game PS 4 | Dibuat oleh Cahaya Gaming & Daryat
</footer>

<script>
    const buttons = document.querySelectorAll('.btn');
    const modal = document.getElementById('detailModal');
    const closeModal = document.getElementById('closeModal');
    const modalImage = document.getElementById('modalImage');
    const modalNama = document.getElementById('modalNama');
    const modalJenis = document.getElementById('modalJenis');
    const modalDetail = document.getElementById('modalDetail');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            modal.style.display = 'flex';
            modalImage.src = btn.dataset.foto;
            modalNama.textContent = btn.dataset.nama;
            modalJenis.textContent = btn.dataset.jenis;
            modalDetail.textContent = btn.dataset.detail;
            document.body.style.overflow = 'hidden';
        });
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });

    // 🔍 Fitur Pencarian
    const searchBox = document.getElementById('searchBox');
    searchBox.addEventListener('keyup', () => {
        let keyword = searchBox.value.toLowerCase();
        document.querySelectorAll('.game-card').forEach(card => {
            let nama = card.querySelector('h3').textContent.toLowerCase();
            card.style.display = nama.includes(keyword) ? 'block' : 'none';
        });
    });
</script>

</body>
</html>
