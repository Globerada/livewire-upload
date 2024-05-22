<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <header class="bg-gray-900 py-8 text-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col items-center space-y-4 text-center">
                    <h1
                        class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl"
                    >
                        Global Decibel
                    </h1>
                    <p class="max-w-[600px] text-gray-400 md:text-xl">
                        Comparte tus imágenes con el mundo de manera sencilla y
                        segura.
                    </p>
                </div>
            </div>
        </header>
        <section class="py-12 md:py-24 lg:py-32">
            <div class="container mx-auto px-4 md:px-6">
                <div
                    class="grid items-center gap-6 lg:grid-cols-[1fr_500px] lg:gap-12 xl:grid-cols-[1fr_550px]"
                >
                    <img
                        src="https://s.chollos.shop/storage/images/QPdwS1xhXqIrd62C8SBVNesvRQutxFewjgaCe4NJ.jpg"
                        width="550"
                        height="310"
                        alt="Imagen de ejemplo"
                        class="mx-auto aspect-video overflow-hidden rounded-xl object-cover object-center sm:w-full lg:order-last"
                    />
                    <div class="flex flex-col justify-center space-y-4">
                        <div class="space-y-2">
                            <h2
                                class="text-3xl font-bold tracking-tighter sm:text-5xl"
                            >
                                Comparte tus imágenes con facilidad
                            </h2>
                            <p
                                class="max-w-[600px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400"
                            >
                                Sube, comparte y organiza tus imágenes en un
                                solo lugar. Obtén enlaces personalizados para
                                compartir con tus amigos y familiares.
                            </p>
                        </div>
                        <a
                            class="whitespace-nowrap ring-offset-background focus-visible:ring-offset-2 py-2 inline-flex h-10 items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300"
                            href="{{ route('dashboard') }}"
                        >
                            Subir Imagen
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 py-12 md:py-24 lg:py-32 dark:bg-gray-800">
            <div class="container mx-auto px-4 md:px-6">
                <div
                    class="grid items-center gap-6 lg:grid-cols-[1fr_500px] lg:gap-12 xl:grid-cols-[1fr_550px]"
                >
                    <div class="flex flex-col justify-center space-y-4">
                        <div class="space-y-2">
                            <h2
                                class="text-3xl font-bold tracking-tighter sm:text-5xl"
                            >
                                Funciones poderosas
                            </h2>
                            <p
                                class="max-w-[600px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400"
                            >
                                Global Decibel ofrece una amplia gama de
                                funciones para que puedas compartir, organizar y
                                editar tus imágenes de manera eficiente.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="rounded-lg border bg-card text-card-foreground shadow-sm"
                                data-v0-t="card"
                            >
                                <div class="flex flex-col space-y-1.5 p-6">
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
                                        class="h-6 w-6 text-gray-500 dark:text-gray-400"
                                    >
                                        <path
                                            d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"
                                        ></path>
                                        <path
                                            d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold">
                                        Compartir enlaces
                                    </h3>
                                    <p class="text-gray-500 dark:text-gray-400">
                                        Genera enlaces personalizados para
                                        compartir tus imágenes.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="rounded-lg border bg-card text-card-foreground shadow-sm"
                                data-v0-t="card"
                            >
                                <div class="flex flex-col space-y-1.5 p-6">
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
                                        class="h-6 w-6 text-gray-500 dark:text-gray-400"
                                    >
                                        <rect
                                            width="7"
                                            height="7"
                                            x="3"
                                            y="3"
                                            rx="1"
                                        ></rect>
                                        <rect
                                            width="7"
                                            height="7"
                                            x="14"
                                            y="3"
                                            rx="1"
                                        ></rect>
                                        <rect
                                            width="7"
                                            height="7"
                                            x="14"
                                            y="14"
                                            rx="1"
                                        ></rect>
                                        <rect
                                            width="7"
                                            height="7"
                                            x="3"
                                            y="14"
                                            rx="1"
                                        ></rect>
                                    </svg>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold">
                                        Vista de galería
                                    </h3>
                                    <p class="text-gray-500 dark:text-gray-400">
                                        Organiza tus imágenes en una vista de
                                        galería personalizable.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="rounded-lg border bg-card text-card-foreground shadow-sm"
                                data-v0-t="card"
                            >
                                <div class="flex flex-col space-y-1.5 p-6">
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
                                        class="h-6 w-6 text-gray-500 dark:text-gray-400"
                                    >
                                        <path
                                            d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"
                                        ></path>
                                        <line
                                            x1="18"
                                            x2="12"
                                            y1="9"
                                            y2="15"
                                        ></line>
                                        <line
                                            x1="12"
                                            x2="18"
                                            y1="9"
                                            y2="15"
                                        ></line>
                                    </svg>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold">
                                        Edición de imágenes
                                    </h3>
                                    <p class="text-gray-500 dark:text-gray-400">
                                        Edita tus imágenes con herramientas de
                                        recorte, filtros y más.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="rounded-lg border bg-card text-card-foreground shadow-sm"
                                data-v0-t="card"
                            >
                                <div class="flex flex-col space-y-1.5 p-6">
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
                                        class="h-6 w-6 text-gray-500 dark:text-gray-400"
                                    >
                                        <path
                                            d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold">
                                        Almacenamiento en la nube
                                    </h3>
                                    <p class="text-gray-500 dark:text-gray-400">
                                        Almacena tus imágenes de manera segura
                                        en la nube.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img
                        src="https://placehold.co/600x400/png"
                        width="550"
                        height="310"
                        alt="Capturas de pantalla"
                        class="mx-auto aspect-video overflow-hidden rounded-xl object-cover object-center sm:w-full"
                    />
                </div>
            </div>
        </section>
        <section class="py-12 md:py-24 lg:py-32">
            <div class="container mx-auto px-4 md:px-6">
                <div class="grid items-center justify-center gap-4 text-center">
                    <div class="space-y-3">
                        <h2
                            class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl"
                        >
                            Planes y precios
                        </h2>
                        <p
                            class="mx-auto max-w-[700px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400"
                        >
                            Elige el plan que mejor se adapte a tus necesidades.
                        </p>
                    </div>
                    <div
                        class="grid w-full grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3"
                    >
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm"
                            data-v0-t="card"
                        >
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-bold">Gratis</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                    Ideal para usuarios ocasionales
                                </p>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-2 text-left">
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Almacenamiento de 1 GB
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Compartir enlaces
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Edición básica
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-red-500"
                                        >
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                        Soporte prioritario
                                    </li>
                                </ul>
                            </div>
                            <div class="flex items-center p-6">
                                <button
                                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full"
                                >
                                    Registrarse
                                </button>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm"
                            data-v0-t="card"
                        >
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-bold">Pro</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                    Para usuarios con necesidades avanzadas
                                </p>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-2 text-left">
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Almacenamiento de 50 GB
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Compartir enlaces personalizados
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Edición avanzada
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Soporte prioritario
                                    </li>
                                </ul>
                            </div>
                            <div class="flex items-center p-6">
                                <button
                                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full"
                                >
                                    Suscribirse
                                </button>
                            </div>
                        </div>
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm"
                            data-v0-t="card"
                        >
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-bold">Empresa</h3>
                                <p class="text-gray-500 dark:text-gray-400">
                                    Para equipos y organizaciones
                                </p>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-2 text-left">
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Almacenamiento ilimitado
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Compartir enlaces personalizados
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Edición avanzada
                                    </li>
                                    <li>
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
                                            class="mr-2 inline-block h-4 w-4 text-green-500"
                                        >
                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                        Soporte prioritario
                                    </li>
                                </ul>
                            </div>
                            <div class="flex items-center p-6">
                                <button
                                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full"
                                >
                                    Contactar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
