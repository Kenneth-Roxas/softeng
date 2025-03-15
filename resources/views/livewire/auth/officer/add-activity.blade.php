<div>
    {{-- The whole world belongs to you. --}}
    

    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg mt-3 shadow-lg border border-gray-300">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Side: Information Section -->
            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 text-white p-6 rounded-lg flex flex-col justify-center shadow-lg">
                <p class="text-lg leading-relaxed">
                    As an SK Officer, your role in keeping the youth informed and engaged is vital. Use this platform to share updates on programs, events, and initiatives that benefit our community. Let’s work together to create a more connected and empowered youth! Keep them informed, inspired, and involved!
                </p>
            </div>
            
            <!-- Right Side: Form Section -->
            <form class="space-y-4 flex flex-col w-full bg-white p-4 rounded-lg shadow-md border border-gray-300">
                <h1 class="text-xl font-bold text-gray-800 mb-2">{{ $pangalan }} Update The Youth!</h1>
                <div class="flex items-center space-x-3">
                    <img src="https://via.placeholder.com/50" class="w-12 h-12 rounded-full" alt="User Profile">
                    <input type="text" placeholder="SK Activity Title..." class="w-full p-3 border border-gray-300 rounded-full focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
                </div>
                <textarea placeholder="Share details about the latest SK activities..." rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm"></textarea>
                <label class="block w-full cursor-pointer bg-gray-100 text-gray-600 text-center py-3 rounded-lg border border-gray-300 hover:bg-gray-200 shadow-sm transition duration-200 flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 01-2.828 0L3 10.828m12-6.828v6a2 2 0 002 2h6" />
                    </svg>
                    <span class="font-semibold">Add Photo/Video</span>
                    <input type="file" class="hidden">
                </label>
                <button class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-3 rounded-lg font-bold text-lg hover:opacity-90 transition duration-200 shadow-md">Post</button>
            </form>
        </div>
    </div>
</div>
