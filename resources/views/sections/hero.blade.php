<section
    class="relative bg-cover min-h-screen flex items-center justify-center bg-center bg-no-repeat py-32 px-6 text-white"
    style="background-image: url('/images/hero.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-10 max-w-6xl mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 drop-shadow-md" id="hero_title">
        </h1>
        <p class="text-lg md:text-xl mb-8 text-gray-200 max-w-3xl mx-auto" id="hero_subtitle">
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#layanan"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition shadow">
                Lihat Layanan Kami
            </a>
            <a href="#contact"
                class="bg-white hover:bg-gray-100 text-indigo-600 font-semibold py-3 px-6 rounded-lg transition shadow">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<SCript>
    const dataHero = {
        title: "PT. BAHTERA HASANAH AGUNG",
        subtitle: "Mitra Terpercaya dalam Konstruksi & Penyediaan Tenaga Kerja Profesional",
    }
    $(document).ready(function() {
        $('#hero_title').text(dataHero.title);
        $('#hero_subtitle').text(dataHero.subtitle);
    })
</SCript>
