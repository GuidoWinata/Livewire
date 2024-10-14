<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Produk')]

class Product extends Component
{
    use WithPagination;

    public $productId;

    public function render()
    {
        $paginated = ModelsProduct::paginate(10);

        return view('livewire.product')->with([
            "data" => $paginated
        ]);
    }

    public function delete_confirmation($id)
    {
        $this->productId = $id;
    }

    public function delete()
    {
        $id = $this->productId;
        ModelsProduct::findOrFail($id)->delete();
        session()->flash('deleted', 'Berhasil menghapus data');
    }
}
