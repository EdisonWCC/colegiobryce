<?php $this->extend('layout'); ?>

<?php $this->section('content'); ?>
<!-- Formulario de Admisión -->
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center animate-slideInUp">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 font-playfair animate-fadeInUp">Proceso de Admisión</h1>
            <p class="text-xl text-blue-100 animate-fadeInUp delay-100">
                Únete a nuestra comunidad educativa y comienza tu camino hacia el éxito universitario
            </p>
        </div>
    </div>
</section>

<!-- Admission Process -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fadeInUp">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">Pasos del Proceso</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Un proceso simple y transparente para tu admisión
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <!-- Step 1 -->
            <div class="flex flex-col md:flex-row items-start mb-12 animate-fadeInUp delay-100">
                <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold animate-bounce-custom">
                        1
                    </div>
                </div>
                <div class="flex-1 bg-gray-50 p-8 rounded-xl card-hover">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Solicitud de Información</h3>
                    <p class="text-gray-700 mb-4">
                        Completa nuestro formulario de contacto o visita nuestras instalaciones para conocer más sobre nuestros programas y requisitos de admisión.
                    </p>
                    <a href="{{ route('contacto') }}" class="text-blue-600 font-semibold hover:text-blue-700">
                        Completar formulario →
                    </a>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col md:flex-row items-start mb-12 animate-fadeInUp delay-200">
                <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                    <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold animate-bounce-custom" style="animation-delay: 0.2s;">
                        2
                    </div>
                </div>
                <div class="flex-1 bg-gray-50 p-8 rounded-xl card-hover">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Evaluación Académica</h3>
                    <p class="text-gray-700 mb-4">
                        Realiza una evaluación diagnóstica que nos permitirá conocer tu nivel académico actual y recomendarte el programa más adecuado para ti.
                    </p>
                    <p class="text-sm text-gray-600">
                        La evaluación es sin costo y tiene una duración aproximada de 2 horas.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col md:flex-row items-start mb-12 animate-fadeInUp delay-300">
                <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                    <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold animate-bounce-custom" style="animation-delay: 0.4s;">
                        3
                    </div>
                </div>
                <div class="flex-1 bg-gray-50 p-8 rounded-xl card-hover">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Entrevista Personal</h3>
                    <p class="text-gray-700 mb-4">
                        Participa en una entrevista con nuestro equipo de admisiones donde podrás conocer más detalles sobre nuestros programas y resolver todas tus dudas.
                    </p>
                    <p class="text-sm text-gray-600">
                        La entrevista puede realizarse de forma presencial o virtual.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col md:flex-row items-start mb-12 animate-fadeInUp delay-400">
                <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                    <div class="bg-yellow-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold animate-bounce-custom" style="animation-delay: 0.6s;">
                        4
                    </div>
                </div>
                <div class="flex-1 bg-gray-50 p-8 rounded-xl card-hover">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Documentación</h3>
                    <p class="text-gray-700 mb-4">
                        Presenta la documentación requerida:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                        <li>Certificado de estudios secundarios o constancia de estudios</li>
                        <li>Documento de identidad (copia)</li>
                        <li>Fotografías tamaño carnet</li>
                        <li>Formulario de inscripción completado</li>
                    </ul>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="flex flex-col md:flex-row items-start animate-fadeInUp delay-500">
                <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                    <div class="bg-indigo-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold animate-bounce-custom" style="animation-delay: 0.8s;">
                        5
                    </div>
                </div>
                <div class="flex-1 bg-gray-50 p-8 rounded-xl card-hover">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Confirmación y Matrícula</h3>
                    <p class="text-gray-700 mb-4">
                        Una vez aprobada tu admisión, realiza el proceso de matrícula y pago. Recibirás toda la información sobre horarios, materiales y el inicio de clases.
                    </p>
                    <p class="text-sm text-gray-600">
                        Ofrecemos opciones de pago flexibles y planes de financiamiento.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Requirements -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 animate-fadeInUp">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">Requisitos de Admisión</h2>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg card-hover animate-fadeInUp delay-100">
                <ul class="space-y-4">
                    <li class="flex items-start animate-fadeInUp delay-200">
                        <svg class="w-6 h-6 text-green-600 mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Estudiantes de 4to y 5to de secundaria</h3>
                            <p class="text-gray-600">Estudiantes que estén cursando o hayan completado 4to o 5to año de secundaria.</p>
                        </div>
                    </li>
                    <li class="flex items-start animate-fadeInUp delay-300">
                        <svg class="w-6 h-6 text-green-600 mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Egresados de secundaria</h3>
                            <p class="text-gray-600">Jóvenes que hayan egresado de secundaria y busquen preparación para ingresar a la universidad.</p>
                        </div>
                    </li>
                    <li class="flex items-start animate-fadeInUp delay-400">
                        <svg class="w-6 h-6 text-green-600 mr-4 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Compromiso con la excelencia</h3>
                            <p class="text-gray-600">Disposición para dedicar tiempo y esfuerzo al estudio y al aprendizaje continuo.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center animate-slideInUp">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 font-playfair animate-fadeInUp">
            ¿Listo para comenzar?
        </h2>
        <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto animate-fadeInUp delay-100">
            Contáctanos hoy mismo y da el primer paso hacia tu futuro universitario
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fadeInUp delay-200">
            <a href="{{ route('contacto') }}" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-50 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 press-effect">
                Solicitar Información
            </a>
            <a href="tel:+15551234567" class="inline-block bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-600 transition-all press-effect">
                Llamar Ahora
            </a>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>