@extends('layouts.app')

@section('content')
<section class="mt-10">
    <h1 class="font-bold text-center text-4xl mb-8">Log In</h1>
    <form class="max-w-[986px] mx-auto space-y-6" action="/login" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Email</label>
            <input type="text" name="email" type="email" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <button class="border py-3 px-2 rounded-lg">Log in</button>

    </form>
</section>
@endsection
