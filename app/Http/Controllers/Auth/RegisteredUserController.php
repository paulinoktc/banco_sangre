<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register-hospital');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        dd($user);
        event(new Registered($user));

        Auth::login($user);

        if($request->is('/hospital/create/*')){
            $request->validate([
                'rfc' => 'required|string',
                'certificado' => 'required|mimes:pdf,jpeg,png,jpg',
                'nombre' => 'required',
                'latitud' =>'required',
                'longitud'=>'required',
                'ciudad_id'=>'required',
            ]);

            $now = new \DateTime();
            $fecha = $now->format('Ymd-His');
            $nombre = $request->get('nombre');
            $certificado = $request->file('certificado');
            $archivo = "";

            if($certificado){
                $extension = $certificado->getClientOriginalExtension();
                $archivo = "certificado-".$nombre."-".$fecha.".".$extension;
                Storage::disk('local')->put($archivo, File::get($certificado));
            }

            $hospital = Hospital::create([
                'rfc'=>$request->get('rfc'),
                'certificado'=>$archivo,
                'nombre'=>$request->get('nombre'),
                'latitud'=>$request->get('latitud'),
                'longitud'=>$request->get('longitud'),
                'ciudad_id'=>$request->get('ciudad_id'),
                'user_id'=>$user->get('id')
            ]);
        }
        

        return redirect(RouteServiceProvider::HOME);
    }
}
