<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{

    public Product $product;

    public $productId;
    public $nama;
    public $nomor;
    public $jenis;
    public $harga;


    public function render()
    {
        return view('livewire.product-edit');
    }

    public function mount($id)
    {
        $prod = Product::findOrFail($id);

        $this->productId = $prod->id;
        $this->nama = $prod->nama;
        $this->nomor = $prod->nomor;
        $this->jenis = $prod->jenis;
        $this->harga = $prod->harga;
    }

    public function edit()
    {
        $product = Product::findOrFail($this->productId);

        $rules = [
            'nama' => 'required|string',
            'nomor' => 'required|string',
            'jenis' => 'required|string',
            'harga' => 'required|string',
        ];

        $validated = $this->validate($rules);
        $product->update($validated);
        session()->flash('edited', 'Berhasil meng-update data');
        return $this->redirect('/');
    }
}
