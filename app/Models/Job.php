<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title','position','description','salary','vacancy','start_date','end_date','image','availability','category_id','location_id','industry_id','company_id'];

    public function category():BelongsTo
    {
      return $this->belongsTo(Category::class); 
    }
    public function location():BelongsTo
    {
      return $this->belongsTo(Location::class); 
    }
    public function industry():BelongsTo
    {
      return $this->belongsTo(Industry::class); 
    }
    public function company():BelongsTo
    {
      return $this->belongsTo(Company::class); 
    }

    public function applicant():HasMany
    {
      return $this->hasMany(Applicant::class); 
    }
}
