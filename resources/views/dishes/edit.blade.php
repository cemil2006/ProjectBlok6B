<x-base-layout>
<h1>Gerecht Bewerken</h1>

<form action="{{ route('dishes.update', $dish->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div style="margin: 15px 0;">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" value="{{ $dish->name }}" required>
    </div>

    <div style="margin: 15px 0;">
        <label for="price">Prijs (in centen):</label>
        <input type="number" id="price" name="price" value="{{ $dish->price }}" required>
    </div>

    <div style="margin: 15px 0;">
        <label for="category">Categorie:</label>
        <select id="category" name="category" required>
            <option value="">-- Selecteer Categorie --</option>
            <option value="appetizer" {{ $dish->category === 'appetizer' ? 'selected' : '' }}>Voorgerecht</option>
            <option value="main" {{ $dish->category === 'main' ? 'selected' : '' }}>Hoofdgerecht</option>
            <option value="dessert" {{ $dish->category === 'dessert' ? 'selected' : '' }}>Nagerecht</option>
            <option value="beverage" {{ $dish->category === 'beverage' ? 'selected' : '' }}>Drank</option>
            <option value="side" {{ $dish->category === 'side' ? 'selected' : '' }}>Bijgerecht</option>
        </select>
    </div>

    <div style="margin: 15px 0;">
        <label for="ingredients">Ingredienten</label> 
        @foreach($ingredients as $ingredient)
            <div>
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}" 
                {{ $dish->ingredients->contains('id', $ingredient->id) ? 'checked' : '' }}>
                <label>{{ $ingredient->name }}</label>
            </div>
        @endforeach  
    </div>
    <div style="margin: 15px 0;">
        <label for="description">Beschrijving:</label>
        <textarea id="description" name="description" required>{{ $dish->description }}</textarea>
    </div>

    <div style="margin: 15px 0;">
        <label for="rating">Beoordeling:</label>
        <input type="number" id="rating" name="rating" value="{{ $dish->rating }}" min="0" max="5" step="0.1" required>
    </div>

    <div style="margin: 15px 0;">
        <button type="submit">Opslaan</button>
        <a href="{{ route('dishes.index') ?? '/' }}"><button type="button">Annuleren</button></a>
    </div>
</form>
</x-base-layout>