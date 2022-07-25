<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Post extends Model
{
    use HasFactory;

    /**
     * @var string aponta para a tabela que será referenciada
     */
    protected $table = 'posts';

    /**
     * @var string[] indica os nomes dos atributos
     */
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'published',

    ];

    /**
     * @var string[] indica o tipo dos atributos
     */
    protected $casts = [
        'published' => 'boolean'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
