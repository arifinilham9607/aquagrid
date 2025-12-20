<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAGRID - System Health Monitor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50">

    <nav class="p-8 flex justify-between items-center max-w-7xl mx-auto w-full">
        <div class="text-2xl font-black text-slate-800 tracking-tighter uppercase italic">
            AQUA<span class="text-indigo-600">GRID</span>
            <span class="ml-3 text-[10px] not-italic font-mono text-slate-400 border-l border-slate-200 pl-3">HEALTH_v12.43.1</span>
        </div>
        
        <a href="{{ url('/') }}" class="text-xs font-black text-slate-400 uppercase tracking-widest hover:text-indigo-600 transition flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to System
        </a>
    </nav>

    <main class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center min-h-[75vh]">
        
        <div class="space-y-8">
            <div class="inline-block px-4 py-2 bg-emerald-100 text-emerald-700 text-[10px] font-black rounded-full uppercase tracking-[0.2em]">
                Environment Status: Optimal
            </div>
            
            <h1 class="text-6xl lg:text-8xl font-black text-slate-900 leading-none tracking-tighter uppercase italic">
                SYSTEM<br><span class="text-indigo-600">HEALTH.</span>
            </h1>

            <div class="grid grid-cols-2 gap-4">
                <div class="p-5 bg-white rounded-3xl border border-slate-100 shadow-sm">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Backend Engine</p>
                    <p class="text-base font-bold text-slate-800">Laravel 12.43.1</p>
                </div>
                <div class="p-5 bg-white rounded-3xl border border-slate-100 shadow-sm">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Infrastructure</p>
                    <p class="text-base font-bold text-emerald-600 italic">Railway Cloud</p>
                </div>
                <div class="p-5 bg-white rounded-3xl border border-slate-100 shadow-sm">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Database System</p>
                    <p class="text-base font-bold text-slate-800">MySQL 9.4.0</p>
                </div>
                <div class="p-5 bg-white rounded-3xl border border-slate-100 shadow-sm">
                    <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Access Protocol</p>
                    <p class="text-base font-bold text-indigo-600">RBAC / Middleware</p>
                </div>
            </div>

            <p class="text-lg text-slate-500 font-medium max-w-md leading-relaxed">
                Full-stack infrastructure analysis showing real-time performance metrics and security implementation protocols for the AQUAGRID production node.
            </p>
        </div>

        <div class="relative h-[500px] flex items-center justify-center lg:justify-end">
            
            <div class="absolute -z-10 w-full h-full bg-indigo-100 rounded-full blur-[120px] opacity-40"></div>

            <div class="relative z-20 transform rotate-2 w-full max-w-md bg-slate-900 p-8 rounded-[3rem] shadow-2xl transition-all duration-500 hover:rotate-0">
                <div class="absolute -top-4 -right-4 bg-indigo-600 px-6 py-3 rounded-2xl shadow-xl">
                    <p class="text-[10px] font-black text-white uppercase tracking-widest">Security_Layer</p>
                </div>
                <div class="space-y-6">
                    <h4 class="text-xs font-black text-white uppercase tracking-widest border-b border-slate-800 pb-4">Protocols Active</h4>
                    <div class="grid grid-cols-1 gap-3">
                        <div class="flex items-center gap-3 text-[10px] text-slate-400 font-bold bg-slate-800/50 p-3 rounded-2xl">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full"></div> CSRF_PROTECTION_ENABLED
                        </div>
                        <div class="flex items-center gap-3 text-[10px] text-slate-400 font-bold bg-slate-800/50 p-3 rounded-2xl">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full"></div> BCrypt_PASSWORD_HASHING
                        </li>
                    </div>
                </div>
            </div>

            <div class="absolute z-30 transform -rotate-6 -translate-x-32 translate-y-20 w-64 bg-white p-6 rounded-[2.5rem] shadow-2xl border border-slate-100 hidden lg:block">
                <p class="text-[10px] font-black text-slate-400 uppercase mb-4">Instance Health</p>
                <div class="space-y-4">
                    <div class="flex justify-between items-end">
                        <span class="text-3xl font-black text-slate-900">24<span class="text-xs ml-1 text-slate-400 font-mono">ms</span></span>
                        <span class="text-[9px] font-black text-cyan-600 uppercase tracking-widest">Latency</span>
                    </div>
                    <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-cyan-500 h-full w-[70%]"></div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>
</html>