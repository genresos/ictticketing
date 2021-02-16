<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketsComment extends Model
{
    protected $table = "tickets_comment";
    protected $primaryKey = "comment_id";

    protected $fillable =[
        'comment_id',
        'tickets_id',
        'comment_text',
        'user_id',
    ];
}
