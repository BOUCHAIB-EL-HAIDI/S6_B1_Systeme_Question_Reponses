@extends('layouts.app')

@section('title', 'Browse Questions - LocalMind')

@section('content')
<div class="bg-slate-50 min-h-screen py-12">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header & Search -->
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-slate-900 mb-6">Explore <span class="text-indigo-600">Questions</span></h1>
            <div class="relative">
                <input type="text" placeholder="Search for questions, topics, or locations..." 
                    class="w-full pl-14 pr-4 py-5 bg-white rounded-2xl shadow-sm border-none focus:ring-2 focus:ring-indigo-500 text-lg outline-none transition-all placeholder:text-slate-400">
                <div class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <button class="absolute right-3 top-1/2 -translate-y-1/2 px-6 py-2.5 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition-colors">
                    Search
                </button>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Questions List -->
            <div class="flex-grow space-y-4">
                <div class="flex items-center justify-between mb-2">
                    <h2 class="font-bold text-slate-700 uppercase tracking-wider text-sm">Recent Questions</h2>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-600 hover:bg-slate-50">Newest</button>
                        <button class="px-3 py-1 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-600 hover:bg-slate-50">Popular</button>
                    </div>
                </div>

                <!-- Question Item 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:border-indigo-200 transition-all cursor-pointer group">
                    <div class="flex items-start justify-between">
                        <div class="flex-grow">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="px-2 py-0.5 bg-indigo-50 text-indigo-600 text-[10px] font-bold uppercase rounded-md tracking-wider">Lifestyle</span>
                                <span class="text-slate-400 text-xs">• 2 hours ago</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors">What are the best coffee shops to work from in the downtown area?</h3>
                            <p class="text-slate-500 line-clamp-2">I'm looking for a place with good WiFi, plenty of outlets, and a relatively quiet atmosphere during weekday mornings...</p>
                        </div>
                        <div class="ml-4 text-center px-4 py-2 bg-slate-50 rounded-xl min-w-[80px]">
                            <span class="block text-xl font-bold text-slate-900">12</span>
                            <span class="text-slate-500 text-[10px] uppercase font-bold tracking-widest">Answers</span>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between border-t border-slate-50 pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 rounded-full bg-slate-200"></div>
                            <span class="text-sm font-medium text-slate-600">Sarah Jenkins</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <!-- Action Buttons -->
                            <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all" title="Edit Question">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" title="Delete Question">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                            <span class="flex items-center text-slate-400 text-sm">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> 
                                245
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Question Item 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:border-indigo-200 transition-all cursor-pointer group">
                    <div class="flex items-start justify-between">
                        <div class="flex-grow">
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="px-2 py-0.5 bg-green-50 text-green-600 text-[10px] font-bold uppercase rounded-md tracking-wider">Transport</span>
                                <span class="text-slate-400 text-xs">• 5 hours ago</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-indigo-600 transition-colors">Is the new light rail extension running on schedule?</h3>
                            <p class="text-slate-500 line-clamp-2">Thinking of switching my commute to the new line starting Monday. Has anyone experienced major delays this week?</p>
                        </div>
                        <div class="ml-4 text-center px-4 py-2 bg-slate-50 rounded-xl min-w-[80px]">
                            <span class="block text-xl font-bold text-slate-900">5</span>
                            <span class="text-slate-500 text-[10px] uppercase font-bold tracking-widest">Answers</span>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between border-t border-slate-50 pt-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 rounded-full bg-slate-200"></div>
                            <span class="text-sm font-medium text-slate-600">Mike Thompson</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <!-- Action Buttons -->
                            <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all" title="Edit Question">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" title="Delete Question">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                            <span class="flex items-center text-slate-400 text-sm">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> 
                                112
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="w-full lg:w-72 space-y-6">
                <div class="bg-indigo-600 p-8 rounded-3xl text-white shadow-xl shadow-indigo-100">
                    <h4 class="font-bold text-xl mb-3">Ask a Question</h4>
                    <p class="text-indigo-100 text-sm mb-6">Need help with something local? Our community is here for you.</p>
                    <a href="/login" class="block w-full text-center py-3 bg-white text-indigo-600 font-bold rounded-xl hover:bg-indigo-50 transition-colors">Login to Post</a>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-100">
                    <h4 class="font-bold text-slate-900 mb-4 uppercase tracking-wider text-xs">Trending Topics</h4>
                    <div class="flex flex-wrap gap-2">
                        <button class="px-3 py-1.5 bg-slate-50 text-slate-600 text-xs font-bold rounded-lg hover:bg-slate-100 transition-colors">#Events</button>
                        <button class="px-3 py-1.5 bg-slate-50 text-slate-600 text-xs font-bold rounded-lg hover:bg-slate-100 transition-colors">#Foodie</button>
                        <button class="px-3 py-1.5 bg-slate-50 text-slate-600 text-xs font-bold rounded-lg hover:bg-slate-100 transition-colors">#Nightlife</button>
                        <button class="px-3 py-1.5 bg-slate-50 text-slate-600 text-xs font-bold rounded-lg hover:bg-slate-100 transition-colors">#Safety</button>
                        <button class="px-3 py-1.5 bg-slate-50 text-slate-600 text-xs font-bold rounded-lg hover:bg-slate-100 transition-colors">#Business</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
