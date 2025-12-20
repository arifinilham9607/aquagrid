<x-guest-layout>
    <div class="fixed inset-0 bg-[#0a0f1d] z-0"></div>

    <div class="relative z-10 min-h-screen flex flex-col font-sans text-slate-300">
        
        <nav class="w-full bg-[#0f172a] border-b border-slate-800 p-6 shadow-2xl">
            <div class="max-w-[1600px] mx-auto flex flex-wrap lg:flex-nowrap items-center justify-between gap-8">
                <div class="flex items-center gap-3 pr-8 border-r border-slate-800">
                    <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse shadow-[0_0_10px_rgba(6,182,212,0.8)]"></div>
                    <h2 class="text-xl font-black text-white tracking-tighter uppercase italic">AQUAGRID <span class="text-cyan-500 text-xs font-mono not-italic ml-2">v12.43.1</span></h2>
                </div>

                <div class="flex-grow grid grid-cols-2 md:grid-cols-4 gap-6 px-4">
                    <div>
                        <p class="text-[9px] text-slate-500 uppercase font-black tracking-widest mb-1">Architecture</p>
                        <p class="text-white font-mono text-xs">Laravel 12 (MVC)</p>
                    </div>
                    <div>
                        <p class="text-[9px] text-slate-500 uppercase font-black tracking-widest mb-1">Runtime</p>
                        <p class="text-white font-mono text-xs">PHP 8.2.30</p>
                    </div>
                    <div>
                        <p class="text-[9px] text-slate-500 uppercase font-black tracking-widest mb-1">Database</p>
                        <p class="text-white font-mono text-xs">MySQL 9.4.0</p>
                    </div>
                    <div>
                        <p class="text-[9px] text-slate-500 uppercase font-black tracking-widest mb-1">Cloud Host</p>
                        <p class="text-emerald-400 font-mono text-xs font-bold uppercase tracking-tighter italic">Railway_Deploy</p>
                    </div>
                </div>

                <a href="{{ url('/') }}" class="text-[10px] font-mono font-black text-cyan-500 border border-cyan-500/30 px-6 py-2.5 rounded hover:bg-cyan-500 hover:text-slate-950 transition-all uppercase tracking-widest">
                    Return_to_Dashboard
                </a>
            </div>
        </nav>

        <main class="flex-grow p-6 md:p-10 max-w-[1600px] mx-auto w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                
                <div class="lg:col-span-4 flex flex-col justify-center space-y-4 pr-6">
                    <h3 class="text-5xl font-black text-white leading-none tracking-tighter uppercase italic">System<br><span class="text-indigo-500">Health</span><br>Monitor.</h3>
                    <p class="text-sm text-slate-400 leading-relaxed font-medium">
                        Live diagnostic environment monitoring performance metrics, security protocols, and infrastructure stability for AQUAGRID aquaculture systems.
                    </p>
                    <div class="pt-4 flex gap-3">
                        <span class="px-3 py-1 bg-emerald-500/10 text-emerald-500 border border-emerald-500/20 text-[9px] font-black uppercase tracking-widest rounded">Operational</span>
                        <span class="px-3 py-1 bg-cyan-500/10 text-cyan-500 border border-cyan-500/20 text-[9px] font-black uppercase tracking-widest rounded">Secure</span>
                    </div>
                </div>

                <div class="lg:col-span-4 bg-[#0f172a] rounded-3xl border border-slate-800 shadow-2xl flex flex-col overflow-hidden">
                    <div class="bg-slate-800/50 px-5 py-3 flex justify-between items-center border-b border-slate-800">
                        <span class="text-[9px] font-mono text-slate-400 font-bold uppercase">Production_Metrics</span>
                        <div class="flex gap-1">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-600"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-600"></div>
                        </div>
                    </div>
                    <div class="p-8 space-y-8 flex-grow flex flex-col justify-center">
                        <div>
                            <div class="flex justify-between text-[9px] uppercase text-slate-500 font-black tracking-widest mb-3">
                                <span>Network Latency</span>
                                <span class="text-cyan-400 font-mono">24ms</span>
                            </div>
                            <div class="h-1.5 bg-slate-950 rounded-full border border-slate-800 overflow-hidden">
                                <div class="bg-cyan-500 h-full w-[64%] shadow-[0_0_10px_rgba(6,182,212,0.5)]"></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-slate-950/50 p-4 rounded-2xl border border-slate-800">
                                <span class="block text-[8px] text-slate-500 uppercase font-black mb-1 italic">Uptime</span>
                                <span class="text-white font-mono text-xl font-bold">99.9%</span>
                            </div>
                            <div class="bg-slate-950/50 p-4 rounded-2xl border border-slate-800">
                                <span class="block text-[8px] text-slate-500 uppercase font-black mb-1 italic">Traffic</span>
                                <span class="text-white font-mono text-xl font-bold">Stable</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 bg-indigo-600/5 rounded-3xl border border-indigo-500/10 p-8 flex flex-col justify-center">
                    <h4 class="text-xs font-black text-indigo-400 uppercase tracking-widest mb-4 flex items-center gap-2">
                        <div class="w-1 h-4 bg-indigo-500"></div> Security Layer
                    </h4>
                    <p class="text-xs leading-relaxed text-slate-400 mb-6">
                        System protected by <span class="text-white">CSRF Defense</span> and <span class="text-white">RBAC Middleware</span>. User authentication utilizes industry-standard Bcrypt hashing protocols to ensure data integrity.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-[10px] font-bold text-slate-300 bg-slate-900/50 p-3 rounded-xl border border-slate-800/50">
                            <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>
                            SSL/HTTPS_ENFORCED
                        </div>
                        <div class="flex items-center gap-3 text-[10px] font-bold text-slate-300 bg-slate-900/50 p-3 rounded-xl border border-slate-800/50">
                            <svg class="w-3.5 h-3.5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path></svg>
                            MIDDLEWARE_PROTECTED
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-guest-layout>