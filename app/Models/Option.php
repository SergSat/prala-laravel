<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    /**
     * The attributes that should be appended to the model's array form.
     *
     * @var array
     */
    protected $appends = ['votesPercentage'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'poll_id'
    ];

    use HasFactory;

    /**
     * Get the poll that owns the option.
     */
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    /**
     * Get the votes for the option.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * Get the votes percentage for the option.
     */
    public function getVotesPercentageAttribute()
    {
        // Предполагается, что $poll является родительской моделью для опции
        $totalVotes = $this->poll->votes->count();
        $optionVotes = $this->votes->count();
        if ($totalVotes > 0) {
            return (int) round(($optionVotes / $totalVotes) * 100, 2);
        }

        return 0;
    }
}
