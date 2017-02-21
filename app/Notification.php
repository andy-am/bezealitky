<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Notification extends Model
{

    protected $fillable = ["user_id", "type", "sent_at", "actually_sent_at", "progress", "is_read", "created_at", "updated_at"];


}
