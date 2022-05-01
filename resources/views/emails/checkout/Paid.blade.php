@component('mail::message')
# Your transaction Has been confirmated

Hi {{$checkout->User->name}}
<br>
Your transaction has been confirmed, now you can enjoy the benefits <b>{{$checkout->Camp->title}}</b> Camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
