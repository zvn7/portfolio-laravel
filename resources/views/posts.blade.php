<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    @foreach ($posts as $post)
    <article class="max-w-screen-md border-b border-gray-300 py-4">
        <a class="" href="/posts/{{$post['slug']}}">
            <h2 class="text-3xl capitalize pt-5 tracking-tight text-gray-900 font-bold hover:text-blue-500">{{$post['title']}}</h2>
        </a>
        <div class="text-sm">
            <a class="text-gray-500 text-bold" href="#">{{$post['author']}}</a> || <a class="text-gray-500" href="#">{{$post['time']}}</a>
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 200)}}</p>
        <a href="/posts/{{$post['slug']}}" class="text-blue-500 capitalize hover:underline font-medium">selengkapnya &raquo;</a>
    </article>
    @endforeach
</x-layout>