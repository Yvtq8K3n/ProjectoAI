<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','print_evals','printf_counts',
        'admin','blocked','ativated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function typeToStr()
    {
        switch ($this->type) {
            case 0:
                return 'Administrador';
            case 1:
                return 'Funcionario';
        }

        return 'Unknown';
    }

    public function isAdmin()
    {
        return (int) $this->type === 0;
    }

    public function isFuncionario()
    {
        return (int) $this->type === 1;
    }
}
