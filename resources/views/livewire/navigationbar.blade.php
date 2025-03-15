<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    {{-- Youth Navbar --}}
    @if (!request()->routeIs('profiling') && !request()->routeIs('login') && Auth::guard('web')->check() && !request()->routeIs('register') && !request()->routeIs('youth') && !request()->routeIs('officers'))
        <header
            class='flex shadow-2xl py-3 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-40'>
            <div class='flex flex-wrap items-center justify-between lg:gap-y-4 gap-y-6 gap-x-4 w-full'>
                <a href="javascript:void(0)"><img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Sangguniang_Kabataan_logo.svg/1200px-Sangguniang_Kabataan_logo.svg.png"
                        alt="logo" class='w-12 h-12 rounded-full' />
                </a>

                <div id="collapseMenu"
                    class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-40'>
                    <button id="toggleClose"
                        class='lg:hidden fixed top-2 right-4 z-[90] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black"
                            viewBox="0 0 320.591 320.591">
                            <path
                                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                                data-original="#000000"></path>
                            <path
                                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                                data-original="#000000"></path>
                        </svg>
                    </button>
                    <ul
                        class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-40'>
                        <li class='mb-6 hidden max-lg:block'>
                            <a href="javascript:void(0)"><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Sangguniang_Kabataan_logo.svg/1200px-Sangguniang_Kabataan_logo.svg.png"
                                    alt="logo" class='w-12 h-12 rounded-full' />
                            </a>
                        </li>
                        <li
                            class='{{ Request::routeIs('home') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='{{ route('home') }}' class='text-black block text-[15px]'>Home</a>
                        </li>
                        <li
                            class='{{ Request::routeIs('SKActivities') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='{{ route('SKActivities') }}' class='text-black block text-[15px]'>SK Activities</a>
                        </li>
                        <li
                            class='{{ Request::routeIs(patterns: 'announce') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='{{ route('announce') }}' class='text-black block text-[15px]'>Announcement</a>
                        </li>
                        <li
                            class='{{ Request::routeIs('contact') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='{{ route('contact') }}' class='text-black block text-[15px]'>Contact Us</a>
                        </li>
                        <li
                            class='{{ Request::routeIs('FAQ') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='{{ route('FAQ') }}' class='text-black block text-[15px]'>FAQ's</a>
                        </li>
                    </ul>
                </div>

                <div class='flex items-center max-sm:ml-auto space-x-6'>
                    <ul>
                        <li id="profile-dropdown-toggle"
                            class="relative px-1 after:absolute after:w-full after:h-[2px] after:block after:top-8 after:left-0 after:transition-all after:duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                                class="cursor-pointer hover:fill-black" viewBox="0 0 512 512">
                                <path
                                    d="M437.02 74.981C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.981C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.019C123.333 485.371 187.62 512 256 512s132.667-26.629 181.02-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.667-74.98-181.019zM256 482c-66.869 0-127.037-29.202-168.452-75.511C113.223 338.422 178.948 290 256 290c-49.706 0-90-40.294-90-90s40.294-90 90-90 90 40.294 90 90-40.294 90-90 90c77.052 0 142.777 48.422 168.452 116.489C383.037 452.798 322.869 482 256 482z"
                                    data-original="#000000" />
                            </svg>
                            <div id="profile-dropdown-menu"
                                class="bg-white hidden z-20 shadow-2xl py-6 px-6 rounded sm:min-w-[320px] max-sm:min-w-[250px] absolute right-0 top-10">
                                @if (Auth::check())
                                    <h6 class="font-semibold text-[16px] text-gray-800">
                                        Welcome, Youth
                                        <p class="text-xs text-gray-500 mt-1"> Hello, {{ $name }} from
                                            {{ $address }}</p>
                                    </h6>
                                @else
                                    <h6 class="font-semibold text-[15px]">Welcome</h6>
                                    <p class="text-sm text-gray-500 mt-1">To Fully Experience the Web-App</p>
                                    <form method="POST" action="{{ route('toLogin') }}">
                                        @csrf
                                        <button
                                            class="bg-transparent border border-gray-300 hover:border-black rounded px-4 py-2 mt-4 text-sm text-black">LOGIN
                                            / SIGNUP</button>
                                    </form>
                                @endif
                                <hr class="border-t border-gray-300 my-3" />
                                <ul class="space-y-1.5">
                                    <li><a href='javascript:void(0)'
                                            class="text-sm text-gray-500 hover:text-black">Update
                                            Profile</a></li>
                                    <li><a href='javascript:void(0)'
                                            class="text-sm text-gray-500 hover:text-black">Setting</a></li>
                                    <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">
                                            About Us </a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="text-sm text-gray-500 hover:text-black"> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <button id="toggleOpen" class='lg:hidden ml-7'>
                        <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        {{-- Officer Navbar --}}
    @elseif (Auth::guard('officer')->check() && !request()->routeIs('register') && !request()->routeIs('youth') && !request()->routeIs('officers') && !request()->routeIs('login'))
        <header
            class='flex shadow-xl py-3 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-40'>
            <div class='flex flex-wrap items-center justify-between lg:gap-y-4 gap-y-6 gap-x-4 w-full'>
                <a href=""><img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Sangguniang_Kabataan_logo.svg/1200px-Sangguniang_Kabataan_logo.svg.png"
                        alt="logo" class='w-12 h-12 rounded-full' />
                </a>

                <div id="collapseMenu"
                    class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-40'>
                    <button id="toggleClose"
                        class='lg:hidden fixed top-2 right-4 z-[90] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black"
                            viewBox="0 0 320.591 320.591">
                            <path
                                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                                data-original="#000000"></path>
                            <path
                                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                                data-original="#000000"></path>
                        </svg>
                    </button>

                    <ul
                        class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-40'>
                        <li class='mb-6 hidden max-lg:block'>
                            <a href=""><img
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Sangguniang_Kabataan_logo.svg/1200px-Sangguniang_Kabataan_logo.svg.png"
                                    alt="logo" class='w-12 h-12 rounded-full' />
                            </a>
                        </li>
                        <li
                            class='{{ Request::routeIs('officer-dash') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='{{ route('officer-dash') }}' class='text-black block text-[15px]'>Home</a>
                        </li>
                        <li
                            class='{{ Request::routeIs('officer-act') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='{{ route('officer-act') }}' class='text-black block text-[15px]'>SK
                                Activities</a>
                        </li>
                        <li
                            class='{{ Request::routeIs(patterns: '') ? 'lg:after:bg-black lg:after:w-full lg:after:h-[2px]' : 'text-black' }} max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                            <a href='' class='text-black block text-[15px]'>Announcement</a>
                        </li>
                    </ul>
                </div>

                <div class='flex items-center max-sm:ml-auto space-x-6'>
                    <ul>
                        <li id="profile-dropdown-toggle"
                            class="relative px-1 after:absolute after:w-full after:h-[2px] after:block after:top-8 after:left-0 after:transition-all after:duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                                class="cursor-pointer hover:fill-black" viewBox="0 0 512 512">
                                <path
                                    d="M437.02 74.981C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.981C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.019C123.333 485.371 187.62 512 256 512s132.667-26.629 181.02-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.667-74.98-181.019zM256 482c-66.869 0-127.037-29.202-168.452-75.511C113.223 338.422 178.948 290 256 290c-49.706 0-90-40.294-90-90s40.294-90 90-90 90 40.294 90 90-40.294 90-90 90c77.052 0 142.777 48.422 168.452 116.489C383.037 452.798 322.869 482 256 482z"
                                    data-original="#000000" />
                            </svg>
                            <div id="profile-dropdown-menu"
                                class="bg-white hidden z-20 shadow-lg py-4 px-5 rounded-lg sm:min-w-[320px] max-sm:min-w-[250px] 
           absolute right-0 top-12 border border-gray-200">
                                @if ($isAuthenticated)
                                    <h6 class="font-semibold text-[16px] text-gray-800">
                                        Welcome {{ $surname }}, {{ $officer_name }}
                                        <p class="text-sm text-gray-500 mt-1">SK {{ $position }} -
                                            {{ $barangay_assign }}</p>
                                    </h6>
                                @else
                                    <h6 class="font-semibold text-[15px]">Welcome</h6>
                                    <p class="text-sm text-gray-500 mt-1">To Fully Experience the Web-App</p>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type='button'
                                            class="bg-transparent border border-gray-300 hover:border-black rounded px-4 py-2 mt-4 text-sm text-black">
                                            LOGIN / SIGNUP
                                        </button>
                                    </form>
                                @endif

                                <hr class="border-t border-gray-300 my-3" />
                                <ul class="space-y-1.5">
                                    <li><a href='' class="text-sm text-gray-500 hover:text-black">Setting</a>
                                    </li>
                                    <li><a href='' class="text-sm text-gray-500 hover:text-black">
                                            About Us </a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="text-sm text-gray-500 hover:text-black"> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <button id="toggleOpen" class='lg:hidden ml-7'>
                        <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
    @endif

</div>
