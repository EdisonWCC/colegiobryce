import './bootstrap.js';

// ========== CARRUSEL DE IMÁGENES HERO ==========

class HeroCarousel {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.hero-image');
        this.dots = document.querySelectorAll('.carousel-dot');
        this.autoPlayInterval = null;
        this.autoPlayDelay = 5000; // 5 segundos
        
        this.init();
    }

    init() {
        if (this.slides.length === 0) return;

        // Event listeners para botones
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');

        if (prevBtn) prevBtn.addEventListener('click', () => this.prevSlide());
        if (nextBtn) nextBtn.addEventListener('click', () => this.nextSlide());

        // Event listeners para puntos
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });

        // Auto-play del carrusel
        this.startAutoPlay();

        // Pausar auto-play al pasar mouse
        const carousel = document.getElementById('hero-carousel');
        if (carousel) {
            carousel.addEventListener('mouseenter', () => this.stopAutoPlay());
            carousel.addEventListener('mouseleave', () => this.startAutoPlay());
        }
    }

    showSlide(index) {
        // Validar índice
        if (index >= this.slides.length) {
            this.currentSlide = 0;
        } else if (index < 0) {
            this.currentSlide = this.slides.length - 1;
        } else {
            this.currentSlide = index;
        }

        // Ocultar todas las imágenes
        this.slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (this.dots[i]) {
                this.dots[i].classList.remove('active');
            }
        });

        // Mostrar imagen actual
        this.slides[this.currentSlide].classList.add('active');
        if (this.dots[this.currentSlide]) {
            this.dots[this.currentSlide].classList.add('active');
        }
    }

    nextSlide() {
        this.showSlide(this.currentSlide + 1);
        this.resetAutoPlay();
    }

    prevSlide() {
        this.showSlide(this.currentSlide - 1);
        this.resetAutoPlay();
    }

    goToSlide(index) {
        this.showSlide(index);
        this.resetAutoPlay();
    }

    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => {
            this.nextSlide();
        }, this.autoPlayDelay);
    }

    stopAutoPlay() {
        if (this.autoPlayInterval) {
            clearInterval(this.autoPlayInterval);
            this.autoPlayInterval = null;
        }
    }

    resetAutoPlay() {
        this.stopAutoPlay();
        this.startAutoPlay();
    }
}

// Inicializar carrusel cuando el DOM esté listo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        new HeroCarousel();
    });
} else {
    new HeroCarousel();
}

// ========== ANIMACIONES AL SCROLL (Intersection Observer) ==========

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Agregar clase de animación
            entry.target.classList.add('animate-fadeInUp', 'opacity-100');
            entry.target.classList.remove('opacity-0');
            
            // Desdeñarse después de animar
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observar elementos con animaciones
document.addEventListener('DOMContentLoaded', () => {
    const animatableElements = document.querySelectorAll('[class*="animate-fadeInUp"], [class*="animate-slideInUp"], [class*="animate-fadeInLeft"], [class*="animate-fadeInRight"]');
    animatableElements.forEach(el => {
        if (!el.classList.contains('animate-fadeInUp') && !el.classList.contains('animate-slideInUp')) {
            observer.observe(el);
        }
    });
});

// ========== SMOOTH SCROLL MEJORADO ==========

// Mejorar smooth scroll en botones y enlaces
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        
        const element = document.querySelector(href);
        if (element) {
            e.preventDefault();
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ========== EFECTOS DE HOVER EN TARJETAS ==========

document.querySelectorAll('.card-hover').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});

// ========== ANIMACIÓN DE NÚMEROS (Counter) ==========

class CountUpAnimation {
    constructor(element, endValue, duration = 2000) {
        this.element = element;
        this.endValue = parseInt(endValue.replace(/[^0-9]/g, ''));
        this.duration = duration;
        this.startValue = 0;
        this.isAnimating = false;
    }

    start() {
        if (this.isAnimating) return;
        
        this.isAnimating = true;
        const startTime = Date.now();

        const animate = () => {
            const now = Date.now();
            const progress = Math.min((now - startTime) / this.duration, 1);
            const currentValue = Math.floor(this.startValue + (this.endValue - this.startValue) * progress);

            // Extraer el sufijo original (%, +, etc)
            const originalText = this.element.textContent;
            const suffix = originalText.replace(/[0-9]/g, '');
            
            this.element.textContent = currentValue + suffix;

            if (progress < 1) {
                requestAnimationFrame(animate);
            }
        };

        animate();
    }
}

// Inicializar counters cuando sean visibles
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && entry.target.textContent.match(/[0-9]/)) {
            const counter = new CountUpAnimation(entry.target, entry.target.textContent, 2000);
            counter.start();
            counterObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.text-4xl, .text-5xl').forEach(el => {
        if (el.textContent.match(/[0-9]/)) {
            counterObserver.observe(el);
        }
    });
});
