@extends('layouts.app')

@section('title', 'Browse Properties - StudentRent')

@section('content')
    <!-- Properties Header -->
    <section class="relative bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-20 h-20 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-24 h-24 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-bounce"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 slide-up">Find Your Perfect Student Home</h1>
                <p class="text-xl text-orange-100 max-w-2xl mx-auto slide-up">
                    Browse through our curated selection of student-friendly accommodations
                </p>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-8 mt-12 max-w-2xl mx-auto">
                    <div class="text-center">
                        <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="{{ count($properties) }}">0</div>
                        <div class="text-orange-200 text-sm">Properties Available</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="50">0</div>
                        <div class="text-orange-200 text-sm">Cities Covered</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="24">0</div>
                        <div class="text-orange-200 text-sm">Hours Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Search and Filters -->
    <section class="py-8 bg-white shadow-lg relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-white to-orange-50 rounded-2xl p-6 shadow-xl border border-orange-100 animate-on-scroll">
                <!-- Main Search Form -->
                <form class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="group">
                        <label class="block text-sm font-medium text-gray-700 mb-2">📍 Location</label>
                        <div class="relative">
                            <input type="text" 
                                   placeholder="Enter location or university..." 
                                   class="w-full px-4 pl-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="group">
                        <label class="block text-sm font-medium text-gray-700 mb-2">💰 Price Range</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400 appearance-none bg-white">
                            <option>Any Price</option>
                            <option value="0-500">$0 - $500</option>
                            <option value="500-1000">$500 - $1000</option>
                            <option value="1000-1500">$1000 - $1500</option>
                            <option value="1500+">$1500+</option>
                        </select>
                    </div>
                    
                    <div class="group">
                        <label class="block text-sm font-medium text-gray-700 mb-2">🏠 Property Type</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400 appearance-none bg-white">
                            <option>Any Type</option>
                            <option>Apartment</option>
                            <option>House</option>
                            <option>Studio</option>
                            <option>Shared Room</option>
                            <option>Private Room</option>
                        </select>
                    </div>
                    
                    <div class="flex items-end group">
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            Search Properties
                        </button>
                    </div>
                </form>
                
                <!-- Advanced Filters Toggle -->
                <div class="border-t border-gray-200 pt-6">
                    <button id="advancedFiltersToggle" 
                            class="flex items-center text-orange-600 font-semibold text-sm hover:text-orange-700 transition-colors">
                        <svg class="w-4 h-4 mr-2 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                        Advanced Filters
                    </button>
                    
                    <!-- Advanced Filters -->
                    <div id="advancedFilters" class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4  animate-on-scroll">
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">🛏 Bedrooms</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400">
                                <option>Any</option>
                                <option>Studio</option>
                                <option>1 Bedroom</option>
                                <option>2 Bedrooms</option>
                                <option>3+ Bedrooms</option>
                            </select>
                        </div>
                        
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">🚗 Parking</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400">
                                <option>Any</option>
                                <option>Parking Available</option>
                                <option>Street Parking</option>
                                <option>No Parking</option>
                            </select>
                        </div>
                        
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">🐾 Pet Friendly</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400">
                                <option>Any</option>
                                <option>Pets Allowed</option>
                                <option>No Pets</option>
                            </select>
                        </div>
                        
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">⭐ Amenities</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400">
                                <option>Any</option>
                                <option>Furnished</option>
                                <option>Laundry</option>
                                <option>Gym</option>
                                <option>Pool</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Grid Section -->
    <section class="py-12 bg-gray-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-orange-200 rounded-full -translate-y-32 translate-x-32 opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-orange-300 rounded-full translate-y-24 -translate-x-24 opacity-30"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header with Sort -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-8 gap-4 animate-on-scroll">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">
                        Available Properties 
                        <span class="text-orange-500">({{ count($properties) }})</span>
                    </h2>
                    <p class="text-gray-600 mt-2">Find your perfect student accommodation</p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                    <div class="group">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Sort by</label>
                        <select class="w-full lg:w-48 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 group-hover:border-orange-400 appearance-none bg-white">
                            <option>Newest First</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Rating: Highest First</option>
                            <option>Distance: Nearest First</option>
                        </select>
                    </div>
                    
                    <!-- View Toggle -->
                    <div class="flex items-end">
                        <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                            <button class="p-2 bg-white border-r border-gray-300 hover:bg-orange-50 transition-colors">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                </svg>
                            </button>
                            <button class="p-2 bg-orange-50 border-l border-gray-300">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Properties Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($properties as $property)
                <div class="property-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 animate-on-scroll" 
                     style="animation-delay: {{ $loop->index * 0.1 }}s">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                        <!-- Price Badge -->
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white px-3 py-2 rounded-full text-sm font-semibold shadow-lg">
                            ${{ number_format($property['price']) }}/month
                        </div>
                        
                        <!-- Featured Badge -->
                        @if($property['featured'])
                        <div class="absolute top-4 left-4 bg-red-500 text-white px-3 py-1 rounded-lg text-xs font-semibold shadow-lg flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            Featured
                        </div>
                        @endif
                    </div>
                    
                    <div class="p-6">
                        <!-- Header with Rating -->
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-orange-600 transition-colors">
                                {{ $property['title'] }}
                            </h3>
                            <span class="flex items-center text-sm bg-orange-50 text-orange-700 px-2 py-1 rounded-lg font-medium">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                {{ $property['rating'] }}
                            </span>
                        </div>
                        
                        <!-- Location -->
                        <p class="text-gray-600 mb-4 flex items-center">
                            <svg class="w-4 h-4 mr-2 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="truncate">{{ $property['location'] }}</span>
                        </p>
                        
                        <!-- Property Features -->
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-6">
                            <div class="flex items-center group">
                                <svg class="w-4 h-4 mr-1 text-orange-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                {{ $property['type'] }}
                            </div>
                            <div class="flex items-center group">
                                <svg class="w-4 h-4 mr-1 text-orange-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>
                                {{ $property['bedrooms'] }} bed
                            </div>
                            <div class="flex items-center group">
                                <svg class="w-4 h-4 mr-1 text-orange-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Available Now
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex items-center justify-between">
                            <a href="{{ route('properties.show', $property['id']) }}" 
                               class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 text-white text-center py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-md mr-3 group">
                                <span class="flex items-center justify-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </span>
                            </a>
                            <button class="p-3 border border-gray-300 rounded-lg hover:border-orange-500 hover:bg-orange-500 hover:text-white transition-all duration-300 group transform hover:scale-110">
                                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12 animate-on-scroll">
                <nav class="flex items-center space-x-2 bg-white rounded-2xl p-2 shadow-lg">
                    <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-orange-500 hover:text-white hover:border-orange-500 transition-all duration-300 transform hover:scale-105 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Previous
                    </a>
                    <a href="#" class="px-4 py-2 bg-gradient-to-r from-orange-500 to-orange-600 text-white border border-orange-500 rounded-lg transform scale-105 shadow-lg">1</a>
                    <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-orange-500 hover:text-white hover:border-orange-500 transition-all duration-300 transform hover:scale-105">2</a>
                    <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-orange-500 hover:text-white hover:border-orange-500 transition-all duration-300 transform hover:scale-105">3</a>
                    <span class="px-2 py-2 text-gray-500">...</span>
                    <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-orange-500 hover:text-white hover:border-orange-500 transition-all duration-300 transform hover:scale-105">8</a>
                    <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-orange-500 hover:text-white hover:border-orange-500 transition-all duration-300 transform hover:scale-105 flex items-center">
                        Next
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gradient-to-r from-orange-50 to-orange-100 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-orange-200 rounded-full -translate-y-16 translate-x-16 opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-orange-300 rounded-full translate-y-12 -translate-x-12 opacity-40"></div>
        
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10 animate-on-scroll">
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-orange-200">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Stay Updated with New Properties</h2>
                <p class="text-xl text-gray-600 mb-8">Get notified when new properties matching your criteria become available.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <div class="flex-1">
                        <input type="email" 
                               placeholder="Enter your email" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-300 hover:border-orange-400">
                    </div>
                    <button type="submit" 
                            class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Subscribe
                    </button>
                </form>
                <p class="text-sm text-gray-500 mt-4">No spam, unsubscribe at any time</p>
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

        // Advanced filters toggle
        const filtersToggle = document.getElementById('advancedFiltersToggle');
        const advancedFilters = document.getElementById('advancedFilters');
        
        filtersToggle.addEventListener('click', function() {
            advancedFilters.classList.toggle('hidden');
            const icon = this.querySelector('svg');
            icon.classList.toggle('rotate-180');
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

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Property card hover effects
        document.querySelectorAll('.property-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>

<style>
    .property-card {
        transition: all 0.3s ease;
    }
    
    .property-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(255, 107, 53, 0.15);
    }
    
    .floating {
        animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    /* Custom select arrow */
    select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }
</style>
@endsection