<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sangguniang Kabataan')</title>
    @vite('resources/css/app.css')
    @livewireStyles

</head>

<body>
    @if (session('register_success'))
        <div x-data="{ show: true }" x-show="show" x-transition.duration.500ms
            class="fixed top-5 right-5 bg-gray-900 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-3">

            <span>{{ session('register_success') }}</span>

            <button @click="show = false" class="text-white font-bold">
                &times;
            </button>
        </div>
    @endif

    @if (session('login_success'))
        <div x-data="{ show: true }" x-show="show" x-transition.duration.500ms
            class="fixed top-5 right-5 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-3 z-50">

            <span>{{ session('login_success') }}</span>

            <button @click="show = false" class="text-white font-bold">
                &times;
            </button>
        </div>
    @endif

    @if (session('login_failed'))
        <div x-data="{ show: true }" x-show="show" x-transition.duration.500ms
            class="fixed top-5 right-5 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-3 z-50">

            <span>{{ session('login_failed') }}</span>

            <button @click="show = false" class="text-white font-bold">
                &times;
            </button>
        </div>
    @endif

    @if (session('login_first'))
        <div x-data="{ show: true }" x-show="show" x-transition.duration.500ms
            class="fixed top-5 right-5 bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-3 z-50">

            <span>{{ session('login_first') }}</span>

            <button @click="show = false" class="text-white font-bold">
                &times;
            </button>
        </div>
    @endif

    @livewire('navigationbar')
    {{ $slot }}

    <script>
        var toggleDropdown = document.getElementById('profile-dropdown-toggle');
        var dropdownMenu = document.getElementById('profile-dropdown-menu');

        function handleToggle(event) {
            dropdownMenu.classList.toggle('hidden');
        }

        // Add event listener for toggle button
        toggleDropdown.addEventListener('click', function(event) {
            event.stopPropagation();
            handleToggle(event);
        });

        // Hide dropdown on outside click
        document.addEventListener('click', function(event) {
            if (
                !dropdownMenu.classList.contains('hidden') &&
                !dropdownMenu.contains(event.target) &&
                event.target !== toggleDropdown
            ) {
                dropdownMenu.classList.add('hidden');
            }
        });

        // Ensure the dropdown is hidden on page load
        document.addEventListener("DOMContentLoaded", function() {
            dropdownMenu.classList.add('hidden');
        });
    </script>
    @livewireScripts
</body>

</html>
