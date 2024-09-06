<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    
    <article class="py-5 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author']}}</a> | 1 Januari 2024
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="" class="font-medium text-blue-500">Read more &raquo; </a>
    </article>

    @endforeach

</x-layout>
