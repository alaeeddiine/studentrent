@extends('layouts.app')

@section('title', $property->title)

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Property Header -->
    <div class="mb-8 animate-on-scroll">
        <a href="{{ route('properties.index') }}" class="inline-flex items-center text-orange-600 hover:text-orange-800 font-medium transition-all duration-300 transform hover:-translate-x-1 mb-4 group">
            <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to listings
        </a>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 leading-tight">{{ $property->title }}</h1>
        <div class="flex items-center text-orange-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <p class="text-lg font-medium">{{ $property->location }}</p>
        </div>
        
        <!-- Price Badge -->
        <div class="mt-4">
            <span class="inline-flex items-center bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-3 rounded-full text-xl font-bold shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
                ${{ number_format($property->price, 0) }}/month
            </span>
        </div>
    </div>

    <!-- Property Image Gallery -->
    <div class="relative rounded-2xl overflow-hidden shadow-xl mb-8 group animate-on-scroll">
        @if($property->image)
            <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="w-full h-96 md:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
        @else
            <div class="w-full h-96 md:h-[500px] bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white relative">
                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <p class="text-xl font-semibold">Student Accommodation</p>
                </div>
            </div>
        @endif
        
        <!-- Image Overlay Badges -->
        <div class="absolute top-4 left-4 flex flex-col space-y-2">
            @if($property->featured)
            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                Featured
            </span>
            @endif
            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                Available Now
            </span>
        </div>
    </div>

    <!-- Property Details Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Key Features -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-orange-100 animate-on-scroll">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 pb-4 border-b border-orange-100 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Key Features
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="flex items-center space-x-4 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition-colors group">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-lg">{{ $property->bedrooms }}</p>
                            <p class="text-sm text-gray-600">Bedrooms</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition-colors group">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-lg">{{ $property->bathrooms }}</p>
                            <p class="text-sm text-gray-600">Bathrooms</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition-colors group">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-lg">{{ $property->capacity ?? 'N/A' }}</p>
                            <p class="text-sm text-gray-600">Capacity</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition-colors group">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-lg">{{ $property->type ?? 'Student Housing' }}</p>
                            <p class="text-sm text-gray-600">Property Type</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition-colors group">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-lg">{{ $property->available_from ? \Carbon\Carbon::parse($property->available_from)->format('M Y') : 'Now' }}</p>
                            <p class="text-sm text-gray-600">Available From</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4 p-4 bg-orange-50 rounded-xl hover:bg-orange-100 transition-colors group">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 text-lg">Verified</p>
                            <p class="text-sm text-gray-600">Property Status</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-orange-100 animate-on-scroll" style="animation-delay: 0.1s">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 pb-4 border-b border-orange-100 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                    </svg>
                    Property Description
                </h2>
                <div class="prose max-w-none text-gray-700 text-lg leading-relaxed">
                    {!! nl2br(e($property->description)) !!}
                </div>
            </div>

            <!-- Amenities -->
            @if($property->extras)
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-orange-100 animate-on-scroll" style="animation-delay: 0.2s">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 pb-4 border-b border-orange-100 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Amenities & Features
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach(explode(',', $property->extras) as $extra)
                    <div class="flex items-center p-3 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors group">
                        <svg class="w-5 h-5 text-green-500 mr-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">{{ trim($extra) }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Booking Form -->
            @auth
                @if (auth()->user()->role === 'student')
                <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-8 border border-orange-200 shadow-lg animate-on-scroll" style="animation-delay: 0.3s">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Schedule a Viewing</h2>
                    <p class="text-gray-600 mb-6">Book a tour to see this amazing student accommodation</p>
                    
                    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="property_id" value="{{ $property->id }}">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Full Name</label>
                                <input type="text" id="name" name="name" class="w-full border border-gray-300 bg-white rounded-xl px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 placeholder-gray-400 hover:border-orange-300" placeholder="John Doe" required>
                            </div>

                            <div>
                                <label for="contact" class="block text-sm font-medium text-gray-700 mb-2">Contact Info</label>
                                <input type="text" id="contact" name="contact" class="w-full border border-gray-300 bg-white rounded-xl px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 placeholder-gray-400 hover:border-orange-300" placeholder="Phone or Email" required>
                            </div>

                            <div class="md:col-span-2">
                                <label for="tour_date" class="block text-sm font-medium text-gray-700 mb-2">Preferred Tour Date</label>
                                <input type="date" id="tour_date" name="tour_date" class="w-full border border-gray-300 bg-white rounded-xl px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 hover:border-orange-300" required>
                            </div>
                            
                            <div class="md:col-span-2">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Additional Message (Optional)</label>
                                <textarea id="message" name="message" rows="3" class="w-full border border-gray-300 bg-white rounded-xl px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 placeholder-gray-400 hover:border-orange-300" placeholder="Any specific requirements or questions..."></textarea>
                            </div>
                        </div>

                        <button type="submit" class="group w-full md:w-auto bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 hover:shadow-xl transform hover:scale-105">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Book Your Viewing Tour
                            </span>
                        </button>
                    </form>
                </div>
                @endif
            @else
            <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-8 border border-orange-200 text-center animate-on-scroll" style="animation-delay: 0.3s">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Interested in this property?</h3>
                <p class="text-gray-600 mb-6">Sign in to schedule a viewing or contact the agent directly.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('login') }}" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:scale-105">
                        Sign In to Book
                    </a>
                    <a href="{{ route('register') }}" class="border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                        Create Account
                    </a>
                </div>
            </div>
            @endauth
        </div>

        <!-- Sidebar -->
        <div class="space-y-8">
            <!-- Contact Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100 top-6 animate-on-scroll" style="animation-delay: 0.4s">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg">Property Agent</h3>
                    <p class="text-gray-600">{{ $property->user->name ?? explode('@', $property->user->email)[0] }}</p>
                </div>
                
                <div class="space-y-3">
                    <a href="mailto:{{ $property->user->email }}" class="flex items-center justify-center w-full bg-orange-50 hover:bg-orange-100 text-orange-700 py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-md group">
                        <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Email Agent
                    </a>
                    <button class="flex items-center justify-center w-full bg-orange-500 hover:bg-orange-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg transform hover:scale-105 group">
                        <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call Agent
                    </button>
                </div>
                
                <!-- Quick Info -->
                <div class="mt-6 pt-6 border-t border-orange-100">
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <p class="text-2xl font-bold text-orange-600">24h</p>
                            <p class="text-xs text-gray-600">Response Time</p>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-orange-600">50+</p>
                            <p class="text-xs text-gray-600">Properties</p>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Share Options -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100 animate-on-scroll" style="animation-delay: 0.5s">
                <h3 class="font-bold text-gray-900 mb-4 text-lg flex items-center">
                    <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                    </svg>
                    Share this property
                </h3>
                <div class="flex justify-center space-x-3">
                    <a href="#" class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center hover:bg-blue-200 transition-all duration-300 hover:scale-110 shadow-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-12 h-12 bg-blue-100 text-blue-400 rounded-xl flex items-center justify-center hover:bg-blue-200 transition-all duration-300 hover:scale-110 shadow-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.016 10.016 0 01-3.127 1.195 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-12 h-12 bg-red-100 text-red-500 rounded-xl flex items-center justify-center hover:bg-red-200 transition-all duration-300 hover:scale-110 shadow-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.042-3.441.219-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.017 12.014 0 12.017 0z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-12 h-12 bg-blue-100 text-blue-700 rounded-xl flex items-center justify-center hover:bg-blue-200 transition-all duration-300 hover:scale-110 shadow-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Safety Tips -->
            <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-2xl p-6 shadow-lg animate-on-scroll" style="animation-delay: 0.6s">
                <h3 class="font-bold text-lg mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    Safety Tips
                </h3>
                <ul class="text-sm space-y-2 text-orange-100">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Always meet in public places first
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Verify property ownership
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Never wire money in advance
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Back to Listings -->
    <div class="flex justify-center animate-on-scroll" style="animation-delay: 0.7s">
        <a href="{{ route('properties.index') }}" class="inline-flex items-center bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 hover:shadow-xl transform hover:scale-105 group">
            <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Browse More Student Properties
        </a>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll animations
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

        // Observe all animate-on-scroll elements
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Form validation enhancement
        const bookingForm = document.querySelector('form');
        if (bookingForm) {
            const inputs = bookingForm.querySelectorAll('input, textarea');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-orange-200', 'rounded-xl');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-orange-200', 'rounded-xl');
                });
            });
        }

        // Add today's date as min date for tour date
        const tourDateInput = document.getElementById('tour_date');
        if (tourDateInput) {
            const today = new Date().toISOString().split('T')[0];
            tourDateInput.min = today;
        }
    });
</script>

<style>
    .sticky {
        position: sticky;
    }
    
    .prose {
        line-height: 1.75;
    }
    
    .prose p {
        margin-bottom: 1rem;
    }
    
    .group:hover .group-hover\:scale-105 {
        transform: scale(1.05);
    }
    
    .group:hover .group-hover\:-translate-x-1 {
        transform: translateX(-0.25rem);
    }
</style>
@endsection