<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transfer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-amber-50 border border-amber-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    Form Input <span class="text-amber-500 font-bold">Transfer</span>
                </div>
            </div>
            <div class="flex mt-6 gap-5">
                <div class="w-full">
                    <div class="flex gap-5">
                        <div class="bg-white w-full p-6 border border-gray-200 rounded-xl">
                            <form class="w-full">
                                <div class="mb-5">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                        Rekening</label>
                                    <select id="noRekening"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="no_rek">
                                        <option value="">-- Pilih Nomor Rekening --</option>
                                        <option value="3279044906020001">3279044906020001 - Nabila Azzahra</option>
                                        <option value="3279044906020002">3279044906020002 - Budi Santoso</option>
                                        <option value="3279044906020003">3279044906020003 - Siti Aminah</option>
                                        <option value="3279044906020004">3279044906020004 - Andi Wijaya</option>
                                        <option value="3279044906020005">3279044906020005 - Rina Marlina</option>
                                        <option value="3279044906020006">3279044906020006 - Dedi Kurniawan</option>
                                        <option value="3279044906020007">3279044906020007 - Lina Putri</option>
                                        <option value="3279044906020008">3279044906020008 - Agus Salim</option>
                                        <option value="3279044906020009">3279044906020009 - Maya Sari</option>
                                        <option value="3279044906020010">3279044906020010 - Rudi Hartono</option>

                                        <option value="3279044906020011">3279044906020011 - Sari Dewi</option>
                                        <option value="3279044906020012">3279044906020012 - Ahmad Fauzi</option>
                                        <option value="3279044906020013">3279044906020013 - Dian Pratiwi</option>
                                        <option value="3279044906020014">3279044906020014 - Farhan Rizky</option>
                                        <option value="3279044906020015">3279044906020015 - Yuni Lestari</option>
                                        <option value="3279044906020016">3279044906020016 - Hendra Saputra</option>
                                        <option value="3279044906020017">3279044906020017 - Rika Amalia</option>
                                        <option value="3279044906020018">3279044906020018 - Fajar Hidayat</option>
                                        <option value="3279044906020019">3279044906020019 - Dwi Oktaviani</option>
                                        <option value="3279044906020020">3279044906020020 - Bayu Nugraha</option>

                                        <option value="3279044906020021">3279044906020021 - Tika Wulandari</option>
                                        <option value="3279044906020022">3279044906020022 - Rama Aditya</option>
                                        <option value="3279044906020023">3279044906020023 - Indah Permata</option>
                                        <option value="3279044906020024">3279044906020024 - Yogi Prasetyo</option>
                                        <option value="3279044906020025">3279044906020025 - Laila Husna</option>
                                        <option value="3279044906020026">3279044906020026 - Rio Firmansyah</option>
                                        <option value="3279044906020027">3279044906020027 - Putri Ramadhani</option>
                                        <option value="3279044906020028">3279044906020028 - Aldi Kurnia</option>
                                        <option value="3279044906020029">3279044906020029 - Winda Maharani</option>
                                        <option value="3279044906020030">3279044906020030 - Arif Gunawan</option>

                                        <option value="3279044906020031">3279044906020031 - Nanda Putra</option>
                                        <option value="3279044906020032">3279044906020032 - Syifa Zahra</option>
                                        <option value="3279044906020033">3279044906020033 - Kevin Adrian</option>
                                        <option value="3279044906020034">3279044906020034 - Melati Ayu</option>
                                        <option value="3279044906020035">3279044906020035 - Roni Prabowo</option>
                                        <option value="3279044906020036">3279044906020036 - Fitri Handayani</option>
                                        <option value="3279044906020037">3279044906020037 - Ilham Firmansyah</option>
                                        <option value="3279044906020038">3279044906020038 - Anisa Putri</option>
                                        <option value="3279044906020039">3279044906020039 - Gilang Saputra</option>
                                        <option value="3279044906020040">3279044906020040 - Dela Kurniasih</option>

                                        <option value="3279044906020041">3279044906020041 - Yudha Prasetya</option>
                                        <option value="3279044906020042">3279044906020042 - Silvia Anjani</option>
                                        <option value="3279044906020043">3279044906020043 - Aldi Saputra</option>
                                        <option value="3279044906020044">3279044906020044 - Citra Maharani</option>
                                        <option value="3279044906020045">3279044906020045 - Rangga Pratama</option>
                                        <option value="3279044906020046">3279044906020046 - Vina Lestari</option>
                                        <option value="3279044906020047">3279044906020047 - Hakim Ramdhan</option>
                                        <option value="3279044906020048">3279044906020048 - Ayu Kartika</option>
                                        <option value="3279044906020049">3279044906020049 - Doni Setiawan</option>
                                        <option value="3279044906020050">3279044906020050 - Bella Oktaviani</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                        Rekening Tujuan</label>
                                    <select id="noRekeningTujuan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="no_rek_tujuan">
                                        <option value="">-- Pilih Nomor Rekening --</option>
                                        <option value="3279044906020001">3279044906020001 - Nabila Azzahra</option>
                                        <option value="3279044906020002">3279044906020002 - Budi Santoso</option>
                                        <option value="3279044906020003">3279044906020003 - Siti Aminah</option>
                                        <option value="3279044906020004">3279044906020004 - Andi Wijaya</option>
                                        <option value="3279044906020005">3279044906020005 - Rina Marlina</option>
                                        <option value="3279044906020006">3279044906020006 - Dedi Kurniawan</option>
                                        <option value="3279044906020007">3279044906020007 - Lina Putri</option>
                                        <option value="3279044906020008">3279044906020008 - Agus Salim</option>
                                        <option value="3279044906020009">3279044906020009 - Maya Sari</option>
                                        <option value="3279044906020010">3279044906020010 - Rudi Hartono</option>

                                        <option value="3279044906020011">3279044906020011 - Sari Dewi</option>
                                        <option value="3279044906020012">3279044906020012 - Ahmad Fauzi</option>
                                        <option value="3279044906020013">3279044906020013 - Dian Pratiwi</option>
                                        <option value="3279044906020014">3279044906020014 - Farhan Rizky</option>
                                        <option value="3279044906020015">3279044906020015 - Yuni Lestari</option>
                                        <option value="3279044906020016">3279044906020016 - Hendra Saputra</option>
                                        <option value="3279044906020017">3279044906020017 - Rika Amalia</option>
                                        <option value="3279044906020018">3279044906020018 - Fajar Hidayat</option>
                                        <option value="3279044906020019">3279044906020019 - Dwi Oktaviani</option>
                                        <option value="3279044906020020">3279044906020020 - Bayu Nugraha</option>

                                        <option value="3279044906020021">3279044906020021 - Tika Wulandari</option>
                                        <option value="3279044906020022">3279044906020022 - Rama Aditya</option>
                                        <option value="3279044906020023">3279044906020023 - Indah Permata</option>
                                        <option value="3279044906020024">3279044906020024 - Yogi Prasetyo</option>
                                        <option value="3279044906020025">3279044906020025 - Laila Husna</option>
                                        <option value="3279044906020026">3279044906020026 - Rio Firmansyah</option>
                                        <option value="3279044906020027">3279044906020027 - Putri Ramadhani</option>
                                        <option value="3279044906020028">3279044906020028 - Aldi Kurnia</option>
                                        <option value="3279044906020029">3279044906020029 - Winda Maharani</option>
                                        <option value="3279044906020030">3279044906020030 - Arif Gunawan</option>

                                        <option value="3279044906020031">3279044906020031 - Nanda Putra</option>
                                        <option value="3279044906020032">3279044906020032 - Syifa Zahra</option>
                                        <option value="3279044906020033">3279044906020033 - Kevin Adrian</option>
                                        <option value="3279044906020034">3279044906020034 - Melati Ayu</option>
                                        <option value="3279044906020035">3279044906020035 - Roni Prabowo</option>
                                        <option value="3279044906020036">3279044906020036 - Fitri Handayani</option>
                                        <option value="3279044906020037">3279044906020037 - Ilham Firmansyah</option>
                                        <option value="3279044906020038">3279044906020038 - Anisa Putri</option>
                                        <option value="3279044906020039">3279044906020039 - Gilang Saputra</option>
                                        <option value="3279044906020040">3279044906020040 - Dela Kurniasih</option>

                                        <option value="3279044906020041">3279044906020041 - Yudha Prasetya</option>
                                        <option value="3279044906020042">3279044906020042 - Silvia Anjani</option>
                                        <option value="3279044906020043">3279044906020043 - Aldi Saputra</option>
                                        <option value="3279044906020044">3279044906020044 - Citra Maharani</option>
                                        <option value="3279044906020045">3279044906020045 - Rangga Pratama</option>
                                        <option value="3279044906020046">3279044906020046 - Vina Lestari</option>
                                        <option value="3279044906020047">3279044906020047 - Hakim Ramdhan</option>
                                        <option value="3279044906020048">3279044906020048 - Ayu Kartika</option>
                                        <option value="3279044906020049">3279044906020049 - Doni Setiawan</option>
                                        <option value="3279044906020050">3279044906020050 - Bella Oktaviani</option>
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label for="jumlah"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                                        Transfer</label>
                                    <input type="number" id="jumlah" name="jumlah"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required />
                                </div>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#noRekening').select2({
                placeholder: "Pilih Nomor Rekening",
                allowClear: true
            });
            $('#noRekeningTujuan').select2({
                placeholder: "Pilih Nomor Rekening Tujuan",
                allowClear: true
            });
        });
    </script>
</x-app-layout>
