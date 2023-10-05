@props(['tagsCsv'])

@php
    
    $tags = explode(', ', $tagsCsv); // split the tags array
    
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li
            class="flex items-center justify-center bg-coolBlue text-white rounded-xl py-1 px-3 mr-2 text-xs hover:bg-gray-700">
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach

</ul>
