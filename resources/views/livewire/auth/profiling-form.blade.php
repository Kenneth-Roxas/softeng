<div>
    {{-- Stop trying to control. --}}

    <style>
        .not-empty+label {
            top: 2px;
            font-size: 0.875rem;
            /* Equivalent to 'text-sm' */
            color: #3b82f6;
            /* Blue-500 */
        }

        .yes-no-button {
            @apply w-full bg-gray-200 text-gray-800 py-2 rounded-lg shadow hover:bg-gray-300;
        }

        .yes-no-button.selected {
            @apply bg-blue-500 text-white;
        }
    </style>




    <div class="font-[sans-serif] flex justify-start mt-2 ml-2 gap-4">
        <button type="button" onclick="history.back()"
            class="px-5 py-2.5 flex items-center justify-center rounded text-white text-sm tracking-wider font-medium border-none outline-none bg-red-600 hover:bg-red-700 active:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="11px" fill="currentColor" class="mr-2 inline"
                viewBox="0 0 320.591 320.591">
                <path
                    d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                    data-original="#000000" />
                <path
                    d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                    data-original="#000000" />
            </svg>
            Back
        </button>
    </div>


    <div>
        <div class="w-full flex items-center justify-center mt-4">
            @for ($step = 1; $step <= 5; $step++)
                <div class="flex items-center">
                    <div
                        class="w-7 h-7 shrink-0 bg-{{ $currentStep >= $step ? 'blue-600' : 'gray-300' }} p-1.5 flex items-center justify-center rounded-full">
                        @if ($currentStep > $step)
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" />
                            </svg>
                        @else
                            <span class="text-white font-bold">{{ $step }}</span>
                        @endif
                    </div>
                    @if ($step < 5)
                        <div class="w-10 h-1 {{ $currentStep > $step ? 'bg-blue-600' : 'bg-gray-300' }}"></div>
                    @endif
                </div>
            @endfor
        </div>

        <div class="mt-6">
            <form action="">
                @if ($currentStep == 1)
                    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg mt-3 shadow-lg border border-gray-300">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Left Side: Information Section -->
                            <div
                                class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-6 rounded-lg flex flex-col justify-center shadow-lg">
                                <h2 class="text-3xl font-extrabold mb-4">TO THE YOUTH:</h2>
                                <p class="text-lg leading-relaxed">
                                    Good day! We are conducting a study assessing the demographic information of
                                    Katipunan
                                    ng Kabataan.
                                    Your participation is valuable! Please answer this questionnaire carefully.
                                    All gathered information will be treated with strict confidentiality.
                                </p>
                            </div>

                            <!-- Right Side: Form Section -->
                            <div class="space-y-6 flex flex-col">
                                <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Profiling Form</h1>
                                <div class="relative">
                                    <input type="text" wire:model="name"
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md">
                                    <label for="name"
                                        class="absolute left-1 top-1 text-gray-600 text-sm bg-white px-1 transition-all peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:top-1 peer-focus:text-blue-500 peer-focus:text-xs">
                                        Youth Name (Last, Initial, M, Suffix)
                                    </label>
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="relative">
                                    <input type="text" wire:model="location"
                                        class="peer w-full border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md">
                                    <label for="location"
                                        class="absolute left-1 top-1 text-gray-600 text-sm bg-white px-1 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:top-1 peer-focus:text-blue-500 peer-focus:text-xs">
                                        Location (Barangay)
                                    </label>
                                    @error('location')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Sex:</label>
                                    <div class="flex space-x-4">
                                        <label
                                            class="flex items-center px-4 py-2 rounded-xl shadow cursor-pointer transition-all duration-300"
                                            wire:model="sex"
                                            :class="{ 'bg-blue-500 text-white': @js($sex === 'Male'), 'bg-gray-100 hover:bg-gray-400': @js($sex !== 'Male') }">
                                            <input type="radio" value="Male" class="mr-2 hidden">
                                            <span class="text-base">Male</span>
                                        </label>
                                        <label
                                            class="flex items-center px-4 py-2 rounded-xl shadow cursor-pointer transition-all duration-300"
                                            wire:model="sex"
                                            :class="{ 'bg-blue-500 text-white': @js($sex === 'Female'), 'bg-gray-100 hover:bg-gray-400': @js($sex !== 'Female') }">
                                            <input type="radio" value="Female" class="mr-2 hidden">
                                            <span class="text-base">Female</span>
                                        </label>
                                        <label
                                            class="flex items-center px-4 py-2 rounded-xl shadow cursor-pointer transition-all duration-300"
                                            wire:model="sex"
                                            :class="{ 'bg-blue-800 text-white': @js($sex === 'Prefer not to say'), 'bg-gray-100 hover:bg-gray-400': @js($sex !== 'Prefer not to say') }">
                                            <input type="radio" value="Prefer not to say" class="mr-2 hidden">
                                            <span class="text-base">Prefer not to say</span>
                                        </label>
                                    </div>
                                    @error('sex')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <input type="number" id="age" wire:model="age"
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md appearance-none 
                                [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none [&::-moz-appearance:textfield]">

                                    <label for="age"
                                        class="absolute left-4 top-1 text-gray-600 text-sm px-1 transition-all 
                                peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm 
                                peer-focus:top-1 peer-focus:text-blue-500 peer-focus:text-xs">
                                        Age
                                    </label>
                                    @error('age')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="relative">
                                    <input type="text" id="birthdate" wire:model="birthdate"
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md"
                                        oninput="formatDate(this)">
                                    <label for="birthdate"
                                        class="absolute left-1 top-1 text-gray-600 text-sm px-1 transition-all 
                                peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base 
                                peer-focus:top-1 peer-focus:text-blue-500 peer-focus:text-xs">
                                        Birthdate (YYYY-MM-DD)
                                    </label>
                                    @error('birthdate')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <input type="email" id="email" wire:model="email"
                                        class="peer w-full border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md">
                                    <label for="email"
                                        class="absolute left-1 top-2 text-gray-600 text-sm bg-white px-1 transition-all peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:top-1 peer-focus:text-blue-500 peer-focus:text-xs">
                                        Email Address
                                    </label>
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <input type="tel" id="contact" wire:model="contact"
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md">
                                    <label for="contact"
                                        class="absolute left-1 top-1 text-gray-600 text-sm bg-white px-1 transition-all peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-base peer-focus:top-1 peer-focus:text-blue-500 peer-focus:text-xs">
                                        Contact Number
                                    </label>
                                    @error('contact')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="button" wire:click="nextStep"
                                    class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-3 py-2 rounded-full text-lg font-semibold shadow-md hover:opacity-90 transition">
                                    Next →
                                </button>
                            </div>
                        </div>
                    </div>
                @elseif ($currentStep == 2)
                    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg mt-3 shadow-lg border border-gray-300">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Left Side: Information Section -->
                            <div
                                class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-6 rounded-lg flex flex-col justify-center shadow-lg">
                                <h2 class="text-3xl font-extrabold mb-4">TO THE YOUTH:</h2>
                                <p class="text-lg leading-relaxed">
                                    Good day! We are conducting a study assessing the demographic information of
                                    Katipunan
                                    ng Kabataan.
                                    Your participation is valuable! Please answer this questionnaire carefully.
                                    All gathered information will be treated with strict confidentiality.
                                </p>
                            </div>

                            <!-- Right Side: Form Section -->
                            <div class="space-y-6 flex flex-col">
                                <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Demographic Profile</h1>
                                <div class="relative">
                                    <select id="marital-status"
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md appearance-none">
                                        <option value="Single" disabled selected>Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Annulled">Annulled</option>
                                        <option value="Live-In">Live-In</option>
                                    </select>
                                    <label for="marital-status"
                                        class="absolute left-4 top-4 text-gray-600 text-lg bg-white px-1 transition-all peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-blue-500 peer-focus:text-sm">
                                        Marital Status
                                    </label>
                                </div>


                                <div class="relative">
                                    <select id="youth-classification" required
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md appearance-none">
                                        
                                        <option value="InSchool" disabled selected>In School</option>
                                        <option value="OutOfSchool">Out of School</option>
                                        <option value="WorkingYouth">Working Youth</option>
                                        <option value="YWSN">Youth with Special Needs</option>
                                    </select>
                                    <label for="youth-classification"
                                        class="absolute left-4 top-4 text-gray-600 text-lg bg-white px-1 transition-all peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-blue-500 peer-focus:text-sm">
                                        Youth Classification
                                    </label>
                                </div>

                                <div class="relative">
                                    <select id="work-status" required
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md appearance-none">

                                        <option value="Un" disabled selected>Unemployed</option>
                                        <option value="Em">Employed</option>
                                        <option value="SE">Self-Employed</option>
                                        <option value="CLE">Currently Looking for Job</option>
                                    </select>
                                    <label for="work-status"
                                        class="absolute left-4 top-4 text-gray-600 text-lg bg-white px-1 transition-all peer-placeholder-shown:top-5 peer-placeholder-shown:text-gray-400 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-blue-500 peer-focus:text-sm">
                                        Work Status
                                    </label>
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Registered National
                                        Voter:</label>
                                    <div class="flex space-x-4">
                                        <button
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="registered_national_voter" value="Yes"
                                                class="mr-2 hidden">
                                            <span class="text-base">Yes</span>
                                        </button>
                                        <label
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="registered_national_voter" value="No"
                                                class="mr-2 hidden">
                                            <span class="text-base">No</span>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Registered SK Voter:</label>
                                    <div class="flex space-x-4">
                                        <label
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="registered_sk_voter" value="Yes"
                                                class="mr-2 hidden">
                                            <span class="text-base">Yes</span>
                                        </label>
                                        <label
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="registered_sk_voter" value="No"
                                                class="mr-2 hidden">
                                            <span class="text-base">No</span>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Did you vote last SK
                                        election:</label>
                                    <div class="flex space-x-4">
                                        <label
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="sk_electionr" value="Yes"
                                                class="mr-2 hidden">
                                            <span class="text-base">Yes</span>
                                        </label>
                                        <label
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="sk_electionr" value="No"
                                                class="mr-2 hidden">
                                            <span class="text-base">No</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Next Button -->
                                <div class="flex justify-end mt-6">
                                    @if ($currentStep > 1)
                                        <button wire:click="previousStep"
                                            class="bg-gradient-to-r from-red-500 to-red-600 text-white px-8 py-3 mr-4 rounded-xl text-base font-semibold shadow-md hover:opacity-90 transition">Back</button>
                                    @endif
                                    @if ($currentStep < 4)
                                        <button wire:click="nextStep"
                                            class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-8 py-3 rounded-xl text-base font-semibold shadow-md hover:opacity-90 transition">Next
                                            →</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif ($currentStep == 3)
                    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg mt-3 shadow-lg border border-gray-300">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Left Side: Information Section -->
                            <div
                                class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-6 rounded-lg flex flex-col justify-center shadow-lg">
                                <h2 class="text-3xl font-extrabold mb-4">TO THE YOUTH:</h2>
                                <p class="text-lg leading-relaxed">
                                    Good day! We are conducting a study assessing the demographic information of
                                    Katipunan
                                    ng Kabataan.
                                    Your participation is valuable! Please answer this questionnaire carefully.
                                    All gathered information will be treated with strict confidentiality.
                                </p>
                            </div>

                            <!-- Right Side: Form Section -->
                            <form class="space-y-6 flex flex-col">
                                <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Youth Participation</h1>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Have you already attended a
                                        KK
                                        Assembly?</label>
                                    <div class="flex space-x-4">
                                        <label
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="sk_electionr" value="Yes"
                                                class="mr-2 hidden" onchange="toggleFollowUp(this)">
                                            <span class="text-base">Yes</span>
                                        </label>
                                        <label
                                            class="flex items-center bg-gray-100 px-4 py-2 rounded-xl shadow hover:bg-gray-400 cursor-pointer">
                                            <input type="radio" name="sk_electionr" value="No"
                                                class="mr-2 hidden" onchange="toggleFollowUp(this)">
                                            <span class="text-base">No</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Follow-up question for "Yes" -->
                                <div id="yesFollowUp" class="mt-4 hidden">
                                    <label class="block text-gray-700 font-semibold mb-2">How many times?</label>
                                    <select id="work-status" required
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md appearance-none">
                                        <option value="" disabled selected></option>
                                        <option value="1-2">1-2 times</option>
                                        <option value="3-4">3-4 times</option>
                                        <option value="5+">5 and above</option>
                                    </select>
                                </div>

                                <!-- Follow-up question for "No" -->
                                <div id="noFollowUp" class="mt-4 hidden">
                                    <label class="block text-gray-700 font-semibold mb-2">Why?</label>
                                    <select id="work-status" required
                                        class="peer w-full bg-gray-50 border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-base outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-300 shadow-md appearance-none">
                                        <option value="" disabled selected></option>
                                        <option value="No Assembly">No KK Assembly</option>
                                        <option value="Not Interested">Not interested</option>
                                    </select>
                                </div>

                                <!-- Next Button -->
                                <div class="flex justify-end mt-6">
                                    @if ($currentStep > 1)
                                        <button wire:click="previousStep"
                                            class="bg-gradient-to-r from-red-500 to-red-600 text-white px-8 py-3 mr-4 rounded-xl text-base font-semibold shadow-md hover:opacity-90 transition">Back</button>
                                    @endif
                                    @if ($currentStep < 4)
                                        <button wire:click="nextStep"
                                            class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-8 py-3 rounded-xl text-base font-semibold shadow-md hover:opacity-90 transition">Next
                                            →</button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                @elseif ($currentStep == 4)
                    <div
                        class="flex items-center justify-center min-h-screen -mt-40 shadow-2xl bg-gray-100 border border-gray-300">
                        <div class="text-center bg-white p-6 rounded-lg shadow-2xl border border-gray-300">
                            <h2 class="text-2xl font-bold mb-4 text-gray-800">THANK YOU FOR PARTICIPATING!</h2>
                            <div>
                                <button wire:click="previousStep"
                                    class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600 transition">
                                    Review
                                </button>
                                <button wire:click="nextStep"
                                    class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition ml-2">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                @elseif ($currentStep == 5)
                    <div class="bg-white p-8 font-[sans-serif]">
                        <div class="max-w-xl mx-auto text-center">
                            <h2
                                class="text-gray-800 text-4xl font-extrabold relative after:absolute after:-bottom-5 after:h-1 after:w-1/2 after:bg-blue-600 after:left-0 after:right-0 after:mx-auto after:rounded-full">
                                Come and see the latest activity of SK Virac!</h2>
                            <div class="mt-12">
                                <p class="text-gray-800 text-base">
                                    Stay updated with the vibrant initiatives of SK Virac! From youth empowerment
                                    programs
                                    to community outreach activities,
                                    we are committed to making a positive impact. Join us in our latest events and be
                                    part
                                    of the change!
                                </p>
                            </div>

                            <div class="flex max-sm:flex-col justify-center gap-6 mt-12">
                                <a href="{{ route('SKActivities') }}"><button type="button"
                                        class="min-w-[140px] rounded px-4 py-2.5 text-sm tracking-wider font-semibold outline-none border text-white border-blue-600 bg-blue-600 hover:bg-transparent hover:text-blue-600 transition-all duration-300">See
                                        Now</button></a>
                                <a href="{{ route('home') }}"><button type="button"
                                        class="text-gray-800 min-w-[140px] rounded px-4 py-2.5 text-sm tracking-wider font-semibold outline-none border border-gray-300 hover:bg-gray-50 transition-all duration-300">Home</button></a>
                            </div>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>









    <script>
        let currentStep = 1;
        const steps = document.querySelectorAll(".step"); // Stepper circles
        const progressBars = document.querySelectorAll(".progress-bar"); // Stepper lines
        const formSections = document.querySelectorAll(".form-section"); // Form pages

        function updateStep() {
            steps.forEach((step, index) => {
                if (index < currentStep) {
                    step.classList.add("bg-blue-600", "text-white");
                    step.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-white" viewBox="0 0 24 24">
                        <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"/>
                    </svg>`;
                } else {
                    step.classList.remove("bg-blue-600", "text-white");
                    step.innerHTML = `<span class="w-3 h-3 bg-white rounded-full"></span>`;
                }
            });

            progressBars.forEach((bar, index) => {
                if (index < currentStep - 1) {
                    bar.classList.add("bg-blue-600");
                } else {
                    bar.classList.remove("bg-blue-600");
                }
            });

            formSections.forEach((section, index) => {
                section.style.display = index === currentStep - 1 ? "block" : "none";
            });
        }

        document.getElementById("next-btn").addEventListener("click", () => {
            if (currentStep < steps.length) {
                currentStep++;
                updateStep();
            }
        });

        updateStep(); // Initialize UI
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("input").forEach(input => {
                if (input.value.trim() !== "") {
                    input.classList.add("not-empty");
                }

                input.addEventListener("input", function() {
                    if (this.value.trim() !== "") {
                        this.classList.add("not-empty");
                    } else {
                        this.classList.remove("not-empty");
                    }
                });
            });
        });
    </script>

    <script>
        function formatDate(input) {
            let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            if (value.length > 8) value = value.slice(0, 8); // Limit to 8 characters

            // Auto-format as YYYY-MM-DD
            let formatted = value.replace(/(\d{4})(\d{2})?(\d{2})?/, (_, y, m, d) => {
                return [y, m, d].filter(Boolean).join('-');
            });

            input.value = formatted;
        }
    </script>

    <script>
        function toggleFollowUp(element) {
            const yesFollowUp = document.getElementById('yesFollowUp');
            const noFollowUp = document.getElementById('noFollowUp');

            if (element.value === "Yes") {
                yesFollowUp.classList.remove('hidden');
                noFollowUp.classList.add('hidden');
            } else {
                noFollowUp.classList.remove('hidden');
                yesFollowUp.classList.add('hidden');
            }
        }
    </script>
</div>
