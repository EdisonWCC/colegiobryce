<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Colegio Preuniversitario Bryce - Formando líderes del mañana con excelencia académica">
    
    <title><?php echo isset($title) ? $title : 'Colegio Preuniversitario Bryce'; ?></title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (compiled) -->
    <link rel="stylesheet" href="<?php echo base_url('css/tailwind.css'); ?>">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo base_url('css/app.css'); ?>">
    
    <?php if (isset($additionalStyles)): ?>
        <?php echo $additionalStyles; ?>
    <?php endif; ?>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50 backdrop-blur-md bg-opacity-95">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 hover:scale-110 transition-transform duration-300">
                    <a href="<?php echo base_url(''); ?>" class="flex items-center space-x-2">
                        <?php if (file_exists(WRITEPATH . '../public/images/logo.png')): ?>
                            <img src="<?php echo base_url('images/logo.png'); ?>" alt="Bryce" class="h-12 md:h-14 w-auto logo-img hover:scale-105 transition-transform duration-300">
                        <?php else: ?>
                            <div class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white rounded-lg p-2 shadow-lg hover:shadow-xl transition-shadow">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-gray-900 font-playfair">Bryce</span>
                        <?php endif; ?>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="<?php echo base_url(''); ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group <?php echo current_url() === base_url('') ? 'text-blue-600' : ''; ?>">
                        Inicio
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-indigo-700 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="<?php echo base_url('nosotros'); ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group <?php echo strpos(current_url(), 'nosotros') !== false ? 'text-blue-600' : ''; ?>">
                        Nosotros
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-indigo-700 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="<?php echo base_url('programas'); ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group <?php echo strpos(current_url(), 'programas') !== false ? 'text-blue-600' : ''; ?>">
                        Programas
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-indigo-700 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="<?php echo base_url('admission'); ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group <?php echo strpos(current_url(), 'admission') !== false ? 'text-blue-600' : ''; ?>">
                        Admisión
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-indigo-700 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="<?php echo base_url('contacto'); ?>" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-300 relative group <?php echo strpos(current_url(), 'contacto') !== false ? 'text-blue-600' : ''; ?>">
                        Contacto
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-indigo-700 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="<?php echo base_url('contacto'); ?>" class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-2 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-800 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-1 press-effect">
                        Inscríbete
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 animate-slideInUp">
                <div class="flex flex-col space-y-3">
                    <a href="<?php echo base_url(''); ?>" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Inicio</a>
                    <a href="<?php echo base_url('nosotros'); ?>" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Nosotros</a>
                    <a href="<?php echo base_url('programas'); ?>" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Programas</a>
                    <a href="<?php echo base_url('admission'); ?>" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Admisión</a>
                    <a href="<?php echo base_url('contacto'); ?>" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Contacto</a>
                    <a href="<?php echo base_url('contacto'); ?>" class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-2 rounded-lg font-semibold text-center mt-2 hover:from-blue-700 hover:to-indigo-800 transition-all">
                        Inscríbete
                    </a>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Main Content -->
    <main>
        <?php echo $this->renderSection('content'); ?>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <?php if (file_exists(WRITEPATH . '../public/images/logo.png')): ?>
                            <img src="<?php echo base_url('images/logo.png'); ?>" alt="Bryce" class="h-9 w-auto brightness-0 invert">
                        <?php else: ?>
                            <div class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white rounded-lg p-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <span class="text-xl font-bold text-white font-playfair">Bryce</span>
                        <?php endif; ?>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Formando líderes del mañana con excelencia académica, valores sólidos y preparación integral para el futuro universitario.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417a9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.18.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo base_url(''); ?>" class="hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="<?php echo base_url('nosotros'); ?>" class="hover:text-white transition-colors">Nosotros</a></li>
                        <li><a href="<?php echo base_url('programas'); ?>" class="hover:text-white transition-colors">Programas</a></li>
                        <li><a href="<?php echo base_url('admission'); ?>" class="hover:text-white transition-colors">Admisión</a></li>
                        <li><a href="<?php echo base_url('contacto'); ?>" class="hover:text-white transition-colors">Contacto</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-white font-semibold mb-4">Contacto</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Av. Principal 123, Ciudad</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>info@bryce.edu</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
                <p>&copy; <?php echo date('Y'); ?> Colegio Preuniversitario Bryce. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    
    <?php if (isset($additionalScripts)): ?>
        <?php echo $additionalScripts; ?>
    <?php endif; ?>
    
    <script type="module" src="<?php echo base_url('js/app.js'); ?>"></script>
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
