@if(isset($auth) && $auth == true)
    <link rel="stylesheet" href="{{ asset('css/admin/auth.min.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/admin/main.min.css') }}">
@endif