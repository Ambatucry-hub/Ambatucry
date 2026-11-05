<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Cashie</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="dashboard-body">

    <?php require_once __DIR__ . '/../includes/sidebar.php'; ?>

    <main class="dashboard-content">
        <header class="dashboard-header">
            <div>
                <h1>Dashboard</h1>
                <p>Selamat datang kembali di Cashie!</p>
            </div>

            <div class="header-info">

                <div class="datetime-cashie">
                    <div class="datetime-label">
                        <i class="fa-regular fa-clock"></i>
                        Waktu Sekarang
                    </div>
                    <div id="jam">00:00:00</div>
                    <div id="tanggal"></div>
                </div>

                <div class="dashboard-user">
                    <span>Admin</span>
                </div>
            </div>
        </div>
    </header>
        <section class="dashboard-cards">
            <div class="dashboard-card">
                <p>Total Item Terjual</p>
                <h2>0</h2>
            </div>

            <div class="dashboard-card">
                <p>Total Transaksi</p>
                <h2>0</h2>
            </div>

            <div class="dashboard-card">
                <p>Total Pendapatan</p>
                <h2>Rp 0</h2>
            </div>

            <div class="dashboard-card">
                <p>Total Pelanggan Aktif</p>
                <h2>0</h2>
            </div>
        </section>

        <section class="dashboard-panel">
            <h2>Grafik Penjualan</h2>
            <div class="chart-placeholder">
                Grafik penjualan akan ditampilkan di sini
            </div>
        </section>

        <section class="dashboard-panel">
            <h2>Produk Terlaris</h2>
            <div class="chart-placeholder">
                Data produk terlaris akan ditampilkan di sini
            </div>
        </section>
    </main>
<script>
function updateDateTime() {
    const sekarang = new Date();

    const tanggal = sekarang.toLocaleDateString('id-ID', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });

    const jam = sekarang.toLocaleTimeString('id-ID', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false
    });

    document.getElementById('tanggal').textContent = tanggal;
    document.getElementById('jam').textContent = jam;
}

updateDateTime();
setInterval(updateDateTime, 1000);
</script>
</body>
</html>