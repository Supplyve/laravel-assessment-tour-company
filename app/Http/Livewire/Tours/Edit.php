<?php

namespace App\Http\Livewire\Tours;

use Livewire\Component;
use App\Models\Tour;

class Edit extends Component
{
    public Tour $tour;

    public function render()
    {
        return view('livewire.tours.edit', ['tour' => $this->tour]);
    }
}
