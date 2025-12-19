<x-guest-layout>
    <div class="text-center mb-8">
        <h2 class="text-3xl font-black text-slate-900 tracking-tight">Join Us</h2>
        <p class="text-sm text-slate-500 mt-2 font-medium">Create your administrative account</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf
        <div>
            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-2">Full Name</label>
            <input type="text" name="name" :value="old('name')" required autofocus class="w-full px-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none text-slate-700">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-2">Email Address</label>
            <input type="email" name="email" :value="old('email')" required class="w-full px-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none text-slate-700">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-2">Password</label>
            <input type="password" name="password" required class="w-full px-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none text-slate-700">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div>
            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-2">Confirm Password</label>
            <input type="password" name="password_confirmation" required class="w-full px-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none text-slate-700">
        </div>

        <div class="pt-4 space-y-4">
            <button type="submit" class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-sm uppercase tracking-[0.2em] hover:bg-indigo-700 shadow-xl shadow-indigo-200 transition-all active:scale-95">
                Register Now
            </button>
            <a href="{{ route('login') }}" class="block w-full py-4 bg-slate-50 text-slate-500 rounded-2xl font-bold text-xs uppercase tracking-widest text-center hover:bg-slate-100 transition-all">
                Already Registered? Sign In
            </a>
        </div>
    </form>
</x-guest-layout>