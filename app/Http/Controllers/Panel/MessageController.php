<?php

namespace App\Http\Controllers\Panel;

use App\Http\Resources\Message\Message as MessageResource;
use App\Http\Controllers\Controller;
use App\Models\Message\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * @note CRUD For Messages
     */

    // send unique to_user column
    public function index()
    {
        $message = auth()->user()->messages->unique('to_user');
        return (MessageResource::collection($message))
            ->additional([
                'message'=>[
                    ['پیام ها از سرور فرستاده شد']
                ]
            ]);
    }

   //
    public function show($id)
    {
        return response('show');
    }

    //
    public function store(Request $request)
    {
        return response('store');
    }

    //
    public function update(Request $request, $id)
    {
        $user = auth()->user()->messages()->create([
            'to_user' => $id,
            'message' => $request->message,
        ]);
        return response('update');
    }

    //
    public function destroy($id)
    {
        return response('delete');
    }
}
