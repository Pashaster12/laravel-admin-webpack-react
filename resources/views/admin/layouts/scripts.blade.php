@if(isset($auth) && $auth == true)
    <script src="{{ asset('js/admin/auth.min.js') }}"></script>
@elseif(in_array(Request::segment(2), ['pages']))
    <script src="{{ asset('js/admin/datatables.min.js') }}"></script>
@else
    <script src="{{ asset('js/admin/main.min.js') }}"></script>
@endif

<script src="{{ asset('js/admin/react_test.min.js') }}"></script>