<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

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


    <div class="max-w-6xl mx-auto bg-white p-4 mt-5 font-[sans-serif]">
        <div
            class="grid md:grid-cols-2 gap-16 items-center relative overflow-hidden p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] before:absolute before:right-0 before:w-[300px] before:bg-blue-400 before:h-full max-md:before:hidden">
            <div>
                <h2 class="text-gray-800 text-3xl text-center font-bold">Need Help? Reach Out to Us</h2>
                <p class="text-sm text-gray-500 mt-4 leading-relaxed">Have a concern or suggestion for your community?
                    Reach out to your SK leader and make your voice heard.
                    We're here to listen and take action for the youth</p>

                <form>
                    <div class="space-y-4 mt-8">
                        <input type="text" placeholder="Full Name"
                            class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />
                        <input type="text" placeholder="Street"
                            class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />
                        <input type="number" placeholder="Phone No."
                            class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />

                        <input type="email" placeholder="Email"
                            class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />

                        <textarea placeholder="Write Message"
                            class="px-2 pt-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none"></textarea>
                    </div>

                    <button type="button"
                        class="mt-8 flex items-center justify-center text-sm w-full px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff'
                            class="mr-2" viewBox="0 0 548.244 548.244">
                            <path fill-rule="evenodd"
                                d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                                clip-rule="evenodd" data-original="#000000" />
                        </svg>
                        Send Message
                    </button>
                </form>
            </div>
            <div class="z-10 relative h-full max-md:min-h-[350px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d242.3924724193307!2d124.23133904827192!3d13.579724558313766!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a016cff4a5541f%3A0x97da4012359f4f74!2sVirac%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1739268479567!5m2!1sen!2sph"
                    class="left-0 top-0 h-screen w-full" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>


</div>
