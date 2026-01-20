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
        <option value="fruit" {{ $ingredient->type == 'fruit' ? 'selected' : '' }}>Fruit</option>
        <option value="vegetable" {{ $ingredient->type == 'vegetable' ? 'selected' : '' }}>Groente</option>
        <option value="beef" {{ $ingredient->type == 'beef' ? 'selected' : '' }}>Rund</option>
        <option value="chicken" {{ $ingredient->type == 'chicken' ? 'selected' : '' }}>Kip</option>
        <option value="pork" {{ $ingredient->type == 'pork' ? 'selected' : '' }}>Varken</option>
        <option value="fish" {{ $ingredient->type == 'fish' ? 'selected' : '' }}>Vis</option>
        <option value="lam" {{ $ingredient->type == 'lam' ? 'selected' : '' }}>Lam</option>
        <option value="nut" {{ $ingredient->type == 'nut' ? 'selected' : '' }}>Noot</option>
    </select>
    </div>

    <div style="margin: 15px 0;">
        <label for="allergy">Allergie:</label>
        <select id="allergy" name="allergy" required>
            <option value="">-- Selecteer Allergie --</option>
            <option value="nothing" {{ $ingredient->allergy == 'nothing' ? 'selected' : '' }}>Niets</option>
            <option value="Peanut" {{ $ingredient->allergy == 'Peanut' ? 'selected' : '' }}>Pindanoot</option>
            <option value="Tree Nut" {{ $ingredient->allergy == 'Tree Nut' ? 'selected' : '' }}>Noot</option>
            <option value="Milk" {{ $ingredient->allergy == 'Milk' ? 'selected' : '' }}>Melk</option>
            <option value="Egg" {{ $ingredient->allergy == 'Egg' ? 'selected' : '' }}>Ei</option>
            <option value="Fish" {{ $ingredient->allergy == 'Fish' ? 'selected' : '' }}>Vis</option>
            <option value="Shellfish" {{ $ingredient->allergy == 'Shellfish' ? 'selected' : '' }}>Schelpdier</option>
            <option value="Soy" {{ $ingredient->allergy == 'Soy' ? 'selected' : '' }}>Soja</option>
            <option value="Wheat" {{ $ingredient->allergy == 'Wheat' ? 'selected' : '' }}>Tarwe</option>
            <option value="Sesame" {{ $ingredient->allergy == 'Sesame' ? 'selected' : '' }}>Sesamzaad</option>
            <option value="Mustard" {{ $ingredient->allergy == 'Mustard' ? 'selected' : '' }}>Mosterd</option>
            <option value="Celery" {{ $ingredient->allergy == 'Celery' ? 'selected' : '' }}>Selderij</option>
            <option value="Sulfites" {{ $ingredient->allergy == 'Sulfites' ? 'selected' : '' }}>Sulfiten</option>
        </select>
    </div>

    <div style="margin: 15px 0;">
        <button type="submit">Opslaan</button>
        <a href="{{ route('ingredients.index') ?? '/' }}"><button type="button">Annuleren</button></a>
    </div>
</form>
