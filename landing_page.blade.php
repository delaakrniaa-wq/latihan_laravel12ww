<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMAFOR - Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-white text-slate-900">

    <header class="relative bg-slate-50 overflow-hidden py-20 lg:py-32">
        <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight text-blue-900 mb-6">
                    Himpunan Mahasiswa <span class="text-blue-600">Informatika</span>
                </h1>
                <p class="text-lg text-slate-600 mb-10 leading-relaxed">
                    KABINET (PILAR JUANG).
                </p>
                <div class="flex gap-4">
                    <a href="#departemen" class="bg-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">Gabung Sekarang</a>
                    <a href="#visi-misi" class="bg-white border border-slate-200 text-slate-700 px-8 py-4 rounded-xl font-bold hover:bg-slate-50 transition">Pelajari Visi</a>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-[400px] bg-slate-200 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/aaaaaaa.jpg') }}" alt="Hero Image" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </header>

    <section id="visi-misi" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-3">Visi & Misi Kami</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="p-10 rounded-3xl bg-blue-50 border border-blue-100">
                    <h4 class="text-2xl font-bold text-blue-900 mb-4">Visi</h4>
                    <p class="text-slate-600 leading-relaxed text-lg italic">
                        "Menjadikan Program Studi Informatika yang bereputasi dan bermartabat di bidang Informatika."
                    </p>
                </div>
                <div class="p-10 rounded-3xl bg-slate-50 border border-slate-100">
                    <h4 class="text-2xl font-bold text-slate-900 mb-4">Misi</h4>
                    <ul class="space-y-4 text-slate-600">
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">01.</span> Melaksanakan regenerasi yang bereputasi dan bermartabat untuk menghasilkan estapet kepengurusan.
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">02.</span> Menyelenggarakan penelitian dibidang informatika yang bermanfaat bagi industri dan berkontribusi nyata dalam pengembangan ilmu pengetahuan.
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">03.</span> Melakukan pengabdian kepada masyarakat dibidang informatika yang berkontribusi nyata untuk kemajuan masyarakat.
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="departemen" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="lg:w-1/2 order-2 lg:order-1">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="h-64 bg-slate-200 rounded-2xl overflow-hidden">
                            <img src="{{ asset('images/bbbbbbb.jpg') }}" alt="HMIT Go To School" class="w-full h-full object-cover">
                        </div>
                        <div class="h-64 bg-slate-200 mt-8 rounded-2xl overflow-hidden">
                            <img src="{{ asset('images/ccccccc.jpg') }}" alt="Bukber" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 order-1 lg:order-2">
                    <h2 class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-3">Departemen Fokus</h2>
                    <h3 class="text-4xl font-extrabold text-slate-900 mb-6">Sosial Masyarakat (SOSMAS)</h3>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        Menjadi garda terdepan dalam pengabdian kepada masyarakat. Kami percaya bahwa teknologi bukan hanya tentang kode, tapi tentang bagaimana ia bisa membantu sesama.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 flex items-center justify-center rounded-lg font-bold">01</div>
                            <span class="font-semibold text-slate-700">HMIT Go To School</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 flex items-center justify-center rounded-lg font-bold">02</div>
                            <span class="font-semibold text-slate-700">Buka Bersama</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="bg-blue-600 rounded-[3rem] p-12 lg:p-20 text-center text-white shadow-2xl shadow-blue-300">
                <h2 class="text-3xl lg:text-5xl font-extrabold mb-6 text-white">Siap Menjadi Bagian dari Kami?</h2>
                <p class="text-blue-100 mb-10 text-lg max-w-2xl mx-auto italic">
                    "Satu baris kode, sejuta manfaat untuk masyarakat."
                </p>
                <button class="bg-white text-blue-600 px-10 py-4 rounded-2xl font-bold text-lg hover:bg-blue-50 transition">Daftar Sekarang</button>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center text-slate-400 text-sm border-t border-slate-100">
        &copy; 2026 Himpunan Mahasiswa Informatika. Dibuat dengan Laravel 12.
    </footer>

</body>
</html> 