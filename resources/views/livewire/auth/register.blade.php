<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    @section('title', 'Register')


    <!-- Full-screen background container -->
<div class="fixed inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('Images/skOfficers.jpg')}}');">
    <!-- Dark overlay for better readability -->
    <div class="fixed inset-0 bg-black bg-opacity-50"></div>

    <!-- Modal -->
    <div id="chooseModal" tabindex="-1" aria-hidden="true"
        class="fixed inset-0 flex justify-center items-center z-50">
        <div class="w-full max-w-md p-4">
            <!-- Modal content -->
            <div class="relative p-6 text-center bg-transparent bg-opacity-90 rounded-xl shadow-2xl dark:bg-gray-800 dark:bg-opacity-90">
                <p class="mt-2 text-lg text-white dark:text-gray-300">
                    Select whether you are registering as a <strong>Youth</strong> or an <strong>SK Officer</strong>.
                </p>
                <div class="flex justify-center items-center gap-4 pt-6">
                    <a href="{{ route('youth') }}">
                        <button id="chooseYouthBtn" type="button"
                            class="py-2 px-4 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 h-12">
                            Youth
                        </button>
                    </a>
                    <a href="{{ route('officers') }}">
                        <button id="chooseSKBtn" type="button"
                            class="py-2 px-4 text-base font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 h-12 flex flex-col justify-center items-center leading-tight">
                            SK Officers 
                            <span class="text-xs mt-1 opacity-80 text-center">(SK-Officer only)</span>
                        </button>
                    </a>                    
                </div>                
            </div>
        </div>
    </div>
</div>




{{-- 
    <!-- Registration Forms -->
    <div class="relative" id="registrationForms">
        <div id="youthForm" class="hidden">
            <div class="font-[sans-serif] relative" id="chooseYouth">
                <div class="h-[250px] font-[sans-serif]">
                    <img src="{{ asset('Images/bg1.jpg') }}" alt="Banner Image" class="w-full h-full object-cover" />
                </div>

                <div class="relative -mt-40 m-4">
                    <form wire:submit.prevent="youthRegister"
                        class="bg-white max-w-xl w-full mx-auto shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6 sm:p-8 rounded-2xl">
                        @csrf
                        <div class="mb-12">
                            <h3 class="text-gray-800 text-3xl text-center">Youth Registration</h3>
                        </div>

                        <div>
                            <label class="text-gray-800 text-xs block mb-2">Full Name</label>
                            <div class="relative flex items-center">
                                <input wire:model="name" type="text"
                                    class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 pl-2 pr-8 py-3 outline-none"
                                    placeholder="Enter name" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 24 24">
                                    <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                    <path
                                        d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8">
                            <label class="text-gray-800 text-xs block mb-2">Email</label>
                            <div class="relative flex items-center">
                                <input wire:model="email" type="text"
                                    class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 pl-2 pr-8 py-3 outline-none"
                                    placeholder="Enter email" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 682.667 682.667">
                                    <defs>
                                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                            <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                        <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                            d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                            data-original="#000000"></path>
                                        <path
                                            d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                            data-original="#000000"></path>
                                    </g>
                                </svg>
                            </div>
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8">
                            <label class="text-gray-800 text-xs block mb-2">Address</label>
                            <div class="relative flex items-center">
                                <input wire:model="address" type="text"
                                    class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 pl-2 pr-8 py-3 outline-none"
                                    placeholder="Enter address (Ex. Sta.Elena)" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 24 24">
                                    <path fill="none" stroke-miterlimit="10" stroke-width="2"
                                        d="M12 22s8-8.35 8-13a8 8 0 0 0-16 0c0 4.65 8 13 8 13Z"></path>
                                    <circle cx="12" cy="9" r="3" fill="#bbb"></circle>
                                </svg>
                            </div>
                            @error('address')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8">
                            <label class="text-gray-800 text-xs block mb-2">Password</label>
                            <div class="relative flex items-center">
                                <input wire:model="password" type="password"
                                    class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 pl-2 pr-8 py-3 outline-none"
                                    placeholder="Enter password" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                                    <path
                                        d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-8">
                            <label class="text-gray-800 text-xs block mb-2">Password Confirmation</label>
                            <div class="relative flex items-center">
                                <input wire:model="password_confirmation" type="password"
                                    class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 pl-2 pr-8 py-3 outline-none"
                                    placeholder="Re-enter your Password" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                    class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                                    <path
                                        d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                        data-original="#000000"></path>
                                </svg>
                            </div>
                            @error('password_confirmation')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="flex items-center mt-8">
                            <input id="remember-me" wire:model="condition" type="checkbox"
                                class="h-4 w-4 shrink-0 rounded" />
                            <label for="remember-me" class="ml-3 block text-sm">
                                I accept the <a href="javascript:void(0);"
                                    class="text-blue-500 font-semibold hover:underline ml-1">Terms and Conditions</a>
                            </label>
                        </div>
                        @error('condition')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        <div class="mt-8">
                            <button type="submit"
                                class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold tracking-wider rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none transition-all">
                                Register
                            </button>

                            <div x-data="{ showModal: @entangle('showModal') }">
                                <template x-if="showModal">
                                    <div
                                        class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
                                        <div class="bg-white p-6 rounded-lg shadow-lg w-96">

                                            <!-- Flash Message -->
                                            @if (session()->has('login_success'))
                                                <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                                                    {{ session('login_success') }}
                                                </div>
                                            @endif

                                            <!-- Registration Form -->
                                            <form wire:submit.prevent="register">
                                                <div>
                                                    <label for="name" class="block text-gray-700">Name</label>
                                                    <input type="text" wire:model="name" id="name"
                                                        class="w-full border rounded p-2">
                                                </div>
                                                <div>
                                                    <label for="email" class="block text-gray-700">Email</label>
                                                    <input type="email" wire:model="email" id="email"
                                                        class="w-full border rounded p-2">
                                                </div>
                                                <div>
                                                    <label for="password" class="block text-gray-700">Password</label>
                                                    <input type="password" wire:model="password" id="password"
                                                        class="w-full border rounded p-2">
                                                </div>

                                                <button type="submit"
                                                    class="bg-green-500 text-white px-4 py-2 rounded mt-4 w-full">
                                                    Register
                                                </button>
                                            </form>

                                            <button @click="showModal = false"
                                                class="mt-4 bg-gray-500 text-white px-4 py-2 rounded w-full">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            <p class="text-gray-800 text-sm mt-4 text-center">Already have an account? <a
                                    href="{{ route('login') }}"
                                    class="text-blue-500 font-semibold hover:underline ml-1">Login
                                    here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="skForm" class="hidden">
            <div class="h-[250px] font-[sans-serif]">
                <img src="{{ asset('Images/bg1.jpg') }}" alt="Banner Image" class="w-full h-full object-cover" />
            </div>

            <div class="relative -mt-40 m-4">
                <form wire:submit.prevent=""
                    class="bg-white max-w-xl w-full mx-auto shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6 sm:p-8 rounded-2xl">
                    @csrf
                    <div class="mb-12">
                        <h3 class="text-gray-800 text-3xl text-center">SK Registration</h3>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
</div>
