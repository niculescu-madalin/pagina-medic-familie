<x-app-layout>


<div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class=" relative h-80 overflow-hidden rounded-lg">
         <!-- Item 1 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/cabinet.jpg" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="...">
        </div>
        <!-- Item 2 -->
        <div class=" hidden duration-700 ease-in-out" data-carousel-item>
            <img src="./assets/medic.webp" class="absolute block w-full h-[500px] object-cover -translate-x-1/2 -translate-y-1/2 left-full top-full" alt="...">
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

<div class="mx-auto p-4 flex flex-col lg:flex-row gap-2">
    <div class="bg-white rounded-2xl border p-8 basis-1/2">
      <h1 class="text-3xl font-bold text-teal-700 mb-2">Dr. Andrei Popescu</h1>
      <p class="text-xl text-gray-600 mb-4">Medic de Familie</p>

      <p class="text-base mb-4 leading-relaxed">
        Cu o experiență de peste 15 ani în domeniul medicinei de familie, Dr. Andrei Popescu oferă servicii medicale complete și personalizate 
        pentru pacienți de toate vârstele – de la nou-născuți la seniori. 
        Misiunea cabinetului este de a oferi fiecărui pacient o abordare empatică, atentă și orientată spre prevenție, nu doar spre tratament.
      </p>

      <p class="text-base mb-4 leading-relaxed">
        Dr. Popescu pune accent pe o relație deschisă și sinceră cu fiecare pacient, explicând în termeni clari diagnosticul și opțiunile de tratament. 
        Într-un mediu liniștit și sigur, pacienții se pot simți înțeleși și încurajați să ia decizii informate pentru sănătatea lor și a celor dragi.
      </p>

      <div class="bg-teal-50 rounded-xl p-6 mt-6 border border-teal-600 border-2">
        <h2 class="text-xl font-semibold text-teal-600 mb-2">Date de contact</h2>
        <ul class="space-y-2">
          <li class="flex flex-row items-center gap-2">
            <span class="text-teal-700 font-semibold flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                </svg>
                Adresă:
            </span> 
            Str. Sănătății nr. 12, București
          </li>
          <li class="flex flex-row items-center gap-2" >
            <span class="text-teal-700 font-semibold flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                </svg>
                  
                Telefon:
            </span> 
            0722 123 456
          </li>
          <li class="flex flex-row items-center gap-2">
            <span class="text-teal-700 font-semibold flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                    <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                </svg>
                  
                Email:
            </span> 
            contact@drandreipopescu.ro
          </li>
          <li class="flex flex-row items-center gap-2">
            <span class="text-teal-700 font-semibold flex flex-row items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                </svg>
                   
                Program:
            </span> 
            Luni - Vineri, 08:00 - 16:00
         </li>
        </ul>
      </div>

      <div class="text-center mt-10">
        <p class="text-gray-500">Te așteptăm cu drag la cabinet!</p>
      </div>
    </div>

  <div class="bg-white rounded-2xl border border-teal-600 p-8 basis-1/2">
    <h2 class="text-3xl font-semibold text-teal-800 mb-3">Servicii oferite</h2>
      <ul class="list-disc list-inside space-y-2 text-base">
        <li>Consultații generale și de specialitate în medicina de familie</li>
        <li>Monitorizarea și tratamentul bolilor cronice (diabet, hipertensiune, astm, etc.)</li>
        <li>Vaccinări pentru copii și adulți</li>
        <li>Eliberare de adeverințe medicale, concedii, fișe medicale</li>
        <li>Consultații la domiciliu pentru pacienții nedeplasabili</li>
        <li>Consiliere privind nutriția și stilul de viață sănătos</li>
        <li>Colaborare cu specialiști pentru investigații suplimentare</li>
      </ul>

      <h2 class="text-2xl font-semibold text-teal-800 mt-10 mb-3">De ce să ne alegi?</h2>
      <ul class="list-disc list-inside space-y-2 text-base">
        <li>Răbdare, empatie și comunicare clară cu fiecare pacient</li>
        <li>Acces rapid la consultații, fără liste de așteptare interminabile</li>
        <li>Program flexibil și consultații adaptate nevoilor fiecăruia</li>
        <li>Cabinet modern, dotat cu echipamente medicale de ultimă generație</li>
        <li>Acces la rețete compensate și gratuite prin Casa de Asigurări</li>
      </ul>
  </div>

</div>
    
</x-app-layout>
