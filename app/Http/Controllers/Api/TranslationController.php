<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Translation;

class TranslationController extends Controller
{
    public function index(Request $request)
    {
        $query = Translation::with('tags');

        if ($request->has('tag')) {
            $query->whereHas('tags', fn ($q) => $q->where('name', $request->tag));
        }

        if ($request->has('key')) {
            $query->where('key', 'like', "%{$request->key}%");
        }

        if ($request->has('content')) {
            $query->where('content', 'like', "%{$request->content}%");
        }

        return response()->json($query->paginate(50));
    }

    public function export()
    {
        $translations = Translation::all()->groupBy('locale')->map(function ($group) {
            return $group->mapWithKeys(fn ($t) => [$t->key => $t->content]);
        });

        return response()->json($translations);
    }


}
