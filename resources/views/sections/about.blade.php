<section class="py-20 bg-gradient-to-b from-white via-indigo-50 to-white text-gray-800 w-full">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold text-indigo-700 mb-6 drop-shadow-sm" id="about_title">
            Tentang PT. Bahtera Hasanah Agung
        </h2>
        <div id="about_desc" class=" text-gray-700 space-y-6 leading-relaxed">
            <!-- Konten akan diisi oleh JS -->
        </div>
    </div>
</section>

<script>
    const dataAbout = {
        title: "PT. Bahtera Hasanah Agung",
        desc: [
            "PT. Bahtera Hasanah Agung adalah perusahaan yang bergerak di bidang konstruksi dan penyediaan jasa tenaga kerja. Berlokasi di Kabupaten Penukal Abab Lematang Ilir, Sumatera Selatan, kami hadir sebagai solusi terpercaya dalam mendukung pembangunan infrastruktur serta kebutuhan SDM profesional di berbagai sektor industri.",
            "Didukung oleh tim yang berpengalaman, kami berkomitmen memberikan layanan terbaik yang berorientasi pada mutu, efisiensi, dan kepuasan klien. Fokus kami tidak hanya pada hasil, tetapi juga pada proses kerja yang transparan dan aman.",
            "Dengan semangat untuk terus berkembang, PT. Bahtera Hasanah Agung siap menjadi mitra jangka panjang dalam setiap proyek Anda."
        ],
    };

    $(document).ready(function() {
        $('#about_title').text(dataAbout.title);
        const descHTML = dataAbout.desc.map(paragraph => `<p >${paragraph}</p>`).join('');
        $('#about_desc').html(descHTML);
    });
</script>
