<h1>Ingrediënt Wijzigen</h1>
<form action="{{ route('ingredients.update', $ingredient->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div style="margin: 15px 0;">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" value="{{ $ingredient->name }}" required>
    </div>

    <div style="margin: 15px 0;">
        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="">-- Selecteer Type --</option>
            <option value="fruit">Fruit</option>
            <option value="vegetable">Groente</option>
            <option value="beef">Rund</option>
            <option value="chicken">Kip</option>
            <option value="pork">Varken</option>
            <option value="fish">Vis</option>
            <option value="lam">Lam</option>
            <option value="nut">Noot</option>
        </select>
    </div>

    <div style="margin: 15px 0;">
        <label for="allergy">Allergie:</label>
        <select id="allergy" name="allergy" required>
            <option value="">-- Selecteer Allergie --</option>
            <option value="nothing">Niets</option>
            <option value="Peanut">Pindanoot</option>
            <option value="Tree Nut">Noot</option>
            <option value="Milk">Melk</option>
            <option value="Egg">Ei</option>
            <option value="Fish">Vis</option>
            <option value="Shellfish">Schelpdier</option>
            <option value="Soy">Soja</option>
            <option value="Wheat">Tarwe</option>
            <option value="Sesame">Sesamzaad</option>
            <option value="Mustard">Mosterd</option>
            <option value="Celery">Selderij</option>
            <option value="Sulfites">Sulfiten</option>
        </select>
    </div>

    <div style="margin: 15px 0;">
        <button type="submit">Opslaan</button>
        <a href="{{ route('ingredients.index') ?? '/' }}"><button type="button">Annuleren</button></a>
    </div>
</form>
