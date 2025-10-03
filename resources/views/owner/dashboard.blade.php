@extends('layouts.app')

@section('title', 'Owner Dashboard - StudentRent')

@section('content')
<!-- Main Container -->
<div class="min-h-screen bg-gradient-to-br from-orange-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Dashboard Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12 gap-6 animate-on-scroll">
            <div class="flex-1">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-1">Welcome Back, {{ Auth::user()->name }}!</h1>
                        <p class="text-gray-600">Manage your student rental properties and bookings</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-2 rounded-full text-sm font-medium shadow-lg">
                    Property Owner
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

        <!-- Property Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Total Properties Card -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Total Properties</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $totalProperties }}</p>
                    <p class="text-sm text-gray-500">Properties listed on platform</p>
                </div>
                <a href="{{ route('owner.properties.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm group-hover:translate-x-1 transition-transform">
                    View all properties
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Active Bookings Card -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" style="animation-delay: 0.1s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Active Bookings</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $activeBookings }}</p>
                    <p class="text-sm text-gray-500">Upcoming property viewings</p>
                </div>
                <a href="{{ route('owner.bookings') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-medium text-sm group-hover:translate-x-1 transition-transform">
                    Manage bookings
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Occupancy Rate Card -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" style="animation-delay: 0.2s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Occupancy Rate</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $occupancyRate }}%</p>
                    <p class="text-sm text-gray-500">Current property occupancy</p>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: {{ $occupancyRate }}%"></div>
                </div>
                <a href="#" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium text-sm group-hover:translate-x-1 transition-transform">
                    View analytics
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="bg-white rounded-3xl shadow-lg p-8 border border-orange-100 mb-12 animate-on-scroll" style="animation-delay: 0.3s">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Quick Actions</h2>
                <div class="text-sm text-gray-500">Manage your properties efficiently</div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Add Property -->
                <a href="{{ route('owner.properties.create') }}" class="group bg-gradient-to-br from-white to-orange-50 p-6 rounded-2xl border border-orange-100 hover:border-orange-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg mb-2">Add Property</h3>
                            <p class="text-gray-600 text-sm">List a new student rental property</p>
                        </div>
                    </div>
                    <div class="flex items-center text-green-600 font-medium text-sm group-hover:translate-x-1 transition-transform">
                        Get started
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </div>
                </a>

                <!-- Manage Properties -->
                <a href="{{ route('owner.properties.index') }}" class="group bg-gradient-to-br from-white to-orange-50 p-6 rounded-2xl border border-orange-100 hover:border-orange-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg mb-2">Manage Properties</h3>
                            <p class="text-gray-600 text-sm">Update and manage your listings</p>
                        </div>
                    </div>
                    <div class="flex items-center text-blue-600 font-medium text-sm group-hover:translate-x-1 transition-transform">
                        View all
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </div>
                </a>

                <!-- View Bookings -->
                <a href="{{ route('owner.bookings') }}" class="group bg-gradient-to-br from-white to-orange-50 p-6 rounded-2xl border border-orange-100 hover:border-orange-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 text-lg mb-2">View Bookings</h3>
                            <p class="text-gray-600 text-sm">Manage tour requests and schedules</p>
                        </div>
                    </div>
                    <div class="flex items-center text-purple-600 font-medium text-sm group-hover:translate-x-1 transition-transform">
                        Check schedules
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activity & Performance -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Recent Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-8 border border-orange-100 animate-on-scroll" style="animation-delay: 0.4s">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Recent Bookings</h3>
                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">
                        {{ $activeBookings }} New
                    </span>
                </div>
                <div class="space-y-4">
                    @foreach($recentBookings as $booking)
                    <div class="flex items-center p-4 bg-orange-50 rounded-xl border border-orange-200 group hover:bg-orange-100 transition-colors">
                        <div class="w-10 h-10 bg-orange-500 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">{{ $booking->name }}</h4>
                            <p class="text-sm text-gray-600">{{ $booking->property_id }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">{{ $booking->tour_date }}</p>
                            <p class="text-xs text-gray-500">{{ $booking->status }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('owner.bookings') }}" class="mt-6 inline-flex items-center text-orange-600 hover:text-orange-700 font-medium text-sm">
                    View all bookings
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Performance Metrics -->
            <div class="bg-white rounded-3xl shadow-lg p-8 border border-orange-100 animate-on-scroll" style="animation-delay: 0.5s">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Performance Overview</h3>
                <div class="space-y-6">
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-orange-50 to-white rounded-xl border border-orange-200">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Response Rate</h4>
                                <p class="text-sm text-gray-600">Booking inquiries</p>
                            </div>
                        </div>
                        <span class="text-2xl font-bold text-green-600">98%</span>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-orange-50 to-white rounded-xl border border-orange-200">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Avg. Rating</h4>
                                <p class="text-sm text-gray-600">Property reviews</p>
                            </div>
                        </div>
                        <span class="text-2xl font-bold text-blue-600">4.8</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Section -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-3xl p-8 text-white animate-on-scroll" style="animation-delay: 0.6s">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Need Help with Your Properties?</h3>
                    <p class="text-orange-100 mb-6">Our support team is here to help you manage your properties and maximize your rental income.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-white text-orange-600 px-6 py-3 rounded-xl font-semibold hover:bg-orange-50 transition-colors text-center">
                            Contact Support
                        </a>
                        <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:text-orange-600 transition-colors text-center">
                            View Guides
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