<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasantri | Portal Akademik</title>
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #64748b;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-color: #1e293b;
        }

        /* Menghilangkan panah di Chrome, Safari, Edge, dan Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Menghilangkan panah di Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            box-sizing: border-box;
            background-color: white;
            font-size: 0.95rem;
            transition: border-color 0.2s;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .radio-group, .checkbox-group {
            display: flex;
            gap: 15px;
            padding-top: 5px;
        }

        .btn-submit {
            width: 100%;
            background-color: var(--primary-color);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }

        .result-box {
            margin-top: 2rem;
            padding: 1.5rem;
            background: #f0fdf4;
            border-left: 4px solid #22c55e;
            border-radius: 4px;
        }

        .result-box h3 {
            margin-top: 0;
            color: #166534;
            font-size: 1.1rem;
        }

        .result-item {
            margin-bottom: 5px;
            font-size: 0.95rem;
            display: flex;
        }

        .result-item b {
            color: #475569;
            min-width: 130px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Form Pendaftaran</h2>
    
    <form action="" method="GET">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama sesuai KTP" required>
        </div>

        <div class="form-group">
            <label>NIM</label>
            <input type="number" name="nim" placeholder="Contoh: 2024001" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <label style="font-weight: normal;"><input type="radio" name="jk" value="Laki-laki" required> Laki-laki</label>
                <label style="font-weight: normal;"><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label>Program Studi</label>
            <select name="prodi" required>
                <option value="" disabled selected>-- Pilih Program Studi --</option>
                <option value="DM">DM (Digital Marketing)</option>
                <option value="PPL">PPL (Pengembangan Perangkat Lunak)</option>
            </select>
        </div>

        <div class="form-group">
            <label>Hobi</label>
            <div class="checkbox-group">
                <label style="font-weight: normal;"><input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding</label>
                <label style="font-weight: normal;"><input type="checkbox" name="hobi[]" value="Desain"> Desain</label>
                <label style="font-weight: normal;"><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
            </div>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3" placeholder="Alamat lengkap domisili..." required></textarea>
        </div>

        <button type="submit" name="daftar" class="btn-submit">DAFTAR SEKARANG</button>
    </form>

    <?php if (isset($_GET['daftar'])): ?>
        <div class="result-box">
            <h3>Konfirmasi Pendaftaran Berhasil!</h3>
            <div class="result-item"><b>Nama</b>: <?= htmlspecialchars($_GET['nama']) ?></div>
            <div class="result-item"><b>NIM</b>: <?= htmlspecialchars($_GET['nim']) ?></div>
            <div class="result-item"><b>Gender</b>: <?= $_GET['jk'] ?></div>
            <div class="result-item"><b>Program Studi</b>: <?= $_GET['prodi'] ?></div>
            <div class="result-item"><b>Hobi</b>: <?= isset($_GET['hobi']) ? implode(", ", $_GET['hobi']) : '-' ?></div>
            <div class="result-item"><b>Alamat</b>: <?= nl2br(htmlspecialchars($_GET['alamat'])) ?></div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>