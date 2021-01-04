<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        return view('app');
    }

    /**
     * @return array
     */
    public function instaFeed(): array
    {
        return Http::get('https://graph.instagram.com/me/media', [
            'access_token' => config('services.instagram.token'),
            'fields' => \request('fields', 'media_url,media_type,caption,permalink'),
        ])->json();
    }
}
