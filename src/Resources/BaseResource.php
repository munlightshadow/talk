<?php

namespace Nahid\Talk\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BaseResource extends JsonResource
{
    public function __get($key)
    {
        return isset($this->resource) ? $this->resource[$key] : abort(404);
    }
}