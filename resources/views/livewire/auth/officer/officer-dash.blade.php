<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    @section('title', 'Officer Dashboard')

    <section>
        <div class="mx-auto max-w-screen px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                <div>
                    <div class="max-w-lg md:max-w-none">
                        <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
                            Welcome, SK Leaders of Virac!
                        </h2>

                        <p class="mt-4 text-gray-700">
                            As young leaders of Virac, you are the driving force of change and progress in our
                            community.
                            Your dedication, passion, and vision will shape a better future for the youth. Let's work
                            together
                            to empower and uplift our fellow Kabataan!
                        </p>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('Images/skOfficers.jpg') }}" class="rounded"
                        alt="SK Leaders of Virac working together" />
                </div>
            </div>
        </div>
    </section>

    <div class="flex flex-col items-center justify-center mx-auto max-w-screen-xl px-4 sm:px-6 sm:py-12 lg:px-8">
        <dl class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 justify-center">
            <div class="flex flex-col rounded-lg bg-blue-300 px-6 py-8 text-center w-full">
                <dt class="order-last text-lg font-medium text-gray-700">Total User in Area</dt>
                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">$4.8m</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-300 px-6 py-8 text-center w-full">
                <dt class="order-last text-lg font-medium text-gray-700">Total User in Municipal</dt>
                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-300 px-6 py-8 text-center w-full">
                <dt class="order-last text-lg font-medium text-gray-700">Youth Profile</dt>
                <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
            </div>
        </dl>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                SK Leaders, Post Your Updates!
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Keep the youth of Virac informed! Post announcements, upcoming events, and activities to engage and
                empower our community.
            </p>
            <div class="flex flex-col mb-4 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{ route('add-act') }}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Post an Activity
                </a>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Post an Announcement
                </a>
            </div>
        </div>
    </section>







</div>
