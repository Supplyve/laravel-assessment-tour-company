<div class="container mt-5">
    <h1>Create New Tour</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="saveTour" class="mt-4">
        <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" id="destination" wire:model="destination" class="form-control">
            @error('destination') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="start">Start Date</label>
            <input type="date" id="start" wire:model="start" class="form-control">
            @error('start') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" id="end" wire:model="end" class="form-control">
            @error('end') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" id="price" wire:model="price" class="form-control">
            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Tour</button>
    </form>
</div>
