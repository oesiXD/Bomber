<?php

namespace App\Widgets;

use App\Galeria;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Widgets\BaseDimmer;
use Auth;
use App\User;

class GaleriaP extends BaseDimmer
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

       $count = Galeria::where('estado','!=','aprobado')->count();
            $string = 'Galerias';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-polaroid',
            'title'  => "{$count} {$string} por Aprobar ",
            'text'   => __('tiene :count :string en estado de aprobacion por un cargo superior', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('ver galerias'),
                'link' => route('voyager.galeria.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }else{

        if($user->role_id == 2){

            $count = Galeria::where('estado','!=','aprobado')->count();
                 $string = 'Galerias';

             return view('voyager::dimmer', array_merge($this->config, [
                 'icon'   => 'voyager-thumb-tack',
                 'title'  => " ",
                 'text'   => ' ',
                 'button' => [
                    'text' => __('Galerias'),
                    'link' => route('voyager.galeria.index'),
                ],
                 'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
             ]));
            }else{



        $count = Galeria::where('user_id',Auth::id())->where('estado','!=','aprobado')->count();
        $string = 'Galerias';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-polaroid',
            'title'  => "{$count} {$string} en estado de aprobacion",
            'text'   => __('tiene :count :string en estado de aprobacion por un cargo superior', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('ver galerias'),
                'link' => route('voyager.galeria.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}

}
    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', new Galeria);
    }
}
