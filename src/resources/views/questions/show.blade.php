@extends('layouts.app')

@section('title', 'Question Detail - LocalMind')

@section('content')
<div class="bg-slate-50 min-h-screen py-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Question Section -->
        <article class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-8 mb-8 relative overflow-hidden">
            <div class="absolute top-0 right-0 p-6 flex space-x-2">
                <button class="p-3 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-2xl transition-all" title="Edit Question">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                </button>
                <button class="p-3 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-2xl transition-all" title="Delete Question">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
            </div>

            <div class="flex items-center space-x-3 mb-6">
                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 text-xs font-bold uppercase rounded-lg tracking-wider">Lifestyle</span>
                <span class="text-slate-400 text-sm">Asked 2 hours ago</span>
            </div>

            <h1 class="text-3xl font-extrabold text-slate-900 mb-6 leading-tight">
                What are the best coffee shops to work from in the downtown area?
            </h1>

            <div class="prose prose-slate max-w-none text-slate-600 mb-8 leading-relaxed">
                <p>I'm recently moved to the downtown area and I'm looking for a few spots where I can bring my laptop and get some work done. Ideally, they should have:</p>
                <ul class="list-disc pl-5 space-y-2 mt-4">
                    <li>Reliable and fast WiFi</li>
                    <li>Plenty of power outlets</li>
                    <li>Not too loud (some background noise is fine, but no loud music)</li>
                    <li>Good coffee is obviously a huge plus!</li>
                </ul>
                <p class="mt-4">Are there any hidden gems I should know about? Thanks in advance!</p>
            </div>

            <div class="flex items-center justify-between border-t border-slate-50 pt-8">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold">
                        SJ
                    </div>
                    <div>
                        <p class="font-bold text-slate-900">Sarah Jenkins</p>
                        <p class="text-slate-500 text-xs">Community Member • 128 Rep</p>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <button class="flex items-center text-slate-400 hover:text-indigo-600 transition-colors group">
                        <svg class="w-5 h-5 mr-1 group-hover:fill-indigo-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        <span class="font-bold text-sm">24</span>
                    </button>
                    <button class="flex items-center text-slate-400 hover:text-indigo-600 transition-colors group">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                        <span class="font-bold text-sm">Share</span>
                    </button>
                </div>
            </div>
        </article>

        <!-- Responses Header -->
        <div class="flex items-center justify-between mb-8 px-4">
            <h2 class="text-2xl font-bold text-slate-900">2 Community Answers</h2>
            <div class="flex space-x-2">
                <button class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50 transition-all">Most Helpful</button>
                <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl text-sm font-bold hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100 italic">Answer</button>
            </div>
        </div>

        <!-- Responses List -->
        <div class="space-y-6">
            <!-- Answer 1 -->
            <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-8 transition-all hover:border-indigo-100 group">
                <div class="flex items-start justify-between mb-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600 font-bold">
                            MT
                        </div>
                        <div>
                            <p class="font-bold text-slate-900">Mark Thompson</p>
                            <span class="text-slate-400 text-xs">Answered 1 hour ago</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all" title="Edit Answer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" title="Delete Answer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
                <div class="text-slate-600 leading-relaxed mb-6">
                    <p>I highly recommend **"The Daily Roast"** on 4th Street. It has huge tables, tons of outlets under the benches, and the WiFi is consistently over 100Mbps. It gets busy around 11 AM, but if you're there early, it's perfect.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="flex items-center px-4 py-2 bg-slate-50 rounded-xl text-slate-600 hover:bg-indigo-50 hover:text-indigo-600 transition-all group font-bold text-xs uppercase tracking-widest">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        Helpful (12)
                    </button>
                    <button class="text-slate-400 hover:text-slate-600 transition-colors font-bold text-xs uppercase tracking-widest">Reply</button>
                </div>
            </div>

            <!-- Answer 2 -->
            <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-8 transition-all hover:border-indigo-100 group">
                <div class="flex items-start justify-between mb-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600 font-bold">
                            LC
                        </div>
                        <div>
                            <p class="font-bold text-slate-900">Lisa Chen</p>
                            <span class="text-slate-400 text-xs">Answered 45 mins ago</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all" title="Edit Answer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </button>
                        <button class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" title="Delete Answer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
                <div class="text-slate-600 leading-relaxed mb-6">
                    <p>**"Brew & Byte"** is literally designed for remote workers. They have soundproof booths you can rent by the hour, but the open seating area is also great and very quiet. Great espresso too!</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="flex items-center px-4 py-2 bg-slate-50 rounded-xl text-slate-600 hover:bg-indigo-50 hover:text-indigo-600 transition-all group font-bold text-xs uppercase tracking-widest">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                        Helpful (4)
                    </button>
                    <button class="text-slate-400 hover:text-slate-600 transition-colors font-bold text-xs uppercase tracking-widest">Reply</button>
                </div>
            </div>
        </div>

        <!-- Add Answer Form -->
        <div class="mt-12 bg-indigo-600 rounded-[3rem] p-10 text-white shadow-2xl shadow-indigo-100">
            <h3 class="text-2xl font-bold mb-6">Your Answer</h3>
            <textarea 
                class="w-full h-40 bg-white/10 border border-white/20 rounded-2xl p-6 text-white placeholder-indigo-200 outline-none focus:ring-2 focus:ring-white/50 transition-all mb-6"
                placeholder="Write your advice here..."></textarea>
            <div class="flex justify-end">
                <button class="px-8 py-3 bg-white text-indigo-600 font-bold rounded-2xl hover:bg-indigo-50 transition-all transform hover:-translate-y-1">
                    Post Answer
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
