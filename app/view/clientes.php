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
            <h1 class="page-title">Gestión de Clientes</h1>
            <p class="page-subtitle">Administra la base de datos de tus clientes</p>
          </div>
        </div>

        <section class="split" aria-label="Gestión de clientes">
          <!-- Form Panel -->
          <article class="card card--one-third card--sticky" aria-label="Nuevo cliente">
            <div class="card__head">
              <h2 class="card__title">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                Nuevo Cliente
              </h2>
            </div>
            <div class="card__body">
              <form class="form" method="post" id="formCliente">
                <input type="hidden" name="action" id="actionCliente" value="<?php echo $edit_data ? 'update' : ''; ?>">
                <div>
                  <label class="label" for="c-name">Nombre</label>
                  <input id="c-name" class="input" type="text" aria-label="Nombre" name="nombre" placeholder="Nombre:" value="<?php echo $edit_data ? htmlspecialchars($edit_data['nombre'], ENT_QUOTES) : ''; ?>" />
                </div>
                <div>
                  <label class="label" for="c-lastname">Apellido</label>
                  <input id="c-lastname" class="input" type="text" aria-label="Apellido" name="apellido" placeholder="Apellido:" value="<?php echo $edit_data ? htmlspecialchars($edit_data['apellido'], ENT_QUOTES) : ''; ?>" />
                </div>
                <div>
                  <label class="label" for="c-ci">Cédula</label>
                  <div class="control">
                    <span class="control__icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none">
                        <path
                          d="M10 16h8M10 12h8M10 8h8M6 8h.01M6 12h.01M6 16h.01"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round" />
                        <path
                          d="M4 4h16v16H4V4Z"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linejoin="round" />
                      </svg>
                    </span>
                    <input id="c-ci" class="input input--icon" type="text" name="id" placeholder="Cedula del cliente:" aria-label="Cedula" value="<?php echo $edit_data ? htmlspecialchars($edit_data['id'], ENT_QUOTES) : ''; ?>" <?php echo $edit_data ? 'readonly' : ''; ?> />
                  </div>
                </div>
                <div>
                  <label class="label" for="c-phone">Teléfono</label>
                  <div class="control">
                    <span class="control__icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none">
                        <path
                          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.11 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.32 1.78.59 2.63a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.45-1.45a2 2 0 0 1 2.11-.45c.85.27 1.73.47 2.63.59A2 2 0 0 1 22 16.92Z"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </span>
                    <input id="c-phone" class="input input--icon" type="tel" name="telefono" placeholder="Numero Telefonico:" aria-label="Número de teléfono" value="<?php echo $edit_data ? htmlspecialchars($edit_data['telefono'], ENT_QUOTES) : ''; ?>" />
                  </div>
                </div>
                <div>
                  <label class="label" for="c-address">Dirección</label>
                  <div class="control">
                    <span class="control__icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none">
                        <path
                          d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0Z"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" />
                      </svg>
                    </span>
                    <input id="c-address" class="input input--icon" type="text" name="direccion" placeholder="Direccion:" aria-label="Direccion del cliente" value="<?php echo $edit_data ? htmlspecialchars($edit_data['direccion'], ENT_QUOTES) : ''; ?>" />
                  </div>
                </div>
                <div class="form-actions">
                  <button class="btn-full" type="submit" id="btnSubmitCliente"><?php echo $edit_data ? 'Actualizar Cliente' : 'Guardar Cliente'; ?></button>
                  <?php if ($edit_data): ?>
                    <a href="?url=clientes" class="btn btn--muted" style="text-align: center; text-decoration: none; display: block;">Cancelar Edición</a>
                  <?php endif; ?>
                </div>
              </form>
            </div>
          </article>

          <!-- Table Panel -->
          <article class="card card--two-thirds" aria-label="Directorio">
            <div class="card__head">
              <h2 class="card__title card__title--no-gap">Directorio</h2>
              <div class="control search-control">
                <span class="control__icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" />
                    <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                  </svg>
                </span>
                <input class="input input--icon input--bg" type="text" placeholder="Buscar cliente..." />
              </div>
            </div>

            <div class="table-wrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Dirección</th>
                    <th class="td-right">Acciones</th>
                  </tr>
                </thead>

                <tbody>
                  <!-- Se realiza un bucle (foreach) para mostrar los usuarios -->
                  <?php foreach ($result as $cliente) { ?>
                    <tr>
                      <td class="mono"><?php echo $cliente["id"]; ?></td>
                      <td>
                        <div class="cell-flex">
                          <div class="avatar-dot"><?php echo substr($cliente["nombre"], 0, 1); ?></div>
                          <div class="td-name"><?php echo $cliente["nombre"] . " " . $cliente["apellido"]; ?></div>
                        </div>
                      </td> 
                      <td>
                        <div class="td-phone"><?php echo $cliente["telefono"]; ?></div>
                      </td>
                      <td class="td-address"><?php echo $cliente["direccion"]; ?></td>
                      <td class="td-right">
                        <div class="actions">
                          <a class="icon-action" title="Editar" aria-label="Editar" href="?url=clientes&edit_id=<?php echo $cliente['id']; ?>">
                            <svg viewBox="0 0 24 24" fill="none">
                              <path d="M12 20h9" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                              <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                          </a>
                          <form method="post" class="p-0 m-0 shadow-none border-0 bg-transparent" style="margin-bottom: 0;">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="delete_id" value="<?php echo $cliente['id']; ?>">
                            <button type="submit" class="icon-action icon-action--danger" title="Eliminar" aria-label="Eliminar" onclick="return confirm('¿Seguro que deseas eliminar este cliente?');">
                              <svg viewBox="0 0 24 24" fill="none">
                                <path d="M3 6h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M8 6V4h8v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M19 6l-1 14H6L5 6" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                              </svg>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                  <!-- Se cierra el ciclo -->
                </tbody>
              </table>
            </div>

            <div class="pagination">
              <span>Mostrando <?php echo count($result); ?> de <?php echo count($result); ?> clientes</span>
              <div class="pager">
                <button class="pager-btn" type="button" disabled>Anterior</button>
                <button class="pager-btn" type="button" disabled>Siguiente</button>
              </div>
            </div>
          </article>
        </section>
      </div>

      <footer class="footer">
        <div class="footer__inner">
          <div class="footer__copy">&copy; 2026 Taller Mecánico Las Roscas. Todos los derechos reservados.</div>
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