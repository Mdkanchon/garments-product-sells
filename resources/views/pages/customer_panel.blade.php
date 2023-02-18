@extends('layouts.frontend_master')

@section('main_content')

@include('layouts.nav_menu')

<!-- Home -->

<div class="shop_banner" id="overlay">
	<h2>Order Information</h2>
</div>

<!-- Shop -->

<div class="shop" style="padding-top:0px">
	<div class="container">
		<div class="row">
			@forelse($all_order as $key=>$item)
			<div class="col-md-12 border p-2 bg-secondary">
				<span style="font-size: 20px; color:#fff "><b>#Order ID:</b> {{$item->id}}</span>
				{{-- Customer Name: {{$item->customer_name}},
				Amount: {{$item->amount}} --}}
			</div>

			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>SL</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					@foreach($item->order_list as $key=>$items)
					<tr>
						<td>{{$key +1}}</td>
						<td>{{$items->product->product_name}}</td>
						<td>{{$items->quantity}}</td>
						<td>{{$items->product_unite_price}}</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th colspan="3" style="text-align: right">Total Amount: </th>
						<th>{{$item->amount}} TK</th>
					</tr>
				</tfoot>
			</table>

			@empty
			<div>Order not found!!</div>
			@endforelse
		</div>
	</div>
</div>
@endsection