<?php

use  App \ Http \ Controllers \ CitaController ;
use  App \ Http \ Controllers \ EspecialidadController ;
use  App \ Http \ Controllers \ MedicoController ;
use  App \ Http \ Controllers \ MedicamentoController ;
usar  App \ Http \ Controllers \ PacienteController ;
use  Iluminar \ Soporte \ Fachadas \ Ruta ;

Ruta :: obtener ( '/' , función () {
    volver vista( 'bienvenido' );
});

Ruta :: obtener ( '/tablero' , función () {
    vista de retorno ( 'tablero' );
})-> middleware ([ 'auth' ])-> nombre ( 'dashboard' );

requiere __DIR__. '/autorización.php' ;


Ruta :: middleware ([ 'auth' ])-> grupo ( función () {
    Ruta :: recursos ([
        //No pongo medicos como route resource porque voy a añadirle middlewares diferentes
        //'medicos' => MedicoController::clase,
        'citas' => CitaController ::clase,
        'especialidades' => EspecialidadController ::clase,
        'pacientes' => PacienteController ::clase,
    ]);
    Route :: get ( '/pacientes-hoy' , [ PacienteController ::class, 'pacientesHoy' ]);
    //Todos los usuarios pueden listar y ver el detalle de un medico
    Route :: get ( '/medicos' , [ MedicoController ::class, 'index' ])-> name ( 'medicos.index' );
    Route :: get ( '/medicos/{medico}' , [ MedicoController ::class, 'show' ])-> name ( 'medicos.show' );
});

//Solo los administradores pueden crear y borrar médicos, así como trabajar con el CRUD de Medicamentos
Ruta :: middleware ([ 'auth' , 'tipo_usuario:3' ])-> grupo ( función () {
    Route :: get ( '/medicos/create' , [ MedicoController ::class, 'create' ])-> name ( 'medicos.create' );
    Route :: post ( '/medicos' , [ MedicoController ::class, 'store' ])-> name ( 'medicos.store' );
    Route :: delete ( '/medicos/{medico}' , [ MedicoController ::class, 'destroy' ])-> name ( 'medicos.destroy' );
    Ruta :: recursos ([
        'medicamentos' => MedicamentoController ::clase,
    ]);
});

//Tanto los médicos como los administradores pueden editar el médico y trabajar con los medicamentos de las citas
Ruta :: middleware ([ 'auth' , 'tipo_usuario:1,3' ])-> grupo ( función () {
    Route :: get ( '/medicos/{medico}/edit' , [ MedicoController ::class, 'edit' ])-> name ( 'medicos.edit' );
    Route :: put ( '/medicos/{medico}' , [ MedicoController ::class, 'update' ])-> name ( 'medicos.update' );
    //Dos rutas que tienen además un middleware con una Policy para hilar fino
    Route :: post ( '/citas/{cita}/attach-medicamento' , [ CitaController ::class, 'attach_medicamento' ])
        -> nombre ( 'citas.adjuntarMedicamento' )
        -> middleware ( 'can:attach_medicamento,cita' );
    Route :: delete ( '/citas/{cita}/detach-medicamento/{medicamento}' , [ CitaController ::class, 'detach_medicamento' ])
        -> nombre ( 'citas.detachMedicamento' )
        -> middleware ( 'can:detach_medicamento,cita' );
});