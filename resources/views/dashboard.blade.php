<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-amber-50 border border-amber-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    Selamat Datang <span class="text-amber-500 font-bold">{{ Auth::user()->name }}</span>
                </div>
            </div>
            <div class="flex mt-6 gap-5">
                <div class="bg-white p-4 border border-gray-200 rounded-xl h-36 w-full">
                    <div class="flex items-start gap-5">
                        <div class="mt-4">
                            <div class="text-amber-500 font-bold">MKP DIGIBANK</div>
                            <div class="text-sm text-gray-500 mt-2">Kamu telah memasuki halaman <span
                                    class='font-bold'>MKP DIGI BANK</span>. Silakan cek
                                semua data Anda dengan teliti untuk memastikan informasi sudah benar dan sesuai.</div>
                        </div>
                        <div>
                            <img src="{{ asset('img/work.png') }}" class="w-44">
                        </div>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="flex gap-5">
                        <div class="h-36 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div
                                class="bg-emerald-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-emerald-500">
                                <i class="fi fi-rr-user mt-1"></i>
                            </div>
                            <div class="font-bold text-gray-500 mt-3">Nasabah</div>
                            <div class="font-bold text-4xl text-gray-600 text-right px-4">50</div>
                        </div>
                        <div class="h-36 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div
                                class="bg-amber-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-amber-500">
                                <i class="fi fi-rr-settings mt-1"></i>
                            </div>
                            <div class="font-bold text-gray-500 mt-3">Petugas Admin</div>
                            <div class="font-bold text-4xl text-gray-600 text-right px-4">1</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-6 gap-5">
                <div class="bg-white p-4 border border-gray-200 rounded-xl w-full">
                    <div class="flex items-start gap-5">
                        <div class="mt-4">
                            <div class="text-amber-500 font-bold mb-4">TABUNGAN</div>
                            <div class="flex gap-5 items-start">
                                <div
                                    class="bg-fuchsia-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-fuchsia-500">
                                    <i class="fi fi-sr-exam-xmark mt-1"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Uji Kompetensi</div>
                                    <div class="text-sm text-gray-500">Simpanan yang
                                        dipersiapkan sejak awal untuk membiayai pelaksanaan ujian sehingga mahasiswa tidak perlu lagi mengeluarkan biaya tambahan saat uji
                                        kompetensi berlangsung.</div>
                                </div>
                                <div class="text-xl mt-4 font-bold">0</div>
                            </div>
                            <div class="flex gap-5 items-start mt-2">
                                <div
                                    class="bg-emerald-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-emerald-500">
                                    <i class="fi fi-sr-mosque mt-1"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Kurban</div>
                                    <div class="text-sm text-gray-500">Simpanan yang disiapkan secara khusus untuk nasabah bisa menabung sedikit demi sedikit hingga cukup untuk melaksanakan ibadah kurban saat Idul Adha.</div>
                                </div>
                                <div class="text-xl mt-4 font-bold">0</div>
                            </div>
                            <div class="flex gap-5 items-start mt-2">
                                <div
                                    class="bg-sky-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-sky-500">
                                    <i class="fi fi-sr-sack-dollar mt-1"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Umum</div>
                                    <div class="text-sm text-gray-500">Tabungan umum adalah simpanan di bank yang dapat digunakan untuk menabung, menyimpan uang dengan aman, dan memudahkan transaksi sehari-hari seperti setor, tarik, atau transfer.</div>
                                </div>
                                <div class="text-xl mt-4 font-bold">50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="flex gap-5">
                        <div class="h-36 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div
                                class="bg-red-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-red-500">
                                <i class="fi fi-rr-credit-card mt-1"></i>
                            </div>
                            <div class="font-bold text-gray-500 mt-3">Pembayaran</div>
                            <div class="font-bold text-md text-gray-600 text-right mt-3">Rp 0</div>
                        </div>
                        <div class="h-36 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div
                                class="bg-fuchsia-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-fuchsia-500">
                                <i class="fi fi-sr-money-bill-transfer mt-1"></i>
                            </div>
                            <div class="font-bold text-gray-500 mt-3">Transfer</div>
                            <div class="font-bold text-md text-gray-600 text-right px-4 mt-3">Rp 0</div>
                        </div>
                    </div>
                    <div class="flex gap-5 mt-4">
                        <div class="h-36 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div
                                class="bg-sky-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-sky-500">
                                <i class="fi fi-sr-equality mt-1"></i>
                            </div>
                            <div class="font-bold text-gray-500 mt-3">Saldo</div>
                            <div class="font-bold text-4xl text-gray-600 text-right px-4">Rp 234.200.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
