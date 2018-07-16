<?php

namespace Nahid\Talk\Resources;

use Illuminate\Support\Facades\Auth;

class ThreadResource extends BaseResource
{
    public function toArray($request)
    {
        $receiver = ($this->userone == Auth::user()) ? $this->usertwo->id : $this->userone;
        $message = $this->messages->first();

        if (!isset($receiver) || !isset($message)) {
            abort(404, 'Receiver or message was not found');
        }

        return [
            'conversation_id' => $message->conversation_id,
            'message' => $message->message ?? '',
            'file' => $message->file ?? '',
            'voice' => $message->voice ?? '',
            'updated_at' => $message->updated_at,
            'user' => new UserResource($receiver),
            'is_seen' => true
        ];
    }
}
