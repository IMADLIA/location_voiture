<?php

// app/Http/Controllers/ClientController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client');
    }

    public function voituresDisponibles()
    {
        // Logique pour récupérer les voitures disponibles depuis la base de données
        // Puis retourner la vue avec les données
        return view('voitures_disponibles');
    }

    // Ajoutez des méthodes similaires pour les autres fonctionnalités de votre page client, comme le personnel, les voitures demandées, etc.
}
