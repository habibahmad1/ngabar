function capture() {
    html2canvas(document.querySelector(".container-profil")).then((canvas) => {
        // Konversi canvas ke gambar dan tampilkan atau simpan
        var image = canvas
            .toDataURL("image/png")
            .replace("image/png", "image/octet-stream");
        var link = document.createElement("a");
        link.download = "screenshot.png";
        link.href = image;
        link.click();
    });
}
