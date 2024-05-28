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

const modeTema = document.getElementById("modeTema");
const modeMusik = document.getElementById("modeMusik");
const boxTema = document.querySelector(".boxTema");
const boxMusik = document.querySelector(".boxMusik");

const light = document.querySelector(".light");
const dark = document.querySelector(".dark");
const off = document.querySelector(".off");
const on = document.querySelector(".on");

// Load theme from localStorage
document.addEventListener("DOMContentLoaded", () => {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("darkActive");
    } else {
        document.body.classList.add("lightActive");
    }
});

if (modeTema) {
    modeTema.addEventListener("click", () => {
        boxTema.style.display =
            boxTema.style.display === "block" ? "none" : "block";
    });

    light.addEventListener("click", () => {
        document.body.classList.remove("darkActive");
        document.body.classList.add("lightActive");
        localStorage.setItem("theme", "light");
        boxTema.style.display = "none"; // Hide the box after selection
    });

    dark.addEventListener("click", () => {
        document.body.classList.remove("lightActive");
        document.body.classList.add("darkActive");
        localStorage.setItem("theme", "dark");
        boxTema.style.display = "none"; // Hide the box after selection
    });
}

if (modeMusik) {
    modeMusik.addEventListener("click", () => {
        boxMusik.style.display =
            boxMusik.style.display === "block" ? "none" : "block";
    });

    off.addEventListener("click", () => {
        // Implement functionality for off
        boxMusik.style.display = "none"; // Hide the box after selection
    });

    on.addEventListener("click", () => {
        // Implement functionality for on
        boxMusik.style.display = "none"; // Hide the box after selection
    });
}
