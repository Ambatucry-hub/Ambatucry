<aside class="sidebar">
<div class="sidebar-brand">
    <div class="sidebar-brand-logo">
        <img src="../assets/img/logocashie.jpeg" alt="Logo Cashie">
        <div>
            <h2>Cashie</h2>
            <p>Smart Cashier System</p>
        </div>
    </div>
</div>

    <?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="sidebar-menu">

    <a href="dashboard.php"
       class="<?= $currentPage == 'dashboard.php' ? 'active' : '' ?>">
        Dashboard
    </a>

    <a href="produk.php"
       class="<?= $currentPage == 'produk.php' ? 'active' : '' ?>">
        Produk
    </a>

    <a href="transaksi.php"
       class="<?= $currentPage == 'transaksi.php' ? 'active' : '' ?>">
        Transaksi
    </a>

    <a href="riwayat.php"
       class="<?= $currentPage == 'riwayat.php' ? 'active' : '' ?>">
        Riwayat Transaksi
    </a>

    <a href="laporan.php"
       class="<?= $currentPage == 'laporan.php' ? 'active' : '' ?>">
        Laporan
    </a>

</nav>

    <div class="sidebar-bottom">
        <p>Customer Service</p>
        <a href="../index.php">Log Out</a>
    </div>
</aside>