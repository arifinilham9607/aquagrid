<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAGRID - Super Milkfish Nursery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style> 
        body { font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; } 
    </style>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="relative z-50 p-6 md:p-8 flex justify-between items-center max-w-7xl mx-auto">
        <div class="text-xl md:text-2xl font-black tracking-tighter uppercase italic">
            AQUA<span class="text-indigo-600">GRID</span>
        </div>
        
        <div class="flex gap-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-[10px] md:text-xs font-black text-indigo-600 uppercase tracking-widest bg-indigo-50 px-4 md:px-6 py-3 rounded-xl transition">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-[10px] md:text-xs font-black text-slate-400 uppercase tracking-widest hover:text-indigo-600 transition">Log in</a>
            @endauth
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 md:px-8 py-10 lg:py-20">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-7 space-y-6 md:space-y-8 text-center lg:text-left order-2 lg:order-1">
                <div class="inline-block px-4 py-2 bg-indigo-100 text-indigo-700 text-[10px] font-black rounded-full uppercase tracking-[0.2em]">
                    Smart Aquaculture Solutions
                </div>
                
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black leading-[1.1] md:leading-none tracking-tighter uppercase italic">
                    AQUA<br class="hidden lg:block"><span class="text-indigo-600">GRID.</span>
                </h1>
                
                <p class="text-base md:text-lg text-slate-500 font-medium max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Real-time water parameter monitoring system designed to produce premium quality milkfish seeds with high survival rates.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="{{ route('guidelines') }}" class="w-full sm:w-auto px-10 py-5 bg-indigo-600 text-white font-black text-[10px] uppercase tracking-[0.2em] rounded-2xl hover:bg-indigo-700 transition shadow-2xl shadow-indigo-100 active:scale-95 text-center">
                        Get Started
                    </a>
                    <a href="/health" class="w-full sm:w-auto px-10 py-5 bg-white text-slate-700 border border-slate-200 font-black text-[10px] uppercase tracking-[0.2em] rounded-2xl hover:bg-slate-50 transition shadow-lg active:scale-95 text-center">
                        View System Health
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative flex flex-col items-center justify-center space-y-8 lg:space-y-0 order-1 lg:order-2 py-10 lg:py-0">
                
                <div class="hidden lg:block absolute -z-10 w-80 h-80 bg-indigo-300 rounded-full blur-[120px] opacity-20"></div>

                <div class="relative lg:absolute lg:z-10 lg:left-0 lg:top-0 transform lg:-rotate-6 lg:-translate-x-12 lg:translate-y-8 group">
                    <img src="{{ asset('images/hero-images-2.jpeg') }}" 
                         class="w-56 h-56 md:w-64 md:h-64 lg:w-72 lg:h-72 object-cover rounded-[2.5rem] lg:rounded-[3.1rem] shadow-2xl border-4 border-white transition duration-500 group-hover:rotate-0"
                         onerror="this.src='https://images.unsplash.com/photo-1511216335778-7cb8f49fa7a3?auto=format&fit=crop&w=500&q=80'">
                    <div class="absolute bottom-4 left-4 lg:bottom-6 lg:left-6 bg-white/90 backdrop-blur px-4 py-2 rounded-xl shadow-sm border border-slate-100">
                        <p class="text-[9px] font-black text-indigo-600 uppercase tracking-widest">Achievement</p>
                    </div>
                </div>

                <div class="relative lg:absolute lg:z-20 lg:right-0 lg:bottom-0 transform lg:rotate-3 lg:translate-x-4 lg:-translate-y-12 group w-full max-w-[320px] md:max-w-sm lg:max-w-none">
                    <img src="{{ asset('images/blockdiagram.png') }}" 
                         class="w-full h-44 md:h-56 lg:h-64 object-cover rounded-[2rem] lg:rounded-[2.5rem] shadow-2xl border-4 lg:border-8 border-white transition duration-500 group-hover:rotate-0"
                         onerror="this.src='https://images.unsplash.com/photo-1524704659694-9f754a17494a?auto=format&fit=crop&w=800&q=80'">
                    <div class="absolute -top-4 -right-2 lg:-top-6 lg:-right-4 bg-indigo-600 px-5 py-2.5 lg:px-6 lg:py-3 rounded-xl lg:rounded-2xl shadow-xl shadow-indigo-200">
                        <p class="text-[9px] lg:text-[10px] font-black text-white uppercase tracking-widest text-center">System Architecture</p>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>
</html>