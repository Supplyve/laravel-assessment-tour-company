<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tour;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\WithSorting;

class ToursTable extends Component
{
    use WithPagination, WithSorting;

    public $search = '';

    public function edit(Tour $tour) 
    {
        return redirect()->route('touredit', ['tour' => $tour]);
    }
    

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.tours-table', [
            'tours' => Tour::search('destination', $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(10)
        ]);
    }
}
