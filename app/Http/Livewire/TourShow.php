<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tour;

class TourShow extends Component
{
    public $tour;
    public $start;
    public $end;
    public $price;

    public function mount(Tour $tour)
    {
        $this->tour = $tour;
        $this->start = $tour->start->format('Y-m-d');
        $this->end = $tour->end->format('Y-m-d');
        $this->price = $tour->price;
    }

    public function updateTour()
    {
        $this->validate([
            'start' => 'required|date',
            'end' => 'required|date',
            'price' => 'required|numeric|min:0',
        ]);

        $this->tour->update([
            'start' => $this->start,
            'end' => $this->end,
            'price' => $this->price,
        ]);

        session()->flash('message', 'Tour updated successfully.');
    }

    public function deleteTour()
    {
        $this->tour->delete();

        session()->flash('message', 'Tour deleted successfully.');

        return redirect()->route('tours.index'); // Redirect to the appropriate route after deletion
    }

    public function render()
    {
        return view('livewire.tour-show');
    }
}
