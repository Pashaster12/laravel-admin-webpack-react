@if(isset($auth) && $auth == true)
    <link rel="stylesheet" href="{{ asset('css/admin/auth.min.css') }}">
@elseif(in_array(Request::segment(2), ['pages']))
    <link rel="stylesheet" href="{{ asset('css/admin/datatables.min.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/admin/main.min.css') }}">
@endif