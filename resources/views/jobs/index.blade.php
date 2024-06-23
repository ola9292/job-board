@extends('layouts.app')

@section('content')
<div class="mt-10 max-w-[986px] mx-auto space-y-10 pb-8">
    <section>
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Land Your Dream Job</h1>

            <form action="/search" class="mt-6" method="get">
                <input type="text" name="q" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <x-section-heading>Featured Jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8">
            @foreach ($featuredJobs as $job)
                <x-job-card :job="$job"/>
            @endforeach
        </div>

    </section>
    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="flex space-x-1">
            @foreach($tags as $tag)
                <x-tags :tag="$tag"/>
            @endforeach
        </div>
    </section>
    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job"/>
            @endforeach
        </div>

    </section>
</div>

@endsection
