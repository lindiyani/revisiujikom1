<?php

namespace App\Http\Controllers;

use App\jurusan;
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use File;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            $ekstrakulikuler = ekstrakulikuler::all();
            return Datatables::of($ekstrakulikuler)
                ->addColumn('action',function($ekstrakulikuler){
                    return view('datatable._action',[
                        'model' => $ekstrakulikuler,
                        'form_url' => route('ekstrakulikuler.destroy',$ekstrakulikuler->id),
                        'edit_url' => route('ekstrakulikuler.edit',$ekstrakulikuler->id),
                        'confirm_message' => 'Yakin Mau Menghapus ' . $ekstrakulikuler->nama . '?'
                    ]);
                })->make(true);
        }

        $html = $htmlBuilder
        ->addColumn(['data' => 'nama' ,'name' => 'nama','title' => 'Nama'])
        ->addColumn(['data' => 'action' ,'name' => 'action','title' => '','orderable'=>false,'searchable'=>false]);
        return view('ekstrakulikuler.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ekstrakulikuler.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, ['nama' => 'required|unique:ekstrakulikuler']);
        $ekstrakulikuler = new ekstrakulikuler;
        $ekstrakulikuler->nama = $request->nama;
        if ($request->hasFile('foto')) {
            //mengambil file yang diupload
            $uploaded_foto = $request->file('foto');

            //mengambil extension file
            $extension = $uploaded_foto->getClientOriginalExtension();

            //membuat nama file random berikut extension
            $filename = md5(time()). '.' . $extension;

            //menyimpan foto ke folder public/img
            $destinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_foto->move($destinationPath,$filename);

            //mengisi field foto di profil dengan filename yang baru dibuat
            $ekstrakulikuler->foto = $filename;
           
        }
         $ekstrakulikuler->save();
        Session::flash("flash_notification", [
            "level"=>"info",
            "message"=>"Berhasil menyimpan $ekstrakulikuler->nama "
            ]);
        return redirect()->route('ekstrakulikuler.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(ekstrakulikuler $ekstrakulikuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $ekstrakulikuler = ekstrakulikuler::find($id);
        return view('ekstrakulikuler.edit')->with(compact('ekstrakulikuler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
           $this->validate($request,['nama' => 'required|unique:jurusans,nama,' . $id]);
        $ekstrakulikuler = ekstrakulikuler::find($id);
        $ekstrakulikuler->update($request->only('nama'));
        Session::flash("flash_notification",[
            "level"=>"info",
            "message"=>"Berhasil menyimpan $ekstrakulikuler->nama"
            ]);

        return redirect()->route('ekstrakulikuler.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         jurusan::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"info",
            "message"=>"ekstrakulikuler Berhasil Dihapus"
            ]);
        return redirect()->route('ekstrakulikuler.index');
    }
}
