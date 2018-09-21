<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class SimpleModel extends Model
{
    //public $timestamps = false; //false significa no usar fechas de creacion y modificacion en la tabla. default=true.
    //protected $table = 'mitabla';//Usar si la tabla tiene un nombre diferente al del modelo

    /**
     * @param string $success_msg mensaje de exito.
     * @return bool true=ok, false=error
     */
    public function store($success_msg = 'Todo Correcto.')
    {
        try {
            $this->save();
            \FlashHelper::success($success_msg);
            return true;
        } catch (\Exception $e) {
            \FlashHelper::warning('No se pudo guardar. Inténtelo más tarde o contacte con el administrador.');
            return false;
        }
    }
}