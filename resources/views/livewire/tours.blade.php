<div class="container mt-5">
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="mb-4 row">
        <div class="col-md-4">
            <input wire:model="searchDestination" type="text" class="form-control" placeholder="Search by Destination">
        </div>
        <div class="col-md-2">
            <input wire:model="searchStart" type="date" class="form-control" placeholder="Filter by Start Date">
        </div>
        <div class="col-md-2">
            <input wire:model="searchEnd" type="date" class="form-control" placeholder="Filter by End Date">
        </div>
        <div class="col-md-2">
            <input wire:model="searchPrice" type="number" step="0.01" class="form-control" placeholder="Filter by Price">
        </div>
        <div class="col-md-2">
            <a href="{{ route('tours.create') }}" class="btn btn-success">Create New Tour</a>
        </div>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Destination</th>
                <th>Start</th>
                <th>End</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
                <tr>
                    <td>
                        <a href="{{ route('tours.show', $tour->id) }}" wire:navigate class="text-primary">
                            {{ $tour->destination }}
                        </a>
                    </td>
                    <td>
                        {{ $tour->start->format('F j, Y') }}
                    </td>
                    <td>
                        {{ $tour->end->format('F j, Y') }}
                    </td>
                    <td>
                        ${{ number_format($tour->price, 2) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $tours->links() }}
    </div>
</div>
