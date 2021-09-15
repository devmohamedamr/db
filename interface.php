<?php


interface dbSTD{
    public function insert($table,$data);
    public function edit($table,$data);
    public function select($table,$column);
    public function delete($table);
}