<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAGRID - Source_Health</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700&family=Plus+Jakarta+Sans:wght@800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Fira Code', monospace; }
        .plus-jakarta { font-family: 'Plus Jakarta Sans', sans-serif; }
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #0d1117; }
        ::-webkit-scrollbar-thumb { background: #30363d; border-radius: 10px; }
    </style>
</head>
<body class="bg-[#0d1117] text-[#c9d1d9] antialiased">

    <div class="w-full bg-[#161b22] border-b border-[#30363d] px-4 py-2 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center gap-4 overflow-hidden">
            <div class="hidden sm:flex gap-1.5">
                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
            </div>
            <div class="bg-[#0d1117] px-3 py-1 rounded-t-lg border-t border-x border-[#30363d] text-[10px] text-cyan-400 whitespace-nowrap">
                <span class="text-blue-400">src</span> > health.blade.php
            </div>
        </div>
        <a href="{{ url('/') }}" class="text-[9px] font-bold text-slate-500 hover:text-white transition uppercase">
            // close_instance
        </a>
    </div>

    <main class="max-w-[1400px] mx-auto p-6 md:p-12 lg:p-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <div class="lg:col-span-7 space-y-10">
                <div class="space-y-4">
                    <p class="text-blue-400 text-xs font-bold tracking-widest">// prod_environment_v12</p>
                    <h1 class="plus-jakarta text-5xl md:text-7xl lg:text-8xl font-black text-white leading-none tracking-tighter italic">
                        SYSTEM<br><span class="text-indigo-500">HEALTH_</span>
                    </h1>
                </div>

                <div class="bg-[#161b22] rounded-xl border border-[#30363d] overflow-x-auto">
                    <table class="w-full text-left text-[11px] min-w-[500px]">
                        <thead>
                            <tr class="bg-[#21262d] text-slate-500 uppercase tracking-widest border-b border-[#30363d]">
                                <th class="p-4">Entity</th>
                                <th class="p-4">Version/Build</th>
                                <th class="p-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#30363d]">
                            <tr><td class="p-4 text-blue-300">Laravel_Core</td><td class="p-4 text-white">v12.43.1</td><td class="p-4 text-emerald-500 font-bold">STABLE</td></tr>
                            <tr><td class="p-4 text-blue-300">Runtime_PHP</td><td class="p-4 text-white">8.2.30</td><td class="p-4 text-emerald-500 font-bold">READY</td></tr>
                            <tr><td class="p-4 text-blue-300">Cloud_Edge</td><td class="p-4 text-white">Railway_SVR</td><td class="p-4 text-emerald-500 font-bold">ONLINE</td></tr>
                            <tr><td class="p-4 text-blue-300">Security_RBAC</td><td class="p-4 text-white">Middleware</td><td class="p-4 text-indigo-400 font-bold">ENFORCED</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="lg:col-span-5 flex flex-col gap-6 pt-4 lg:pt-20">
                <div class="bg-[#161b22] border border-[#30363d] rounded-xl shadow-2xl overflow-hidden transform lg:-rotate-2 transition-transform hover:rotate-0">
                    <div class="bg-[#21262d] px-4 py-2 border-b border-[#30363d] flex justify-between items-center">
                        <span class="text-[9px] font-bold text-slate-500 uppercase italic">runtime.log</span>
                        <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <div class="flex justify-between text-[9px] mb-2">
                                <span class="text-slate-500">Latency:</span>
                                <span class="text-cyan-400 font-bold tracking-widest uppercase">24ms (Optimal)</span>
                            </div>
                            <div class="w-full bg-[#0d1117] h-1.5 rounded-full border border-[#30363d] overflow-hidden">
                                <div class="bg-cyan-500 h-full w-[65%] shadow-[0_0_10px_rgba(6,182,212,0.4)]"></div>
                            </div>
                        </div>
                        <div class="text-[10px] text-slate-500 leading-relaxed italic">
                            $ php artisan system:check<br>
                            > Data Integrity: 100% Verified<br>
                            > Cache Driver: Redis/File
                        </div>
                    </div>
                </div>

                <div class="bg-indigo-950/20 backdrop-blur-md border border-indigo-500/20 rounded-xl p-6 transform lg:rotate-1">
                    <h4 class="text-[10px] font-black text-indigo-400 uppercase tracking-widest mb-4 italic">Enc_Shield_Active</h4>
                    <ul class="space-y-2 text-[9px] font-bold">
                        <li class="flex items-center gap-2 text-emerald-400"><span class="text-slate-600">0x1</span> [CSRF_ENABLED]</li>
                        <li class="flex items-center gap-2 text-emerald-400"><span class="text-slate-600">0x2</span> [BCRYPT_ACTIVE]</li>
                        <li class="flex items-center gap-2 text-indigo-400"><span class="text-slate-600">0x3</span> [RBAC_AUTH]</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="w-full bg-[#161b22] border-t border-[#30363d] px-8 py-3 text-[9px] text-slate-600 flex justify-between fixed bottom-0 z-50 italic">
        <span>AQUAGRID // PRODUCTION_BUILD</span>
        <span>ENGINEER: M_ARIFIN_ILHAM</span>
    </footer>

</body>
</html>