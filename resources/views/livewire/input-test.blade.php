<div>
    <h2>{{ $count }}</h2>

    <input type="number" wire:model.blur='number' />

    <button wire:click="changeCount({{ $number }})">Change Count</button>
</div>
