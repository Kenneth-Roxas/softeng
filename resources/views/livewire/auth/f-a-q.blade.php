<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

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

    <div class="font-[sans-serif] space-y-4 mt-5 max-w-4xl mx-auto">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">FAQS</h2>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4">What is Sangguniang Kabataan?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">Sangguniang Kabataan (SK) is the youth council in the Philippines that
                    serves as the governing body for young individuals in barangays (villages). It is responsible for
                    representing youth interests, initiating programs for community development, and promoting
                    leadership among young Filipinos. The SK is composed of elected youth officials, including the SK
                    Chairperson and SK Kagawads (council members), who are responsible for planning and implementing
                    projects related to education, health, sports, and social welfare.</p>
            </div>
        </div>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4">What is Profiling that SK Officials conducting for?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">SK officials conduct youth profiling to gather essential data on
                    demographics, education, employment, and social concerns, enabling them to develop targeted
                    programs, allocate resources efficiently, and create policies that address the needs of the youth in
                    their barangay.</p>
            </div>
        </div>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4">What is the Web-App Sangguaniang Kabataan (SK) Profiling and Management System used
                    for?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">This system helps SK officials manage youth profiles, projects, and
                    financial records efficiently. It reduces paperwork and makes data retrieval faster and more
                    organized.</p>
            </div>
        </div>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4">Why do we need an SK profiling system?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">Many SK councils still rely on manual records, making it difficult to
                    track youth members, projects, and budgets. This system ensures accurate data management, faster
                    reporting, and better transparency.</p>
            </div>
        </div>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4">Who can use this system?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">The system is designed for Youths, SK officials (Chairperson,
                    Secretary, Treasurer, and Council Members), Barangay Officials, and LGU personnel involved in
                    SK-related matters.</p>
            </div>
        </div>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4">How secure is my personal information in the system?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">The system follows data privacy protocols with encrypted storage and
                    role-based access control to protect user information.</p>
            </div>
        </div>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4">Who has access to SK members' personal data?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">Only authorized SK officials and system administrators can access
                    member profiles. Regular members can only view limited information for privacy reasons.</p>
            </div>
        </div>
        <div class="accordion rounded-lg hover:bg-blue-50 transition-all">
            <button type="button"
                class="toggle-button w-full text-base text-left py-5 px-6 text-gray-800 flex items-center">
                <span class="mr-4"> What if I need help using the system?</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="arrow transition-all w-3 fill-current ml-auto shrink-0 -rotate-90" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000"></path>
                </svg>
            </button>
            <div class="content px-6 invisible max-h-0 overflow-hidden transition-all duration-300">
                <p class="text-sm text-gray-600">A user guide and tutorials are available within the system. If further
                    help is needed, contact the LGU IT support team.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.accordion').forEach(elm => {
                const button = elm.querySelector('.toggle-button');
                const content = elm.querySelector('.content');
                const arrowIcon = elm.querySelector('.arrow');

                button.addEventListener('click', () => {
                    const isHidden = content.classList.toggle('invisible');
                    content.style.maxHeight = isHidden ? '0px' : `${content.scrollHeight + 100}px`;
                    content.classList.toggle('pb-5', !isHidden);
                    button.classList.toggle('font-semibold');
                    elm.classList.toggle('bg-blue-50');
                    arrowIcon.classList.toggle('-rotate-180', !isHidden)
                    arrowIcon.classList.toggle('-rotate-90', isHidden)
                });
            });
        });
    </script>
</div>
