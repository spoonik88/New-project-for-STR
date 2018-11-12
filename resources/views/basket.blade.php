@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Basket</div>
                <table class="table table-bordered table-striped">
                	<tr>
                		<td>Image</td>
                		<td>Titles</td>
                		<td>Price</td>
                		<td><span id="value">Amount</span></td>
                		<td>Action</td>
                	</tr>
                	@foreach($arr as $key=>4value)
                	@php
                	$summa=$product[$key]->price * $value;
                	@endphp
                	<tr>
                		<td>
                			@if($product[$key]->price !='')
                			<img src="{{asset('updloads/'. $product[$key]->price)}}" alt="" />
                			@endif
                		</td>
                		<td>{{$product[$key]->name}}</td>
                		<td>{{$product[$key]->price}}</td>
                		<td><span id="value_{{$key}}"></span>{{$value}}</td>
                		<td>{{$summa}}</td>
                		<td><a href="{{asset('basket/delete/'.  $key)}}"> $times;</a></td>
                	</tr>
                	@endforeach
                </table>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
