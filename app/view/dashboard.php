<!doctype html>
<html lang="es">

<!-- <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel de Control - Las Roscas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./styles.css" />
</head> -->
<?php
include "app/view/head/head.php";
?>

<body>
  <input id="nav-toggle" class="nav-toggle" type="checkbox" />

  <div class="shell">
    <?php
    include 'header\header.php';
    ?>
    <!-- Main content -->
    <main class="main">
      <div class="container">
        <div class="page-header">
          <h1 class="page-title">Panel de Control</h1>
          <div class="page-date">
            sábado, 9 de mayo de 2026
          </div>
        </div>

        <section class="stats" aria-label="Estadísticas">
          <article class="stat-card">
            <div class="stat-card__icon stat-card__icon--blue" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" />
                <path d="M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke="currentColor" stroke-width="2" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
            </div>
            <div>
              <div class="stat-card__label">Clientes Registrados</div>
              <div class="stat-card__value">248</div>
            </div>
          </article>

          <article class="stat-card">
            <div class="stat-card__icon stat-card__icon--emerald" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M14.7 6.3a4 4 0 0 0-5.66 5.66L3 18l3 3 6.04-6.04a4 4 0 0 0 5.66-5.66l-3 3-3-3 3-3Z"
                  stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
              </svg>
            </div>
            <div>
              <div class="stat-card__label">Repuestos en Stock</div>
              <div class="stat-card__value">1,432</div>
            </div>
          </article>

          <article class="stat-card">
            <div class="stat-card__icon stat-card__icon--amber" aria-hidden="true">
              <!-- activity -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M22 12h-4l-3 9-4-18-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div>
              <div class="stat-card__label">Servicios Activos</div>
              <div class="stat-card__value">12</div>
            </div>
          </article>

          <article class="stat-card">
            <div class="stat-card__icon stat-card__icon--indigo" aria-hidden="true">
              <!-- car -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M3 13l2-5a2 2 0 0 1 2-1h10a2 2 0 0 1 2 1l2 5" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" />
                <path d="M5 13v6M19 13v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M7 19h10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M7.5 16.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM16.5 16.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                  fill="currentColor" />
              </svg>
            </div>
            <div>
              <div class="stat-card__label">Vehículos Atendidos</div>
              <div class="stat-card__value">854</div>
            </div>
          </article>
        </section>

        <section class="grid" aria-label="Contenido">
          <article class="panel panel--wide">
            <div class="panel__header">
              <h2 class="panel__title">
                <span class="panel__title-icon" aria-hidden="true">
                  <!-- trending-up -->
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M23 6l-9.5 9.5-5-5L1 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M17 6h6v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                  </svg>
                </span>
                Últimos Servicios
              </h2>
              <a class="link" href="#">Ver todos</a>
            </div>

            <div class="table-wrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Cliente / Orden</th>
                    <th>Vehículo</th>
                    <th class="td-right">Estado / Tiempo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="td-name">Juan Pérez</div>
                      <div class="mono td-sku">SRV-001</div>
                    </td>
                    <td class="td-vehicle-desc">Toyota Corolla 2019</td>
                    <td class="td-right">
                      <span class="badge badge--blue">En progreso</span>
                      <div class="row__time">Hace 2 horas</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="td-name">María García</div>
                      <div class="mono td-sku">SRV-002</div>
                    </td>
                    <td class="td-vehicle-desc">Honda Civic 2021</td>
                    <td class="td-right">
                      <span class="badge badge--emerald">Completado</span>
                      <div class="row__time">Hace 5 horas</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="td-name">Carlos López</div>
                      <div class="mono td-sku">SRV-003</div>
                    </td>
                    <td class="td-vehicle-desc">Ford Ranger 2018</td>
                    <td class="td-right">
                      <span class="badge badge--amber">Esperando repuesto</span>
                      <div class="row__time">Ayer</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="td-name">Ana Martínez</div>
                      <div class="mono td-sku">SRV-004</div>
                    </td>
                    <td class="td-vehicle-desc">Chevrolet Tracker 2022</td>
                    <td class="td-right">
                      <span class="badge badge--emerald">Completado</span>
                      <div class="row__time">Ayer</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </article>

          <article class="panel">
            <div class="panel__header">
              <h2 class="panel__title">
                <span class="panel__title-icon panel__title-icon--rose" aria-hidden="true">
                  <!-- alert-circle -->
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                    <path d="M12 8v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path d="M12 16h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                  </svg>
                </span>
                Stock Bajo
              </h2>
            </div>

            <div class="table-wrap" style="padding-bottom: 16px;">
              <table class="table table--alerts">
                <thead>
                  <tr>
                    <th class="td-fit">Repuesto</th>
                    <th>Stock</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="td-fit">
                      <div class="td-name">Filtro de Aceite (Toyota)</div>
                      <div class="td-sku">Mínimo: 5</div>
                    </td>
                    <td class="alert__value">2</td>
                  </tr>
                  <tr>
                    <td class="td-fit">
                      <div class="td-name">Pastillas de Freno (Honda)</div>
                      <div class="td-sku">Mínimo: 4</div>
                    </td>
                    <td class="alert__value">1</td>
                  </tr>
                  <tr>
                    <td class="td-fit">
                      <div class="td-name">Batería 12V 60Ah</div>
                      <div class="td-sku">Mínimo: 3</div>
                    </td>
                    <td class="alert__value">0</td>
                  </tr>
                </tbody>
              </table>
              <div style="padding: 0 16px;">
                <button class="btn btn--muted" type="button">Hacer pedido</button>
              </div>
            </div>
          </article>
        </section>
      </div>

      <footer class="footer">
        <div class="footer__inner">
          <div class="footer__copy">
            &copy; 2026 Taller Mecánico Las Roscas. Todos los derechos reservados.
          </div>
          <div class="footer__made">
            Hecho con
            <span class="heart" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78Z"
                  fill="currentColor" />
              </svg>
            </span>
            para ti
          </div>
        </div>
      </footer>
    </main>
  </div>
</body>

</html>