<?php
$session = session();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Colegio Bryce</title>
    <link rel="stylesheet" href="<?php echo base_url('css/tailwind.css'); ?>">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 28px;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            font-size: 14px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
            margin-top: 10px;
        }
        .btn-login:hover {
            transform: translateY(-2px);
        }
        .alert {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 14px;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .info-box {
            background: #f0f4ff;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
        .info-box h3 {
            margin-top: 0;
            color: #333;
            font-weight: bold;
        }
        .back-home {
            text-align: center;
            margin-top: 20px;
        }
        .back-home a {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .back-home a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Colegio Bryce</h1>
        
        <?php if ($session->has('error')): ?>
            <div class="alert alert-error">
                <?php echo $session->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <?php if ($session->has('success')): ?>
            <div class="alert alert-success">
                <?php echo $session->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo base_url('validar'); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" id="dni" name="dni" placeholder="Ingrese su DNI" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>

            <button type="submit" class="btn-login">Iniciar Sesión</button>
        </form>

        <div class="info-box">
            <h3>📝 Credenciales de Prueba:</h3>
            <p><strong>Estudiante:</strong> DNI: 12345678 | Contraseña: estudiante123</p>
            <p><strong>Profesor:</strong> DNI: 87654321 | Contraseña: profesor123</p>
        </div>

        <div class="back-home">
            <a href="<?php echo base_url(''); ?>">← Volver al inicio</a>
        </div>
    </div>
</body>
</html>
