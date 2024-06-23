<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/app.js','resources/css/app.css'])
    <title>Document</title>
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex items-center justify-between py-4 border-b border-white/10">
            <div>
                <a href="/"><i class="fa-solid fa-cubes"></i> Midas</a>
            </div>
            <div class="space-x-3">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="flex space-x-3">
                    <a href="/jobs/create">Post a job</a>
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> Log out</button>

                    </form>
                </div>
            @endauth

            @guest
            <div class="space-x-3">
                <a href="/login">Log In</a>
                 <a type="submit" href="/register">Register</a>
                {{-- <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Register</button>

                </form> --}}

            </div>
            @endguest
        </nav>
        {{-- <main>Main section</main> --}}
        @yield('content')
    </div>

</body>
</html>
