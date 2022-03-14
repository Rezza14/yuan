<?php

namespace App\Http\Controllers;

use App\Models\PokeModel;
use Illuminate\Http\Request;

class PokeController extends Controller
{
    private PokeModel $pokemodel;

    public function __construct(){
        $this->pokemodel = new PokeModel();
    }

    public function poke()
    {
        $data = [
            'poke' => $this->pokemodel->get(),
        ];
        return view('data_siswa',  $data);
    }

    public function detail($id)
    {
        if (!$this->pokemodel->find($id)) {
            abort(404);
        }
        $data = [
            'poke' => $this->pokemodel->find($id),
        ];
        return view('detail',  $data);
    }

    public function add()
    {
        return view('add');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa_tbl,nis|min:5|max:11',
            'nama' => 'required',
            'hobi' => 'required',
            'umur' => 'required',
            'alamat' => 'required',

        ],[
            'nis.required' => 'NIS harus diisi !!',
            'nis.unique' => 'NIS ini sudah ada !!',
            'nis.min' => 'Min 5 karakter !!',
            'nis.max' => 'Max 11 karakter !!',
            'nama.required' => 'Nama harus diisi !!',
            'hobi.required' => 'Hobi harus diisi !!',
            'umur.required' => 'Umur harus diisi !!',
            'alamat.required' => 'Alamat harus diisi !!'

        ]);

        $data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'hobi' => $request->hobi,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ];

        $this->pokemodel->create($data);
        return redirect()->route('poke')->with('success', 'Data berhasil disimpan !!');
    }

    public function edit($id)
    {
        if (!$this->pokemodel->find($id)) {
            abort(404);
        }
        $data = [
            'poke' => $this->pokemodel->find($id),
        ];
        return view ('edit', $data);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|min:5|max:11',
            'nama' => 'required',
            'hobi' => 'required',
            'umur' => 'required',
            'alamat' => 'required',

        ],[
            'nis.required' => 'NIS harus diisi !!',
            'nis.unique' => 'NIS ini sudah ada !!',
            'nis.min' => 'Min 5 karakter !!',
            'nis.max' => 'Max 11 karakter !!',
            'nama.required' => 'Nama harus diisi !!',
            'hobi.required' => 'Hobi harus diisi !!',
            'umur.required' => 'Umur harus diisi !!',
            'alamat.required' => 'Alamat harus diisi !!'

        ]);

        $data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'hobi' => $request->hobi,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ];

        $pokemodel = $this->pokemodel->find($id);
        $pokemodel->update($data);
        return redirect()->route('poke')->with('success', 'Data berhasil diupdate !!');
    }

    public function delete($id)
    {
        if (!$this->pokemodel->find($id)) {
            abort(404);
        }
        $this->pokemodel->find($id)->delete();
        return redirect()->route('poke')->with('success', 'Data berhasil dihapus !!');
    }


}
