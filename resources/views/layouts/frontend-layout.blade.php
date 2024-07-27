<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("og.title")}}</title>

    <meta name="title" content="{{__("og.title")}}">
    <meta name="description" content="{{__("og.description")}}">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{__("og.title")}}" />
    <meta property="og:description" content="{{__("og.description")}}" />
    <meta property="og:image" content="{{url("images/og/" . app()->getLocale() . "_og.png")}}" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{url()->current()}}" />
    <meta property="twitter:title" content="{{__("og.title")}}" />
    <meta property="twitter:description" content="{{__("og.description")}}" />
    <meta property="twitter:image" content="{{url("images/og/" . app()->getLocale() . "_og.png")}}" />

    @vite("resources/css/app.scss")
</head>
<body class="antialiased">

    <div id="main-content" class="mb-40">
        {{ $slot }}
    </div>

    @vite("resources/js/app.js")
</body>
</html>
