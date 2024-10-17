<div class="my-4 gap-3">

    <div class="row align-items-center">
        <div class="col-auto">
            <button wire:navigate href='/customers/create' class="btn btn-success btn-sm">Create</button>
        </div>

        <div class="col-auto">
            <input type="text" wire:model.live.debounce.150ms='search' class="form-control"
                placeholder="Search customers... " />
        </div>
    </div>



    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col" style="width: 20%;">No.</th>
                <th scope="col" style="width: 20%;">Name</th>
                <th scope="col" style="width: 20%;">Email</th>
                <th scope="col" style="width: 20%;">Phone</th>
                <th scope="col" style="width: 20%;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <button wire:navigate href='/customers/{{ $customer->id }}'
                            class="btn btn-primary btn-sm">View</button>
                        <button wire:navigate href='/customers/{{ $customer->id }}/edit'
                            class="btn btn-success btn-sm">Edit</button>
                        <button wire:click='delete({{ $customer->id }})' class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div>
        {{ $customers->links() }}
    </div>
</div>
