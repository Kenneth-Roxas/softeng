<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
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

    <div
        class="bg-gray-50 font-[sans-serif] relative max-w-full max-h-full shadow-lg shadow-[#e9d9f3] mx-auto rounded overflow-hidden">
        <div class="grid sm:grid-cols-2 max-sm:gap-6">
            <div class="text-center p-6 flex flex-col justify-center items-center">
                <h3 class="font-extrabold text-5xl text-[#4e0083] leading-tight"><span class="text-gray-800">SK</span>
                    Profiling</h3>
                <h6 class="text-lg text-gray-800 mt-4">Come Youth, Update your profile with this <br> new digital
                    profiling system</h6>

                <a href="{{ route('profiling') }}"><button type="button"
                        class="bg-[#4e0083] hover:bg-[#4f0083cc] text-white tracking-wide font-semibold text-sm py-3 px-6 rounded-xl mt-8">
                        Profiling
                    </button></a>
            </div>

            <div
                class="flex justify-end items-center p-2 bg-gradient-to-b from-[#4e0083] to-[#796089] rounded-bl-[230px] w-full h-full">
                <div class="h-72 w-72 rounded-full bg-gradient-to-tr from-[#4e0083] to-[#c19ed6] p-5">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Sangguniang_Kabataan_logo.svg/1200px-Sangguniang_Kabataan_logo.svg.png"
                        class="w-full h-full rounded-full object-cover" alt="img" />
                </div>
            </div>
        </div>

        <div class="absolute -top-[50px] -left-[50px] w-28 h-28 rounded-full bg-[#4e0083] opacity-40 shadow-lg"></div>
        <div class="absolute -top-10 -left-10 w-28 h-28 rounded-full bg-[#4e0083] opacity-40 shadow-lg"></div>
    </div>


    <div class="bg-white font-[sans-serif] p-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto">
                <h2 class="text-3xl font-extrabold text-gray-800 inline-block">Latest Activity</h2>
                <p class="text-gray-600 text-sm mt-6">The Sangguniang Kabataan (SK) officials of Virac continue to lead
                    various initiatives, including youth empowerment programs, environmental campaigns, sports
                    activities, and community outreach projects. Stay updated on their latest efforts to foster
                    development and engagement among the youth.</p>
            </div>
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 max-lg:max-w-3xl max-md:max-w-md mx-auto">
                <div
                    class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
                    <img src="{{ asset('Images/blog1.jpg') }}" 
                        alt="Blog Post 1"
                        class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                    <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">8 JAN 2025 | BY KENNETH
                            VARGAS</span>
                        <h3 class="text-xl font-bold text-white">Palaro for All Youth in Sta. Elena</h3>
                        <div class="mt-4">
                            <p class="text-gray-200 text-sm ">The SK Sta. Elena conducted the Paskohang Palaro for all
                                the youth at Sta. Elena Covered Court.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
                    <img src="{{ asset('Images/blog2.jpg')}}"
                        alt="Blog Post 2"
                        class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                    <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">9 FEB 2025 | BY MA'AM LEA
                            MADRID</span>
                        <h3 class="text-xl font-bold text-white">𝐒𝐊𝐀𝐌𝐔𝐒𝐓𝐀𝐇𝐀𝐍 </h3>
                        <div class="mt-4">
                            <p class="text-gray-200 text-sm ">SK Chairpersons presented their year-end accomplishment
                                reports, providing insights into their achieved programs and initiatives, and also
                                engaged in various team-building activities that aimed to strengthen teamwork and unity
                                among the SK Virac leaders.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
                    <img src="{{ asset('Images/blog3.jpg')}}"
                        alt="Blog Post 3"
                        class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                    <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">5 FEB 2025 | BY PYDO -
                            CATANDUANES</span>
                        <h3 class="text-xl font-bold text-white">SK Year-Starter Synergy</h3>
                        <div class="mt-4">
                            <p class="text-gray-200 text-sm ">Let us begin another year of genuine public service
                                𝒘𝒊𝒕𝒉 “𝑺𝑲 𝒀𝒆𝒂𝒓-𝑺𝒕𝒂𝒓𝒕𝒆𝒓 𝑺𝒚𝒏𝒆𝒓𝒈𝒚: 𝑺𝒕𝒂𝒓𝒕𝒊𝒏𝒈 𝑺𝒕𝒓𝒐𝒏𝒈,
                                𝑺𝒕𝒂𝒚𝒊𝒏𝒈 𝑺𝒐𝒍𝒊𝒅,”.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
                    <img src="{{ asset('Images/blog4.jpg')}}"
                        alt="Blog Post 3"
                        class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                    <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">6 FEB 2025 | BY KENNETH
                            VARGAS</span>
                        <h3 class="text-xl font-bold text-white">𝐀𝐏𝐏𝐑𝐎𝐕𝐄𝐃 𝐑𝐄𝐒𝐎𝐋𝐔𝐓𝐈𝐎𝐍𝐒 𝐎𝐅 𝐓𝐇𝐄 SK
                            - VIRAC </h3>
                        <div class="mt-4">
                            <p class="text-gray-200 text-sm ">𝐑𝐞𝐬𝐨 𝐍𝐨. 𝟎𝟎𝟏𝟏
                                "𝘈 𝘙𝘦𝘴𝘰𝘭𝘶𝘵𝘪𝘰𝘯 𝘊𝘰𝘮𝘮𝘦𝘯𝘥𝘪𝘯𝘨 𝘵𝘩𝘦 𝘚𝘢𝘯𝘨𝘨𝘶𝘯𝘪𝘢𝘯𝘨
                                𝘒𝘢𝘣𝘢𝘵𝘢𝘢𝘯 𝘔𝘶𝘯𝘪𝘤𝘪𝘱𝘢𝘭 𝘍𝘦𝘥𝘦𝘳𝘢𝘵𝘪𝘰𝘯 (𝘚𝘒𝘔𝘍) 𝘚𝘵𝘢𝘧𝘧 𝘧𝘰𝘳
                                𝘵𝘩𝘦𝘪𝘳 𝘝𝘢𝘭𝘶𝘢𝘣𝘭𝘦 𝘌𝘧𝘧𝘰𝘳𝘵𝘴 𝘪𝘯 𝘈𝘪𝘥𝘪𝘯𝘨 𝘵𝘩𝘦
                                𝘚𝘢𝘯𝘨𝘨𝘶𝘯𝘪𝘢𝘯𝘨 𝘒𝘢𝘣𝘢𝘵𝘢𝘢𝘯 𝘊𝘰𝘶𝘯𝘤𝘪𝘭𝘴"</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
                    <img src="{{ asset('Images/blog5.jpg')}}"
                        alt="Blog Post 3"
                        class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                    <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">5 FEB 2025 | BY SK MUNICIPAL
                            FEDERATION - VIRAC</span>
                        <h3 class="text-xl font-bold text-white">Outreach Program in Cabihian</h3>
                        <div class="mt-4">
                            <p class="text-gray-200 text-sm ">The Sangguniang Kabataan Municipal Federation of Virac
                                organized an Outreach Program held in Cabihian on December 20, 2024 which aimed to
                                support and uplift the local community, particularly the children, with a total of 62
                                beneficiaries, consisting of Kindergarten to Grade 6 students.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white cursor-pointer rounded-lg overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-60">
                    <img src="{{ asset('Images/blog6.jpg')}}"
                        alt="Blog Post 3"
                        class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                    <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">2 FEB 2025 | BY LOCAL YOUTH
                            OFFICE</span>
                        <h3 class="text-xl font-bold text-white">LARO NG LAHI</h3>
                        <div class="mt-4">
                            <p class="text-gray-200 text-sm ">The Sangguniang Kabataan Chairpersons of Virac, along
                                with several teachers from various schools in our municipality, collaborated in
                                facilitating the Laro ng Lahi event held on December 8, 2024, at Virac Plaza Rizal. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <a href="#"
                class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                role="alert">
                <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span
                    class="text-sm font-medium">Announcement</span>
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Stay Updated on SK Virac!</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Get the latest news, events, and announcement from SK Virac!</p>
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    SK Activities
                </a>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    SK Announcement
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-50 py-6 px-8 font-sans tracking-wide">
        <div class="flex max-lg:flex-col items-center justify-between gap-x-6 gap-y-8">

            <ul class="flex flex-wrap justify-center gap-6">
                <li>
                    <a href='javascript:void(0)'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-8 h-8"
                            viewBox="0 0 49.652 49.652">
                            <path
                                d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zM31 25.7h-4.039v14.396h-5.985V25.7h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939h-3.219c-.524 0-1.269.262-1.269 1.386v2.99h4.56z"
                                data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 152 152">
                            <linearGradient id="a" x1="22.26" x2="129.74" y1="22.26"
                                y2="129.74" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fae100" />
                                <stop offset=".15" stop-color="#fcb720" />
                                <stop offset=".3" stop-color="#ff7950" />
                                <stop offset=".5" stop-color="#ff1c74" />
                                <stop offset="1" stop-color="#6c1cd1" />
                            </linearGradient>
                            <g data-name="Layer 2">
                                <g data-name="03.Instagram">
                                    <rect width="152" height="152" fill="url(#a)" data-original="url(#a)"
                                        rx="76" />
                                    <g fill="#fff">
                                        <path fill="#ffffff10"
                                            d="M133.2 26c-11.08 20.34-26.75 41.32-46.33 60.9S46.31 122.12 26 133.2q-1.91-1.66-3.71-3.46A76 76 0 1 1 129.74 22.26q1.8 1.8 3.46 3.74z"
                                            data-original="#ffffff10" />
                                        <path
                                            d="M94 36H58a22 22 0 0 0-22 22v36a22 22 0 0 0 22 22h36a22 22 0 0 0 22-22V58a22 22 0 0 0-22-22zm15 54.84A18.16 18.16 0 0 1 90.84 109H61.16A18.16 18.16 0 0 1 43 90.84V61.16A18.16 18.16 0 0 1 61.16 43h29.68A18.16 18.16 0 0 1 109 61.16z"
                                            data-original="#ffffff" />
                                        <path
                                            d="m90.59 61.56-.19-.19-.16-.16A20.16 20.16 0 0 0 76 55.33 20.52 20.52 0 0 0 55.62 76a20.75 20.75 0 0 0 6 14.61 20.19 20.19 0 0 0 14.42 6 20.73 20.73 0 0 0 14.55-35.05zM76 89.56A13.56 13.56 0 1 1 89.37 76 13.46 13.46 0 0 1 76 89.56zm26.43-35.18a4.88 4.88 0 0 1-4.85 4.92 4.81 4.81 0 0 1-3.42-1.43 4.93 4.93 0 0 1 3.43-8.39 4.82 4.82 0 0 1 3.09 1.12l.1.1a3.05 3.05 0 0 1 .44.44l.11.12a4.92 4.92 0 0 1 1.1 3.12z"
                                            data-original="#ffffff" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 1227 1227">
                            <path
                                d="M613.5 0C274.685 0 0 274.685 0 613.5S274.685 1227 613.5 1227 1227 952.315 1227 613.5 952.315 0 613.5 0z"
                                data-original="#000000" />
                            <path fill="#fff"
                                d="m680.617 557.98 262.632-305.288h-62.235L652.97 517.77 470.833 252.692H260.759l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074L680.601 557.98zM345.423 299.545h95.595l440.024 629.411h-95.595z"
                                data-original="#ffffff" />
                        </svg>
                    </a>
                </li>
            </ul>

            <p class='text-base text-center text-gray-900  max-lg:order-1'>© SK - Virac. All rights reserved.</p>
            <ul class="flex justify-center gap-x-6 gap-y-2 flex-wrap">
                <li><a href="javascript:void(0)" class="text-gray-900 hover:text-gray-500 text-base">Terms of
                        Service</a></li>
                <li><a href="javascript:void(0)" class="text-gray-900 hover:text-gray-500 text-base">Privacy
                        Policy</a></li>
            </ul>
        </div>
    </footer>

</div>
