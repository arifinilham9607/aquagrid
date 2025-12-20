<x-guest-layout>
    <div class="fixed inset-0 bg-[#0a0f1d] z-0"></div>

    <div class="relative z-10 flex min-h-screen font-sans text-slate-300">
        
        <div class="hidden lg:flex w-80 bg-[#0f172a] border-r border-slate-800 p-8 flex-col justify-between shadow-2xl">
            <div>
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-2 h-2 bg-cyan-500 rounded-full animate-pulse"></div>
                    <h3 class="text-cyan-500 font-mono text-[10px] font-bold tracking-[0.3em] uppercase">Tech Stack Specs</h3>
                </div>
                
                <div class="space-y-6">
                    <div class="group">
                        <p class="text-[9px] text-slate-500 uppercase font-black tracking-widest mb-2">Backend Architecture</p>
                        <div class="p-3 bg-slate-950 rounded border border-slate-800 group-hover:border-cyan-500/50 transition-colors">
                            <p class="text-white font-mono text-xs font-bold">Laravel v12.43.1</p>
                            <p class="text-[9px] text-slate-500 mt-1">PHP 8.2.30 (Latest Engine)</p>
                        </div>
                    </div>

                    <div class="group">
                        <p class="text-[9px] text-slate-500 uppercase font-black tracking-widest mb-2">Relational Database</p>
                        <div class="p-3 bg-slate-950 rounded border border-slate-800 group-hover:border-cyan-500/50 transition-colors">
                            <p class="text-white font-mono text-xs font-bold">MySQL 9.4.0</p>
                            <p class="text-[9px] text-slate-500 mt-1">Structured Query Language</p>
                        </div>
                    </div>

                    <div class="group">
                        <p class="text-[9px] text-slate-500 uppercase font-black tracking-widest mb-2">Cloud Infrastructure</p>
                        <div class="p-3 bg-slate-950 rounded border border-slate-800 group-hover:border-emerald-500/50 transition-colors">
                            <p class="text-emerald-400 font-mono text-xs font-bold">Railway Deployment</p>
                            <p class="text-[9px] text-slate-500 mt-1">Edge Computing & CI/CD</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-6 border-t border-slate-800">
                <p class="text-[9px] font-mono text-slate-600 uppercase leading-relaxed">
                    AQUAGRID_PROPRIETARY_SYSTEM<br>
                    LEAD_ENGINEER: M_ARIFIN_ILHAM
                </p>
            </div>
        </div>

        <div class="flex-1 flex flex-col">
            <header class="p-6 md:p-10 flex justify-between items-center border-b border-slate-800/50 bg-[#0a0f1d]/50 backdrop-blur-md sticky top-0 z-20">
                <div>
                    <h2 class="text-2xl font-black text-white tracking-tighter uppercase italic">System Health Monitor</h2>
                    <p class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.2em] mt-1">Live Environment Diagnosis & Performance Metrics</p>
                </div>
                <a href="{{ url('/') }}" class="text-[10px] font-mono font-black text-cyan-500 border border-cyan-500/30 px-6 py-2 rounded-full hover:bg-cyan-500 hover:text-slate-950 transition-all shadow-lg shadow-cyan-500/10 uppercase tracking-widest">
                    Return to System
                </a>
            </header>

            <main class="p-6 md:p-10 grid grid-cols-1 xl:grid-cols-2 gap-8 items-start">
                
                <section class="bg-[#0f172a] rounded-3xl border border-slate-800 overflow-hidden shadow-2xl">
                    <div class="bg-slate-800/50 px-5 py-3 flex justify-between items-center border-b border-slate-800">
                        <div class="flex gap-1.5">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-500/40"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/40"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-500/40"></div>
                        </div>
                        <span class="text-[9px] font-mono text-slate-500 font-bold uppercase">Instance: production_main_node</span>
                    </div>
                    
                    <div class="p-8 space-y-8">
                        <div>
                            <div class="flex justify-between text-[10px] uppercase text-slate-500 font-black tracking-widest mb-3">
                                <span>Network Load</span>
                                <span class="text-cyan-400">OPTIMIZED</span>
                            </div>
                            <div class="h-1.5 bg-slate-950 rounded-full border border-slate-800 overflow-hidden">
                                <div class="bg-cyan-500 h-full w-[64%] shadow-[0_0_10px_rgba(6,182,212,0.5)] animate-pulse"></div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-slate-950 p-4 rounded-2xl border border-slate-800">
                                <span class="block text-[9px] text-slate-500 uppercase font-black mb-1">Server Latency</span>
                                <span class="text-white font-mono text-lg font-bold">24ms</span>
                            </div>
                            <div class="bg-slate-950 p-4 rounded-2xl border border-slate-800">
                                <span class="block text-[9px] text-slate-500 uppercase font-black mb-1">System Uptime</span>
                                <span class="text-emerald-400 font-mono text-lg font-bold">99.9%</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-indigo-600/5 rounded-3xl border border-indigo-500/10 p-8 space-y-6">
                    <h4 class="text-xs font-black text-indigo-400 uppercase tracking-widest border-l-2 border-indigo-500 pl-4">Security Implementation</h4>
                    <p class="text-xs leading-relaxed text-slate-400">
                        AQUAGRID implements a robust <span class="text-white font-bold">Role-Based Access Control (RBAC)</span> system, strictly separating Admin and Staff permissions at the Laravel 12 Middleware layer. All sensitive data is encrypted using the industry-standard Bcrypt algorithm via <span class="text-white font-bold">Hash::make()</span>.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                        <div class="flex items-center gap-3 text-[10px] font-bold text-slate-300">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            CSRF PROTECTION ENABLED
                        </div>
                        <div class="flex items-center gap-3 text-[10px] font-bold text-slate-300">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            FORCE HTTPS ENFORCED
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-guest-layout>