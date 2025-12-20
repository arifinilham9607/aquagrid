<x-guest-layout>
    <nav class="p-8 flex justify-between items-center max-w-7xl mx-auto">
        <div class="text-2xl font-black text-slate-800 tracking-tighter uppercase italic">
            AQUA<span class="text-indigo-600">GRID</span>
            <span class="ml-2 text-[10px] not-italic font-mono text-slate-400">HEALTH_v12.43.1</span>
        </div>
        
        <div class="space-x-4">
            <a href="{{ url('/') }}" class="text-xs font-black text-slate-400 uppercase tracking-widest hover:text-indigo-600 transition">
                ← Return Home
            </a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center min-h-[70vh] py-12">
        
        <div class="space-y-8">
            <div class="inline-block px-4 py-2 bg-emerald-100 text-emerald-700 text-[10px] font-black rounded-full uppercase tracking-[0.2em]">
                System Operational Status: Active
            </div>
            
            <h1 class="text-6xl lg:text-7xl font-black text-slate-900 leading-none tracking-tighter uppercase italic">
                SYSTEM<br><span class="text-indigo-600">HEALTH.</span>
            </h1>

            <div class="grid grid-cols-2 gap-4 pt-4">
                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Backend</p>
                    <p class="text-sm font-bold text-slate-800">Laravel 12.43.1</p>
                </div>
                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Server</p>
                    <p class="text-sm font-bold text-emerald-600">Railway Cloud</p>
                </div>
                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Database</p>
                    <p class="text-sm font-bold text-slate-800">MySQL 9.4.0</p>
                </div>
                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Security</p>
                    <p class="text-sm font-bold text-indigo-600">RBAC Enabled</p>
                </div>
            </div>

            <p class="text-sm text-slate-500 font-medium leading-relaxed max-w-md">
                AQUAGRID infrastructure uses a monolithic MVC architecture with automated CI/CD pipelines, ensuring 99.9% uptime for aquaculture monitoring.
            </p>
        </div>

        <div class="relative h-[500px] flex items-center justify-center lg:justify-end">
            
            <div class="absolute -z-10 w-80 h-80 bg-indigo-200 rounded-full blur-[120px] opacity-30"></div>

            <div class="absolute z-10 transform -rotate-6 -translate-x-16 translate-y-12 w-64 lg:w-72 bg-white p-6 rounded-[2.5rem] shadow-2xl border border-slate-100 transition-all duration-500 hover:rotate-0">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4 italic">Performance</p>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-[9px] font-bold mb-1">
                            <span>Network Load</span>
                            <span class="text-cyan-500 italic">Stable</span>
                        </div>
                        <div class="h-1.5 bg-slate-100 rounded-full overflow-hidden">
                            <div class="bg-cyan-500 h-full w-[65%]"></div>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <span class="text-2xl font-black text-slate-800">24<span class="text-xs ml-1 uppercase text-slate-400">ms</span></span>
                        <span class="text-[9px] font-black text-emerald-500 uppercase">Latency</span>
                    </div>
                </div>
            </div>

            <div class="relative z-20 transform rotate-3 -translate-y-12 w-full max-w-[320px] bg-slate-900 p-8 rounded-[3rem] shadow-2xl transition-all duration-500 hover:rotate-0">
                <div class="absolute -top-4 -right-4 bg-indigo-600 px-6 py-3 rounded-2xl shadow-xl">
                    <p class="text-[10px] font-black text-white uppercase tracking-widest">Secure_Layer</p>
                </div>
                <div class="space-y-4">
                    <h4 class="text-xs font-black text-white uppercase tracking-widest">Encryption Protocols</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-[10px] text-slate-400 font-bold">
                            <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> CSRF_DEFENSE_ACTIVE
                        </li>
                        <li class="flex items-center gap-2 text-[10px] text-slate-400 font-bold">
                            <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> BCrypt_HASH_SALTING
                        </li>
                        <li class="flex items-center gap-2 text-[10px] text-slate-400 font-bold">
                            <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> HTTPS_REDIRECT
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </main>
</x-guest-layout>