<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coolBlue: "#1d4ed8",
                    },
                },
            },
        };
    </script>
    <title>JobHub | Find Developer Jobs</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4 p-6">
        <a href="/" class="hover:text-coolBlue text-lg"><i class="fas fa-home"></i> HOME</a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercasse">
                        Welcome {{ auth()->user()->name }} !
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-coolBlue"><i class="fa-solid fa-gear"></i> Manage Job
                        Posts</a>
                </li>
                <li>
                    <form class="inline hover:text-coolBlue" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/register" class="hover:text-coolBlue"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-coolBlue"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-coolBlue text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Developed by Filipe Pereira 😎</p>

        <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post a Job</a>
    </footer>
    <x-flash-message />
</body>

</html>
