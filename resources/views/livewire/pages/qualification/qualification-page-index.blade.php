<div>

    <x-slot name="header">
        <h1 class="text-3xl mb-4 mr-auto text-pr-blue">{{ __('responsibilities_and_competencies') }}</h1>
    </x-slot>

    <x-breadcrumbs :$breadcrumbs />

    @if( $currentCategory)
        <h1 class="text-2xl mb-3 mr-auto text-pr-blue">{{ $currentCategory->name }}</h1>
    @endif

    <div class="flex flex-col gap-2 mb-4">
        @foreach ($categories as $category)
            <x-category-item :category="$category" :currentCategory="$currentCategory" />
        @endforeach
    </div>

    <div class="grid w-full grid-flow-row grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-3">
        @foreach($qualifications as $item)
            <div class="w-full p-5 mx-auto bg-white sm:p-8 rounded-xl">
                <article class="prose">
                    <div class="aspect-video relative mb-3">
                        <img src="{{ $item->image_path ? asset('storage/' . $item->image_path) : asset('images/no-news-placeholder.webp') }}" alt="{{ $item->title }}" class="m-0 object-cover w-full h-full absolute rounded-xl">
                    </div>

                    <div>
                        <h3 class="mt-0 mb-2">{{ $item->title }}</h3>
                        <div class="mb-2">
                            @if (strlen($item->content) > 100)
                                {!! $item->getExcerpt() !!}
                                <a href="{{ route('responsibilities.show', $item->id) }}">{{ __('admin.read_more') }}...</a>
                            @else
                                {!! cleanHtml($item->content) !!}
                            @endif
                        </div>
                        <time datetime="{{$item->created_at->toAtomString()}}" class="block text-gray-400 text-sm">
                            {{ $item->created_at->translatedFormat('d M Y') }}
                        </time>
                    </div>
                </article>
            </div>
        @endforeach
    </div>

    <div class="mt-5">
        {{ $qualifications->links() }}
    </div>

</div>