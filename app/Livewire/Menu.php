<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Menu extends Component
{
    public Collection $items;

    public array $selectedCategories;

    public function mount()
    {
        $this->items = Item::all();
    }

    public function clearSelectedCategories()
    {
        $this->selectedCategories = [];
        $this->items = Item::all();
    }

    public function selectCategory($id)
    {
        if(in_array($id, $this->selectedCategories))
        {
            $this->selectedCategories = array_filter($this->selectedCategories, fn($item) => $item !== $id);
        }else{
            array_push($this->selectedCategories, $id);
        }

        if(count($this->selectedCategories) < 1){
            $this->items = Item::all();
        }else{
            $this->items = Item::whereHas('categories', function (Builder $query){
                $query->whereIn('id', $this->selectedCategories);
            })->get();
        }
    }

    public function render()
    {
        return view('livewire.menu', [
            'categories' => Category::all()
        ]);
    }
}
