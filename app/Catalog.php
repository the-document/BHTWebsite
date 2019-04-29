<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table='CATALOGS';
    protected $primaryKey='CATALOGSID';
    public $incrementing=false;
}
