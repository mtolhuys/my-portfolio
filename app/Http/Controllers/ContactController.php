<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): \Illuminate\Http\JsonResponse
    {
        /*
          Add mail functionality here.
        */

        return response()->json($request->all(), 200);
    }
}
