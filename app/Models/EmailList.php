<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmailList extends Model
{
    public function subscribers(): HasMany
    {
        return $this->hasMany(Subscriber::class);
    }
}
