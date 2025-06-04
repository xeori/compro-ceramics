<!-- Tombol WhatsApp di kanan bawah -->
<style>
    #wa-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        border-radius: 50%;
        padding: 0px;
        cursor: pointer;
        z-index: 1000;
    }

    #wa-options {
        position: fixed;
        bottom: 80px;
        right: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        padding: 12px 16px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        width: 220px;
        font-family: "Segoe UI", sans-serif;

        /* animasi awal */
        opacity: 0;
        transform: translateY(20px);
        pointer-events: none;
        transition: all 0.3s ease;
    }

    #wa-options.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .wa-label {
        margin: 0;
        font-size: 0.9rem;
        font-weight: 600;
        color: #455d58;
    }

    .wa-link {
        text-decoration: none;
        color: #455d58;
        font-size: 0.95rem;
        font-weight: 500;
        margin-top: 2px;
    }

    .wa-link:hover {
        text-decoration: underline;
    }

    #wa-options hr {
        margin: 8px 0;
        border: none;
        border-top: 1px solid #ddd;
    }
</style>

<!-- Tombol WhatsApp -->
<div id="wa-button">
    <img src="{{ asset('assets/img/logo-wa.svg') }}" alt="WhatsApp" width="50" height="50">
</div>

<!-- Pilihan kontak -->
<div id="wa-options">
    <div class="wa-contact-group">
        <p class="wa-label">Owner</p>
        <a href="https://wa.me/6281234567890" target="_blank" class="wa-link">+62 8385769227</a>
    </div>
    <hr>
    <div class="wa-contact-group">
        <p class="wa-label">Office</p>
        <a href="https://wa.me/6289876543210" target="_blank" class="wa-link">+62 8525163267</a>
    </div>
</div>




<script>
    const waButton = document.getElementById('wa-button');
    const waOptions = document.getElementById('wa-options');

    waButton.addEventListener('click', () => {
        waOptions.classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
        if (!waButton.contains(e.target) && !waOptions.contains(e.target)) {
            waOptions.classList.remove('show');
        }
    });
</script>