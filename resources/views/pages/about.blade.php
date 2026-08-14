@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4 space-y-12">
    <section>
        <h1 class="text-4xl font-bold text-indigo-400 mb-4">Our History</h1>
        <p class="text-slate-300 leading-relaxed">Founded in 2024, TechCorp started as a team of three passionate engineers. Over the past few years, we have expanded into a full-service software agency serving global clients.</p>
    </section>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-slate-800 p-6 rounded-xl border border-slate-700">
            <h2 class="text-2xl font-bold text-white mb-2">Our Mission</h2>
            <p class="text-slate-300">To empower organizations through reliable, robust, and scalable modern web solutions.</p>
        </div>
        <div class="bg-slate-800 p-6 rounded-xl border border-slate-700">
            <h2 class="text-2xl font-bold text-white mb-2">Our Vision</h2>
            <p class="text-slate-300">To become a recognized leader in software development through architectural excellence and modern design.</p>
        </div>
    </div>
</div>
@endsection