<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Menabung') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-2">
                <div
                    class="bg-amber-50 border border-amber-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl w-full">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        Data <span class="text-amber-500 font-bold">Menabung</span> di Digibank Politeknik LP3I Kampus
                        Tasikmalaya
                    </div>
                </div>
                <a href="{{route('menabung.create')}}" class="bg-sky-100 text-sky-500 text-xl border border-sky-500 dark:bg-gray-800 overflow-hidden shadow-sm pt-2 sm:rounded-xl flex items-center justify-center w-20">
                    <i class="fi fi-sr-multiple"></i>
                </a>
            </div>
            <div class="flex mt-6 gap-5">
                <div class="bg-white p-4 border border-gray-200 rounded-xl w-full">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>NOMOR REKENING</th>
                                <th>NAMA NASABAH</th>
                                <th>JENIS TABUNGAN</th>
                                <th>JUMLAH</th>
                                <th>TANGGAL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3279044906020001</td>
                                <td>Nabila Azzahra</td>
                                <td>umum</td>
                                <td>5.000.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020002</td>
                                <td>Budi Santoso</td>
                                <td>kompetensi</td>
                                <td>3.500.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020003</td>
                                <td>Siti Aminah</td>
                                <td>kurban</td>
                                <td>4.200.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020004</td>
                                <td>Andi Wijaya</td>
                                <td>umum</td>
                                <td>2.800.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020005</td>
                                <td>Rina Marlina</td>
                                <td>kompetensi</td>
                                <td>6.000.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020006</td>
                                <td>Dedi Kurniawan</td>
                                <td>kurban</td>
                                <td>4.500.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020007</td>
                                <td>Lina Putri</td>
                                <td>umum</td>
                                <td>3.200.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020008</td>
                                <td>Agus Salim</td>
                                <td>kompetensi</td>
                                <td>7.000.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020009</td>
                                <td>Maya Sari</td>
                                <td>kurban</td>
                                <td>2.500.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020010</td>
                                <td>Rudi Hartono</td>
                                <td>umum</td>
                                <td>3.800.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020011</td>
                                <td>Sri Wahyuni</td>
                                <td>kompetensi</td>
                                <td>5.500.000</td>
                                <td>27-08-2025</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-file-edit text-sky-500"></i> Edit
                                            </button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-delete-document text-red-500"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="font-bold bg-amber-50">Total</td>
                                <td colspan="3" class="font-bold bg-amber-50">43.200.000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</x-app-layout>
