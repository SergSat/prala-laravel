<!-- Modal -->
<div id="modal" class="fixed inset-0 z-40 overflow-hidden bg-black/50">
    <div class="z-50 flex items-center justify-center w-full min-h-screen">
        <div class="relative w-full max-w-screen-md p-8 overflow-hidden bg-white shadow-lg rounded-2xl">
            <div class="relative flex flex-col justify-between">
                <div class="self-end">
                    <button id="close-modal">
                        <svg class="w-6 h-6 stroke-black hover:stroke-black/60" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div>
                    <h3 class="mt-20 text-2xl font-semibold leading-10 lg:text-4xl lg:leading-[3rem]">
                        Вкажіть ваші
                        <br />
                        контактні данні
                    </h3>
                </div>
            </div>
            <form class="flex flex-col gap-6 mt-14">
                <div class="relative z-0 w-full group">
                    <input type="text" name="floating_name" id="floating_name"
                        class="block w-full p-3 pr-5 text-base text-white bg-transparent border border-transparent border-b-joy-gray-soft placeholder:text-base placeholder:text-white focus:border-b-joy-orange focus:outline-none md:w-full md:border-b-joy-gray-soft focus:ring-0 peer"
                        placeholder=" " required />
                    <label for="floating_name"
                        class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-joy-orange peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ім'я
                    </label>
                </div>
                <div class="relative z-0 w-full group">
                    <input type="tel" name="floating_telephone" id="floating_telephone"
                        class="block w-full p-3 pr-5 text-base text-white bg-transparent border border-transparent border-b-joy-gray-soft placeholder:text-base placeholder:text-white focus:border-b-joy-orange focus:outline-none md:w-full md:border-b-joy-gray-soft focus:ring-0 peer"
                        placeholder=" " required />
                    <label for="floating_telephone"
                        class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-joy-orange peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">+380
                    </label>
                </div>
                <button
                    class="mt-10 block w-full rounded-full bg-joy-orange px-3 py-2.5 text-center font-exo2 text-base font-semibold uppercase md:text-xl lg:mt-16 lg:py-4">
                    Зв'язатися з нами
                </button>
            </form>
        </div>
    </div>
</div>