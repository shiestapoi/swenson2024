@include('home.layout.header')
<!-- Header Start -->
<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent navbar-fixed">
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
                                class="mx-8 flex py-2 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="#CV"
                                class="mx-8 flex py-2 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">Portfolio</a>
                        </li>
                        <li class="group">
                            <a href="#blog"
                                class="mx-8 flex py-2 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">Blog</a>
                        </li>
                        <li class="group">
                            <a href="#contact"
                                class="mx-8 flex py-2 text-base text-dark group-hover:text-primary transition duration-300 dark:text-white">Contact</a>
                        </li>
                        <li class="mt-3 flex items-center pl-8 lg:mt-0">
                            <label class="swap swap-rotate">
                                <input type="checkbox" id="dark-toggle" />
                                <svg class="swap-on fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                                </svg>
                                <svg class="swap-off fill-current w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
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
<section id="home" class="pt-36 transition duration-300 dark:bg-dark">
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
                        <img src="img/1.png" alt="Swenson Simanjuntak" class="z-10 w-2/3 scale-125 md:scale-150" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- CV Section Start -->
<section id="CV" class="bg-white pt-16 pb-16 relative transition duration-300 dark:bg-slate-800">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 transition duration-300 dark:text-white">Mini Resume &
                    Curriculum Vitae</h1>
            </div>
            <div class="w-full lg:w-3/4 bg-white dark:bg-neutral rounded-lg shadow-lg p-8">
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

@include('home.layout.footer')
