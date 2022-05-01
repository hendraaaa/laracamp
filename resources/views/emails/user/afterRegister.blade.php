@component('mail::message')
# welcome

welcome to Laracamp, your account has been created successfully, now you choose your best match camp!

@component('mail::button', ['url' => route('login')])
login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
