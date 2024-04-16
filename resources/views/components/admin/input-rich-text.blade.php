<div wire:ignore>
    <input id="content-editor" type="hidden" name="content" wire:model="content">
    <trix-editor input="content-editor" wire:model="content" {{ $attributes->merge(['class' => 'trix-content']) }}></trix-editor>
</div>