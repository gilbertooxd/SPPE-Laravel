<?php
/**
 * Created by PhpStorm.
 * User: jammerson.muniz
 * Date: 27/02/14
 * Time: 21:26
 */

class PlanosEnsino extends Eloquent {

    protected $table = 'planos_ensino';
    public $timestamps = false;
	protected $fillable = array('*');

    public function turma() {
    	return $this->belongsTo('Turma');
    }

    public function conteudos() {
    	return $this->hasMany('Conteudos');
    }
}