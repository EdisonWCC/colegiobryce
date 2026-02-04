<?php $this->extend('layout'); ?>

<?php $this->section('content'); ?>
    <!-- Hero Section con Carrusel de Imágenes -->
    <section id="hero-carousel" class="relative bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-800 text-white overflow-hidden min-h-screen flex items-center">
        <!-- Contenedor de imágenes con transiciones -->
        <div class="absolute inset-0 hero-images-container">
            <img src="<?php echo base_url('images/hero/hero.jpg'); ?>" alt="Colegio Bryce - Imagen 1" class="hero-image active w-full h-full object-cover transition-opacity duration-1000">
            <img src="<?php echo base_url('images/hero/hero1.jpg'); ?>" alt="Colegio Bryce - Imagen 2" class="hero-image w-full h-full object-cover transition-opacity duration-1000">
            <img src="<?php echo base_url('images/hero/hero2.jpg'); ?>" alt="Colegio Bryce - Imagen 3" class="hero-image w-full h-full object-cover transition-opacity duration-1000">
            <img src="<?php echo base_url('images/hero/hero3.jpg'); ?>" alt="Colegio Bryce - Imagen 4" class="hero-image w-full h-full object-cover transition-opacity duration-1000">
            <!-- Gradiente oscuro DENTRO del contenedor de imágenes -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-blue-900/50 to-black/40"></div>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Mejorado: Texto con sombra y mejor contraste -->
                <h1 class="text-5xl md:text-7xl font-bold mb-6 font-playfair drop-shadow-lg text-white" style="text-shadow: 3px 3px 6px rgba(0,0,0,0.5), 0 0 20px rgba(0,0,0,0.3);">
                    Formando Líderes del Mañana
                </h1>
                <p class="text-lg md:text-2xl mb-8 text-white font-semibold drop-shadow-lg" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.4), 0 0 15px rgba(0,0,0,0.3);">
                    Excelencia académica, valores sólidos y preparación integral para tu futuro universitario
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo base_url('contacto'); ?>" class="bg-gradient-to-r from-white to-blue-50 text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:from-blue-50 hover:to-white transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1 hover:scale-105 duration-300">
                        Inscríbete Ahora
                    </a>
                    <a href="<?php echo base_url('nosotros'); ?>" class="bg-white/15 backdrop-blur-sm border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 hover:scale-105 duration-300">
                        Conoce Más
                    </a>
                </div>
            </div>
        </div>

        <!-- Controles del Carrusel -->
        <div class="absolute bottom-24 left-1/2 transform -translate-x-1/2 flex gap-3 z-20">
            <!-- Puntos indicadores -->
            <button class="carousel-dot active w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all duration-300" data-slide="0" aria-label="Imagen 1"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-slide="1" aria-label="Imagen 2"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-slide="2" aria-label="Imagen 3"></button>
            <button class="carousel-dot w-3 h-3 rounded-full bg-white/40 hover:bg-white/70 transition-all duration-300" data-slide="3" aria-label="Imagen 4"></button>
        </div>

        <!-- Botones de navegación -->
        <button id="carousel-prev" class="absolute left-4 md:left-8 top-1/2 transform -translate-y-1/2 z-20 bg-white/20 hover:bg-white/40 text-white p-3 rounded-full transition-all duration-300 backdrop-blur-sm border border-white/30" aria-label="Imagen anterior">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="carousel-next" class="absolute right-4 md:right-8 top-1/2 transform -translate-y-1/2 z-20 bg-white/20 hover:bg-white/40 text-white p-3 rounded-full transition-all duration-300 backdrop-blur-sm border border-white/30" aria-label="Siguiente imagen">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fadeInUp">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">
                    ¿Por qué elegir Bryce?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Ofrecemos una educación de calidad que prepara a nuestros estudiantes para los desafíos del futuro
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl shadow-lg card-hover hover:shadow-xl transition-shadow animate-fadeInUp delay-100">
                    <div class="bg-blue-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Excelencia Académica</h3>
                    <p class="text-gray-600">
                        Programas académicos rigurosos diseñados para preparar a los estudiantes para las mejores universidades del país.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-8 rounded-xl shadow-lg card-hover hover:shadow-xl transition-shadow animate-fadeInUp delay-200">
                    <div class="bg-purple-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating" style="animation-delay: 0.3s;">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Profesores Expertos</h3>
                    <p class="text-gray-600">
                        Nuestro equipo docente está compuesto por profesionales altamente calificados y comprometidos con el éxito estudiantil.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-gradient-to-br from-green-50 to-teal-50 p-8 rounded-xl shadow-lg card-hover hover:shadow-xl transition-shadow animate-fadeInUp delay-300">
                    <div class="bg-green-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating" style="animation-delay: 0.6s;">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Preparación Integral</h3>
                    <p class="text-gray-600">
                        Desarrollo de habilidades críticas, liderazgo y valores que van más allá del aula de clases.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Galería -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 animate-fadeInUp">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">Vida en Bryce</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Conoce nuestro día a día y nuestras instalaciones
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3] hover-zoom card-hover animate-fadeInUp delay-100">
                    <img src="<?php echo base_url('images/gallery/about/1.jpg'); ?>" alt="Bryce" class="w-full h-full object-cover">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3] hover-zoom card-hover animate-fadeInUp delay-200">
                    <img src="<?php echo base_url('images/gallery/about/2.jpg'); ?>" alt="Bryce" class="w-full h-full object-cover">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg aspect-[4/3] hover-zoom card-hover animate-fadeInUp delay-300">
                    <img src="<?php echo base_url('images/gallery/about/3.jpg'); ?>" alt="Bryce" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-br from-gray-900 to-gray-800 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="animate-fadeInUp delay-100">
                    <div class="text-4xl md:text-5xl font-bold mb-2 text-blue-400 animate-countUp">95%</div>
                    <div class="text-gray-300">Tasa de Ingreso Universitario</div>
                </div>
                <div class="animate-fadeInUp delay-200">
                    <div class="text-4xl md:text-5xl font-bold mb-2 text-purple-400 animate-countUp">500+</div>
                    <div class="text-gray-300">Estudiantes Activos</div>
                </div>
                <div class="animate-fadeInUp delay-300">
                    <div class="text-4xl md:text-5xl font-bold mb-2 text-green-400 animate-countUp">50+</div>
                    <div class="text-gray-300">Profesores Certificados</div>
                </div>
                <div class="animate-fadeInUp delay-400">
                    <div class="text-4xl md:text-5xl font-bold mb-2 text-yellow-400 animate-countUp">15+</div>
                    <div class="text-gray-300">Años de Experiencia</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Programs Preview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fadeInUp">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">
                    Nuestros Programas
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Programas académicos diseñados para cada nivel y necesidad
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden hover:border-blue-500 hover:shadow-xl transition-all card-hover animate-fadeInUp delay-100 group">
                    <div class="aspect-video overflow-hidden hover-zoom">
                        <img src="<?php echo base_url('images/programs/1.jpg'); ?>" alt="Preparación Preuniversitaria" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Preparación Preuniversitaria</h3>
                        <p class="text-gray-600 mb-6">
                            Programa intensivo para estudiantes que buscan ingresar a las mejores universidades.
                        </p>
                        <a href="<?php echo base_url('programas'); ?>" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                            Ver más →
                        </a>
                    </div>
                </div>
                
                <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden hover:border-purple-500 hover:shadow-xl transition-all card-hover animate-fadeInUp delay-200 group">
                    <div class="aspect-video overflow-hidden hover-zoom">
                        <img src="<?php echo base_url('images/programs/2.jpg'); ?>" alt="Refuerzo Académico" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Refuerzo Académico</h3>
                        <p class="text-gray-600 mb-6">
                            Apoyo personalizado para fortalecer conocimientos en todas las áreas académicas.
                        </p>
                        <a href="<?php echo base_url('programas'); ?>" class="text-purple-600 font-semibold hover:text-purple-700 transition-colors">
                            Ver más →
                        </a>
                    </div>
                </div>
                
                <div class="bg-white border-2 border-gray-200 rounded-xl overflow-hidden hover:border-green-500 hover:shadow-xl transition-all card-hover animate-fadeInUp delay-300 group">
                    <div class="aspect-video overflow-hidden hover-zoom">
                        <img src="<?php echo base_url('images/programs/3.jpg'); ?>" alt="Desarrollo de Habilidades" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Desarrollo de Habilidades</h3>
                        <p class="text-gray-600 mb-6">
                            Talleres y actividades para desarrollar liderazgo, comunicación y pensamiento crítico.
                        </p>
                        <a href="<?php echo base_url('programas'); ?>" class="text-green-600 font-semibold hover:text-green-700 transition-colors">
                            Ver más →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center animate-slideInUp">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 font-playfair animate-fadeInUp">
                ¿Listo para comenzar tu futuro?
            </h2>
            <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto animate-fadeInUp delay-100">
                Únete a nuestra comunidad educativa y da el primer paso hacia tu éxito universitario
            </p>
            <a href="<?php echo base_url('admission'); ?>" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-50 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 press-effect animate-fadeInUp delay-200">
                Iniciar Proceso de Admisión
            </a>
        </div>
    </section>
<?php $this->endSection(); ?>
