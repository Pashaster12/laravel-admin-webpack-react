@if(isset($auth) && $auth == true)
    <script src="{{ asset('js/admin/auth.min.js') }}"></script>
@else
    <script src="{{ asset('js/admin/main.min.js') }}"></script>
@endif