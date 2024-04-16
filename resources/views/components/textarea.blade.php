<div>

    <div>
        <textarea id="message" {!! $attributes->merge(['class' => 'w-full']) !!} placeholder="{{ __('admin.content') }}"></textarea>
    </div>

    <script>
      ClassicEditor
        .create(document.querySelector('#message'))
    </script>
</div>