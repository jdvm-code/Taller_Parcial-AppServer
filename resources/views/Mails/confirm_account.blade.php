<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Confirmación</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family:Arial, sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:20px 0;">
    <tr>
      <td align="center">

        <!-- Contenedor principal -->
        <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:10px; overflow:hidden;">

          <!-- Header -->
          <tr>
            <td style="background:linear-gradient(135deg, #4f46e5, #06b6d4); padding:30px; text-align:center; color:#ffffff;">
              <h1 style="margin:0; font-size:24px;">Confirmación</h1>
              <p style="margin:5px 0 0;">Tu solicitud fue recibida</p>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:30px; color:#333333;">
              <p style="margin-top:0;">Hola <strong>{{$user->nombre}}</strong>,</p>

              <p>
                Hemos recibido tu solicitud correctamente. Aquí tienes los detalles:
              </p>

              <!-- Card detalles -->
              <table width="100%" cellpadding="0" cellspacing="0" style="background:#f9fafb; border-radius:8px; padding:15px; margin:20px 0;">
                <tr>
                  <td style="padding:10px 0;">
                    <strong>ID:</strong> [ID]
                  </td>
                </tr>
                <tr>
                  <td style="padding:10px 0;">
                    <strong>Fecha:</strong> [Fecha]
                  </td>
                </tr>
              </table>

              <p>
                Si necesitas más información, puedes responder a este correo o hacer clic en el siguiente botón:
              </p>

              <!-- Botón -->
              <table cellpadding="0" cellspacing="0" align="center" style="margin:20px 0;">
                <tr>
                  <td align="center" bgcolor="#4f46e5" style="border-radius:6px;">
                    <a href="{{url('activate',$user->remember_token) }}" target="_blank"
                       style="display:inline-block; padding:12px 25px; color:#ffffff; text-decoration:none; font-weight:bold;">
                      Ver detalles
                    </a>
                  </td>
                </tr>
              </table>

              <p>
                Saludos,<br>
                <strong>[Tu empresa]</strong>
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f4f6f8; padding:20px; text-align:center; font-size:12px; color:#888888;">
              © 2026 [Tu empresa] — Todos los derechos reservados
            </td>
          </tr>

        </table>

      </td>
    </tr>
  </table>

</body>
</html>