<x-app-layout>


<div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class=" relative h-96 overflow-hidden rounded-lg">
         <!-- Item 1 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/cabinet.jpg" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="...">
        </div>
        <!-- Item 2 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/cabinet.jpg" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="...">
        </div>

    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="max-w-4xl mx-auto p-6">
    <div class="bg-white rounded-2xl shadow-lg p-8">
      <h1 class="text-3xl font-bold text-blue-700 mb-2">Dr. Andrei Popescu</h1>
      <p class="text-xl text-gray-600 mb-4">Medic de Familie</p>

      <p class="text-base mb-4">
        Bine ați venit la cabinetul medical al Dr. Andrei Popescu, medic de familie dedicat sănătății tale și a familiei tale. 
        Oferim servicii medicale personalizate, bazate pe încredere, profesionalism și grijă autentică.
      </p>

      <p class="text-base mb-4">
        Consultații generale, tratamente pentru afecțiuni cronice, vaccinări, analize și consiliere medicală – toate într-un mediu prietenos și sigur.
        Aici, pacientul este pe primul loc.
      </p>

      <div class="bg-blue-50 rounded-xl p-6 mt-6">
        <h2 class="text-xl font-semibold text-blue-600 mb-2">Date de contact</h2>
        <ul class="space-y-2">
          <li><strong>📍 Adresă:</strong> Str. Sănătății nr. 12, București</li>
          <li><strong>📞 Telefon:</strong> 0722 123 456</li>
          <li><strong>📧 Email:</strong> contact@drandreipopescu.ro</li>
          <li><strong>🕐 Program:</strong> Luni - Vineri, 08:00 - 16:00</li>
        </ul>
      </div>

      <div class="text-center mt-10">
        <p class="text-gray-500">Te așteptăm cu drag la cabinet!</p>
      </div>
    </div>
    
</x-app-layout>
