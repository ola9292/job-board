@extends('layouts.app')

@section('content')
<section class="mt-10">
    <h1 class="font-bold text-center text-4xl mb-8">New Job</h1>
    <form class="max-w-[986px] mx-auto space-y-6" action="{{ route('job.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Title</label>
            <input type="text" name="title" placeholder="CEO" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Salary</label>
            <input type="text" placeholder="£90,000" name="salary" type="email" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Location</label>
            <input type="text" name="location" placeholder="Park lane, London" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Scehdule</label>
            <select name="schedule" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
                <option value="part time">Part Time</option>
                <option value="full time">Full Time</option>
            </select>
        </div>
        <div>
            <label for="">Url</label>
            <input type="url" placeholder="https://acme.com/jobs/ceo-wanted" name="url" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div class="flex items-center gap-x-4">
            <label for="">Featured</label>
            <input type="checkbox" name="featured" class="">
        </div>

        <div>
            <label for="name">Tags (comma separated)</label>
            <input type="text" name="tags" placeholder="frontend, backend, javascript" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>
        <button class="border py-3 px-2 rounded-lg">Create Account</button>

    </form>
</section>
@endsection
