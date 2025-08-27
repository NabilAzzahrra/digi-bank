<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transaksi Keseluruhan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex gap-2">
                <div
                    class="bg-amber-50 border border-amber-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl w-full">
                    <div class="p-4 text-gray-900 dark:text-gray-100">
                        Data <span class="text-amber-500 font-bold">Transaksi Keseluruhan</span> di Digibank Politeknik LP3I Kampus
                        Tasikmalaya
                    </div>
                </div>
            </div>
            <div class="flex mt-6 gap-5">
                <div class="bg-white p-4 border border-gray-200 rounded-xl w-full">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL</th>
                                <th>KREDIT</th>
                                <th>DEBIT</th>
                                <th>SALDO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>27-08-2025</td>
                                <td>1.000.000</td>
                                <td>0</td>
                                <td>1.000.000</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>27-08-2025</td>
                                <td>0</td>
                                <td>1.000.000</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>27-08-2025</td>
                                <td>500.000</td>
                                <td>0</td>
                                <td>500.000</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>27-08-2025</td>
                                <td>3.000.000</td>
                                <td>0</td>
                                <td>3.500.000</td>
                            </tr>
                        </tbody>
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
