<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;
use Jcc\LaravelVote\Vote;


class Topic extends Model
{
    use Taggable;
    use Vote;
}
