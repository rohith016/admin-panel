<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // set a relationship as a children
    public function submenu()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // set a relationship as a parent
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }


}
