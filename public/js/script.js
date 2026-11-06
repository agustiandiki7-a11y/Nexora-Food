document.addEventListener("DOMContentLoaded", function () {
    // 1. Pencarian produk pada tabel
    const searchInput = document.getElementById("searchProduk");
    const productRows = document.querySelectorAll(
        "#daftarProduk tr[data-nama]",
    );

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            const keyword = this.value.toLowerCase().trim();

            productRows.forEach(function (row) {
                const nama = row.dataset.nama.toLowerCase();

                row.hidden = !nama.includes(keyword);
            });
        });
    }

    // 2. Konfirmasi sebelum menghapus produk
    const deleteButtons = document.querySelectorAll(".btn-hapus");

    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            const konfirmasi = confirm(
                "Apakah Anda yakin ingin menghapus produk ini?",
            );

            if (!konfirmasi) {
                event.preventDefault();
            }
        });
    });

    // 3. Validasi tampilan harga
    const hargaInput = document.getElementById("harga_produk");

    if (hargaInput) {
        hargaInput.addEventListener("input", function () {
            if (this.value !== "" && Number(this.value) < 0) {
                this.setCustomValidity("Harga tidak boleh kurang dari nol.");
            } else {
                this.setCustomValidity("");
            }
        });
    }
});
