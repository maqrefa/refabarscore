<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Form Pasang Bet</title>
    <link rel="stylesheet" href="../styles/bet.css">
</head>
<body>
    <main>
        <section class="section">
            <div class="match-header">
                <h2>FORMULIR <span>PASANG BET</span></h2>
                <p>Isi data Anda dan pilih tim yang akan menang!</p>
                <!-- <a href="../index.php">← Kembali</a> -->
            </div>

            <div class="form-container">
                <!-- <h3>Formulir Pemasangan Bet</h3> -->

                <form action="../proses_simpan.php" method="post" class="form-bet" id="betForm">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="hp">Nomor HP</label>
                        <input type="text" id="hp" name="hp" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="tim_pilihan">Tim Pilihan Anda</label>
                        <select id="tim_pilihan" name="tim_pilihan" required>
                            <option value="">-- Pilih Tim --</option>
                            <option value="Jepang">Jepang</option>
                            <option value="Indonesia">Indonesia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_bet">Jumlah Uang Bet (Rp)</label>
                        <input type="number" id="jumlah_bet" name="jumlah_bet" min="1000" required>
                    </div>

                    <div class="form-group">
                        <label for="metode_pembayaran">Metode Pembayaran</label>
                        <select id="metode_pembayaran" name="metode_pembayaran" required>
                            <option value="">-- Pilih Metode Pembayaran --</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="E-Wallet">E-Wallet</option>
                            <option value="QRIS">QRIS</option>
                        </select>
                    </div>

                    <button type="submit">Kirim Bet</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
