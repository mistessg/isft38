<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\FormularioAdmin;
use App\Models\Turno;
use App\Models\Horario;


class AdminController extends Controller
{
    public function index(){
        return view('frontend.admin-form.admin');
    }

