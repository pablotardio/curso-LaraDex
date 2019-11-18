<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Trainer;
use LaraDex\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
   // public function index()
    {
       $request->user()->authorizeRoles(['admin']);
        $trainers=Trainer::all();
        return view('trainers.index',compact('trainers'));
        //return "estoy dentro de trainerCT :D";
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerRequest $request)
    {
       
        // $validatedData=$request->validate([

        //     'name'=>'required|max: 10',
        //     'avatar'=>'required|image',
        //     'slug'=>'required'
        // ]);
        if($request->hasFile('avatarFile'))
        {
            $file=$request->file('avatarFile');
            $name=time().$file->getClientOriginalName();
             $file->move(public_path().'/images/',$name);
        }
        $trainer=new Trainer();
        $trainer->name=$request->input('trainerName');
        $trainer->avatar=$name;
        $trainer->description=$request->input('descTrainer');
        $trainer->slug=$request->input('slugTrainer');
    
        $trainer->save();
        return redirect()->route('trainers.index');
       // return 'Saved succesfully'; solo retorna mensaje
       // return $request->all();
      // return $request->input('trainerName');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    //public function show($id)
    {
       // $trainer=Trainer::find($id);
       //con slug SIN implicit binding
     //  $trainer=Trainer::where('slug','=',$slug)->firstOrFail();
        return view('trainers.show',compact('trainer') );
       // return "debo retornar el resource con id: ".$id;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
   // public function edit($id)
    {
        return view('trainers.edit',compact('trainer'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    //public function update(Request $request, $id)
    {
        //
     //  $trainer->fill($request->all()->except('avatar')); NO SIRVE EN CASOS QUE TUS VARIABLES TENGAN OTROS NOMBRES DIFERENTES A
     // LAS FILLABLE
     if($request->hasFile('avatarFile'))
     {
         $file=$request->file('avatarFile');
         $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/images/',$name);
          $trainer->avatar=$name;
     }
            $trainer->name=$request->input('trainerName');
           
            $trainer->slug=$request->input('slugTrainer');
            $trainer->description=$request->input('descTrainer');
            //$trainer->fill(['avatar' => $trainer->file('avatarFile')]);
            //$trainer->fill(['descripcion' => $request->input('descTrainer')]);
            $trainer->save();
            return redirect()->route('trainers.show',[$trainer])->with('status','Se Actualizo el entrenador
            correctamente');
           // return $trainer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
  //  public function destroy($id)
    {
        //para borrar la imagen
        $file_path=public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
        $trainer->delete();
        return redirect()->route('trainers.index');
        //return "borrando a ".$trainer->name ;
        //
    }
}
