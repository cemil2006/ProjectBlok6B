<h1>Overzicht Gerechten</h1>

<table border="1" style="margin-top: 20px; width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="padding: 10px; text-align: left;">Naam</th>
            <th style="padding: 10px; text-align: left;">Prijs</th>
            <th style="padding: 10px; text-align: left;">Categorie</th>
            <th style="padding: 10px; text-align: left;">Allergenen</th>
            <th style="padding: 10px; text-align: left;">Beoordeling</th>
            <th style="padding: 10px; text-align: left;">Acties</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dishes as $dish)
            <tr>
                <td style="padding: 10px; border-top: 1px solid #ddd;">{{ $dish->name }}</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">€ {{ number_format($dish->price / 100, 2) }}</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">{{ $dish->category }}</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">{{ substr($dish->ingredients->pluck('allergy')->join(', '), 0, 50) }}{{ strlen($dish->ingredients->pluck('allergy')->join(', ')) > 50 ? '...' : '' }}</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">{{ $dish->rating }}/5</td>
                <td style="padding: 10px; border-top: 1px solid #ddd;">
                    <a href="{{ route('orders.show', $dish->id) }}"><button>Details</button></a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" style="padding: 10px; text-align: center; border-top: 1px solid #ddd;">
                    Geen gerechten gevonden
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
