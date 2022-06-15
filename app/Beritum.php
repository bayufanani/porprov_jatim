<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Beritum extends Model
{
    public function save(array $options = [])
    {
        if (!isset($this->penulis)) {
            $this->penulis = \Auth::user()->id;
        }

        // check slug
        while (1) {
            $slugsCount = Beritum::where('slug', $this->slug)->count();

            if ($slugsCount < 1) {
                break;
            }

            $slugArray = explode('-', $this->slug);
            if (is_numeric(end($slugArray))) {
                $lastSlug = intval(end($slugArray));
                $lastSlug++;
                $slugArray[count($slugArray) - 1] = $lastSlug;
            } else {
                $slugArray[] = '1';
            }

            $this->slug = join('-', $slugArray);
        }

        parent::save();
    }

    public function getJsonFotoAttribute()
    {
        return json_decode($this->foto);
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'penulis');
    }

    public function cleanHeading()
    {
        $string = htmlentities($this->heading, null, 'utf-8');
        $content = str_replace("&nbsp;", "", $string);
        return html_entity_decode($content);
    }
}
