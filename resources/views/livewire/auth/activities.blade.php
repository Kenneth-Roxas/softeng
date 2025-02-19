<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <header
        class='flex shadow-2xl py-3 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center justify-between lg:gap-y-4 gap-y-6 gap-x-4 w-full'>
            <a href="javascript:void(0)"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Sangguniang_Kabataan_logo.svg/1200px-Sangguniang_Kabataan_logo.svg.png"
                    alt="logo" class='w-12 h-12 rounded-full' />
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose"
                    class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
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
                    class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
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
                            <h6 class="font-semibold text-[15px]">Welcome</h6>
                            <p class="text-sm text-gray-500 mt-1">To access account and manage orders</p>
                            <button type='button'
                                class="bg-transparent border border-gray-300 hover:border-black rounded px-4 py-2 mt-4 text-sm text-black">LOGIN
                                / SIGNUP</button>
                            <hr class="border-b-0 my-4" />
                            <ul class="space-y-1.5">
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Update
                                        Profile</a></li>
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Setting</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">
                                        About Us </a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">
                                        Logout </a></li>
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

    <div class="max-w-md mx-auto bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-500 mt-4">
        <!-- Post Header -->
        <div class="p-4 flex items-center">
            <img class="w-10 h-10 rounded-full"
                src="{{ asset('Images/federation.jpg')}}"
                alt="User Avatar">
            <div class="ml-3">
                <h3 class="text-sm font-semibold text-gray-900">SK Municipal Federation - Virac</h3>
                <span class="text-xs text-gray-500">February 9, 2025</span>
            </div>
        </div>
        <!-- Image Carousel -->
        <div x-data="{
            images: ['{{ asset('Images/blog2.jpg')}}',
                '{{ asset('Images/act1.jpg')}}',
                '{{ asset('Images/act2.jpg')}}'
            ],
            currentIndex: 0
        }" class="relative">
            <img :src="images[currentIndex]" class="w-full h-80 object-cover transition-all duration-500"
                alt="Post Image">
            <!-- Left Arrow -->
            <button @click="currentIndex = currentIndex > 0 ? currentIndex - 1 : images.length - 1"
                class="absolute left-2 top-1/2 transform -translate-y-1/2 text-white rounded-full p-2 opacity-75 hover:opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Right Arrow -->
            <button @click="currentIndex = currentIndex < images.length - 1 ? currentIndex + 1 : 0"
                class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white rounded-full p-2 opacity-75 hover:opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Post Content -->
        <div class="p-4">
            <div x-data="{ expanded: false }">
                <p class="text-gray-800 text-sm">
                    <span x-show="!expanded">
                        the Sangguniang Kabataan (SK) Chairpersons from the Municipality of Virac had their family day
                        event titled SKamustahan...
                    </span>
                    <span x-show="expanded">
                        The Sangguniang Kabataan (SK) Chairpersons from the Municipality of Virac had their family day
                        event titled SKamustahan. During this event, the SK Chairpersons presented their year-end
                        accomplishment reports, providing insights into their achieved programs and initiatives, and
                        also engaged in various team-building activities that aimed to strengthen teamwork and unity
                        among the SK Virac leaders.
                        <br> Present at this activity were Ma'am Lea Madrid from the Department of the Interior and
                        Local Government (DILG), Mayor Sammy Laynes, Councilor Lemuel Surtida, and Governor Joseph Cua.
                        Their presence served as a symbol of their unwavering support.
                        <br> We also extend our appreciation for the continuous efforts, support, and assistance
                        extended by both the Provincial Local Government Unit (PLGU) under the leadership of Governor
                        Joseph Cua and the Municipal Local Government Unit (MLGU) headed by Mayor Sammy Laynes. Their
                        guidance and collaboration have always been instrumental in the success of the SK Chairpersons'
                        initiatives.
                        Sarong pamilya kita sa pag-serbi sa satuyang banwa! 🔥 <br>
                        #SKMFVirac
                    </span>
                </p>
                <button @click="expanded = !expanded" class="text-blue-500 text-sm mt-1">
                    <span x-show="!expanded">See More</span>
                    <span x-show="expanded">See Less</span>
                </button>
            </div>
            <div class="mt-3 flex items-center justify-between text-gray-500 text-sm">
                <div class="flex items-center space-x-2">
                    <button class="flex items-center space-x-1 hover:text-red-700">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                height="20">
                                <path fill="currentColor"
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </span>
                    </button>
                    <button class="flex items-center space-x-1 hover:text-blue-500">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M21 12.5a8.5 8.5 0 1 0-3 6.5l3 1-1-3a8.5 8.5 0 0 0 1-4.5z" />
                            </svg>
                        </span>
                    </button>
                    <button class="flex items-center space-x-1 hover:text-blue-500">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 6V3h-3" />
                                <path d="M3 12a9 9 0 0 1 15-6.7L20 6" />
                                <path d="M4 18v3h3" />
                                <path d="M21 12a9 9 0 0 1-15 6.7L4 18" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="max-w-md mx-auto bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-500 mt-4">
        <!-- Post Header -->
        <div class="p-4 flex items-center">
            <img class="w-10 h-10 rounded-full"
                src="{{ asset('Images/sta-elena.jpg')}}"
                alt="User Avatar">
            <div class="ml-3">
                <h3 class="text-sm font-semibold text-gray-900">SK - Sta. Elena</h3>
                <span class="text-xs text-gray-500">December 22, 2024</span>
            </div>
        </div>
        <!-- Image Carousel -->
        <div x-data="{
            images: ['{{ asset('Images/act3.jpg')}}',
            '{{ asset('Images/act4.jpg')}}',
            '{{ asset('Images/act5.jpg')}}'
             ],
            currentIndex: 0
        }" class="relative">
            <img :src="images[currentIndex]" class="w-full h-80 object-cover transition-all duration-500"
                alt="Post Image">
            <!-- Left Arrow -->
            <button @click="currentIndex = currentIndex > 0 ? currentIndex - 1 : images.length - 1"
                class="absolute left-2 top-1/2 transform -translate-y-1/2 text-white rounded-full p-2 opacity-75 hover:opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Right Arrow -->
            <button @click="currentIndex = currentIndex < images.length - 1 ? currentIndex + 1 : 0"
                class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white rounded-full p-2 opacity-75 hover:opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Post Content -->
        <div class="p-4">
            <div x-data="{ expanded: false }">
                <p class="text-gray-800 text-sm">
                    <span x-show="!expanded">
                        the Sangguniang Kabataan (SK) Chairpersons from the Municipality of Virac had their family day
                        event titled SKamustahan...
                    </span>
                    <span x-show="expanded">
                        The youth of Sta. Elena show the true meaning of teamwork and community
                        spirit by helping the Barangay Council clean the Covered Court. Together, they worked hard to
                        keep the
                        court clean and safe for everyone to use. Their efforts show their care for the community and
                        their
                        willingness to help make their barangay a better place.
                    </span>
                </p>
                <button @click="expanded = !expanded" class="text-blue-500 text-sm mt-1">
                    <span x-show="!expanded">See More</span>
                    <span x-show="expanded">See Less</span>
                </button>
            </div>


            {{-- <p class="text-gray-800 text-sm">The youth of Sta. Elena show the true meaning of teamwork and community
                spirit by helping the Barangay Council clean the Covered Court. Together, they worked hard to keep the
                court clean and safe for everyone to use. Their efforts show their care for the community and their
                willingness to help make their barangay a better place.
            </p> --}}
            <div class="mt-3 flex items-center justify-between text-gray-500 text-sm">
                <div class="flex items-center space-x-2">
                    <button class="flex items-center space-x-1 hover:text-red-700">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"
                                height="20">
                                <path fill="currentColor"
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </span>
                    </button>
                    <button class="flex items-center space-x-1 hover:text-blue-500">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M21 12.5a8.5 8.5 0 1 0-3 6.5l3 1-1-3a8.5 8.5 0 0 0 1-4.5z" />
                            </svg>
                        </span>
                    </button>
                    <button class="flex items-center space-x-1 hover:text-blue-500">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 6V3h-3" />
                                <path d="M3 12a9 9 0 0 1 15-6.7L20 6" />
                                <path d="M4 18v3h3" />
                                <path d="M21 12a9 9 0 0 1-15 6.7L4 18" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
</div>
