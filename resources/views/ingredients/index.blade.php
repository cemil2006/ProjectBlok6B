<x-base-layout>
<h1>Ingrediënten</h1>

<a href="{{ route('ingredients.create') }}"><button>Nieuw Ingrediënt</button></a>

<table border="1" style="margin-top: 20px; width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding: 10px; text-align: left;">Naam</th>
            <th style="padding: 10px; text-align: left;">Type</th>
            <th style="padding: 10px; text-align: left;">Allergie</th>
            <th style="padding: 10px; text-align: left;">Acties</th>
        </tr>
    </thead>
    <tbody>
        @forelse($ingredients as $ingredient)
            <tr>
                <td style="padding: 10px; border-top: 1px solid #ddd;">{{ $ingredient->name }}</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">{{ $ingredient->type }}</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">{{ $ingredient->allergy }}</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">
                    <a href="{{ route('ingredients.edit', $ingredient->id) }}"><button>Wijzig</button></a>
                    <form action="{{ route('ingredients.destroy', $ingredient->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Zeker?')">Verwijder</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" style="padding: 10px; text-align: center; border-top: 1px solid #ddd;">
                    Geen ingrediënten gevonden
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
</x-base-layout>