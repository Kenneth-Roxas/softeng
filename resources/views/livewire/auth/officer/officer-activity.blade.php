<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    @section('title', 'SK Activities')
    
    

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

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
</div>
