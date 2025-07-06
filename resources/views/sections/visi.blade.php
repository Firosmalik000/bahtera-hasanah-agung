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

        <!-- Judul Misi -->
        <div class="text-center mb-10 flex justify-center items-center space-x-2">
            <i class="text-3xl text-indigo-700 fas fa-lightbulb"></i>
            <h3 class="text-3xl font-bold text-indigo-700" id="misi_title"></h3>
        </div>

        <!-- Container Misi -->
        <div class="grid md:grid-cols-2 gap-8" id="misiContainer"></div>
    </div>
</section>

<script>
    const dataVisi = {
        visi: {
            title: "Visi Kami",
            desc: "Menjadi perusahaan terdepan dalam bidang konstruksi dan penyediaan jasa tenaga kerja yang handal, profesional, dan berdaya saing tinggi di Indonesia."
        },
        misi: {
            title: 'Misi Kami',
            data: [{
                    title: "Layanan Berkualitas & Efisien",
                    desc: "Memberikan layanan konstruksi dan tenaga kerja yang berkualitas, tepat waktu, dan efisien.",
                    icon: "fas fa-tools",
                    color: "green"
                },
                {
                    title: "Peningkatan Kompetensi",
                    desc: "Meningkatkan kompetensi dan kesejahteraan tenaga kerja melalui pelatihan dan pembinaan berkelanjutan.",
                    icon: "fas fa-graduation-cap",
                    color: "blue"
                },
                {
                    title: "Kemitraan Strategis",
                    desc: "Membangun kemitraan strategis yang saling menguntungkan dengan prinsip kejujuran dan tanggung jawab.",
                    icon: "fas fa-handshake",
                    color: "yellow"
                },
                {
                    title: "Kontribusi Pembangunan Nasional",
                    desc: "Berkontribusi aktif dalam pembangunan nasional melalui proyek-proyek bernilai tinggi.",
                    icon: "fas fa-city",
                    color: "red"
                }
            ]
        }

    };

    $(document).ready(function() {
        $('#visi_title').text(dataVisi.visi.title);
        $('#misi_title').text(dataVisi.misi.title);
        $('#visi_desc').text(dataVisi.visi.desc);

        const misiContainer = $('#misiContainer');

        dataVisi.misi.data.forEach((item, index) => {
            const card = `
                <div key="${index}" class="bg-white border-l-4 border-${item.color}-500 rounded-xl shadow-md p-6 flex items-start gap-4 hover:shadow-lg transition">
                    <div class="text-${item.color}-500 text-3xl">
                        <i class="${item.icon}"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold mb-1">${item.title}</h4>
                        <p class="text-gray-700">${item.desc}</p>
                    </div>
                </div>
            `;
            misiContainer.append(card);
        });
    });
</script>
