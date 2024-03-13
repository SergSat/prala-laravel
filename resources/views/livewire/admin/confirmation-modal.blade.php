<div>
    @if ($show)
        <div class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center px-4">
            <div class="bg-white rounded-lg p-6">
                <h2 class="text-lg font-medium">Are you sure?</h2>
                <p class="my-4">Do you really want to delete this item?</p>
                <div class="flex justify-end">
                    <button wire:click="delete" class="px-4 py-2 bg-red-500 text-white rounded mr-2">Yes, Delete</button>
                    <button wire:click="$set('show', false)" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
                </div>
            </div>
        </div>
    @endif
</div>
