// Menampilkan pop-up detail produk
function showPopup(title, category, description, image) {
    // Update konten pop-up
    document.getElementById("popupTitle").textContent = title;
    document.getElementById("popupCategory").textContent = category;
    document.getElementById("popupDesc").textContent = description;
    document.getElementById("popupImage").src = image;

    // Tampilkan pop-up
    const popup = document.getElementById("productPopup");
    popup.style.display = "flex";
    setTimeout(() => {
        popup.classList.remove("hide");
    }, 10);

    // Tutup jika klik di luar konten
    popup.addEventListener("click", function (event) {
        if (!event.target.closest(".popup-content")) {
            closePopup();
        }
    });

    // Tombol close
    const closeButton = document.querySelector(".popup-content .btn-close");
    closeButton.addEventListener("click", function (event) {
        event.stopPropagation();
        closePopup();
    });
}

function closePopup() {
    const popup = document.getElementById("productPopup");
    popup.classList.add("hide");
    setTimeout(() => {
        popup.style.display = "none";
    }, 500);
}
