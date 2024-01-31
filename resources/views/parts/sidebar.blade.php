<aside
    class="lg:w-1/4 fixed inset-y-0 right-0 py-10 min-h-screen bg-pr-beige flex flex-col items-center justify-between transform translate-x-full lg:translate-x-0 transition duration-300 ease-linear">
    <img width="200" height="50" src="{{ Vite::asset('resources/images/prala_logo1.svg') }}" alt="logo-prala"
        class="w-50 h-16">

    <section class="w-3/4 py-10 flex flex-col items-center border border-pr-gray-sky rounded-lg">
        <img src="{{ Vite::asset('resources/images/photo-model.png') }}" alt="avatar">
        <div class="flex flex-col items-center">
            <h3 class="text-2xl pt-6">Анастасія</h3>
            <p class="mt-1 text-stone-500 font-extralight">Кулінарний геній</p>
            <div class="w-3/4 flex items-center justify-between mt-3">
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