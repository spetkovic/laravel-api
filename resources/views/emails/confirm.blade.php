@component('mail::message')
# Hello {{$user->name}},

You changed your email address so we need to verify this new email address. Verify your email using the button bellow:

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Verify Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
