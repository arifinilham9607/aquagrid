<div x-show="openEdit" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="fixed inset-0 bg-gray-500 opacity-75" @click="openEdit = false"></div>
        <div class="bg-white rounded-2xl overflow-hidden shadow-2xl transform transition-all sm:max-w-lg sm:w-full z-50">
            <form :action="'/pengguna/' + editData.id" method="POST">
                @csrf
                @method('PUT')
                <div class="bg-white px-8 py-8">
                    <h3 class="text-xl font-extrabold text-slate-900 uppercase tracking-tight mb-6">Edit User Account</h3>
                    <div class="space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Full Name</label>
                            <input type="text" name="name" x-model="editData.name" required class="block w-full px-4 py-3 bg-slate-50 border-slate-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Email Address</label>
                            <input type="email" name="email" x-model="editData.email" required class="block w-full px-4 py-3 bg-slate-50 border-slate-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2">Role</label>
                            <select name="role" x-model="editData.role" class="block w-full px-4 py-3 bg-slate-50 border-slate-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                                <option value="staf">staf</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                        <div class="p-4 bg-amber-50 rounded-xl border border-amber-100">
                            <label class="block text-[10px] font-bold text-amber-700 uppercase tracking-widest mb-2">New Password (Optional)</label>
                            <input type="password" name="password" class="block w-full px-4 py-2 bg-white border-slate-200 rounded-lg text-sm" placeholder="Leave blank if no change">
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 px-8 py-6 flex flex-row-reverse space-x-3 space-x-reverse">
                    <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold text-xs uppercase tracking-widest hover:bg-indigo-700 shadow-lg shadow-indigo-100 transition-all">Update Data</button>
                    <button type="button" @click="openEdit = false" class="px-6 py-3 bg-white text-slate-600 border border-slate-200 rounded-xl font-bold text-xs uppercase hover:bg-slate-50 transition-all">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>