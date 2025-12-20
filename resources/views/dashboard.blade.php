<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 mb-10">
                <div class="order-2 md:order-1">
                    <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-[10px] font-mono font-black text-slate-400 border border-slate-200 px-4 py-2 rounded-full hover:bg-slate-800 hover:text-white hover:border-slate-800 transition-all group">
                        <span class="group-hover:-translate-x-1 transition-transform">←</span> 
                        SYSTEM_HOME
                    </a>
                </div>

                <div class="text-center space-y-2 order-1 md:order-2 flex-1">
                    <div class="inline-flex items-center justify-center space-x-3">
                        <div class="w-8 h-1.5 bg-indigo-600 rounded-full hidden sm:block"></div>
                        <h1 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tighter uppercase italic">AQUAGRID MONITORING</h1>
                        <div class="w-8 h-1.5 bg-indigo-600 rounded-full hidden sm:block"></div>
                    </div>
                    <p class="text-slate-400 font-bold text-[10px] uppercase tracking-[0.4em]">Optimizing High-Grade Milkfish Seed Quality</p>
                </div>

                <div class="hidden md:block md:w-32 order-3"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($dataSensor as $pondName => $sensor)
                <div class="bg-white rounded-[3rem] shadow-2xl shadow-indigo-100/40 border border-slate-100 overflow-hidden relative group transition-all duration-500 hover:-translate-y-3">
                    <div class="absolute top-0 left-0 w-full h-2 bg-indigo-600"></div>
                    <div class="p-10 space-y-8">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-black text-slate-800 uppercase tracking-tight italic">{{ str_replace('_', ' ', $pondName) }}</h3>
                            <div class="flex items-center space-x-2">
                                <div class="w-2.5 h-2.5 bg-emerald-500 rounded-full animate-pulse"></div>
                                <span class="text-[10px] font-black text-emerald-500 uppercase tracking-widest">Active</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-slate-50 rounded-3xl border border-slate-100">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Water Temp</p>
                                <p class="text-xl font-black text-rose-500">{{ $sensor['suhu'] }}°C</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-3xl border border-slate-100">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">pH Level</p>
                                <p class="text-xl font-black text-emerald-500">{{ $sensor['ph'] }}</p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-3xl border border-slate-100">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Dissolved O2</p>
                                <p class="text-xl font-black text-sky-500">{{ $sensor['do'] }}<span class="text-xs ml-1">ppm</span></p>
                            </div>
                            <div class="p-4 bg-slate-50 rounded-3xl border border-slate-100">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-widest mb-1">Salinity</p>
                                <p class="text-xl font-black text-amber-500">{{ $sensor['salinitas'] }}<span class="text-xs ml-1">ppt</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="bg-white rounded-[3rem] p-10 shadow-2xl shadow-indigo-100 border border-slate-100 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="bg-white rounded-[3rem] p-10 shadow-2xl shadow-indigo-100 border border-slate-100 flex flex-col md:flex-row items-center justify-between gap-8">
    <div class="flex items-center space-x-6">
        <div>
            <h4 class="text-lg font-black text-slate-800 tracking-tight uppercase">Activity Management</h4>
            <p class="text-xs font-bold text-slate-400 italic leading-relaxed max-w-lg">
                Log daily nursery activities and ensure all ponds follow the Super Milkfish standard protocols.
            </p>
        </div>
    </div>

    <a href="{{ route('maintenance.create') }}" class="w-full md:w-auto px-12 py-5 bg-indigo-600 text-white rounded-[2rem] font-black text-[10px] uppercase tracking-[0.2em] hover:bg-indigo-700 shadow-xl shadow-indigo-200 transition-all active:scale-95 text-center flex items-center justify-center group">
        <svg class="w-4 h-4 mr-3 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Add Maintenance Log
    </a>
</div>
        </div>
    </div>
</x-app-layout>