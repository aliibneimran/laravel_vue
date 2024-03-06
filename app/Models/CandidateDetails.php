<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CandidateDetails extends Model
{
    use HasFactory;
    protected $fillable = ['contact','address','image','bio','candidate_id'];
    public function candidate():BelongsTo
    {
      return $this->belongsTo(Candidate::class); 
    }
}