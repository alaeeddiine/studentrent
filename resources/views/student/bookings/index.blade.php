@extends('layouts.app')

@section('title', 'My Bookings - StudentRent')

@section('content')
<!-- Main Container -->
<div class="min-h-screen bg-gradient-to-br from-orange-50 to-white" x-data="{ tab: 'pending' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 p-6 mb-8 rounded-2xl shadow-sm animate-pulse">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <div>
                        <p class="text-green-700 font-medium">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Page Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12 gap-6 animate-on-scroll">
            <div class="flex-1">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-1">My Property Tours</h1>
                        <p class="text-gray-600">Manage your scheduled property viewings and applications</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Pending Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" 
                 @click="tab = 'pending'"
                 :class="tab === 'pending' ? 'ring-2 ring-yellow-500' : ''"
                 style="cursor: pointer;">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Pending</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-gray-900 mb-2">{{ $bookings->where('status', 'pending')->count() }}</p>
                <p class="text-sm text-gray-500">Awaiting confirmation</p>
            </div>

            <!-- Accepted Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" 
                 @click="tab = 'accepted'"
                 :class="tab === 'accepted' ? 'ring-2 ring-green-500' : ''"
                 style="cursor: pointer; animation-delay: 0.1s">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Accepted</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-gray-900 mb-2">{{ $bookings->where('status', 'accepted')->count() }}</p>
                <p class="text-sm text-gray-500">Confirmed tours</p>
            </div>

            <!-- Declined Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" 
                 @click="tab = 'refused'"
                 :class="tab === 'refused' ? 'ring-2 ring-red-500' : ''"
                 style="cursor: pointer; animation-delay: 0.2s">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Declined</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-gray-900 mb-2">{{ $bookings->where('status', 'refused')->count() }}</p>
                <p class="text-sm text-gray-500">Rejected requests</p>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div class="flex space-x-2 mb-8 bg-orange-100 p-2 rounded-2xl animate-on-scroll" style="animation-delay: 0.3s">
            @foreach (['pending' => 'clock', 'accepted' => 'check-circle', 'refused' => 'times-circle'] as $key => $icon)
                <button 
                    @click="tab = '{{ $key }}'"
                    :class="tab === '{{ $key }}' ? 
                        'bg-white shadow-lg text-{{ $key === 'pending' ? 'yellow' : ($key === 'accepted' ? 'green' : 'red') }}-600 font-semibold transform scale-105' : 
                        'text-gray-600 hover:text-gray-900 hover:bg-white/50'"
                    class="flex-1 px-6 py-4 rounded-xl font-medium text-sm transition-all duration-300 flex items-center justify-center group"
                >
                    <svg class="w-5 h-5 mr-3 transition-transform group-hover:scale-110" 
                         :class="tab === '{{ $key }}' ? 
                            'text-{{ $key === 'pending' ? 'yellow' : ($key === 'accepted' ? 'green' : 'red') }}-600' : 
                            'text-gray-400'" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        @if($key === 'pending')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        @elseif($key === 'accepted')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        @else
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        @endif
                    </svg>
                    {{ ucfirst($key) }}
                </button>
            @endforeach
        </div>

        <!-- Bookings Grid -->
        @if ($bookings->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach ($bookings as $booking)
                    <div x-show="tab === '{{ $booking->status }}'" 
                         x-transition:enter="transition duration-300 ease-out"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition duration-200 ease-in"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-4"
                         class="bg-white rounded-3xl shadow-lg overflow-hidden border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group"
                         style="animation-delay: {{ $loop->index * 0.1 }}s">
                        
                        <!-- Property Image -->
                        <div class="relative h-48 w-full overflow-hidden">
                            @if ($booking->property->image)
                                <img 
                                    src="{{ asset('storage/' . $booking->property->image) }}" 
                                    alt="{{ $booking->property->title }}" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                >
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Status Badge -->
                            <div class="absolute top-4 left-4">
                                @if($booking->status === 'pending')
                                    <span class="bg-yellow-500 text-white px-3 py-2 rounded-xl text-xs font-medium shadow-lg">
                                        Awaiting Confirmation
                                    </span>
                                @elseif($booking->status === 'accepted')
                                    <span class="bg-green-500 text-white px-3 py-2 rounded-xl text-xs font-medium shadow-lg">
                                        Tour Confirmed
                                    </span>
                                @else
                                    <span class="bg-red-500 text-white px-3 py-2 rounded-xl text-xs font-medium shadow-lg">
                                        Request Declined
                                    </span>
                                @endif
                            </div>

                            <!-- Tour Date -->
                            <div class="absolute bottom-4 left-4 bg-white bg-opacity-90 backdrop-blur-sm text-gray-900 px-3 py-2 rounded-xl font-bold shadow-lg">
                                {{ \Carbon\Carbon::parse($booking->tour_date)->format('M j, g:i A') }}
                            </div>
                        </div>

                        <!-- Booking Details -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition-colors">
                                {{ $booking->property->title }}
                            </h3>

                            <p class="text-gray-600 mb-4 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="truncate">{{ $booking->property->location }}</span>
                            </p>

                            <!-- Property Features -->
                            <div class="flex items-center justify-between text-sm text-gray-500 mb-6">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                                    </svg>
                                    {{ $booking->property->bedrooms }} bed
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                    </svg>
                                    ${{ number_format($booking->property->price) }}/mo
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-3">
                                <a href="{{ route('properties.show', $booking->property->id) }}" 
                                   class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 text-center group">
                                    <span class="flex items-center justify-center">
                                        <svg class="w-4 h-4 mr-2 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        View Property
                                    </span>
                                </a>

                                @if($booking->status === 'pending')
                                <form action="{{ route('student.bookings.destroy', $booking->id) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            onclick="return confirm('Are you sure you want to cancel this tour request?')"
                                            class="w-full bg-gradient-to-r from-gray-100 to-gray-50 text-gray-600 py-3 rounded-xl font-semibold border border-gray-200 hover:bg-gray-200 transform hover:scale-105 transition-all duration-300 group">
                                        <span class="flex items-center justify-center">
                                            <svg class="w-4 h-4 mr-2 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                            Cancel
                                        </span>
                                    </button>
                                </form>
                                @endif
                            </div>

                            <!-- Additional Info -->
                            @if($booking->status === 'accepted')
                                <div class="mt-4 pt-4 border-t border-green-100">
                                    <div class="flex items-center text-green-600 text-sm">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Your tour has been confirmed by the property owner
                                    </div>
                                </div>
                            @elseif($booking->status === 'refused')
                                <div class="mt-4 pt-4 border-t border-red-100">
                                    <div class="flex items-center text-red-600 text-sm">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                        </svg>
                                        This tour request was declined by the property owner
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="bg-white rounded-3xl shadow-lg p-12 border border-orange-100 text-center animate-on-scroll" style="animation-delay: 0.3s">
                <div class="mx-auto w-24 h-24 bg-gradient-to-br from-orange-100 to-orange-200 text-orange-600 rounded-3xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Bookings Yet</h3>
                <p class="text-gray-500 mb-6 max-w-md mx-auto">You haven't scheduled any property tours yet. Start exploring available properties and schedule your first tour!</p>
                <a href="{{ route('properties.index') }}" 
                   class="inline-flex items-center bg-gradient-to-r from-orange-500 to-orange-600 text-white px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 group">
                    <svg class="w-5 h-5 mr-2 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    Browse Properties
                </a>
            </div>
        @endif

        <!-- Support Section -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-3xl p-8 text-white animate-on-scroll" style="animation-delay: 0.4s">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Need Help with Bookings?</h3>
                    <p class="text-orange-100 mb-6">Our student support team is here to help you with tour scheduling, property questions, and any booking-related issues.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-white text-orange-600 px-6 py-3 rounded-xl font-semibold hover:bg-orange-50 transition-colors text-center">
                            Contact Support
                        </a>
                        <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:text-orange-600 transition-colors text-center">
                            View Help Center
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

        // Form submission loading states
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                const button = this.querySelector('button[type="submit"]');
                if (button) {
                    const originalText = button.innerHTML;
                    button.innerHTML = `
                        <span class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v4m0 12v4m8-10h-4M6 12H2m15.364-7.364l-2.828 2.828M7.464 17.536l-2.828 2.828m12.728 0l-2.828-2.828M7.464 6.464L4.636 3.636"/>
                            </svg>
                            Processing...
                        </span>
                    `;
                    button.disabled = true;
                }
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

    /* Smooth tab transitions */
    [x-show] {
        transition: all 0.3s ease;
    }
</style>
@endsection