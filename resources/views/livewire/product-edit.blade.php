<div>
    <form wire:submit.prevent="edit">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Produk</label>
          <input type="text" wire:model="nama" class="form-control" id="nama" aria-describedby="emailHelp">
          <div class="mt-3">
            @error('nama') <span class="text-danger fw-bold bg-danger-subtle p-1 error">{{ $message }}</span>@enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="nomor" class="form-label">Nomor</label>
          <input type="text" wire:model="nomor" class="form-control" id="nomor">
          <div class="mt-3">
            @error('nomor') <span class="text-danger fw-bold bg-danger-subtle p-1 error">{{ $message }}</span>@enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="text" wire:model="harga" class="form-control" id="harga">
          <div class="mt-3">
            @error('harga') <span class="text-danger fw-bold bg-danger-subtle p-1 error">{{ $message }}</span>@enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="jenis" class="form-label">Jenis</label>
          <input type="text" wire:model="jenis" class="form-control" id="jenis">
          <div class="mt-3">
            @error('jenis') <span class="text-danger fw-bold bg-danger-subtle p-1 error">{{ $message }}</span>@enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
