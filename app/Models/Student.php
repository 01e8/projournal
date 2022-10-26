<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'note', 'start_date', 'end_date', 'first_name', 'last_name', 'patronymic', 'group_id', 'email', 'phone', 'parent_phone'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class)->withDefault([
            'name' => 'Без группы',
        ]);
    }
}
