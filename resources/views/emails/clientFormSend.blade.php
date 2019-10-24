@component('mail::message')
# Introduction
{{$username}}, спасибо, что зарегистрировались на мероприятии!

@component('mail::button', ['url' => 'http://juniortest'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
