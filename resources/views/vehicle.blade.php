@extends('layouts.app')

@section('title', $vehicle->name)

@section('content')
<div class="block-header block-header--has-breadcrumb block-header--has-title">
	<div class="container">
		<div class="block-header__body">
			<nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
				<ol class="breadcrumb__list">
					<li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
					<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
						<a href="/" class="breadcrumb__item-link">
							@lang('Home')
						</a>
					</li>
					<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page">
						<span class="breadcrumb__item-link">
							{{ $vehicle->name }}
						</span>
					</li>
					<li class="breadcrumb__title-safe-area" role="presentation"></li>
				</ol>
			</nav>
			<h1 class="block-header__title">{{ $vehicle->name }}</h1>
		</div>
	</div>
</div>
<div class="block">
	<div class="container container--max--xl">
		<div>
			<table class="table table-bordered table-hover">
				<thead class="thead-dark">
					<tr class="wishlist__row--head">
						<th class="wishlist__column--head wishlist__column--product">
							@lang('Type')
						</th>
						<th class="wishlist__column--head wishlist__column--product">
							@lang('Construction interval')
						</th>
						{{-- <th class="wishlist__column--head wishlist__column--product">
							@lang('Power')
						</th>
						<th class="wishlist__column--head wishlist__column--product">
							@lang('Capacity')
						</th>
						<th class="wishlist__column--head wishlist__column--product">
							@lang('Number of cylinders')
						</th>
						<th class="wishlist__column--head wishlist__column--product">
							@lang('Body type')
						</th>
						<th class="wishlist__column--head wishlist__column--product">
							@lang('Engine type')
						</th>
						<th class="wishlist__column--head wishlist__column--product">
							@lang('Engine code')
						</th> --}}
					</tr>
				</thead>
				<tbody>
					@foreach ($cars as $car)
						<tr class="wishlist__row--body">
							<td class="wishlist__column--body wishlist__column--product">
								<a href="{{ url('brands/'. $vehicle->model->brand->id . '/' . $vehicle->model->brand->slug . '/models/' . $vehicle->model->id . '/' . $vehicle->model->slug . '/vehicles/' . $vehicle->id . '/' . $vehicle->slug . '/cars/' . $car->id . '/' . $car->slug) }}">
									{{ $car->type }}
								</a>
							</td>
							<td class="wishlist__column--body wishlist__column--product">
								{{ $car->from }} - {{ $car->to }}
							</td>
							{{-- <td class="wishlist__column--body wishlist__column--product">
								{{ $car->power }}
							</td>
							<td class="wishlist__column--body wishlist__column--product">
								{{ $car->capacity }}
							</td>
							<td class="wishlist__column--body wishlist__column--product">
								{{ $car->cylinders }}
							</td>
							<td class="wishlist__column--body wishlist__column--product">
								@lang($car->construction)
							</td>
							<td class="wishlist__column--body wishlist__column--product">
								@lang($car->fuel)
							</td>
							<td class="wishlist__column--body wishlist__column--product">
								{{ $car->motor_code }}
							</td> --}}
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="block-space block-space--layout--before-footer"></div>
@stop
