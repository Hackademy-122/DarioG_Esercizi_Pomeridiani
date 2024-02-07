<div>
    <form wire:submit="store">
        <div class="mb-3">
            <label for="exampleArtist" class="form-label">Artista</label>
            <input wire:model="artist" placeholder="Scrivi" type="text" class="form-control" id="exampleArtist" aria-describedby="nameHelp">
            @error('artist') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleTitle" class="form-label">Titolo</label>
            <input wire:model="title" placeholder="Scrivi" type="text" class="form-control" id="exampleTitle" aria-describedby="nameHelp">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleYear" class="form-label">Anno</label>
            <input wire:model="year" placeholder="Scrivi" type="number" class="form-control" id="exampleYear" aria-describedby="nameHelp">
            @error('year') <span class="error">{{ $message }}</span> @enderror
        </div>
        <input type="file" wire:model="img">
 
    @error('photo') <span class="error">{{ $message }}</span> @enderror
 
 
        <div class="mb-3">
            <label for="inputGenres" class="form-label">Genere/i:</label>
            <select multiple id="inputGenres" class="form-control" wire:model="genreSelected">
                @foreach($allGenres as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('genreSelected') <span class="error">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>
