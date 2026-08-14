@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Banner -->
<div class="bg-gradient-to-r from-indigo-900 to-slate-900 py-20 text-center px-4">
    <h1 class="text-5xl font-extrabold text-white mb-4">Innovating the Digital Future</h1>
    <p class="text-slate-300 text-lg max-w-2xl mx-auto mb-8">We deliver enterprise-grade software solutions engineered for scalability, efficiency, and growth.</p>
    <a href="{{ route('contact') }}" class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 px-6 rounded-lg transition duration-200">Get in Touch</a>
</div>

<!-- Introduction & Features -->
<div class="max-w-5xl mx-auto py-16 px-4">
    <h2 class="text-3xl font-bold mb-4 text-indigo-400">Welcome to TechCorp</h2>
    <p class="text-slate-300 leading-relaxed mb-12">TechCorp is a forward-thinking technology agency specializing in web applications, cloud architecture, and modern IT infrastructure. Our team works with startup founders and enterprise partners to solve complex technical challenges.</p>

    <!-- Why Choose Us Section -->
    <div class="border-t border-slate-800 pt-12">
        <h3 class="text-2xl font-bold text-indigo-400 mb-6">Why Choose Us</h3>
        <div class="grid md:grid-cols-3 gap-6 text-slate-300">
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700">
                <h4 class="font-bold text-white mb-2">Fast Delivery</h4>
                <p class="text-sm text-slate-400">We ship reliable products on tight deadlines without compromising code quality.</p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700">
                <h4 class="font-bold text-white mb-2">Modern Stack</h4>
                <p class="text-sm text-slate-400">Built using Laravel, Blade components, and modern CSS utilities.</p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700">
                <h4 class="font-bold text-white mb-2">24/7 Support</h4>
                <p class="text-sm text-slate-400">Continuous monitoring and server management for enterprise peace of mind.</p>
            </div>
        </div>
    </div>
</div>
@endsection