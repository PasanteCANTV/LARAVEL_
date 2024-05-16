<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cuarto;

class Cuartos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $region, $state, $locality;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.cuartos.view', [
            'cuartos' => Cuarto::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('region', 'LIKE', $keyWord)
						->orWhere('state', 'LIKE', $keyWord)
						->orWhere('locality', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->region = null;
		$this->state = null;
		$this->locality = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'region' => 'required',
		'state' => 'required',
		'locality' => 'required',
        ]);

        Cuarto::create([ 
			'name' => $this-> name,
			'region' => $this-> region,
			'state' => $this-> state,
			'locality' => $this-> locality
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Cuarto Successfully created.');
    }

    public function edit($id)
    {
        $record = Cuarto::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->region = $record-> region;
		$this->state = $record-> state;
		$this->locality = $record-> locality;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'region' => 'required',
		'state' => 'required',
		'locality' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Cuarto::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'region' => $this-> region,
			'state' => $this-> state,
			'locality' => $this-> locality
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Cuarto Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Cuarto::where('id', $id)->delete();
        }
    }
}