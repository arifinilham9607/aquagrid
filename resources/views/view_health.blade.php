<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAGRID - Source_Health_Monitor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700&family=Plus+Jakarta+Sans:wght@800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Fira Code', monospace; }
        .plus-jakarta { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#0d1117] text-[#c9d1d9] overflow-x-hidden">

    <div class="w-full bg-[#161b22] border-b border-[#30363d] px-4 py-2 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center gap-4">
            <div class="flex gap-1.5">
                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
            </div>
            <div class="bg-[#0d1117] px-4 py-1 rounded-t-lg border-t border-x border-[#30363d] text-[11px] text-cyan-400 flex items-center gap-2">
                <span class="text-blue-400">index.php</span> > view_health.blade.php
            </div>
        </div>
        <a href="{{ url('/') }}" class="text-[10px] font-bold text-slate-500 hover:text-white transition uppercase tracking-tighter">
            // exit_terminal
        </a>
    </div>

    <main class="max-w-[1600px] mx-auto p-8 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center min-h-[85vh]">
        
        <div class="lg:col-span-6 space-y-10">
            <div class="space-y-4">
                <p class="text-blue-400 text-sm font-bold tracking-tighter italic">// environmental_diagnostics</p>
                <h1 class="plus-jakarta text-6xl lg:text-8xl font-black text-white leading-none tracking-tighter uppercase italic">
                    SYSTEM<br><span class="text-indigo-500">HEALTH_</span>
                </h1>
            </div>

            <div class="bg-[#161b22] rounded-xl border border-[#30363d] overflow-hidden shadow-2xl">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="bg-[#21262d] text-slate-400 uppercase text-[9px] tracking-widest border-b border-[#30363d]">
                            <th class="p-4">Parameter</th>
                            <th class="p-4">Configuration_Value</th>
                            <th class="p-4">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#30363d]">
                        <tr>
                            <td class="p-4 text-blue-300">Framework_Core</td>
                            <td class="p-4 font-bold text-white">Laravel v12.43.1</td>
                            <td class="p-4"><span class="text-emerald-500">✔ STABLE</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 text-blue-300">Deployment_Node</td>
                            <td class="p-4 font-bold text-white italic">Railway_Edge_SVR</td>
                            <td class="p-4"><span class="text-emerald-500">✔ ACTIVE</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 text-blue-300">DB_Engine</td>
                            <td class="p-4 font-bold text-white">MySQL 9.4.0 (Relational)</td>
                            <td class="p-4"><span class="text-emerald-500">✔ CONNECTED</span></td>
                        </tr>
                        <tr>
                            <td class="p-4 text-blue-300">Security_Auth</td>
                            <td class="p-4 font-bold text-white italic">RBAC / Middleware</td>
                            <td class="p-4"><span class="text-indigo-400">✔ ENFORCED</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex gap-4 items-center opacity-60">
                <span class="text-[10px] text-slate-500">L72, C16</span>
                <span class="text-[10px] text-slate-500">UTF-8</span>
                <span class="text-[10px] text-indigo-400">PHP_INTEGRATED</span>
            </div>
        </div>

        <div class="lg:col-span-6 relative h-[600px] flex items-center justify-center">
            
            <div class="absolute z-20 transform -rotate-3 -translate-x-12 -translate-y-20 w-full max-w-sm bg-[#161b22] border border-[#30363d] rounded-xl shadow-2xl overflow-hidden group hover:rotate-0 transition-all duration-500">
                <div class="bg-[#21262d] px-4 py-2 border-b border-[#30363d] flex justify-between items-center">
                    <span class="text-[9px] font-bold text-slate-500 uppercase">output.log</span>
                    <div class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.8)]"></div>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <div class="flex justify-between text-[10px] mb-2">
                            <span class="text-slate-500">Server Latency:</span>
                            <span class="text-cyan-400 font-bold tracking-widest">24ms_</span>
                        </div>
                        <div class="w-full bg-[#0d1117] h-1.5 rounded-full border border-[#30363d]">
                            <div class="bg-cyan-500 h-full w-[65%] shadow-[0_0_15px_rgba(6,182,212,0.5)]"></div>
                        </div>
                    </div>
                    <div class="text-[10px] text-slate-500 leading-relaxed font-mono italic">
                        > executing query: monitoring.fetch_sensor_data...<br>
                        > 200 OK: Data integrity verified.
                    </div>
                </div>
            </div>

            <div class="relative z-30 transform rotate-2 translate-y-24 w-full max-w-sm bg-indigo-950/20 backdrop-blur-xl border border-indigo-500/30 rounded-xl shadow-2xl overflow-hidden hover:rotate-0 transition-all duration-500">
                <div class="bg-indigo-900/40 px-4 py-2 border-b border-indigo-500/30 flex justify-between items-center">
                    <span class="text-[9px] font-bold text-indigo-300 uppercase">security.yaml</span>
                </div>
                <div class="p-8 space-y-4">
                    <h4 class="text-xs font-black text-white uppercase tracking-widest italic">Enc_Protocols:</h4>
                    <ul class="space-y-3 text-[10px] font-bold">
                        <li class="text-emerald-400 flex items-center gap-2">
                            <span class="text-slate-600">01</span> [CSRF_PROTECTION_ENABLED]
                        </li>
                        <li class="text-emerald-400 flex items-center gap-2">
                            <span class="text-slate-600">02</span> [BCRYPT_PASSWORD_HASHING]
                        </li>
                        <li class="text-indigo-400 flex items-center gap-2">
                            <span class="text-slate-600">03</span> [MIDDLEWARE_AUTH_RBAC]
                        </li>
                    </ul>
                </div>
            </div>

            <div class="absolute inset-0 -z-10 opacity-5 select-none text-[8px] leading-tight font-mono text-white overflow-hidden pointer-events-none">
                $pond = Pond::where('id', $request->pond_id)->first();<br>
                if ($pond->health_status == 'optimal') {<br>
                   return response()->json(['status' => 'stable']);<br>
                }<br>
                // ... repetitive code ...
            </div>

        </div>
    </main>

    <footer class="w-full bg-[#161b22] border-t border-[#30363d] px-8 py-2 text-[9px] text-slate-600 flex justify-between italic">
        <span>AQUAGRID_SECURE_NODE_12</span>
        <span>ENGINEER: M_ARIFIN_ILHAM</span>
    </footer>

</body>
</html>