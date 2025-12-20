<x-guest-layout>
    <div class="fixed inset-0 z-0">
        <img src="{{ asset('images/bg-welcome.png') }}" 
             class="w-full h-full object-cover" 
             alt="Background">
        <div class="absolute inset-0 bg-slate-900/70 backdrop-blur-[2px]"></div>
    </div>

    <nav class="relative z-30 p-8 flex justify-between items-center max-w-7xl mx-auto">
        <div class="text-2xl font-black text-white tracking-tighter uppercase italic">
            AQUA<span class="text-indigo-400">GRID</span>
        </div>
        
        <div class="space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-xs font-black text-indigo-400 uppercase tracking-widest bg-white/10 backdrop-blur px-6 py-3 rounded-xl hover:bg-white/20 transition">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-xs font-black text-white uppercase tracking-widest hover:text-indigo-400 transition">Log in</a>
            @endauth
        </div>
    </nav>

    <main class="relative z-20 max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center min-h-[80vh]">
        
        <div class="space-y-8">
            <div class="inline-block px-4 py-2 bg-indigo-500/20 border border-indigo-500/30 text-indigo-300 text-[10px] font-black rounded-full uppercase tracking-[0.2em]">
                Smart Aquaculture Solutions
            </div>
            <h1 class="text-6xl lg:text-8xl font-black text-white leading-none tracking-tighter uppercase italic">
                AQUA<br><span class="text-indigo-500">GRID.</span>
            </h1>
            <p class="text-lg text-slate-300 font-medium max-w-md leading-relaxed">
                Real-time water parameter monitoring system designed to produce premium quality milkfish seeds with high survival rates.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <a href="{{ route('guidelines') }}" class="px-10 py-5 bg-indigo-600 text-white font-black text-xs uppercase tracking-[0.2em] rounded-2xl hover:bg-indigo-700 transition-all shadow-2xl active:scale-95 text-center">
                    Get Started
                </a>
                <a href="/health" class="px-10 py-5 bg-white/10 backdrop-blur text-white border border-white/20 font-black text-xs uppercase tracking-[0.2em] rounded-2xl hover:bg-white/20 transition-all active:scale-95 text-center">
                    View System Health
                </a>
            </div>
        </div>

        <div class="relative h-[600px] flex flex-col justify-center items-center lg:items-end space-y-12">
            
            <div class="relative z-10 transform -rotate-6 translate-x-4 group">
                <img src="{{ asset('images/hero-images-2.jpeg') }}" 
                     class="w-56 h-56 lg:w-64 lg:h-64 object-cover rounded-[3rem] shadow-2xl border-4 border-white transition-all duration-500 group-hover:rotate-0"
                     onerror="this.src='https://images.unsplash.com/photo-1511216335778-7cb8f49fa7a3?auto=format&fit=crop&w=500&q=80'">
                <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur px-4 py-2 rounded-2xl shadow-sm">
                    <p class="text-[9px] font-black text-indigo-600 uppercase tracking-widest text-center">Achievement</p>
                </div>
            </div>

            <div class="relative z-20 transform rotate-2 -translate-y-8 group w-full max-w-lg">
                <img src="{{ asset('images/blockdiagram.png') }}" 
                     class="w-full h-auto object-cover rounded-[2rem] shadow-2xl border-8 border-white transition-all duration-500 group-hover:rotate-0"
                     onerror="this.src='https://images.unsplash.com/photo-1524704659694-9f754a17494a?auto=format&fit=crop&w=800&q=80'">
                <div class="absolute -top-4 -right-4 bg-indigo-600 px-6 py-3 rounded-2xl shadow-xl shadow-indigo-200">
                    <p class="text-[10px] font-black text-white uppercase tracking-widest text-center">System Architecture</p>
                </div>
            </div>

        </div>
    </main>
</x-guest-layout>