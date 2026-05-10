<!doctype html>
<html lang="es">
 <?php
    include 'head/head.php';
    ?>
  <body>
    <input id="nav-toggle" class="nav-toggle" type="checkbox" />
    <div class="shell">
    <?php
    include 'header\header.php';
    ?>

      <main class="main">
        <div class="container">
          <div class="page-header">
            <div>
              <h1 class="page-title">Reporte de Ingresos</h1>
              <p class="page-subtitle">Análisis financiero de órdenes de servicio completadas</p>
            </div>
          </div>

          <section class="reports-grid" aria-label="Reporte">
            <!-- Filters -->
            <article class="card reports-grid__filters" aria-label="Filtros de búsqueda">
              <div class="card__body">
                <div class="card__title filters-title">
                  <svg class="filters-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path
                      d="M3 4h18l-7 8v6l-4 2v-8L3 4Z"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linejoin="round"
                    />
                  </svg>
                  Filtros de Búsqueda
                </div>

                <form class="form">
                  <div>
                    <label class="label" for="start-date">Fecha de Inicio</label>
                    <div class="control">
                      <span class="control__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                          <path d="M8 2v4M16 2v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                          <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2" />
                          <path d="M3 10h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </span>
                      <input id="start-date" class="input input--icon input--bg" type="date" value="2026-05-01" />
                    </div>
                  </div>

                  <div>
                    <label class="label" for="end-date">Fecha de Fin</label>
                    <div class="control">
                      <span class="control__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                          <path d="M8 2v4M16 2v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                          <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2" />
                          <path d="M3 10h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </span>
                      <input id="end-date" class="input input--icon input--bg" type="date" value="2026-05-31" />
                    </div>
                  </div>

                  <button class="btn-full btn-full--purple" type="button">
                    <span class="btn-inner">
                      <svg class="btn-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3 3v18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M18 17V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M13 17V5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M8 17v-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      Generar Reporte
                    </span>
                  </button>
                </form>
              </div>
            </article>

            <!-- Results -->
            <section class="reports-grid__results" aria-label="Resultados">
              <article class="kpi" aria-label="Total de ingresos">
                <div class="kpi-content">
                  <p class="kpi__label">Total de Ingresos Calculados</p>
                  <div class="kpi-row">
                    <p class="kpi__value">$600.50</p>
                    <span class="kpi__hint">En el rango seleccionado</span>
                  </div>
                </div>
                <div class="kpi__ghost" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 1v22" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    <path
                      d="M17 5H9.5a3.5 3.5 0 0 0 0 7H14a3.5 3.5 0 0 1 0 7H6"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                    />
                  </svg>
                </div>
              </article>

              <article class="orders-panel" aria-label="Órdenes pagadas">
                <div class="card__head">
                  <h2 class="card__title">
                    <svg class="orders-panel-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M4 2h16v20H4V2Z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linejoin="round"
                      />
                      <path d="M8 6h8M8 10h8M8 14h8" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    Órdenes Pagadas
                  </h2>
                </div>

                <div class="table-wrap">
                  <table class="table table--reports">
                    <thead>
                      <tr>
                        <th>Nº Orden</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th class="td-right">Total Facturado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="td-ord-id">ORD-1001</td>
                        <td class="td-ord-date">2026-05-01</td>
                        <td class="td-ord-client">Juan Pérez</td>
                        <td class="td-right td-ord-total">$150.50</td>
                      </tr>
                      <tr>
                        <td class="td-ord-id">ORD-1002</td>
                        <td class="td-ord-date">2026-05-05</td>
                        <td class="td-ord-client">María Gómez</td>
                        <td class="td-right td-ord-total">$85.00</td>
                      </tr>
                      <tr>
                        <td class="td-ord-id">ORD-1003</td>
                        <td class="td-ord-date">2026-05-08</td>
                        <td class="td-ord-client">Carlos Ruiz</td>
                        <td class="td-right td-ord-total">$320.00</td>
                      </tr>
                      <tr>
                        <td class="td-ord-id">ORD-1004</td>
                        <td class="td-ord-date">2026-05-09</td>
                        <td class="td-ord-client">Ana Martínez</td>
                        <td class="td-right td-ord-total">$45.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </article>
            </section>
          </section>
        </div>
        <footer class="footer">
          <div class="footer__inner">
            <div class="footer__copy">&copy; 2026 Taller Mecánico Las Roscas. Todos los derechos reservados.</div>
            <div class="footer__made">Hecho con <span class="heart" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78Z" fill="currentColor" /></svg></span> para ti</div>
          </div>
        </footer>
      </main>
    </div>
  </body>
</html>
