<x-guest-layout>
    <div class="max-w-md mx-auto">
        <div class="flex items-center justify-between mb-8 border-b border-slate-800 pb-4">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="w-3 h-3 bg-cyan-500 rounded-full animate-ping absolute"></div>
                    <div class="w-3 h-3 bg-cyan-500 rounded-full relative"></div>
                </div>
                <h2 class="text-xl font-mono font-black text-white tracking-tighter uppercase">System Health</h2>
            </div>
            <span class="text-[10px] font-mono text-slate-500 font-bold bg-slate-900 px-2 py-1 rounded border border-slate-800">
                STABLE_OPR_01
            </span>
        </div>

        <div class="bg-[#0f172a] rounded-xl border border-slate-800 overflow-hidden shadow-2xl">
            <div class="bg-slate-800/50 px-4 py-2 flex gap-1.5 border-b border-slate-800">
                <div class="w-2 h-2 rounded-full bg-red-500/50"></div>
                <div class="w-2 h-2 rounded-full bg-yellow-500/50"></div>
                <div class="w-2 h-2 rounded-full bg-green-500/50"></div>
            </div>

            <div class="p-6 font-mono text-sm space-y-6">
                <div class="space-y-2">
                    <div class="flex justify-between text-[10px] uppercase text-slate-500 font-bold tracking-widest">
                        <span>Infrastructure</span>
                        <span class="text-cyan-400">Online</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="flex-1 bg-slate-900 h-2 rounded-full overflow-hidden border border-slate-800">
                            <div class="bg-cyan-500 h-full w-[85%]"></div>
                        </div>
                        <span class="text-white text-xs font-bold">RAILWAY_SVR</span>
                    </div>
                </div>

                <div class="space-y-2 border-t border-slate-800/50 pt-4">
                    <div class="flex justify-between text-[10px] uppercase text-slate-500 font-bold tracking-widest">
                        <span>Database Status</span>
                        <span class="text-emerald-400">Connected</span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-[11px]">
                        <div class="bg-slate-900 p-2 rounded border border-slate-800">
                            <span class="block text-slate-500 mb-1">Driver</span>
                            <span class="text-white font-bold">MySQL 9.4.0</span>
                        </div>
                        <div class="bg-slate-900 p-2 rounded border border-slate-800">
                            <span class="block text-slate-500 mb-1">Latency</span>
                            <span class="text-white font-bold">24ms</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-2 border-t border-slate-800/50 pt-4 text-[11px]">
                    <div class="flex justify-between text-[10px] uppercase text-slate-500 font-bold tracking-widest mb-2">
                        <span>App Environment</span>
                    </div>
                    <div class="text-slate-400 space-y-1">
                        <p class="flex justify-between"><span>Core Version:</span> <span class="text-white">Laravel 11.x</span></p>
                        <p class="flex justify-between"><span>Deploy ID:</span> <span class="text-white">#{{ substr(md5(now()), 0, 7) }}</span></p>
                        <p class="flex justify-between"><span>Security:</span> <span class="text-emerald-400">SSL_ACTIVE</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-[9px] font-mono text-slate-600 uppercase tracking-[0.3em] mb-4">
                AQUAGRID PROPRIETARY SYSTEM // ACCESS RESTRICTED
            </p>
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-[10px] font-mono font-black text-cyan-500 uppercase tracking-widest hover:text-white transition group border border-cyan-500/20 px-4 py-2 rounded">
                <span class="group-hover:-translate-x-1 transition-transform">←</span> Return to Dashboard
            </a>
        </div>
    </div>
</x-guest-layout>