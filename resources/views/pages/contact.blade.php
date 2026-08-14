@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold text-indigo-400 mb-8">Contact Us</h1>

    <div class="grid md:grid-cols-2 gap-8">
        <form class="space-y-4 bg-slate-800 p-6 rounded-xl border border-slate-700">
            <div>
                <label class="block text-sm font-medium mb-1">Name</label>
                <input type="text" class="w-full bg-slate-900 border border-slate-700 rounded p-2 text-white" placeholder="Your Name">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" class="w-full bg-slate-900 border border-slate-700 rounded p-2 text-white" placeholder="your@email.com">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Message</label>
                <textarea class="w-full bg-slate-900 border border-slate-700 rounded p-2 text-white h-28" placeholder="How can we help?"></textarea>
            </div>
            <button type="button" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 rounded">Send Message</button>
        </form>

        <div class="space-y-4 text-slate-300">
            <h2 class="text-2xl font-bold text-white">Get in Touch</h2>
            <p><strong>Address:</strong> TechCorp Plaza, Suite 400, Innovation City</p>
            <p><strong>Email:</strong> contact@techcorp.com</p>
            <p><strong>Phone:</strong> +1 (555) 019-2834</p>
        </div>
    </div>
</div>
@endsection