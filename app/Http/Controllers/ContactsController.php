<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Request\ContactRequest;
use App\Http\Requests\ContactsStoreRequest;
use App\Models\Request\PartnerRequest;

class ContactsController extends Controller
{
    public function store(ContactsStoreRequest $request)
    {
        try {
            $data = $request->validated();

            if ($data['form_type'] === 'contacts') {
                ContactRequest::create($data);
            } else {
                PartnerRequest::create($data);
            }

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error("Ошибка при отправке формы: " . $e->getMessage());

            return response()->json(['success' => false, 'message' => $e->getMessage()], 422);
        }
    }
}
