<div class="w-100 d-flex flex-column justify-content-center align-items-center">
    <div>
        <span>
            <input type="text" wire:model.live="msg" wire:model.defer="msg">
            @error('msg')
                <x-common.error-msg :key="'msg'" />
            @enderror
        </span>
            @if ($todo_id)
            {{--  <button wire:click="update({{$todo_id}})">Update Todo</button>  --}}
            <button wire:keydown.enter="update({{$todo_id}})">Update Todo</button>
        @else
            <button wire:click="addTodo"> Add Todo</button>
        @endif
        {{--  <button x-on:click="$wire.msg = ''">Clear</button>  --}}
        {{--  <button x-on:click="$wire.set('msg', '')">Clear</button>  --}}
        <button x-on:click="$wire.set('msg', '', false)">Clear</button>

        <br>
        Todo character length: <span x-text="$wire.msg.length" class=""></span> &nbsp; | &nbsp; Update msg character : ({{$count}})
        {{--  Todo character length: <span x-text="$wire.get('msg').length"></span>  --}}

        <br>
        Message : <strong> {{ $msg }}</strong>

        <br>
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $todo->message }} &nbsp;
                    <a href="" wire:click.prevent="delete({{ $todo->id }})" wire:model="id" wire:confirm="Are you sure you want to delete this Message?">Delete</a> |
                    <a href="" wire:click.prevent="edit({{ $todo->id }})" wire:model="id">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
