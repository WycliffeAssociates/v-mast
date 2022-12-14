<?php


namespace App\Repositories\Source;


interface ISourceRepository
{
    public function create($data);

    public function get($id);

    public function getWith($relation);

    public function delete(&$self);

    public function save(&$self);

    public function upsertAll($sources);
}