@extends('layouts.app')
	
	@section('content')
		<div class="container">
		<h2>your cart</h2>
		
	
			
			<table class="table">
				<thead>
					<tr>
						<th>name</th>
						<th>price</th>
						<th>quantity</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($cartItems as $item)
					<tr>
						<td scope="row">{{ $item->name }}</td>
						<td>
							{{ Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
						</td>
						<td>
							<form action="{{ route('cart.add', $item->id) }}">
							<input name="quantity" type="number" value="{{ $item->quantity }}">
							
							<input type="submit" value="save">
							</form>
						</td>
						
						<td>
							<a href="{{ route('cart.destroy', $item->id) }}">delete item</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		
			<h3>
				total price : $ {{ \Cart::session(auth()->id())->getTotal() }}
			</h3>
		
		<a class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button"> proceed to checkout</a>
		</div>
	@endsection