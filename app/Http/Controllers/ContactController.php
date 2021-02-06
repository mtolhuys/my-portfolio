<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): JsonResponse
    {
        Mail::to(config('mail.to'))->send(
            new ContactMail(Contact::create($request->all()))
        );

        return response()->json($request->all(), 200);
    }
}
