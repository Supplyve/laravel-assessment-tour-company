<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Tour;

class Delete extends Component
{
    public $entityId;

    public function mount($entity)
    {
        $this->entityId = $entity->id;
    }

    public function deleteSingleRecord()
    {
        $entity = Tour::findOrFail($this->entityId);
        return redirect()->route('tourdestroy', ['tour' => $entity]);
    }

    public function render()
    {
        return view('livewire.components.delete');
    }
}
