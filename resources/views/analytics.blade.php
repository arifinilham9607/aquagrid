<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <h2 class="font-bold text-xl md:text-2xl text-slate-800 leading-tight">
                {{ __('Advanced System Analytics') }}
            </h2>
            <div class="flex items-center gap-2">
                <span class="flex h-3 w-3 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                </span>
                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Live Monitoring Active</span>
            </div>
        </div>
    </x-slot>

    <div class="py-6 md:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 md:space-y-8">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Avg pH (7D)</p>
                    <h3 class="text-3xl font-black text-indigo-600">7.42</h3>
                    <p class="text-xs text-emerald-500 font-bold mt-2">↑ 0.2% vs prev</p>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Avg Temp (7D)</p>
                    <h3 class="text-3xl font-black text-orange-500">28.5°C</h3>
                    <p class="text-xs text-slate-400 font-bold mt-2">Optimal</p>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 sm:col-span-2 md:col-span-1">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">System Health</p>
                    <h3 class="text-3xl font-black text-emerald-500">98%</h3>
                    <p class="text-xs text-emerald-500 font-bold mt-2">Excellent</p>
                </div>
            </div>

            <div class="bg-white p-5 md:p-8 rounded-[2rem] md:rounded-[2.5rem] shadow-sm border border-slate-100">
                <div class="mb-6">
                    <h4 class="text-lg font-black text-slate-800 tracking-tight">Weekly Parameter Trends</h4>
                    <p class="text-sm text-slate-500 font-medium italic">Simulated data for demonstration</p>
                </div>
                <div class="h-[300px] md:h-[400px]">
                    <canvas id="weeklyChart"></canvas>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                <div class="bg-slate-900 p-6 md:p-8 rounded-[2rem] md:rounded-[2.5rem] shadow-2xl text-white">
                    <div class="flex justify-between items-center mb-6">
                        <h4 class="text-md md:text-lg font-black tracking-tight italic uppercase">Live pH Pulse</h4>
                        <span class="text-[9px] font-mono text-cyan-400 border border-cyan-400/20 px-2 py-1 rounded">STREAMING</span>
                    </div>
                    <div class="h-[200px] md:h-[250px]">
                        <canvas id="realtimeChart"></canvas>
                    </div>
                </div>

                <div class="bg-white p-6 md:p-8 rounded-[2rem] md:rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col justify-center">
                    <h4 class="text-lg font-black text-slate-800 tracking-tight mb-4 italic underline decoration-indigo-500 underline-offset-8">Critical Insights</h4>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-indigo-50 rounded-lg flex items-center justify-center text-indigo-600 font-black text-xs">01</div>
                            <p class="text-xs md:text-sm text-slate-500"><span class="font-bold text-slate-800">Alerting:</span> Threshold breach detection is currently active.</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 w-8 h-8 bg-indigo-50 rounded-lg flex items-center justify-center text-indigo-600 font-black text-xs">02</div>
                            <p class="text-xs md:text-sm text-slate-500"><span class="font-bold text-slate-800">Stability:</span> Parameters maintained within 5% variance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxWeekly = document.getElementById('weeklyChart').getContext('2d');
        new Chart(ctxWeekly, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'pH',
                    data: [7.2, 7.5, 7.3, 7.8, 7.4, 7.1, 7.4],
                    borderColor: '#4f46e5',
                    fill: true,
                    backgroundColor: 'rgba(79, 70, 229, 0.05)',
                    tension: 0.4
                }, {
                    label: 'Temp',
                    data: [28, 28.5, 29, 28.2, 27.8, 28.4, 28.5],
                    borderColor: '#f97316',
                    tension: 0.4
                }]
            },
            options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom' } } }
        });

        const ctxLive = document.getElementById('realtimeChart').getContext('2d');
        let liveChart = new Chart(ctxLive, {
            type: 'line',
            data: { labels: [], datasets: [{ label: 'pH', data: [], borderColor: '#22d3ee', borderWidth: 2, pointRadius: 0, tension: 0.2 }] },
            options: { responsive: true, maintainAspectRatio: false, scales: { x: { display: false }, y: { grid: { color: '#1e293b' }, ticks: { color: '#64748b' } } }, plugins: { legend: { display: false } } }
        });

        let counter = 0;
        setInterval(() => {
            if (counter > 30) { liveChart.data.labels.shift(); liveChart.data.datasets[0].data.shift(); }
            liveChart.data.labels.push(counter++);
            liveChart.data.datasets[0].data.push(7.2 + Math.random() * 0.5);
            liveChart.update('none');
        }, 1500);
    </script>
</x-app-layout>