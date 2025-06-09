<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Taruhan</title>
    <link rel="stylesheet" href="../styles/main.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #0f1c2e;
            margin: 0;
            padding: 0;
            color: white;
        }

        h2 {
            padding: 20px;
            margin: 0;
            font-size: 24px;
        }

        .table-container {
            background-color: #0f1c2e;
            padding: 0 20px 20px 20px;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            overflow: hidden;
            border-radius: 12px;
        }

        .styled-table thead {
            background-color: #0a2b65;
        }

        .styled-table th {
            color: #ffcc00;
            padding: 12px;
            text-align: center;
        }

        .styled-table td {
            background-color: #111c2f;
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #1c2c44;
        }

        .styled-table tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>

    <h2>Daftar Taruhan yang Masuk</h2>
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Email</th>
                    <th>Tim Pilihan</th>
                    <th>Jumlah</th>
                    <th>Metode</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM bet_user ORDER BY id DESC";
                $data = $koneksi->query($query);
                while($row = $data->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['nama']}</td>
                        <td>{$row['hp']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['tim_pilihan']}</td>
                        <td>Rp " . number_format($row['jumlah_bet'], 0, ',', '.') . "</td>
                        <td>{$row['metode_pembayaran']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
