<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercy - Tailwind Template</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
        integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-body">

    <!-- home section -->
    <section class="py-10 bg-white md:mb-10">

        <div class="container max-w-screen-xl px-4 mx-auto">

            <nav class="flex-wrap items-center lg:flex" x-data="{ navbarOpen: false }">
                <div class="flex items-center mb-10 lg:mb-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-40 h-16">

                    <button
                        class="flex items-center justify-center w-10 h-10 ml-auto text-orange-500 border border-orange-500 rounded-md lg:hidden"
                        @click="navbarOpen = !navbarOpen">
                        <i data-feather="menu"></i>
                    </button>
                </div>

                <ul class="flex-col lg:flex lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-14"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <li
                        class="mb-5 font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                        <a href="#">Inicio</a>
                    </li>
                    <li
                        class="mb-5 font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                        <a href="#">Radio</a>
                    </li>
                    <li
                        class="mb-5 font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                        <a href="#">Quienes somos</a>
                    </li>
                    <li
                        class="mb-5 font-semibold text-gray-900 transition duration-300 ease-in-out hover:text-gray-400 lg:mb-0">
                        <a href="#">Reuniones</a>
                    </li>
                </ul>

                <div class="flex-col text-center lg:flex md:flex-row md:items-center md:space-x-6"
                    :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                    <a href="#"
                        class="px-6 py-4 mb-5 text-lg font-semibold text-white transition duration-500 ease-in-out bg-orange-500 rounded-xl hover:bg-orange-700 md:mb-0">Join</a>

                    <a href="#"
                        class="px-6 py-4 text-lg font-semibold text-orange-500 transition duration-500 ease-linear border-2 border-orange-500 rounded-xl hover:bg-orange-700 hover:text-white">Become
                        a member</a>
                </div>




            </nav>

            <div class="flex flex-col justify-between mt-8 space-x-20 text-center lg:flex-row">
                <div class="mt-40 text-center lg:text-left ">


                    <p class="mb-12 font-semibold leading-normal text-center text-black text-md md:text-4xl">
                        Así que, somos embajadores en nombre de cristo, como si Dios rogase por medio de nosotros; os
                        rogamos en nombre de cristo: reconciliaos con dios.
                    </p>

                </div>

                <div class="mt-24">
                    <img src="{{ asset('images/logo.png') }}" alt="Image" class="rounded-ful">
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- home section //end -->


    <section class="py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-lg">

            <!-- Imagen de Radio y Controles -->
            <div class="relative">
                <img src="https://stream-tools.zenomedia.com/content/stations/674a19da-1b21-47df-9834-68dbaab27a08/image/?keep=w&lu=1677639727000&resize=350x350"
                    alt="Radio Embajadores" class="w-full h-96">
                <div class="absolute inset-0 flex items-center justify-center">
                    <!-- Reproductor de Audio -->
                    <div id="audioPlayer" class="p-4">
                        <audio id="zenoAudio" preload="auto" class="w-full outline-none">
                            <source
                                src="https://stream-172.zeno.fm/hxe1jxvelmguv?zt=eyJhbGciOiJIUzI1NiJ9.eyJzdHJlYW0iOiJoeGUxanh2ZWxtZ3V2IiwiaG9zdCI6InN0cmVhbS0xNzIuemVuby5mbSIsInJ0dGwiOjUsImp0aSI6IjNvVmphVEk5VGg2Y2VZUnZvclEzbVEiLCJpYXQiOjE3MjA5MjU1MTcsImV4cCI6MTcyMDkyNTU3N30.rSmkWQoALDZL2q1Y1JW885lKu37di8HEslXSIUaxL1M"
                                type="audio/mpeg">
                            Tu navegador no soporta el elemento de audio.
                        </audio>
                    </div>
                </div>
            </div>

            <!-- Barra de Progreso y Controles -->
            <div id="controls" class="flex items-center justify-between p-4 text-white bg-orange-700">
                <div class="flex items-center">
                    <div class="flex items-center justify-center p-4">
                        <button onclick="togglePlay()"
                            class="px-4 py-2 font-bold text-black bg-orange-500 rounded-full hover:bg-orange-600 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 12L6 6V18Z" />
                            </svg>
                            <span id="playButtonText">Play</span>
                        </button>
                    </div>

                    <div id="volumeSliderContainer" class="w-20 ml-2">
                        <input id="volumeSlider" type="range" min="0" max="1" step="0.1"
                            value="1" onchange="adjustVolume()"
                            class="w-full h-1 bg-gray-700 rounded-full appearance-none range-slider focus:outline-none">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- feature section -->
    <section class="py-16 bg-white md:mt-10">

        <div class="container max-w-screen-xl px-4 mx-auto">

            <h1 class="mb-10 text-xl font-semibold leading-normal text-center text-gray-900 md:text-4xl">Quienes somos
            </h1>
            <p class="mb-10 text-center md:text-2xl">
                Embajadores de Esperanza Iglesia Cristiana Integral es un ministerio llamado por DIOS a predicar la
                palabra de DIOS y nada más que la palabra de DIOS. Predicamos para agradar a DIOS y no a los hombres,
                creemos que la palabra de DIOS no es nunca vieja, sino eterna y en consecuencia no necesita ser
                acomodada ni adaptada a época, lugar, cultura y contexto. Predicamos de parte de DIOS porque es su
                mensaje el que debemos transmitir sin derecho a tergiversarlo, predicamos delante de DIOS porque sabemos
                que un día rendiremos cuentas de la exactitud con la que predicamos su mensaje.
            </p>
            <div class="grid grid-cols-1 gap-20 md:grid-cols-2 lg:grid-cols-3">
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="flex justify-center w-20 py-6 text-white bg-red-700 rounded-xl">
                            <i data-feather="youtube"></i>
                        </div>
                    </div>

                    <h4 class="mb-6 text-lg font-semibold text-gray-900 md:text-2xl">Youtube</h4>

                    <p class="mb-6 font-light text-gray-900 text-md md:text-xl">¡Encuentra todas nuestras enseñanzas!
                    </p>

                    <div class="flex justify-center">
                        <a href="https://www.youtube.com/channel/UC2gyj8wFvTpD9zMw34_LWNQ"
                            class="flex items-center gap-5 px-6 py-4 text-lg font-semibold transition duration-500 ease-linear text-info rounded-xl hover:bg-info hover:text-white">
                            Learn more
                            <i data-feather="chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="flex justify-center w-20 py-6 text-white bg-blue-700 rounded-xl">
                            <i data-feather="facebook" class="w-28"></i>
                        </div>
                    </div>

                    <h4 class="mb-6 text-lg font-semibold text-gray-900 md:text-2xl">Facebook</h4>

                    <p class="mb-6 font-light text-gray-900 text-md md:text-xl">¡Recibe la palabra que viene del cielo!
                    </p>

                    <div class="flex justify-center">
                        <a href="https://www.facebook.com/predicandoando"
                            class="flex items-center gap-5 px-6 py-4 text-lg font-semibold transition duration-500 ease-linear text-info rounded-xl hover:bg-info hover:text-white">
                            Learn more
                            <i data-feather="chevron-right"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="flex justify-center w-20 py-6 text-white bg-rose-600 rounded-xl">
                            <i data-feather="instagram"></i>
                        </div>
                    </div>

                    <h4 class="mb-6 text-lg font-semibold text-gray-900 md:text-2xl">Instagram</h4>

                    <p class="mb-6 font-light text-gray-900 text-md md:text-xl">¡Conoce a Jesús y su infinito amor!</p>

                    <div class="flex justify-center">
                        <a href="https://www.instagram.com/embajadoredeesperanza/"
                            class="flex items-center gap-5 px-6 py-4 text-lg font-semibold transition duration-500 ease-linear text-info rounded-xl hover:bg-info hover:text-white">
                            Learn more
                            <i data-feather="chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- donation section -->
    <section class="py-16 bg-gray-100">

        <div class="container max-w-screen-xl px-4 mx-auto">

            <h1 class="mb-16 text-xl font-semibold text-center text-gray-900 md:text-4xl">¿En qué creemos?</h1>

            <div class="grid grid-cols-1 gap-12 mb-8 md:grid-cols-2 lg:grid-cols-3">
                {{-- 1 --}}
                <div class="h-64 border-2 border-orange-700 py64-4 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> en las Sagradas Escrituras
                        como plena e infalible Palabra de Dios,Revelada al hombre por inspiración del Espíritu Santo, y
                        declaramos que es la única y segura norma de fe y conducta.
                    </p>


                </div>

                {{-- 2 --}}
                <div class="h-64 border-2 border-orange-700 py64-4 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> en el canon bíblico establecido por la iglesia
                        primitiva: 39 libros del Antiguo testamento y los 27 del Nuevo Testamento.
                    </p>


                </div>

                {{-- 3 --}}
                <div class="h-64 border-2 border-orange-700 py64-4 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> que las Sagradas Escrituras se interpreta a sí misma
                        y no aceptamos interpretaciones privadas de ningún tipo y tampoco revelaciones personales que no
                        se sustenten plenamente con la palabra de Dios.
                    </p>


                </div>

                {{-- 4 --}}
                <div class="h-64 py-4 border-2 border-orange-700 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> que el padre es el creador de todo lo visible e
                        invisible, y Autor del incalculable y misericordioso Plan de Salvación desde antes de la
                        fundación del mundo.v
                    </p>


                </div>

                {{-- 5 --}}
                <div class="h-64 py-4 border-2 border-orange-700 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> que el hijo es eternamente engendrado del Padre, y
                        único mediador entre Dios y los hombres; encarnó por obra y gracia del Espíritu Santo y nació de
                        la bienaventurada virgen María, y que vive y reina sentado a la diestra del Padre por los siglos
                        de los siglos.
                    </p>


                </div>

                {{-- 6 --}}
                <div class="h-64 py-4 border-2 border-orange-700 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> que el Espíritu santo procede eternamente del Padre y
                        del Hijo; es revelador del conocimiento de Dios al hombre por las Sagradas Escrituras;
                        Santificador, Persuadidor, Consolador, Dador de Poder y representante único de Cristo sobre la
                        Tierra.
                    </p>


                </div>

                {{-- 7 --}}
                <div class="h-64 py-4 border-2 border-orange-700 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> en el mundo espiritual formado por el cielo y el
                        infierno; en la existencia de los ángeles buenos y malos, y en la de Satanás como jefe de los
                        últimos.
                    </p>


                </div>

                {{-- 8 --}}
                <div class="h-64 py-4 border-2 border-orange-700 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> que el ser humano, hecho a imagen y semejanza de
                        Dios, es una trinidad de espíritu, alma y cuerpo; y posee, en forma innata, la Ley Divina
                        escrita en su corazón.
                    </p>


                </div>

                {{-- 9 --}}
                <div class="border-2 border-orange-700 py64-4 h- rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> en la caída de toda la humanidad por la desobediencia
                        de Adán y Eva, y en la herencia del pecado original en todo hombre.
                    </p>


                </div>

                {{-- 10 --}}
                <div class="border-2 border-orange-700 py64-4 h- rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> que todo pecado voluntariamente cometido en mortal y
                        ocasiona necesariamente la enemistad del hombre con Dios.
                    </p>


                </div>

                {{-- 11 --}}
                <div class="border-2 border-orange-700 py64-4 h- rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> en la muerte redentora de Jesucristo en la cruz del
                        Calvario, en la expiación por su sangre y en la justificación por su mérito sacrificial.
                    </p>


                </div>

                {{-- 12 --}}
                <div class="border-2 border-orange-700 py64-4 h- rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> que Jesucristo murió en la cruz, fue sepultado y
                        resucitó al tercer día de entre los muertos, ascendió al cielo y está sentado a la diestra de
                        Dios Padre.
                    </p>


                </div>

                {{-- 13 --}}
                <div class="py-3 border-2 border-orange-700 h-60 rounded-3xl">


                    <p class="m-6 font-semibold text-gray-700 tex6t-lg md:text-1xl">
                        <spam style="color: red;"> CREEMOS</spam> en la Segunda Venida de Jesucristo en dos etapas:
                        Una invisible para arrebatar a la iglesia antes de la Gran Tribulación; y otra visible para
                        establecer su reinado milenial sobre la tierra, al final de la Gran Tribulación.
                    </p>


                </div>

            </div>


        </div> <!-- container.// -->

    </section>
    <!-- donation section //end -->

    <!-- feature section -->
    <section class="py-16 bg-white">

        <div class="container max-w-screen-xl px-4 mx-auto">

            <div class="flex flex-col justify-between space-x-16 lg:flex-row">
                <div class="flex justify-center lg:justify-start">
                    <img src="{{ asset('images/education.png') }}" alt="Image">
                </div>

                <div class="mt-16">
                    <h1 class="mb-20 text-xl font-semibold text-gray-900 md:text-4xl">Instituto Biblico libertad
                    </h1>

                    <div class="grid grid-cols-1 mb-16 md:grid-cols-2 md:space-x-20">
                        <div class="mb-5 md:mb-0">
                            <div class="flex justify-center w-20 py-6 mb-4 bg-red-700 bg-opacity-5 rounded-xl">
                                <i data-feather="sun" class="text-orange-500"></i>
                            </div>

                            <h3 class="mb-4 text-xl font-semibold text-gray-900 md:text-3xl">Ensenanza</h3>

                            <p class="font-light text-gray-400 text-md md:text-lg">Formamos cristianos comprometidos.</p>
                        </div>

                        <div>
                            <div class="flex justify-center w-20 py-6 mb-4 bg-red-700 bg-opacity-5 rounded-xl">
                                <i data-feather="anchor" class="text-red-500"></i>
                            </div>

                            <h3 class="mb-4 text-xl font-semibold text-gray-900 md:text-3xl">Doctrina</h3>

                            <p class="font-light text-gray-400 text-md md:text-lg">Enseñanza teológica y práctica ministerial.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-20">
                        <div class="mb-5 md:mb-0">
                            <div class="flex justify-center w-20 py-6 mb-4 bg-red-700 bg-opacity-5 rounded-xl">
                                <i data-feather="activity" class="text-orange-500"></i>
                            </div>

                            <h3 class="mb-4 text-xl font-semibold text-gray-900 md:text-3xl">Fe</h3>

                            <p class="font-light text-gray-400 text-md md:text-lg">Desarrolla tu fe y conocimiento bíblico.
                            </p>
                        </div>

                        <div>
                            <div class="flex justify-center w-20 py-6 mb-4 bg-red-700 bg-opacity-5 rounded-xl">
                                <i data-feather="award" class="text-orange-500"></i>
                            </div>

                            <h3 class="mb-4 text-xl font-semibold text-gray-900 md:text-3xl">Crecimiento</h3>

                            <p class="font-light text-gray-400 text-md md:text-lg">Crecimiento espiritual y académico.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- feature section //end -->

    <!-- join volunters section -->
    <section class="py-16 bg-gray-500">

        <div class="container max-w-screen-xl px-4 mx-auto">

            <div class="relative items-center w-full h-full bg-orange-500 rounded-2xl md:rounded-3xl lg:flex">
                <div class="hidden lg:block">
                    <img src="{{ asset('images/humans.png') }}" alt="Image" class="relative z-10">

                    <img src="{{ asset('images/pattern-2.png') }}" alt="Image" class="absolute top-14 left-40">

                    <img src="{{ asset('images/pattern.png') }}" alt="Image" class="absolute top-0 z-0">
                </div>

                <div class="py-4 lg:relative lg:py-0">
                    <h1
                        class="text-xl font-semibold leading-normal text-center text-white md:text-4xl lg:text-left md:mb-5 lg:mb-10">
                        Interested in volunteering? Join <br> with us now</h1>

                    <div class="flex items-center hidden space-x-5 text-center md:block lg:text-left">
                        <input type="text" placeholder="Email"
                            class="px-4 py-4 placeholder-gray-400 outline-none w-96 bg-gray-50 rounded-xl">

                        <button
                            class="px-6 py-4 text-lg font-semibold transition duration-500 ease-in-out bg-gray-50 text-info rounded-xl hover:bg-blue-500 hover:text-white">Join</button>
                    </div>
                </div>
            </div>

        </div> <!-- container.// -->

    </section>
    <!-- join volunters section //end -->

    <footer class="py-16 bg-white">

        <div class="container max-w-screen-xl px-4 mx-auto">
            <div class="flex flex-col lg:flex-row lg:justify-between">

                <div class="mb-10 space-y-7 lg:mb-0">
                    <div class="flex justify-center lg:justify-start">
                        <img src="{{ asset('images/footer-logo.png') }}" alt="Image">
                    </div>

                    <p class="font-light text-center text-gray-400 text-md md:text-lg lg:text-left">Donate and help
                        others people <br> around the world</p>

                    <div class="flex items-center justify-center space-x-5 lg:justify-start">
                        <a href="#"
                            class="px-3 py-3 text-gray-700 transition duration-500 ease-in-out bg-gray-200 rounded-full hover:bg-info hover:text-white">
                            <i data-feather="facebook"></i>
                        </a>

                        <a href="#"
                            class="px-3 py-3 text-gray-700 transition duration-500 ease-in-out bg-gray-200 rounded-full hover:bg-info hover:text-white">
                            <i data-feather="twitter"></i>
                        </a>

                        <a href="#"
                            class="px-3 py-3 text-gray-700 transition duration-500 ease-in-out bg-gray-200 rounded-full hover:bg-info hover:text-white">
                            <i data-feather="linkedin"></i>
                        </a>
                    </div>
                </div>

                <div class="mb-10 text-center lg:text-left space-y-7 lg:mb-0">
                    <h4 class="text-lg font-semibold text-gray-900 md:text-2xl">Quick links</h4>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">Charity
                        Ratings</a>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">Top-Rated
                        Charities</a>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">Top
                        Compensation</a>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">High
                        Asset Charities</a>
                </div>

                <div class="mb-10 text-center lg:text-left space-y-7 lg:mb-0">
                    <h4 class="text-lg font-semibold text-gray-900 md:text-2xl">Company</h4>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">About
                        Us</a>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">Journalists
                        / Media</a>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">Membership</a>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">Blog</a>
                </div>

                <div class="mb-10 text-center lg:text-left space-y-7 lg:mb-0">
                    <h4 class="text-lg font-semibold text-gray-900 md:text-2xl">Legal</h4>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">FAQ</a>

                    <a href="#"
                        class="block text-sm font-light text-gray-400 transition duration-300 ease-in-out md:text-lg hover:text-gray-800">Terms
                        & Conditions</a>
                </div>

            </div>
        </div> <!-- container.// -->

    </footer>

    <script>
        feather.replace()

        const audio = document.getElementById('zenoAudio');
        const playButton = document.getElementById('playButton');
        const playIcon = document.getElementById('playIcon');
        const playPath = document.getElementById('playPath');
        const playButtonText = document.getElementById('playButtonText');
        const progressBarFill = document.getElementById('progressBarFill');
        const volumeButton = document.getElementById('volumeButton');
        const volumeIcon = document.getElementById('volumeIcon');
        const volumePath = document.getElementById('volumePath');
        const volumeSliderContainer = document.getElementById('volumeSliderContainer');
        const volumeSlider = document.getElementById('volumeSlider');

        function togglePlay() {
            if (audio.paused) {
                audio.play();
                playButtonText.textContent = 'Pause';
                playPath.setAttribute('d', 'M6 18L18 12L6 6V18Z');
            } else {
                audio.pause();
                playButtonText.textContent = 'Play';
                playPath.setAttribute('d', 'M6 18L18 12M6 6L18 12');
            }
        }

        function toggleMute() {
            if (audio.volume === 0) {
                audio.volume = volumeSlider.value || 1;
                volumePath.setAttribute('d', 'M5 14l6-6m0 0l6 6m-6-6v16');
            } else {
                audio.volume = 0;
                volumePath.setAttribute('d', 'M13 21v-8m8-3a10 10 0 1 0-16 0v3m-8-3V9m16 12v-8m-4 8v-8');
            }
        }

        function adjustVolume() {
            audio.volume = volumeSlider.value;
        }

        // Actualizar la barra de progreso
        audio.addEventListener('timeupdate', function() {
            const {
                currentTime,
                duration
            } = audio;
            const progressPercent = (currentTime / duration) * 100;
            progressBarFill.style.width = progressPercent + '%';
        });

        // Mostrar/ocultar el control deslizante de volumen
        volumeButton.addEventListener('click', function() {
            volumeSliderContainer.classList.toggle('hidden');
        });
    </script>
</body>

</html>
