<?php
// Debug - Verificar sesión y datos

$session = session();
$isLoggedIn = $session->get('isLoggedIn');
$userId = $session->get('id');
$userRole = $session->get('rol');
$userDni = $session->get('dni');

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
        }
        th, td {
            padding: 10px;
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
                    <span class="value"><?= $userDni ?></span>
                </div>
                <div class="info-row">
                    <span class="label">Rol:</span>
                    <span class="value"><?= $userRole ?></span>
                </div>
            <?php endif; ?>
        </div>

        <!-- Configuración de Base de Datos -->
        <div class="section">
            <h2>🗄️ Configuración de Base de Datos</h2>
            
            <?php
            $db = \Config\Database::connect();
            try {
                $query = $db->query('SELECT 1');
                $dbStatus = true;
                $dbMessage = '✓ Conexión exitosa';
            } catch (\Exception $e) {
                $dbStatus = false;
                $dbMessage = '✗ Error de conexión: ' . $e->getMessage();
            }
            ?>

            <div class="status <?= $dbStatus ? 'active' : 'inactive' ?>">
                <?= $dbMessage ?>
            </div>

            <div class="info-row">
                <span class="label">Host:</span>
                <span class="value"><?= config('Database')->default['hostname'] ?></span>
            </div>
            <div class="info-row">
                <span class="label">Base de Datos:</span>
                <span class="value"><?= config('Database')->default['database'] ?></span>
            </div>
            <div class="info-row">
                <span class="label">Usuario:</span>
                <span class="value"><?= config('Database')->default['username'] ?></span>
            </div>
        </div>

        <!-- Tabla de Usuarios -->
        <div class="section">
            <h2>👥 Usuarios en el Sistema</h2>
            
            <?php
            try {
                $usuarios = $db->table('usuarios')->get()->getResultArray();
                ?>
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
                                <td><code><?= $usr['password'] ?></code></td>
                                <td><span class="warning"><?= $usr['rol'] ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p style="margin-top: 10px; color: #4ec9b0;">✓ <?= count($usuarios) ?> usuarios encontrados</p>
            <?php
            } catch (\Exception $e) {
                echo '<p class="error">✗ Error al cargar usuarios: ' . $e->getMessage() . '</p>';
            }
            ?>
        </div>

        <!-- Tabla de Estudiantes -->
        <div class="section">
            <h2>🎓 Estudiantes en el Sistema</h2>
            
            <?php
            try {
                $estudiantes = $db->table('estudiantes')->get()->getResultArray();
                ?>
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
                <p style="margin-top: 10px; color: #4ec9b0;">✓ <?= count($estudiantes) ?> estudiantes encontrados</p>
            <?php
            } catch (\Exception $e) {
                echo '<p class="error">✗ Error al cargar estudiantes: ' . $e->getMessage() . '</p>';
            }
            ?>
        </div>

        <!-- Tabla de Cursos -->
        <div class="section">
            <h2>📚 Cursos Disponibles</h2>
            
            <?php
            try {
                $cursos = $db->table('cursos')->get()->getResultArray();
                ?>
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
                <p style="margin-top: 10px; color: #4ec9b0;">✓ <?= count($cursos) ?> cursos encontrados</p>
            <?php
            } catch (\Exception $e) {
                echo '<p class="error">✗ Error al cargar cursos: ' . $e->getMessage() . '</p>';
            }
            ?>
        </div>

        <!-- Tabla de Notas -->
        <div class="section">
            <h2>📊 Notas Registradas</h2>
            
            <?php
            try {
                $notas = $db->table('notas')
                    ->select('notas.*, estudiantes.nombres, estudiantes.apellidos, cursos.nombre as curso')
                    ->join('estudiantes', 'estudiantes.id = notas.estudiante_id')
                    ->join('cursos', 'cursos.id = notas.curso_id')
                    ->get()
                    ->getResultArray();
                ?>
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
                                <td><span class="warning">Trimestre <?= $nota['trimestre'] ?></span></td>
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
                <p style="margin-top: 10px; color: #4ec9b0;">✓ <?= count($notas) ?> notas encontradas</p>
            <?php
            } catch (\Exception $e) {
                echo '<p class="error">✗ Error al cargar notas: ' . $e->getMessage() . '</p>';
            }
            ?>
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
        </div>
    </div>
</body>
</html>
