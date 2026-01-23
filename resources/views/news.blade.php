<x-layout>
    <x-slot name="title">
        {{env('SITE_NAME')}} - {{$news['title']}}
    </x-slot>

    <main>
        <iframe class="w-full aspect-[64/29]" src="{{$news['link']}}">
        </iframe>
    </main>
</x-layout>
