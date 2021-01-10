<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        return view('app');
    }

    /**
     * @return array|false|string
     */
    public function instaFeed()
    {
        try {
            if (app()->environment('production')) {
                return Http::get('https://graph.instagram.com/me/media', [
                    'access_token' => config('services.instagram.token'),
                    'fields' => \request('fields', 'media_url,media_type,caption,permalink'),
                ])->json();
            } else {
                return File::get(base_path('tests/Mocks/insta-feed.json'));
            }
        } catch (RequestException $e) {
            //TODO: Log this when it happens!
            return [];
        }
    }
}
