<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Event extends Model
{
    protected $fillable = [
        'title',
        'city_id',
        'address',
        'date_start',
        'date_finish',
        'age',
        'type_id',
        'description',
        'image',
        'location',
        'status',
        'organisation_id',
        'published_at'
    ];

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function type()
    {
        return $this->belongsTo(EventType::class);
    }

    public function getPreviewDesc()
    {
        $str = str_replace("</p>", "<br>", $this->description);
        $str = str_replace("</a>", " ", $str);
        $str = str_replace("</li>", "<br>", $str);
        $str = str_replace("&nbsp;", ' ', strip_tags($str, '<br>'));
        $str = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $str);
        $str = strip_tags($str);
        $out = strlen($str) > 120 ? mb_substr($str,0,120,'utf-8')."..." : $str;

        return $out.'</p>';
    }

    public function getSeoMeta()
    {

        $str = strip_tags($this->description);
        $out = strlen($str) > 120 ? mb_substr($str,0,120,'utf-8')."..." : $str;

        return $out;
    }

    protected $dates = ['published_at', 'date_start', 'date_finish'];

    public function getPublishedAtAttribute($date)
    {
        return new Date($date);
    }

    public function getDateStartAttribute($date)
    {
        return new Date($date);
    }

    public function getDateFinishAttribute($date)
    {
        return new Date($date);
    }

    public function getLocationAttribute($location)
    {
        $location = trim($location, "()");
        $explode_location = array_map('floatval' ,explode(',', $location));

        return $explode_location;
    }

    public function getTimeBeforeArchiving () {
        return (\Carbon\Carbon::parse($this->date_start)->addDay()->startOfDay());
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    protected $casts = [
        'published_at' => 'datetime',
        'date_start' => 'datetime',
        'date_finish' => 'datetime',
    ];
}