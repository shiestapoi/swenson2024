@include('home.layout.header')
<!-- Header Start -->
<header class="absolute top-0 left-0 flex w-full items-center bg-transparent">
    <div class="container">
        <div class="relative flex items-center justify-between">
            <div class="px-4">
                <a href="#home" class="block py-6 text-lg font-bold text-primary">Shoukosagiri</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>

                <nav id="nav-menu"
                    class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg transition duration-300 dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#home"
                                class="mx-4 flex py-3 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="#CV"
                                class="mx-4 flex py-3 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">CV</a>
                        </li>
                        <li class="group">
                            <a href="#Porto"
                                class="mx-4 flex py-3 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">Portfolio</a>
                        </li>
                        <li class="group">
                            <a href="#SNS"
                                class="mx-4 flex py-3 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">SNS</a>
                        </li>
                        <li class="group">
                            <a href="#contactme"
                                class="mx-4 flex py-3 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">Contact
                                Me</a>
                        </li>
                        <li class="group">
                            <a href="#contactme"
                                class="btn btn-outline btn-primary mx-4 flex text-base text-dark transition duration-300 dark:text-white">Dashboard</a>
                        </li>
                        <li class="mt-3 flex items-center pl-8 lg:mt-0 darkmodeneon">
                            <label class="swap swap-rotate">
                                <input type="checkbox" id="dark-toggle" />
                                <svg class="swap-on fill-current text-yellow-300 w-8 h-8"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                                </svg>
                                <svg class="swap-off fill-current w-8 h-8 text-slate-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                                </svg>
                            </label>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
<!-- Header End -->

<!-- Hero Section Start -->
<section id="home" class="pt-36 bg-gradient-to-b from-white to-cyan-300 dark:from-dark dark:to-slate-800">
    <div class="container">
        <div class="flex flex-wrap-reverse">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-semibold text-primary pt-8 md:text-xl">Haloo 👋 nama saya <span
                        class="mt-1 block text-4xl font-bold text-dark transition duration-300 dark:text-white lg:text-5xl">Swenson
                        Simanjuntak</span></h1>
                <h2 class="mb-5 text-lg font-medium text-reddark lg:text-2xl">Backend Developer</h2>
                <div
                    class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md mb-5 transition duration-300 dark:bg-gray-800">
                    <div class="flex items-center justify-center w-12 bg-yellow-400">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                        </svg>
                    </div>
                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span
                                class="font-semibold text-yellow-400 transition duration-300 dark:text-yellow-300">Warning</span>
                            <p class="text-sm text-gray-600 transition duration-300 dark:text-gray-200">Development
                                stage!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full self-end px-0 lg:w-1/2">
                <div class="flex justify-center items-center mt-10 lg:mt-9">
                    <div class="square profile">
                        <span></span>
                        <span></span>
                        <span></span>
                        <img src="img/1.png" alt="Swenson Simanjuntak" class="w-2/3 scale-125 md:scale-150" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- CV Section Start -->
<section id="CV"
    class="bg-gradient-to-b from-cyan-300 to-white dark:from-slate-800 dark:to-dark pt-16 pb-16 transition duration-300">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 transition duration-300 dark:text-white">Mini Resume &
                    Curriculum Vitae</h1>
            </div>
            <div class="w-full lg:w-3/4 bg-white dark:bg-neutral rounded-lg shadow-lg p-8 neonbox">
                <!-- Profile Image and Contact Info -->
                <div class="flex flex-col items-center text-center mb-12">
                    <div class="avatar">
                        <div class="w-24 mb-4 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                            <img src="img/1.png" />
                        </div>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Swenson Simanjuntak</h1>
                    <p class="text-sm text-gray-600 dark:text-gray-400">swenson@bloomify.com | +62 821 7943 8863</p>
                </div>
                <!-- About Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Tentang Saya</h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        Lulusan dari SMK Negeri 1 Lahat dengan jurusan TKJ yang memiliki pengalaman di dunia Backend
                        Developer. Saya juga memiliki skill Front end Website Development ( Intermediate ). Saya sangat
                        suka dan tertarik untuk memiliki karir di bidang IT.
                    </p>
                </div>
                <!-- Experience Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Pengalaman Kerja</h2>
                    <ul class="list-disc pl-5 text-gray-600 dark:text-gray-400">
                        <li><strong>Magang PT. Telkom Indonesia (STO Lahat) <span class="text-primary">2019 -
                                    2019</span></strong> - Memulai Magang di bidang Telekomunikasi sebagai teknisi
                            jaringan yang difokuskan pada bantuan gangguan-gangguan dan pemasangan pelanggan.</li>
                        <li><strong>Magang Distrik Navigasi Tipe A Kelas I Palembang <span class="text-primary">2023 -
                                    2023</span></strong> - Melanjutkan Magang sebagai Officier Maintenance yang
                            difokuskan untuk menangani masalah-masalah teknis pada lingkup kantor.</li>
                        <li><strong>Freelance Backend Developer <span class="text-primary">2024 -
                                    Sekarang</span></strong> - Memulai Karir sebagai Freelancer Backend Developer yang
                            difokuskan pada sisi belakang website, database, dan Rest API.</li>
                    </ul>
                </div>
                <!-- Education Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Riwayat Pendidikan</h2>
                    <ul class="list-disc pl-5 text-gray-600 dark:text-gray-400">
                        <li>SD Santo Yoseph Lahat <span class="text-primary">2008 - 2014</span></li>
                        <li>SMP Santo Yoseph Lahat <span class="text-primary">2015 - 2017</span></li>
                        <li>SMK Negeri 1 Lahat <span class="text-primary">2018 - 2021</span></li>
                        <li>Politeknik Negeri Sriwijaya <span class="text-primary">2021 - Sekarang</span></li>
                    </ul>
                </div>
                <!-- Skills Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Kemampuan</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Graphic Design</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Figma</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">UI Design</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Adobe Photoshop</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Front end Website Development</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Adobe Illustrator</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Backend Development</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Microsoft Excel</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 50%"></div>
                            </div>
                        </div>
                        <div>
                            <span class="text-gray-600 dark:text-gray-400">Microsoft Word</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Soft Skills Section -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Soft Skill</h2>
                    <ul class="list-disc pl-5 text-gray-600 dark:text-gray-400">
                        <li>Komunikasi - Mampu berkomunikasi dengan baik kepada lawan bicara.</li>
                        <li>Kerja Sama Tim - Mampu bekerja sama dengan tim.</li>
                        <li>Adaptasi - Mampu beradaptasi pada lingkungan yang baru dengan baik.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CV Section End -->
<!-- Porto Section Start -->
<section id="Porto"
    class="bg-gradient-to-b from-white to-cyan-300 dark:from-dark dark:to-slate-800 pt-16 pb-16 relative transition duration-300">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="avatar-group -space-x-6 rtl:space-x-reverse justify-center">
                <div class="avatar">
                    <div class="w-12">
                        <img src="img/1.png" />
                    </div>
                </div>
                <div class="avatar">
                    <div class="w-12">
                        <img src="img/bloowify.png" />
                    </div>
                </div>
            </div>
            <h1 class="text-4xl font-bold text-gray-800 transition duration-300 dark:text-white">Portofolio</h1>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">Berikut adalah beberapa project yang telah saya
                kerjakan bersama agency Bloowify.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-8 mx-auto">
            <!-- Contoh Kartu Galeri Proyek -->
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="img/jlema.jpeg" alt="Jlema" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Dashboard Jlema NFT!
                    </h2>
                    <p>Jlema A timeless and universal digital collectible that celebrates the beauty of clean art.
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">React.js</div>
                        <div class="badge badge-outline">Laravel</div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak kartu proyek sesuai kebutuhan -->
        </div>
    </div>
</section>
<!-- Porto Section End -->
<!-- SNS Section Start -->
<section id="SNS"
    class="bg-gradient-to-b from-cyan-300 to-white dark:from-slate-800 dark:to-dark pt-16 pb-16 relative transition duration-300">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 transition duration-300 dark:text-white">SNS / Sosial Media
                </h1>
            </div>
            <div class="w-full lg:w-3/4">
                <div class="flex flex-wrap justify-center gap-8 mx-auto">
                    <!-- Instagram -->
                    <a href="https://instagram.com/shoukosagiri.poi" target="_blank" class="group"
                        style="width: 160px;">
                        <div
                            class="p-6 max-w-sm bg-gradient-to-r transition duration-300 from-purple-500 to-pink-500 rounded-lg border border-gray-200 shadow-md hover:bg-gradient-to-bl dark:bg-gray-800 dark:border-gray-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <div class="flex justify-center">
                                <svg class="w-8 h-8 text-white group-hover:text-purple-300" fill="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.75 2A5.756 5.756 0 0 0 2 7.75v8.5A5.756 5.756 0 0 0 7.75 22h8.5A5.756 5.756 0 0 0 22 16.25v-8.5A5.756 5.756 0 0 0 16.25 2h-8.5zm0 2h8.5A3.752 3.752 0 0 1 20 7.75v8.5A3.752 3.752 0 0 1 16.25 20h-8.5A3.752 3.752 0 0 1 4 16.25v-8.5A3.752 3.752 0 0 1 7.75 4zm4.25 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.5-3a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5z" />
                                </svg>
                            </div>
                            <h5 class="mb-2 mt-2 text-2xl font-bold tracking-tight text-white text-center">Instagram
                            </h5>
                        </div>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/shoukosagiri.poi" target="_blank" class="group"
                        style="width: 160px;">
                        <div
                            class="p-6 max-w-sm bg-gradient-to-r transition duration-300 from-blue-600 to-blue-400 rounded-lg border border-gray-200 shadow-md hover:bg-gradient-to-bl dark:bg-gray-800 dark:border-gray-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <div class="flex justify-center">
                                <svg class="w-8 h-8 text-white group-hover:text-blue-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M22.675 0h-21.35C.595 0 0 .596 0 1.325v21.35c0 .729.595 1.325 1.325 1.325h11.483v-9.294h-3.13v-3.62h3.13V8.41c0-3.1 1.893-4.785 4.659-4.785 1.325 0 2.463.098 2.794.142v3.24h-1.917c-1.504 0-1.794.715-1.794 1.763v2.313h3.587l-.467 3.62h-3.12V24h6.108c.729 0 1.324-.596 1.324-1.325v-21.35C24 .595 23.404 0 22.675 0z" />
                                </svg>
                            </div>
                            <h5 class="mb-2 mt-2 text-2xl font-bold tracking-tight text-white text-center">Facebook
                            </h5>
                        </div>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/shoukosagiri" target="_blank" class="group" style="width: 160px;">
                        <div
                            class="p-6 max-w-sm bg-gradient-to-r transition duration-300 from-stone-600 to-zinc-500 rounded-lg border border-gray-200 shadow-md hover:bg-gradient-to-bl dark:bg-gray-800 dark:border-gray-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <div class="flex justify-center">
                                <svg class="w-8 h-8 text-white group-hover:text-stone-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.719 0-4.924 2.205-4.924 4.924 0 .386.044.763.128 1.124-4.094-.205-7.722-2.166-10.148-5.144-.424.729-.666 1.574-.666 2.476 0 1.71.87 3.213 2.188 4.096-.806-.026-1.566-.247-2.228-.616v.062c0 2.386 1.698 4.374 3.946 4.827-.413.112-.848.171-1.296.171-.316 0-.624-.03-.924-.086.625 1.953 2.441 3.377 4.59 3.415-1.683 1.319-3.808 2.105-6.115 2.105-.398 0-.79-.023-1.175-.068 2.179 1.397 4.768 2.212 7.548 2.212 9.056 0 14.007-7.503 14.007-14.007 0-.213-.005-.425-.014-.636.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </div>
                            <h5 class="mb-2 mt-2 text-2xl font-bold tracking-tight text-white text-center">Twitter</h5>
                        </div>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/shoukosagiri/" target="_blank" class="group"
                        style="width: 160px;">
                        <div
                            class="p-6 max-w-sm bg-gradient-to-r transition duration-300 from-blue-700 to-blue-900 rounded-lg border border-gray-200 shadow-md hover:bg-gradient-to-bl dark:bg-gray-800 dark:border-gray-700 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <div class="flex justify-center">
                                <svg class="w-8 h-8 text-white group-hover:text-blue-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.8 0-5 2.2-5 5v14c0 2.8 2.2 5 5 5h14c2.8 0 5-2.2 5-5v-14c0-2.8-2.2-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.3c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zm13.5 11.3h-3v-5.6c0-1.3 0-3-1.9-3s-2.1 1.4-2.1 2.9v5.7h-3v-10h2.9v1.4h.1c.4-.7 1.4-1.5 2.9-1.5 3.1 0 3.7 2 3.7 4.7v5.4z" />
                                </svg>
                            </div>
                            <h5 class="mb-2 mt-2 text-2xl font-bold tracking-tight text-white text-center">LinkedIn
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SNS Section End -->

<!-- contactme Section Start -->
<section id="contactme"
    class="bg-gradient-to-b from-white to-cyan-300 dark:from-dark dark:to-slate-800 pt-16 pb-16 relative transition duration-300">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 transition duration-300 dark:text-white">Hubungi Saya</h1>
            <p class="text-xl mt-4 text-gray-400 transition duration-300 dark:text-white">Saya tersedia untuk proyek
                freelance. Hubungi saya melalui formulir
                di bawah ini.</p>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-lg">
                <form action="#" method="POST"
                    class="bg-white shadow-xl rounded-lg p-8 mb-4 transition duration-300 dark:bg-gray-800">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-200" for="name">
                            Nama
                        </label>
                        <input
                            class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 bg-white leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-white"
                            id="name" type="text" placeholder="Nama Anda">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-200" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 bg-white leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-white"
                            id="email" type="email" placeholder="email@example.com">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-200" for="message">
                            Pesan
                        </label>
                        <textarea
                            class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 bg-white leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-white"
                            id="message" placeholder="Tulis pesan Anda di sini" rows="4"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transform transition duration-300 ease-in-out hover:scale-105"
                            type="submit">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contactme Section End -->

@include('home.layout.footer')
