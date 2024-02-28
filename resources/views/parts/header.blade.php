<header class="">
	<section class="relative py-5 lg:hidden">
		<img class="mx-auto" src="{{ Vite::asset('resources/images/logo-prala.png') }}" alt="logo-prala" />
		<button id="hamburger-button"
			class="absolute h-8 text-4xl transform -translate-y-1/2 cursor-pointer right-5 top-1/2 w-14 text-pr-blue">
			<span
				class="absolute right-1 top-4 -mt-0.5 h-1 w-8 rounded bg-pr-blue drop-shadow transition-all duration-500 before:absolute before:h-1 before:w-8 before:-translate-x-4 before:-translate-y-2.5 before:rounded before:bg-pr-blue before:drop-shadow before:transition-all before:duration-500 before:content-[''] after:absolute after:h-1 after:w-8 after:-translate-x-4 after:translate-y-2.5 after:rounded after:bg-pr-blue after:drop-shadow after:transition-all after:duration-500 sm:right-4"></span>
		</button>
	</section>
	<section id="mobile-menu"
		class="fixed left-0 right-0 z-30 min-h-screen px-5 transition-all duration-500 -translate-x-full bg-white pt-9 sm:px-10 lg:hidden">
		<h3 class="text-2xl text-center font-extralight text-stone-500">Меню</h3>
		<nav>
			<ul class="flex flex-col gap-5 mt-10 text-2xl">
				<li>
					<a href="{{ route('home') }}"
						class="--pr-active w-full hover:opacity-60 inline-flex items-center gap-2.5">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
							class="w-5 h-5">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M5.2839 6.42835C5.28449 3.9822 7.39637 2 10.0004 2C12.605 2 14.7161 3.98291 14.7161 6.42936C14.7161 8.87565 12.6052 10.8595 10.0004 10.8595H9.97169L9.96953 10.8595C7.3736 10.8513 5.27569 8.86704 5.2839 6.42835ZM5.2839 6.42835C5.2839 6.42801 5.28391 6.42767 5.28391 6.42733L5.92269 6.42936H5.2839C5.2839 6.42903 5.2839 6.42869 5.2839 6.42835ZM10.0004 3.2C8.10124 3.2 6.56147 4.64582 6.56147 6.42936V6.4314H6.56147C6.55506 8.2078 8.08291 9.65299 9.97285 9.65952H10.0004C11.8993 9.65952 13.4385 8.21323 13.4385 6.42936C13.4385 4.64566 11.8994 3.2 10.0004 3.2ZM5.32979 12.9618C6.59416 12.5636 8.27121 12.4431 10.0004 12.4431C11.74 12.4431 13.4176 12.5683 14.6802 12.9717C15.3149 13.1744 15.8913 13.4617 16.3147 13.8785C16.7527 14.3097 17 14.8546 17 15.4994C17 16.1455 16.7505 16.6902 16.3099 17.1198C15.8845 17.5346 15.306 17.8191 14.6707 18.0193C13.4065 18.4176 11.7297 18.5383 10.0004 18.5383C8.26088 18.5383 6.58311 18.4133 5.32027 18.0101C4.6855 17.8074 4.10893 17.5201 3.6855 17.1033C3.24734 16.672 3 16.127 3 15.482C3 14.8357 3.24955 14.291 3.69022 13.8613C4.11573 13.4464 4.69437 13.1619 5.32979 12.9618ZM4.61029 14.6939C4.3943 14.9045 4.27757 15.1525 4.27757 15.482C4.27757 15.8128 4.39419 16.0627 4.60979 16.2749C4.84011 16.5016 5.20708 16.7065 5.73148 16.8739C6.78698 17.211 8.29003 17.3383 10.0004 17.3383C11.7025 17.3383 13.206 17.215 14.2644 16.8816C14.7904 16.7159 15.1587 16.5126 15.3898 16.2873C15.6058 16.0767 15.7224 15.8287 15.7224 15.4994C15.7224 15.1689 15.6059 14.919 15.3903 14.7068C15.16 14.4801 14.7931 14.2753 14.2689 14.1078C13.2136 13.7707 11.7107 13.6431 10.0004 13.6431C8.29828 13.6431 6.79452 13.7662 5.73591 14.0996C5.20983 14.2652 4.84145 14.4685 4.61029 14.6939Z"
								class="fill-current" />
						</svg>
						<span>Кабінет</span>
					</a>
				</li>
				<li>
					<a href="{{ route('calendar-page') }}"
						class="w-full hover:opacity-60  inline-flex items-center gap-2.5">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
							class="w-5 h-5">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M2.32347 7.84074C2.32347 7.42653 2.65925 7.09074 3.07347 7.09074H17.1336C17.5478 7.09074 17.8836 7.42653 17.8836 7.84074C17.8836 8.25495 17.5478 8.59074 17.1336 8.59074H3.07347C2.65925 8.59074 2.32347 8.25495 2.32347 7.84074Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M12.8533 10.9227C12.8533 10.5085 13.1891 10.1727 13.6033 10.1727H13.6116C14.0258 10.1727 14.3616 10.5085 14.3616 10.9227C14.3616 11.337 14.0258 11.6727 13.6116 11.6727H13.6033C13.1891 11.6727 12.8533 11.337 12.8533 10.9227Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M9.35256 10.9227C9.35256 10.5085 9.68835 10.1727 10.1026 10.1727H10.1108C10.525 10.1727 10.8608 10.5085 10.8608 10.9227C10.8608 11.337 10.525 11.6727 10.1108 11.6727H10.1026C9.68835 11.6727 9.35256 11.337 9.35256 10.9227Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M5.84628 10.9227C5.84628 10.5085 6.18207 10.1727 6.59628 10.1727H6.60451C7.01873 10.1727 7.35451 10.5085 7.35451 10.9227C7.35451 11.337 7.01873 11.6727 6.60451 11.6727H6.59628C6.18207 11.6727 5.84628 11.337 5.84628 10.9227Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M12.8533 13.9882C12.8533 13.574 13.1891 13.2382 13.6033 13.2382H13.6116C14.0258 13.2382 14.3616 13.574 14.3616 13.9882C14.3616 14.4024 14.0258 14.7382 13.6116 14.7382H13.6033C13.1891 14.7382 12.8533 14.4024 12.8533 13.9882Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M9.35256 13.9882C9.35256 13.574 9.68835 13.2382 10.1026 13.2382H10.1108C10.525 13.2382 10.8608 13.574 10.8608 13.9882C10.8608 14.4024 10.525 14.7382 10.1108 14.7382H10.1026C9.68835 14.7382 9.35256 14.4024 9.35256 13.9882Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M5.84628 13.9882C5.84628 13.574 6.18207 13.2382 6.59628 13.2382H6.60451C7.01873 13.2382 7.35451 13.574 7.35451 13.9882C7.35451 14.4024 7.01873 14.7382 6.60451 14.7382H6.59628C6.18207 14.7382 5.84628 14.4024 5.84628 13.9882Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M13.2893 1.25C13.7035 1.25 14.0393 1.58579 14.0393 2V4.59587C14.0393 5.01009 13.7035 5.34587 13.2893 5.34587C12.875 5.34587 12.5393 5.01009 12.5393 4.59587V2C12.5393 1.58579 12.875 1.25 13.2893 1.25Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M6.9177 1.25C7.33192 1.25 7.6677 1.58579 7.6677 2V4.59587C7.6677 5.01009 7.33192 5.34587 6.9177 5.34587C6.50349 5.34587 6.1677 5.01009 6.1677 4.59587V2C6.1677 1.58579 6.50349 1.25 6.9177 1.25Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M3.4963 3.64529C4.3236 2.85886 5.47011 2.49713 6.76349 2.49713H13.4428C14.7391 2.49713 15.8865 2.85852 16.7126 3.64602C17.5442 4.43884 17.9528 5.57053 17.949 6.91071V14.108C17.949 15.4482 17.5383 16.5809 16.7066 17.375C15.8802 18.1641 14.7331 18.5281 13.4355 18.5281H6.76349C5.46561 18.5281 4.31749 18.1563 3.49106 17.3553C2.66091 16.5507 2.25 15.4048 2.25 14.0484V6.9097C2.25 5.56837 2.6632 4.43724 3.4963 3.64529ZM4.52977 4.73246C4.06026 5.17878 3.75 5.87893 3.75 6.9097V14.0484C3.75 15.1013 4.06256 15.8203 4.53501 16.2782C5.01119 16.7397 5.74482 17.0281 6.76349 17.0281H13.4355C14.4617 17.0281 15.1964 16.743 15.6707 16.2901C16.1398 15.8423 16.449 15.1399 16.449 14.108V6.9097L16.449 6.90739C16.4522 5.87605 16.1446 5.17692 15.6776 4.73174C15.2047 4.28098 14.4703 3.99713 13.4428 3.99713H6.76349C5.74032 3.99713 5.00508 4.28064 4.52977 4.73246Z"
								class="fill-current" />
						</svg>
						<span>Календар</span>
					</a>
				</li>
				<li>
					<a href="{{ route('library-page') }}"
						class="w-full hover:opacity-60  inline-flex items-center gap-2.5">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M2.35457 2.49519C3.24656 1.53834 4.51889 1 6.02857 1H13.8381C15.3514 1 16.624 1.5381 17.5153 2.49547C18.4021 3.448 18.8667 4.76669 18.8667 6.2543V13.6124C18.8667 15.1 18.4021 16.4187 17.5153 17.3712C16.624 18.3286 15.3514 18.8667 13.8381 18.8667H6.02857C4.51531 18.8667 3.24265 18.3286 2.35133 17.3712C1.46452 16.4187 1 15.1 1 13.6124V6.2543C1 4.76596 1.46695 3.44736 2.35457 2.49519ZM3.23233 3.31344C2.58623 4.00653 2.2 5.01508 2.2 6.2543V13.6124C2.2 14.8523 2.58468 15.8608 3.22962 16.5535C3.87004 17.2414 4.81168 17.6667 6.02857 17.6667H13.8381C15.055 17.6667 15.9966 17.2414 16.637 16.5535C17.282 15.8608 17.6667 14.8523 17.6667 13.6124V6.2543C17.6667 5.01434 17.282 4.00589 16.637 3.31316C15.9966 2.62527 15.055 2.2 13.8381 2.2H6.02857C4.81603 2.2 3.87407 2.62503 3.23233 3.31344ZM9.96508 5.09927C10.2965 5.09927 10.5651 5.3679 10.5651 5.69927V14.1515C10.5651 14.4829 10.2965 14.7515 9.96508 14.7515C9.63371 14.7515 9.36508 14.4829 9.36508 14.1515V5.69927C9.36508 5.3679 9.63371 5.09927 9.96508 5.09927ZM6.07619 7.83476C6.40756 7.83476 6.67619 8.10339 6.67619 8.43476V14.1515C6.67619 14.4829 6.40756 14.7515 6.07619 14.7515C5.74482 14.7515 5.47619 14.4829 5.47619 14.1515V8.43476C5.47619 8.10339 5.74482 7.83476 6.07619 7.83476ZM13.7905 10.8557C14.1218 10.8557 14.3905 11.1243 14.3905 11.4557V14.1515C14.3905 14.4829 14.1218 14.7515 13.7905 14.7515C13.4591 14.7515 13.1905 14.4829 13.1905 14.1515V11.4557C13.1905 11.1243 13.4591 10.8557 13.7905 10.8557Z"
								class="fill-current" />
						</svg>
						<span>Бібліотека</span>
					</a>
				</li>
				<li>
					<a href="#" class="w-full hover:opacity-60 inline-flex items-center gap-2.5">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M13.2571 1.69141C14.5518 1.69141 15.656 2.11856 16.4359 2.92348C17.2135 3.72607 17.6129 4.84643 17.6129 6.13057V13.7939C17.6129 15.072 17.2164 16.1873 16.4452 16.9886C15.6717 17.7922 14.5763 18.2226 13.2916 18.2306L13.2879 18.2306L6.88179 18.2331L6.8807 18.2331C5.58595 18.2331 4.4816 17.8059 3.70191 17.0009C2.9245 16.1983 2.52539 15.078 2.52539 13.7939V6.13057C2.52539 4.8526 2.9216 3.73743 3.69267 2.93627C4.46597 2.1328 5.56121 1.70266 6.84586 1.69475L6.84956 1.69473L13.2571 1.69141C13.2571 1.69141 13.2567 1.69141 13.2571 2.29141V1.69141ZM13.2571 2.89141C14.2823 2.89143 15.0561 3.22386 15.5741 3.7585C16.0943 4.29549 16.4129 5.09471 16.4129 6.13057V13.7939C16.4129 14.8242 16.0969 15.6201 15.5806 16.1565C15.0668 16.6903 14.3003 17.024 13.2859 17.0306C13.2853 17.0306 13.2848 17.0306 13.2842 17.0306L6.88132 17.0331C5.85607 17.0331 5.08168 16.7007 4.56387 16.166C4.04378 15.6291 3.72539 14.8299 3.72539 13.7939V6.13057C3.72539 5.10021 4.04127 4.30455 4.55728 3.76841C5.07078 3.23488 5.83709 2.90134 6.85162 2.89474L13.2571 2.89141ZM6.48014 6.54999C6.48014 6.21862 6.74877 5.94999 7.08014 5.94999H9.37597C9.70734 5.94999 9.97597 6.21862 9.97597 6.54999C9.97597 6.88136 9.70734 7.14999 9.37597 7.14999H7.08014C6.74877 7.14999 6.48014 6.88136 6.48014 6.54999ZM6.48006 10.0307C6.48006 9.69929 6.74869 9.43066 7.08006 9.43066H13.0967C13.4281 9.43066 13.6967 9.69929 13.6967 10.0307C13.6967 10.362 13.4281 10.6307 13.0967 10.6307H7.08006C6.74869 10.6307 6.48006 10.362 6.48006 10.0307ZM6.48006 13.5194C6.48006 13.188 6.74869 12.9194 7.08006 12.9194H13.0967C13.4281 12.9194 13.6967 13.188 13.6967 13.5194C13.6967 13.8508 13.4281 14.1194 13.0967 14.1194H7.08006C6.74869 14.1194 6.48006 13.8508 6.48006 13.5194Z"
								class="fill-current" />
						</svg>
						<span>Налаштування</span>
					</a>
				</li>
				<li>
					<a href="{{ route('vote') }}" class="w-full hover:opacity-60 inline-flex items-center gap-2.5">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M16.7519 3.49031C18.1183 4.88741 19.0267 6.68744 18.9994 8.16655L18.3728 8.15593L18.9994 8.16529L18.9994 8.16655C18.9896 8.73131 18.5615 9.22945 17.9571 9.31706C15.7434 9.63836 12.7655 9.53558 11.4514 9.46345C10.7366 9.42387 10.1708 8.88081 10.1294 8.19526C10.0542 6.96875 9.91758 4.23942 10.0191 2.12012C10.0469 1.53146 10.5405 1.01253 11.2016 1.001M16.7519 3.49031C15.3732 2.08046 13.4124 0.961873 11.2016 1.001ZM11.2699 2.20237C13.0003 2.18728 14.6252 3.07294 15.8377 4.31275C17.0681 5.57078 17.7597 7.07537 17.7464 8.13177C15.6759 8.42854 12.8303 8.33499 11.5233 8.26326C11.4447 8.25891 11.3854 8.20282 11.3808 8.12576C11.306 6.90743 11.1741 4.24995 11.2699 2.20237Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M7.26495 5.67318C7.18382 5.61732 7.07268 5.59264 6.96199 5.61885C4.50308 6.19958 2.25343 8.82176 2.25343 11.6314C2.25343 15.0369 5.13202 17.7978 8.68367 17.7978C11.8976 17.7978 14.5555 15.5841 15.0351 12.6048C15.0474 12.5286 15.024 12.4567 14.9605 12.393C14.8929 12.3253 14.7861 12.2764 14.664 12.2764C13.6627 12.2764 12.8545 12.2938 12.1916 12.3113C12.0455 12.3152 11.9056 12.3191 11.7716 12.3228C11.303 12.3359 10.9072 12.3469 10.575 12.3472C9.72445 12.3479 9.11829 12.2847 8.55338 11.8833C7.97805 11.4744 7.69961 10.9023 7.55412 10.0024C7.41309 9.13017 7.37985 7.83998 7.37985 5.87628C7.37985 5.79715 7.3423 5.72644 7.26495 5.67318ZM6.66155 4.45172C7.59095 4.23164 8.63328 4.84999 8.63328 5.87628C8.63328 7.86006 8.66921 9.05418 8.79275 9.81821C8.91182 10.5547 9.09335 10.7708 9.29957 10.9173C9.51623 11.0713 9.76035 11.1457 10.574 11.145C10.8868 11.1448 11.2582 11.1344 11.7222 11.1215C11.8589 11.1177 12.0035 11.1137 12.1571 11.1096C12.8263 11.0919 13.6469 11.0743 14.664 11.0743C15.5633 11.0743 16.4328 11.8024 16.2739 12.7882C15.6998 16.3541 12.5157 19 8.68367 19C4.43987 19 1 15.7009 1 11.6314C1 8.28271 3.62862 5.16823 6.66155 4.45172Z"
								class="fill-current" />
						</svg>
						<span>Голосування</span>
					</a>
				</li>
				<li>
					<a href="{{ route('blog') }}" class="w-full hover:opacity-60  inline-flex items-center gap-2.5">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M1.97789 15.1282C1.73637 15.3946 1.60039 15.7171 1.60039 16.1419C1.60039 16.5654 1.73671 16.8854 1.9786 17.1493C2.23294 17.4268 2.62999 17.669 3.18398 17.864C4.30025 18.2568 5.88114 18.4002 7.66485 18.4002C9.45718 18.4002 11.0374 18.2516 12.1505 17.8542C12.7028 17.657 13.0984 17.4129 13.3519 17.1337C13.5934 16.8678 13.7293 16.5458 13.7293 16.1214C13.7293 15.6982 13.593 15.3779 13.3508 15.1135C13.0963 14.8356 12.6989 14.593 12.1449 14.3974C11.0286 14.0035 9.4477 13.8589 7.66485 13.8589C5.87221 13.8589 4.2921 14.0083 3.17923 14.4064C2.62703 14.604 2.23142 14.8485 1.97789 15.1282ZM2.77499 13.2766C4.09067 12.8058 5.84278 12.6589 7.66485 12.6589C9.47527 12.6589 11.2266 12.8009 12.5442 13.2658C13.2071 13.4998 13.8022 13.8297 14.2358 14.303C14.6817 14.79 14.9293 15.3998 14.9293 16.1214C14.9293 16.8416 14.6839 17.4518 14.2404 17.9403C13.8089 18.4155 13.216 18.748 12.554 18.9844C11.2383 19.4541 9.48625 19.6002 7.66485 19.6002C5.85431 19.6002 4.10297 19.4596 2.78557 18.9959C2.12273 18.7626 1.52758 18.4333 1.09394 17.9601C0.647847 17.4734 0.400391 16.8635 0.400391 16.1419C0.400391 15.4215 0.64563 14.811 1.0889 14.3221C1.52016 13.8465 2.11291 13.5134 2.77499 13.2766Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M7.66457 1.60039C5.6652 1.60039 3.99238 3.31515 3.99238 5.49603C3.99238 7.6769 5.6652 9.39166 7.66457 9.39166H7.69358C9.68388 9.38318 11.3435 7.66934 11.3358 5.49815L11.3358 5.49603C11.3358 3.31506 9.66288 1.60039 7.66457 1.60039ZM2.79238 5.49603C2.79238 2.71069 4.94564 0.400391 7.66457 0.400391C10.3823 0.400391 12.5352 2.7102 12.5358 5.49498V5.49603H11.9358L12.5358 5.4939L12.5358 5.49498C12.5451 8.27064 10.4067 10.581 7.69712 10.5917L7.69477 10.5917H7.66457C4.94564 10.5917 2.79238 8.28136 2.79238 5.49603Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M13.8596 2.04046C13.916 1.71392 14.2264 1.4949 14.553 1.55127C16.3838 1.86732 17.7412 3.5257 17.7412 5.48068V5.48171C17.7378 7.46491 16.3372 9.14167 14.4656 9.41852C14.1378 9.46701 13.8328 9.24058 13.7843 8.91278C13.7358 8.58497 13.9622 8.27992 14.29 8.23144C15.5372 8.04695 16.5385 6.90665 16.5412 5.4802C16.541 4.07469 15.5705 2.94468 14.3488 2.73378C14.0223 2.67741 13.8033 2.367 13.8596 2.04046Z"
								class="fill-current" />
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M15.8422 12.6795C15.8935 12.3521 16.2005 12.1284 16.5279 12.1797C17.3184 12.3036 18.0639 12.5206 18.6253 12.9084C19.2173 13.3172 19.6006 13.9178 19.6006 14.7153C19.6006 15.2483 19.4288 15.7116 19.1112 16.0894C18.803 16.456 18.3827 16.7129 17.924 16.8963C17.6163 17.0194 17.2671 16.8697 17.1441 16.562C17.0211 16.2543 17.1708 15.9051 17.4785 15.7821C17.8223 15.6446 18.0518 15.4847 18.1926 15.3172C18.3241 15.1609 18.4006 14.9727 18.4006 14.7153C18.4006 14.3644 18.2565 14.1121 17.9433 13.8958C17.5996 13.6584 17.0623 13.4781 16.342 13.3652C16.0147 13.3139 15.7909 13.0069 15.8422 12.6795Z"
								class="fill-current" />
						</svg>
						<span>Блог</span>
					</a>
				</li>
				<li>
					<a href="{{ route('responsibilities') }}"
						class="w-full hover:opacity-60  inline-flex items-center gap-2.5">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M3.51571 6.55426C3.51571 3.89272 5.99377 1 9.68333 1C13.3729 1 15.851 3.89272 15.851 6.55426C15.851 7.24296 15.9386 7.72628 16.0588 8.09875C16.1793 8.47235 16.34 8.75925 16.5239 9.06708C16.5427 9.09858 16.562 9.13063 16.5816 9.16326C16.7493 9.44186 16.9427 9.76321 17.0903 10.1495C17.2604 10.5946 17.3667 11.1114 17.3667 11.7838C17.3667 11.8011 17.3659 11.8184 17.3644 11.8356C17.3042 12.5301 17.098 13.1379 16.7069 13.6439C16.3173 14.1477 15.7788 14.506 15.1273 14.7612C13.8534 15.2601 12.0309 15.4064 9.68333 15.4064C7.33681 15.4064 5.51438 15.2624 4.24045 14.7648C3.58882 14.5102 3.04992 14.1521 2.66016 13.6475C2.26881 13.141 2.06268 12.532 2.00225 11.8356C2.00075 11.8184 2 11.8011 2 11.7838C2 11.1114 2.10629 10.5946 2.27636 10.1495C2.42401 9.76321 2.61739 9.44185 2.78504 9.16326C2.80468 9.13062 2.82396 9.09858 2.84278 9.06708C3.02669 8.75925 3.18732 8.47235 3.30786 8.09875C3.42804 7.72628 3.51571 7.24296 3.51571 6.55426ZM9.68333 2.2C6.63085 2.2 4.71571 4.58084 4.71571 6.55426C4.71571 7.34901 4.61391 7.95884 4.44989 8.46722C4.28624 8.97447 4.06794 9.35613 3.87293 9.68254C3.8536 9.7149 3.83466 9.74646 3.81613 9.77737C3.6434 10.0653 3.50499 10.2961 3.3973 10.5779C3.28505 10.8716 3.20274 11.235 3.20007 11.7575C3.24753 12.2624 3.39106 12.6308 3.60978 12.9139C3.83376 13.2038 4.17155 13.4495 4.67709 13.647C5.7175 14.0535 7.33133 14.2064 9.68333 14.2064C12.0351 14.2064 13.6493 14.0512 14.6897 13.6438C15.1954 13.4457 15.5335 13.1997 15.7575 12.9099C15.9762 12.627 16.1194 12.2598 16.1666 11.7575C16.1639 11.235 16.0816 10.8716 15.9694 10.5779C15.8617 10.2961 15.7233 10.0654 15.5505 9.77737C15.532 9.74646 15.5131 9.7149 15.4937 9.68254C15.2987 9.35613 15.0804 8.97447 14.9168 8.46722C14.7528 7.95884 14.651 7.34901 14.651 6.55426C14.651 4.58084 12.7358 2.2 9.68333 2.2ZM7.2152 16.8681C7.46168 16.6466 7.84104 16.6668 8.06252 16.9133C8.96946 17.9227 10.3274 17.913 11.2282 16.9128C11.4499 16.6666 11.8293 16.6467 12.0755 16.8685C12.3218 17.0903 12.3416 17.4696 12.1198 17.7159C10.7471 19.2402 8.55828 19.2605 7.16992 17.7154C6.94844 17.4689 6.96871 17.0895 7.2152 16.8681Z"
								class="fill-current" />
						</svg>
						<span>Обов’язки та компетенції</span>
					</a>
				</li>
			</ul>
		</nav>
	</section>

	{{-- Desctop navigation --}}
	<section
		class="hidden rounded-md animate-open-menu ggg drop-shadow-lg lg:ml-5 lg:mt-5 lg:block lg:w-max lg:bg-white lg:px-5">
		<nav>
			<ul class="flex gap-5 py-4 text-base xl:gap-7">
				<li>
					<a href="{{ route('home') }}" class="--pr-active">
						Кабінет
					</a>
				</li>
				{{-- @if ($isManager)
				<li>
					<a href="{{ route('') }}" class="--pr-active">
						Підлеглі
					</a>
				</li>
				@elseif ($isHR)
				<li>
					<a href="{{ route('') }}" class="--pr-active">
						HR
					</a>
				</li>
				@else
				''
				@endif --}}
				<li>
					<a href="{{ route('library-page') }}">
						Бібліотека
					</a>
				</li>
				<li>
					<a href="#">
						Налаштування
					</a>
				</li>
				<li>
					<a href="{{ route('vote') }}">
						Голосування
					</a>
				</li>
				<li>
					<a href="{{ route('blog') }}">
						Блог
					</a>
				</li>
				<li>
					<a href="{{ route('responsibilities') }}" class="whitespace-nowrap">
						Обов’язки та компетенції
					</a>
				</li>
			</ul>
		</nav>
	</section>
</header>