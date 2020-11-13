<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Category;
use App\Part;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class PagesController extends Controller
{
	/**
	 * Index page.
	 *
	 * Return the index view
	 * compacting data that includes
	 * Distinct vehicle years, brands, models and fuel types
	 *
	 * @return \Illuminate\View\View $view The index view
	 **/
	public function index(): View
	{
		// Get new arrivals
		$new_parts = Part::latest()->get();
		// Get their types
		$categories = Cache::rememberForever('categories_cards', function () {
			return Category::whereHas('categories', function (Builder $query) {
				$query->whereHas('types');
			})->limit(3)->with('subParts')->get();
		});

		return view('index', compact('new_parts', 'categories'));
	}
}
