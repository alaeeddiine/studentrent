@extends('layouts.app')

@section('title', 'My Favorites - StudentRent')

@section('content')
    <!-- Favorites Header -->
    <section class="relative bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 right-10 w-20 h-20 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-bounce"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="text-center">
                <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Your Saved Properties</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 slide-up">
                    My <span class="text-orange-200">Favorites</span>
                </h1>
                
                <p class="text-xl text-orange-100 max-w-2xl mx-auto slide-up">
                    Your curated collection of perfect student accommodations
                </p>
                
                <!-- Quick Stats -->
                <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" 
                    data-target="{{ collect($favorites)->where('featured', true)->count() }}">
                    0
                </div>
                <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" 
                    data-target="{{ collect($favorites)->avg('price') ? number_format(collect($favorites)->avg('price')) : 0 }}">
                    0
                </div>
            </div>
        </div>
    </section>

    <!-- Favorites Content -->
    <section class="py-12 bg-gray-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-orange-200 rounded-full -translate-y-32 translate-x-32 opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-orange-300 rounded-full translate-y-24 -translate-x-24 opacity-30"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header with Actions -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-8 gap-4 animate-on-scroll">
                <div>
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800">
                        Your Favorite Properties 
                        <span class="text-orange-500">({{ count($favorites) }})</span>
                    </h2>
                    <p class="text-gray-600 mt-2">Properties you've saved for later</p>
                </div>
                
                @if($favorites && count($favorites) > 0)
                <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                    <button class="px-6 py-3 bg-white border border-orange-500 text-orange-600 rounded-lg font-semibold hover:bg-orange-50 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        Share List
                    </button>
                    <button class="px-6 py-3 bg-red-500 text-white rounded-lg font-semibold hover:bg-red-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Clear All
                    </button>
                </div>
                @endif
            </div>

            @if($favorites && count($favorites) > 0)
                <!-- Favorites Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($favorites as $fav)
                    <div class="favorite-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 animate-on-scroll relative" 
                         style="animation-delay: {{ $loop->index * 0.1 }}s">
                        <!-- Remove Favorite Button -->
                        <button class="absolute top-4 right-4 z-20 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all duration-300 transform hover:scale-110 shadow-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        
                        <div class="relative overflow-hidden">
                            <img src="{{ $fav->image ?? 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' }}" 
                                 alt="{{ $fav->title }}" 
                                 class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            
                            <!-- Price Badge -->
                            <div class="absolute top-4 left-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white px-3 py-2 rounded-full text-sm font-semibold shadow-lg">
                                ${{ number_format($fav->price) }}/month
                            </div>
                            
                            <!-- Favorite Indicator -->
                            <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm text-orange-600 px-3 py-1 rounded-lg text-xs font-semibold shadow-lg flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                                Saved
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <!-- Header with Rating -->
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-orange-600 transition-colors">
                                    {{ $fav->title }}
                                </h3>
                                <span class="flex items-center text-sm bg-orange-50 text-orange-700 px-2 py-1 rounded-lg font-medium">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    {{ $fav->rating ?? '4.5' }}
                                </span>
                            </div>
                            
                            <!-- Location -->
                            <p class="text-gray-600 mb-4 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="truncate">{{ $fav->location ?? 'Location not specified' }}</span>
                            </p>
                            
                            <!-- Property Features -->
                            <div class="flex items-center justify-between text-sm text-gray-600 mb-6">
                                <div class="flex items-center group">
                                    <svg class="w-4 h-4 mr-1 text-orange-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                    {{ $fav->type ?? 'Apartment' }}
                                </div>
                                <div class="flex items-center group">
                                    <svg class="w-4 h-4 mr-1 text-orange-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                    </svg>
                                    {{ $fav->bedrooms ?? 1 }} bed
                                </div>
                                <div class="flex items-center group">
                                    <svg class="w-4 h-4 mr-1 text-orange-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Available Now
                                </div>
                            </div>
                            
                            <!-- Action Buttons -->
                            <div class="flex items-center justify-between space-x-3">
                                <a href="{{ route('property.show', $fav->id) }}" 
                                   class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 text-white text-center py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-md group">
                                    <span class="flex items-center justify-center">
                                        View Details
                                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </span>
                                </a>
                                <button class="flex-1 bg-white border border-gray-300 text-gray-700 text-center py-3 rounded-lg font-semibold hover:border-orange-500 hover:text-orange-600 transition-all duration-300 transform hover:scale-105 group">
                                    <span class="flex items-center justify-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                        Contact
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Bulk Actions -->
                <div class="mt-12 bg-white rounded-2xl p-6 shadow-lg border border-orange-100 animate-on-scroll">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Manage Your Favorites</h3>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="px-6 py-3 bg-orange-500 text-white rounded-lg font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                            Compare Selected
                        </button>
                        <button class="px-6 py-3 bg-white border border-gray-300 text-gray-700 rounded-lg font-semibold hover:border-orange-500 hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            Export List
                        </button>
                    </div>
                </div>

            @else
                <!-- Empty State -->
                <div class="text-center py-16 animate-on-scroll">
                    <div class="max-w-md mx-auto">
                        <div class="w-32 h-32 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-16 h-16 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">No Favorites Yet</h3>
                        <p class="text-gray-600 mb-8">
                            Start exploring our properties and save your favorites to compare them later.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('properties.index') }}" 
                               class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Browse Properties
                            </a>
                            <a href="{{ route('home') }}" 
                               class="bg-white border border-orange-500 text-orange-600 px-8 py-3 rounded-lg font-semibold hover:bg-orange-50 transition-all duration-300 transform hover:scale-105">
                                Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    @if($favorites && count($favorites) > 0)
    <section class="py-16 bg-gradient-to-r from-orange-50 to-orange-100 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-orange-200 rounded-full -translate-y-16 translate-x-16 opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-orange-300 rounded-full translate-y-12 -translate-x-12 opacity-40"></div>
        
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10 animate-on-scroll">
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-orange-200">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Make a Decision?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Compare your favorite properties and find the perfect one for your student life.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('properties') }}" 
                       class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Browse More Properties
                    </a>
                    <button class="bg-white border border-orange-500 text-orange-600 px-8 py-3 rounded-lg font-semibold hover:bg-orange-50 transition-all duration-300 transform hover:scale-105">
                        Contact Advisor
                    </button>
                </div>
            </div>
        </div>
    </section>
    @endif
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
                const count = +counter.innerText.replace(',', '');
                const increment = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment).toLocaleString();
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target.toLocaleString();
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

        // Favorite card hover effects
        document.querySelectorAll('.favorite-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Remove favorite functionality
        document.querySelectorAll('.favorite-card button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const card = this.closest('.favorite-card');
                
                // Add removal animation
                card.style.transform = 'translateX(100px)';
                card.style.opacity = '0';
                
                setTimeout(() => {
                    card.remove();
                    // Update counters if needed
                    // You can add AJAX call here to remove from backend
                }, 300);
            });
        });
    });
</script>

<style>
    .favorite-card {
        transition: all 0.3s ease;
    }
    
    .favorite-card:hover {
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
    
    /* Smooth removal animation */
    .favorite-card {
        transition: all 0.3s ease;
    }
</style>
@endsection