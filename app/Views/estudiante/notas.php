<?php
$session = session();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Notas - Colegio Bryce</title>
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
        .student-info {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .student-info h2 {
            margin: 0 0 15px 0;
            color: #333;
            font-size: 20px;
        }
        .info-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            font-size: 14px;
            color: #666;
        }
        .info-item strong {
            color: #333;
        }
        .trimestre-container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .trimestre-title {
            font-size: 20px;
            font-weight: bold;
            color: #667eea;
            margin: 0 0 20px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
        }
        .notas-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        .notas-table thead {
            background-color: #f8f9fa;
        }
        .notas-table th {
            padding: 12px;
            text-align: left;
            color: #333;
            font-weight: 600;
            border-bottom: 2px solid #ddd;
        }
        .notas-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            color: #666;
        }
        .notas-table tbody tr:hover {
            background-color: #f9f9f9;
        }
        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .badge-passed {
            background-color: #d4edda;
            color: #155724;
        }
        .badge-failed {
            background-color: #f8d7da;
            color: #721c24;
        }
        .no-data {
            text-align: center;
            color: #999;
            padding: 20px;
            font-style: italic;
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
        .logout-container {
            text-align: right;
            margin-bottom: 20px;
        }
        .alert {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 14px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        @media (max-width: 768px) {
            .info-row {
                grid-template-columns: 1fr;
            }
            .notas-table {
                font-size: 12px;
            }
            .notas-table th,
            .notas-table td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Sistema de Notas</h1>
        <p>Estado de tus calificaciones trimestrales</p>
    </div>

    <div class="container">
        <div class="logout-container">
            <a href="<?php echo base_url('logout'); ?>" class="logout-btn">Cerrar Sesión</a>
        </div>

        <?php if ($session->has('success')): ?>
            <div class="alert alert-success">
                <?php echo $session->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>

        <!-- Información del Estudiante -->
        <div class="student-info">
            <h2>Información del Estudiante</h2>
            <div class="info-row">
                <div>
                    <strong>Nombres:</strong> <?php echo htmlspecialchars($estudiante['nombres'] ?? ''); ?>
                </div>
                <div>
                    <strong>Apellidos:</strong> <?php echo htmlspecialchars($estudiante['apellidos'] ?? ''); ?>
                </div>
                <div>
                    <strong>Grado:</strong> <?php echo htmlspecialchars($estudiante['grado'] ?? ''); ?>
                </div>
                <div>
                    <strong>Sección:</strong> <?php echo htmlspecialchars($estudiante['seccion'] ?? ''); ?>
                </div>
            </div>
        </div>

        <!-- Notas por Trimestre -->
        <?php 
        // Agrupar notas por trimestre
        $notasPorTrimestre = [
            '1' => [],
            '2' => [],
            '3' => []
        ];

        if (!empty($notas)) {
            foreach ($notas as $nota) {
                $notasPorTrimestre[$nota['trimestre']][] = $nota;
            }
        }

        // Mostrar cada trimestre
        foreach (['1', '2', '3'] as $trimestre): 
        ?>
            <div class="trimestre-container">
                <h3 class="trimestre-title">Trimestre <?php echo $trimestre; ?></h3>
                
                <?php if (empty($notasPorTrimestre[$trimestre])): ?>
                    <div class="no-data">
                        No hay calificaciones registradas para este trimestre
                    </div>
                <?php else: ?>
                    <table class="notas-table">
                        <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($notasPorTrimestre[$trimestre] as $nota): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($nota['curso']); ?></td>
                                    <td>
                                        <span class="badge <?php echo $nota['estado'] === 'Aprobado' ? 'badge-passed' : 'badge-failed'; ?>">
                                            <?php echo htmlspecialchars($nota['estado']); ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
