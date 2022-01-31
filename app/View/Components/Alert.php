<?php

namespace App\View\Components;

use Illuminate\View\Component;

//ESTOS SON COMPONENTES DE CLASE
class Alert extends Component
{
    // toda propiedad definida en esta clase va  a ser accedida por esa vista
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // le pasamos un color por defecto para qu no vote error cuando no se le asigna color
    public function __construct($color = "warning")
    {
        //recibir el color pasado
        $this->color = $color;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
    
     public function prueba()
     {
         # code...
        //  color lo declaré arriba
        if($this->color== "danger"){
            return "Esta es un alerta de peligro";
        }
     }
}
