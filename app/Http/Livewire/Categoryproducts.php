<?php

namespace App\Http\Livewire;

use App\Models\Categoryproduct;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Categoryproducts extends Component
{
    use WithPagination;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $Title;
    
   
    /**
     * The validation rules
     *
     * @return void
     */
    public function rules()
    {
        return [
            'Title' => 'required',
            
        ];
    }

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
     * The create function.
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        Brand::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();

        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'New Page',
            'eventMessage' => 'Another page has been created!',
        ]);
    }

    /**
     * The read function.
     *
     * @return void
     */
    public function read()
    {
        return Categoryproduct::paginate(5);
    }

    /**
     * The update function.
     *
     * @return void
     */
    public function update()
    {
        $this->validate();
        Categoryproduct::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;

        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'Updated Page',
            'eventMessage' => 'There is a page (' . $this->modelId . ') that has been updated!',
        ]);
    }

    /**
     * The delete function.
     *
     * @return void
     */
    public function delete()
    {
        Categoryproduct::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();

        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'Deleted Page',
            'eventMessage' => 'The page (' . $this->modelId . ') has been deleted!',
        ]);
    }

   
   

    /**
     * Shows the form modal
     * of the create function.
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->resetValidation();
        $this->reset();
        $this->modalFormVisible = true;
    }

    /**
     * Shows the form modal
     * in update mode.
     *
     * @param  mixed $id
     * @return void
     */
    public function updateShowModal($id)
    {
        $this->resetValidation();
        $this->reset();
        $this->modelId = $id;
        $this->modalFormVisible = true;
        $this->loadModel();
    }

    /**
     * Shows the delete confirmation modal.
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteShowModal($id)
    {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    /**
     * Loads the model data
     * of this component.
     *
     * @return void
     */
    public function loadModel()
    {
        $data = Categoryproduct::find($this->modelId);
        $this->Title = $data->Title;
        
       
    }

    /**
     * The data for the model mapped
     * in this component.
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'Title' => $this->Title,
            
            
        ];
    }

    

    /**
     * Dispatch event
     *
     * @return void
     */
    public function dispatchEvent()
    {
        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'Sample Event',
            'eventMessage' => 'You have a sample event notification!',
        ]);
    }

    /**
     * The livewire render function.
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.Categoryproducts', [
            'data' => $this->read(),
        ]);
    }
}

