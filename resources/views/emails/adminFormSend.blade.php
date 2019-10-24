@component('mail::message')
Админы, внимание!

Зарегистрирована новая заяка.

<p>Имя: {{$attributes['name']}}</p>
<p>Email: {{$attributes['email']}}</p>
<p>Телефон: {{$attributes['phone']}}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
