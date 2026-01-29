@extends('layouts.app')

@section('title', 'Register - LocalMind')

@section('content')
<div class="min-h-[calc(100vh-64px)] flex flex-row-reverse">
    <!-- Right side: Illustration (Hidden on small screens) -->
    <div class="hidden lg:flex lg:w-1/2 bg-indigo-600 items-center justify-center p-12 overflow-hidden relative">
        <div class="absolute inset-0 z-0">
            <svg class="h-full w-full text-indigo-500 opacity-20" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <circle cx="50" cy="50" r="40" />
            </svg>
        </div>
        <div class="relative z-10 text-white max-w-lg">
            <h1 class="text-5xl font-extrabold leading-tight mb-6">Build your <span class="text-indigo-200">local profile.</span></h1>
            <p class="text-xl text-indigo-100 mb-8">Join thousands of neighbors sharing knowledge and building a stronger community every day.</p>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg">Personalized Feed</h4>
                        <p class="text-indigo-200">See questions and answers from your specific area.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg">Expert Badges</h4>
                        <p class="text-indigo-200">Gain reputation and badges for your helpful contributions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Left side: Register Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-slate-900 mb-2">Create Account</h2>
                <p class="text-slate-500">Start your community experience today</p>
            </div>

            <form action="/register" method="POST" class="space-y-5">
                <!-- @csrf -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-slate-700 mb-1">First Name</label>
                        <input type="text" id="first_name" name="first_name" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-slate-400"
                            placeholder="John">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-slate-700 mb-1">Last Name</label>
                        <input type="text" id="last_name" name="last_name" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-slate-400"
                            placeholder="Doe">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-slate-400"
                        placeholder="john@example.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-1">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-slate-700">I agree to the <span class="text-indigo-600">Terms of Service</span> and <span class="text-indigo-600">Privacy Policy</span></label>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full py-4 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all transform active:scale-[0.98]">
                    Create Account
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-slate-500">
                Already have an account? 
                <a href="/login" class="font-bold text-indigo-600 hover:text-indigo-500">Sign in instead</a>
            </p>
        </div>
    </div>
</div>
@endsection
