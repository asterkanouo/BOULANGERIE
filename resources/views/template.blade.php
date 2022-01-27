<html>
<head>
<title>@yield('titre')</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<main role = "main">
@yield('content')
</main>
<footer>
<p class= "text-gray-400">&copy; copyright {{ date('Y') }} 
    @if( ! Route::is('about'))
    &middot; <a href="{{ route('about') }}" class = "text-indigo-500 hover:text-indigo-900 underline">about</a></p>
    @endif
</footer>
</body>

</html>