<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StorePostController extends Controller
{
    /**
     * Store a new post in database.
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {

        $input = $request->all();
        Admin::create($input);
    }
}
