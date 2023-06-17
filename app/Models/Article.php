<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const TABLE = 'articles';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public function id (): string
    {
        return (string) $this->id;
    }

    public function title (): string
    {
        return (string) $this->title;
    }

    public function body (): string
    {
        return (string) $this->body;
    }

    public function slug(): string
    {
        return (string) $this->slug;
    }


}
