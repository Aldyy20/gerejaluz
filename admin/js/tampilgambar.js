function showImage(imagePath) {
    document.getElementById('modalImage').src = imagePath; // Gunakan imagePath yang diteruskan
    document.getElementById('imageModal').style.display = 'block';
    document.getElementById('modalOverlay').style.display = 'block';
}

function closeModal() {
    document.getElementById('imageModal').style.display = 'none';
    document.getElementById('modalOverlay').style.display = 'none';
}