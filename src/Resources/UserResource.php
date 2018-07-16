<?php

namespace Nahid\Talk\Resources;

class UserResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'is_online' => $this->isOnline(),
            'avatar' => $this->profile ? $this->profile->avatar ?? '' : ''
        ];
    }
}
