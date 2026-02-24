<?php
$session = session();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Profesor - Colegio Bryce</title>
    <link rel="stylesheet" href="<?php echo base_url('css/tailwind.css'); ?>">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            font-size: 32px;
            margin: 0;
            font-weight: bold;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        .logout-container {
            text-align: right;
            margin-bottom: 20px;
        }
        .logout-btn {
            background: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        .logout-btn:hover {
            background: #c82333;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            color: #333;
            margin: 0 0 25px 0;
            font-size: 24px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        .form-row.full {
            grid-template-columns: 1fr;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            font-size: 14px;
        }
        input[type="text"],
        input[type="password"],
        select,
        textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        select {
            cursor: pointer;
        }
        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
            align-self: flex-start;
            margin-top: 10px;
        }
        .btn-submit:hover {
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
        .instructions {
            background: #e7f3ff;
            padding: 15px;
            border-left: 4px solid #2196F3;
            margin-bottom: 25px;
            border-radius: 4px;
            color: #1976D2;
            font-size: 14px;
        }
        .trimestre-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            .trimestre-group {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Panel del Profesor</h1>
        <p>Registrar calificaciones de estudiantes</p>
    </div>

    <div class="container">
        <div class="logout-container">
            <a href="<?php echo base_url('logout'); ?>" class="logout-btn">Cerrar Sesión</a>
        </div>

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

        <div class="form-container">
            <h2>Registrar Nueva Calificación</h2>
            
            <div class="instructions">
                📋 Selecciona el estudiante, curso y trimestre para registrar la calificación.
            </div>

            <form action="<?php echo base_url('guardar-nota'); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-row">
                    <div class="form-group">
                        <label for="estudiante_id">Estudiante <span style="color: red;">*</span></label>
                        <select id="estudiante_id" name="estudiante_id" required>
                            <option value="">-- Seleccionar Estudiante --</option>
                            <?php if (!empty($estudiantes)): ?>
                                <?php foreach ($estudiantes as $estudiante): ?>
                                    <option value="<?php echo $estudiante['id']; ?>">
                                        <?php echo htmlspecialchars($estudiante['nombres'] . ' ' . $estudiante['apellidos']); ?> 
                                        (<?php echo htmlspecialchars($estudiante['grado'] . ' ' . $estudiante['seccion']); ?>)
                                    </option>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <option value="">No hay estudiantes registrados</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="curso_id">Curso <span style="color: red;">*</span></label>
                        <select id="curso_id" name="curso_id" required>
                            <option value="">-- Seleccionar Curso --</option>
                            <?php if (!empty($cursos)): ?>
                                <?php foreach ($cursos as $curso): ?>
                                    <option value="<?php echo $curso['id']; ?>">
                                        <?php echo htmlspecialchars($curso['nombre']); ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <option value="">No hay cursos registrados</option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="trimestre">Trimestre <span style="color: red;">*</span></label>
                        <select id="trimestre" name="trimestre" required>
                            <option value="">-- Seleccionar Trimestre --</option>
                            <option value="1">Primer Trimestre</option>
                            <option value="2">Segundo Trimestre</option>
                            <option value="3">Tercer Trimestre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado <span style="color: red;">*</span></label>
                        <select id="estado" name="estado" required>
                            <option value="">-- Seleccionar Estado --</option>
                            <option value="Aprobado">Aprobado</option>
                            <option value="Desaprobado">Desaprobado</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Registrar Calificación</button>
            </form>
        </div>

        <!-- Información adicional -->
        <div style="margin-top: 30px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
            <h3 style="color: #667eea; margin-top: 0;">Información del Sistema</h3>
            <p style="color: #666; font-size: 14px; margin: 10px 0;">
                Este formulario permite registrar las calificaciones trimestrales de los estudiantes. 
                Los datos se guardarán en el sistema y podrán ser consultados por los estudiantes a través de su panel personal.
            </p>
            <p style="color: #999; font-size: 12px; margin: 10px 0;">
                <strong>Nota:</strong> Cada estudiante solo puede tener una calificación por curso y trimestre.
            </p>
        </div>
    </div>
</body>
</html>
