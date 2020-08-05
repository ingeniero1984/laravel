@component('mail::message')

# Mensaje recibido

**Remitente:** {{ $msg['name'] }} - {{ $msg['email'] }}

**Asunto:** {{ $msg['subject'] }}

<br>

{{ $msg['content'] }}

<br>

Thanks,

<br>
{{ config('app.name') }}

@endcomponent