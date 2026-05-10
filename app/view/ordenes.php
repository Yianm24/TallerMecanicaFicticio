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
            <h1 class="page-title">Órdenes de Servicio</h1>
            <p class="page-subtitle">Gestión de operaciones, repuestos y facturación</p>
          </div>
        </div>

        <section class="orders-layout" aria-label="Órdenes">
          <!-- Left: list -->
          <section class="orders-left">
            <article class="orders-panel orders-panel--tall" aria-label="Lista de órdenes">
              <div class="orders-list-head">
                <div class="orders-search control">
                  <span class="control__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                      <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" />
                      <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                  </span>
                  <input class="input input--icon input--bg" type="text" placeholder="Buscar orden..." />
                </div>
                <button class="orders-new" type="button" title="Nueva Orden" aria-label="Nueva Orden">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                  </svg>
                </button>
              </div>

              <div class="orders-list">
                <button class="order-item order-item--active" type="button">
                  <div class="order-item__top">
                    <span class="order-item__id">ORD-1001</span>
                    <span class="chip chip--amber">PENDIENTE</span>
                  </div>
                  <div class="order-item__client">Juan Pérez</div>
                  <div class="order-item__meta">
                    <span>2026-05-09</span>
                    <span class="order-item__total">$0.00</span>
                  </div>
                </button>
              </div>
            </article>
          </section>

          <!-- Right: detail -->
          <section class="orders-right">
            <article class="orders-panel" aria-label="Detalle de orden">
              <div class="order-detail-head">
                <div>
                  <h2 class="order-detail-title">Orden #ORD-1001</h2>
                  <div class="order-detail-meta">
                    <span class="meta-pill">
                      <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke="currentColor" stroke-width="2" />
                      </svg>
                      Juan Pérez
                    </span>
                    <span class="meta-pill">
                      <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3 13l2-5a2 2 0 0 1 2-1h10a2 2 0 0 1 2 1l2 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M5 13v6M19 13v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M7 19h10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      ABC-123
                    </span>
                    <span class="meta-pill">
                      <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M8 2v4M16 2v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2" />
                        <path d="M3 10h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                      2026-05-09
                    </span>
                  </div>
                </div>
                <span class="chip chip--amber chip--status">Pendiente</span>
              </div>

              <div class="order-detail-body">
                <section class="add-items" aria-label="Agregar repuestos">
                  <h3 class="add-items__title">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4a2 2 0 0 0 1-1.73Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                    </svg>
                    Agregar Repuestos a la Orden
                  </h3>

                  <form class="add-items__row">
                    <div class="control">
                      <label class="label label--sm" for="part">Repuesto en Inventario</label>
                      <select id="part" class="select">
                        <option>Seleccione un repuesto...</option>
                        <option>Filtro de Aceite Premium - $25.50 (Stock: 15)</option>
                        <option>Pastillas de Freno - $85.00 (Stock: 8)</option>
                        <option>Batería 12V 60Ah - $120.00 (Stock: 3)</option>
                      </select>
                    </div>

                    <div class="qty">
                      <label class="label label--sm" for="qty">Cant.</label>
                      <input id="qty" class="input" type="number" min="1" value="1" />
                    </div>

                    <button class="icon-cta" type="button" aria-label="Agregar">
                      <svg viewBox="0 0 24 24" fill="none">
                        <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                </section>

                <section aria-label="Ítems de la orden">
                  <h3 class="items-title">Ítems de la Orden</h3>
                  <div class="table-wrap">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Repuesto</th>
                          <th class="td-center">Cant.</th>
                          <th class="td-right">Precio Unit.</th>
                          <th class="td-right">Subtotal</th>
                          <th class="td-right"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="td-name">Filtro de Aceite Premium</div>
                            <div class="mono td-sku">FLT-ACE-001</div>
                          </td>
                          <td class="td-center">1</td>
                          <td class="td-right">$25.50</td>
                          <td class="td-right td-price">$25.50</td>
                          <td class="td-right">
                            <button class="icon-action icon-action--danger" type="button" title="Eliminar" aria-label="Eliminar"><svg viewBox="0 0 24 24" fill="none">
                                <path d="M3 6h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M8 6V4h8v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M19 6l-1 14H6L5 6" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                              </svg></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>

              <div class="order-detail-foot">
                <div class="cta-row">
                  <button class="btn-cta btn-cta--blue" type="button">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Finalizar Orden
                  </button>
                </div>

                <div class="total" aria-label="Total">
                  <span class="total__label">Total</span>
                  <span class="total__value">$25.50</span>
                </div>
              </div>
            </article>
          </section>
        </section>
      </div>
      <footer class="footer">
        <div class="footer__inner">
          <div class="footer__copy">&copy; 2026 Taller Mecánico Las Roscas. Todos los derechos reservados.</div>
          <div class="footer__made">Hecho con <span class="heart" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78Z" fill="currentColor" />
              </svg></span> para ti</div>
        </div>
      </footer>
    </main>
  </div>
</body>

</html>