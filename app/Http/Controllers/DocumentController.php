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
use Illuminate\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


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
        //$documents=Document::where('DOCID',$idDocument)->get();
        $documents=DB::select("SELECT DOCUMENT.*, users.name FROM DOCUMENT, users WHERE DOCUMENT.USERID=users.id");
        return view('details_document',compact('documents'));

    }

    public function GetUploadDocumentView(){
        $docCatalogs=Catalog::all();
        return view('upload_document',compact('docCatalogs'));
    }

    public function UploadDocument(Http\Request $request){

        //check valid syntax-----------------------------------------------------------------------
        $rules =[
            'docName' => ['required'],
            'docLink' => ['required'],
            'docCatalog' => ['required'],
        ];

        $message =[
            'docName.required' => 'Tên tài liệu là trường bắt buộc',
            'docLink.required' => 'liên kết không được để trống',
            'docCatalog.required' => 'Danh mục không hợp lệ',
        ];

        $vali= Validator::make($request->all(),$rules,$message);
        if($vali->fails()){
            $docCatalogs =Catalog::all();
            return view('upload_document',compact('docCatalogs'))->withErrors($vali);
            // return $vali->errors() ;
        }
        else
        {
            //valid
            //check permission-----------------------------------------------------------------------
            if(Auth::check())
            {
                $doc=new Document();
                $doc->USERID=Auth::user()->id;
                $doc->DOCNAME=$request->docName;
                $doc->DOCLINK=$request->docLink;
                $doc->DOCVIEWS=0;
                $doc->DOCCATALOG=$request->docCatalog;

                if($doc->save())
                return details;
                redirect('home');
            }
            else
                return redirect('login');
        }
    }
}