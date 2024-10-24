<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtén el usuario autenticado
        $user = Auth::user();

        // Obtén todas las tareas relacionadas con el usuario
        $tasks = $user->tasks; // Cambia 'Task' por 'tasks'

        // Pasa las tareas a la vista
        return view('dashboard', compact('tasks'));
    }
}
