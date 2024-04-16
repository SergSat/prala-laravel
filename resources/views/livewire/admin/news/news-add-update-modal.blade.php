<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_news' : 'add_news') ) }}
    </x-slot>

    <x-slot name="content">

        <div class="mb-4">
            <label for="imagePath" class="cursor-pointer">
                @if ($imagePath)
                    <img src="{{ $imagePath->temporaryUrl() }}" class="rounded-full h-40 object-cover">
                @elseif($currentImagePath)
                    <img src="{{ asset('storage/'.$currentImagePath) }}" class="rounded-full h-40 object-cover">
                @else
                    <div class="rounded-full h-40 bg-gray-200 flex justify-center items-center">
                        <span class="text-gray-500 text-xs text-center">{{ __('admin.add_photo') }}</span>
                    </div>
                @endif
            </label>
            <input type="file" id="imagePath" wire:model="imagePath" class="hidden">
            @error('imagePath') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="title" value="{!! __('admin.title') !!}" />
            <x-admin.input-text wire:model="title" type="text" class="w-full" placeholder="{{ __('admin.title') }}" />
            <x-admin.input-error for="title" />
        </div>

        <!-- Content -->
        <div class="mb-4">
            <x-admin.label for="content" value="{!! __('admin.content') !!}" />
            <div wire:ignore class="prose">
                <textarea id="content" name="content" wire:model="content" class="w-full" placeholder="{{ __('admin.content') }}"></textarea>
            </div>

            <x-admin.input-error for="content" />
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-admin.button :color="'danger'" wire:click="$toggle('show')" wire:loading.attr="disabled" class="mr-2">{{ __('admin.cancel') }}</x-admin.button>

        @if ($id)
            <x-admin.button :color="'info'" type="submit" wire:click="updateNews({{$id}})">{{ __('admin.save') }}</x-admin.button>
        @else
            <x-admin.button :color="'info'" type="submit" wire:click="save">{{ __('admin.save') }}</x-admin.button>
        @endif
    </x-slot>

    @script
    <script>
      Livewire.on('init-editor', () => {
        setTimeout(() => {
          const element = document.querySelector('textarea#content');
          if (!element) return;
          if (window.editorInstance) {
            window.editorInstance.destroy()
              .then(() => {
                console.log('Existing editor instance destroyed');
                createEditor(element);
              })
              .catch(err => {
                console.error('Error destroying editor instance:', err);
              });
          } else {
            createEditor(element);
          }
        }, 500);
      });

      function createEditor(element) {
        const initialData = element.value;
        ClassicEditor.create(element, {
          mediaEmbed: {
            elementName: 'o-embed',
            previewsInData: true,
          },
          uploadImage: {
            types: ['jpeg', 'png', 'gif', 'webp'],
            sizeLimit: 1024 * 1024,
            styles: [
              'alignLeft', 'alignCenter', 'alignRight'
            ],
            toolbar: [
              'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight',
              '|', 'imageTextAlternative'
            ],
          },
          toolbar: {
            items: [
              'undo', 'redo',
              '|', 'heading',
              '|', 'bold', 'italic',
              '|', 'link', 'blockQuote',
              '|', 'bulletedList', 'numberedList',
              '|' , 'mediaEmbed'
            ],
            shouldNotGroupWhenFull: false
          }
        })
          .then(editor => {
            window.editorInstance = editor;
            editor.setData(initialData);
            editor.model.document.on('change:data', () => {
              const data = editor.getData();
              $wire.dispatchSelf('set-content', { content: data });
            });
          })
          .catch(error => {
            console.error('Error initializing editor:', error);
          });
      }
    </script>
    @endscript

</x-admin.dialog-modal>

