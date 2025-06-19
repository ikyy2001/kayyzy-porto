document.addEventListener('DOMContentLoaded', () => {
    // Loading Screen
    const loadingScreen = document.getElementById('loadingScreen');

    setTimeout(() => {
        loadingScreen.classList.add('fade-out');
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 500);
    }, 2500);

    // Custom Cursor
    const cursorOuter = document.querySelector('.cursor-outer');
    const cursorInner = document.querySelector('.cursor-inner');

    if (cursorOuter && cursorInner) {
        let mouseX = 0,
            mouseY = 0;
        let outterX = 0,
            outterY = 0;
        let innerX = 0,
            innerY = 0;

        function animateCursor() {
            outterX += (mouseX - outterX) * 0.15;
            outterY += (mouseY - outterY) * 0.15;
            cursorOuter.style.transform = `translate3d(${outterX - 20}px, ${outterY - 20}px, 0)`;

            innerX += (mouseX - innerX) * 0.25;
            innerY += (mouseY - innerY) * 0.25;
            cursorInner.style.transform = `translate3d(${innerX - 4}px, ${innerY - 4}px, 0)`;

            requestAnimationFrame(animateCursor);
        }

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        const interactiveElements = document.querySelectorAll('a, button, .project-card, .gallery-item, .skill-item, .certificate-card');

        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursorOuter.classList.add('cursor-hover');
                cursorInner.classList.add('cursor-hover');
            });

            element.addEventListener('mouseleave', () => {
                cursorOuter.classList.remove('cursor-hover');
                cursorInner.classList.remove('cursor-hover');
            });
        });

        animateCursor();
    }

    // Gallery Fullscreen
    const galleryItems = document.querySelectorAll('.gallery-item img, .preview-image img');
    const fullscreenContainer = document.querySelector('.fullscreen');

    if (galleryItems.length > 0 && fullscreenContainer) {
        galleryItems.forEach(img => {
            img.addEventListener('click', (e) => {
                e.stopPropagation();

                const fullImg = document.createElement('img');
                fullImg.src = img.src;
                fullImg.alt = img.alt;

                fullscreenContainer.innerHTML = '';
                fullscreenContainer.appendChild(fullImg);

                setTimeout(() => {
                    fullscreenContainer.classList.add('active');
                }, 50);
            });
        });

        fullscreenContainer.addEventListener('click', () => {
            fullscreenContainer.classList.remove('active');
        });
    }

    // Mobile Menu Toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    if (mobileMenuToggle && mobileNav) {
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenuToggle.classList.toggle('active');
            mobileNav.classList.toggle('active');
        });

        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuToggle.classList.remove('active');
                mobileNav.classList.remove('active');
            });
        });
    }

    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    const animateElements = document.querySelectorAll('.project-card, .certificate-card, .gallery-item, .skill-item');
    animateElements.forEach(el => observer.observe(el));
});