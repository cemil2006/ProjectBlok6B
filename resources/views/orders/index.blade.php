<style>
    .filter-btn {
        padding: 8px 12px;
        margin-right: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        cursor: pointer;
        background-color: #f0f0f0;
    }
    .filter-btn.active {
        background-color: #007bff;
        color: white;
    }
</style>

<h1>Overzicht Gerechten</h1>

<div class="alert alert-success">
    {{ session('success') }}
</div>

<div style="margin-top: 20px; margin-bottom: 20px;">
    <p style="font-size: 14px; color: #666; margin-bottom: 10px;"><strong>Filter op categorie:</strong></p>
    <div>
        <a href="{{ route('orders.index') }}">
            <button class="filter-btn {{ !$category ? 'active' : '' }}">Alle</button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'appetizer']) }}">
            <button class="filter-btn {{ $category === 'appetizer' ? 'active' : '' }}">Voorgerecht</button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'main']) }}">
            <button class="filter-btn {{ $category === 'main' ? 'active' : '' }}">Hoofdgerecht</button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'dessert']) }}">
            <button class="filter-btn {{ $category === 'dessert' ? 'active' : '' }}">Nagerecht</button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'beverage']) }}">
            <button class="filter-btn {{ $category === 'beverage' ? 'active' : '' }}">Drank</button>
        </a>
        <a href="{{ route('orders.index', ['category' => 'side']) }}">
            <button class="filter-btn {{ $category === 'side' ? 'active' : '' }}">Bijgerecht</button>
        </a>
    </div>

    <div style="margin-top: 20px; margin-bottom: 20px;">
        <p style="font-size: 14px; color: #666; margin-bottom: 10px;"><strong>Filter op Prijs:</strong></p>
        <form method="GET" style="display: inline;">
            @if($category)
                <input type="hidden" name="category" value="{{ $category }}">
            @endif
            
            <select name="max_price" onchange="this.form.submit()" style="padding: 8px 12px; border: 1px solid #ddd; border-radius: 4px; cursor: pointer;">
                <option value="">-- Alle prijzen --</option>
                <option value="5" {{ $maxPrice == 5 ? 'selected' : '' }}>Tot €5,00</option>
                <option value="10" {{ $maxPrice == 10 ? 'selected' : '' }}>Tot €10,00</option>
                <option value="15" {{ $maxPrice == 15 ? 'selected' : '' }}>Tot €15,00</option>
                <option value="20" {{ $maxPrice == 20 ? 'selected' : '' }}>Tot €20,00</option>
                <option value="25" {{ $maxPrice == 25 ? 'selected' : '' }}>Tot €25,00</option>
            </select>
        </form>
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
                    <form action="{{ route('orders.store') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="dish" value="{{ $dish->id }}">
                        <button type="submit">Bestel gerecht</button>
                    </form>
                    <a href="{{ route('orders.showdish', $dish->id) }}"><button>Details</button></a>
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
