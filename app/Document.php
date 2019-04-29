<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    const CREATED_AT = 'DOCTIMECREATE';
    const UPDATED_AT = 'DOCTIMEUPDATE';


    protected $table='DOCUMENT';
    protected $primaryKey='DOCID';

    protected $fillable = [
        'USERID', 'DOCNAME', 'DOCLINK','DOCVIEWS','DOCCATALOG',
    ];
}
