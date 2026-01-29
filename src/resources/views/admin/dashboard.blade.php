@extends('layouts.app')

@section('title', 'Admin Dashboard - LocalMind')

@section('content')
<div class="bg-indigo-900 min-h-screen">
    <!-- Sub-Navbar for Admin -->
    <div class="bg-indigo-800/50 backdrop-blur-md border-b border-indigo-700/50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between text-white">
            <h2 class="text-xl font-bold">Admin <span class="text-indigo-300">Hub</span></h2>
            <div class="flex space-x-6 text-sm font-medium">
                <a href="#" class="text-white">Overview</a>
                <a href="#" class="text-indigo-200 hover:text-white transition-colors">Manage Users</a>
                <a href="#" class="text-indigo-200 hover:text-white transition-colors">Questions</a>
                <a href="#" class="text-indigo-200 hover:text-white transition-colors">Reports</a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
            <div class="bg-indigo-800/40 p-6 rounded-3xl border border-indigo-700/50 text-white">
                <span class="text-indigo-300 text-sm font-bold uppercase tracking-widest">Total Users</span>
                <p class="text-4xl font-bold mt-2">1,284</p>
                <span class="text-green-400 text-xs font-bold mt-2 inline-block">+12% this month</span>
            </div>
            <div class="bg-indigo-800/40 p-6 rounded-3xl border border-indigo-700/50 text-white">
                <span class="text-indigo-300 text-sm font-bold uppercase tracking-widest">Questions</span>
                <p class="text-4xl font-bold mt-2">5,492</p>
                <span class="text-green-400 text-xs font-bold mt-2 inline-block">+5% this month</span>
            </div>
            <div class="bg-indigo-800/40 p-6 rounded-3xl border border-indigo-700/50 text-white">
                <span class="text-indigo-300 text-sm font-bold uppercase tracking-widest">Active Reports</span>
                <p class="text-4xl font-bold mt-2">24</p>
                <span class="text-red-400 text-xs font-bold mt-2 inline-block">Needs attention</span>
            </div>
            <div class="bg-indigo-800/40 p-6 rounded-3xl border border-indigo-700/50 text-white">
                <span class="text-indigo-300 text-sm font-bold uppercase tracking-widest">Global Rep</span>
                <p class="text-4xl font-bold mt-2">42k</p>
                <span class="text-indigo-300 text-xs font-bold mt-2 inline-block">Community health</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activity Table -->
            <div class="lg:col-span-2 bg-indigo-800/20 rounded-[2.5rem] p-8 border border-indigo-700/30">
                <h3 class="text-xl font-bold text-white mb-6">Recent Activity</h3>
                <div class="space-y-4">
                    @for ($i = 0; $i < 5; $i++)
                    <div class="flex items-center justify-between p-4 bg-indigo-800/40 rounded-2xl border border-indigo-700/20 group hover:bg-indigo-800/60 transition-all cursor-pointer">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center font-bold text-white">U</div>
                            <div>
                                <p class="text-white font-bold text-sm">New user registration: Alex Rivera</p>
                                <p class="text-indigo-300 text-xs">2 minutes ago</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-indigo-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    @endfor
                </div>
                <button class="w-full mt-6 py-3 border border-indigo-700/50 rounded-2xl text-indigo-300 font-bold hover:bg-indigo-700/30 transition-all">View All Activity</button>
            </div>

            <!-- Quick Actions -->
            <div class="space-y-6">
                <div class="bg-gradient-to-br from-indigo-600 to-purple-700 p-8 rounded-[2.5rem] text-white shadow-2xl">
                    <h3 class="text-xl font-bold mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <button class="w-full py-3 bg-white/10 hover:bg-white/20 rounded-xl text-sm font-bold transition-all text-left px-4 flex items-center">
                             <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                             Invite Moderators
                        </button>
                        <button class="w-full py-3 bg-white/10 hover:bg-white/20 rounded-xl text-sm font-bold transition-all text-left px-4 flex items-center">
                             <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                             Global Settings
                        </button>
                    </div>
                </div>

                <div class="bg-indigo-800/40 p-8 rounded-[2.5rem] border border-indigo-700/50 text-white">
                    <h3 class="text-lg font-bold mb-4">System Health</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-indigo-300">CPU Usage</span>
                                <span>24%</span>
                            </div>
                            <div class="w-full h-1.5 bg-indigo-900 rounded-full overflow-hidden">
                                <div class="w-1/4 h-full bg-indigo-500"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-indigo-300">Memory Usage</span>
                                <span>58%</span>
                            </div>
                            <div class="w-full h-1.5 bg-indigo-900 rounded-full overflow-hidden">
                                <div class="w-[58%] h-full bg-indigo-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
