<aside class="lg:w-1/4 fixed inset-y-0 right-0 py-7 min-h-screen bg-pr-beige flex flex-col items-center justify-between">
    <img src="{{ Vite::asset('resources/images/logo-prala.png') }}" alt="logo-prala">

    <section class="w-3/4 py-10 flex flex-col items-center border border-pr-gray-sky rounded-lg">
        <img src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar">
        <div class="flex flex-col items-center">
            <h3 class="text-xl pt-6">Анастасія</h3>
            <p class="mt-1 text-black-soft/45">Кулінарний геній</p>
            <div class="rating w-3/4 flex items-center justify-between mt-3">
                <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starfull.svg') }}" alt="star">
                <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star">
                <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star">
                <img class="w-5 h-5" src="{{ Vite::asset('resources/images/starempty.svg') }}" alt="star">
            </div>
        </div>
    </section>

    <section class="flex items-center justify-center p-10">
    Calendar
    </section>
</aside>