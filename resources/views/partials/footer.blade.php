<style>
    footer {
        background-color: #2f4f4f;
        color: #fff;
        padding: 3rem 1rem;
        border-top: 5px solid #1f7a6d;
        text-align: center;
        font-family: 'Segoe UI', sans-serif;
    }

    footer .container {
        max-width: 1000px;
        margin: 0 auto;
    }

    footer .quality-logos {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2rem;
        flex-wrap: wrap;
        margin-bottom: 2rem;
    }

    footer .quality-logos img {
        height: 90px;
        max-width: 150px;
        object-fit: contain;
        transition: transform 0.3s ease, filter 0.3s ease;
        filter: brightness(1.1) contrast(1.1);
    }

    footer .quality-logos img:hover {
        transform: scale(1.1);
        filter: brightness(1.2);
    }

    footer p {
        font-size: 0.95rem;
        opacity: 0.85;
        margin: 0;
        letter-spacing: 0.3px;
    }

    @media (max-width: 576px) {
        footer .quality-logos {
            flex-direction: column;
            gap: 1.5rem;
        }
    }
</style>

<footer>
    <div class="container">
        <div class="quality-logos">
            <img src="assets/img/sni.png" alt="Logo SNI" />
            <img src="assets/img/ias.png" alt="Logo IAS" />
            <img src="assets/img/logo.png" alt="Logo Forte Ceramics" />
        </div>
        <p>&copy; 2025 Forte Ceramics. All rights reserved.</p>
    </div>
</footer>