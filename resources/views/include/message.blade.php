@if (session()->has('message_success'))
    {{ session('message_success') }}
@endif

@if (session()->has('message_failed'))
    {{ session('message_failed') }}
@endif