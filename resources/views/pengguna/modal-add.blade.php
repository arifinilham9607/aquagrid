<div x-show="openAdd" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="fixed inset-0 bg-gray-500 opacity-75" @click="openAdd = false"></div>
        <div class="bg-white rounded-2xl overflow-hidden shadow-2xl transform transition-all sm:max-w-lg sm:w-full z-50">
            <form action="{{ route('pengguna.store') }}" method="POST">
                @csrf
                <div class="bg-white px-8 py-8">
                    <h3 class="text-xl font-extrabold text-slate-900 uppercase tracking-tight mb-6">Create New Account</h3>
                    <div class="space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Full Name</label>
                            <input type="text" name="name" required class="block w-full px-4 py-3 bg-slate-50 border-slate-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Email Address</label>
                            <input type="email" name="email" required class="block w-full px-4 py-3 bg-slate-50 border-slate-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">User Role</label>
                            <select name="role" required class="block w-full px-4 py-3 bg-slate-50 border-slate-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                                <option value="staf">Staf (Limited Access)</option>
                                <option value="admin">Admin (Full Access)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Password</label>
                            <input type="password" name="password" required minlength="8" class="block w-full px-4 py-3 bg-slate-50 border-slate-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 px-8 py-6 flex flex-row-reverse space-x-3 space-x-reverse">
                    <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-indigo-700 shadow-lg shadow-indigo-100 transition-all">Save Account</button>
                    <button type="button" @click="openAdd = false" class="px-6 py-3 bg-white text-slate-600 border border-slate-200 rounded-xl font-bold text-xs uppercase hover:bg-slate-50 transition-all">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>