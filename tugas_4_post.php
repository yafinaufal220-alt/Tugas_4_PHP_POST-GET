<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasantri | Portal Akademik</title>
    <style>
        :root {
            --primary-color: #6366f1; /* Indigo */
            --bg-color: #f3f4f6;
            --card-bg: #ffffff;
            --text-color: #1f2937;
            --success-color: #22c55e;
            --danger-color: #ef4444;
        }

        /* Hilangkan panah input angka */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] { -moz-appearance: textfield; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h2 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.85rem;
            color: #4b5563;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        select {
            width: 100%;
            padding: 12px;
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        .btn-submit {
            width: 100%;
            background-color: var(--primary-color);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 10px;
            transition: opacity 0.3s;
        }

        .btn-submit:hover { opacity: 0.9; }

        .result-box {
            margin-top: 2rem;
            padding: 1.5rem;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .lulus { background: #dcfce7; color: #166534; }
        .tidak-lulus { background: #fee2e2; color: #991b1b; }
    </style>
</head>
<body>

<div class="card">
    <h2>Form Penilaian Mahasantri</h2>
    
    <form action="" method="POST">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>

        <div class="form-group">
            <label>Mata Kuliah</label>
            <select name="matakuliah" required>
                <option value="" disabled selected>-- Pilih Mata Kuliah --</option>
                <option value="WEB Design">WEB Design</option>
                <option value="Database SQL">Database SQL</option>
                <option value="PHP">PHP</option>
            </select>
        </div>

        <div class="form-group">
            <label>Nilai</label>
            <input type="number" name="nilai" placeholder="0 - 100" min="0" max="100" required>
        </div>

        <button type="submit" name="proses" class="btn-submit">PROSES</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $username = htmlspecialchars($_POST['username']);
        $matakuliah = $_POST['matakuliah'];
        $nilai = $_POST['nilai'];

        // Logika kelulusan
        if ($nilai >= 70) {
            $status = "LULUS";
            $class = "lulus";
        } else {
            $status = "TIDAK LULUS";
            $class = "tidak-lulus";
        }

        echo "<div class='result-box'>";
        echo "<strong>Hasil Untuk:</strong> $username<br>";
        echo "<strong>Mata Kuliah:</strong> $matakuliah<br>";
        echo "<strong>Nilai:</strong> $nilai<br>";
        echo "<strong>Status:</strong> <span class='status-badge $class'>$status</span>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>