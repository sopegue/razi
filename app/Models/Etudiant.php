<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'FirstName',
         'LastName',
          'Email',
          'UserName',
          'PassWord'
          
           ];
           protected $table="_etudiant";
        
}
