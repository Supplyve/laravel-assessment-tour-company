<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Tour;
use Carbon\Carbon;
use DateTime;

class EditField extends Component
{
    public $currVal;
    public $entityId;
    public $shortId;
    public $newVal;
    public $isDateField;
    public $errors;
    public string $field;

    public function mount($entity)
    {
        $this->entityId = $entity->id;
        $this->shortId = $entity->short_id;
        $this->currVal = $entity->{$this->field};
        $this->errors;
        $this->isDateField = ($this->currVal instanceof DateTime);

        $this->init($entity);
    }

    public function save()
    {
        $entity = Tour::findOrFail($this->entityId);
        $entity->{$this->field} = preg_replace('~[$,]~', '', $this->newVal);

        if (($this->newVal === $this->shortId) || $this->invalidDates($entity)) $entity->{$this->field} = $this->currVal;
        else $entity->save();
        
        $this->init($entity);
    }

    private function init($entity)
    {
        $this->currVal = $entity->{$this->field} ?: $this->shortId;

        if ($this->isDateField) {
            $this->currVal = date_format($this->currVal ,'d M Y');
        } else
        { 
            $this->currVal = "$".number_format($this->currVal, 2);
        }

        $this->newVal = $this->currVal;
    }

    private function invalidDates($entity) {
        if ($this->isDateField)
        {   
            $start = Carbon::create($entity['start']);
            $end = Carbon::create($entity['end']);

            $diff = $start->diffInDays($end, false);
            if ($diff <= 0) return true;
        }

        return false;
    }

    public function render()
    {
        return view('livewire.components.edit-field');
    }
}
