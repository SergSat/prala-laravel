<div class="relative overflow-hidden shadow-md bg-white dark:bg-gray-800 sm:rounded-lg">
    <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">{{ __('admin.search') }}</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-slate-500 dark:text-slate-400"
                             fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                           class="block w-full p-2 pl-10 text-sm text-gray-900 border rounded-lg border-slate-400 bg-gray-50 focus:ring-slate-500 focus:border-slate-500 dark:bg-gray-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                           placeholder="{{ __('admin.search')}}" required="">
                </div>
            </form>
        </div>
        <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
            @can('create', $model)
                <x-admin.button wire:click="$parent.create" :color="'success'" >
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                              d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    {{ __('admin.add') }}
                </x-admin.button>
            @endcan
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 table-fixed dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="w-8 px-4 py-4">ID</th>
                @foreach($columns as $column)
                    <th scope="col" class="px-4 py-4">{{ __('admin.'.$column) }}</th>
                @endforeach
                <th scope="col" class="w-64 text-right px-4 py-3">{{ __('admin.actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($items as $item)
                <tr wire:key="{{ $item->id }}" class="border-b dark:border-gray-700">
                    <td class="w-8 px-4 py-3 font-medium text-gray-900 whitespace-wrap dark:text-white">{{ $item->id }}</td>
                    @foreach($columns as $column)
                        <td class="px-4 py-3">
                            @if (array_key_exists($column, $wrappers))
                                {!! $wrappers[$column][$item->$column]['before'] !!}{{ $item->$column }}{!! $wrappers[$column][$item->$column]['after'] !!}
                            @else
                                {{ $item->$column }}
                            @endif
                        </td>
                    @endforeach
                    <td class="w-64 flex justify-end gap-2 px-4 py-3 truncate">
                        @can('update', $item)
                            <x-admin.button :color="'warning'" wire:click="$parent.edit({{ $item->id }})" class="py-2 px-1">
                                {{ __('admin.edit') }}
                            </x-admin.button>
                        @else
                            <x-admin.button :color="'warning'" wire:click="$parent.edit({{ $item->id }})" :disabled="true"  class="py-2 px-1 disabled:opacity-50">
                                {{ __('admin.edit') }}
                            </x-admin.button>
                        @endcan

                        @can('delete', $item)
                            <x-admin.button :color="'danger'" wire:confirm="{{__('admin.confirm_deletion')}}" wire:click="$parent.delete({{ $item->id }})" class="py-2 px-1">
                                {{ __('admin.delete') }}
                            </x-admin.button>
                        @else
                            <x-admin.button :color="'danger'" wire:confirm="{{__('admin.confirm_deletion')}}" wire:click="$parent.delete({{ $item->id }})" :disabled="true" class="py-2 px-1 disabled:opacity-50">
                                {{ __('admin.delete') }}
                            </x-admin.button>
                        @endcan
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span class="font-semibold text-gray-900 dark:text-white">{{ $currentPage * $perPage - $perPage + 1 }}-{{ min($currentPage * $perPage, $totalItems) }}</span>
            of
            <span class="font-semibold text-gray-900 dark:text-white">{{ $totalItems }}</span>
        </span>
        <ul class="inline-flex items-stretch -space-x-px">
            {{-- Предыдущая страница --}}
            <li>
                @if($currentPage > 1)
                    <a wire:click.prevent="goToPage({{ $currentPage - 1 }})"
                       href="#"
                       class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </a>
                @endif
            </li>
            @php
                $paginationData = $this->paginationViewData();
            @endphp
            <!-- Pagination Elements -->
            @for ($page = $paginationData['start']; $page <= $paginationData['end']; $page++)
                <li>
                    <button wire:click="goToPage({{ $page }})"
                            {{ $this->currentPage === $page ? 'aria-current="page"' : ''}}
                            class="{{ $this->currentPage === $page
                            ? 'z-10 flex items-center justify-center px-3 py-2 text-sm leading-tight border text-primary-600 bg-primary-50 border-primary-300 hover:bg-primary-100 hover:text-primary-700 border-gray-300 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-white'
                            : 'flex items-center justify-center px-3 py-2 text-sm leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' }}">
                        {{ $page }}
                    </button>
                </li>
            @endfor

            {{-- Next page --}}
            @if($currentPage < $totalPages)
                <li>
                    <a wire:click.prevent="goToPage({{ $currentPage + 1 }})" href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
