<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Advanced System Analytics') }}
            </h2>
            <div class="flex items-center gap-2">
                <span class="flex h-3 w-3 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                </span>
                <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Live Monitoring Active</span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Average pH (7 Days)</p>
                    <h3 class="text-3xl font-black text-indigo-600">7.42</h3>
                    <p class="text-xs text-emerald-500 font-bold mt-2">↑ 0.2% from last week</p>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Average Temp (7 Days)</p>
                    <h3 class="text-3xl font-black text-orange-500">28.5°C</h3>
                    <p class="text-xs text-slate-400 font-bold mt-2 italic">Optimal Range</p>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">System Health Score</p>
                    <h3 class="text-3xl font-black text-emerald-500">98%</h3>
                    <p class="text-xs text-emerald-500 font-bold mt-2">Excellent</p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100">
                <div class="mb-6">
                    <h4 class="text-lg font-black text-slate-800 tracking-tight">Weekly Parameter Trends</h4>
                    <p class="text-sm text-slate-500 font-medium">Historical data for water quality sensors (Dummy Data)</p>
                </div>
                <div class="h-[400px]">
                    <canvas id="weeklyChart"></canvas>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-slate-900 p-8 rounded-[2.5rem] shadow-2xl text-white">
                    <div class="flex justify-between items-center mb-6">
                        <h4 class="text-lg font-black tracking-tight italic uppercase">Real-Time pH Pulse</h4>
                        <span class="text-[10px] font-mono text-cyan-400 bg-cyan-400/10 px-3 py-1 rounded-full border border-cyan-400/20">BUFFERING...</span>
                    </div>
                    <div class="h-[250px]">
                        <canvas id="realtimeChart"></canvas>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col justify-center">
                    <h4 class="text-lg font-black text-slate-800 tracking-tight mb-4">Why this matters?</h4>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 font-black">01</div>
                            <p class="text-sm text-slate-500 leading-relaxed"><span class="font-bold text-slate-800">Early Detection:</span> Real-time monitoring allows for immediate response to sudden pH drops.</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 font-black">02</div>
                            <p class="text-sm text-slate-500 leading-relaxed"><span class="font-bold text-slate-800">Growth Optimization:</span> Stable parameters lead to 20% faster milkfish growth rates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        // 1. Weekly Chart (Historical Dummy Data)
        const ctxWeekly = document.getElementById('weeklyChart').getContext('2d');
        new Chart(ctxWeekly, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'pH Level',
                    data: [7.2, 7.5, 7.3, 7.8, 7.4, 7.1, 7.4],
                    borderColor: '#4f46e5',
                    backgroundColor: 'rgba(79, 70, 229, 0.1)',
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Temperature (°C)',
                    data: [28, 28.5, 29, 28.2, 27.8, 28.4, 28.5],
                    borderColor: '#f97316',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom' } }
            }
        });

        // 2. Real-Time Chart (Live Simulation)
        const ctxLive = document.getElementById('realtimeChart').getContext('2d');
        let liveChart = new Chart(ctxLive, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Live pH',
                    data: [],
                    borderColor: '#22d3ee',
                    borderWidth: 3,
                    pointRadius: 0,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: { display: false },
                    y: { grid: { color: '#1e293b' }, ticks: { color: '#94a3b8' } }
                },
                plugins: { legend: { display: false } }
            }
        });

        // Simulation Loop
        let counter = 0;
        setInterval(() => {
            if (counter > 20) {
                liveChart.data.labels.shift();
                liveChart.data.datasets[0].data.shift();
            }
            liveChart.data.labels.push(counter++);
            liveChart.data.datasets[0].data.push(7 + Math.random());
            liveChart.update();
        }, 2000);
    </script>
</x-app-layout>