<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ppdb;

class PpdbController extends Controller
{
    
    function post(Request $request)
    {
        $ppdb = new Ppdb;
        $ppdb->nama = $request->nama;
        $ppdb->nisn = $request->nisn;
        $ppdb->nis = $request->nis;
        $ppdb->kelamin = $request->kelamin;
        $ppdb->agama = $request->agama;
        $ppdb->ttl = $request->ttl;
        $ppdb->asalSekolah = $request->asalSekolah;
        $ppdb->alamat = $request->alamat;
        $ppdb->namaAyah = $request->namaAyah;
        $ppdb->namaIbu = $request->namaIbu;
        $ppdb->pekerjaanAyah = $request->pekerjaanAyah;
        $ppdb->pekerjaanIbu = $request->pekerjaanIbu;
        $ppdb->nomorTlp = $request->nomorTlp;
        $ppdb->userId = $request->userId;
        $ppdb->noRegister = $request->noRegister;

        $ppdb->save();
        return response()->json(
            [
                "Message" => " Success",
                "data" =>$ppdb
            ]
            );
    }

    function get()
    {
        $data = Ppdb::all();
        return response()->json(
            [
                "Message" => "Success",
                "data" => $data
            ]
            );
    }

    function getById($id)
    {
        $data = Pppdb::where('id',$id)->get();
        return response()->json(
            [
                "Message" => "Success",
                "data" => $data
            ]
            );
    }


    function put($id, Request $request)
    {   
        $ppdb = Ppdb::where('id',$id)->first();
        if($ppdb){
        $ppdb->nama = $request->nama ?$request->nama:$ppdb->nama;
        $ppdb->nisn = $request->nisn?$request->nisn:$ppdb->nisn;
        $ppdb->nis = $request->nis? $request->nis:$ppdb->nis;
        $ppdb->kelamin = $request->kelamin?$request->kelamin:$ppdb->kelamin;
        $ppdb->agama = $request->agama?$request->agama:$ppdb->agama ;
        $ppdb->ttl = $request->ttl?$request->ttl:$ppdb->ttl;
        $ppdb->asalSekolah = $request->asalSekolah?$request->asalSekolah:$ppdb->asalSekolah;
        $ppdb->alamat = $request->alamat?$request->alamat:$ppdb->alamat;
        $ppdb->namaAyah = $request->namaAyah?$request->namaAyah:$ppdb->namaAyah;
        $ppdb->namaIbu = $request->namaIbu?$request->namaIbu:$ppdb->namaIbu;
        $ppdb->pekerjaanAyah = $request->pekerjaanAyah?$request->pekerjaanAyah:$ppdb->pekerjaanAyah;
        $ppdb->pekerjaanIbu = $request->pekerjaanIbu?$request->pekerjaanIbu:$ppdb->pekerjaanIbu;
        $ppdb->nomorTlp = $request->nomorTlp?$request->nomorTlp:$ppdb->nomorTlp;

        $ppdb->save();
        return response()->json(
            [
                "Message" => "PUT Methode Success".$id,
                "data" => $ppdb
            ]
            );

        }else{
            return response()->json(
                [
                    "Message" => "PUT Methode with".$id ."not found"
                ]
                );
        }
       
    }

    function delete($id)
    {
        $ppdb = Ppdb::where('id',$id)->first();
        if($ppdb){
            $ppdb->delete();
            return response()->json(
                [
                    "Message" => "delete".$id ."berhasil"
                ]
                );
        }else{
            return response()->json(
                [
                    "Message" => "delete".$id ."tidak ditemukan"
                ]
                );
        }
    }
}
