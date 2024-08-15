<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tour;

class CreateTour extends Component
{
    public $destination;
    public $start;
    public $end;
    public $price;

    public function saveTour()
    {
        $this->validate([
            'destination' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date',
            'price' => 'required|numeric|min:0',
        ]);

        Tour::create([
            'destination' => $this->destination,
            'start' => $this->start,
            'end' => $this->end,
            'price' => $this->price,
        ]);

        session()->flash('message', 'Tour created successfully.');

        return redirect()->route('tours.index');
    }

    public function render()
    {
        return view('livewire.create-tour');
    }
}
