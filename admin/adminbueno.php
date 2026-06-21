<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
        }

        .content {
            display: flex;
            flex: 1;
            min-height: 0;
        }

    

        aside {
            width: 260px;
            background-color: #1e293b;
            padding: 32px 24px;
            display: flex;
            flex-direction: column;
            gap: 32px;
            border-right: 1px solid #475569;
        }

        aside .brand {
            font-size: 24px;
            font-weight: bold;
            color: #f8fafc;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        aside .brand span {
            color: #6366f1;
        }

        aside ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        aside ul li a {
            color: #94a3b8;
            text-decoration: none;
            padding: 12px 16px;
            border-radius: 8px;
            display: block;
            transition: all 0.3s ease;
        }

        aside ul li a:hover, aside ul li a.active {
            background-color: #6366f1;
            color: #f8fafc;
        }

        main {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
            min-height: 0;
        }

        header {
            margin-bottom: 40px;
        }

        footer {
            margin-top: auto;
        }

        header h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        header p {
            color: #94a3b8;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
        }

        .card {
            background-color: #1e293b;
            border-radius: 16px;
            padding: 24px;
            border: 1px solid #475569;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #6366f1;
        }

        .card-header {
            margin-bottom: 24px;
        }

        .card-header h3 {
            font-size: 20px;
            color: #f8fafc;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-header p {
            color: #94a3b8;
            font-size: 14px;
            line-height: 1.4;
        }

        .action-list {
            list-style: none;
            margin-bottom: 24px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .action-list li {
            font-size: 14px;
            color: #f8fafc;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .action-list li::before {
            content: "•";
            color: #6366f1;
            font-size: 19px;
        }

        .card-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: background 0.2s ease;
            text-align: center;
            flex: 1;
        }

        .btn-primary {
            background-color: #6366f1;
            color: #f8fafc;
        }

        .btn-primary:hover {
            background-color: #4f46e5;
        }

        .btn-secondary {
            background-color: #475569;
            color: #f8fafc;
        }

        .btn-secondary:hover {
            background-color: #64748b;
        }
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #111;
  min-width: 160px;
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 5px;
}

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #333;
  color: #5eff6ce5;
}

.dropdown:hover .dropdown-content {
  display: block;
}

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            aside {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #475569;
                padding: 20px 16px;
            }
            main {
                padding: 24px 16px 32px;
            }
            header {
                margin-bottom: 24px;
                text-align: center;
            }
            header h1 {
                font-size: 28px;
            }
            .dashboard-grid {
                grid-template-columns: 1fr;
                gap: 22px;
            }
            .card {
                padding: 20px;
            }
            .card-header h3 {
                font-size: 18px;
            }
            .action-list li {
                font-size: 13px;
            }
            .card-actions {
                flex-direction: column;
            }
            .btn {
                width: 100%;
            }
            .dropdown {
                width: 100%;
            }
            .dropdown-content {
                min-width: unset;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php
include ("encabezadoadmin.php");
?>

    <div class="content">
      <aside>
          <div class="brand">
              <span>⚡</span> AdminPanel
          </div>
          <ul>
              <li><a href="#" class="active">Inicio</a></li>
              <li><a href="../usuarios/read_registro.php">Usuarios</a></li>
              <li><a href="#">Productos</a></li>
              <li><a href="../vendedor/vendedor.php">Ventas</a></li>
              <li><a href="#">Ajustes</a></li>
          </ul>
      </aside>

      <main>
        <header>
            <h1>Panel de Control</h1>
            <p>Bienvenido de nuevo. Aquí tienes las herramientas de gestión del sistema.</p>
        </header>

        <div class="dashboard-grid">

            <div class="card">
                <div class="card-header">
                    <h3>👥 Gestionar Usuarios</h3>
                    <p>Control completo sobre las cuentas de usuario registradas en la plataforma.</p>
                </div>
                <ul class="action-list">
                    <li>Crear nuevos usuarios</li>
                    <li>Editar datos de perfil</li>
                    <li>Eliminar cuentas inactivas</li>
                </ul>
                <div class="card-actions">
                    <a href="readadmin.php" class="btn btn-primary">Acceder</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>🔑 Asignar Roles</h3>
                    <p>Administra los niveles de acceso y permisos del personal del sistema.</p>
                </div>
                <ul class="action-list">
                    <li>Rol: Administrador (Acceso total)</li>
                    <li>Rol: Vendedor (Gestión comercial)</li>
                </ul>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary">Configurar</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>📦 Gestionar ventas</h3>
                    <p>Mantén actualizado el inventario, añade stock y controla el catálogo visible.</p>
                </div>
                <ul class="action-list">
                    <li>Registrar nuevos productos</li>
                    <li>Editar especificaciones y precios</li>
                    <li>Eliminar del catálogo</li>
                </ul>
                <div class="card-actions">
                    <a href="../vendedor/vendedor.php" class="btn btn-primary">Inventario</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>📊 Reportes del Stock</h3>
                    <p>Analiza las métricas de rendimiento globales, errores y estadísticas clave.</p>
                </div>
                <ul class="action-list">
                    <li>Ver gráficas de crecimiento</li>
                    <li>Exportar datos del sistema</li>
                </ul>
                <div class="card-actions">
                    <a href="stock.php" class="btn btn-primary">Ver Reportes</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>💰 Ventas y Pedidos</h3>
                    <p>Monitoreo en tiempo real de las transacciones y estados de envío.</p>
                </div>
                <ul class="action-list">
                    <li>Supervisar ingresos diarios</li>
                    <li>Aprobar o cancelar pedidos</li>
                </ul>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary">Monitorear</a>
                </div>
            </div>

        </div>
    </main>
    </div>
    <?php
      include("../pie_pg.php");
    ?>
</body>
</html>