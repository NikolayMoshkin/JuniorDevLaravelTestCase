@component('mail::message')
Уважаемый, {{$username}}.
<p>Спасибо, что зарегистрировались на мероприятии!</p>

@component('mail::button', ['url' => 'http://juniortest'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
