<h1>{{ $dish->name }}</h1>

<div style="margin-top: 20px;">
    <div style="margin: 15px 0;">
    
    </div>

    <div style="margin: 15px 0;">
        <strong>Categorie:</strong> {{ $dish->category }}
    </div>

    <div style="margin: 15px 0;">
        <strong>Beschrijving:</strong>
        <p>{{ $dish->description }}</p>
    </div>

    <div style="margin: 15px 0;">
        <strong>Beoordeling:</strong> {{ $dish->rating }}/5
    </div>

    <div style="margin: 15px 0;">
        <strong>Ingrediënten:</strong>
        @if($dish->ingredients->count() > 0)
            <ul>
                @foreach($dish->ingredients as $ingredient)
                    <li>{{ $ingredient->name }} ({{ $ingredient->type }}) - Allergie: {{ $ingredient->allergy }}</li>
                @endforeach
            </ul>
        @else
            <p>Geen ingrediënten gekoppeld</p>
        @endif
    </div>

    <div style="margin: 15px 0;">
    
    </div>

    <div style="margin: 20px 0;">
        <a href="{{ route('dishes.edit', $dish->id) }}"><button>Wijzig</button></a>
        <a href="{{ route('dishes.index') }}"><button>Terug naar overzicht</button></a>
    </div>
</div>
