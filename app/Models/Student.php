<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SearchController;
class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    public function getAllStudents(){
        $students = DB::table($this->table)->get();
        return $students;
    }
    public function create($data){
        $student = DB::table($this->table)->insert($data);
    }
    public function getOneStudent($id){
        $student = DB::table($this->table)->where('id', $id)->first();
        return $student;
    }
    public function updatestudent($id, $data){
        $student = DB::table($this->table)->where('id', $id)->update($data);
    }
    public function deleteStudent($id)
    {
        $student = DB::table($this->table)->where('id', $id)->delete();
    }

public function searchByName($name)
{
    $students = DB::table($this->table)->where('name', 'like', '%' . $name . '%')->get();
    return $students;
}
}
