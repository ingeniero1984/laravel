@component('mail::message')
# Mensaje recibido

**{{ $msg['subject'] }}**

{{ $msg['content'] }}<br><br>

**Gracias**,<br><br>

**Atentamente,**<br><br>

{{ $msg['name'] }}<br>

{{ $msg['email'] }}<br><br>

{{ config('app.name') }}
@endcomponent