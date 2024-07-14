<div class="max-w-md mx-auto mt-8">
    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
        <div id="audioPlayer" class="p-4">
            <audio id="zenoAudio" preload="auto" class="w-full outline-none">
                <source src="https://stream-172.zeno.fm/hxe1jxvelmguv?zt=eyJhbGciOiJIUzI1NiJ9.eyJzdHJlYW0iOiJoeGUxanh2ZWxtZ3V2IiwiaG9zdCI6InN0cmVhbS0xNzIuemVuby5mbSIsInJ0dGwiOjUsImp0aSI6IjNvVmphVEk5VGg2Y2VZUnZvclEzbVEiLCJpYXQiOjE3MjA5MjU1MTcsImV4cCI6MTcyMDkyNTU3N30.rSmkWQoALDZL2q1Y1JW885lKu37di8HEslXSIUaxL1M" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
        </div>

        <div id="controls" class="p-4 flex items-center justify-between">
            <button onclick="togglePlay()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 12L6 6V18Z" />
                </svg>
                <span id="playButtonText">Play</span>
            </button>

            <div class="flex items-center">
                <button id="volumeButton" onclick="toggleMute()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14l6-6m0 0l6 6m-6-6v16"></path>
                    </svg>
                </button>
                <div id="volumeSliderContainer" class="ml-2 w-20">
                    <input id="volumeSlider" type="range" min="0" max="1" step="0.1" value="1" onchange="adjustVolume()" class="range-slider appearance-none bg-gray-300 h-1 w-full rounded-full focus:outline-none">
                </div>
            </div>
        </div>

        <div id="progressBar" class="bg-gray-300 h-2 relative">
            <div id="progressBarFill" class="bg-blue-500 h-full absolute left-0 top-0"></div>
        </div>
    </div>
</div>

<script>
    const audio = document.getElementById('zenoAudio');
    const playButtonText = document.getElementById('playButtonText');
    const progressBarFill = document.getElementById('progressBarFill');
    const volumeButton = document.getElementById('volumeButton');
    const volumeSliderContainer = document.getElementById('volumeSliderContainer');
    const volumeSlider = document.getElementById('volumeSlider');

    function togglePlay() {
        if (audio.paused) {
            audio.play();
            playButtonText.textContent = 'Pause';
        } else {
            audio.pause();
            playButtonText.textContent = 'Play';
        }
    }

    function toggleMute() {
        if (audio.volume === 0) {
            audio.volume = volumeSlider.value || 1;
            volumeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 14l6-6m0 0l6 6m-6-6v16"></path></svg>';
        } else {
            audio.volume = 0;
            volumeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 21v-8m8-3a10 10 0 1 0-16 0v3m-8-3V9m16 12v-8m-4 8v-8"></path></svg>';
        }
    }

    function adjustVolume() {
        audio.volume = volumeSlider.value;
    }

    // Actualizar la barra de progreso
    audio.addEventListener('timeupdate', function() {
        const { currentTime, duration } = audio;
        const progressPercent = (currentTime / duration) * 100;
        progressBarFill.style.width = progressPercent + '%';
    });

    // Mostrar/ocultar el control deslizante de volumen
    volumeButton.addEventListener('click', function() {
        volumeSliderContainer.classList.toggle('hidden');
    });
</script>
