@extends('layouts.app')

@section('title', 'Contact Us - StudentRent')

@section('content')
    <!-- Contact Header -->
    <section class="relative bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-20 h-20 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-24 h-24 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-bounce"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-80"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 slide-up">Get In Touch</h1>
                <p class="text-xl text-orange-100 max-w-2xl mx-auto slide-up">
                    We're here to help you find your perfect student accommodation. Reach out anytime!
                </p>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-8 mt-12 max-w-2xl mx-auto">
                    <div class="text-center">
                        <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="24">0</div>
                        <div class="text-orange-200 text-sm">Hours Response</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="10000">0</div>
                        <div class="text-orange-200 text-sm">Students Helped</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl lg:text-3xl font-bold text-white mb-1 counter" data-target="98">0</div>
                        <div class="text-orange-200 text-sm">Satisfaction Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 right-20 w-40 h-40 bg-orange-500 rounded-full"></div>
            <div class="absolute bottom-20 left-20 w-32 h-32 bg-orange-400 rounded-full"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-gradient-to-br from-white to-orange-50 rounded-2xl shadow-2xl overflow-hidden border border-orange-100 animate-on-scroll">
                <div class="lg:flex">
                    <!-- Contact Info Section -->
                    <div class="lg:w-2/5 bg-gradient-to-br from-orange-500 to-orange-600 p-8 lg:p-12 text-white relative overflow-hidden">
                        <!-- Background Elements -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-orange-400 rounded-full -translate-y-16 translate-x-16 opacity-20"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-orange-300 rounded-full translate-y-12 -translate-x-12 opacity-30"></div>
                        
                        <div class="relative z-10">
                            <h2 class="text-3xl lg:text-4xl font-bold mb-6 slide-up">Let's Connect</h2>
                            <p class="text-orange-100 text-lg mb-8 leading-relaxed slide-up">
                                Have questions about our properties or need assistance? Our dedicated team is here to help you find your perfect student accommodation.
                            </p>
                            
                            <div class="space-y-8">
                                <!-- Office Info -->
                                <div class="flex items-start group animate-on-scroll" style="animation-delay: 0.1s">
                                    <div class="flex-shrink-0 bg-orange-400 rounded-2xl p-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-semibold group-hover:text-orange-200 transition-colors">Our Office</h3>
                                        <p class="text-orange-200 mt-2">123 Campus Avenue</p>
                                        <p class="text-orange-200">University City, UC 12345</p>
                                    </div>
                                </div>
                                
                                <!-- Phone Info -->
                                <div class="flex items-start group animate-on-scroll" style="animation-delay: 0.2s">
                                    <div class="flex-shrink-0 bg-orange-400 rounded-2xl p-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-semibold group-hover:text-orange-200 transition-colors">Phone</h3>
                                        <p class="text-orange-200 mt-2">+1 (555) 123-4567</p>
                                        <p class="text-orange-200 text-sm">Mon-Fri from 8am to 6pm</p>
                                    </div>
                                </div>
                                
                                <!-- Email Info -->
                                <div class="flex items-start group animate-on-scroll" style="animation-delay: 0.3s">
                                    <div class="flex-shrink-0 bg-orange-400 rounded-2xl p-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-semibold group-hover:text-orange-200 transition-colors">Email</h3>
                                        <p class="text-orange-200 mt-2">hello@studentrent.com</p>
                                        <p class="text-orange-200 text-sm">We'll reply within 24 hours</p>
                                    </div>
                                </div>
                                
                                <!-- Support Hours -->
                                <div class="flex items-start group animate-on-scroll" style="animation-delay: 0.4s">
                                    <div class="flex-shrink-0 bg-orange-400 rounded-2xl p-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-6">
                                        <h3 class="text-xl font-semibold group-hover:text-orange-200 transition-colors">Support Hours</h3>
                                        <p class="text-orange-200 mt-2">Monday - Friday: 8:00 - 18:00</p>
                                        <p class="text-orange-200">Saturday: 9:00 - 16:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form Section -->
                    <div class="lg:w-3/5 p-8 lg:p-12">
                        <div class="max-w-2xl mx-auto">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-2 slide-up">Send Us a Message</h2>
                            <p class="text-gray-600 mb-8 text-lg slide-up">Fill out the form below and we'll get back to you as soon as possible.</p>
                            
                            @if(session('success'))
                            <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-4 mb-8 shadow-sm animate-pulse">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-green-700 font-medium">{{ session('success') }}</span>
                                </div>
                            </div>
                            @endif
                            
                            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                                @csrf
                                
                                <!-- Name Fields -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="group animate-on-scroll" style="animation-delay: 0.1s">
                                        <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name *</label>
                                        <div class="relative">
                                            <input type="text" 
                                                   id="first_name" 
                                                   name="first_name" 
                                                   required
                                                   class="w-full px-4 pl-12 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 group-hover:border-orange-300"
                                                   placeholder="John">
                                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="group animate-on-scroll" style="animation-delay: 0.2s">
                                        <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name *</label>
                                        <div class="relative">
                                            <input type="text" 
                                                   id="last_name" 
                                                   name="last_name" 
                                                   required
                                                   class="w-full px-4 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 group-hover:border-orange-300"
                                                   placeholder="Doe">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Contact Fields -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="group animate-on-scroll" style="animation-delay: 0.3s">
                                        <label for="email" class="block text-gray-700 font-medium mb-2">Email Address *</label>
                                        <div class="relative">
                                            <input type="email" 
                                                   id="email" 
                                                   name="email" 
                                                   required
                                                   class="w-full px-4 pl-12 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 group-hover:border-orange-300"
                                                   placeholder="john@example.com">
                                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="group animate-on-scroll" style="animation-delay: 0.4s">
                                        <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                                        <div class="relative">
                                            <input type="tel" 
                                                   id="phone" 
                                                   name="phone"
                                                   class="w-full px-4 pl-12 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 group-hover:border-orange-300"
                                                   placeholder="+1 (555) 123-4567">
                                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Subject -->
                                <div class="group animate-on-scroll" style="animation-delay: 0.5s">
                                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject *</label>
                                    <div class="relative">
                                        <select id="subject" 
                                                name="subject" 
                                                required
                                                class="w-full px-4 pl-12 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 group-hover:border-orange-300 appearance-none bg-white">
                                            <option value="">Select a subject</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="property">Property Information</option>
                                            <option value="booking">Booking Assistance</option>
                                            <option value="technical">Technical Support</option>
                                            <option value="partnership">Partnership Opportunity</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                            </svg>
                                        </div>
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Message -->
                                <div class="group animate-on-scroll" style="animation-delay: 0.6s">
                                    <label for="message" class="block text-gray-700 font-medium mb-2">Your Message *</label>
                                    <div class="relative">
                                        <textarea id="message" 
                                                  name="message" 
                                                  required
                                                  rows="6"
                                                  class="w-full px-4 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm transition-all duration-300 group-hover:border-orange-300 resize-none"
                                                  placeholder="Tell us how we can help you..."></textarea>
                                    </div>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="pt-4 animate-on-scroll" style="animation-delay: 0.7s">
                                    <button type="submit" 
                                            class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl transform hover:scale-105 group">
                                        <span class="flex items-center justify-center">
                                            <svg class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                            </svg>
                                            Send Message
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-orange-200 rounded-full -translate-y-32 translate-x-32 opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-orange-300 rounded-full translate-y-24 -translate-x-24 opacity-30"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4">
                    Frequently Asked <span class="text-orange-500">Questions</span>
                </h2>
                <p class="text-xl text-gray-600">Quick answers to common questions</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- FAQ Column 1 -->
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 animate-on-scroll">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            How do I book a property?
                        </h3>
                        <p class="text-gray-600">Click "View Details" on any property and follow the simple booking process. You can schedule a tour and apply online.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.1s">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Are all properties verified?
                        </h3>
                        <p class="text-gray-600">Yes, we personally verify every property listed on our platform to ensure quality, safety, and accurate information.</p>
                    </div>
                </div>
                
                <!-- FAQ Column 2 -->
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.2s">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            What's included in the rent?
                        </h3>
                        <p class="text-gray-600">This varies by property. Check individual listings for details about utilities, furniture, and included amenities.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-orange-100 hover:border-orange-300 transition-all duration-300 animate-on-scroll" style="animation-delay: 0.3s">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 text-orange-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Can I schedule a virtual tour?
                        </h3>
                        <p class="text-gray-600">Absolutely! Many properties offer virtual tours. Contact us to schedule a virtual viewing at your convenience.</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class="text-center mt-12 animate-on-scroll">
                <p class="text-gray-600 mb-6">Still have questions? We're happy to help!</p>
                <a href="tel:+15551234567" 
                   class="inline-flex items-center bg-orange-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Call Us Now
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

        // Form enhancement
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-orange-200');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-orange-200');
            });
        });

        // Form submission animation
        form.addEventListener('submit', function(e) {
            const button = this.querySelector('button[type="submit"]');
            button.innerHTML = `
                <span class="flex items-center justify-center">
                    <svg class="w-5 h-5 mr-3 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v4m0 12v4m8-10h-4M6 12H2m15.364-7.364l-2.828 2.828M7.464 17.536l-2.828 2.828m12.728 0l-2.828-2.828M7.464 6.464L4.636 3.636"/>
                    </svg>
                    Sending...
                </span>
            `;
            button.disabled = true;
        });
    });
</script>

<style>
    .slide-up {
        animation: slideUp 0.8s ease-out;
    }
    
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Custom select styling */
    select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 1rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }
</style>
@endsection