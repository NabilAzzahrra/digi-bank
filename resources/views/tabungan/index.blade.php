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
                <div class="w-full">
                    <div class="flex gap-5">
                        <div class="h-48 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div class="flex gap-5 items-start mt-2">
                                <div
                                    class="bg-fuchsia-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-fuchsia-500">
                                    <i class="fi fi-sr-exam-xmark mt-1"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Uji Kompetensi</div>
                                    <div class="text-sm text-gray-500">Simpanan yang
                                        dipersiapkan sejak awal untuk membiayai pelaksanaan ujian sehingga mahasiswa
                                        tidak perlu lagi mengeluarkan biaya tambahan saat uji
                                        kompetensi berlangsung.</div>
                                </div>
                                <div class="text-sm font-bold">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg z-50 py-2">
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-user text-gray-500"></i>
                                                Nasabah</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-wallet-income text-gray-500"></i>
                                                Cash Masuk</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-wallet-arrow text-gray-500"></i>
                                                Cash Keluar</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-sack-dollar text-gray-500"></i>
                                                Saldo</button>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-48 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div class="flex gap-5 items-start mt-2">
                                <div
                                    class="bg-emerald-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-emerald-500">
                                    <i class="fi fi-sr-mosque mt-1"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Kurban</div>
                                    <div class="text-sm text-gray-500">Simpanan yang disiapkan secara khusus untuk
                                        nasabah bisa menabung sedikit demi sedikit hingga cukup untuk melaksanakan
                                        ibadah kurban saat Idul Adha.</div>
                                </div>
                                <div class="text-sm font-bold">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg z-50 py-2">
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-user text-gray-500"></i>
                                                Nasabah</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-wallet-income text-gray-500"></i>
                                                Cash Masuk</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-wallet-arrow text-gray-500"></i>
                                                Cash Keluar</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-sack-dollar text-gray-500"></i>
                                                Saldo</button>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-48 bg-white w-full p-4 border border-gray-200 rounded-xl">
                            <div class="flex gap-5 items-start mt-2">
                                <div
                                    class="bg-sky-100 p-2 rounded-xl w-10 h-10 flex items-center justify-center text-sky-500">
                                    <i class="fi fi-sr-sack-dollar mt-1"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Umum</div>
                                    <div class="text-sm text-gray-500">Tabungan umum adalah simpanan di bank yang dapat
                                        digunakan untuk menabung, menyimpan uang dengan aman, dan memudahkan transaksi
                                        sehari-hari seperti setor, tarik, atau transfer.</div>
                                </div>
                                <div class="text-sm font-bold">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg z-50 py-2">
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-user text-gray-500"></i>
                                                Nasabah</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-wallet-income text-gray-500"></i>
                                                Cash Masuk</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-wallet-arrow text-gray-500"></i>
                                                Cash Keluar</button>
                                            <hr>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-sack-dollar text-gray-500"></i>
                                                Saldo</button>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
