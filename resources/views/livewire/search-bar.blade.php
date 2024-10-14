<div class="search-bar">
    <form action="" class="d-flex" role='search'>
        <input type="text" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
            wire:model.live.debounce.500ms='search'>
    </form>

    @if (sizeof($users) > 0)
        <div class="dropdown-menu d-block py-0">
            @foreach ($users as $user)
                <div class="px-3 py-1 border-bottom">
                    <div class="d-flex flex-column ml-3">
                        <span>{{ $user->name }}</span>
                        <span>{{ $user->email }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    @endif
</div>
