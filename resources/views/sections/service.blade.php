<section class="bg-gray-50 py-16 px-4 text-gray-800 w-full">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-indigo-600">Layanan yang Kami Tawarkan</h2>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Kami menyediakan berbagai layanan yang dirancang untuk memenuhi kebutuhan proyek dan operasional Anda,
                mulai dari konstruksi hingga tenaga kerja profesional.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-10" id="serviceContainer">
            <!-- Cards dimuat oleh JavaScript -->
        </div>
    </div>
</section>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    crossorigin="anonymous" />

<script>
    const data = [{
            id: 1,
            title: "Jasa Konstruksi Bangunan Sipil & Jalan",
            desc: "Melayani pembangunan jalan, gedung, fasilitas umum, dan proyek sipil lainnya dengan standar mutu tinggi dan ketepatan waktu pengerjaan.",
            icon: "fa fa-road",
            color: "bg-blue-100 text-blue-600"
        },
        {
            id: 2,
            title: "Penyediaan Tenaga Kerja Outsourcing",
            desc: "Seperti Jasa Pengamanan, Jasa Tenaga Ahli, Jasa Tenaga Kebersihan.",
            icon: "fa fa-users",
            color: "bg-green-100 text-green-600"
        },
        {
            id: 3,
            title: "Jasa Sewa Alat Berat",
            desc: "Menyediakan berbagai jenis alat berat seperti excavator, bulldozer, dan loader untuk mendukung kelancaran proyek konstruksi Anda.",
            icon: "fa fa-truck-monster",
            color: "bg-yellow-100 text-yellow-600"
        },
        {
            id: 4,
            title: "Jasa Sewa Kendaraan",
            desc: "Layanan sewa kendaraan operasional dan logistik, lengkap dengan driver profesional, armada terawat, dan fleksibel sesuai kebutuhan.",
            icon: "fa fa-van-shuttle",
            color: "bg-red-100 text-red-600"
        }
    ];

    $(document).ready(function() {
        const container = $('#serviceContainer');

        data.forEach((item) => {
            const card = `
                <div class="${item.color} rounded-2xl p-6 shadow hover:shadow-xl transition duration-300 flex items-start gap-5">
                    <div class=" p-4 rounded-full text-2xl flex-shrink-0">
                        <i class="${item.icon}"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">${item.title}</h3>
                        <p class="text-gray-600 text-base leading-relaxed">${item.desc}</p>
                    </div>
                </div>
            `;
            container.append(card);
        });
    });
</script>
