<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\LetsTalkFormStoreRequest;
use App\Models\Request\LetsTalkRequest;

class FormController extends Controller
{
    public function index()
    {
        $directions = \App\Models\Direction::where('show_on_site', 1)->orderBy('order_column')->get();
        return view('form', compact('directions'));
    }

    public function store(LetsTalkFormStoreRequest $request)
    {
        try {
            $data = $request->validated();

            if (isset($data['contact_in']) && is_array($data['contact_in'])) {
                $data['contact_in'] = implode(',', $data['contact_in']);
            }

            if ($request->hasFile('files')) {
                $filePaths = [];
                foreach ($request->file('files') as $file) {
                    $path = $file->store('lets_talk_requests', 'public');
                    $filePaths[] = $path;
                }
                $data['files'] = json_encode($filePaths);
            } else {
                $data['files'] = json_encode([]);
            }

            LetsTalkRequest::create($data);

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error("Ошибка при отправке формы: " . $e->getMessage());

            return response()->json(['success' => false, 'message' => $e->getMessage()], 422);
        }
    }
}
