<?php


namespace App\Http\Repositories;


interface Repository
{
    public function getAll();
    public function findById($id);
    public function store($data);
    public function update($data, $object);
    public function destroy($object);
}
