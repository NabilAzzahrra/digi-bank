<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Peminjaman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-2">
                <div
                    class="bg-amber-50 border border-amber-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl w-full">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        Data <span class="text-amber-500 font-bold">Peminjaman</span> di Digibank Politeknik LP3I Kampus
                        Tasikmalaya
                    </div>
                </div>
                <a href="{{ route('peminjaman.create') }}"
                    class="bg-sky-100 text-sky-500 text-xl border border-sky-500 dark:bg-gray-800 overflow-hidden shadow-sm pt-2 sm:rounded-xl flex items-center justify-center w-20">
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
                                <th>JUMLAH PINJAMAN</th>
                                <th>JUMLAH KEMBALI</th>
                                <th>TANGGAL PEMINJAMAN</th>
                                <th>TANGGAL BATAS PEMINJAMAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3279044906020001</td>
                                <td>Nabila Azzahra</td>
                                <td>5.000.000</td>
                                <td>4.000.000</td>
                                <td>27-08-2025</td>
                                <td>27-09-2025</td>
                                <td>BELUM</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open"><i
                                                class="fi fi-rr-align-justify ml-3"></i></button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-52 bg-white border rounded-lg shadow-lg z-50">
                                            <a href="{{route('peminjaman.show', 'asdfdqwfdvscgsvcgscvs')}}"
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-undo text-emerald-500"></i> Pengembalian
                                            </a>
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
                                <td>10.000.000</td>
                                <td>10.000.000</td>
                                <td>15-08-2025</td>
                                <td>27-09-2025</td>
                                <td>LUNAS</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open"><i
                                                class="fi fi-rr-align-justify ml-3"></i></button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-52 bg-white border rounded-lg shadow-lg z-50">
                                            <a href="#"
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-undo text-emerald-500"></i> Pengembalian
                                            </a>
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
                                <td>7.500.000</td>
                                <td>5.000.000</td>
                                <td>10-08-2025</td>
                                <td>27-09-2025</td>
                                <td>BELUM</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open"><i
                                                class="fi fi-rr-align-justify ml-3"></i></button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-52 bg-white border rounded-lg shadow-lg z-50">
                                            <a href="#"
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-undo text-emerald-500"></i> Pengembalian
                                            </a>
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
                                <td>3.000.000</td>
                                <td>3.000.000</td>
                                <td>01-08-2025</td>
                                <td>27-09-2025</td>
                                <td>LUNAS</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open"><i
                                                class="fi fi-rr-align-justify ml-3"></i></button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-52 bg-white border rounded-lg shadow-lg z-50">
                                            <a href="#"
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-undo text-emerald-500"></i> Pengembalian
                                            </a>
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
                                <td>8.000.000</td>
                                <td>2.000.000</td>
                                <td>20-08-2025</td>
                                <td>27-09-2025</td>
                                <td>BELUM</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open"><i
                                                class="fi fi-rr-align-justify ml-3"></i></button>
                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-52 bg-white border rounded-lg shadow-lg z-50">
                                            <a href="#"
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <i class="fi fi-sr-undo text-emerald-500"></i> Pengembalian
                                            </a>
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
                                <td colspan="2" class="font-bold bg-amber-50">Total</td>
                                <td class="font-bold bg-amber-50">33.500.000</td>
                                <td colspan="4" class="font-bold bg-amber-50">24.000.000</td>
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
