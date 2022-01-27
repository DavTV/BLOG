<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\StoreCurso;
class CursoController extends Controller
{
    //pagina principal
    public function index()
    {
        # code...
        //en $curso tengo almacenado todos los cursos
        // $curso = Curso::all();

        //muestra por paginación, adicional el último registro aparece de promero
        $curso = Curso::orderBy('id', 'desc')->paginate();
        // se le pasa el nombre de la variable sin $ al compact paa pasar una variable ala vista
         return view('cursos.index',compact('curso'));
    } 
    //crear algo es
    public function create(){
        return view('cursos.create');
    }
    //para validar el formulario
                    //funciona igual qeu el reques pero ya valida con las opciones que pusimos en rule
    public function store(StoreCurso $request){
         //antes de guardar debemos validar si no lo manda a la vista otra vez
 

        // muestra todo el contenido
        // return $request->all();
        $curso = new Curso();
        $curso-> name = $request->name;
        $curso-> description = $request->description;
        $curso-> categoria = $request->categoria;
       

        //con esto lo mando a la base de datos save()
        $curso->save();
        //ingresa a esa direcci´n, estaá usando la ruta creada de show con el id
        return redirect()->route('cursos.show',$curso->id);
    }
    // para mostrar algo 
    public function show(Curso $curso)
    {
        # code...
        // recuperar curso por id
        // $curso = Curso::find($id);
        
        return view('cursos.show',compact('curso'));
    }
// me va a crear unainstancia curso con el id que viene, osea lo mismo deque find
    public function edit(Curso $curso){
       
        // return $curso;
        return view('cursos.edit',compact('curso'));
    }
     public function update(Request $request,Curso $curso){
        // return $request->all();vinovos en el input por lo nue
        // reemplazamos los datoss del objeto que 
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'categoria'=>'required',
        ]);
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return view('cursos.show',compact('curso'));
    }
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return view('cursos.show',compact('curso'));
    }
}
