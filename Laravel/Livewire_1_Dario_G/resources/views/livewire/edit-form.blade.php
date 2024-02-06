<div>
    <div>
        <form wire:submit="update">
            <div class="mb-3">
                <label for="inputTitle" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" wire:model.live="name">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="inputBody" class="form-label">Prezzo</label>
                <input id="inputBody" cols="30" rows="10" class="form-control" wire:model.live="price">
                @error('price') <span class="error">{{ $message }}</span> @enderror
    
            </div>
    
            <button type="submit" class="btn btn-primary">Modifica articolo</button>
        </form>
        
    </div>
</div>
