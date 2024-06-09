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
const boxTema = document.querySelector(".boxTema");

const light = document.querySelector(".light");
const dark = document.querySelector(".dark");

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
        modeTema.innerHTML =
            "Light <i class='fa-solid fa-sun'></i> <i class='fa-solid fa-caret-down'></i>";
    });

    dark.addEventListener("click", () => {
        document.body.classList.remove("lightActive");
        document.body.classList.add("darkActive");
        localStorage.setItem("theme", "dark");
        boxTema.style.display = "none"; // Hide the box after selection
        modeTema.innerHTML =
            "Dark <i class='fa-solid fa-moon'></i> <i class='fa-solid fa-caret-down'></i>";
    });
}

// Song Button
const playSong1 = document.querySelector(".playSong1");
const playSong2 = document.querySelector(".playSong2");
const playSong3 = document.querySelector(".playSong3");
const playSong4 = document.querySelector(".playSong4");
const playSong5 = document.querySelector(".playSong5");

// Song Playlist
const play1 = document.querySelector(".play1");
const play2 = document.querySelector(".play2");
const play3 = document.querySelector(".play3");
const play4 = document.querySelector(".play4");
const play5 = document.querySelector(".play5");

if (playSong1) {
    let currentSong = null; // Menyimpan lagu yang sedang diputar
    let isPlaying = false; // Menyimpan status apakah lagu sedang diputar atau tidak
    let previousButton = null; // Menyimpan referensi ke tombol sebelumnya

    function playLagu(playSong1, songElement) {
        playSong1.addEventListener("click", function () {
            // Jika lagu yang saat ini diputar berbeda dari yang dipilih
            if (currentSong && currentSong !== songElement) {
                currentSong.pause();
                currentSong.currentTime = 0;

                // Mengubah ikon tombol sebelumnya menjadi "play"
                if (previousButton) {
                    previousButton.innerHTML =
                        "<i class='fa-solid fa-play'></i>";
                }

                currentSong = null;
                isPlaying = false;
            }

            // Jika lagu yang dipilih adalah yang saat ini sedang diputar
            if (currentSong === songElement) {
                if (isPlaying) {
                    songElement.pause();
                    playSong1.innerHTML = "<i class='fa-solid fa-play'></i>";
                    isPlaying = false;
                } else {
                    songElement.play();
                    playSong1.innerHTML = "<i class='fa-solid fa-pause'></i>";
                    isPlaying = true;
                }
            } else {
                currentSong = songElement;
                songElement.play();
                playSong1.innerHTML = "<i class='fa-solid fa-pause'></i'>";
                isPlaying = true;
            }

            // Menyimpan referensi ke tombol saat ini sebagai tombol sebelumnya
            previousButton = playSong1;
        });
    }

    function song(songElement) {
        songElement.play();
    }

    playLagu(playSong1, play1);
    playLagu(playSong2, play2);
    playLagu(playSong3, play3);
    playLagu(playSong4, play4);
    playLagu(playSong5, play5);
}

// dropdown
const buttonDrop = document.querySelector(".btnDrop");
const buttonDrop1 = document.querySelector(".btnDrop1");
const addContent = document.querySelector(".addContent");
const addArticle = document.querySelector(".addArticle");

if (buttonDrop) {
    buttonDrop.addEventListener("click", () => {
        addContent.classList.toggle("dropdownActive");
    });
}

if (buttonDrop1) {
    buttonDrop1.addEventListener("click", () => {
        addArticle.classList.toggle("dropdownActive");
    });
}
