<?php $this->extend('layout'); ?>

<?php $this->section('content'); ?>
<!-- Programas -->
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center animate-slideInUp">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 font-playfair animate-fadeInUp">Programas Académicos</h1>
            <p class="text-xl text-blue-100 animate-fadeInUp delay-100">
                Formación integral con enfoque moderno
            </p>
        </div>
    </div>
</section>

<!-- Programs -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Program 1 -->
        <div class="mb-16 animate-fadeInUp">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl card-hover">
                        <div class="bg-blue-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4 font-playfair">Educación Secundaria - EBR</h2>
                        <p class="text-gray-700 text-lg mb-6">
                            Ofrecemos Educación Secundaria – Educación Básica Regular (EBR), desarrollando un modelo pedagógico centrado en el estudiante, que fomenta la participación activa, el trabajo colaborativo y el aprendizaje significativo.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Desarrollo de competencias académicas alineadas al Currículo Nacional</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Uso responsable de herramientas tecnológicas en el proceso de aprendizaje</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Aprendizaje basado en proyectos y evaluación formativa</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Tutoría, orientación personal y vocacional permanente</span>
                            </li>
                        </ul>
                        <a href="{{ route('admission') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Más Información
                        </a>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-xl aspect-video max-h-[320px] hover-zoom card-hover">
                    <img src="<?php echo base_url('images/programs/1.jpg'); ?>" alt="Preparación Preuniversitaria" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Program 2 -->
        <div class="mb-16 animate-fadeInUp delay-100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 rounded-xl overflow-hidden shadow-xl aspect-video max-h-[320px] hover-zoom card-hover">
                    <img src="<?php echo base_url('images/programs/2.jpg'); ?>" alt="Refuerzo Académico" class="w-full h-full object-cover">
                </div>
                <div class="order-1 md:order-2">
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-8 rounded-xl card-hover">
                        <div class="bg-purple-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating" style="animation-delay: 0.3s;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4 font-playfair">Áreas Académicas</h2>
                        <p class="text-gray-700 text-lg mb-6">
                            Nuestro programa abarca todas las áreas fundamentales del conocimiento, asegurando una formación integral y equilibrada en todos los campos del saber.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-purple-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Comunicación, Matemática, Ciencia y Tecnología</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-purple-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Ciencias Sociales e Inglés</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-purple-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Arte, Cultura, Educación Física y Religiosa</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-purple-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Educación para el Trabajo y TIC</span>
                            </li>
                        </ul>
                        <a href="{{ route('admission') }}" class="inline-block bg-purple-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors">
                            Más Información
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program 3 -->
        <div class="mb-16 animate-fadeInUp delay-200">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-gradient-to-br from-green-50 to-teal-50 p-8 rounded-xl card-hover">
                        <div class="bg-green-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 animate-floating" style="animation-delay: 0.6s;">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4 font-playfair">Formación en Valores</h2>
                        <p class="text-gray-700 text-lg mb-6">
                            Nuestra propuesta educativa integral incluye formación en valores, ciudadanía y convivencia escolar, complementada con actividades que fortalecen la creatividad, el deporte y la expresión cultural.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Formación en valores y ciudadanía responsable</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Identidad de convivencia escolar armoniosa</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Actividades deportivas y expresión cultural</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Fortalecimiento de la creatividad y expresión</span>
                            </li>
                        </ul>
                        <a href="{{ route('admission') }}" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition-colors press-effect">
                            Más Información
                        </a>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-xl aspect-video max-h-[320px] hover-zoom card-hover">
                    <img src="<?php echo base_url('images/programs/3.jpg'); ?>" alt="Desarrollo de Habilidades" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center animate-slideInUp">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 font-playfair animate-fadeInUp">
            ¿Qué programa es el adecuado para ti?
        </h2>
        <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto animate-fadeInUp delay-100">
            Nuestro equipo de admisiones está listo para ayudarte a elegir el programa que mejor se adapte a tus necesidades y objetivos
        </p>
        <a href="{{ route('contacto') }}" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-50 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 press-effect animate-fadeInUp delay-200">
            Contáctanos
        </a>
    </div>
</section>
<?php $this->endSection(); ?>