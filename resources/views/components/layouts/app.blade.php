<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    
</head>

<body>
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
</body>

</html>
