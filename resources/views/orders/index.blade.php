<h1>Overzicht Gerechten</h1>

<div style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-size: 14px; color: #666; margin-bottom: 10px;"><strong>Filter op categorie:</strong></p>
    <div>
        <a href="{{ route('orders.index') }}">
            <button style="padding: 8px 12px; margin-right: 5px; {{ !$category ? 'background-color: #007bff; color: white;' : 'background-color: #f0f0f0;' }} border: 1px solid #ddd; border-radius: 4px; cursor: pointer;">
                Alle
            </button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'appetizer']) }}">
            <button style="padding: 8px 12px; margin-right: 5px; {{ $category === 'appetizer' ? 'background-color: #007bff; color: white;' : 'background-color: #f0f0f0;' }} border: 1px solid #ddd; border-radius: 4px; cursor: pointer;">
                Voorgerecht
            </button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'main']) }}">
            <button style="padding: 8px 12px; margin-right: 5px; {{ $category === 'main' ? 'background-color: #007bff; color: white;' : 'background-color: #f0f0f0;' }} border: 1px solid #ddd; border-radius: 4px; cursor: pointer;">
                Hoofdgerecht
            </button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'dessert']) }}">
            <button style="padding: 8px 12px; margin-right: 5px; {{ $category === 'dessert' ? 'background-color: #007bff; color: white;' : 'background-color: #f0f0f0;' }} border: 1px solid #ddd; border-radius: 4px; cursor: pointer;">
                Nagerecht
            </button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'beverage']) }}">
            <button style="padding: 8px 12px; margin-right: 5px; {{ $category === 'beverage' ? 'background-color: #007bff; color: white;' : 'background-color: #f0f0f0;' }} border: 1px solid #ddd; border-radius: 4px; cursor: pointer;">
                Drank
            </button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'side']) }}">
            <button style="padding: 8px 12px; margin-right: 5px; {{ $category === 'side' ? 'background-color: #007bff; color: white;' : 'background-color: #f0f0f0;' }} border: 1px solid #ddd; border-radius: 4px; cursor: pointer;">
                Bijgerecht
            </button>
        </a>
    </div>
</div>

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
                    <a href="{{ route('orders.order', $dish->id) }}"><button>Bestel gerecht</button></a>
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
