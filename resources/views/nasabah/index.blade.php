<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nasabah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-amber-50 border border-amber-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    Data <span class="text-amber-500 font-bold">Nasabah</span> Digibank Politeknik LP3I Kampus
                    Tasikmalaya
                </div>
            </div>
            <div class="flex mt-6 gap-5">
                <div class="bg-white p-4 border border-gray-200 rounded-xl w-full">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>NOMOR REKENING</th>
                                <th>NAMA NASABAH</th>
                                <th>NO TELP</th>
                                <th>E-MAIL</th>
                                <th>SALDO</th>
                                <th>JENIS TABUNGAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3279044906020001</td>
                                <td>Nabila Azzahra</td>
                                <td>628111111001</td>
                                <td>nabila1@example.com</td>
                                <td>5.000.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020002</td>
                                <td>Budi Santoso</td>
                                <td>628111111002</td>
                                <td>budi2@example.com</td>
                                <td>2.500.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020003</td>
                                <td>Siti Aminah</td>
                                <td>628111111003</td>
                                <td>siti3@example.com</td>
                                <td>1.750.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020004</td>
                                <td>Andi Wijaya</td>
                                <td>628111111004</td>
                                <td>andi4@example.com</td>
                                <td>3.200.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020005</td>
                                <td>Rina Marlina</td>
                                <td>628111111005</td>
                                <td>rina5@example.com</td>
                                <td>4.800.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020006</td>
                                <td>Dedi Kurniawan</td>
                                <td>628111111006</td>
                                <td>dedi6@example.com</td>
                                <td>6.000.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020007</td>
                                <td>Lina Putri</td>
                                <td>628111111007</td>
                                <td>lina7@example.com</td>
                                <td>2.300.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020008</td>
                                <td>Agus Salim</td>
                                <td>628111111008</td>
                                <td>agus8@example.com</td>
                                <td>5.700.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020009</td>
                                <td>Maya Sari</td>
                                <td>628111111009</td>
                                <td>maya9@example.com</td>
                                <td>3.900.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020010</td>
                                <td>Rudi Hartono</td>
                                <td>628111111010</td>
                                <td>rudi10@example.com</td>
                                <td>7.200.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020011</td>
                                <td>Dewi Anggraini</td>
                                <td>628111111011</td>
                                <td>dewi11@example.com</td>
                                <td>4.500.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020012</td>
                                <td>Ahmad Fauzi</td>
                                <td>628111111012</td>
                                <td>ahmad12@example.com</td>
                                <td>6.800.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020013</td>
                                <td>Nur Aini</td>
                                <td>628111111013</td>
                                <td>nur13@example.com</td>
                                <td>2.700.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020014</td>
                                <td>Bayu Saputra</td>
                                <td>628111111014</td>
                                <td>bayu14@example.com</td>
                                <td>5.100.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020015</td>
                                <td>Melati Ayu</td>
                                <td>628111111015</td>
                                <td>melati15@example.com</td>
                                <td>3.600.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020016</td>
                                <td>Irwan Pratama</td>
                                <td>628111111016</td>
                                <td>irwan16@example.com</td>
                                <td>2.950.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020017</td>
                                <td>Sri Wahyuni</td>
                                <td>628111111017</td>
                                <td>sri17@example.com</td>
                                <td>6.400.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020018</td>
                                <td>Hendra Gunawan</td>
                                <td>628111111018</td>
                                <td>hendra18@example.com</td>
                                <td>4.200.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020019</td>
                                <td>Indah Puspita</td>
                                <td>628111111019</td>
                                <td>indah19@example.com</td>
                                <td>3.300.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020020</td>
                                <td>Galih Ramadhan</td>
                                <td>628111111020</td>
                                <td>galih20@example.com</td>
                                <td>5.900.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020021</td>
                                <td>Ayu Kartika</td>
                                <td>628111111021</td>
                                <td>ayu21@example.com</td>
                                <td>2.200.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020022</td>
                                <td>Rangga Permana</td>
                                <td>628111111022</td>
                                <td>rangga22@example.com</td>
                                <td>6.500.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020023</td>
                                <td>Fitriani</td>
                                <td>628111111023</td>
                                <td>fitri23@example.com</td>
                                <td>4.350.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020024</td>
                                <td>Yusuf Maulana</td>
                                <td>628111111024</td>
                                <td>yusuf24@example.com</td>
                                <td>7.800.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020025</td>
                                <td>Desi Ratna</td>
                                <td>628111111025</td>
                                <td>desi25@example.com</td>
                                <td>3.100.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020026</td>
                                <td>Tommy Adrian</td>
                                <td>628111111026</td>
                                <td>tommy26@example.com</td>
                                <td>2.850.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020027</td>
                                <td>Selvi Oktaviani</td>
                                <td>628111111027</td>
                                <td>selvi27@example.com</td>
                                <td>5.600.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020028</td>
                                <td>Fajar Nugraha</td>
                                <td>628111111028</td>
                                <td>fajar28@example.com</td>
                                <td>3.700.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020029</td>
                                <td>Vina Lestari</td>
                                <td>628111111029</td>
                                <td>vina29@example.com</td>
                                <td>4.950.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020030</td>
                                <td>Rizky Hidayat</td>
                                <td>628111111030</td>
                                <td>rizky30@example.com</td>
                                <td>6.200.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020031</td>
                                <td>Dian Pertiwi</td>
                                <td>628111111031</td>
                                <td>dian31@example.com</td>
                                <td>2.400.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020032</td>
                                <td>Rangga Saputra</td>
                                <td>628111111032</td>
                                <td>rangga32@example.com</td>
                                <td>5.850.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020033</td>
                                <td>Salsa Amelia</td>
                                <td>628111111033</td>
                                <td>salsa33@example.com</td>
                                <td>3.550.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020034</td>
                                <td>Ardiansyah</td>
                                <td>628111111034</td>
                                <td>ardi34@example.com</td>
                                <td>7.100.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020035</td>
                                <td>Putri Maharani</td>
                                <td>628111111035</td>
                                <td>putri35@example.com</td>
                                <td>4.400.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020036</td>
                                <td>Ilham Ramdani</td>
                                <td>628111111036</td>
                                <td>ilham36@example.com</td>
                                <td>2.950.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020037</td>
                                <td>Monica Andriani</td>
                                <td>628111111037</td>
                                <td>monica37@example.com</td>
                                <td>6.700.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020038</td>
                                <td>Yuda Prakoso</td>
                                <td>628111111038</td>
                                <td>yuda38@example.com</td>
                                <td>3.200.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020039</td>
                                <td>Ani Rahmawati</td>
                                <td>628111111039</td>
                                <td>ani39@example.com</td>
                                <td>4.750.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020040</td>
                                <td>Dimas Setiawan</td>
                                <td>628111111040</td>
                                <td>dimas40@example.com</td>
                                <td>5.300.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3279044906020041</td>
                                <td>Ratna Sari</td>
                                <td>628111111041</td>
                                <td>ratna41@example.com</td>
                                <td>2.750.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020042</td>
                                <td>Ferry Nugroho</td>
                                <td>628111111042</td>
                                <td>ferry42@example.com</td>
                                <td>6.450.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020043</td>
                                <td>Yulia Fitri</td>
                                <td>628111111043</td>
                                <td>yulia43@example.com</td>
                                <td>3.600.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020044</td>
                                <td>Rio Alexander</td>
                                <td>628111111044</td>
                                <td>rio44@example.com</td>
                                <td>7.500.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020045</td>
                                <td>Clara Novita</td>
                                <td>628111111045</td>
                                <td>clara45@example.com</td>
                                <td>4.150.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020046</td>
                                <td>Arya Kusuma</td>
                                <td>628111111046</td>
                                <td>arya46@example.com</td>
                                <td>3.450.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020047</td>
                                <td>Tasya Amanda</td>
                                <td>628111111047</td>
                                <td>tasya47@example.com</td>
                                <td>6.950.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020048</td>
                                <td>Reza Gunawan</td>
                                <td>628111111048</td>
                                <td>reza48@example.com</td>
                                <td>2.650.000</td>
                                <td>kurban</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020049</td>
                                <td>Olivia Marcellina</td>
                                <td>628111111049</td>
                                <td>olivia49@example.com</td>
                                <td>5.800.000</td>
                                <td>umum</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3279044906020050</td>
                                <td>Kevin Leonardo</td>
                                <td>628111111050</td>
                                <td>kevin50@example.com</td>
                                <td>4.600.000</td>
                                <td>kompetensi</td>
                                <td>AKTIF</td>
                                <td class="relative">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open" class="">
                                            <i class="fi fi-rr-align-justify ml-3"></i>
                                        </button>

                                        <div x-show="open" @click.away="open = false"
                                            class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg z-50">
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-file-edit text-sky-500"></i>
                                                Edit</button>
                                            <button
                                                class="block w-full text-left px-4 py-2 hover:bg-gray-100 flex items-center gap-3"><i
                                                    class="fi fi-sr-delete-document text-red-500"></i>
                                                Hapus</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="font-bold bg-amber-50">Total</td>
                                <td colspan="4" class="font-bold bg-amber-50">234.200.000</td>
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
