<article class="grid w-full grid-flow-row">

    <x-slot name="header">
        <x-header-back :route="route('library.index')" :title="$item->title" :titleBack="__('admin.back_to_list')" />
    </x-slot>

    <x-breadcrumbs :$breadcrumbs />

    <div class="w-full max-w-2xl p-5 mx-auto bg-white sm:p-8 rounded-xl">
        <article class="prose">

            <div>
                <h3 class="mt-0">{{ $item->title }}</h3>
                {!! $item->content !!}
                <time datetime="{{$item->createt_at}}">{{$item->createt_at}}</time>
            </div>

            <time datetime="{{$item->created_at->toAtomString()}}" class="block text-gray-400">
                {{ $item->created_at->format('d M Y') }}
            </time>

        </article>
    </div>

</article>