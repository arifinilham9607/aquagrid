<x-app-layout>
    <div class="py-12 bg-slate-50 min-h-screen" x-data="{ openAdd: false, openEdit: false, editData: {} }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div class="bg-white px-10 py-8 rounded-[2.5rem] shadow-2xl shadow-indigo-100 border border-slate-100 flex items-center space-x-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-2 h-full bg-indigo-600"></div>
                    <div class="w-16 h-16 bg-indigo-600 rounded-3xl flex items-center justify-center shadow-lg shadow-indigo-200">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Database Size</p>
                        <h4 class="text-4xl font-black text-slate-900">{{ $totalUser ?? 0 }} <span class="text-lg text-slate-400 font-bold italic">Users</span></h4>
                    </div>
                </div>

                @if(auth()->user()->role === 'admin')
                <button @click="openAdd = true" class="px-12 py-5 bg-indigo-600 text-white rounded-[2rem] font-black text-sm uppercase tracking-[0.2em] hover:bg-indigo-700 shadow-2xl shadow-indigo-200 transition-all active:scale-95 flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    Add Member
                </button>
                @endif
            </div>

            <div class="bg-white rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
                <div class="px-10 py-8 border-b border-slate-50 bg-white flex justify-between items-center">
                    <h3 class="text-xl font-black text-slate-900 tracking-tight italic">User Management Directory</h3>
                    @if(session('success'))
                        <span class="text-xs font-bold text-emerald-500 bg-emerald-50 px-4 py-2 rounded-full ring-1 ring-emerald-100">
                            {{ session('success') }}
                        </span>
                    @endif
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-slate-50/50 text-left">
                                <th class="px-10 py-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Member</th>
                                <th class="px-10 py-6 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Access Level</th>
                                <th class="px-10 py-6 text-right text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach($pengguna as $data)
                            <tr class="group hover:bg-indigo-50/30 transition-all">
                                <td class="px-10 py-7">
                                    <div class="flex items-center space-x-5">
                                        <div class="w-14 h-14 bg-indigo-100 rounded-[1.2rem] flex items-center justify-center font-black text-indigo-600 text-lg">
                                            {{ strtoupper(substr($data->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <p class="text-base font-black text-slate-800 tracking-tight">{{ $data->name }}</p>
                                            <p class="text-xs text-slate-400 font-medium lowercase">{{ $data->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-10 py-7">
                                    <span class="px-4 py-2 text-[10px] font-black uppercase rounded-xl tracking-widest {{ $data->role === 'admin' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-100' : 'bg-slate-100 text-slate-500' }}">
                                        {{ $data->role }}
                                    </span>
                                </td>
                                <td class="px-10 py-7 text-right space-x-6">
                                    @if(auth()->user()->role === 'admin')
                                        <button @click="openEdit = true; editData = { id: '{{ $data->id }}', name: '{{ $data->name }}', email: '{{ $data->email }}', role: '{{ $data->role }}' }" 
                                                class="text-[10px] font-black text-indigo-600 uppercase tracking-widest hover:underline transition">Edit Account</button>
                                        
                                        @if(auth()->id() !== $data->id)
                                        <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST" class="inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-[10px] font-black text-rose-400 uppercase tracking-widest hover:text-rose-600 transition" onclick="return confirm('Erase this data?')">Delete</button>
                                        </form>
                                        @endif
                                    @else
                                        <span class="text-[10px] font-bold text-slate-300 uppercase italic">View Only</span>
                                    @endif
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('pengguna.modal-add')
        @include('pengguna.modal-edit')
    </div>
</x-app-layout>