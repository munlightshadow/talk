<?php

namespace Nahid\Talk\Resources;

class VoiceResource extends BaseResource
{
    public function toArray($request)
    {
        return [
            'url' => $this->s3name,
            'name' => $this->name
        ];
    }
}
