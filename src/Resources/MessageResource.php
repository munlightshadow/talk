<?php

namespace Nahid\Talk\Resources;

class MessageResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'profile' => $this->profile
        ];
    }
}
