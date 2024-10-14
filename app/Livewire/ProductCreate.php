<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ProductCreate extends Component
{
    public $nama;
    public $nomor;
    public $jenis;
    public $harga;

    public function render()
    {
        return view('livewire.product-create');
    }

    public function save()
    {
        $this->validate([
            'nama' => 'required|string',
            'nomor' => 'required|string',
            'jenis' => 'required|string',
            'harga' => 'required|string',
        ]);

        Product::create([
            'nama' => $this->nama,
            'nomor' => $this->nomor,
            'jenis' => $this->jenis,
            'harga' => $this->harga,
        ]);

        session()->flash('message', 'Data berhasil dibuat');

        return $this->redirect('/');
    }
}
