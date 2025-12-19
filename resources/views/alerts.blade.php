<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-black text-slate-900 tracking-tighter uppercase italic">System <span class="text-indigo-600">Alert Settings</span></h2>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mt-2">Define critical thresholds for Super Milkfish quality</p>
                </div>
                <button class="px-6 py-3 bg-white text-slate-400 border border-slate-200 rounded-xl font-black text-[10px] uppercase tracking-widest hover:text-rose-500 transition-all">Reset to Default</button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-[3rem] shadow-2xl shadow-indigo-100 border border-slate-100 space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-rose-50 rounded-2xl flex items-center justify-center text-rose-500 font-black">°C</div>
                        <h4 class="font-black text-slate-800 uppercase tracking-widest text-sm">Temperature Threshold</h4>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-2">Min Value</label>
                            <input type="number" step="0.1" value="28.5" class="w-full px-4 py-3 bg-slate-50 border-none rounded-xl font-black text-slate-700 focus:ring-2 focus:ring-indigo-600">
                        </div>
                        <div>
                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-2">Max Value</label>
                            <input type="number" step="0.1" value="31.0" class="w-full px-4 py-3 bg-slate-50 border-none rounded-xl font-black text-slate-700 focus:ring-2 focus:ring-indigo-600">
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-[3rem] shadow-2xl shadow-indigo-100 border border-slate-100 space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center text-emerald-500 font-black">pH</div>
                        <h4 class="font-black text-slate-800 uppercase tracking-widest text-sm">pH Balance Threshold</h4>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-2">Min Value</label>
                            <input type="number" step="0.1" value="7.8" class="w-full px-4 py-3 bg-slate-50 border-none rounded-xl font-black text-slate-700 focus:ring-2 focus:ring-indigo-600">
                        </div>
                        <div>
                            <label class="block text-[9px] font-black text-slate-400 uppercase mb-2">Max Value</label>
                            <input type="number" step="0.1" value="8.4" class="w-full px-4 py-3 bg-slate-50 border-none rounded-xl font-black text-slate-700 focus:ring-2 focus:ring-indigo-600">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-indigo-600 rounded-[2.5rem] p-8 shadow-2xl shadow-indigo-200 flex flex-col md:flex-row items-center justify-between gap-6">
                <p class="text-indigo-100 font-bold text-sm">System will trigger a visual warning on Dashboard if sensors exceed these values.</p>
                <button class="w-full md:w-auto px-12 py-4 bg-white text-indigo-600 rounded-2xl font-black text-xs uppercase tracking-[0.2em] shadow-lg hover:bg-slate-50 transition-all active:scale-95">
                    Save System Config
                </button>
            </div>
        </div>
    </div>
</x-app-layout>