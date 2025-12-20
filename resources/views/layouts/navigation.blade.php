<nav x-data="{ open: false }" class="bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-2xl font-black text-slate-800 tracking-tighter uppercase italic">
                        AQUA<span class="text-indigo-600">GRID</span>
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-[10px] font-black uppercase tracking-[0.2em]">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link :href="route('alerts.index')" :active="request()->routeIs('alerts.*')" class="text-[10px] font-black uppercase tracking-[0.2em]">
                        {{ __('Alert Settings') }}
                    </x-nav-link>

                    <x-nav-link :href="route('pengguna.index')" :active="request()->routeIs('pengguna.*')" class="text-[10px] font-black uppercase tracking-[0.2em]">
                        {{ __('User Management') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 border border-transparent text-[10px] font-black uppercase tracking-widest rounded-xl text-slate-500 bg-slate-50 hover:text-indigo-600 transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-[10px] font-black uppercase tracking-widest text-slate-600">
                            {{ __('My Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="text-[10px] font-black uppercase tracking-widest text-rose-600">
                                {{ __('Sign Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>