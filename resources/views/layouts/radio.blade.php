<section class="bg-gray-100 py-12">
    <div class="max-w-4xl mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
        <!-- Contenedor principal -->
        <div class="relative">
            <!-- Imagen de la estación de radio -->
            <img src="https://stream-tools.zenomedia.com/content/stations/674a19da-1b21-47df-9834-68dbaab27a08/image/?keep=w&lu=1677639727000&resize=350x350" alt="Radio Embajadores" class="w-full h-auto">

            <!-- Controles y reproductor de audio -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div id="audioPlayer" class="p-4">
                    <audio id="zenoAudio" preload="auto" class="w-full outline-none">
                        <source src="https://stream-172.zeno.fm/hxe1jxvelmguv?zt=eyJhbGciOiJIUzI1NiJ9.eyJzdHJlYW0iOiJoeGUxanh2ZWxtZ3V2IiwiaG9zdCI6InN0cmVhbS0xNzIuemVuby5mbSIsInJ0dGwiOjUsImp0aSI6IjNvVmphVEk5VGg2Y2VZUnZvclEzbVEiLCJpYXQiOjE3MjA5MjU1MTcsImV4cCI6MTcyMDkyNTU3N30.rSmkWQoALDZL2q1Y1JW885lKu37di8HEslXSIUaxL1M" type="audio/mpeg">
                        Tu navegador no soporta el elemento de audio.
                    </audio>
                </div>
            </div>
        </div>

        <!-- Barra de Progreso y Controles -->
        <div id="controls" class="p-4 bg-blue-500 text-white flex items-center justify-between">
            <div class="flex items-center">
                <!-- Botón de Play/Pause -->
                <button onclick="togglePlay()" id="playButton" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none">
                    <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="playPath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 12L6 6V18Z" />
                    </svg>
                    <span id="playButtonText">Play</span>
                </button>

                <!-- Botón de Volumen -->
                <button id="volumeButton" onclick="toggleMute()" class="ml-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none">
                    <svg id="volumeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="volumePath" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14l6-6m0 0l6 6m-6-6v16"></path>
                    </svg>
                </button>
                <!-- Control deslizante de volumen -->
                <div id="volumeSliderContainer" class="ml-2 w-20">
                    <input id="volumeSlider" type="range" min="0" max="1" step="0.1" value="1" onchange="adjustVolume()" class="range-slider appearance-none bg-gray-300 h-1 w-full rounded-full focus:outline-none">
                </div>
            </div>

            <!-- Barra de Progreso -->
            <div id="progressBar" class="bg-gray-300 h-2 w-full ml-4 relative">
                <div id="progressBarFill" class="bg-blue-500 h-full absolute left-0 top-0"></div>
            </div>
        </div>
    </div>
</section>

