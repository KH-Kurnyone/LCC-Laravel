<x-app-layout>
    {{-- Section 1 --}}
    <section class="w-full h-screen bg-gray-100 md:pl-[310px] p-[20px] pt-[100px]">
        <h1 class="font-bold text-3xl">Kategori</h1>

        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden my-8">
            <!-- Header -->
            <div class="bg-blue-600 px-6 py-4">
                <h1 class="text-white text-2xl font-bold">Kategori</h1>
            </div>

            <!-- Add Button -->
            <div class="px-6 py-4 border-b">
                <button class="flex items-center text-blue-600 font-semibold">
                    <span class="text-2xl mr-2">+</span>
                    Tambah Data
                </button>
            </div>

            <!-- Category List -->
            <div class="px-6 py-4 space-y-4">
                <!-- Category 1 -->
                <div class="p-3 border rounded-lg">
                    <h3 class="font-bold">Uang Jajan</h3>
                    <p class="text-green-600 text-sm">Penerimaan</p>
                </div>

                <!-- Category 2 -->
                <div class="p-3 border rounded-lg">
                    <h3 class="font-bold">Uang Mingguan</h3>
                    <p class="text-green-600 text-sm">Penerimaan</p>
                </div>

                <!-- Category 3 -->
                <div class="p-3 border rounded-lg">
                    <h3 class="font-bold">Jajan</h3>
                    <p class="text-red-600 text-sm">Pengeluaran</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
