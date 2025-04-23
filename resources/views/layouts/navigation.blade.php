{{-- Navigasi Laptop --}}
<aside class="hidden md:block bg-white font-semibold w-[280px] h-screen absolute left-0 top-0 shadow p-5">
    <div class="font-bold pb-5">
        Sistem Keuangan
    </div>
    <div class="border border-gray-400"></div>
    <div class=" rounded-full px-5 py-3 mt-5 {{ request()->is('dashboard') ? 'bg-indigo-600 text-white' : 'hover:bg-gray-100' }}">
        <a href="/dashboard">
            <p><i class="bi bi-cash"></i> Dashboard</p>
        </a>
    </div>
    <div class="mt-2 px-5 py-3 rounded-full {{ request()->is('kategori') ? 'bg-indigo-600 text-white' : 'hover:bg-gray-100' }}">
        <a href="/kategori">
            <p><i class="bi bi-grid-fill"></i> Kategori</p>
        </a>
    </div>
    <div class="mt-2 px-5 py-3 hover:bg-gray-100 rounded-full">
        <a href="/profile">
            <p><i class="bi bi-person-fill"></i> Profile</p>
        </a>
    </div>
    <div class="mt-2 px-5 py-3 hover:bg-gray-100 rounded-full">
        <a href="">
            <p><i class="bi bi-box-arrow-left"></i> Logout</p>
        </a>
    </div>
</aside>

{{-- Navigasi HP --}}
<aside
    class=" md:hidden fixed bottom-0 left-0 right-0 h-16 z-20 flex shadow bg-white justify-around items-center">
    <div>
        <a href="/dashboard" class="flex flex-col items-center">
            <i class="bi bi-cash text-2xl"></i>
            <p class="text-sm -mt-1">Keuangan</p>
        </a>
    </div>
    <div>
        <a href="/kategori" class="flex flex-col items-center">
            <i class="bi bi-grid-fill text-2xl"></i>
            <p class="text-sm -mt-1">Kategori</p>
        </a>
    </div>
    <div>
        <a href="/profile" class="flex flex-col items-center">
            <i class="bi bi-person-fill text-2xl"></i>
            <p class="text-sm -mt-1">Profile</p>
        </a>
    </div>
    <div>
        <a href="" class="flex flex-col items-center">
            <i class="bi bi-box-arrow-left text-2xl"></i>
            <p class="text-sm -mt-1">Logout</p>
        </a>
    </div>
</aside>