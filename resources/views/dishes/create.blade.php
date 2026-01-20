<x-base-layout>
<h1>Gerecht Toevoegen</h1>

<form action="{{ route('dishes.store') }}" method="POST">
    @csrf

    <div style="margin: 15px 0;">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div style="margin: 15px 0;">
        <label for="price">Prijs (in centen):</label>
        <input type="number" id="price" name="price" required>
    </div>

    <div style="margin: 15px 0;">
        <label for="category">Categorie:</label>
        <select id="category" name="category" required>
            <option value="">-- Selecteer Categorie --</option>
            <option value="appetizer">Voorgerecht</option>
            <option value="main">Hoofdgerecht</option>
            <option value="dessert">Nagerecht</option>
            <option value="beverage">Drank</option>
            <option value="side">Bijgerecht</option>
        </select>
    </div>

    <div style="margin: 15px 0;">
        <label for="ingredients">Ingredienten</label> 
        @foreach($ingredients as $ingredient)
            <div>
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label>{{ $ingredient->name }}</label>
            </div>
        @endforeach  
    </div>

    <div style="margin: 15px 0;">
        <label for="description">Beschrijving:</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div style="margin: 15px 0;">
        <label for="rating">Beoordeling:</label>
        <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" required>
    </div>

    <div style="margin: 15px 0;">
        <button type="submit">Opslaan</button>
        <a href="{{ route('dishes.index') ?? '/' }}"><button type="button">Annuleren</button></a>
    </div>
</form>
</x-base-layout>