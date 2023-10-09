<x-layout>
    <main>
        <ul role="list" class="max-w-5xl mx-auto">
            @foreach($news as $new)
                <li class="flex justify-between gap-x-6 py-5 px-5 my-2 shadow-md sm:rounded-lg">
                    <div class="flex min-w-0 gap-x-4">

                        <p class="my-auto text-xs leading-5 text-gray-500">{{$new['pubdate']->isoformat('HH:mm')}}</p>
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{$new['image']}}" alt="{{$new['source_name']}}">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900"><a href="{{route('onews',[$new['id']])}}">{{$new['title']}}</a></p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500"><a href="{{route('onews',[$new['id']])}}">{{$new['description']}}</a></p>
                        </div>

                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-500">{{$new['pubdate']->isoformat('DD.MM.YYYY')}}</p>
                        <p class="mt-1 text-xs leading-5 text-gray-600">Источник: <a href="{{$new['link']}}">{{$new['source_name']}}</a></p>
                    </div>

                </li>
            @endforeach
                <div class="my-3 bg-white rounded-lg shadow-lg" style="height: 68px">
                    <div class="d-flex justify-content-center p-4">
                        {{$news->links('pagination::tailwind')}}
                    </div>
                </div>
        </ul>
    </main>
</x-layout>
