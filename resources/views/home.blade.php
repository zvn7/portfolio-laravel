<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div>
        <div
            class="absolute inset-x-0 overflow-hidden -top-20 -z-10 transform-gpu blur-3xl sm:-top-80"
            aria-hidden="true"
        >
            <div
                class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="
                    clip-path: polygon(
                        74.1% 44.1%,
                        100% 61.6%,
                        97.5% 26.9%,
                        85.5% 0.1%,
                        80.7% 2%,
                        72.5% 32.5%,
                        60.2% 62.4%,
                        52.4% 68.1%,
                        47.5% 58.3%,
                        45.2% 34.5%,
                        27.5% 76.7%,
                        0.1% 64.9%,
                        17.9% 100%,
                        27.6% 76.8%,
                        76.1% 97.7%,
                        74.1% 44.1%
                    );
                "
            ></div>
        </div>
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center"
            >
                <div class="lg:col-span-3">
                    <span
                        class="block text-sm font-semibold text-blue-600 uppercase"
                        >Welcome to my portfolio</span
                    >
                    <h1
                        class="block text-3xl font-bold text-gray-800 sm:text-4xl md:text-5xl lg:text-6xl"
                    >
                        Ilham Maulana
                    </h1>
                    <p class="text-lg text-gray-800">
                        Frontend Developer || UI UX Designer
                    </p>
                    <p class="mt-4 text-lg text-gray-600">
                        Selamat datang di dunia di mana website bukan hanya
                        halaman, tapi kisah inovasi dan inspirasi.
                    </p>

                    <div
                        class="mt-5 lg:mt-8 flex flex-col items-center gap-2 sm:flex-row sm:gap-3"
                    >
                        <a
                            class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            href="#"
                        >
                            My Resume
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 mt-10 lg:mt-0">
                    <img
                        class="w-full rounded-xl"
                        src="{{ asset('img/714.png') }}"
                        alt="Image Description"
                    />
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 rounded-lg mt-12">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="lg:w-3/4">
                    <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl">
                        Selamat datang di dunia kreatif saya,
                    </h2>
                    <p class="mt-3 text-gray-800">
                        Hai! Saya Ilham Maulana, seorang Frontend Developer dan
                        UI/UX Designer yang bersemangat untuk menciptakan
                        pengalaman online yang menakjubkan. Dengan memadukan
                        keterampilan desain dan pengembangan, saya menghadirkan
                        ide-ide menjadi kenyataan di dunia digital, memastikan
                        setiap detail antarmuka memberikan pengalaman pengguna
                        yang optimal dan memukau.
                    </p>
                </div>
                <div class="lg:w-3/4">
                    <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl">
                        Lets Follow Me!
                    </h2>
                    <p class="mt-3 text-gray-800">
                        Mari berkolaborasi untuk menciptakan sesuatu yang luar
                        biasa!
                    </p>
                    <div class="flex space-x-4 mt-5">
                        <a
                            href="https://instagram.com/ilhammaul7"
                            target="_blank"
                            class="text-gray-800 hover:text-blue-600"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-instagram"
                            >
                                <rect
                                    width="20"
                                    height="20"
                                    x="2"
                                    y="2"
                                    rx="5"
                                    ry="5"
                                />
                                <path
                                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                                />
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                            </svg>
                        </a>
                        <a
                            href="https://twitter.com/"
                            target="_blank"
                            class="text-gray-800 hover:text-blue-600"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-twitter"
                            >
                                <path
                                    d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"
                                />
                            </svg>
                        </a>
                        <a
                            href="https://linkedin.com/in/ilham-maul"
                            target="_blank"
                            class="text-gray-800 hover:text-blue-600"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-linkedin"
                            >
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"
                                />
                                <rect width="4" height="12" x="2" y="9" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                        <a
                            href="https://github.com/zvn7"
                            target="_blank"
                            class="text-gray-800 hover:text-blue-600"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-github"
                            >
                                <path
                                    d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"
                                />
                                <path d="M9 18c-4.51 2-5-2-7-2" />
                            </svg>
                        </a>
                    </div>
                    <p class="mt-5">
                        <a
                            class="inline-flex items-center gap-x-1 font-medium text-blue-600"
                            href="#"
                        >
                            Contact me
                            <svg
                                class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-2xl mb-10">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">
                    Latest Posts
                </h2>
                <p class="mt-1 text-gray-600">
                    Selamat datang di bagian tulisan terkini, tempat di mana
                    saya berbagi pandangan, pemikiran, dan pengetahuan terbaru
                    seputar dunia pengembangan web, desain, dan inovasi
                    teknologi.
                </p>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <a class="block group rounded-xl" href="#">
                    <div class="aspect-w-16 aspect-h-9">
                        <img
                            class="object-cover w-full rounded-xl h-44"
                            src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80"
                            alt="Image Description"
                        />
                    </div>
                    <p
                        class="mt-2 text-base font-medium text-gray-800 group-hover:text-blue-600"
                    >
                        Unity’s inside sales team drives 80% of its revenue with
                        Preline.
                    </p>
                    <p class="mt-2 text-sm text-gray-600">September 12, 2022</p>
                </a>
                <a class="block group rounded-xl" href="#">
                    <div class="aspect-w-16 aspect-h-9">
                        <img
                            class="object-cover w-full rounded-xl h-44"
                            src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80"
                            alt="Image Description"
                        />
                    </div>
                    <p
                        class="mt-2 text-base font-medium text-gray-800 group-hover:text-blue-600"
                    >
                        Unity’s inside sales team drives 80% of its revenue with
                        Preline.
                    </p>
                    <p class="mt-2 text-sm text-gray-600">September 12, 2022</p>
                </a>
                <a class="block group rounded-xl" href="#">
                    <div class="aspect-w-16 aspect-h-9">
                        <img
                            class="object-cover w-full rounded-xl h-44"
                            src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80"
                            alt="Image Description"
                        />
                    </div>
                    <p
                        class="mt-2 text-base font-medium text-gray-800 group-hover:text-blue-600"
                    >
                        Unity’s inside sales team drives 80% of its revenue with
                        Preline.
                    </p>
                    <p class="mt-2 text-sm text-gray-600">September 12, 2022</p>
                </a>
                <a class="block group rounded-xl" href="#">
                    <div class="aspect-w-16 aspect-h-9">
                        <img
                            class="object-cover w-full rounded-xl h-44"
                            src="https://images.unsplash.com/photo-1668869713519-9bcbb0da7171?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=988&q=80"
                            alt="Image Description"
                        />
                    </div>
                    <p
                        class="mt-2 text-base font-medium text-gray-800 group-hover:text-blue-600"
                    >
                        Unity’s inside sales team drives 80% of its revenue with
                        Preline.
                    </p>
                    <p class="mt-2 text-sm text-gray-600">September 12, 2022</p>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-4 mx-auto">
            <p class="text-3xl font-bold text-gray-900">Projects</p>
            <p class="text-lg text-gray-600">
                Showcasing my passion for technology, design, and
                problem-solving through code.
            </p>
            <div class="border-b border-gray-200">
                <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
                    <button
                        type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active"
                        id="tabs-with-underline-item-1"
                        data-hs-tab="#tabs-with-underline-1"
                        aria-controls="tabs-with-underline-1"
                        role="tab"
                    >
                        Pemrograman
                    </button>
                    <button
                        type="button"
                        class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                        id="tabs-with-underline-item-2"
                        data-hs-tab="#tabs-with-underline-2"
                        aria-controls="tabs-with-underline-2"
                        role="tab"
                    >
                        UI UX Design
                    </button>
                </nav>
            </div>
            <div class="mt-3">
                <div
                    id="tabs-with-underline-1"
                    role="tabpanel"
                    aria-labelledby="tabs-with-underline-item-1"
                >
                    <div
                        class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-4 mx-auto"
                    >
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div
                                class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl"
                            >
                                <div
                                    class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl"
                                >
                                    <svg
                                        class="size-28"
                                        width="56"
                                        height="56"
                                        viewBox="0 0 56 56"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            width="56"
                                            height="56"
                                            rx="10"
                                            fill="white"
                                        />
                                        <path
                                            d="M20.2819 26.7478C20.1304 26.5495 19.9068 26.4194 19.6599 26.386C19.4131 26.3527 19.1631 26.4188 18.9647 26.5698C18.848 26.6622 18.7538 26.78 18.6894 26.9144L10.6019 43.1439C10.4874 43.3739 10.4686 43.6401 10.5496 43.884C10.6307 44.1279 10.805 44.3295 11.0342 44.4446C11.1681 44.5126 11.3163 44.5478 11.4664 44.5473H22.7343C22.9148 44.5519 23.0927 44.5037 23.2462 44.4084C23.3998 44.3132 23.5223 44.1751 23.5988 44.011C26.0307 38.9724 24.5566 31.3118 20.2819 26.7478Z"
                                            fill="url(#paint0_linear_2204_541)"
                                        />
                                        <path
                                            d="M28.2171 11.9791C26.201 15.0912 25.026 18.6755 24.8074 22.3805C24.5889 26.0854 25.3342 29.7837 26.9704 33.1126L32.403 44.0113C32.4833 44.1724 32.6067 44.3079 32.7593 44.4026C32.912 44.4973 33.088 44.5475 33.2675 44.5476H44.5331C44.6602 44.5479 44.7861 44.523 44.9035 44.4743C45.0209 44.4257 45.1276 44.3543 45.2175 44.2642C45.3073 44.1741 45.3785 44.067 45.427 43.9492C45.4755 43.8314 45.5003 43.7052 45.5 43.5777C45.5001 43.4274 45.4659 43.2791 45.3999 43.1441L29.8619 11.9746C29.7881 11.8184 29.6717 11.6864 29.5261 11.594C29.3805 11.5016 29.2118 11.4525 29.0395 11.4525C28.8672 11.4525 28.6984 11.5016 28.5529 11.594C28.4073 11.6864 28.2908 11.8184 28.2171 11.9746V11.9791Z"
                                            fill="#2684FF"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_2204_541"
                                                x1="24.734"
                                                y1="29.2284"
                                                x2="16.1543"
                                                y2="44.0429"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop
                                                    offset="0%"
                                                    stop-color="#0052CC"
                                                />
                                                <stop
                                                    offset="0.92"
                                                    stop-color="#2684FF"
                                                />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="p-4 md:p-6">
                                    <span
                                        class="block mb-1 text-xs font-semibold uppercase text-blue-600"
                                    >
                                        Atlassian API
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-gray-800"
                                    >
                                        Atlassian
                                    </h3>
                                    <p class="mt-3 text-gray-500">
                                        A software that develops products for
                                        software developers and developments.
                                    </p>
                                </div>
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200"
                                >
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View sample
                                    </a>
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View API
                                    </a>
                                </div>
                            </div>
                            <div
                                class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl"
                            >
                                <div
                                    class="h-52 flex flex-col justify-center items-center bg-rose-500 rounded-t-xl"
                                >
                                    <svg
                                        class="size-28"
                                        width="56"
                                        height="56"
                                        viewBox="0 0 56 56"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            width="56"
                                            height="56"
                                            rx="10"
                                            fill="white"
                                        />
                                        <g clip-path="url(#clip0_2204_541)">
                                            <path
                                                d="M37.0409 28.8697C33.1968 28.8697 30.0811 31.9854 30.0811 35.8288C30.0811 39.6726 33.1968 42.789 37.0409 42.789C40.8843 42.789 44 39.6726 44 35.8288C44 31.9854 40.8843 28.8697 37.0409 28.8697ZM18.9594 28.8701C15.116 28.8704 12 31.9854 12 35.8292C12 39.6726 15.116 42.7886 18.9594 42.7886C22.8032 42.7886 25.9192 39.6726 25.9192 35.8292C25.9192 31.9854 22.8032 28.8701 18.9591 28.8701H18.9594ZM34.9595 20.1704C34.9595 24.0138 31.8438 27.1305 28.0004 27.1305C24.1563 27.1305 21.0406 24.0138 21.0406 20.1704C21.0406 16.3269 24.1563 13.2109 28.0003 13.2109C31.8438 13.2109 34.9591 16.3269 34.9591 20.1704H34.9595Z"
                                                fill="url(#paint0_radial_2204_541)"
                                            />
                                        </g>
                                        <defs>
                                            <radialGradient
                                                id="paint0_radial_2204_541"
                                                cx="0"
                                                cy="0"
                                                r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(28.0043 29.3944) scale(21.216 19.6102)"
                                            >
                                                <stop
                                                    offset="0%"
                                                    stop-color="#FFB900"
                                                />
                                                <stop
                                                    offset="0.6"
                                                    stop-color="#F95D8F"
                                                />
                                                <stop
                                                    offset="0.999"
                                                    stop-color="#F95353"
                                                />
                                            </radialGradient>
                                            <clipPath id="clip0_2204_541">
                                                <rect
                                                    width="32"
                                                    height="29.5808"
                                                    fill="white"
                                                    transform="translate(12 13.2096)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="p-4 md:p-6">
                                    <span
                                        class="block mb-1 text-xs font-semibold uppercase text-rose-600"
                                    >
                                        Asana API
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-gray-800"
                                    >
                                        Asana
                                    </h3>
                                    <p class="mt-3 text-gray-500">
                                        Track tasks and projects, use agile
                                        boards, measure progress.
                                    </p>
                                </div>
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200"
                                >
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View sample
                                    </a>
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View API
                                    </a>
                                </div>
                            </div>
                            <div
                                class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl"
                            >
                                <div
                                    class="h-52 flex flex-col justify-center items-center bg-rose-500 rounded-t-xl"
                                >
                                    <svg
                                        class="size-28"
                                        width="56"
                                        height="56"
                                        viewBox="0 0 56 56"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            width="56"
                                            height="56"
                                            rx="10"
                                            fill="white"
                                        />
                                        <g clip-path="url(#clip0_2204_541)">
                                            <path
                                                d="M37.0409 28.8697C33.1968 28.8697 30.0811 31.9854 30.0811 35.8288C30.0811 39.6726 33.1968 42.789 37.0409 42.789C40.8843 42.789 44 39.6726 44 35.8288C44 31.9854 40.8843 28.8697 37.0409 28.8697ZM18.9594 28.8701C15.116 28.8704 12 31.9854 12 35.8292C12 39.6726 15.116 42.7886 18.9594 42.7886C22.8032 42.7886 25.9192 39.6726 25.9192 35.8292C25.9192 31.9854 22.8032 28.8701 18.9591 28.8701H18.9594ZM34.9595 20.1704C34.9595 24.0138 31.8438 27.1305 28.0004 27.1305C24.1563 27.1305 21.0406 24.0138 21.0406 20.1704C21.0406 16.3269 24.1563 13.2109 28.0003 13.2109C31.8438 13.2109 34.9591 16.3269 34.9591 20.1704H34.9595Z"
                                                fill="url(#paint0_radial_2204_541)"
                                            />
                                        </g>
                                        <defs>
                                            <radialGradient
                                                id="paint0_radial_2204_541"
                                                cx="0"
                                                cy="0"
                                                r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(28.0043 29.3944) scale(21.216 19.6102)"
                                            >
                                                <stop
                                                    offset="0%"
                                                    stop-color="#FFB900"
                                                />
                                                <stop
                                                    offset="0.6"
                                                    stop-color="#F95D8F"
                                                />
                                                <stop
                                                    offset="0.999"
                                                    stop-color="#F95353"
                                                />
                                            </radialGradient>
                                            <clipPath id="clip0_2204_541">
                                                <rect
                                                    width="32"
                                                    height="29.5808"
                                                    fill="white"
                                                    transform="translate(12 13.2096)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="p-4 md:p-6">
                                    <span
                                        class="block mb-1 text-xs font-semibold uppercase text-rose-600"
                                    >
                                        Asana API
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-gray-800"
                                    >
                                        Asana
                                    </h3>
                                    <p class="mt-3 text-gray-500">
                                        Track tasks and projects, use agile
                                        boards, measure progress.
                                    </p>
                                </div>
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200"
                                >
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View sample
                                    </a>
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View API
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    id="tabs-with-underline-2"
                    class="hidden"
                    role="tabpanel"
                    aria-labelledby="tabs-with-underline-item-2"
                >
                    <div
                        class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-4 mx-auto"
                    >
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div
                                class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl"
                            >
                                <div
                                    class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl"
                                >
                                    <svg
                                        class="size-28"
                                        width="56"
                                        height="56"
                                        viewBox="0 0 56 56"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            width="56"
                                            height="56"
                                            rx="10"
                                            fill="white"
                                        />
                                        <path
                                            d="M20.2819 26.7478C20.1304 26.5495 19.9068 26.4194 19.6599 26.386C19.4131 26.3527 19.1631 26.4188 18.9647 26.5698C18.848 26.6622 18.7538 26.78 18.6894 26.9144L10.6019 43.1439C10.4874 43.3739 10.4686 43.6401 10.5496 43.884C10.6307 44.1279 10.805 44.3295 11.0342 44.4446C11.1681 44.5126 11.3163 44.5478 11.4664 44.5473H22.7343C22.9148 44.5519 23.0927 44.5037 23.2462 44.4084C23.3998 44.3132 23.5223 44.1751 23.5988 44.011C26.0307 38.9724 24.5566 31.3118 20.2819 26.7478Z"
                                            fill="url(#paint0_linear_2204_541)"
                                        />
                                        <path
                                            d="M28.2171 11.9791C26.201 15.0912 25.026 18.6755 24.8074 22.3805C24.5889 26.0854 25.3342 29.7837 26.9704 33.1126L32.403 44.0113C32.4833 44.1724 32.6067 44.3079 32.7593 44.4026C32.912 44.4973 33.088 44.5475 33.2675 44.5476H44.5331C44.6602 44.5479 44.7861 44.523 44.9035 44.4743C45.0209 44.4257 45.1276 44.3543 45.2175 44.2642C45.3073 44.1741 45.3785 44.067 45.427 43.9492C45.4755 43.8314 45.5003 43.7052 45.5 43.5777C45.5001 43.4274 45.4659 43.2791 45.3999 43.1441L29.8619 11.9746C29.7881 11.8184 29.6717 11.6864 29.5261 11.594C29.3805 11.5016 29.2118 11.4525 29.0395 11.4525C28.8672 11.4525 28.6984 11.5016 28.5529 11.594C28.4073 11.6864 28.2908 11.8184 28.2171 11.9746V11.9791Z"
                                            fill="#2684FF"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_2204_541"
                                                x1="24.734"
                                                y1="29.2284"
                                                x2="16.1543"
                                                y2="44.0429"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop
                                                    offset="0%"
                                                    stop-color="#0052CC"
                                                />
                                                <stop
                                                    offset="0.92"
                                                    stop-color="#2684FF"
                                                />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="p-4 md:p-6">
                                    <span
                                        class="block mb-1 text-xs font-semibold uppercase text-blue-600"
                                    >
                                        Atlassian API
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-gray-800"
                                    >
                                        Atlassian
                                    </h3>
                                    <p class="mt-3 text-gray-500">
                                        A software that develops products for
                                        software developers and developments.
                                    </p>
                                </div>
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200"
                                >
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View sample
                                    </a>
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View API
                                    </a>
                                </div>
                            </div>
                            <div
                                class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl"
                            >
                                <div
                                    class="h-52 flex flex-col justify-center items-center bg-rose-500 rounded-t-xl"
                                >
                                    <svg
                                        class="size-28"
                                        width="56"
                                        height="56"
                                        viewBox="0 0 56 56"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            width="56"
                                            height="56"
                                            rx="10"
                                            fill="white"
                                        />
                                        <g clip-path="url(#clip0_2204_541)">
                                            <path
                                                d="M37.0409 28.8697C33.1968 28.8697 30.0811 31.9854 30.0811 35.8288C30.0811 39.6726 33.1968 42.789 37.0409 42.789C40.8843 42.789 44 39.6726 44 35.8288C44 31.9854 40.8843 28.8697 37.0409 28.8697ZM18.9594 28.8701C15.116 28.8704 12 31.9854 12 35.8292C12 39.6726 15.116 42.7886 18.9594 42.7886C22.8032 42.7886 25.9192 39.6726 25.9192 35.8292C25.9192 31.9854 22.8032 28.8701 18.9591 28.8701H18.9594ZM34.9595 20.1704C34.9595 24.0138 31.8438 27.1305 28.0004 27.1305C24.1563 27.1305 21.0406 24.0138 21.0406 20.1704C21.0406 16.3269 24.1563 13.2109 28.0003 13.2109C31.8438 13.2109 34.9591 16.3269 34.9591 20.1704H34.9595Z"
                                                fill="url(#paint0_radial_2204_541)"
                                            />
                                        </g>
                                        <defs>
                                            <radialGradient
                                                id="paint0_radial_2204_541"
                                                cx="0"
                                                cy="0"
                                                r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(28.0043 29.3944) scale(21.216 19.6102)"
                                            >
                                                <stop
                                                    offset="0%"
                                                    stop-color="#FFB900"
                                                />
                                                <stop
                                                    offset="0.6"
                                                    stop-color="#F95D8F"
                                                />
                                                <stop
                                                    offset="0.999"
                                                    stop-color="#F95353"
                                                />
                                            </radialGradient>
                                            <clipPath id="clip0_2204_541">
                                                <rect
                                                    width="32"
                                                    height="29.5808"
                                                    fill="white"
                                                    transform="translate(12 13.2096)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="p-4 md:p-6">
                                    <span
                                        class="block mb-1 text-xs font-semibold uppercase text-rose-600"
                                    >
                                        Asana API
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-gray-800"
                                    >
                                        Asana
                                    </h3>
                                    <p class="mt-3 text-gray-500">
                                        Track tasks and projects, use agile
                                        boards, measure progress.
                                    </p>
                                </div>
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200"
                                >
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View sample
                                    </a>
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View API
                                    </a>
                                </div>
                            </div>
                            <div
                                class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl"
                            >
                                <div
                                    class="h-52 flex flex-col justify-center items-center bg-rose-500 rounded-t-xl"
                                >
                                    <svg
                                        class="size-28"
                                        width="56"
                                        height="56"
                                        viewBox="0 0 56 56"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <rect
                                            width="56"
                                            height="56"
                                            rx="10"
                                            fill="white"
                                        />
                                        <g clip-path="url(#clip0_2204_541)">
                                            <path
                                                d="M37.0409 28.8697C33.1968 28.8697 30.0811 31.9854 30.0811 35.8288C30.0811 39.6726 33.1968 42.789 37.0409 42.789C40.8843 42.789 44 39.6726 44 35.8288C44 31.9854 40.8843 28.8697 37.0409 28.8697ZM18.9594 28.8701C15.116 28.8704 12 31.9854 12 35.8292C12 39.6726 15.116 42.7886 18.9594 42.7886C22.8032 42.7886 25.9192 39.6726 25.9192 35.8292C25.9192 31.9854 22.8032 28.8701 18.9591 28.8701H18.9594ZM34.9595 20.1704C34.9595 24.0138 31.8438 27.1305 28.0004 27.1305C24.1563 27.1305 21.0406 24.0138 21.0406 20.1704C21.0406 16.3269 24.1563 13.2109 28.0003 13.2109C31.8438 13.2109 34.9591 16.3269 34.9591 20.1704H34.9595Z"
                                                fill="url(#paint0_radial_2204_541)"
                                            />
                                        </g>
                                        <defs>
                                            <radialGradient
                                                id="paint0_radial_2204_541"
                                                cx="0"
                                                cy="0"
                                                r="1"
                                                gradientUnits="userSpaceOnUse"
                                                gradientTransform="translate(28.0043 29.3944) scale(21.216 19.6102)"
                                            >
                                                <stop
                                                    offset="0%"
                                                    stop-color="#FFB900"
                                                />
                                                <stop
                                                    offset="0.6"
                                                    stop-color="#F95D8F"
                                                />
                                                <stop
                                                    offset="0.999"
                                                    stop-color="#F95353"
                                                />
                                            </radialGradient>
                                            <clipPath id="clip0_2204_541">
                                                <rect
                                                    width="32"
                                                    height="29.5808"
                                                    fill="white"
                                                    transform="translate(12 13.2096)"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="p-4 md:p-6">
                                    <span
                                        class="block mb-1 text-xs font-semibold uppercase text-rose-600"
                                    >
                                        Asana API
                                    </span>
                                    <h3
                                        class="text-xl font-semibold text-gray-800"
                                    >
                                        Asana
                                    </h3>
                                    <p class="mt-3 text-gray-500">
                                        Track tasks and projects, use agile
                                        boards, measure progress.
                                    </p>
                                </div>
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200"
                                >
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View sample
                                    </a>
                                    <a
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                        href="#"
                                    >
                                        View API
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 my-8 rounded-md p-8">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center"
            >
                <div class="lg:col-span-3">
                    <h2 class="text-3xl font-semibold text-gray-800">Career</h2>
                    <p class="text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>

                <div class="lg:col-span-4 mt-10 lg:mt-0">
                    <div>
                        <div class="flex gap-x-3">
                            <div class="w-16 text-end">
                                <span class="text-xs text-gray-500"
                                    >12:05PM</span
                                >
                            </div>
                            <div
                                class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200"
                            >
                                <div
                                    class="relative z-10 size-7 flex justify-center items-center"
                                >
                                    <div
                                        class="size-2 rounded-full bg-gray-400"
                                    ></div>
                                </div>
                            </div>
                            <div class="grow pt-0.5 pb-8">
                                <h3
                                    class="flex gap-x-1.5 font-semibold text-gray-800"
                                >
                                    <svg
                                        class="flex-shrink-0 size-4 mt-1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"
                                        ></path>
                                        <polyline
                                            points="14 2 14 8 20 8"
                                        ></polyline>
                                        <line
                                            x1="16"
                                            x2="8"
                                            y1="13"
                                            y2="13"
                                        ></line>
                                        <line
                                            x1="16"
                                            x2="8"
                                            y1="17"
                                            y2="17"
                                        ></line>
                                        <line
                                            x1="10"
                                            x2="8"
                                            y1="9"
                                            y2="9"
                                        ></line>
                                    </svg>
                                    Created "Preline in React" task
                                </h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Find more detailed insctructions here.
                                </p>
                                <button
                                    type="button"
                                    class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                >
                                    <img
                                        class="flex-shrink-0 size-4 rounded-full"
                                        src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                        alt="Image Description"
                                    />
                                    James Collins
                                </button>
                            </div>
                        </div>
                        <div class="flex gap-x-3">
                            <div class="w-16 text-end">
                                <span class="text-xs text-gray-500"
                                    >12:05PM</span
                                >
                            </div>
                            <div
                                class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200"
                            >
                                <div
                                    class="relative z-10 size-7 flex justify-center items-center"
                                >
                                    <div
                                        class="size-2 rounded-full bg-gray-400"
                                    ></div>
                                </div>
                            </div>
                            <div class="grow pt-0.5 pb-8">
                                <h3
                                    class="flex gap-x-1.5 font-semibold text-gray-800"
                                >
                                    Release v5.2.0 quick bug fix 🐞
                                </h3>
                                <button
                                    type="button"
                                    class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                >
                                    <span
                                        class="flex flex-shrink-0 justify-center items-center size-4 bg-white border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full"
                                    >
                                        A
                                    </span>
                                    Alex Gregarov
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
