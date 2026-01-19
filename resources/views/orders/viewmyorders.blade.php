<h2>Alle Orders</h2>

<table >
    <thead>
        <tr>
            <th>Gerecht</th>
            <th>Gebruiker</th>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Aangemaakt op</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            @foreach($order->dishes as $dish)
        <tr>
                        <td>{{ $dish->name }}</td>
                        <td>{{ $order->user->firstname }}</td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td> 
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Zeker?')">Verwijder</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('orders.isCompleted', $order->id) }}" method="POST" style="display: inline;">
                                @csrf    
                                <button type="submit" onclick="return confirm('Zeker?')">Complete?</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('orders.store') }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="dish" value="{{ $dish->id }}">
                                <button type="submit">Bestel gerecht</button>
                            </form>
                        </td>
                    </tr>
    @endforeach
@endforeach
    </tbody>
</table>