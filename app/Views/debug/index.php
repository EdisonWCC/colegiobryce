<?php
// Debug - Verificar sesión y datos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBUG - Sistema de Notas</title>
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
            line-height: 1.5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            color: #4ec9b0;
            margin-bottom: 20px;
            border-bottom: 2px solid #4ec9b0;
            padding-bottom: 10px;
        }
        h2 {
            color: #ce9178;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        .section {
            background: #252526;
            border: 1px solid #3e3e42;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .status {
            padding: 10px;
            margin: 10px 0;
            border-radius: 3px;
            border-left: 4px solid;
        }
        .status.active {
            background: #1a3a2a;
            border-left-color: #4ec9b0;
            color: #4ec9b0;
        }
        .status.inactive {
            background: #3a1a1a;
            border-left-color: #d16969;
            color: #d16969;
        }
        .info-row {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 20px;
            padding: 8px 0;
            border-bottom: 1px solid #3e3e42;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            color: #ce9178;
            font-weight: bold;
        }
        .value {
            color: #b4cea8;
            word-break: break-all;
        }
        .null {
            color: #808080;
            font-style: italic;
        }
        code {
            background: #1e1e1e;
            padding: 2px 4px;
            border-radius: 3px;
            color: #ce9178;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 13px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #3e3e42;
        }
        th {
            background: #1e1e1e;
            color: #4ec9b0;
            font-weight: bold;
        }
        tr:hover {
            background: #2d2d30;
        }
        .button-group {
            margin: 20px 0;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        a, button {
            background: #0e639c;
            color: #d4d4d4;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-family: 'Courier New', monospace;
            font-size: 13px;
        }
        a:hover, button:hover {
            background: #1177bb;
        }
        .timestamp {
            color: #808080;
            font-size: 12px;
            margin-top: 20px;
            text-align: center;
        }
        .no-data {
            color: #808080;
            font-style: italic;
            padding: 10px;
        }
        .count-badge {
            background: #0e639c;
            color: #d4d4d4;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 12px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 DEBUG - Sistema de Notas Colegio Bryce</h1>

        <!-- Estado de Sesión -->
        <div class="section">
            <h2>📋 Estado de Sesión</h2>
            
            <div class="status <?= $isLoggedIn ? 'active' : 'inactive' ?>">
                <?= $isLoggedIn ? '✓ SESIÓN ACTIVA' : '✗ NO HAY SESIÓN' ?>
            </div>

            <?php if ($isLoggedIn): ?>
                <div class="info-row">
                    <span class="label">Usuario ID:</span>
                    <span class="value"><?= $userId ?></span>
                </div>
                <div class="info-row">
                    <span class="label">DNI:</span>
                    <span class="value"><code><?= $userDni ?></code></span>
                </div>
                <div class="info-row">
                    <span class="label">Rol:</span>
                    <span class="value"><span class="warning"><?= $userRole ?></span></span>
                </div>
            <?php endif; ?>
        </div>

        <!-- Configuración de Base de Datos -->
        <div class="section">
            <h2>🗄️ Configuración de Base de Datos</h2>
            
            <div class="status <?= $dbStatus ? 'active' : 'inactive' ?>">
                <?= $dbMessage ?>
            </div>

            <div class="info-row">
                <span class="label">Host:</span>
                <span class="value"><code><?= $dbHost ?></code></span>
            </div>
            <div class="info-row">
                <span class="label">Base de Datos:</span>
                <span class="value"><code><?= $dbName ?></code></span>
            </div>
            <div class="info-row">
                <span class="label">Usuario:</span>
                <span class="value"><code><?= $dbUser ?></code></span>
            </div>
        </div>

        <!-- Tabla de Usuarios -->
        <div class="section">
            <h2>
                👥 Usuarios en el Sistema
                <span class="count-badge"><?= count($usuarios) ?></span>
            </h2>
            
            <?php if (!empty($usuarios)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DNI</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usr): ?>
                            <tr>
                                <td><?= $usr['id'] ?></td>
                                <td><code><?= $usr['dni'] ?></code></td>
                                <td><code><?= substr($usr['password'], 0, 10) ?>...</code></td>
                                <td><span class="warning"><?= $usr['rol'] ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="no-data">No hay usuarios en la base de datos</p>
            <?php endif; ?>
        </div>

        <!-- Tabla de Estudiantes -->
        <div class="section">
            <h2>
                🎓 Estudiantes en el Sistema
                <span class="count-badge"><?= count($estudiantes) ?></span>
            </h2>
            
            <?php if (!empty($estudiantes)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Grado</th>
                            <th>Sección</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estudiantes as $est): ?>
                            <tr>
                                <td><?= $est['id'] ?></td>
                                <td><?= $est['usuario_id'] ?></td>
                                <td><?= $est['nombres'] ?></td>
                                <td><?= $est['apellidos'] ?></td>
                                <td><?= $est['grado'] ?></td>
                                <td><?= $est['seccion'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="no-data">No hay estudiantes en la base de datos</p>
            <?php endif; ?>
        </div>

        <!-- Tabla de Profesores -->
        <div class="section">
            <h2>
                👨‍🏫 Profesores en el Sistema
                <span class="count-badge"><?= count($profesores) ?></span>
            </h2>
            
            <?php if (!empty($profesores)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($profesores as $prof): ?>
                            <tr>
                                <td><?= $prof['id'] ?></td>
                                <td><?= $prof['usuario_id'] ?></td>
                                <td><?= $prof['nombres'] ?></td>
                                <td><?= $prof['apellidos'] ?></td>
                                <td><?= $prof['especialidad'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="no-data">No hay profesores en la base de datos</p>
            <?php endif; ?>
        </div>

        <!-- Tabla de Cursos -->
        <div class="section">
            <h2>
                📚 Cursos Disponibles
                <span class="count-badge"><?= count($cursos) ?></span>
            </h2>
            
            <?php if (!empty($cursos)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cursos as $curso): ?>
                            <tr>
                                <td><?= $curso['id'] ?></td>
                                <td><?= $curso['nombre'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="no-data">No hay cursos en la base de datos</p>
            <?php endif; ?>
        </div>

        <!-- Tabla de Notas -->
        <div class="section">
            <h2>
                📊 Notas Registradas
                <span class="count-badge"><?= count($notas) ?></span>
            </h2>
            
            <?php if (!empty($notas)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Estudiante</th>
                            <th>Curso</th>
                            <th>Trimestre</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($notas as $nota): ?>
                            <tr>
                                <td><?= $nota['id'] ?></td>
                                <td><?= $nota['nombres'] . ' ' . $nota['apellidos'] ?></td>
                                <td><?= $nota['curso'] ?></td>
                                <td><span class="warning">T<?= $nota['trimestre'] ?></span></td>
                                <td>
                                    <span class="<?= $nota['estado'] === 'Aprobado' ? 'success' : 'error' ?>">
                                        <?= $nota['estado'] ?>
                                    </span>
                                </td>
                                <td><?= $nota['fecha_registro'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="no-data">No hay notas en la base de datos</p>
            <?php endif; ?>
        </div>

        <!-- Botones de Acción -->
        <div class="button-group">
            <a href="<?= base_url('login') ?>">🔐 Ir al Login</a>
            <a href="<?= base_url('/') ?>">🏠 Ir al Inicio</a>
            <?php if ($isLoggedIn): ?>
                <a href="<?= base_url('logout') ?>">🚪 Cerrar Sesión</a>
                <?php if ($userRole === 'estudiante'): ?>
                    <a href="<?= base_url('estudiante') ?>">📝 Mi Panel</a>
                <?php elseif ($userRole === 'profesor'): ?>
                    <a href="<?= base_url('profesor') ?>">📋 Mi Panel</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="timestamp">
            Generado: <?= date('Y-m-d H:i:s') ?>
            | PHP: <?= phpversion() ?>
            | CodeIgniter: 4.7.0
        </div>
    </div>
</body>
</html>
