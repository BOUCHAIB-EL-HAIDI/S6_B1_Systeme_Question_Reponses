@extends('layouts.app')

@section('title', 'Login - LocalMind')

@section('content')
<div class="min-h-[calc(100vh-64px)] flex">
    <!-- Left: Illustration/Text (Hidden on small screens) -->
    <div class="hidden lg:flex lg:w-1/2 bg-indigo-600 items-center justify-center p-12 overflow-hidden relative">
        <div class="absolute inset-0 z-0">
            <svg class="h-full w-full text-indigo-500 opacity-20" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>
        <div class="relative z-10 text-white max-w-lg">
            <h1 class="text-5xl font-extrabold leading-tight mb-6">Welcome back to the <span class="text-indigo-200">neighborhood.</span></h1>
            <p class="text-xl text-indigo-100 mb-8">Reconnect with your community, answer local questions, and help your neighbors out.</p>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-indigo-700/50 p-4 rounded-2xl border border-indigo-500/30">
                    <span class="block text-3xl font-bold mb-1">5k+</span>
                    <span class="text-indigo-200 text-sm italic">Active Users</span>
                </div>
                <div class="bg-indigo-700/50 p-4 rounded-2xl border border-indigo-500/30">
                    <span class="block text-3xl font-bold mb-1">12k+</span>
                    <span class="text-indigo-200 text-sm italic">Local Answers</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Right: Login Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-slate-900 mb-2">Sign in</h2>
                <p class="text-slate-500">Enter your credentials to access your account</p>
            </div>

            <form action="/login" method="POST" class="space-y-6">
                <!-- @csrf -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-slate-400"
                        placeholder="name@example.com">
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1">
                        <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                        <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-slate-700 cursor-pointer">Remember me for 30 days</label>
                </div>

                <button type="submit" 
                    class="w-full py-4 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all transform active:scale-[0.98]">
                    Sign In
                </button>
                
                <div class="relative py-4">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-100"></div>
                    </div>
                    <div class="relative flex justify-center text-xs uppercase">
                        <span class="bg-white px-2 text-slate-400">Or continue with</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <button type="button" class="flex items-center justify-center py-3 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.908 3.152-1.928 4.172-1.224 1.224-3.136 2.504-6.928 2.504-6.072 0-10.744-4.88-10.744-10.952s4.672-10.952 10.744-10.952c3.28 0 5.688 1.288 7.464 2.976l2.312-2.312c-1.992-1.896-4.632-3.328-9.776-3.328-8.872 0-15.824 7.208-15.824 16.08s6.952 16.08 15.824 16.08c4.784 0 8.392-1.584 11.136-4.456 2.904-2.904 3.816-7.016 3.816-10.36 0-1.016-.072-2.016-.216-3.016l-14.736.008z"/></svg>
                        Google
                    </button>
                    <button type="button" class="flex items-center justify-center py-3 border border-slate-200 rounded-xl hover:bg-slate-50 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.041-1.416-4.041-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.841 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </button>
                </div>
            </form>

            <p class="mt-8 text-center text-sm text-slate-500">
                Don't have an account? 
                <a href="/register" class="font-bold text-indigo-600 hover:text-indigo-500">Start your journey</a>
            </p>
        </div>
    </div>
</div>
@endsection
