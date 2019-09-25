<?php

namespace App\Widgets;


use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use App\User;
use App\Noticia;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Widgets\BaseDimmer;
use Auth;

class Pendiente extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $user = DB::table('users')->select('role_id')->where('id',Auth::id())->first();
        if($user->role_id == 5 || $user->role_id == 4){
            //contar noticias
            $count = Noticia::where('estado','!=','aprobado')->count();
            $string = 'Noticias';

            return view('voyager::dimmer', array_merge($this->config, [
                'icon'   => 'voyager-thumb-tack',
                'title'  => "{$count} {$string} por revisar",
                'text'   => __('tiene :count :string por revisar estado de aprobacion', ['count' => $count, 'string' => Str::lower($string)]),
                'button' => [
                    'text' => __('ver noticias'),
                    'link' => route('voyager.noticias.index'),
                ],
                'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
            ]));
        }else{

            if($user->role_id == 2){

                $count = Noticia::where('estado','!=','aprobado')->count();
                     $string = 'Noticia';

                 return view('voyager::dimmer', array_merge($this->config, [
                     'icon'   => 'voyager-thumb-tack',
                     'title'  => " ",
                     'text'   => ' ',
                     'button' => [
                        'text' => __('Noticias'),
                        'link' => route('voyager.noticias.index'),
                    ],
                     'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
                 ]));
                }else{


            $count = Noticia::where('user_id',Auth::id())->where('estado','!=','aprobado')->count();
            $string = 'Noticias';

            return view('voyager::dimmer', array_merge($this->config, [
                'icon'   => 'voyager-thumb-tack',
                'title'  => "{$count} {$string} en estado de aprobacion",
                'text'   => __('tiene :count :string en estado de aprobacion por un cargo superior', ['count' => $count, 'string' => Str::lower($string)]),
                'button' => [
                    'text' => __('ver noticias'),
                    'link' => route('voyager.noticias.index'),
                ],
                'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
            ]));

        }  }

    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', new Noticia);
    }
}
