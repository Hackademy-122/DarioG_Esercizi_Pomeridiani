<div>

    <form wire:submit="store" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="exampleName" class="form-label">Nome</label>
          <input wire:model="name" type="text" class="form-control" id="exampleName" aria-describedby="nameHelp">
          @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="examplePrice" class="form-label">Prezzo</label>
          <input wire:model="price" type="number" class="form-control" id="exampleInputPrice">
          @error('price') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn"><a href="" class="rainbow-btn"><span>Submit</span></a></button>
      </form>
</div>
