@extends('layouts.app')

@section('title', 'Manage Bookings - StudentRent')

@section('content')
<!-- Main Container -->
<div class="min-h-screen bg-gradient-to-br from-orange-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
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
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-1">Booking Requests</h1>
                        <p class="text-gray-600">Manage student tour requests for your properties</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white px-6 py-3 rounded-full text-sm font-medium shadow-lg">
                    {{ $pending->count() }} Pending Requests
                </div>
            </div>
        </div>

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

        <!-- Booking Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Total Bookings</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-gray-900 mb-2">{{ $pending->count() + $accepted->count() + $refused->count() }}</p>
                <p class="text-sm text-gray-500">All booking requests</p>
            </div>

            <!-- Pending Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" style="animation-delay: 0.1s">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Pending</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-gray-900 mb-2">{{ $pending->count() }}</p>
                <p class="text-sm text-gray-500">Awaiting response</p>
            </div>

            <!-- Accepted Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" style="animation-delay: 0.2s">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Accepted</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-gray-900 mb-2">{{ $accepted->count() }}</p>
                <p class="text-sm text-gray-500">Confirmed tours</p>
            </div>

            <!-- Declined Bookings -->
            <div class="bg-white rounded-3xl shadow-lg p-6 border border-orange-100 hover:shadow-xl transition-all duration-300 animate-on-scroll group" style="animation-delay: 0.3s">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">Declined</h3>
                    <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-gray-900 mb-2">{{ $refused->count() }}</p>
                <p class="text-sm text-gray-500">Rejected requests</p>
            </div>
        </div>

        <!-- Booking Status Columns -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Pending Bookings -->
            <div class="bg-white rounded-3xl shadow-lg border border-orange-100 animate-on-scroll" style="animation-delay: 0.4s">
                <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 px-6 py-5 border-b border-yellow-100 rounded-t-3xl">
                    <h3 class="text-xl font-bold text-white flex items-center">
                        <span class="w-4 h-4 bg-white rounded-full mr-3"></span>
                        Pending Requests
                    </h3>
                </div>
                <div class="p-6">
                    @forelse($pending as $booking)
                        <div class="bg-gradient-to-br from-yellow-50 to-white rounded-2xl p-5 mb-4 last:mb-0 border border-yellow-100 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 text-lg">{{ $booking->student->name }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $booking->property->title }}</p>
                                </div>
                            </div>
                            <div class="flex items-center text-gray-600 mb-4 text-sm">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ \Carbon\Carbon::parse($booking->tour_date)->format('M j, Y g:i A') }}
                            </div>
                            <div class="flex space-x-3">
                                <form action="{{ route('owner.bookings.accept', $booking->id) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" 
                                            class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 group">
                                        <span class="flex items-center justify-center">
                                            <svg class="w-4 h-4 mr-2 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            Accept
                                        </span>
                                    </button>
                                </form>
                                <form action="{{ route('owner.bookings.refuse', $booking->id) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" 
                                            class="w-full bg-gradient-to-r from-red-100 to-red-50 text-red-600 py-3 rounded-xl font-semibold border border-red-200 hover:bg-red-100 transform hover:scale-105 transition-all duration-300 group">
                                        <span class="flex items-center justify-center">
                                            <svg class="w-4 h-4 mr-2 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                            Decline
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-12">
                            <div class="mx-auto w-20 h-20 bg-gradient-to-br from-yellow-100 to-yellow-200 text-yellow-600 rounded-3xl flex items-center justify-center mb-4 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Pending Requests</h4>
                            <p class="text-gray-500 text-sm">All booking requests have been processed</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Accepted Bookings -->
            <div class="bg-white rounded-3xl shadow-lg border border-orange-100 animate-on-scroll" style="animation-delay: 0.5s">
                <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-5 border-b border-green-100 rounded-t-3xl">
                    <h3 class="text-xl font-bold text-white flex items-center">
                        <span class="w-4 h-4 bg-white rounded-full mr-3"></span>
                        Accepted Tours
                    </h3>
                </div>
                <div class="p-6">
                    @forelse($accepted as $booking)
                        <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-5 mb-4 last:mb-0 border border-green-100 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 text-lg">{{ $booking->student->name }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $booking->property->title }}</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    {{ \Carbon\Carbon::parse($booking->tour_date)->format('M j, Y g:i A') }}
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Confirmed {{ \Carbon\Carbon::parse($booking->updated_at)->diffForHumans() }}
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-green-100">
                                <div class="flex items-center justify-between">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">
                                        Tour Scheduled
                                    </span>
                                    <button class="text-green-600 hover:text-green-700 text-sm font-medium transition-colors">
                                        Contact Student
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-12">
                            <div class="mx-auto w-20 h-20 bg-gradient-to-br from-green-100 to-green-200 text-green-600 rounded-3xl flex items-center justify-center mb-4 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Accepted Tours</h4>
                            <p class="text-gray-500 text-sm">Accepted booking requests will appear here</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Declined Bookings -->
            <div class="bg-white rounded-3xl shadow-lg border border-orange-100 animate-on-scroll" style="animation-delay: 0.6s">
                <div class="bg-gradient-to-r from-red-500 to-red-600 px-6 py-5 border-b border-red-100 rounded-t-3xl">
                    <h3 class="text-xl font-bold text-white flex items-center">
                        <span class="w-4 h-4 bg-white rounded-full mr-3"></span>
                        Declined Requests
                    </h3>
                </div>
                <div class="p-6">
                    @forelse($refused as $booking)
                        <div class="bg-gradient-to-br from-red-50 to-white rounded-2xl p-5 mb-4 last:mb-0 border border-red-100 hover:shadow-lg transition-all duration-300 group">
                            <div class="flex items-start mb-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 text-lg">{{ $booking->student->name }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $booking->property->title }}</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    {{ \Carbon\Carbon::parse($booking->tour_date)->format('M j, Y g:i A') }}
                                </div>
                                <div class="flex items-center text-gray-600 text-sm">
                                    <svg class="w-4 h-4 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Declined {{ \Carbon\Carbon::parse($booking->updated_at)->diffForHumans() }}
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-red-100">
                                <div class="flex items-center justify-between">
                                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs font-medium">
                                        Request Declined
                                    </span>
                                    <button class="text-red-600 hover:text-red-700 text-sm font-medium transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-12">
                            <div class="mx-auto w-20 h-20 bg-gradient-to-br from-red-100 to-red-200 text-red-600 rounded-3xl flex items-center justify-center mb-4 shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">No Declined Requests</h4>
                            <p class="text-gray-500 text-sm">No booking requests have been declined</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-3xl shadow-lg p-8 border border-orange-100 animate-on-scroll" style="animation-delay: 0.7s">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Quick Actions</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('owner.properties.index') }}" 
                   class="group bg-gradient-to-br from-orange-50 to-white p-6 rounded-2xl border border-orange-100 hover:border-orange-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-lg mb-2">View Properties</h4>
                            <p class="text-gray-600 text-sm">Manage your property listings</p>
                        </div>
                    </div>
                </a>

                <a href="{{ route('owner.properties.create') }}" 
                   class="group bg-gradient-to-br from-green-50 to-white p-6 rounded-2xl border border-green-100 hover:border-green-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-lg mb-2">Add Property</h4>
                            <p class="text-gray-600 text-sm">Create new rental listing</p>
                        </div>
                    </div>
                </a>

                <div class="group bg-gradient-to-br from-blue-50 to-white p-6 rounded-2xl border border-blue-100 hover:border-blue-300 hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                    <div class="flex items-start mb-4">
                        <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg mr-4 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-lg mb-2">Contact Support</h4>
                            <p class="text-gray-600 text-sm">Get help with bookings</p>
                        </div>
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

        // Add hover effects for booking cards
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

                    // Revert after 3 seconds if still processing (fallback)
                    setTimeout(() => {
                        if (button.disabled) {
                            button.innerHTML = originalText;
                            button.disabled = false;
                        }
                    }, 3000);
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
</style>
@endsection