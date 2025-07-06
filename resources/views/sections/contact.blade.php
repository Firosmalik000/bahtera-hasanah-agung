<section class="bg-indigo-50 py-16  text-gray-800 w-full px-24">
    <div class="max-w-full mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-8 text-left space-y-6">

            <!-- Kontak Info -->
            <div class="space-x-6 flex items-center ">
                <!-- Judul & Deskripsi -->
                <div class="text-start w-2/3">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-indigo-700 mb-4">ini tempat logo</h2>
                    <p class="text-lg  text-gray-700">
                        Mitra Terpercaya dalam Konstruksi & Penyediaan Tenaga Kerja Profesional
                    </p>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-xl"><i class="fa fa-location-dot text-red-500"></i></div>

                    <div>
                        <p class="text-gray-700">
                            Jl. Lingkar Timur Golf Permai RT. 004 RW. 001,
                            Kel. Handayani Mulia, Kec. Talang Ubi,
                            Kab. PALI, Sumatera Selatan 31211
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <div class="flex items-start space-x-4">
                        <div class="text-xl"><i class="fa fa-envelope text-red-500"></i></div>
                        <div>
                            <p class="text-gray-700">
                                <a href="mailto:pt.bahtera.hasanah.agung@gmail.com"
                                    class="text-indigo-600 hover:underline">
                                    pt.bahtera.hasanah.agung@gmail.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="flex  items-start space-x-4">
                        <div class="text-xl"><i class="fa fa-phone text-green-500"></i></div>

                        <div>
                            <p class="text-gray-700">
                                <a href="https://wa.me/6285380076307" class="text-indigo-600 hover:underline">
                                    0853 8007 6307
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer / Hak Cipta -->
            <div class="border-t pt-6 text-center text-sm text-gray-500">
                Hak Cipta: © <span id="year">

                </span> <span class="font-medium text-gray-700">PT. Bahtera Hasanah Agung</span>. Seluruh Hak
                Dilindungi.
            </div>
        </div>
    </div>
</section>

<script>
    const date = new Date();
    const year = date.getFullYear();
    $('#document').ready(function() {
        $('#year').text(year);
    });
</script>
