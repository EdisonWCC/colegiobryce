<?php $this->extend('layout'); ?>

<?php $this->section('content'); ?>
<!-- Sección Nosotros -->
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center animate-slideInUp">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 font-playfair animate-fadeInUp">Sobre Nosotros</h1>
            <p class="text-xl text-blue-100 animate-fadeInUp delay-100">
                Una institución comprometida con la excelencia educativa y la formación integral de nuestros estudiantes
            </p>
        </div>
    </div>
</section>

<!-- Imagen institucional -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto rounded-2xl overflow-hidden shadow-2xl hover-zoom card-hover animate-fadeInUp">
            <img src="<?php echo base_url('images/about/campus.jpg'); ?>" alt="Instalaciones Bryce" class="w-full h-[400px] md:h-[500px] object-cover">
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl card-hover animate-fadeInUp delay-100">
                <div class="bg-blue-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4 font-playfair">Nuestra Misión</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Formar estudiantes integrales con excelencia académica, valores sólidos y habilidades para enfrentar los desafíos del mundo universitario y profesional, preparándolos para ser líderes comprometidos con el desarrollo de nuestra sociedad.
                </p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-8 rounded-xl card-hover animate-fadeInUp delay-200">
                <div class="bg-purple-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating" style="animation-delay: 0.3s;">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4 font-playfair">Nuestra Visión</h2>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Ser reconocidos como la institución preuniversitaria líder en la región, destacando por nuestros altos índices de ingreso universitario, la calidad de nuestros programas académicos y el desarrollo integral de nuestros estudiantes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fadeInUp">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">Nuestros Valores</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Los principios que guían nuestra labor educativa
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg card-hover animate-fadeInUp delay-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Excelencia</h3>
                <p class="text-gray-600">
                    Buscamos la mejora continua en todos los aspectos de nuestra labor educativa, estableciendo estándares altos y trabajando incansablemente para alcanzarlos.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg card-hover animate-fadeInUp delay-200">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Integridad</h3>
                <p class="text-gray-600">
                    Actuamos con honestidad, transparencia y responsabilidad en todas nuestras acciones, siendo ejemplo para nuestros estudiantes.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg card-hover animate-fadeInUp delay-300">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Compromiso</h3>
                <p class="text-gray-600">
                    Nos dedicamos plenamente al éxito de cada estudiante, brindando apoyo personalizado y acompañamiento en su proceso educativo.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg card-hover animate-fadeInUp delay-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Innovación</h3>
                <p class="text-gray-600">
                    Adoptamos metodologías modernas y tecnologías educativas para mantenernos a la vanguardia en la enseñanza.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg card-hover animate-fadeInUp delay-200">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Respeto</h3>
                <p class="text-gray-600">
                    Fomentamos un ambiente de respeto mutuo, inclusión y diversidad donde todos se sienten valorados y escuchados.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg card-hover animate-fadeInUp delay-300">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Liderazgo</h3>
                <p class="text-gray-600">
                    Desarrollamos habilidades de liderazgo en nuestros estudiantes, preparándolos para ser agentes de cambio positivo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- History -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">Nuestra Historia</h2>
            </div>

            <div class="prose prose-lg max-w-none">
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    Fundado hace más de 15 años, el Colegio Preuniversitario Bryce nació con la visión de brindar una educación de calidad que prepare a los estudiantes para los desafíos del mundo universitario. Desde nuestros inicios, nos hemos comprometido con la excelencia académica y la formación integral.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    A lo largo de los años, hemos crecido significativamente, expandiendo nuestros programas y mejorando continuamente nuestras instalaciones y metodologías. Nuestro éxito se refleja en los más de 500 estudiantes que han pasado por nuestras aulas y que hoy forman parte de las mejores universidades del país.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed">
                    Hoy, seguimos innovando y adaptándonos a las necesidades del mundo moderno, manteniendo siempre nuestro compromiso con la excelencia y el desarrollo integral de nuestros estudiantes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">Nuestro Equipo</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Profesionales comprometidos con tu éxito académico
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                <img src="<?php echo base_url('images/team/1.jpg'); ?>" alt="Dr. Roberto Martínez" class="w-full h-full object-cover">
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Roberto Martínez</h3>
            <p class="text-blue-600 font-semibold mb-4">Director Académico</p>
            <p class="text-gray-600 text-sm">
                Doctor en Educación con más de 20 años de experiencia en educación preuniversitaria.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg text-center">
            <img src="<?php echo base_url('images/team/2.jpg'); ?>" alt="Mg. Ana García" class="w-full h-full object-cover">
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Mg. Ana García</h3>
        <p class="text-purple-600 font-semibold mb-4">Coordinadora de Programas</p>
        <p class="text-gray-600 text-sm">
            Magíster en Pedagogía, especialista en diseño curricular y metodologías innovadoras.
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-lg text-center">
        <div class="w-32 h-32 rounded-full mx-auto mb-4 overflow-hidden ring-4 ring-green-100">
            <img src="<?php echo base_url('images/team/3.jpg'); ?>
                <h3 class=" text-xl font-bold text-gray-900 mb-2">Lic. Carlos López</h3>
            <p class="text-green-600 font-semibold mb-4">Coordinador de Admisiones</p>
            <p class="text-gray-600 text-sm">
                Licenciado en Psicología Educativa, experto en orientación vocacional y admisiones.
            </p>
        </div>
    </div>
    </div>
</section>
<?php $this->endSection(); ?>