<div>
    <form wire:submit="update">
        <div class="mb-3">
            <label for="exampleArtist" class="form-label">Artista</label>
            <input wire:model="artist" type="text" class="form-control" id="exampleArtist" aria-describedby="nameHelp">
            @error('artist') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleTitle" class="form-label">Titolo</label>
            <input wire:model="title" type="text" class="form-control" id="exampleTitle" aria-describedby="nameHelp">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleYear" class="form-label">Anno</label>
            <input wire:model="year" type="number" class="form-control" id="exampleTitle" aria-describedby="nameHelp">
            @error('year') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
