<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    public function article()
    {
        return $this->belongsToMany(Article::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
