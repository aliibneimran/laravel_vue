<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','posts','description','status'];
    public function company():HasMany
    {
      return $this->hasMany(Company::class); 
    }
}
