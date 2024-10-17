<div class="card mx-auto col-6">
    <h5 class="card-header">View Customer</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $customer->name }}</h5>
        <p class="card-text">Email: {{ $customer->email }}</p>
        <p class="card-text">Phone: {{ $customer->phone }}</p>
        <button wire:navigate href="/customers" class="btn btn-primary">Back</button>
    </div>
</div>
