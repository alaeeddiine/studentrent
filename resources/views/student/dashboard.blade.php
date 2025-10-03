@extends('layouts.app')

@section('title', 'Student Dashboard - StudentRent')

@section('content')
<!-- Main Container -->
<div class="min-h-screen bg-gradient-to-br from-orange-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Welcome Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12 gap-6 animate-on-scroll">
            <div class="flex-1">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-1">Welcome back, {{ Auth::user()->name }}!</h1>
                        <p class="text-gray-600">Your personalized student housing dashboard</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-3 rounded-full text-sm font-medium shadow-lg">
                    Student Account
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center text-gray-600 hover:text-orange-600 transition-all duration-300 group">
                        <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Dashboard Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Upcoming Tours -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Upcoming Tours</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $upcomingTours }}</p>
                    <p class="text-sm text-gray-500">Scheduled property viewings</p>
                </div>
                <a href="{{ route('student.bookings') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm group-hover:translate-x-1 transition-transform">
                    View all tours
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Application Status -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" style="animation-delay: 0.1s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Applications</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $activeApplications }}</p>
                    <p class="text-sm text-gray-500">Active applications</p>
                </div>
                <a href="{{ route('student.bookings') }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium text-sm group-hover:translate-x-1 transition-transform">
                    View status
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Saved Properties -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" style="animation-delay: 0.2s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Saved Properties</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $savedProperties ?? 0 }}</p>
                    <p class="text-sm text-gray-500">Properties you've saved</p>
                </div>
                <a href="{{ route('student.favorites') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium text-sm group-hover:translate-x-1 transition-transform">
                    View favorites
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-3xl shadow-lg p-8 border border-orange-100 mb-12 animate-on-scroll" style="animation-delay: 0.3s">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Quick Actions</h2>
                <div class="text-sm text-gray-500">Get started quickly</div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Find Housing -->
                <a href="{{ route('properties.index') }}" class="group bg-gradient-to-br from-white to-orange-50 p-6 rounded-2xl border border-orange-100 hover:border-orange-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg mb-2">Find Housing</h3>
                            <p class="text-gray-600 text-sm">Browse available student properties</p>
                        </div>
                    </div>
                    <div class="flex items-center text-blue-600 font-medium text-sm group-hover:translate-x-1 transition-transform">
                        Start searching
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </div>
                </a>

                <!-- My Bookings -->
                <a href="{{ route('student.bookings') }}" class="group bg-gradient-to-br from-white to-orange-50 p-6 rounded-2xl border border-orange-100 hover:border-orange-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg mb-2">My Bookings</h3>
                            <p class="text-gray-600 text-sm">Manage your property tours</p>
                        </div>
                    </div>
                    <div class="flex items-center text-purple-600 font-medium text-sm group-hover:translate-x-1 transition-transform">
                        View schedules
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </div>
                </a>

                <!-- My Applications -->
                <a href="{{ route('student.bookings') }}" class="group bg-gradient-to-br from-white to-orange-50 p-6 rounded-2xl border border-orange-100 hover:border-orange-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg mb-2">My Applications</h3>
                            <p class="text-gray-600 text-sm">Track your rental applications</p>
                        </div>
                    </div>
                    <div class="flex items-center text-green-600 font-medium text-sm group-hover:translate-x-1 transition-transform">
                        Check status
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activity & Upcoming Tours -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Upcoming Tours -->
            <div class="bg-white rounded-3xl shadow-lg p-8 border border-orange-100 animate-on-scroll" style="animation-delay: 0.4s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Upcoming Tours</h3>
                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">
                        {{ $upcomingTours }} Scheduled
                    </span>
                </div>
                <div class="space-y-4">
                    @if($upcomingTours > 0)
                        <!-- Sample Tour Items -->
                        <div class="flex items-center p-4 bg-orange-50 rounded-2xl border border-orange-200 group hover:bg-orange-100 transition-colors">
                            <div class="w-10 h-10 bg-orange-500 rounded-2xl flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">Modern Campus Apartment</h4>
                                <p class="text-sm text-gray-600">Tomorrow at 2:00 PM</p>
                            </div>
                            <div class="text-right">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">
                                    Confirmed
                                </span>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <div class="mx-auto w-16 h-16 bg-orange-100 text-orange-600 rounded-3xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Upcoming Tours</h4>
                            <p class="text-gray-500 text-sm mb-4">Schedule your first property tour</p>
                            <a href="{{ route('properties.index') }}" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-medium text-sm">
                                Browse properties
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    @endif
                </div>
                <a href="{{ route('student.bookings') }}" class="mt-6 inline-flex items-center text-orange-600 hover:text-orange-700 font-medium text-sm">
                    View all bookings
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Application Status -->
            <div class="bg-white rounded-3xl shadow-lg p-8 border border-orange-100 animate-on-scroll" style="animation-delay: 0.5s">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Application Status</h3>
                <div class="space-y-6">
                    @if($activeApplications > 0)
                        <!-- Sample Application Items -->
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-white rounded-2xl border border-green-200">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-100 rounded-2xl flex items-center justify-center mr-4">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Cozy Studio Suite</h4>
                                    <p class="text-sm text-gray-600">Under review</p>
                                </div>
                            </div>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-medium">
                                Pending
                            </span>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <div class="mx-auto w-16 h-16 bg-green-100 text-green-600 rounded-3xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Active Applications</h4>
                            <p class="text-gray-500 text-sm mb-4">Start applying to properties today</p>
                            <a href="{{ route('properties.index') }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium text-sm">
                                Find properties
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    @endif
                </div>
                <a href="{{ route('student.bookings') }}" class="mt-6 inline-flex items-center text-green-600 hover:text-green-700 font-medium text-sm">
                    View all applications
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Support Section -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-3xl p-8 text-white animate-on-scroll" style="animation-delay: 0.6s">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Need Help Finding Housing?</h3>
                    <p class="text-orange-100 mb-6">Our student support team is here to help you find the perfect accommodation for your needs and budget.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-white text-orange-600 px-6 py-3 rounded-xl font-semibold hover:bg-orange-50 transition-colors text-center">
                            Contact Support
                        </a>
                        <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:text-orange-600 transition-colors text-center">
                            View FAQ
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-32 h-32 bg-white bg-opacity-20 rounded-3xl flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Enhanced animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Add hover effects for cards
        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>

<style>
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .group {
        transition: all 0.3s ease;
    }
</style>
@endsection