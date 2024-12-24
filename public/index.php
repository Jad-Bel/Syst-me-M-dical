<?php 

include "/laragon/www/systemeMedical/public/bin/server/connect.php";
require "/laragon/www/systemeMedical/public/bin/server/session_check.php";
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systeme Medical</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <section id="rendez-vous" class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Gestion des Rendez-vous</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-4">Prendre un rendez-vous</h3>
            <form class="space-y-4" action="" method="POST">
                <div>
                    <label for="nom_pat" class="block mb-1">Nom du patient</label>
                    <input type="text" id="nom_pat" name="nom_pat" class="w-full p-2 border rounded" required>
                </div>    

                <div>
                    <label for="date_rdv" class="block mb-1">Date du rendez-vous</label>
                    <input type="date" id="date_rdv" name="date_rdv" class="w-full p-2 border rounded" required>
                </div>
                <div>
                    <label for="medecin" class="block mb-1">Médecin</label>
                    <select id="medecin" name="medecin" class="w-full p-2 border rounded" required>
                        <option value="">Choisir un médecin</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Prendre Rendez-vous</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md mt-6">
            <h3 class="text-xl font-semibold mb-4">Annuler un rendez-vous</h3>
            <form class="space-y-4">
                <div>
                    <label for="id_rdv" class="block mb-1">Selectioner votre rendez-vous a annuler</label>
                    <select type="number" id="id_rdv" name="id_rdv" class="w-full p-2 border rounded" required>

                    </select>
                </div>
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Annuler Rendez-vous</button>
            </form>
        </div>
    </section>
</body>
</html>