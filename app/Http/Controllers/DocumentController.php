<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 4/29/2019
 * Time: 9:39 AM
 */
namespace  App\Http\Controllers;

use App\Catalog;
use App\Document;

class DocumentController extends Controller
{
    public function GetAllCatalog(){
        $catalogs=Catalog::all();
        return $catalogs;
    }

    public function GetDocumentOfCatalog($idCatalog){
        $documents=Document::where('DOCCATALOG',$idCatalog)->get(['DOCID','DOCNAME']);
            return $documents;
    }

    public function GetDocument($idDocument){
        $documents=Document::where('DOCID',$idDocument)->get();
        return $documents;

    }

    public function GetUploadDocumentView(){
        $docCatalogs=Catalog::all();
        return view('upload_document',compact('docCatalogs'));
    }

    public function UploadDocument($request){

    }
}