<x-app-layout>


<div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class=" relative h-80 overflow-hidden">
         <!-- Item 1 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/medic.webp" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="...">
        </div>
        <!-- Item 2 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/cabinet.jpg" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="...">
        </div>
        <!-- Item 3 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/cabinet3.jpg" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="">
        </div>
        <!-- Item 4 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/cabinet2.jpg" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="">
        </div>
        
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
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


<div class="items-start mx-auto lg:max-w-7xl p-4 flex flex-col lg:flex-row gap-2">
    <div class="shadow bg-white rounded-lg border border-b-4 p-8 basis-1/2">
        
      <h1 class="text-3xl font-bold text-teal-700 mb-2">Dr. Andrei Popescu</h1>
      <p class="text-xl text-gray-600 mb-4">Medic de Familie</p>

      

      <p class="text-base my-4 leading-relaxed">
        Cu o experiență de peste 15 ani în domeniul medicinei de familie, Dr. Andrei Popescu oferă servicii medicale complete și personalizate 
        pentru pacienți de toate vârstele – de la nou-născuți la seniori. 
        Misiunea cabinetului este de a oferi fiecărui pacient o abordare empatică, atentă și orientată spre prevenție, nu doar spre tratament.
      </p>

      <p class="text-base mb-4 leading-relaxed">
        Dr. Popescu pune accent pe o relație deschisă și sinceră cu fiecare pacient, explicând în termeni clari diagnosticul și opțiunile de tratament. 
        Într-un mediu liniștit și sigur, pacienții se pot simți înțeleși și încurajați să ia decizii informate pentru sănătatea lor și a celor dragi.
      </p>

      <x-contact-info></x-contact-info>

      <div class="text-center mt-10">
        <p class="text-gray-500">Te așteptăm cu drag la cabinet!</p>
      </div>
    </div>

    <div class="flex basis-1/2 gap-2 flex-col ">
      <div>
        <video class="border border-b-4 shadow border-teal-800 h-auto max-w-full rounded-lg" controls>
            <source src="./assets/ad.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
      </div>
      <div class="overflow-hidden bg-white rounded-lg border border-b-4 shadow border-teal-600">
        <h2 class="pt-8 px-8 text-3xl font-semibold text-teal-800 mb-3">Servicii oferite</h2>
          <ul class="list-none text-base">
            <li class="px-8 bg-teal-50 py-2 ">
                Consultații generale și de specialitate în medicina de familie </li>
            <li class="px-8 bg-white py-2 ">
                Monitorizarea și tratamentul bolilor cronice (diabet, hipertensiune, astm, etc.)</li>
            <li class="px-8 bg-teal-50 py-2 ">
                Vaccinări pentru copii și adulți</li>
            <li class="px-8 bg-white py-2 ">
                Eliberare de adeverințe medicale, concedii, fișe medicale</li>
            <li class="px-8 bg-teal-50 py-2 ">
                Consultații la domiciliu pentru pacienții nedeplasabili</li>
            <li class="px-8 bg-white py-2 ">
                Consiliere privind nutriția și stilul de viață sănătos</li>
            <li class="px-8 bg-teal-50 py-2 ">
                Colaborare cu specialiști pentru investigații suplimentare</li>
          </ul>

          <h2 class="px-8 text-2xl font-semibold text-teal-800 mt-10 mb-3">De ce să ne alegi?</h2>
          <ul class="list-none list-inside space-y-2 text-base">
            <li class="px-8 bg-teal-50 py-2 ">
                Răbdare, empatie și comunicare clară cu fiecare pacient</li>
            <li class="px-8 bg-white py-2 ">
                Acces rapid la consultații, fără liste de așteptare interminabile</li>
            <li class="px-8 bg-teal-50 py-2 ">
                Program flexibil și consultații adaptate nevoilor fiecăruia</li>
            <li class="px-8 bg-white py-2 ">
                Cabinet modern, dotat cu echipamente medicale de ultimă generație</li>
            <li class="px-8 pb-4 bg-teal-50 pt-2">
                Acces la rețete compensate și gratuite prin Casa de Asigurări</li>
          </ul>
      </div>
    </div>

</div>



    
</x-app-layout>
