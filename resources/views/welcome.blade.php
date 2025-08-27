<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MKP | Bank Digital</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>

<body class="text-center h-screen flex justify-center items-center">
    <div>
        <div class="text-[50px] font-bold">Campus. <span class="text-amber-500">Online.</span> Banking</div>
        <div class="text-sm mt-8 mb-8">
            Ayo mulai kebiasaan baik dengan menabung! <br>Program Studi Manajemen Keuangan Perbankan Politeknik LP3I
            Kampus
            Tasikmalaya <br> siap memberikan kesempatan bagi Anda untuk menabung bersama kami.
        </div>

        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <div class="flex items-center justify-center w-full">
                        <a href="{{ url('/dashboard') }}">
                            <div
                                class="bg-amber-50 px-4 py-2 border border-amber-500 rounded-full flex items-center justify-center gap-2 w-[150px]">
                                <span class="leading-none">Get Started</span>
                                <i class="fi fi-br-arrow-right text-base leading-none flex items-center"></i>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="flex items-center justify-center w-full">
                        <a href="{{ route('login') }}">
                            <div
                                class="bg-amber-50 px-4 py-2 border border-amber-500 rounded-full flex items-center justify-center gap-2 w-[150px]">
                                <span class="leading-none">Get Started</span>
                                <i class="fi fi-br-arrow-right text-base leading-none flex items-center"></i>
                            </div>
                        </a>
                    </div>
                @endauth
            </nav>
        @endif


        <div class="flex justify-center mt-24 gap-5 mx-32">
            <div class="bg-white border border-gray-100 rounded-4xl p-4 shadow-lg w-1/4 px-8">
                <div class="font-bold mb-3 text-left text-amber-500 text-xl mt-5">Jenis Tabungan</div>
                <div class="text-left font-bold"><i class="fi fi-sr-quiz-alt"></i> Uji Kompetensi</div>
                <div class="text-right font-bold">Kurban <i class="fi fi-sr-mosque"></i></div>
                <div class="text-left font-bold"><i class="fi fi-sr-sack-dollar"></i> Umum</div>
            </div>
            <div class="relative bg-amber-50 rounded-4xl shadow-lg py-4 w-1/2 pt-4 px-10 overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-bl from-amber-100 to-transparent pointer-events-none">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-40 h-40 bg-gradient-to-tr from-amber-100 to-transparent pointer-events-none">
                </div>

                <div class="text-xl text-left font-bold">
                    Menabung Mudah, Aman, dan Bisa Untuk Semua Kebutuhan
                </div>
                <div class="mt-4 text-left text-sm">
                    Dengan rekening modern, Anda bisa menabung, transfer, dan melakukan pembayaran lebih<br>
                    cepat, praktis, dan transparan. Pilih tabungan sesuai tujuan Anda dan <br>
                    nikmati kemudahan transaksi tanpa ribet.
                </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-4xl p-4 shadow-lg w-1/4 px-8">
                <div class="font-bold mb-3 text-right text-amber-500 text-xl mt-5">Keuntungan</div>
                <div class="">Jumlah Nasabah +500</div>
                <div class="">Biaya admin rendah mulai Rp 0</div>
                <div class="">Kemudahan bertransaksi</div>
            </div>
        </div>
    </div>
</body>

</html>
