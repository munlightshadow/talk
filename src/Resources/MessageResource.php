<?php

namespace Nahid\Talk\Resources;

class MessageResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'message' => $this->message,
            'files' => FileResource::collection($this->files),
            'voices' => VoiceResource::collection($this->voices),
            'user_id' => $this->user_id,
            'conversation_id' => $this->conversation_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
