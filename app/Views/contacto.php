<?php $this->extend('layout'); ?>

<?php $this->section('content'); ?>
<!-- Contacto -->
<section class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 font-playfair">Contáctanos</h1>
            <p class="text-xl text-blue-100">
                Estamos aquí para responder todas tus preguntas y ayudarte en tu proceso de admisión
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6 font-playfair">Envíanos un Mensaje</h2>
                <form class="space-y-6" method="POST" action="#">
                    @csrf
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>

                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-700 mb-2">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>

                    <div>
                        <label for="programa" class="block text-sm font-medium text-gray-700 mb-2">Programa de Interés</label>
                        <select id="programa" name="programa"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            <option value="">Selecciona un programa</option>
                            <option value="preparacion">Preparación Preuniversitaria Intensiva</option>
                            <option value="refuerzo">Refuerzo Académico Personalizado</option>
                            <option value="habilidades">Desarrollo de Habilidades y Liderazgo</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div>
                        <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-2">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:from-blue-700 hover:to-indigo-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Enviar Mensaje
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6 font-playfair">Información de Contacto</h2>

                <div class="space-y-8 mb-8">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Dirección</h3>
                            <p class="text-gray-600">
                                Av. Principal 123<br>
                                Distrito, Ciudad<br>
                                País
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Teléfono</h3>
                            <p class="text-gray-600">
                                <a href="tel:+15551234567" class="hover:text-blue-600 transition-colors">+1 (555) 123-4567</a>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-purple-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Correo Electrónico</h3>
                            <p class="text-gray-600">
                                <a href="mailto:info@bryce.edu" class="hover:text-blue-600 transition-colors">info@bryce.edu</a>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Horario de Atención</h3>
                            <p class="text-gray-600">
                                Lunes a Viernes: 8:00 AM - 6:00 PM<br>
                                Sábados: 9:00 AM - 1:00 PM<br>
                                Domingos: Cerrado
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Imagen o mapa: public/images/contact/contact.jpg --}}
                <div class="rounded-xl overflow-hidden shadow-lg h-64">
                    <img src="{{ bryce_img('contact') }}" alt="Visítanos" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-playfair">Preguntas Frecuentes</h2>
            </div>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-900 mb-2">¿Cuándo inician las clases?</h3>
                    <p class="text-gray-600">Ofrecemos múltiples fechas de inicio durante el año. Contáctanos para conocer las próximas fechas disponibles.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-900 mb-2">¿Ofrecen clases virtuales?</h3>
                    <p class="text-gray-600">Sí, ofrecemos modalidades presenciales y virtuales para adaptarnos a las necesidades de nuestros estudiantes.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-900 mb-2">¿Hay opciones de financiamiento?</h3>
                    <p class="text-gray-600">Sí, ofrecemos planes de pago flexibles y opciones de financiamiento. Consulta con nuestro equipo de admisiones.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-900 mb-2">¿Puedo visitar las instalaciones?</h3>
                    <p class="text-gray-600">Por supuesto. Puedes agendar una visita guiada contactándonos por teléfono o correo electrónico.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>