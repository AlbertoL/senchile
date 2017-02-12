<?php
/**
 * Reglas de validacion para formularios
 */
$config = array(
       
        /**
         * add_formulario
         * */
        'add_prueba'
        => array(
            
            array('field' => 'num_golpe','label' => 'N° Golpe','rules' => 'required|integer|trim|max_length[5]'),
            array('field' => 'nombre_equipo','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[30]'),
            array('field' => 'area','label' => 'Area','rules' => 'required|is_string|trim|max_length[30]'),
            array('field' => 'fecha','label' => 'Fecha','rules' => 'required|is_string|trim|max_length[30]'),
            
            
        ),
   
        
   
   //éste es el final      
);