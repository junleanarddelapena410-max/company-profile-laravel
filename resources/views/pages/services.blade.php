@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold text-indigo-400 text-center mb-10">Our Core Services</h1>

    <div class="grid md:grid-cols-3 gap-6">
        @php
            $services = [
                ['title' => 'Web Development', 'desc' => 'Custom full-stack web applications built using modern frameworks like Laravel.'],
                ['title' => 'Mobile Development', 'desc' => 'Cross-platform mobile application development for iOS and Android.'],
                ['title' => 'UI/UX Design', 'desc' => 'User-centric wireframing, prototyping, and complete graphic interface designs.'],
                ['title' => 'Cloud Solutions', 'desc' => 'Cloud infrastructure setup, deployment optimization, and server management.'],
                ['title' => 'Cybersecurity', 'desc' => 'Comprehensive security audits, vulnerability scanning, and data protection.'],
                ['title' => 'IT Consulting', 'desc' => 'Strategic technological planning and technical stack evaluation for business.']
            ];
        @endphp

        @foreach($services as $service)
            <div class="bg-slate-800 p-6 rounded-xl border border-slate-700 hover:border-indigo-500 transition">
                <h3 class="text-xl font-bold text-white mb-2">{{ $service['title'] }}</h3>
                <p class="text-slate-400 text-sm">{{ $service['desc'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection