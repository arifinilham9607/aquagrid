<x-guest-layout>
    <div class="text-center mb-8">
        <h2 class="text-3xl font-black text-slate-900 tracking-tight">Reset Access</h2>
        <p class="text-sm text-slate-500 mt-2 font-medium italic">Forget your password? No problem.</p>
    </div>

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf
        <div>
            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-2 text-center">Email Password Reset Link</label>
            <input type="email" name="email" :value="old('email')" required autofocus class="w-full px-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none text-slate-700 text-center font-bold">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-center" />
        </div>

        <div class="pt-2 space-y-4">
            <button type="submit" class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-sm uppercase tracking-[0.2em] hover:bg-indigo-700 shadow-xl shadow-indigo-200 transition-all">
                Send Reset Link
            </button>
            <a href="{{ route('login') }}" class="block w-full py-4 bg-white text-slate-400 font-bold text-xs uppercase tracking-widest text-center hover:text-indigo-600 transition-all">
                ← Back to Sign In
            </a>
        </div>
    </form>
</x-guest-layout>