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
                <a href="{{route('transfer.create')}}" class="bg-sky-100 text-sky-500 text-xl border border-sky-500 dark:bg-gray-800 overflow-hidden shadow-sm pt-2 sm:rounded-xl flex items-center justify-center w-20">
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
                                <th>NO REKENING TUJUAN</th>
                                <th>JUMLAH</th>
                                <th>TANGGAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3279044906020001</td>
                                <td>Nabila Azzahra</td>
                                <td>umum</td>
                                <td>3279044906020002</td>
                                <td>3.000.000</td>
                                <td>27-08-2025</td>
                            </tr>
                            <tr>
                                <td>3279044906020002</td>
                                <td>Budi Santoso</td>
                                <td>umum</td>
                                <td>3279044906020001</td>
                                <td>5.000.000</td>
                                <td>27-08-2025</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="font-bold bg-amber-50">Total</td>
                                <td colspan="2" class="font-bold bg-amber-50">8.000.000</td>
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
