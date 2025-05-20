<x-app-layout>
    {{-- Section 1 --}}
    <section class="w-full h-screen bg-gray-100 md:pl-[310px] p-[20px] pt-[100px]">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-3xl">Keuangan</h1>
            <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="px-4 py-2 bg-indigo-700 text-white rounded-md">
                Tambah Data
            </button>
        </div>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Tambah Transaksi
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <div>
                            <label for="Tanggal"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                            <input type="date" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                        <div>
                            <label for="kategori_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled hidden></option>
                                <option value="US">Kategori 1</option>
                            </select>
                        </div>
                        <div>
                            <label for="keterangan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                        <div>
                            <label for="nominal"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                            <input type="number" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="default-modal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white w-full p-10 mt-5 rounded-md">
            <div class="text-center">
                <h4 class="text-lg">Saldo Saat Ini:</h4>
                <h1 class="font-bold text-4xl">Rp185.000</h1>
            </div>
            <div class="border border-gray-400 my-4"></div>
            <div class="flex justify-center">
                <div class="w-full flex flex-col items-center border-r border-gray-400">
                    <h5>Penerimaan</h5>
                    <h5 class="font-semibold">Rp200.000</h5>
                </div>
                <div class="w-full flex flex-col items-center border-l border-gray-400">
                    <h5>Pengeluaran</h5>
                    <h5 class="font-semibold">Rp15.000</h5>
                </div>
            </div>
        </div>
        <h2 class="font-bold text-2xl mt-5">Riwayat Transaksi</h2>
        <div class="mt-3 flex bg-white rounded-md p-3 justify-between">
            <div class="flex gap-4 items-center">
                <div>
                    ⚫
                </div>
                <div class="flex gap-10 items-center">
                    <p>Kategori <br> <span class="font-semibold">Minuman</span></p>
                    <p>16 April 2025</p>
                </div>
            </div>
            <div class="flex gap-4 items-center">
                <p>Rp5.000</p>
                <div class="flex gap-4 items-center">
                    <div class="px-5 py-3 bg-amber-300 rounded-lg font-semibold">
                        Edit
                    </div>
                    <div class="px-5 py-3 bg-red-500 rounded-lg font-semibold text-white">
                        Hapus
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-app-layout>
