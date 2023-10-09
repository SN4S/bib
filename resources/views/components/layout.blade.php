<html lang="">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title ?? env('SITE_NAME') }}</title>
</head>
<body>
<header class="bg-white shadow-md">
    <nav class="mx-auto flex max-w-5xl items-center justify-between p-6 lg:px-8 " aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">{{env('SITE_NAME')}}</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" target="_blank" class="text-sm font-semibold leading-6 text-gray-900"></a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a class="text-sm font-semibold leading-6 text-gray-900"> </a>
        </div>
    </nav>
</header>
{{$slot}}
<footer>
{{-- LATER  --}}
</footer>
</body>
</html>
