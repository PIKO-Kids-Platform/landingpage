<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'title',
        'body',
        'img_url',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

    public function tags()
    {
    
        return $this->belongsToMany(
            Tag::class,
            'article_tags',
            'article_id',
            'tag_id');
    }
}
