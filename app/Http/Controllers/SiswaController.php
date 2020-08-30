<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    
    function post(Request $request)
    {
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->kelamin = $request->kelamin;
        $siswa->agama = $request->agama;
        $siswa->ttl = $request->ttl;
        $siswa->asalSekolah = $request->asalSekolah;
        $siswa->alamat = $request->alamat;
        $siswa->namaAyah = $request->namaAyah;
        $siswa->namaIbu = $request->namaIbu;
        $siswa->pekerjaanAyah = $request->pekerjaanAyah;
        $siswa->pekerjaanIbu = $request->pekerjaanIbu;
        $siswa->nomorTlp = $request->nomorTlp;
        $siswa->userId = $request->userId;
        $siswa->noRegister = $request->noRegister;
        $siswa->status= $request->status;

        $siswa->save();
        return response()->json(
            [
                "Message" => " Success",
                "data" =>$siswa
            ]
            );
    }

    function get()
    {
        $data = Siswa::all();
        return response()->json(
            [
                "Message" => "Success",
                "data" => $data
            ]
            );
    }

    function getById($id)
    {
        $data = Siswa::where('id',$id)->get();
        return response()->json(
            [
                "Message" => "Success",
                "data" => $data
            ]
            );
    }


    function put($id, Request $request)
    {   
        $siswa = Siswa::where('id',$id)->first();
        if($siswa){
        $siswa->nama = $request->nama ?$request->nama:$siswa->nama;
        $siswa->nisn = $request->nisn?$request->nisn:$siswa->nisn;
        $siswa->nis = $request->nis? $request->nis:$siswa->nis;
        $siswa->kelamin = $request->kelamin?$request->kelamin:$siswa->kelamin;
        $siswa->agama = $request->agama?$request->agama:$siswa->agama ;
        $siswa->ttl = $request->ttl?$request->ttl:$siswa->ttl;
        $siswa->asalSekolah = $request->asalSekolah?$request->asalSekolah:$siswa->asalSekolah;
        $siswa->alamat = $request->alamat?$request->alamat:$siswa->alamat;
        $siswa->namaAyah = $request->namaAyah?$request->namaAyah:$siswa->namaAyah;
        $siswa->namaIbu = $request->namaIbu?$request->namaIbu:$siswa->namaIbu;
        $siswa->pekerjaanAyah = $request->pekerjaanAyah?$request->pekerjaanAyah:$siswa->pekerjaanAyah;
        $siswa->pekerjaanIbu = $request->pekerjaanIbu?$request->pekerjaanIbu:$siswa->pekerjaanIbu;
        $siswa->nomorTlp = $request->nomorTlp?$request->nomorTlp:$siswa->nomorTlp;

        $siswa->save();
        return response()->json(
            [
                "Message" => "PUT Methode Success".$id,
                "data" => $siswa
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
        $siswa = Siswa::where('id',$id)->first();
        if($siswa){
            $siswa->delete();
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
