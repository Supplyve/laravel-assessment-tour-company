
<div class="container mt-5">
    <h1>{{ $tour->destination }}</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="updateTour" class="mt-4">
        <div class="form-group">
            <label for="start">Start Date</label>
            <input type="date" id="start" wire:model="start" class="form-control" value="{{ $start }}">
            @error('start') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="end">End Date</label>
            <input type="date" id="end" wire:model="end" class="form-control" value="{{ $end }}">
            @error('end') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" id="price" wire:model="price" class="form-control" value="{{ $price }}">
            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Tour</button>
    </form>

    <button wire:click="deleteTour" class="btn btn-danger mt-3">Delete Tour</button>
</div>

