<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Property;

class FavoriteController extends Controller
{
    public function index()
    {
        // Get user's favorites with property details
        $favorites = Favorite::with('property')
            ->where('user_id', auth()->id())
            ->get()
            ->map(function ($favorite) {
                return [
                    'id' => $favorite->property->id,
                    'title' => $favorite->property->title,
                    'location' => $favorite->property->location,
                    'price' => $favorite->property->price,
                    'image' => $favorite->property->images->first()->url ?? null,
                    'type' => $favorite->property->type,
                    'bedrooms' => $favorite->property->bedrooms,
                    'rating' => $favorite->property->rating,
                    'featured' => $favorite->property->featured,
                    'created_at' => $favorite->created_at
                ];
            });

        return view('favorites.index', compact('favorites'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id'
        ]);

        $favorite = Favorite::firstOrCreate([
            'user_id' => auth()->id(),
            'property_id' => $request->property_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Property added to favorites',
            'favorite' => $favorite
        ]);
    }

    public function destroy($id)
    {
        $favorite = Favorite::where('user_id', auth()->id())
            ->where('property_id', $id)
            ->firstOrFail();

        $favorite->delete();

        return response()->json([
            'success' => true,
            'message' => 'Property removed from favorites'
        ]);
    }
}