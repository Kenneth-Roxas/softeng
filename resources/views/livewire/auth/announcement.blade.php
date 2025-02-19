<div>
    {{-- Be like water. --}}

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
        class="bg-gradient-to-l from-red-400 to-blue-400 animate-gradient-x text-white rounded-lg shadow-lg p-8 max-w-full mx-auto font-[sans-serif]">
        <h2 class="text-2xl font-bold text-center">
            SK - VIRAC ANNOUNCEMENT
        </h2>
        <marquee class="mt-4 text-base font-italic" behavior="scroll" direction="left" scrollamount="3">
            Stay updated with the latest news and important notices from your Sangguniang Kabataan Virac!
        </marquee>
    </div>

    <div class="font-sans bg-gray-100 px-4 py-12 border border-gray-500">
        <div class="grid lg:grid-cols-2 gap-12 lg:max-w-6xl max-w-2xl mx-auto">
            <div class="text-left">
                <h2 class="text-gray-800 text-3xl font-bold mb-6">𝐋𝐎𝐎𝐊: 𝐀𝐏𝐏𝐑𝐎𝐕𝐄𝐃 𝐑𝐄𝐒𝐎𝐋𝐔𝐓𝐈𝐎𝐍𝐒 𝐎𝐅
                    𝐓𝐇𝐄 𝐒𝐀𝐍𝐆𝐆𝐔𝐍𝐈𝐀𝐍𝐆 𝐊𝐀𝐁𝐀𝐓𝐀𝐀𝐍 𝐌𝐔𝐍𝐈𝐂𝐈𝐏𝐀𝐋 𝐅𝐄𝐃𝐄𝐑𝐀𝐓𝐈𝐎𝐍 𝐎𝐅
                    𝐕𝐈𝐑𝐀𝐂 | 𝐅𝐘 𝟐𝟎𝟐𝟒 | (𝟓/𝟓)</h2>
                <p class="mb-4 text-sm text-gray-900">As we continue to anchor our initiatives toward fulfilling the
                    SKMF vision, mission, and goals, presented below are 2 of the 11 resolutions (total of 11 posted
                    resos) that have been proposed, reviewed, and approved for the FY 2024:</p>
                <p class="mb-4 text-sm text-gray-900">𝐑𝐞𝐬𝐨 𝐍𝐨. 𝟎𝟎𝟏𝟑 <br>
                    "𝘈 𝘙𝘦𝘴𝘰𝘭𝘶𝘵𝘪𝘰𝘯 𝘈𝘶𝘵𝘩𝘰𝘳𝘪𝘻𝘪𝘯𝘨 𝘵𝘩𝘦 𝘋𝘪𝘴𝘣𝘶𝘳𝘴𝘦𝘮𝘦𝘯𝘵 𝘰𝘧 𝘍𝘶𝘯𝘥𝘴
                    𝘧𝘰𝘳 𝘵𝘩𝘦 𝘗𝘳𝘰𝘤𝘶𝘳𝘦𝘮𝘦𝘯𝘵 𝘰𝘧 1 𝘜𝘯𝘪𝘵 𝘓𝘢𝘱𝘵𝘰𝘱 𝘧𝘰𝘳 𝘵𝘩𝘦
                    𝘚𝘢𝘯𝘨𝘨𝘶𝘯𝘪𝘢𝘯𝘨 𝘒𝘢𝘣𝘢𝘵𝘢𝘢𝘯 𝘔𝘶𝘯𝘪𝘤𝘪𝘱𝘢𝘭 𝘍𝘦𝘥𝘦𝘳𝘢𝘵𝘪𝘰𝘯 𝘰𝘧 𝘝𝘪𝘳𝘢𝘤 𝘪𝘯
                    𝘵𝘩𝘦 𝘈𝘮𝘰𝘶𝘯𝘵 𝘰𝘧 𝘍𝘰𝘳𝘵𝘺 𝘛𝘩𝘰𝘶𝘴𝘢𝘯𝘥 𝘗𝘦𝘴𝘰𝘴 (𝘗𝘏𝘗 40,000.00)"</p>
                <p class="text-sm text-gray-900">𝐑𝐞𝐬𝐨 𝐍𝐨. 𝟎𝟎𝟏𝟒 <br>
                    "𝘈 𝘙𝘦𝘴𝘰𝘭𝘶𝘵𝘪𝘰𝘯 𝘈𝘶𝘵𝘩𝘰𝘳𝘪𝘻𝘪𝘯𝘨 𝘵𝘩𝘦 𝘋𝘪𝘴𝘣𝘶𝘳𝘴𝘦𝘮𝘦𝘯𝘵 𝘰𝘧 𝘍𝘶𝘯𝘥𝘴
                    𝘧𝘰𝘳 𝘵𝘩𝘦 𝘗𝘳𝘰𝘤𝘶𝘳𝘦𝘮𝘦𝘯𝘵 𝘰𝘧 𝘖𝘧𝘧𝘪𝘤𝘦 𝘚𝘶𝘱𝘱𝘭𝘪𝘦𝘴 𝘧𝘰𝘳 𝘵𝘩𝘦
                    𝘚𝘢𝘯𝘨𝘨𝘶𝘯𝘪𝘢𝘯𝘨 𝘒𝘢𝘣𝘢𝘵𝘢𝘢𝘯 𝘔𝘶𝘯𝘪𝘤𝘪𝘱𝘢𝘭 𝘍𝘦𝘥𝘦𝘳𝘢𝘵𝘪𝘰𝘯 𝘪𝘯 𝘵𝘩𝘦
                    𝘈𝘮𝘰𝘶𝘯𝘵 𝘰𝘧 𝘛𝘦𝘯 𝘛𝘩𝘰𝘶𝘴𝘢𝘯𝘥 𝘗𝘦𝘴𝘰𝘴 (𝘗𝘏𝘗 10,000.00)"</p>
            </div>
            <!-- Image Thumbnail -->
            <div>
                <img src="{{ asset('Images/blog4.jpg')}}"
                    alt="Placeholder Image" class="rounded-lg ml-16 object-contain w-96 h-full cursor-pointer"
                    onclick="openModal()" />
            </div>

            <!-- Modal -->
            <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center">
                <div class="relative bg-gray-600 p-4 rounded-lg shadow-lg max-w-lg">
                    <!-- Close Button with SVG -->
                    <button class="absolute top-2 right-2 p-2 text-gray-50 hover:text-gray-400"
                        onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <img src="{{ asset('Images/blog4.jpg')}}"
                        alt="Enlarged Image" class="rounded-lg w-[900px] h-[550px]">
                </div>
            </div>
        </div>
    </div>

    <div class="font-sans bg-gray-100 px-4 py-12 border border-gray-500">
        <div class="grid lg:grid-cols-2 gap-12 lg:max-w-6xl max-w-2xl mx-auto">
            <div class="text-left">
                <h2 class="text-gray-800 text-3xl font-bold mb-6">𝑶𝑭𝑭𝑰𝑪𝑰𝑨𝑳 𝑺𝑻𝑨𝑻𝑬𝑴𝑬𝑵𝑻 𝑶𝑭 𝑻𝑯𝑬
                    𝑺𝑲𝑴𝑭 𝑽𝑰𝑹𝑨𝑪 𝑶𝑵 𝑻𝑯𝑬 𝑰𝑺𝑺𝑼𝑬 𝑶𝑭 𝑨𝑵 𝑨𝑳𝑳𝑬𝑮𝑬𝑫 𝑺𝑲 𝑪𝑯𝑨𝑰𝑹𝑷𝑬𝑹𝑺𝑶𝑵
                    𝑷𝑶𝑺𝑻𝑬𝑫 𝑨𝑻 𝑪𝑨𝑻𝑨𝑵𝑫𝑼𝑨𝑵𝑬𝑺 𝑪𝑶𝑵𝑭𝑬𝑺𝑰𝑶𝑵 𝑭𝑰𝑳𝑬𝑺</h2>
                <p class="text-sm text-gray-900">The Sangguniang Kabataan Municipal Federation (SKMF) Virac addresses a
                    recent now-deleted social media post alleging that an SK Chairperson mandated four female SK members
                    to attend a Linggo ng Kabataan event late at night.</p>
                <p class="text-sm text-gray-900">SKMF Virac clarifies that none of its members engaged in such actions.
                    They emphasize that during the event last August, only selected individuals who signed up were
                    invited, and the event did not extend into the evening.</p>
                <p class="text-sm text-gray-900">The office assures the public that it takes the issue seriously and
                    will investigate if it falls under its jurisdiction, ensuring appropriate action if necessary. SKMF
                    Virac remains committed to fostering a safe, inclusive environment and will continue its programs
                    for the youth of Virac.</p>
            </div>
            <!-- Image Thumbnail -->
            <div>
                <img src="{{ asset('Images/anc1.jpg')}}"
                    alt="Placeholder Image" class="rounded-lg ml-16 object-contain w-96 h-full cursor-pointer"
                    onclick="openModal()" />
            </div>

            <!-- Modal -->
            <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center">
                <div class="relative bg-gray-600 p-4 rounded-lg shadow-lg max-w-lg">
                    <!-- Close Button with SVG -->
                    <button class="absolute top-2 right-2 p-2 text-gray-50 hover:text-gray-400"
                        onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <img src="{{ asset('Images/anc1.jpg')}}"
                        alt="Enlarged Image" class="rounded-lg w-[900px] h-[550px]">
                </div>
            </div>


        </div>
    </div>


    <script>
        function openModal() {
            document.getElementById("imageModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("imageModal").classList.add("hidden");
        }
    </script>

</div>
