<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tareas = Tarea::where('id', 'LIKE', "%$keyword%")
                ->orWhere('tarea', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->orWhere('estatus', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tareas = Tarea::latest()->paginate($perPage);
        }

        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'tarea' => 'required|min:5|max:20',
			'descripcion' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        Tarea::create($requestData);

        return redirect('tareas')->with('flash_message', 'Tarea added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tarea = Tarea::findOrFail($id);

        return view('tareas.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);

        return view('tareas.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'tarea' => 'required|min:5|max:20',
			'descripcion' => 'required|min:5'
		]);
        $requestData = $request->all();
        
        $tarea = Tarea::findOrFail($id);
        $tarea->update($requestData);

        return redirect('tareas')->with('flash_message', 'Tarea updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Tarea::destroy($id);

        return redirect('tareas')->with('flash_message', 'Tarea deleted!');
    }
}
