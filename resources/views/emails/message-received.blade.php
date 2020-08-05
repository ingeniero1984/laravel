@component('mail::message')
# Mensaje recibido

**{{ $msg['subject'] }}**<br>

{{ $msg['content'] }}<br><br>

**Atentamente,**<br><br>

{{ $msg['name'] }}
{{ $msg['email'] }}<br>

{{ config('app.name') }}
@endcomponent