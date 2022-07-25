<?php

namespace App\View\Components;

use App\Models\Cita;
use Illuminate\View\Component;

class CitaFormBody extends Component
{
    private $cita;
    /**
     * Create a new component instance.
     * @param \App\Models\Cita $tarea
     * @return void
     */
    public function __construct( $cita=null )
    {
        if(is_null( $cita ))
        {
            $cita = Cita::make([]);
        }
        $this->cita = $cita;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params =
        [
            'cita' =>$this->cita,
            'opcion' =>Cita::Opcion,

        ]; 
        return view('components.cita-form-body', $params);
    }
}
