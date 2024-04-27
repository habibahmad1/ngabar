// Inisialisasi Setiap Button
const informasi = document.querySelector(".informasi");
const pengetahuan = document.querySelector(".pengetahuan");
const kuis = document.querySelector(".kuis");
const pemberitahuan = document.querySelector(".pemberitahuan");

const contentInformasi = document.querySelector(".content-informasi");
const contentPengetahuan = document.querySelector(".content-pengetahuan");
const contentKuis = document.querySelector(".content-kuis");
const contentPemberitahuan = document.querySelector(".content-pemberitahuan");

const Allcategory = document.querySelector(".category");

// Mode Grid
const grid = document.querySelector(".modeGrid");
const bar = document.querySelector(".modeBar");
const artikelGrid = document.querySelectorAll(".artikelPost article");

// Fungsi ganti bar artikel yg aktif

function toggleDisplay(elementShow, elementHide1, elementHide2, elementHide3) {
    elementShow.style.display = "flex";
    elementHide1.style.display = "none";
    elementHide2.style.display = "none";
    elementHide3.style.display = "none";
}

// Fungsi hover aktif

function isActive(active, inactive1, inactive2, inactive3) {
    active.style.backgroundColor = "#27187e";
    inactive1.style.backgroundColor = "#758bfd";
    inactive2.style.backgroundColor = "#758bfd";
    inactive3.style.backgroundColor = "#758bfd";
}

if (informasi) {
    informasi.addEventListener("click", () => {
        toggleDisplay(
            contentInformasi,
            contentPengetahuan,
            contentKuis,
            contentPemberitahuan
        );
        isActive(informasi, pengetahuan, kuis, pemberitahuan);
        Allcategory.style.display = "inline-block";
    });
}

if (pengetahuan) {
    pengetahuan.addEventListener("click", () => {
        toggleDisplay(
            contentPengetahuan,
            contentInformasi,
            contentKuis,
            contentPemberitahuan
        );
        isActive(pengetahuan, informasi, kuis, pemberitahuan);
        Allcategory.style.display = "none";
    });
}

if (kuis) {
    kuis.addEventListener("click", () => {
        toggleDisplay(
            contentKuis,
            contentInformasi,
            contentPengetahuan,
            contentPemberitahuan
        );
        isActive(kuis, informasi, pengetahuan, pemberitahuan);
        Allcategory.style.display = "none";
    });
}

if (pemberitahuan) {
    pemberitahuan.addEventListener("click", () => {
        toggleDisplay(
            contentPemberitahuan,
            contentInformasi,
            contentPengetahuan,
            contentKuis
        );
        isActive(pemberitahuan, informasi, pengetahuan, kuis);
        Allcategory.style.display = "none";
    });
}

if (grid) {
    // Mode Grid
    grid.addEventListener("click", () => {
        // Mengubah gaya untuk mode grid
        artikelGrid.forEach(function (item) {
            item.style.width = "450px";
            item.style.border = "1px solid black";
            item.style.boxShadow = "5px 5px 5px #0289ff";
        });
    });
}

if (bar) {
    // Mode Bar
    bar.addEventListener("click", () => {
        // Mengubah gaya untuk mode bar
        artikelGrid.forEach(function (item) {
            item.style.width = "100%";
            // item.style.border = "none";
            item.style.boxShadow = "none";
        });
    });
}

const iconEye = document.querySelector(".iconEye");
if (iconEye) {
    // Eye Password Icons
    iconEye.addEventListener("click", function () {
        let passwordInput = document.querySelector("#password");
        let iconGanti = this.querySelector("i");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            iconGanti.classList.remove("fa-eye-slash");
            iconGanti.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            iconGanti.classList.remove("fa-eye");
            iconGanti.classList.add("fa-eye-slash");
        }
    });
}

// Switch ke Daftar
const loginPage = document.querySelector(".form-login");
const sliderDaftar = document.querySelector(".bolaSlider");

if (sliderDaftar) {
    sliderDaftar.addEventListener("click", () => {
        loginPage.style.display = "none";
        sliderDaftar.style.transform = "translateX(26px)";
    });
}
