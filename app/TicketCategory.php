<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    protected $table = "ticket_category";
    protected $primaryKey = "category_id";

    protected $fillable = [
        'category_id',
        'name',
        
        ];

}
