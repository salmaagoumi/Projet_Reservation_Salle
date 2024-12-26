<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_apropos' => [[], ['_controller' => 'App\\Controller\\AproposController::index'], [], [['text', '/apropos']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'app_enseignant_index' => [[], ['_controller' => 'App\\Controller\\EnseignantController::index'], [], [['text', '/enseignant']], [], [], []],
    'app_enseignant_new' => [[], ['_controller' => 'App\\Controller\\EnseignantController::new'], [], [['text', '/enseignant/new']], [], [], []],
    'app_enseignant_show' => [['id'], ['_controller' => 'App\\Controller\\EnseignantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enseignant']], [], [], []],
    'app_enseignant_edit' => [['id'], ['_controller' => 'App\\Controller\\EnseignantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/enseignant']], [], [], []],
    'app_enseignant_delete' => [['id'], ['_controller' => 'App\\Controller\\EnseignantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enseignant']], [], [], []],
    'app_filiere_index' => [[], ['_controller' => 'App\\Controller\\FiliereController::index'], [], [['text', '/filiere']], [], [], []],
    'app_filiere_new' => [[], ['_controller' => 'App\\Controller\\FiliereController::new'], [], [['text', '/filiere/new']], [], [], []],
    'app_filiere_show' => [['id'], ['_controller' => 'App\\Controller\\FiliereController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/filiere']], [], [], []],
    'app_filiere_edit' => [['id'], ['_controller' => 'App\\Controller\\FiliereController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/filiere']], [], [], []],
    'app_filiere_delete' => [['id'], ['_controller' => 'App\\Controller\\FiliereController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/filiere']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_matiere_index' => [[], ['_controller' => 'App\\Controller\\MatiereController::index'], [], [['text', '/matiere']], [], [], []],
    'app_matiere_new' => [[], ['_controller' => 'App\\Controller\\MatiereController::new'], [], [['text', '/matiere/new']], [], [], []],
    'app_matiere_show' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere']], [], [], []],
    'app_matiere_edit' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/matiere']], [], [], []],
    'app_matiere_delete' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere']], [], [], []],
    'app_promos_index' => [[], ['_controller' => 'App\\Controller\\PromosController::index'], [], [['text', '/promos']], [], [], []],
    'app_promos_new' => [[], ['_controller' => 'App\\Controller\\PromosController::new'], [], [['text', '/promos/new']], [], [], []],
    'app_promos_show' => [['id'], ['_controller' => 'App\\Controller\\PromosController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promos']], [], [], []],
    'app_promos_edit' => [['id'], ['_controller' => 'App\\Controller\\PromosController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/promos']], [], [], []],
    'app_promos_delete' => [['id'], ['_controller' => 'App\\Controller\\PromosController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promos']], [], [], []],
    'app_reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], [], []],
    'app_reservation_new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], [], []],
    'app_reservation_show' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_reservation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_reservation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'app_salle_index' => [[], ['_controller' => 'App\\Controller\\SalleController::index'], [], [['text', '/salle']], [], [], []],
    'app_salle_new' => [[], ['_controller' => 'App\\Controller\\SalleController::new'], [], [['text', '/salle/new']], [], [], []],
    'app_salle_show' => [['id'], ['_controller' => 'App\\Controller\\SalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'app_salle_edit' => [['id'], ['_controller' => 'App\\Controller\\SalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'app_salle_delete' => [['id'], ['_controller' => 'App\\Controller\\SalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'reservation_create' => [[], ['_controller' => 'App\\Controller\\ReservationController::create'], [], [['text', '/reservation/create']], [], [], []],
    'reservation_save' => [[], ['_controller' => 'App\\Controller\\ReservationController::save'], [], [['text', '/reservation/save']], [], [], []],
    'reservation_calendar' => [[], ['_controller' => 'App\\Controller\\ReservationController::calendar'], [], [['text', '/reservation/calendar']], [], [], []],
    'reservation_fetch' => [[], ['_controller' => 'App\\Controller\\ReservationController::fetch'], [], [['text', '/api/reservations']], [], [], []],
    'App\Controller\AproposController::index' => [[], ['_controller' => 'App\\Controller\\AproposController::index'], [], [['text', '/apropos']], [], [], []],
    'App\Controller\ContactController::index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'App\Controller\EnseignantController::index' => [[], ['_controller' => 'App\\Controller\\EnseignantController::index'], [], [['text', '/enseignant']], [], [], []],
    'App\Controller\EnseignantController::new' => [[], ['_controller' => 'App\\Controller\\EnseignantController::new'], [], [['text', '/enseignant/new']], [], [], []],
    'App\Controller\EnseignantController::show' => [['id'], ['_controller' => 'App\\Controller\\EnseignantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enseignant']], [], [], []],
    'App\Controller\EnseignantController::edit' => [['id'], ['_controller' => 'App\\Controller\\EnseignantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/enseignant']], [], [], []],
    'App\Controller\EnseignantController::delete' => [['id'], ['_controller' => 'App\\Controller\\EnseignantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/enseignant']], [], [], []],
    'App\Controller\FiliereController::index' => [[], ['_controller' => 'App\\Controller\\FiliereController::index'], [], [['text', '/filiere']], [], [], []],
    'App\Controller\FiliereController::new' => [[], ['_controller' => 'App\\Controller\\FiliereController::new'], [], [['text', '/filiere/new']], [], [], []],
    'App\Controller\FiliereController::show' => [['id'], ['_controller' => 'App\\Controller\\FiliereController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/filiere']], [], [], []],
    'App\Controller\FiliereController::edit' => [['id'], ['_controller' => 'App\\Controller\\FiliereController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/filiere']], [], [], []],
    'App\Controller\FiliereController::delete' => [['id'], ['_controller' => 'App\\Controller\\FiliereController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/filiere']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\MatiereController::index' => [[], ['_controller' => 'App\\Controller\\MatiereController::index'], [], [['text', '/matiere']], [], [], []],
    'App\Controller\MatiereController::new' => [[], ['_controller' => 'App\\Controller\\MatiereController::new'], [], [['text', '/matiere/new']], [], [], []],
    'App\Controller\MatiereController::show' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere']], [], [], []],
    'App\Controller\MatiereController::edit' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/matiere']], [], [], []],
    'App\Controller\MatiereController::delete' => [['id'], ['_controller' => 'App\\Controller\\MatiereController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/matiere']], [], [], []],
    'App\Controller\PromosController::index' => [[], ['_controller' => 'App\\Controller\\PromosController::index'], [], [['text', '/promos']], [], [], []],
    'App\Controller\PromosController::new' => [[], ['_controller' => 'App\\Controller\\PromosController::new'], [], [['text', '/promos/new']], [], [], []],
    'App\Controller\PromosController::show' => [['id'], ['_controller' => 'App\\Controller\\PromosController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promos']], [], [], []],
    'App\Controller\PromosController::edit' => [['id'], ['_controller' => 'App\\Controller\\PromosController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/promos']], [], [], []],
    'App\Controller\PromosController::delete' => [['id'], ['_controller' => 'App\\Controller\\PromosController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/promos']], [], [], []],
    'App\Controller\ReservationController::index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation']], [], [], []],
    'App\Controller\ReservationController::new' => [[], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['text', '/reservation/new']], [], [], []],
    'App\Controller\ReservationController::show' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'App\Controller\ReservationController::edit' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'App\Controller\ReservationController::delete' => [['id'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], [], []],
    'App\Controller\SalleController::index' => [[], ['_controller' => 'App\\Controller\\SalleController::index'], [], [['text', '/salle']], [], [], []],
    'App\Controller\SalleController::new' => [[], ['_controller' => 'App\\Controller\\SalleController::new'], [], [['text', '/salle/new']], [], [], []],
    'App\Controller\SalleController::show' => [['id'], ['_controller' => 'App\\Controller\\SalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'App\Controller\SalleController::edit' => [['id'], ['_controller' => 'App\\Controller\\SalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'App\Controller\SalleController::delete' => [['id'], ['_controller' => 'App\\Controller\\SalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
];
