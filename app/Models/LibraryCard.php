<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LibraryCard extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['card_id','user_id', 'name', 'issued_date', 'expiry_date','created_by', 'updated_by'];

    //one user have one unique card_id
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //created_by
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    //updated_by
    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    //one user have different book details 
    public function issuedBooksDetails()
    {
        return $this->hasMany(IssuedBooksDetail::class, 'card_id');
    }
}
