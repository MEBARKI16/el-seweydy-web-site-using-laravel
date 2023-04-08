<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    //use HasFactory;
    public function offerJobs(){
        return $this->belongsToMany(OfferJob::class, 'job_offer_desc');
    }
}