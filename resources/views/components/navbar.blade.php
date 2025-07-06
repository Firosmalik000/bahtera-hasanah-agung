<header id="nav-header"
    class="fixed top-0 left-0 right-0 z-50  px-[100px] py-[20px] w-full  text-sm mb-6 not-has-[nav]:hidden shadow-xl">
    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18]  rounded-sm text-sm leading-normal">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035]  rounded-sm text-sm leading-normal">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18]  rounded-sm text-sm leading-normal">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
</header>

<script>
    $(document).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#nav-header').removeClass('bg-transparent').addClass(
                'bg-blue-500 shadow-md transition duration-300 ease-in-out');
        } else {
            $('#nav-header').removeClass('bg-blue-500 shadow-md transition duration-300 ease-in-out').addClass(
                'bg-transparent');
        }
    });
</script>
