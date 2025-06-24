<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChecklistItem extends Model
{
    use HasFactory;
    protected $fillable = ['checklist_id', 'content', 'is_done'];

    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }
}
