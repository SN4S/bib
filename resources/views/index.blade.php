<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="bg-white">
    <nav class="mx-auto flex max-w-6xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/update" class="text-sm font-semibold leading-6 text-gray-900">Оновити</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a class="text-sm font-semibold leading-6 text-gray-900"> </a>
        </div>
    </nav>
</header>
{{--news list--}}
<main>
<ul role="list" class="divide-y divide-gray-100 max-w-5xl mx-auto">
    @foreach($news as $new)

    <li class="flex justify-between gap-x-6 py-5  px-5 my-2 shadow-md sm:rounded-lg">
        <div class="flex min-w-0 gap-x-4">

            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://static1.eadaily.com/i/fav/favicon.svg" alt="">
            <p class="my-auto text-xs leading-5 text-gray-500">{{$new['pubdate']->isoformat('HH:mm')}}</p>
            <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-900"><a href="{{route('onews',[$new['id']])}}">{{$new['title']}}</a></p>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500"><a href="{{route('onews',[$new['id']])}}">{{$new['description']}}</a></p>
            </div>

        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="mt-1 text-xs leading-5 text-gray-600">Source: <a href="{{$new['link']}}">ПервИИИИй источник</a></p>
            <p class="text-sm leading-6 text-gray-500">{{$new['pubdate']->isoformat('DD.MM.YYYY')}}</p>
        </div>

    </li>
    @endforeach
    <div class="mx-2 my-2 border-white">{{$news->links()}}</div>


</ul>
</main>
<footer>

</footer>
</body>
</html>
