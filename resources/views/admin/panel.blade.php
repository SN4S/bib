<x-layout>
    <x-slot name="title">
        Админ панель - {{env('SITE_NAME')}}
    </x-slot>

    <main>
        <div class="mx-auto max-w-7xl border-gray-400 grid grid-cols-4 gap-3 grid-rows-1 my-3 ">
            <div class="max-w-xl col-span-1  ">
                <h2 class="font-semibold text-3xl my-5 ml-6">
                    Действия
                </h2>
                <div class="bg-white rounded-lg btn-container shadow-lg flex-col">
                    <form action="{{route('update')}}" style="display: inline;">
                        <button id="startButton" class="btn px-3 mb-5 ml-5 shadow-lg rounded-lg text-center inline-flex bg-indigo-600 text-white" style="display: flex; align-items: center; padding: 8px 62px;">
                            Обновить новости
                        </button>
                    </form>

                    <a class="btn shadow-lg  ml-5 mb-5 text-center rounded-lg inline-flex bg-indigo-600 text-white" style="padding: 8px 79px;" href="{{route('admin.destroy')}}">Очистить базу</a>
                </div>
            </div>
            <div class="col-span-3 row-span-1 grid-rows-2 gap-3">
                <div class="bg-white rounded-lg shadow-lg">
                    <h1 class="font-semibold text-3xl py-5 pl-14">
                        Новости
                    </h1>
                    <table class="text-sm text-left text-gray-500 dark:text-gray-400 dataTable mx-auto bg-gray-100 border-gray-100 rounded-lg" style="max-width: 940px">
                        <thead class="text-xs text-gray-700 uppercase ">
                        <tr>
                            <th scope="col" class="px-6 py-3">IMG</th>
                            <th scope="col" class="px-3 py-3">Заголовок</th>
                            <th scope="col" class="px-6 py-3">Источник</th>
                            <th scope="col" class="px-6 py-3">Дата публикации</th>
                            <th scope="col" class="px-3 py-3">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                            <tr class="bg-white ">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-white"><img src="{{$new->image}}" width="36px"></td>
                                <td scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap bg-white truncate max-w-md">{{$new->title}}</a></td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-white ">{{$new->source_name}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-white">{{$new->pubdate}}</td>
                                <td>
                                    <a class="btn-warning" href="/">Удалить</a>
                                    <a class="btn-danger " href="/">Изменить</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-3 bg-white rounded-lg shadow-lg" style="height: 68px">
                    <div class="d-flex justify-content-center p-4">
                        {{$news->links('pagination::tailwind')}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
