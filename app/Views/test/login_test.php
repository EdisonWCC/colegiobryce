<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Login - Sistema de Notas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Courier New', monospace;
            background: #1e1e1e;
            color: #d4d4d4;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        h1 {
            color: #4ec9b0;
            margin-bottom: 20px;
        }
        .section {
            background: #252526;
            border: 1px solid #3e3e42;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #ce9178;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            background: #1e1e1e;
            border: 1px solid #3e3e42;
            color: #d4d4d4;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
            box-sizing: border-box;
        }
        textarea {
            min-height: 200px;
            font-size: 12px;
        }
        button {
            background: #0e639c;
            color: #d4d4d4;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-family: 'Courier New', monospace;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        button:hover {
            background: #1177bb;
        }
        .result {
            background: #1e1e1e;
            border: 1px solid #3e3e42;
            border-radius: 3px;
            padding: 15px;
            margin-top: 15px;
            color: #b4cea8;
            white-space: pre-wrap;
            word-break: break-all;
            font-size: 12px;
            max-height: 400px;
            overflow-y: auto;
        }
        .success {
            color: #4ec9b0;
        }
        .error {
            color: #d16969;
        }
        .warning {
            color: #dcdcaa;
        }
        a {
            color: #0e639c;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 3px;
            border-left: 4px solid;
        }
        .alert-error {
            background: #3a1a1a;
            border-left-color: #d16969;
            color: #d16969;
        }
        .alert-success {
            background: #1a3a2a;
            border-left-color: #4ec9b0;
            color: #4ec9b0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧪 Test Login - Sistema de Notas</h1>

        <?php if (isset($lastError) && $lastError): ?>
            <div class="alert alert-error">
                ❌ Error: <?php echo $lastError; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($lastSuccess) && $lastSuccess): ?>
            <div class="alert alert-success">
                ✓ Éxito: <?php echo $lastSuccess; ?>
            </div>
        <?php endif; ?>

        <!-- Test 1: Verificar POST -->
        <div class="section">
            <h2>Test 1: Verificar Envío POST</h2>
            <p>Este test verifica que el método POST se envía correctamente.</p>
            
            <form id="testForm" method="POST" action="<?php echo base_url('test/validar-test'); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="dni">DNI:</label>
                    <input type="text" id="dni" name="dni" value="12345678">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" value="12345678">
                </div>

                <button type="button" onclick="testPost()">🔍 Enviar Test POST</button>
            </form>

            <div id="testResult" style="display: none;">
                <h3 style="color: #4ec9b0; margin-top: 15px;">Resultado:</h3>
                <div class="result" id="resultContent"></div>
            </div>
        </div>

        <!-- Test 2: Envío directo al login -->
        <div class="section">
            <h2>Test 2: Envío Directo al Login (Formulario Real)</h2>
            <p>Este test usa el formulario real del login.</p>
            
            <form method="POST" action="<?php echo base_url('validar'); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="dni2">DNI:</label>
                    <input type="text" id="dni2" name="dni" value="12345678" placeholder="Ingrese su DNI">
                </div>

                <div class="form-group">
                    <label for="password2">Contraseña:</label>
                    <input type="password" id="password2" name="password" value="12345678" placeholder="Ingrese su contraseña">
                </div>

                <button type="submit">🔐 Iniciar Sesión (Test Real)</button>
            </form>
        </div>

        <!-- Test 3: Ver Logs -->
        <div class="section">
            <h2>Test 3: Ver Logs del Sistema</h2>
            <p>Los logs se guardan en: <code>writable/logs/</code></p>
            
            <button onclick="loadLogs()">📋 Cargar Logs</button>
            
            <div id="logsResult" style="display: none;">
                <h3 style="color: #4ec9b0; margin-top: 15px;">Últimos Logs:</h3>
                <div class="result" id="logsContent">Cargando...</div>
            </div>
        </div>

        <!-- Enlaces útiles -->
        <div class="section">
            <h2>🔗 Enlaces Útiles</h2>
            <ul style="list-style: none;">
                <li><a href="<?php echo base_url('login'); ?>">← Volver al Login</a></li>
                <li><a href="<?php echo base_url('debug'); ?>">🔧 Ver Debug</a></li>
                <li><a href="<?php echo base_url('/'); ?>">🏠 Ir al Inicio</a></li>
            </ul>
        </div>
    </div>

    <script>
        async function testPost() {
            const dni = document.getElementById('dni').value;
            const password = document.getElementById('password').value;
            const csrf = document.querySelector('input[name="<?php echo csrf_token(); ?>"]').value;

            try {
                const response = await fetch('<?php echo base_url('test/validar-test'); ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        '<?php echo csrf_header(); ?>': csrf
                    },
                    body: `dni=${encodeURIComponent(dni)}&password=${encodeURIComponent(password)}&<?php echo csrf_token(); ?>=` + csrf
                });

                const data = await response.json();
                
                document.getElementById('testResult').style.display = 'block';
                document.getElementById('resultContent').innerHTML = JSON.stringify(data, null, 2);
            } catch (error) {
                document.getElementById('testResult').style.display = 'block';
                document.getElementById('resultContent').innerHTML = 'Error: ' + error.message;
            }
        }

        function loadLogs() {
            document.getElementById('logsResult').style.display = 'block';
            document.getElementById('logsContent').innerHTML = 'Función no implementada. Revisa writable/logs/ manualmente.';
        }
    </script>
</body>
</html>
