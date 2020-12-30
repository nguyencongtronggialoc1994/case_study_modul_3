<?php


namespace App\Http\Repositories;


use App\Models\Product;

abstract class EloquentRepository implements Repository
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    /**
     * @param mixed $model
     */
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store($request)
    {
        $obj = $this->model;
        $obj->fill($request->all());
        $imageName = 'uploads/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $obj->image = $imageName;
        $obj->save();
    }

    public function update($request, $id)
    {
        $obj = $this->model->findOrFail($id);
        $obj->fill($request->all());
        $imageName = 'uploads/' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $obj->image = $imageName;
        $obj->save();
    }

    public function destroy($id)
    {
        $this->model->findOrFail($id);
        $this->model->delete();
    }
}
