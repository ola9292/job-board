@extends('layouts.app')

@section('content')
<div class="mt-10 max-w-[986px] mx-auto space-y-10">
    <section>
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <x-section-heading>Featured Jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8">
            <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>

    </section>
    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="flex space-x-1">
            <x-tags>Tag</x-tags>
            <x-tags>Tag</x-tags>
            <x-tags>Tag</x-tags>
            <x-tags>Tag</x-tags>
            <x-tags>Tag</x-tags>
            <x-tags>Tag</x-tags>
            <x-tags>Tag</x-tags>
            <x-tags>Tag</x-tags>
        </div>
    </section>
    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="space-y-6">
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />
        </div>

    </section>
</div>

@endsection
