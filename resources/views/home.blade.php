@extends('layouts.app')

@section('title', 'StudentRent - Find Your Perfect Student Accommodation')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-20 h-20 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-bounce"></div>
            <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-80 animate-ping"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="slide-up">
                    <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-sm font-medium">Trusted by 10,000+ Students</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Find Your Perfect
                        <span class="text-orange-200 block">Student Home</span>
                    </h1>
                    
                    <p class="text-xl mb-8 text-orange-100 leading-relaxed">
                        StudentRent is your trusted platform for finding safe, affordable, and comfortable student accommodations. 
                        We connect students with verified properties near campuses across the country.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="{{ route('properties.index') }}" 
                           class="group bg-white text-orange-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-orange-50 transition-all duration-300 transform hover:scale-105 text-center shadow-lg">
                            <span class="flex items-center justify-center">
                                Browse Properties
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="#how-it-works" 
                           class="group border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 text-center">
                            How It Works
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-orange-400/30">
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="5000">0</div>
                            <div class="text-orange-200 text-sm">Properties Listed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="10000">0</div>
                            <div class="text-orange-200 text-sm">Happy Students</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="50">0</div>
                            <div class="text-orange-200 text-sm">Cities Covered</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Content - Real 3D House Image -->
                <div class="relative">
                    <div class="floating-3d-container">
                        <!-- Main 3D House Image with Floating Animation -->
                        <div class="floating-3d-house">
                            <img 
                                src="https://i.pinimg.com/originals/99/67/7e/99677e773ece281a9c34dad009013897.jpg" 
                                alt="Modern Student House"
                                class="w-full h-full object-cover rounded-2xl shadow-2xl house-image-3d"
                            >
                            <!-- 3D Reflection Effect -->
                            <div class="absolute inset-0 bg-gradient-to-t from-orange-500/20 to-transparent rounded-2xl pointer-events-none"></div>
                        </div>
                        
                        <!-- Floating Decorative Elements -->
                        <div class="absolute -top-6 -right-6 w-20 h-20 bg-white/20 rounded-full backdrop-blur-sm floating-element-1 z-20">
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="absolute -bottom-8 -left-8 w-24 h-24 bg-orange-300/30 rounded-full backdrop-blur-sm floating-element-2 z-20">
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="absolute top-1/2 -right-10 w-16 h-16 bg-white/10 rounded-2xl rotate-12 floating-element-3 z-20">
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Student Badge Floating -->
                        <div class="absolute -top-4 left-1/4 bg-white text-orange-600 px-4 py-2 rounded-full font-semibold text-sm shadow-lg floating-badge z-30">
                            🎓 Student Favorite
                        </div>

                        <!-- Price Tag Floating -->
                        <div class="absolute bottom-6 right-6 bg-green-500 text-white px-3 py-2 rounded-lg font-bold text-sm shadow-lg floating-price z-30">
                            $650/mo
                        </div>
                    </div>
                    
                    <!-- Background Glow Effect -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-orange-400/20 rounded-full blur-3xl -z-10 house-glow"></div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Why Choose StudentRent Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 right-20 w-40 h-40 bg-orange-500 rounded-full"></div>
            <div class="absolute bottom-20 left-20 w-32 h-32 bg-orange-400 rounded-full"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                    Why Choose <span class="text-orange-500">StudentRent</span>?
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We understand the unique needs of students when it comes to finding the perfect home away from home.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card group text-center p-8 rounded-2xl bg-gradient-to-b from-white to-orange-50 border border-orange-100 hover:border-orange-300 transition-all duration-500 animate-on-scroll">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-orange-600 transition-colors">Verified Properties</h3>
                    <p class="text-gray-600 leading-relaxed">Every property undergoes thorough verification to ensure safety, quality, and accurate listings.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card group text-center p-8 rounded-2xl bg-gradient-to-b from-white to-orange-50 border border-orange-100 hover:border-orange-300 transition-all duration-500 animate-on-scroll" style="animation-delay: 0.1s">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-orange-600 transition-colors">Student Budget Friendly</h3>
                    <p class="text-gray-600 leading-relaxed">Find accommodations that perfectly fit your budget without compromising on quality or location.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card group text-center p-8 rounded-2xl bg-gradient-to-b from-white to-orange-50 border border-orange-100 hover:border-orange-300 transition-all duration-500 animate-on-scroll" style="animation-delay: 0.2s">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-orange-600 transition-colors">Prime Locations</h3>
                    <p class="text-gray-600 leading-relaxed">Properties strategically located near campuses, public transport, and essential amenities.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-card group text-center p-8 rounded-2xl bg-gradient-to-b from-white to-orange-50 border border-orange-100 hover:border-orange-300 transition-all duration-500 animate-on-scroll" style="animation-delay: 0.3s">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-orange-600 transition-colors">24/7 Support</h3>
                    <p class="text-gray-600 leading-relaxed">Round-the-clock customer support to assist you with any queries or issues.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Properties Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-orange-200 rounded-full -translate-y-32 translate-x-32 opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-orange-300 rounded-full translate-y-24 -translate-x-24 opacity-30"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                    Recent <span class="text-orange-500">Properties</span>
                </h2>
                <p class="text-xl text-gray-600">Freshly listed accommodations waiting for you</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($recentProperties as $property)
                <div class="property-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 animate-on-scroll" style="animation-delay: {{ $loop->index * 0.1 }}s">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold shadow-lg">
                            {{ $property['price'] }}MAD/month
                        </div>
                        @if($property['featured'])
                        <div class="absolute top-4 left-4 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Featured
                        </div>
                        @endif
                        <div class="absolute bottom-4 left-4 bg-black/50 text-white px-2 py-1 rounded text-xs">
                            {{ $property['distance'] }}
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $property['title'] }}</h3>
                            <span class="flex items-center text-sm text-gray-600 bg-orange-50 px-2 py-1 rounded">
                                <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                {{ $property['rating'] }}
                            </span>
                        </div>
                        
                        <p class="text-gray-600 mb-4 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ $property['location'] }}
                        </p>
                        
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-6">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                {{ $property['type'] }}
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                                {{ $property['bedrooms'] }} bed
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Available Now
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <a href="{{ route('properties.show', $property['id']) }}" 
                               class="flex-1 bg-orange-500 text-white text-center py-3 rounded-lg font-semibold hover:bg-orange-600 transition-colors transform hover:scale-105 duration-300 mr-3 shadow-md">
                                View Details
                            </a>
                            <button class="p-3 border border-gray-300 rounded-lg hover:border-orange-500 hover:bg-orange-500 hover:text-white transition-all duration-300 group">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center animate-on-scroll">
                <a href="{{ route('properties.index') }}" 
                   class="inline-flex items-center bg-orange-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    View All Properties
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50 to-white"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                    How It <span class="text-orange-500">Works</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Simple steps to find and rent your perfect student accommodation
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="step-card group text-center p-8 rounded-2xl bg-white border border-orange-100 hover:border-orange-300 transition-all duration-500 animate-on-scroll relative">
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                        1
                    </div>
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-orange-600 transition-colors">Look Studio</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Browse through our extensive collection of verified student accommodations. Filter by location, price, amenities, and more to find your perfect match.
                    </p>
                    <div class="text-orange-500 font-semibold">Browse 5000+ Properties</div>
                </div>
                
                <!-- Step 2 -->
                <div class="step-card group text-center p-8 rounded-2xl bg-white border border-orange-100 hover:border-orange-300 transition-all duration-500 animate-on-scroll relative" style="animation-delay: 0.2s">
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                        2
                    </div>
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-orange-600 transition-colors">Book a Tour</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Schedule a virtual or in-person tour of your shortlisted properties. Our platform makes it easy to coordinate viewings at your convenience.
                    </p>
                    <div class="text-orange-500 font-semibold">Virtual & In-Person Tours</div>
                </div>
                
                <!-- Step 3 -->
                <div class="step-card group text-center p-8 rounded-2xl bg-white border border-orange-100 hover:border-orange-300 transition-all duration-500 animate-on-scroll relative" style="animation-delay: 0.4s">
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold shadow-lg">
                        3
                    </div>
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-orange-600 transition-colors">Rent Your Dream Studio</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Finalize your choice and complete the secure booking process. Sign digital contracts and make payments safely through our platform.
                    </p>
                    <div class="text-orange-500 font-semibold">Secure & Easy Booking</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-orange-500 to-orange-600 text-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-10 right-10 w-32 h-32 bg-white/10 rounded-full"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-white/5 rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-white/5 rounded-full"></div>
        </div>
        
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Ready to Find Your New Home?
            </h2>
            <p class="text-xl mb-8 text-orange-100 max-w-2xl mx-auto">
                Join thousands of students who found their perfect accommodation through StudentRent. Start your journey today!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('properties.index') }}" 
                   class="bg-white text-orange-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-orange-50 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Start Searching Now
                </a>
                <a href="{{ route('contact') }}" 
                   class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300">
                    Get Personal Assistance
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Counter animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200;
        
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            
            // Start counter when element is in viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            });
            
            observer.observe(counter);
        });

        // Enhanced scroll animations
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

        // Enhanced feature cards animation
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Counter animation
                        const counters = document.querySelectorAll('.counter');
                        const speed = 200;
                        
                        counters.forEach(counter => {
                            const updateCount = () => {
                                const target = +counter.getAttribute('data-target');
                                const count = +counter.innerText;
                                const increment = target / speed;
                                
                                if (count < target) {
                                    counter.innerText = Math.ceil(count + increment);
                                    setTimeout(updateCount, 1);
                                } else {
                                    counter.innerText = target;
                                }
                            };
                            
                            // Start counter when element is in viewport
                            const observer = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        updateCount();
                                        observer.unobserve(entry.target);
                                    }
                                });
                            });
                            
                            observer.observe(counter);
                        });

                        // Enhanced scroll animations
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

                        // Enhanced feature cards animation
                        document.querySelectorAll('.feature-card').forEach(card => {
                            card.addEventListener('mouseenter', function() {
                                this.style.transform = 'translateY(-10px)';
                            });
                            
                            card.addEventListener('mouseleave', function() {
                                this.style.transform = 'translateY(0)';
                            });
                        });

                        // 3D House mouse interaction
                        const house3d = document.querySelector('.floating-3d-house');
                        if (house3d) {
                            house3d.addEventListener('mousemove', (e) => {
                                const { left, top, width, height } = house3d.getBoundingClientRect();
                                const x = (e.clientX - left) / width - 0.5;
                                const y = (e.clientY - top) / height - 0.5;
                                
                                house3d.style.transform = `
                                    translateY(-20px)
                                    rotateY(${x * 10}deg)
                                    rotateX(${-y * 10}deg)
                                    scale3d(1.05, 1.05, 1.05)
                                `;
                            });

                            house3d.addEventListener('mouseleave', () => {
                                house3d.style.transform = 'translateY(-20px) rotateY(0deg) rotateX(0deg) scale3d(1, 1, 1)';
                            });
                        }
                    });
                </script>

                <style>
                    .floating-3d-container {
                        position: relative;
                        width: 100%;
                        max-width: 500px;
                        margin: 0 auto;
                        perspective: 1000px;
                    }

                    .floating-3d-house {
                        position: relative;
                        width: 100%;
                        height: 400px;
                        transform-style: preserve-3d;
                        animation: float3d 6s ease-in-out infinite;
                        transition: transform 0.3s ease;
                    }

                    @keyframes float3d {
                        0%, 100% { 
                            transform: translateY(0px) rotateY(0deg) rotateX(0deg); 
                        }
                        25% { 
                            transform: translateY(-15px) rotateY(2deg) rotateX(1deg); 
                        }
                        50% { 
                            transform: translateY(-25px) rotateY(0deg) rotateX(2deg); 
                        }
                        75% { 
                            transform: translateY(-15px) rotateY(-2deg) rotateX(1deg); 
                        }
                    }

                    .house-image-3d {
                        border-radius: 20px;
                        box-shadow: 
                            0 25px 50px -12px rgba(0, 0, 0, 0.5),
                            0 0 0 1px rgba(255, 255, 255, 0.1),
                            0 0 50px rgba(255, 107, 53, 0.3);
                        transform: translateZ(20px);
                        transition: all 0.3s ease;
                    }

                    .floating-element-1 {
                        animation: floatElement1 4s ease-in-out infinite;
                    }

                    .floating-element-2 {
                        animation: floatElement2 5s ease-in-out infinite;
                    }

                    .floating-element-3 {
                        animation: floatElement3 3.5s ease-in-out infinite;
                    }

                    .floating-badge {
                        animation: floatBadge 4s ease-in-out infinite;
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                    }

                    .floating-price {
                        animation: floatPrice 3s ease-in-out infinite;
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                    }

                    @keyframes floatElement1 {
                        0%, 100% { transform: translateY(0px) rotate(0deg); }
                        50% { transform: translateY(-15px) rotate(5deg); }
                    }

                    @keyframes floatElement2 {
                        0%, 100% { transform: translateY(0px) scale(1); }
                        50% { transform: translateY(-20px) scale(1.1); }
                    }

                    @keyframes floatElement3 {
                        0%, 100% { transform: translateY(0px) rotate(12deg); }
                        50% { transform: translateY(-10px) rotate(17deg); }
                    }

                    @keyframes floatBadge {
                        0%, 100% { transform: translateY(0px) translateX(0px); }
                        33% { transform: translateY(-8px) translateX(5px); }
                        66% { transform: translateY(-5px) translateX(-3px); }
                    }

                    @keyframes floatPrice {
                        0%, 100% { transform: translateY(0px) scale(1); }
                        50% { transform: translateY(-10px) scale(1.05); }
                    }

                    .house-glow {
                        animation: glowPulse 4s ease-in-out infinite;
                    }

                    @keyframes glowPulse {
                        0%, 100% { opacity: 0.3; transform: translate(-50%, -50%) scale(1); }
                        50% { opacity: 0.5; transform: translate(-50%, -50%) scale(1.1); }
                    }

                    /* Enhanced 3D effects on hover */
                    .floating-3d-house:hover .house-image-3d {
                        transform: translateZ(30px);
                        box-shadow: 
                            0 35px 60px -12px rgba(0, 0, 0, 0.6),
                            0 0 0 1px rgba(255, 255, 255, 0.2),
                            0 0 80px rgba(255, 107, 53, 0.5);
                    }

                    /* Mobile responsiveness */
                    @media (max-width: 768px) {
                        .floating-3d-house {
                            height: 300px;
                            margin-top: 2rem;
                        }
                        
                        .floating-element-1,
                        .floating-element-2,
                        .floating-element-3 {
                            transform: scale(0.8);
                        }
                        
                        .floating-badge,
                        .floating-price {
                            transform: scale(0.9);
                        }
                    }

                    /* Smooth scrolling for anchor links */
                    html {
                        scroll-behavior: smooth;
                    }

                    .feature-card:hover {
                        transform: translateY(-10px);
                        box-shadow: 0 20px 40px rgba(255, 107, 53, 0.15);
                    }
                    
                    .step-card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 15px 30px rgba(255, 107, 53, 0.1);
                    }
                    
                    .property-card:hover {
                        transform: translateY(-8px);
                    }
                </style>
<style>
    .floating-3d {
        animation: float3d 6s ease-in-out infinite;
        transform-style: preserve-3d;
        perspective: 1000px;
    }
    
    @keyframes float3d {
        0%, 100% { 
            transform: translateY(0px) rotateY(0deg); 
        }
        50% { 
            transform: translateY(-20px) rotateY(5deg); 
        }
    }
    
    .floating {
        animation: float 3s ease-in-out infinite;
    }
    
    .floating-delayed {
        animation: float 3s ease-in-out infinite;
        animation-delay: 1s;
    }
    
    .floating-slow {
        animation: float 4s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { 
            transform: translateY(0px); 
        }
        50% { 
            transform: translateY(-10px); 
        }
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(255, 107, 53, 0.15);
    }
    
    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(255, 107, 53, 0.1);
    }
    
    .property-card:hover {
        transform: translateY(-8px);
    }
    
    /* Smooth scrolling for anchor links */
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection