<!doctype html>
<html lang="es">
<?php
include "app/view/head/head.php";
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
              <h1 class="page-title">Inventario de Repuestos</h1>
              <p class="page-subtitle">Control de stock y precios de materiales</p>
            </div>
          </div>

          <section class="split" aria-label="Inventario">
            <article class="card card--one-third card--sticky" aria-label="Nuevo repuesto">
              <div class="card__head">
                <h2 class="card__title">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                  Nuevo Repuesto
                </h2>
              </div>
              <div class="card__body">
                <form class="form" method="post" action="?url=repuesto">
                  <input type="hidden" name="action" id="actionRepuesto" value="<?php echo $edit_data ? 'update' : ''; ?>">
                  <div>
                    <label class="label" for="p-name">Nombre del Repuesto</label>
                    <div class="control">
                      <span class="control__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4a2 2 0 0 0 1-1.73Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" /></svg>
                      </span>
                      <input id="p-name" class="input input--icon" type="text" name="nombre" placeholder="Ingrese el nombre del repuesto:" value="<?php echo $edit_data ? htmlspecialchars($edit_data['nombre'], ENT_QUOTES) : ''; ?>" aria-label="Nombre repuesto" />
                    </div>
                  </div>
                  <div>
                    <label class="label" for="p-brand">Marca</label>
                    <input id="p-brand" class="input" type="text" name="marca" placeholder="Ej. Bosch" aria-label="Marca" value="<?php echo $edit_data ? htmlspecialchars($edit_data['marca'], ENT_QUOTES) : ''; ?>" />
                  </div>
                  <div class="grid-2">
                    <div>
                      <label class="label" for="p-stock">Cantidad Stock</label>
                      <input id="p-stock" class="input" type="number" min="0" aria-label="Stock" name="stock" placeholder="Stock:" value="<?php echo $edit_data ? htmlspecialchars($edit_data['stock'], ENT_QUOTES) : ''; ?>" />
                    </div>
                    <div>
                      <label class="label" for="p-price">Precio Unitario</label>
                      <div class="control">
                        <span class="control__icon" aria-hidden="true">
                          <svg viewBox="0 0 24 24" fill="none"><path d="M12 1v22" stroke="currentColor" stroke-width="2" stroke-linecap="round" /><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7H14a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                        </span>
                        <input id="p-price" class="input input--icon" type="number" min="0" step="0.01" aria-label="Precio" name="precio" placeholder="Precio:" value="<?php echo $edit_data ? htmlspecialchars($edit_data['precio'], ENT_QUOTES) : ''; ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <button class="btn-full" type="submit"><?php echo $edit_data ? 'Actualizar Repuesto' : 'Guardar Repuesto'; ?></button>
                    <?php if ($edit_data): ?>
                    <a href="?url=repuesto" class="btn btn--muted" style="text-align: center; text-decoration: none; display: block;">Cancelar Edición</a>
                  <?php endif; ?>
                  </div>
                </form>
              </div>
            </article>

            <article class="card card--two-thirds" aria-label="Listado de artículos">
              <div class="card__head">
                <h2 class="card__title card__title--no-gap">Listado de Artículos</h2>
                <div class="control search-control">
                  <span class="control__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" /><path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg>
                  </span>
                  <input class="input input--icon input--bg" type="text" placeholder="Buscar por nombre o SKU..." />
                </div>
              </div>

              <div class="table-wrap">
                <table class="table table--parts">
                  <thead>
                    <tr>
                      <th>Repuesto / SKU</th>
                      <th>Marca</th>
                      <th class="td-center">Stock</th>
                      <th class="td-right">Precio</th>
                      <th class="td-right">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Se realiza un bucle (foreach) para mostrar los repuestos -->
                    <?php foreach ($result as $repuesto) { ?>
                    <tr>
                      <td>
                        <div class="td-name"><?php echo $repuesto["nombre"]; ?></div>
                        <div class="mono td-sku">ID: <?php echo $repuesto["id"]; ?></div>
                      </td>
                      <td class="td-brand"><?php echo isset($repuesto["marca"]) ? $repuesto["marca"] : '-'; ?></td>
                      <td class="td-center"><span class="badge badge--emerald badge--sm"><?php echo $repuesto["stock"]; ?> unds</span></td>
                      <td class="td-right td-price">$<?php echo $repuesto["precio"]; ?></td>
                      <td class="td-right">
                        <div class="actions">
                          <a class="icon-action" title="Editar" aria-label="Editar" href="?url=repuesto&edit_repuesto=<?php echo $repuesto['id']; ?>">
                            <svg viewBox="0 0 24 24" fill="none">
                              <path d="M12 20h9" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                              <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                          </a>
                          <form method="post" class="p-0 m-0 shadow-none border-0 bg-transparent" style="margin-bottom: 0;">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="delete_id" value="<?php echo $repuesto['id']; ?>">
                            <button type="submit" class="icon-action icon-action--danger" title="Eliminar" aria-label="Eliminar" onclick="return confirm('¿Seguro que deseas eliminar este repuesto?');">
                              <svg viewBox="0 0 24 24" fill="none"><path d="M3 6h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" /><path d="M8 6V4h8v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" /><path d="M19 6l-1 14H6L5 6" stroke="currentColor" stroke-width="2" stroke-linejoin="round" /></svg>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

              <div class="pagination">
                <span>Mostrando <?php echo count($result); ?> de <?php echo count($result); ?> repuestos</span>
                <div class="pager">
                  <button class="pager-btn" type="button" disabled>Anterior</button>
                  <button class="pager-btn" type="button">Siguiente</button>
                </div>
              </div>
            </article>
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
