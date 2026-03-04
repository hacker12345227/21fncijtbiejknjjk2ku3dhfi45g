// Zorg dat alles pas werkt na laden van de DOM
document.addEventListener('DOMContentLoaded', () => {

    // ===========================
    // 1. Formulier interactie
    // ===========================
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e){
            e.preventDefault(); // voorkomt echte submit
            alert('Bedankt voor je bericht! We nemen snel contact op.');
            form.reset(); // leeg de velden
        });
    });

    // ===========================
    // 2. Sticky header bij scroll
    // ===========================
    const header = document.querySelector('header');
    if(header){
        const stickyOffset = header.offsetTop;
        window.addEventListener('scroll', () => {
            if(window.pageYOffset > stickyOffset){
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });
    }

    // ===========================
    // 3. Lightbox voor impressie/pagina
    // ===========================
    const lightboxImages = document.querySelectorAll('.projecten-grid img');
    if(lightboxImages.length > 0){
        // maak lightbox container
        const lightbox = document.createElement('div');
        lightbox.id = 'lightbox';
        document.body.appendChild(lightbox);

        lightbox.style.position = 'fixed';
        lightbox.style.top = 0;
        lightbox.style.left = 0;
        lightbox.style.width = '100%';
        lightbox.style.height = '100%';
        lightbox.style.background = 'rgba(0,0,0,0.8)';
        lightbox.style.display = 'flex';
        lightbox.style.alignItems = 'center';
        lightbox.style.justifyContent = 'center';
        lightbox.style.opacity = 0;
        lightbox.style.transition = 'opacity 0.3s ease';
        lightbox.style.visibility = 'hidden';
        lightbox.style.zIndex = 1000;

        const img = document.createElement('img');
        img.style.maxWidth = '90%';
        img.style.maxHeight = '90%';
        lightbox.appendChild(img);

        lightbox.addEventListener('click', () => {
            lightbox.style.opacity = 0;
            setTimeout(() => lightbox.style.visibility = 'hidden', 300);
        });

        lightboxImages.forEach(image => {
            image.style.cursor = 'pointer';
            image.addEventListener('click', () => {
                img.src = image.src;
                lightbox.style.visibility = 'visible';
                setTimeout(() => lightbox.style.opacity = 1, 10);
            });
        });
    }

    // ===========================
    // 4. Eventueel smooth scroll voor anchor links
    // ===========================
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e){
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if(target){
                target.scrollIntoView({behavior: 'smooth'});
            }
        });
    });

});
