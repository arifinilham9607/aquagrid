<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-10">
            
            <div class="text-center space-y-2">
                <h2 class="text-3xl font-black text-slate-900 tracking-tighter uppercase italic">
                    Add <span class="text-indigo-600">Activity Log</span>
                </h2>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">
                    Record daily nursery maintenance protocols
                </p>
            </div>

            <div class="bg-white rounded-[3rem] p-10 shadow-2xl shadow-indigo-100 border border-slate-100">
                <form action="{{ route('maintenance.store') }}" method="POST" class="space-y-8">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 italic">Target Pond</label>
                            <select name="pond_id" required class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl font-bold text-slate-700 focus:ring-4 focus:ring-indigo-100 transition-all">
                                <option value="" disabled selected>Select Pond...</option>
                                <option value="kolam_a">Nursery Pond A</option>
                                <option value="kolam_b">Nursery Pond B</option>
                                <option value="kolam_c">Nursery Pond C</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 italic">Activity Type</label>
                            <select name="activity_type" required class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl font-bold text-slate-700 focus:ring-4 focus:ring-indigo-100 transition-all">
                                <option value="" disabled selected>Select Type...</option>
                                <option value="feeding">Feeding Time</option>
                                <option value="water_exchange">Water Exchange</option>
                                <option value="probiotic">Probiotic Treatment</option>
                                <option value="cleaning">Cleaning / Scrubbing</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3 italic">Activity Details</label>
                        <textarea name="description" rows="4" required placeholder="Describe the maintenance activity in detail..." 
                            class="w-full px-6 py-4 bg-slate-50 border-none rounded-3xl font-medium text-slate-700 focus:ring-4 focus:ring-indigo-100 transition-all placeholder:text-slate-300"></textarea>
                    </div>

                    <div class="p-6 bg-indigo-50 rounded-[2rem] border border-indigo-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-2.5 h-2.5 bg-indigo-600 rounded-full animate-pulse"></div>
                            <span class="text-[10px] font-black text-indigo-600 uppercase tracking-[0.2em]">Quality Assurance</span>
                        </div>
                        <label class="flex items-center space-x-4 cursor-pointer group">
                            <input type="checkbox" required class="w-6 h-6 rounded-lg border-indigo-200 text-indigo-600 focus:ring-indigo-500 transition-all">
                            <span class="text-[11px] font-bold text-indigo-900 uppercase italic group-hover:text-indigo-600 transition-colors">
                                I verify this activity meets Super Milkfish Standards
                            </span>
                        </label>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button type="submit" class="flex-1 py-5 bg-indigo-600 text-white rounded-[2.5rem] font-black text-xs uppercase tracking-[0.2em] shadow-xl shadow-indigo-100 hover:bg-indigo-700 transition-all active:scale-95">
                            Submit Activity Log
                        </button>
                        <a href="{{ route('dashboard') }}" class="px-12 py-5 bg-slate-100 text-slate-400 rounded-[2.5rem] font-black text-[10px] uppercase tracking-widest text-center hover:bg-slate-200 transition-all">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>