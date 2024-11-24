document.addEventListener("DOMContentLoaded", function() {
    const tables = document.querySelectorAll("table");
    tables.forEach(function(table) {
        table.style.width = "100%";
        table.style.maxWidth = "500px";
        table.style.margin = "auto";
    });
});