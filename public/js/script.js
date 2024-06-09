// Inisialisasi Setiap Button
const informasi = document.querySelector(".informasi");
const pengetahuan = document.querySelector(".pengetahuan");
const kuis = document.querySelector(".kuis");
const pemberitahuan = document.querySelector(".pemberitahuan");

const contentInformasi = document.querySelector(".content-informasi");
const contentPengetahuan = document.querySelector(".content-pengetahuan");
const contentKuis = document.querySelector(".content-kuis");
const contentPemberitahuan = document.querySelector(".content-pemberitahuan");

// Menyembunyikan elemen saat Content informasi aktif
const Allcategory = document.querySelector(".category");
const AllArtikel = document.querySelector(".allArtikel");
const search = document.querySelector(".search");
const pagination = document.querySelector(".pagination");

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
    // menyimpan nilai sebelumnya
    const previousSearch = search.style.display;
    const previousArtikel = AllArtikel.style.display;
    informasi.addEventListener("click", () => {
        toggleDisplay(
            contentInformasi,
            contentPengetahuan,
            contentKuis,
            contentPemberitahuan
        );
        isActive(informasi, pengetahuan, kuis, pemberitahuan);
        Allcategory.style.display = "inline-block";
        pagination.style.display = "flex";
        search.style.display = previousSearch;
        AllArtikel.style.display = previousArtikel;
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
        pagination.style.display = "none";
        search.style.display = "none";
        AllArtikel.style.display = "none";
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
const imgLogin = document.querySelector(".gambarKiri");
const sliderDaftar = document.querySelector(".bolaSlider");

if (sliderDaftar) {
    sliderDaftar.addEventListener("click", () => {
        sliderDaftar.style.transform = "translateX(26px)";
        loginPage.style.display = "none";
        imgLogin.style.display = "none";
        daftarPage.style.display = "flex";
        imgDaftar.style.display = "flex";
    });
}

// Switch Ke Login
const daftarPage = document.querySelector(".form-daftar");
const imgDaftar = document.querySelector(".gambarKanan");
const sliderLogin = document.querySelector(".bolaDaftarSlider");

if (sliderLogin) {
    sliderLogin.addEventListener("click", () => {
        sliderLogin.style.transform = "translateX(-26px)";
        daftarPage.style.display = "none";
        imgDaftar.style.display = "none";
        loginPage.style.display = "flex";
        imgLogin.style.display = "flex";
    });
}

const forgetPW = document.querySelector(".forgotPw");
const formPW = document.querySelector(".formForget");
const backLogin = document.querySelector(".backLogin");
if (forgetPW) {
    forgetPW.addEventListener("click", (e) => {
        loginPage.style.display = "none";
        formPW.style.display = "flex";
        e.preventDefault();
    });
}

if (backLogin) {
    backLogin.addEventListener("click", (e) => {
        formPW.style.display = "none";
        loginPage.style.display = "flex";
        e.preventDefault();
    });
}

// Function swap about
function swapAbout(el1, el2, el3) {
    el1.style.display = "flex";
    el2.style.display = "none";
    el3.style.display = "none";
}

function isActived(ac1, ac2, ac3) {
    ac1.style.backgroundColor = "#ff465b";
    ac2.style.backgroundColor = "#36e694";
    ac3.style.backgroundColor = "#36e694";
}

function animateSwap(anim1, anim2, anim3) {
    anim1.style.animation = "buttonAbout 3s infinite";
    anim2.style.animation = "none";
    anim3.style.animation = "none";
}

// Button Swap About
const title = document.querySelector("#title");
const fitur = document.querySelector("#fitur");
const tujuan = document.querySelector("#tujuan");

// Content ABout
const titleNgabar = document.querySelector(".title-ngabar");
const fiturNgabar = document.querySelector(".fitur-ngabar");
const tujuanNgabar = document.querySelector(".tujuan-ngabar");

if (title) {
    title.addEventListener("click", () => {
        swapAbout(titleNgabar, fiturNgabar, tujuanNgabar);
        isActived(title, fitur, tujuan);
        animateSwap(title, fitur, tujuan);
    });
}
if (fitur) {
    fitur.addEventListener("click", () => {
        swapAbout(fiturNgabar, titleNgabar, tujuanNgabar);
        isActived(fitur, title, tujuan);
        animateSwap(fitur, title, tujuan);
    });
}
if (tujuan) {
    tujuan.addEventListener("click", () => {
        swapAbout(tujuanNgabar, titleNgabar, fiturNgabar);
        isActived(tujuan, title, fitur);
        animateSwap(tujuan, fitur, title);
    });
}

// Function Play Song Home Page
const song = document.querySelector("#myAudio");
const songButton = document.querySelector("#songButton");
function songBGM() {
    if (song.paused) {
        song.play();
    } else {
        song.pause();
    }
}

if (songButton) {
    songButton.addEventListener("click", songBGM);
}

// Sound Hello Home
const buttonHome = document.getElementById("ImgHome");
const hello = document.getElementById("hello");
if (buttonHome) {
    buttonHome.addEventListener("click", () => {
        hello.play();
    });
}

// Dark Mode
const bungkus = document.querySelector(".bungkus");
const slider = document.querySelector(".sliderDark");
const darkActive = document.querySelector(".darkActive");
let isDarkMode = localStorage.getItem("isDarkMode") === "true"; // Ambil status isDarkMode dari localStorage

if (slider) {
    // Atur tampilan awal berdasarkan status isDarkMode
    if (isDarkMode) {
        document.body.classList.add("darkActive");
        slider.style.transform = "translateX(36px)";
        slider.style.backgroundColor = "#fff";
    } else {
        document.body.classList.remove("darkActive");
        slider.style.transform = "translateX(0)";
        slider.style.backgroundColor = "#f7c954";
    }

    slider.addEventListener("click", () => {
        document.body.classList.toggle("darkActive");

        // Toggle posisi slider
        if (isDarkMode) {
            slider.style.transform = "translateX(0)";
            slider.style.backgroundColor = "#f7c954";
        } else {
            slider.style.transform = "translateX(36px)";
            slider.style.backgroundColor = "#fff";
        }

        // Toggle status
        isDarkMode = !isDarkMode;
        localStorage.setItem("isDarkMode", isDarkMode); // Simpan status isDarkMode ke dalam localStorage
    });
}

// JS Detail Quran
document.addEventListener("DOMContentLoaded", () => {
    const detailQuran = document.querySelectorAll(".detailQuran");

    if (detailQuran) {
        detailQuran.forEach((card) => {
            card.addEventListener("click", () => {
                // Hapus kelas 'selected' dari semua card
                detailQuran.forEach((c) => c.classList.remove("selected"));

                // Tambahkan kelas 'selected' ke card yang diklik
                card.classList.add("selected");
            });
        });
    }
});
