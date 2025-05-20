<x-app-layout>
    {{-- Section 1 --}}
    <section class="w-full h-screen bg-gray-100 md:pl-[310px] p-[20px] pt-[100px]">
        <div class="w-full flex justify-between">
            <h1 class="font-bold text-3xl">Kategori</h1>
            <button data-modal-target="modalKategori" data-modal-toggle="modalKategori"
                class="px-4 py-2 bg-indigo-700 text-white mt-3 rounded-md">
                Tambah Data
            </button>
        </div>

        <!-- Main modal -->
        <div id="modalKategori" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Tambah Kategori
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="modalKategori">
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
                            <label class="block mb-2 text-sm font-medium text-gray-900">Jenis Kategori</label>
                            <select name="jenis"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                <option selected disabled hidden></option>
                                <option value="Penerimaan">Penerimaan</option>
                                <option value="Pengeluaran">Pengeluaran</option>
                            </select>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900">Nama Kategori</label>
                            <input type="text" name="nama_kategori"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button data-modal-hide="default-modal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full bg-white px-3 rounded-xl">
            <div class="mt-3 flex bg-white rounded-md p-3 justify-between">
                <div class="flex gap-4 items-center">
                    <div>
                        ⚫
                    </div>
                    <div>
                        <p class="font-semibold">Minuman</p>
                        <p>Kategori</p>
                    </div>
                </div>
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
