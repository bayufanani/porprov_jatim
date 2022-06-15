<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * kelas album
 * @property int $id
 * @property string $nama
 * @property string $anu_gitu hunting
 */
class Album extends Model
{
    protected $table = 'album';

    public function getJsonFilesAttribute()
    {
        return json_decode($this->files);
    }
}
