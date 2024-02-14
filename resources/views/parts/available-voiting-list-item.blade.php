<div class="w-full flex rounded-lg">
    <div class="flex flex-col gap-2.5 @2xs:flex-row @2xs:gap-5">
        <picture class="flex items-center bg-white">
            <img width="100" height="100" src="{{ Vite::asset('resources/images/vote@2x.webp') }}" alt="voting"
                class="w-full max-w-[100px] object-cover border border-pr-gray-sky/40 rounded-lg">
        </picture>
        <div class="flex flex-col gap-2.5 @2xs:gap-5">
            <h4 class="text-xl self-start">
                Назва
            </h4>

            <a href="{{ route('vote-available') }}"
                class="group px-3 py-1 inline-flex items-center gap-2.5 font-light border border-pr-blue rounded-md text-pr-blue transition-colors duration-200 hover:text-pr-blueviolet hover:border-pr-blueviolet hover:bg-pr-blue-sky/30 ">
                Перейти
                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="group-hover:translate-x-1 transition delay-150 duration-200 ease-in-out">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 4.46528H0V3.96528H14.9998V4.46528Z"
                        fill="#0038FF"
                        class="group-hover:group-hover:fill-pr-blueviolet transition-colors duration-200 " />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.1269 0.859375L15.3049 4.22517L13.1171 7.1451L12.7169 6.84529L14.6958 4.20424L12.7071 1.13101L13.1269 0.859375Z"
                        fill="#0038FF"
                        class="group-hover:group-hover:fill-pr-blueviolet transition-colors duration-200 " />
                </svg>
            </a>
        </div>
    </div>
</div>