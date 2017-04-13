<head>
    <meta charset="UTF-8">
    <title> StarLight - @yield('htmlheader_title', 'Your title here') </title>
    
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <meta name="_token" content="{{ csrf_token() }}">
    
	@include('admin.layouts.styles')
	
</head>