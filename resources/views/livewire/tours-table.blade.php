<div>
    <div>
        <div class="mx-1">
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none border-gray-200 rounded py-3 px-4 focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Search destination...">
        </div>
    </div>
    <table class="table-fixed">
        <thead>
            <tr>
                <th class="px-4 py-2">Destination</th>
                <th cursor="pointer" sortable wire:click="sortBy('start')" :direction="$sortField === 'start' ? $sortDirection : null" class="px-4 py-2">
                    <span cursor="pointer" class="flex items-center">
                        Start
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
                <th cursor="pointer" sortable wire:click="sortBy('end')" :direction="$sortField === 'end' ? $sortDirection : null" class="px-4 py-2">
                    <span cursor="pointer" class="flex items-center">
                        End
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
                <th cursor="pointer" sortable wire:click="sortBy('price')" :direction="$sortField === 'price' ? $sortDirection : null" class="px-4 py-2">
                    <span cursor="pointer" class="flex items-center">
                        Price
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tours as $tour)
                <tr>
                    <td wire:click="edit({{$tour}})" class="border px-4 py-2">{{ $tour->destination }}</td>
                    <td class="border px-4 py-2">@readableDateTime($tour->start)</td>
                    <td class="border px-4 py-2">@readableDateTime($tour->end)</td>
                    <td class="border px-4 py-2">@moneyFormat($tour->price)</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-3/6 mx-1">
        {{ $tours->links()}}
    </div>
</div>