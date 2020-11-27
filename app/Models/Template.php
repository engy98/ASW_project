<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $fillable =['name' , 'arabic_content','english_content'];



    public function getFinalContent(User $user){
        return "Content";
    }
}
