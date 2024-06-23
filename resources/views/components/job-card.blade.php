@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-1000">

    <div class="self-start text-sm">{{$job->employer->name}}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank"> {{ $job->title }}</a>

        </h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="flex space-x-1">
            @foreach ($job->tags as $tag)
                <x-tags :tag="$tag"/>
            @endforeach
        </div>

        {{-- <img src="http://placehold.it/42/42" alt=""> --}}
        <img class="rounded" src="{{ asset('storage/' . $job->employer->logo) }}" width="42">
    </div>

</div>
