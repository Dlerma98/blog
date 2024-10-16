<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>{{$metaTitle ?? 'Default title'}}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<x-partials.navigation />

@session('status')
<div>
    {{$value}}
</div>
@endsession

{{ $slot }}

@if(isset($sidebar))
    <div id="sidebar">
        <h3>Sidebar</h3>
        {{$sidebar}}
    </div>
@endif
</body>
</html>
