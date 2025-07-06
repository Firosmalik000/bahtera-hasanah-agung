<!-- Font Awesome CDN (pastikan ada di layout master) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    crossorigin="anonymous" />

<section class="bg-gradient-to-b from-white via-indigo-50 to-white py-20 px-6 text-gray-800 w-full">
    <div class="max-w-6xl mx-auto">
        <!-- Judul Visi -->
        <div class="text-center mb-10 flex justify-center items-center space-x-2">
            <i class="text-3xl text-indigo-700 fas fa-bullseye"></i>
            <h3 class="text-3xl font-bold text-indigo-700" id="visi_title"></h3>
        </div>

        <!-- Deskripsi Visi -->
        <div class=" mb-16 transition duration-300 hover:shadow-xl">
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed text-center" id="visi_desc"></p>
        </div>

    </div>
</section>

<script>
    const dataVisi = {
        title: "Visi Kami",
        desc: "Menjadi perusahaan terdepan dalam bidang konstruksi dan penyediaan jasa tenaga kerja yang handal, profesional, dan berdaya saing tinggi di Indonesia."


    };

    $(document).ready(function() {
        $('#visi_title').text(dataVisi.title);
        $('#visi_desc').text(dataVisi.desc);

        const misiContainer = $('#misiContainer');

    });
</script>
