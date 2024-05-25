<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <article class="max-w-screen-md py-4">
        <h2 class="text-3xl capitalize pt-5 tracking-tight text-gray-900 font-bold hover:text-blue-500">{{$post['title']}}</h2>
        <div class="text-sm">
            <a class="text-gray-500 text-bold" href="#">{{$post['author']}}</a> || <a class="text-gray-500" href="#">{{$post['time']}}</a>
        </div>
        <p class="my-4 font-light">{{ $post['body']}}</p>
        <a href="/posts" class="text-blue-500 capitalize hover:underline font-medium">&laquo; back to posts</a>
    </article>
</x-layout>