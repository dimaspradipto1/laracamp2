<x-mail::message>
# welcome!

Hi {{ $user->name }},
<br>
Welcome to laracamp, your account has been created successfullyy. now you can choose your best match camp!



<x-mail::button :url="route('login')" color="primary">
{{ __('Login Here') }}
</x-mail::button>

Thanks,<br>
Lacaracamp Team
</x-mail::message>
