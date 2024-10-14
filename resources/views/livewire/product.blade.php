<div>
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('edited'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('edited') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('deleted'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('deleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <a class="btn btn-primary mb-5" href="{{ route('product.create') }}" wire:navigate>Tambah Data</a>
    @if ($data && $data->isNotEmpty())
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
            <tr wire:key="{{ $item->id }}">
                <th>{{ $item->id }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nomor }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        <a role="button" href="/product/{{ $item->id }}" class="btn btn-warning">Edit</a>
                        <a role="button" wire:click="delete_confirmation({{ $item->id }})" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{ $data->links() }}
        </div>
      @else
        <div class="fw-bold text-center fs-5">Tidak ada Data😪</div>
      @endif

      <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Menghapus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Apakah anda yakin menghapus ini?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" wire:click.prevent="delete()" class="btn btn-danger">Hapus</button>
                </div>
            </div>
            </div>
        </div>
</div>
