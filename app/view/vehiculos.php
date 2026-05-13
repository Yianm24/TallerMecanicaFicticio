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
            <h1 class="page-title">Registro de Vehículos</h1>
            <p class="page-subtitle">Administra el parque automotor de tus clientes</p>
          </div>
        </div>

        <section class="split" aria-label="Vehículos">
          <article class="card card--one-third card--sticky" aria-label="Registrar vehículo">
            <div class="card__head">
              <h2 class="card__title">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
                Registrar Vehículo
              </h2>
            </div>
            <div class="card__body">
              <form class="form">
                <div>
                  <label class="label" for="v-plate">Matrícula / Placa</label>
                  <div class="control">
                    <span class="control__icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24" fill="none">
                        <path d="M3 13l2-5a2 2 0 0 1 2-1h10a2 2 0 0 1 2 1l2 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M5 13v6M19 13v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        <path d="M7 19h10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                      </svg>
                    </span>
                    <input id="v-plate" class="input input--icon input--uppercase" type="text" name="placa" placeholder="Ingrese la placa del vehículo:" aria-label="Placa" />
                  </div>
                </div>
                <div class="grid-2">
                  <div>
                    <label class="label" for="v-brand">Marca</label>
                    <input id="v-brand" class="input" type="text" name="marca" placeholder="Ej. Toyota" />
                  </div>
                  <div>
                    <label class="label" for="v-model">Modelo</label>
                    <input id="v-model" class="input" type="text" name="modelo" placeholder="Ej. Corolla" />
                  </div>
                </div>
                <div class="grid-2">
                  <div>
                    <label class="label" for="v-year">Año</label>
                    <div class="control">
                      <span class="control__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                          <path d="M8 2v4M16 2v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                          <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2" />
                          <path d="M3 10h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                      </span>
                      <select id="v-year" name="ano" class="select select--icon">
                        <option value="" disabled selected>Seleccionar año...</option>
                        <?php
                        $anioActual = date("Y");
                        for ($i = $anioActual; $i >= 1950; $i--) {
                          echo "<option value='$i'>$i</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div>
                    <label class="label" for="v-details">Detalles</label>
                    <input id="v-details" class="input" type="text" name="detalles" placeholder="Ej. Observaciones, color..." />
                  </div>
                </div>
                <div class="form-actions">
                  <button class="btn-full" type="button">Guardar Vehículo</button>
                </div>
              </form>
            </div>
          </article>

          <article class="card card--two-thirds" aria-label="Flota registrada">
            <div class="card__head">
              <h2 class="card__title card__title--no-gap">Flota Registrada</h2>
              <div class="control search-control">
                <span class="control__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                    <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" />
                    <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                  </svg></span>
                <input class="input input--icon input--bg" type="text" placeholder="Buscar por placa o cliente..." />
              </div>
            </div>

            <div class="table-wrap">
              <table class="table table--vehicles">
                <thead>
                  <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Detalles</th>
                    <th class="td-right">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Se realiza un bucle (foreach) para mostrar los vehículos -->
                  <?php foreach ($result as $vehiculo) { ?>
                    <tr>
                      <td>
                        <div class="cell-flex">
                          <div class="vehicle-icon-wrap">
                            <svg class="vehicle-icon" viewBox="0 0 24 24" fill="none">
                              <path d="M3 13l2-5a2 2 0 0 1 2-1h10a2 2 0 0 1 2 1l2 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                              <path d="M5 13v6M19 13v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                              <path d="M7 19h10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                          </div>
                          <div class="td-plate"><?php echo $vehiculo["placa"]; ?></div>
                        </div>
                      </td>
                      <td><?php echo $vehiculo["marca"]; ?></td>
                      <td><?php echo $vehiculo["modelo"]; ?></td>
                      <td><?php echo $vehiculo["ano"]; ?></td>
                      <td><?php echo $vehiculo["detalles"]; ?></td>
                      <td class="td-right">
                        <div class="actions">
                          <button class="icon-action" type="button" title="Editar" aria-label="Editar">
                            <svg viewBox="0 0 24 24" fill="none">
                              <path d="M12 20h9" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                              <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                            </svg>
                          </button>
                          <form method="post" class="p-0 m-0 shadow-none border-0 bg-transparent" style="margin-bottom: 0;">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="delete_id" value="<?php echo $vehiculo['placa']; ?>">
                            <button type="submit" class="icon-action icon-action--danger" title="Eliminar" aria-label="Eliminar" onclick="return confirm('¿Seguro que deseas eliminar este vehículo?');">
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
                </tbody>
              </table>
            </div>

            <div class="pagination">
              <span>Mostrando <?php echo count($result); ?> de <?php echo count($result); ?> vehículos</span>
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
          <div class="footer__made">Hecho con <span class="heart" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78Z" fill="currentColor" />
              </svg></span> para ti</div>
        </div>
      </footer>
    </main>
  </div>
</body>

</html>