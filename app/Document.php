<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Elasticquent\ElasticquentTrait;

class Document extends Model
{
    use ElasticquentTrait;

    protected $table = 'documents';

    protected $fillable = ['title', 'description', 'user_id', 'author_id'];

    public function author() {

    	return $this->hasOne('App\Author');

    }


}
