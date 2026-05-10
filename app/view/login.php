<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel de Control - Las Roscas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body class="login-body">
  <div class="login">
    <div class="login-card">
      <div class="login-card__head">
        <div class="login-mark">M</div>
        <h1 class="login-title">Bienvenido de nuevo</h1>
        <p class="login-subtitle">Ingresa tus credenciales para acceder</p>
      </div>

      <div class="login-card__body">
        <form class="login-form" action="?url=login" method="post">
          <div class="field">
            <label class="field__label" for="username">Usuario</label>
            <div class="field__control">
              <span class="field__icon" aria-hidden="true">
                <!-- user -->
                <svg viewBox="0 0 24 24" fill="none">
                  <path
                    d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round" />
                  <path
                    d="M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                    stroke="currentColor"
                    stroke-width="2" />
                </svg>
              </span>
              <input
                id="username"
                name="username"
                type="text"
                required
                placeholder="admin"
                value="admin" />
            </div>
          </div>

          <div class="field">
            <label class="field__label" for="password">Contraseña</label>
            <div class="field__control">
              <span class="field__icon" aria-hidden="true">
                <!-- lock -->
                <svg viewBox="0 0 24 24" fill="none">
                  <rect
                    x="3"
                    y="11"
                    width="18"
                    height="11"
                    rx="2"
                    ry="2"
                    stroke="currentColor"
                    stroke-width="2" />
                  <path
                    d="M7 11V7a5 5 0 0 1 10 0v4"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round" />
                </svg>
              </span>
              <input
                id="password"
                name="password"
                type="password"
                required
                placeholder="••••••••"
                value="password" />
            </div>
          </div>

          <div class="login-row">
            <label class="checkbox">
              <input id="remember-me" name="remember-me" type="checkbox" checked />
              <span>Recordarme</span>
            </label>
            <a class="forgot" href="#">¿Olvidaste tu contraseña?</a>
          </div>

          <button class="btn-primary" type="submit">Iniciar Sesión</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>