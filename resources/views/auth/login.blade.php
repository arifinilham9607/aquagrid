<x-guest-layout>
    <div class="text-center mb-8">
        <h2 class="text-3xl font-black text-slate-900 tracking-tight uppercase italic">Welcome <span class="text-indigo-600">Back</span></h2>
        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mt-2">Access your AquaGrid dashboard</p>
    </div>

    @if ($errors->any())
        <div class="mb-6 p-4 bg-rose-50 border border-rose-100 rounded-2xl flex items-center space-x-3 animate-shake">
            <svg class="w-5 h-5 text-rose-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <ul class="text-xs font-bold text-rose-600 uppercase tracking-widest leading-relaxed">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Email Address</label>
            <input type="email" name="email" :value="old('email')" required autofocus 
                class="w-full px-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none text-slate-700 font-bold transition-all">
        </div>

        <div>
            <div class="flex justify-between mb-2">
                <label class="block text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Password</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-[10px] font-black text-indigo-600 uppercase tracking-widest hover:underline">Forgot?</a>
                @endif
            </div>
            <input type="password" name="password" required autocomplete="current-password"
                class="w-full px-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-600 outline-none text-slate-700 font-bold transition-all">
        </div>

        <div class="flex items-center">
            <input id="remember_me" type="checkbox" name="remember" class="rounded-lg border-slate-200 text-indigo-600 shadow-sm focus:ring-indigo-500 w-5 h-5">
            <span class="ms-3 text-[10px] font-black text-slate-400 uppercase tracking-widest">{{ __('Remember me') }}</span>
        </div>

        <div class="pt-4 space-y-4">
            <button type="submit" class="w-full py-5 bg-indigo-600 text-white rounded-[2rem] font-black text-sm uppercase tracking-[0.2em] hover:bg-indigo-700 shadow-xl shadow-indigo-200 transition-all active:scale-95">
                Sign In Now
            </button>
            
            <a href="{{ url('/') }}" class="block w-full py-4 bg-slate-100 text-slate-400 rounded-[2rem] font-black text-[10px] uppercase tracking-widest text-center hover:bg-slate-200 transition-all">
                ← Back to Home
            </a>
        </div>
    </form>

    <div class="mt-10 pt-8 border-t border-slate-100 text-center">
        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">
            New to AquaGrid? <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 transition">Create Account</a>
        </p>
    </div>
</x-guest-layout>