@extends('layouts.app')

@section('content')
<section class="mt-10">
    <h1 class="font-bold text-center text-4xl mb-8">Register</h1>
    <form class="max-w-[986px] mx-auto space-y-6" action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Your Name</label>
            <input type="text" name="name" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email" type="email" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>


        <div>
            <label for="name">Employer Name</label>
            <input type="text" name="employer" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <div>
            <label for="">Employer Logo</label>
            <input type="file" name="logo" type="email" class="mt-4 rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full">
        </div>

        <button class="border py-3 px-2 rounded-lg">Create Account</button>

    </form>
</section>
@endsection
