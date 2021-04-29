<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construc()
    {
        // proteger con el middleware las rutas que no queremos que el usuario invitado utilice,
        // solamente queremos que puedan ver la lista de proyectos y sus detalles

        $this->middleware('auth')->except('index', 'show');
    }


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
        // se retorna una instancia de Project (vacío) para reutilizar la vista de create y edit, ya que la vista edit necesita tener $project para mostrar los datos ( old('item', $project) ---> si tiene item usa ese y sino usa $project)  y en create le enviamos vacío (old('item', $project) ---> como $project es null utilizará title)

        return view('projects.create',  ['project' => New Project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        Project::create([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'description' => $request->get('description'),
            'date' => $request->get('project_date')
        ]);

        return redirect()->route('projects.index')->with('status', 'Project created!');
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
     * Show the form for editing the specified resource project.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project) //se recibe el objeto project y ya no el id (model se inyecta directo)
    {
        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource project in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveProjectRequest $request, Project $project)
    {
       $project->update
       ([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'description' => $request->get('description'),
            'date' => $request->get('project_date')
       ]);

       return redirect()->route('projects.show', $project)->with('status', 'Project updated!');
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
