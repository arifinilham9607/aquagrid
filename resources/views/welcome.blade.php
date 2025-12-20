<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAGRID - Super Milkfish Nursery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-50">

    <nav class="p-8 flex justify-between items-center max-w-7xl mx-auto">
        <div class="text-2xl font-black text-slate-800 tracking-tighter uppercase italic">
            AQUA<span class="text-indigo-600">GRID</span>
        </div>
        
        <div class="space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-xs font-black text-indigo-600 uppercase tracking-widest bg-indigo-50 px-6 py-3 rounded-xl transition">Go to Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-xs font-black text-slate-400 uppercase tracking-widest hover:text-indigo-600 transition">Log in</a>
            @endauth
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center min-h-[70vh]">
    
    <div class="space-y-8">
        <div class="inline-block px-4 py-2 bg-indigo-100 text-indigo-700 text-[10px] font-black rounded-full uppercase tracking-[0.2em]">
            Smart Aquaculture Solutions
        </div>
        <h1 class="text-6xl lg:text-8xl font-black text-slate-900 leading-none tracking-tighter uppercase italic">
            AQUA<br><span class="text-indigo-600">GRID.</span>
        </h1>
        <p class="text-lg text-slate-500 font-medium max-w-md leading-relaxed">
            Real-time water parameter monitoring system designed to produce premium quality milkfish seeds with high survival rates.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('guidelines') }}" class="px-10 py-5 bg-indigo-600 text-white font-black text-xs uppercase tracking-[0.2em] rounded-2xl hover:bg-indigo-700 transition-all shadow-2xl shadow-indigo-100 active:scale-95 text-center">
                Get Started
            </a>
            <a href="/health" class="px-10 py-5 bg-white text-slate-700 border border-slate-200 font-black text-xs uppercase tracking-[0.2em] rounded-2xl hover:bg-slate-50 transition-all shadow-lg active:scale-95 text-center">
                View System Health
            </a>
        </div>
        </div>

        <div class="relative h-[500px] flex items-center justify-center lg:justify-end">
    
    <div class="absolute -z-10 w-80 h-80 bg-indigo-300 rounded-full blur-[120px] opacity-20"></div>

    <div class="relative z-10 transform -rotate-6 -translate-x-12 translate-y-8 group">
        <img src="{{ asset('images/hero-images-2.jpeg') }}" 
             class="w-64 h-64 lg:w-80 lg:h-80 object-cover rounded-[3rem] shadow-2xl border-4 border-white transition-all duration-500 group-hover:rotate-0"
             onerror="this.src='https://images.unsplash.com/photo-1511216335778-7cb8f49fa7a3?auto=format&fit=crop&w=500&q=80'">
        <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur px-4 py-2 rounded-2xl shadow-sm">
            <p class="text-[9px] font-black text-indigo-600 uppercase tracking-widest text-center">Achievement</p>
        </div>
    </div>

    <div class="relative z-20 transform rotate-2 -translate-x-4 -translate-y-8 group w-full">
    <img src="{{ asset('images/blockdiagram.png') }}" 
         class="w-full h-48 lg:h-64 object-cover rounded-[2rem] shadow-2xl border-8 border-white transition-all duration-500 group-hover:rotate-0"
         onerror="this.src='https://images.unsplash.com/photo-1524704659694-9f754a17494a?auto=format&fit=crop&w=800&q=80'">
    <div class="absolute -top-4 -right-4 bg-indigo-600 px-6 py-3 rounded-2xl shadow-xl shadow-indigo-200">
        <p class="text-[10px] font-black text-white uppercase tracking-widest text-center">System Architecture</p>
    </div>
</div>

</div>
    </main>

</body>
</html>