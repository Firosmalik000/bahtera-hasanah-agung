<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/jquery@3.7.1/dist/jquery.min.js"></script>

    {{-- ✅ Tambahkan baris ini --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FDFDFC] text-[#1b1b18] flex    items-center lg:justify-center min-h-screen flex-col">

    @include('components.navbar')
    <div class="w-full">
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
        @include('sections.hero')
        @include('sections.about')

        {{-- Section Vision --}}
        @include('sections.visi')
        {{-- Section Service --}}
        @include('sections.service')
        {{-- Section whyUs --}}
        @include('sections.whyUs')
        {{-- Section contact --}}
        @include('sections.contact')
    </div>


</body>

</html>
