<section class="bg-white py-20 px-6 text-gray-800 w-full">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-14">
            <h2 class="text-4xl md:text-5xl font-extrabold text-indigo-600">Alasan Memilih PT. Bahtera Hasanah Agung</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8" id="pointContainer">

        </div>
    </div>
</section>


<script>
    const dataWhy = [{
            id: 1,
            title: "Profesional & Berpengalaman",
            desc: "Tim ahli dengan pengalaman luas di bidang konstruksi dan SDM.",
            icon: "fas fa-user-tie",
            color: "green"
        },
        {
            id: 2,
            title: "Layanan Terintegrasi",
            desc: "Solusi lengkap untuk proyek konstruksi, outsourcing, hingga kebutuhan alat dan kendaraan.",
            icon: "fas fa-puzzle-piece",
            color: "blue"
        },
        {
            id: 3,
            title: "Responsif & Tepat Waktu",
            desc: "Kami mengutamakan ketepatan waktu, kecepatan layanan, dan komunikasi yang terbuka.",
            icon: "fas fa-clock",
            color: "yellow"
        },
        {
            id: 4,
            title: "Harga Kompetitif",
            desc: "Layanan berkualitas tinggi dengan harga yang bersaing di pasaran.",
            icon: "fas fa-tags",
            color: "red"
        },
        {
            id: 5,
            title: "Kepuasan Klien adalah Prioritas",
            desc: "Kami bekerja dengan standar tinggi untuk memberikan hasil terbaik bagi setiap mitra.",
            icon: "fas fa-handshake",
            color: "indigo"
        }
    ];

    const colorMap = {
        green: 'bg-green-100 text-green-600',
        blue: 'bg-blue-100 text-blue-600',
        yellow: 'bg-yellow-100 text-yellow-600',
        red: 'bg-red-100 text-red-600',
        indigo: 'bg-indigo-100 text-indigo-600'
    };

    $(document).ready(function() {
        const container = $("#pointContainer");

        dataWhy.forEach((item) => {
            const colorClass = colorMap[item.color] || 'bg-gray-100 text-gray-600';

            const card = `
                <div class="bg-white rounded-xl shadow-lg p-6 flex items-start gap-5">
                    <div class="${colorClass} p-4 rounded-full text-xl">
                        <i class="${item.icon}"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-1">${item.title}</h3>
                        <p class="text-gray-600">${item.desc}</p>
                    </div>
                </div>
            `;

            container.append(card);
        });
    });
</script>
