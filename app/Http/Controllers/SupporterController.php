<?php

namespace App\Http\Controllers;

use App\Models\Supporter;
use Illuminate\Http\Request;

class SupporterController extends Controller
{
    /**
     * Store supporter from frontend form
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email',
                'phone' => '',
                'zip' => '',
                'optin' => 'boolean',
                'public' => 'boolean',
                'configuration_id' => 'required|exists:configurations,id',
                'locale' => 'required',
                'customFields' => 'array',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
        $customFields = $validated['customFields'];
        unset($validated['customFields']);

        if (!isset($validated['optin'])) {
            $validated['optin'] = false;
        }
        if (!isset($validated['public'])) {
            $validated['public'] = false;
        }
        $supporter = Supporter::updateOrCreate(
            ['email' => $validated['email']],
            $validated
        );
        $supporter->setCustomFields($customFields, true);
        if ($supporter) {
            return response()->json([
                "status" => "success",
                "code" => 200,
                "message" => __("controllers.supporter.store.success", ["name" => $supporter->firstname]),
                "supporter" => $supporter
            ]);
        } else {
            return response()->json(['message' => 'Supporter creation failed'], 500);
        }
    }
}
