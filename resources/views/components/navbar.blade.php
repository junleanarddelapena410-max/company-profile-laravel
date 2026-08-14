<nav class="bg-slate-900 text-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-400">TechCorp</a>
            </div>
            <div class="flex space-x-6">
                <a href="{{ route('home') }}" class="hover:text-indigo-400 font-medium">Home</a>
                <a href="{{ route('about') }}" class="hover:text-indigo-400 font-medium">About</a>
                <a href="{{ route('services') }}" class="hover:text-indigo-400 font-medium">Services</a>
                <a href="{{ route('contact') }}" class="hover:text-indigo-400 font-medium">Contact</a>
            </div>
        </div>
    </div>
</nav>