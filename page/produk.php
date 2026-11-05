<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Cashie</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="dashboard-body">

    <?php require_once __DIR__ . '/../includes/sidebar.php'; ?>

    <main class="dashboard-content">

        <!-- HEADER -->
        <header class="dashboard-header">
            <div>
                <h1>Produk</h1>
                <p>Kelola daftar produk dan stok barang Anda.</p>
            </div>
        </header>

        <!-- TOOLBAR -->
        <section class="product-toolbar">

            <input
                type="text"
                id="cariProduk"
                placeholder="Cari nama produk..."
            >

            <select id="filterKategori">
                <option value="">Semua Kategori</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <button
                type="button"
                class="product-add-button"
                id="btnTambahProduk"
            >
                + Tambah Produk
            </button>

        </section>

        <!-- TABEL PRODUK -->
        <section class="product-table-panel">

            <h2>Daftar Produk</h2>

            <table class="product-table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody id="daftarProduk">
                    <tr>
                        <td colspan="6">Belum ada data produk.</td>
                    </tr>
                </tbody>

            </table>

        </section>


        <!-- MODAL TAMBAH / EDIT PRODUK -->
        <div class="product-modal" id="modalProduk">

            <div class="product-modal-content">

                <h2 id="judulFormProduk">Tambah Produk</h2>

                <form id="formProduk">

                    <input type="hidden" id="indexProduk">

                    <label>Nama Produk</label>
                    <input
                        type="text"
                        id="namaProduk"
                        placeholder="Masukkan nama produk"
                        required
                    >

                    <label>Kategori</label>
                    <select id="kategoriProduk" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>

                    <label>Harga</label>
                    <input
                        type="number"
                        id="hargaProduk"
                        min="0"
                        placeholder="Masukkan harga"
                        required
                    >

                    <label>Stok Awal</label>
                    <input
                        type="number"
                        id="stokProduk"
                        min="0"
                        placeholder="Masukkan stok"
                        required
                    >

                    <div class="product-modal-actions">

                        <button type="button" id="btnBatalProduk">
                            Batal
                        </button>

                        <button type="submit">
                            Simpan Produk
                        </button>

                    </div>

                </form>

            </div>

        </div>


        <!-- MODAL TAMBAH STOK -->
        <div class="product-modal" id="modalStok">

            <div class="product-modal-content">

                <h2>Tambah Stok Produk</h2>

                <p id="namaProdukStok"></p>

                <form id="formStok">

                    <input type="hidden" id="idProdukStok">

                    <label>Jumlah Barang Masuk</label>
                    <input
                        type="number"
                        id="jumlahStok"
                        min="1"
                        placeholder="Masukkan jumlah barang"
                        required
                    >

                    <div class="product-modal-actions">

                        <button type="button" id="btnBatalStok">
                            Batal
                        </button>

                        <button type="submit">
                            Tambahkan Stok
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </main>


    <!-- JAVASCRIPT -->
    <script>

    document.addEventListener("DOMContentLoaded", function () {

        // ELEMENT
        const btnTambah = document.getElementById("btnTambahProduk");
        const modalProduk = document.getElementById("modalProduk");
        const modalStok = document.getElementById("modalStok");

        const formProduk = document.getElementById("formProduk");
        const formStok = document.getElementById("formStok");

        const daftarProduk = document.getElementById("daftarProduk");

        const cariProduk = document.getElementById("cariProduk");
        const filterKategori = document.getElementById("filterKategori");


        // AMBIL DATA DARI LOCAL STORAGE
        let produk = [];

        try {
            produk = JSON.parse(
                localStorage.getItem("cashieProduk")
            ) || [];

            if (!Array.isArray(produk)) produk = [];

        } catch (error) {
            produk = [];
        }


        // SIMPAN DATA
        function simpanData() {

            localStorage.setItem(
                "cashieProduk",
                JSON.stringify(produk)
            );

        }


        // ESCAPE TEKS UNTUK TAMPILAN
        function escapeHTML(teks) {

            return String(teks).replace(/[&<>"']/g, function (karakter) {
                return {
                    "&": "&amp;",
                    "<": "&lt;",
                    ">": "&gt;",
                    '"': "&quot;",
                    "'": "&#039;"
                }[karakter];
            });

        }


        // TAMPILKAN PRODUK
        function tampilkanProduk() {

            daftarProduk.innerHTML = "";

            const kataKunci = cariProduk.value.toLowerCase();
            const kategoriDipilih = filterKategori.value;

            const hasilFilter = produk.filter(function (item) {

                const cocokNama = item.nama.toLowerCase().includes(kataKunci);

                const cocokKategori =
                    kategoriDipilih === "" ||
                    item.kategori === kategoriDipilih;

                return cocokNama && cocokKategori;

            });


            if (hasilFilter.length === 0) {

                daftarProduk.innerHTML = `
                    <tr>
                        <td colspan="6">
                            Belum ada data produk.
                        </td>
                    </tr>
                `;

                return;
            }


            hasilFilter.forEach(function (item) {

                const index = produk.indexOf(item);

                daftarProduk.innerHTML += `
                    <tr>

                        <td>${index + 1}</td>

                        <td>${escapeHTML(item.nama)}</td>

                        <td>${escapeHTML(item.kategori)}</td>

                        <td>
                            Rp ${Number(item.harga).toLocaleString("id-ID")}
                        </td>

                        <td>${item.stok}</td>

                       <td>
                            <div class="product-action-buttons">

                                <button
                                    type="button"
                                    class="btn-stok"
                                    onclick="tambahStok(${index})"
                                    title="Tambah Stok"
                                >
                                    <span>+</span>
                                </button>

                                <button
                                    type="button"
                                    class="btn-edit"
                                    onclick="editProduk(${index})"
                                    title="Edit Produk"
                                >
                                    <span>✎</span>
                                </button>

                                <button
                                    type="button"
                                    class="btn-hapus"
                                    onclick="hapusProduk(${index})"
                                    title="Hapus Produk"
                                >
                                    <span>×</span>
                                </button>

                            </div>
                        </td>

                    </tr>
                `;

            });

        }


        // BUKA FORM TAMBAH PRODUK
        btnTambah.addEventListener("click", function () {

            formProduk.reset();

            document.getElementById("indexProduk").value = "";

            document.getElementById("judulFormProduk").textContent =
                "Tambah Produk";

            document.getElementById("stokProduk").disabled = false;

            modalProduk.style.display = "flex";

        });


        // TUTUP FORM PRODUK
        document.getElementById("btnBatalProduk")
            .addEventListener("click", function () {

                modalProduk.style.display = "none";

            });


        // SIMPAN PRODUK BARU / EDIT PRODUK
        formProduk.addEventListener("submit", function (e) {

            e.preventDefault();

            const index = document.getElementById("indexProduk").value;

            const dataBaru = {

                nama: document.getElementById("namaProduk").value.trim(),

                kategori: document.getElementById("kategoriProduk").value,

                harga: Number(document.getElementById("hargaProduk").value),

                stok: Number(document.getElementById("stokProduk").value)

            };


            if (dataBaru.nama === "") {
                alert("Nama produk tidak boleh kosong!");
                return;
            }


            if (index === "") {

                // TAMBAH PRODUK BARU
                produk.push(dataBaru);

                alert("Produk berhasil ditambahkan!");

            } else {

                // EDIT INFORMASI PRODUK
                dataBaru.stok = produk[index].stok;

                produk[index] = dataBaru;

                alert("Produk berhasil diperbarui!");

            }


            simpanData();

            tampilkanProduk();

            modalProduk.style.display = "none";

            formProduk.reset();

        });


        // EDIT PRODUK
        window.editProduk = function (index) {

            const item = produk[index];

            document.getElementById("indexProduk").value = index;

            document.getElementById("namaProduk").value = item.nama;

            document.getElementById("kategoriProduk").value = item.kategori;

            document.getElementById("hargaProduk").value = item.harga;

            document.getElementById("stokProduk").value = item.stok;

            // Stok dikelola melalui fitur Tambah Stok
            document.getElementById("stokProduk").disabled = true;

            document.getElementById("judulFormProduk").textContent =
                "Edit Produk";

            modalProduk.style.display = "flex";

        };


        // HAPUS PRODUK
        window.hapusProduk = function (index) {

            if (confirm("Yakin ingin menghapus produk ini?")) {

                produk.splice(index, 1);

                simpanData();

                tampilkanProduk();

                alert("Produk berhasil dihapus!");

            }

        };


        // BUKA MODAL TAMBAH STOK
        window.tambahStok = function (index) {

            document.getElementById("idProdukStok").value = index;

            document.getElementById("namaProdukStok").textContent =
                "Produk: " + produk[index].nama +
                " | Stok sekarang: " + produk[index].stok;

            formStok.reset();

            document.getElementById("idProdukStok").value = index;

            modalStok.style.display = "flex";

        };


        // TUTUP MODAL STOK
        document.getElementById("btnBatalStok")
            .addEventListener("click", function () {

                modalStok.style.display = "none";

            });


        // PROSES TAMBAH STOK
        formStok.addEventListener("submit", function (e) {

            e.preventDefault();

            const index = Number(
                document.getElementById("idProdukStok").value
            );

            const jumlah = Number(
                document.getElementById("jumlahStok").value
            );


            if (
                !Number.isInteger(index) ||
                !produk[index] ||
                !Number.isInteger(jumlah) ||
                jumlah <= 0
            ) {

                alert("Data penambahan stok tidak valid!");

                return;

            }


            produk[index].stok += jumlah;

            simpanData();

            tampilkanProduk();

            modalStok.style.display = "none";

            formStok.reset();

            alert("Stok berhasil ditambahkan!");

        });


        // PENCARIAN PRODUK
        cariProduk.addEventListener("input", tampilkanProduk);


        // FILTER KATEGORI
        filterKategori.addEventListener("change", tampilkanProduk);


        // TAMPILKAN DATA PERTAMA KALI
        tampilkanProduk();

    });

    </script>

</body>
</html>