@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-8 border border-transparent hover:border-blue-800 group transition-colors duration-1000">
    <div>
        <img class="rounded" src="{{ asset('storage/' . $job->employer->logo) }}" width="100" height="100">
    </div>
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400" href="">{{$job->employer->name}}</a>
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}">{{ $job->title }}</a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tags :tag="$tag"/>
        @endforeach
    </div>

</div>
