<?php

namespace App\Services;

use App\Models\Movie;

class MovieQuery
{
    public function status(int $status, int $user = null)
    {
        if (!in_array($status, [1, 2, 3])) {
            return 'Invalid status';
        }

        $query = Movie::select('id', 'title', 'poster_link', 'movie_status_id')
            ->where('movie_status_id', $status);

        if ($status === 1 && !$user) {
            $query->with('cinema');
        } elseif ($status === 1 && $user === 1) {
            $query->with('cinema', 'cinema.timeSlot');
        }

        return $query->get();
    }
}
