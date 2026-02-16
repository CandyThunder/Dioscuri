<section class="hero" id="hero">
    <video autoplay muted loop playsinline id="bg">
    <source src="./assets/images/bg.mp4" type="video/mp4">
    <track src="captions_de.vtt" kind="captions" srclang="de" label="deutsch_captions">
</video>
    <h1 class="hero-title">Dioscuri</h1>
    <div class="hero-text">
        <p>Exklusiv handgefertigt – Websites auf <br /></p>
        <p>Ihre Geschäftsziele zugeschnitten, die <br /></p>
        <p>messbare Ergebnisse liefern.</p>
    </div>
    <div class="mehr neo">
        <a class="no-hash" href="#projekte">Projekte entdecken
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="down-arrow">
                <path fill="none" d="M0 0h24v24H0V0z"></path>
                <path d="M11 5v11.17l-4.88-4.88c-.39-.39-1.03-.39-1.42 0-.39.39-.39 1.02 0 1.41l6.59 6.59c.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L13 16.17V5c0-.55-.45-1-1-1s-1 .45-1 1z"></path>
            </svg>
        </a>
    </div>
    <script>
        document.addEventListener('onload', function() {
            const video = document.getElementById('bg');
            if (video.paused) {
                video.play().catch(error => console.log('Autoplay failed:', error));
            }
        }, {
            once: true
        });
    </script>
</section>