<?php
$phpVersion = phpversion();
$serverTime = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nia · Web Server Status</title>

  <style>
    :root {
      --bg: #0b0d14;
      --card: rgba(255,255,255,.06);
      --card2: rgba(255,255,255,.09);
      --text: rgba(255,255,255,.92);
      --muted: rgba(255,255,255,.62);
      --stroke: rgba(255,255,255,.12);
      --ok: #3cff7a;
      --accent: #8c41ff;
      --shadow: 0 30px 80px rgba(0,0,0,.45);
      --radius: 18px;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial;
      background: var(--bg);
      color: var(--text);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .bg {
      position: fixed;
      inset: -40vmax;
      background:
        radial-gradient(closest-side, rgba(140,65,255,.28), transparent 60%),
        radial-gradient(closest-side, rgba(0,214,255,.16), transparent 62%);
      filter: blur(30px);
      z-index: 0;
    }

    .card {
      position: relative;
      z-index: 1;
      width: min(720px, calc(100% - 32px));
      background: linear-gradient(180deg, var(--card2), var(--card));
      border: 1px solid var(--stroke);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 28px;
      text-align: center;
    }

    h1 {
      margin: 0 0 12px;
      font-size: 26px;
      letter-spacing: .3px;
    }

    p {
      margin: 0 0 20px;
      color: var(--muted);
      font-size: 15px;
    }

    .badge {
      display: inline-block;
      padding: 12px 18px;
      border-radius: 14px;
      background: rgba(0,0,0,.35);
      border: 1px solid var(--stroke);
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 16px;
    }

    .status {
      display: flex;
      gap: 14px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .pill {
      padding: 10px 14px;
      border-radius: 999px;
      background: rgba(0,0,0,.28);
      border: 1px solid var(--stroke);
      font-size: 13px;
      color: var(--muted);
    }

    .ok {
      color: var(--ok);
      font-weight: 600;
    }

    .accent {
      color: var(--accent);
      font-weight: 600;
    }

    .footer {
      margin-top: 28px;
      font-size: 13px;
      color: var(--muted);
    }

    .footer span {
      color: var(--text);
      font-weight: 500;
    }

    @media (max-width: 600px) {
      h1 { font-size: 22px; }
      .card { padding: 22px; }
    }
  </style>
</head>

<body>
  <div class="bg"></div>

  <div class="card">
    <h1>Servidor Web Activo</h1>
    <p>Tu entorno está funcionando correctamente</p>

    <div class="badge">
      PHP <?php echo htmlspecialchars($phpVersion); ?>
    </div>

    <p class="ok">Nginx y PHP-FPM están operativos</p>

    <div class="status">
      <div class="pill">📁 Ruta pública: <span>/webroot</span></div>
      <div class="pill">⏱ Servidor: <span><?php echo $serverTime; ?></span></div>
      <div class="pill accent">⚙️ Configuración OK</div>
    </div>

    <div class="footer">
      <p>Web configurada por <span>Berny</span></p>
    </div>
  </div>
</body>
</html>
