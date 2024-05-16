<?php

use Illuminate\Support\Facades\Route;

Route::get('/Materiel/create',[MaterielController::class,'create'])->name('Materiel.create'); 
Route::get('/Materiel/index',[MaterielController::class, 
'AfficherListeMateriels'])->name('Materiel.index'); 
Route::delete('Materiel/{materiel}',[MaterielController::class, 
'supprimerMateriel'])->name('Materile.supprimer'); 
Route::post('/Materiel', [MaterielController::class, 'AjouterMateriel'])->name('Materiel.ajouter'); 
Route::get('/Employe/index',[EmployeController::class, 'AfficherListeEmployes'])->name('Employe.index'); 
Route::get('/Materiel/detail/{codeEmp}',[EmployeController::class, 
'consulterDetail'])->name('consulterDetail');