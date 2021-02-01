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

   // id has user
    public function show($id)
    {
        // all auth messages to other user by id
        $auth = auth()->user()->messages->where('to_user', $id);
        // id just auth->user
        $to_my_message = Message::all()->where('user_id', $id)->where('to_user', auth()->id());
        // merge
        $merge = $auth->merge($to_my_message);
        return (MessageResource::collection($merge))
            ->additional([
//                'to_my_message' => $to_my_message,
                'message'=>[
                    ['پیام های با موفقیت ارسال شد.']
                ]
            ]);
    }

    //
    public function store(Request $request)
    {
        return response('store');
    }

    //
    public function update(Request $request, $id)
    {
        auth()->user()->messages()->create([
            'to_user' => $id,
            'message' => $request->message,
        ]);
        return response()->json(['message' => [['پیام شما ارسال شد']]]);
    }

    //
    public function destroy($id)
    {
        $message = Message::find($id);
        if ($message->user_id === auth()->id()) {
            $message->delete();
            return response()->json(['message' => [['پیام شما حذف شد']]]);
        }
        return response()->json(['message' => [['شما پیام این شخص را نمی توانید حذف کنید']]]);
    }
}
