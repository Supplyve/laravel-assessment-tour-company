<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tour;

class Tours extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchStart;
    public $searchEnd;
    public $searchPrice;
    public $searchDestination;

    public function updatingSearchDestination()
    {
        $this->resetPage();
    }

    public function render()
    {
        $tours = Tour::query()
            ->whereNull('deleted_at') // Ensures soft-deleted tours are not shown
            ->when($this->searchStart, function ($query) {
                $query->whereDate('start', '>=', $this->searchStart);
            })
            ->when($this->searchEnd, function ($query) {
                $query->whereDate('end', '<=', $this->searchEnd);
            })
            ->when($this->searchPrice, function ($query) {
                $query->where('price', '<=', $this->searchPrice);
            })
            ->when($this->searchDestination, function ($query) {
                $query->where('destination', 'like', '%' . $this->searchDestination . '%');
            })
            ->paginate(10);

        return view('livewire.tours', ['tours' => $tours]);
    }
}
