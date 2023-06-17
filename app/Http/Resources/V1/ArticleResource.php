<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public static $wrap = 'articles';

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'articles',
            'id' => $this->id(),
            'attributes' => [
                'title' => $this->title(),
                'slug' => $this->slug(),
            ],

        ];
    }

    public function with($request){
        return [
            'status' => 'success',
        ];
    }

    public function withResponse($request, $response){
        
        $response->header('Accept', "application/json");
        $response->header('Version', "1.0.0");

    }
}
