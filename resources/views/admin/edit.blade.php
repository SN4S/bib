<x-layout>
    <x-slot name="title">
        <title>
            {{env('SITE_NAME')}} - Edit
        </title>
    </x-slot>

    <main>
        EDIT -
        <form method="post">
            @method('PUT')

            <button type="submit"></button>

        </form>
    </main>
</x-layout>
