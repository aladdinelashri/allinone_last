<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\WithPagination;

class Softbrands extends Component
{

 use WithPagination;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $Title;
    public $Description;

     /**
     * The livewire mount function
     *
     * @return void
     */
    public function mount()
    {
        // Resets the pagination after reloading the page
        $this->resetPage();
    }

/**
     * The read function.
     *
     * @return void
     */
     /**
     * The delete function.
     *
     * @return void
     */
    public function softdelete()
    {
        Brand::delete ($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();

        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'Soft Deleted Page',
            'eventMessage' => 'The page (' . $this->modelId . ') has been soft deleted!',
        ]);
    }



    public function render()
    {
        return view('livewire.softbrands', [
            'data' => Brand::withTrashed(),
        ]);
    }
}
