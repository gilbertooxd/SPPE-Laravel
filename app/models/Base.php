<?php
/**
 * Created by PhpStorm.
 * User: jammerson.muniz
 * Date: 27/02/14
 * Time: 21:22
 */

Class Base extends Eloquent {

    protected $table   = 'base';
    public $timestamps = false;
    protected $fillable= array('nome_base', 'modulo', 'duracao', 'semana', 'curso_id');

    public function curso()
    {
    	return $this->belongsTo('Curso');
    }

    public function turma()
    {
    	return $this->hasMany('Turma');
    }
}