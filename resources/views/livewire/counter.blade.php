<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="btn btn-success" wire:click='up'> + </div>
    <span class="mx-2">{{ $count }}</span>
    <div class="btn btn-danger" wire:click='down'> - </div>
</div>
