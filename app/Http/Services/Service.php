<?php


namespace App\Http\Services;


interface Service
{
    public function getAll();
    public function findById($id);
    public function store($request);
    public function update($request, $id);
    public function destroy($id);
}
