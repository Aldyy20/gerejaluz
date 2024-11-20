<?php
// serve_pdf.php

// Ambil nama file dari parameter URL
$pdfFile = $_GET['file'];

// Tentukan path ke file PDF
$filePath = __DIR__ . '/laporan/pdf/' . basename($pdfFile);

// Periksa apakah file ada
if (file_exists($filePath)) {
    // Set header untuk menyajikan file PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($filePath) . '"');
    header('Content-Length: ' . filesize($filePath));
    
    // Baca file dan kirim ke output
    readfile($filePath);
    exit;
} else {
    // Jika file tidak ditemukan, kirim status 404
    http_response_code(404);
    echo 'File not found.';
    exit;
}