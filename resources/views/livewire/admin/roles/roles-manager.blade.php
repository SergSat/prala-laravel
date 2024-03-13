<div>
    <input type="text" wire:model="roleName" placeholder="Role Name">
    <select wire:model="selectedPermissions" multiple>
        @foreach ($permissions as $permission)
            <option value="{{ $permission->id }}">{{ $permission->name }}</option>
        @endforeach
    </select>

    @if ($editingRoleId)
        <button wire:click="updateRole">Update Role</button>
    @else
        <button wire:click="createRole">Add Role</button>
    @endif

    <ul>
        @foreach ($roles as $role)
            <li>{{ $role->name }}
                <button wire:click="editRole({{ $role->id }})">Edit</button>
                <button wire:click="deleteRole({{ $role->id }})">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
