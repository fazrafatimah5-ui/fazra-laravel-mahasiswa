<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl shadow-slate-200/60 overflow-hidden">
            
            <div class="h-2 bg-indigo-600"></div>
            
            <div class="p-8">
                <header class="mb-8 text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 text-indigo-600 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                    </div>
                    <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">
                        Selamat Datang, <span id="userName" class="text-indigo-600">Fazra Fatimah Azahra</span>!
                    </h1>
                    <p class="text-slate-500 mt-2 text-sm leading-relaxed">
                        Akses cepat panel akademik Anda untuk memantau progres perkuliahan.
                    </p>
                </header>

                <main class="space-y-4">
                    <button class="w-full group flex items-center justify-between bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-200 transform hover:-translate-y-0.5 shadow-md shadow-indigo-200">
                        <span>Lihat Profil</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-70 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div class="mt-6">
                        <h3 class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-3 px-1">Mata Kuliah Semester Ini</h3>
                        <div class="grid gap-2">
                            @foreach($mataKuliah as $mk)
                                <div class="flex items-center p-3 bg-slate-50 border border-slate-100 rounded-xl hover:border-indigo-200 hover:bg-white transition-colors">
                                    <div class="w-2 h-2 bg-indigo-400 rounded-full mr-3"></div>
                                    <span class="text-slate-700 font-medium">{{ $mk }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <button class="w-full flex items-center justify-between border-2 border-slate-100 bg-white hover:border-indigo-100 hover:bg-indigo-50 text-slate-700 font-semibold py-3 px-6 rounded-xl transition-all duration-200 mt-4">
                        <span>Jadwal Kuliah</span>
                        <span class="bg-indigo-100 text-indigo-600 text-xs px-2 py-1 rounded-md font-bold">{{ count($mataKuliah) }} Kelas</span>
                    </button>
                </main>

                <footer class="mt-10 pt-6 border-t border-slate-100 text-center">
                    <p class="text-xs font-medium text-slate-400 uppercase tracking-widest">
                        &copy; <span id="year"></span> Sistem Informasi Akademik
                    </p>
                </footer>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>