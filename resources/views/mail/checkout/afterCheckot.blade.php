<x-mail::message>
# Register Camp: {{ $checkout->Camp->title }}

Thank you for register on <b>{{ $checkout->Camp->title }}</b>, please see payment intruction by click the button below.

<x-mail::button :url="route('user.checkout.invoice', $checkout->id)">
Get Invoice
</x-mail::button>

Thanks,<br>
Laracamp Team
</x-mail::message>
