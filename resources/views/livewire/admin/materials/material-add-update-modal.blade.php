<x-admin.dialog-modal wire:model.live="show">
    <x-slot name="title">
        {{ __('admin.' . ($id ? 'edit_material' : 'add_material') ) }}
    </x-slot>

    <x-slot name="content">

        <!-- Name -->
        <div class="mb-4">
            <x-admin.label for="title" value="{!! __('admin.title') !!}" />
            <x-admin.input-text wire:model="title" type="text" class="w-full" placeholder="{{ __('admin.title') }}" />
            <x-admin.input-error for="title" />
        </div>

        <!-- Category -->
        <div class="mb-4">
            <x-admin.label for="categoryId" value="{!! __('admin.category') !!}" />
            @foreach ($categories as $category)
                <label for="{{ $category->id }}" class="block">
                    <input name="categoryId" wire:model="categoryId" id="{{ $category->id }}" type="radio" value="{{ $category->id }}">
                    {{ $category->name }}
                </label>
            @endforeach
            <x-admin.input-error for="categoryId" />
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
            <x-admin.button :color="'info'" type="submit" wire:click="update({{$id}})">{{ __('admin.save') }}</x-admin.button>
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