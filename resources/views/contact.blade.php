<x-app-layout>
    
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('') }}
    </h2>
</x-slot>
<div class="">

<div class="grid lg:grid-cols-2 gap-2  lg:mx-auto lg:max-w-7xl lg:p-6">
    <!-- Informații de contact -->
    <div class="p-2">
        <x-contact-info> </x-contact-info>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.854155301763!2d28.612054194742463!3d44.319822021899824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40baf5ce75dd3045%3A0x2f886c32de9d6485!2zU3RyYWRhIFPEg27Eg3TEg8ibaWkgMTIsIE7Eg3ZvZGFyaSA5MDU3MDA!5e0!3m2!1sro!2sro!4v1743885927730!5m2!1sro!2sro" 
            class="w-full h-96 rounded-lg border-2 border-teal-700 mt-2"
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

    <section class=" px-6">
        
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-semibold text-center text-gray-900 ">Contactați-ne</h2>
            <p class="mb-8 lg:mb-16 font-medium text-center text-gray-500 sm:text-xl">
                Ai o întrebare legată de serviciile noastre? Vrei să ne transmiți un feedback despre vizita ta la cabinet? Ai nevoie de detalii legate de programări, rețete sau consultații la domiciliu? Scrie-ne și îți răspundem cu drag!
            </p>
            
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-8">
                @csrf
                @if (session('success'))
                    <div class="border border-teal-800 p-4 mb-4 text-sm text-teal-900 rounded bg-teal-100" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email-ul dumneavoastră</label>
                    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5" placeholder="your@email.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Subiect</label>
                    <input type="text" name="subject" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-teal-500 focus:border-teal-500" placeholder="Spune-ne cum te putem ajuta."" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Meajul dumneavoastră</label>
                    <textarea name="message" id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-teal-500 focus:border-teal-500" placeholder="Lasă un comentariu..."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-teal-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-teal-300">Trimite un mesaj</button>
            </form>
        </div>
    </section>
</div>
</div>


</x-app-layout>