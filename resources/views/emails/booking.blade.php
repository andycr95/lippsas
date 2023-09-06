<!DOCTYPE html>
<html>
<head>
  <title>Notificación de Reserva</title>
</head>
<body>
  <h3>Estimado/a {{$client->name}},</h3>

  <p>Espero que este mensaje te encuentre bien. Me complace informarte que hemos recibido tu solicitud de reserva para una cita en nuestra empresa a través de nuestro sitio web. A continuación, te proporciono los detalles de tu reserva:</p>

  <p><strong>Descripción:</strong> {{$booking->drescription}}</p>
  <p><strong>Fecha y hora:</strong> {{$booking->date_creation}} - {{$booking->hour->hour}}</p>
  <p><strong>Placa del vehículo:</strong> {{$booking->plate}}</p>

  <p><strong>Información del cliente:</strong></p>
  <ul>
    <li><strong>Nombre:</strong> {{$client->name}}</li>
    <li><strong>Dirección de correo electrónico:</strong> {{$client->email}}</li>
    <li><strong>Número de teléfono:</strong> {{$client->phone}}</li>
  </ul>

  <p>Queremos recordarte que estos detalles son fundamentales para asegurar una experiencia satisfactoria durante tu visita. Te invitamos a revisar la información proporcionada y, en caso de detectar algún error o tener alguna pregunta adicional, te pedimos que nos contactes lo antes posible para realizar los ajustes necesarios.</p>

  <p>Agradecemos la confianza que has depositado en nuestra empresa y nos esforzaremos por brindarte un servicio de calidad. Estaremos preparados para recibirte el día y hora indicados y resolver cualquier consulta o requerimiento que puedas tener.</p>

  <p>Si por alguna razón necesitas cancelar o reprogramar tu cita, te pedimos que nos informes con anticipación para que podamos ajustar nuestra agenda y ofrecer disponibilidad a otros clientes.</p>

  <p>No dudes en comunicarte con nosotros si necesitas alguna aclaración adicional o si podemos ayudarte en algo más. Estamos ansiosos por atenderte y brindarte una experiencia satisfactoria.</p>

  <p>¡Gracias nuevamente por elegir nuestra empresa! Esperamos poder asistirte pronto.</p>

  <p>Atentamente,</p>
  <p>LIPP S.A.S</p>
  <p>Información de contacto: correo electrónico y número de teléfono</p>
</body>
</html>
