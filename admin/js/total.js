// Tombol tambah dan kurang
document.getElementById('btnTambah').addEventListener('click', function() {
    showForm('tambah'); // Menampilkan form untuk tambah
});

document.getElementById('btnKurang').addEventListener('click', function() {
    showForm('kurang'); // Menampilkan form untuk kurang
});

// Fungsi untuk menampilkan form input nominal
function showForm(tipe) {
    // Menyembunyikan form sebelumnya jika ada
    document.getElementById('formNominal').style.display = 'block';
    document.getElementById('inputNominal').value = ''; // Reset nilai input
    // Menyimpan tipe operasi (tambah/kurang)
    document.getElementById('submitNominal').setAttribute('data-tipe', tipe);
}

// // Tombol kirim untuk memperbarui nilai
// document.getElementById('submitNominal').addEventListener('click', function() {
//     var nominal = document.getElementById('inputNominal').value;
//     if (nominal && !isNaN(nominal)) {
//         var tipe = this.getAttribute('data-tipe');
//         updateLaporan(tipe, nominal);
//     } else {
//         alert('Masukkan nominal yang valid');
//     }
// });

// // Fungsi untuk memperbarui laporan
// function updateLaporan(tipe, nominal) {
//     // Menghapus tanda koma pada angka
//     var currentLaporan = document.getElementById('totalLaporan').textContent.replace('Rp. ', '').replace(/\./g, '');
//     currentLaporan = parseInt(currentLaporan); // Pastikan sudah dalam bentuk angka

//     // Pastikan nominal juga angka, jika tidak maka ambil sebagai 0
//     nominal = parseInt(nominal.replace(/\./g, '')); // Menghapus koma dan mengkonversinya ke angka

//     // Menghitung total berdasarkan tipe (tambah/kurang)
//     var newLaporan = (tipe === 'tambah') ? currentLaporan + nominal : currentLaporan - nominal;

//     // Menampilkan hasil dengan format angka yang benar
//     document.getElementById('totalLaporan').textContent = 'Rp. ' + newLaporan.toLocaleString();

//     // Kirimkan update ke server
//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'update_total.php', true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     xhr.send('total_laporan=' + newLaporan);

//     xhr.onload = function() {
//         if (xhr.status === 200) {
//             console.log('Data berhasil diperbarui');
//         } else {
//             console.log('Terjadi kesalahan');
//         }
//     };
// }

