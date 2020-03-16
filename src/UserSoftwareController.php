<?php

namespace Tompec\UserSoftware;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserSoftwareController extends Controller
{
    public function store(Request $request)
    {
        return UserSoftware::firstOrCreate([
            'user_id' => auth()->user()->id,
            'hash' => sha1(json_encode($request->data)),
        ], [
            'data' => $request->data,
        ]);
    }
}
