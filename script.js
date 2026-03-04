document.addEventListener('DOMContentLoaded', () => {
    // ===== Formulieren =====
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e){
            e.preventDefault();
            alert('Bedankt voor je bericht! We nemen snel contact op.');
            form.reset();
        });
    });

    // ===== Sticky header =====
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

    // ===== Smooth scroll =====
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

    // ===== Lightbox impressie =====
    const lightboxImages = document.querySelectorAll('.projecten-grid img');
    if(lightboxImages.length > 0){
        const lightbox = document.createElement('div');
        lightbox.id = 'lightbox';
        document.body.appendChild(lightbox);
        const img = document.createElement('img');
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
});
