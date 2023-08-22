<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User;
        //Verificação para usuario dupicados.
        $dados = [
            'name'=>"Duda",
            'email'=>"duda@mail.com",
            'password'=>bcrypt("123456"),
        ];
        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        }else{// se cair no else cria um usuário novo
            User::create($dados);
            echo "Usuario Criado!";
        }
       
    }
}
