/**
 * Sistema de Administración de Farmacia
 * Aplicación Hola Mundo - Verificación de Entorno
 */

const http = require('http');

const PORT = process.env.PORT || 3000;

const server = http.createServer((req, res) => {
  // Configurar headers
  res.setHeader('Content-Type', 'text/html; charset=utf-8');
  
  // Ruta principal
  if (req.url === '/' || req.url === '/index.html') {
    res.writeHead(200);
    res.end(`
      <!DOCTYPE html>
      <html lang="es">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Administración de Farmacia</title>
        <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
          body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
          }
          .container {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            text-align: center;
            max-width: 600px;
            animation: fadeIn 0.5s ease-in;
          }
          @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
          }
          h1 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 2.5rem;
          }
          .status {
            background: #10b981;
            color: white;
            padding: 1rem;
            border-radius: 10px;
            margin: 1.5rem 0;
            font-size: 1.2rem;
            font-weight: bold;
          }
          .info {
            background: #f3f4f6;
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 1.5rem;
            text-align: left;
          }
          .info h2 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.3rem;
          }
          .info ul {
            list-style: none;
            padding-left: 0;
          }
          .info li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #e5e7eb;
          }
          .info li:last-child {
            border-bottom: none;
          }
          .info strong {
            color: #764ba2;
          }
          .footer {
            margin-top: 2rem;
            color: #6b7280;
            font-size: 0.9rem;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <h1>🏥 Sistema de Administración de Farmacia</h1>
          <div class="status">
            ✅ Entorno configurado correctamente
          </div>
          <p style="font-size: 1.1rem; margin: 1rem 0;">
            ¡Hola Mundo! El servidor está funcionando correctamente.
          </p>
          <div class="info">
            <h2>📊 Información del Sistema</h2>
            <ul>
              <li><strong>Puerto:</strong> ${PORT}</li>
              <li><strong>Node.js:</strong> ${process.version}</li>
              <li><strong>Plataforma:</strong> ${process.platform}</li>
              <li><strong>Directorio:</strong> ${process.cwd()}</li>
            </ul>
          </div>
          <div class="footer">
            <p>Servidor ejecutándose en: <strong>http://localhost:${PORT}</strong></p>
            <p style="margin-top: 0.5rem;">Presiona Ctrl+C para detener el servidor</p>
          </div>
        </div>
      </body>
      </html>
    `);
  } else if (req.url === '/api/status') {
    // Endpoint API para verificar estado
    res.writeHead(200, { 'Content-Type': 'application/json' });
    res.end(JSON.stringify({
      status: 'ok',
      message: 'Sistema funcionando correctamente',
      timestamp: new Date().toISOString(),
      nodeVersion: process.version,
      platform: process.platform,
      port: PORT
    }, null, 2));
  } else {
    // 404 para otras rutas
    res.writeHead(404);
    res.end(`
      <!DOCTYPE html>
      <html lang="es">
      <head>
        <meta charset="UTF-8">
        <title>404 - No encontrado</title>
        <style>
          body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background: #f3f4f6;
          }
          h1 { color: #ef4444; }
        </style>
      </head>
      <body>
        <h1>404 - Página no encontrada</h1>
        <p><a href="/">Volver al inicio</a></p>
      </body>
      </html>
    `);
  }
});

server.listen(PORT, () => {
  console.log(`
╔══════════════════════════════════════════════════════════╗
║   🏥 Sistema de Administración de Farmacia              ║
║                                                          ║
║   ✅ Servidor iniciado correctamente                    ║
║   🌐 URL: http://localhost:${PORT}                        ║
║   📡 API Status: http://localhost:${PORT}/api/status      ║
║                                                          ║
║   Presiona Ctrl+C para detener el servidor              ║
╚══════════════════════════════════════════════════════════╝
  `);
});

// Manejo de errores
server.on('error', (err) => {
  if (err.code === 'EADDRINUSE') {
    console.error(`❌ Error: El puerto ${PORT} ya está en uso.`);
    console.error(`   Intenta usar otro puerto: PORT=3001 npm start`);
  } else {
    console.error('❌ Error al iniciar el servidor:', err);
  }
  process.exit(1);
});

