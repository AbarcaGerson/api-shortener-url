<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AshAllenDesign\ShortURL\Classes\Builder;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    //


    public function store(Request $request)
    {
        $builder = app(Builder::class);
        $shortURLObject = $builder
            ->destinationUrl('https://laravel.com')
            ->singleUse()
            ->make();

        $shortURL = $shortURLObject->default_short_url;
        $keyLength = config('short-url.key_length');

        Log::info('Short URL: ' . $shortURL);
        Log::info('Key Length: ' . $keyLength);
        Log::info('Generated Key: ' . $shortURLObject->url_key);

        return response()->json([
            'short_url' => $shortURL,
            'key_length' => $keyLength,
            'url_key' => $shortURLObject->url_key
        ]);
    }
}
