<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'english_name',
        'title',
        'description',
        'background_colour',
    ];
    
    // Define the relationship
    public function eventImage()
    {
        return $this->hasOne(EventImage::class);
    }
}
