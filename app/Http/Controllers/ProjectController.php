<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // latest() ordena de forma descendente los proyectos
        // paginate() pagina los resultados, por defecto de a 15

        return view('projects.index', ['projects' => Project::latest('date')->paginate()]);
    }

    /**
     * Show the form for creating a new resource project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProjectRequest $request)
    {
        // dd($request->all());
        Project::create([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'description' => $request->get('description'),
            'date' => $request->get('project_date')
        ]);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource for project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project) //se recibe el objeto project y ya no el id (model se inyecta directo)
    {
        // se retorna directamente el objeto project ya que Laravel se encarga de buscar por el id del objeto pero en este caso queremos buscar por el campo url para que sea más amigable a la hora de leer en la barra de url
        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
