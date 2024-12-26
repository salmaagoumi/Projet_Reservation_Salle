<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/apropos' => [[['_route' => 'app_apropos', '_controller' => 'App\\Controller\\AproposController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/enseignant' => [[['_route' => 'app_enseignant_index', '_controller' => 'App\\Controller\\EnseignantController::index'], null, ['GET' => 0], null, false, false, null]],
        '/enseignant/new' => [[['_route' => 'app_enseignant_new', '_controller' => 'App\\Controller\\EnseignantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/filiere' => [[['_route' => 'app_filiere_index', '_controller' => 'App\\Controller\\FiliereController::index'], null, ['GET' => 0], null, false, false, null]],
        '/filiere/new' => [[['_route' => 'app_filiere_new', '_controller' => 'App\\Controller\\FiliereController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/matiere' => [[['_route' => 'app_matiere_index', '_controller' => 'App\\Controller\\MatiereController::index'], null, ['GET' => 0], null, false, false, null]],
        '/matiere/new' => [[['_route' => 'app_matiere_new', '_controller' => 'App\\Controller\\MatiereController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promos' => [[['_route' => 'app_promos_index', '_controller' => 'App\\Controller\\PromosController::index'], null, ['GET' => 0], null, false, false, null]],
        '/promos/new' => [[['_route' => 'app_promos_new', '_controller' => 'App\\Controller\\PromosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/reservations' => [[['_route' => 'reservation_fetch', '_controller' => 'App\\Controller\\ReservationController::fetch'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/enseignant/([^/]++)(?'
                    .'|(*:65)'
                    .'|/edit(*:77)'
                    .'|(*:84)'
                .')'
                .'|/filiere/([^/]++)(?'
                    .'|(*:112)'
                    .'|/edit(*:125)'
                    .'|(*:133)'
                .')'
                .'|/matiere/([^/]++)(?'
                    .'|(*:162)'
                    .'|/edit(*:175)'
                    .'|(*:183)'
                .')'
                .'|/promos/([^/]++)(?'
                    .'|(*:211)'
                    .'|/edit(*:224)'
                    .'|(*:232)'
                .')'
                .'|/reservation/(?'
                    .'|([^/]++)(?'
                        .'|(*:268)'
                        .'|/edit(*:281)'
                        .'|(*:289)'
                    .')'
                    .'|c(?'
                        .'|reate(*:307)'
                        .'|alendar(*:322)'
                    .')'
                    .'|save(*:335)'
                .')'
                .'|/salle/([^/]++)(?'
                    .'|(*:362)'
                    .'|/edit(*:375)'
                    .'|(*:383)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'app_enseignant_show', '_controller' => 'App\\Controller\\EnseignantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_enseignant_edit', '_controller' => 'App\\Controller\\EnseignantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'app_enseignant_delete', '_controller' => 'App\\Controller\\EnseignantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        112 => [[['_route' => 'app_filiere_show', '_controller' => 'App\\Controller\\FiliereController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_filiere_edit', '_controller' => 'App\\Controller\\FiliereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        133 => [[['_route' => 'app_filiere_delete', '_controller' => 'App\\Controller\\FiliereController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        162 => [[['_route' => 'app_matiere_show', '_controller' => 'App\\Controller\\MatiereController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        175 => [[['_route' => 'app_matiere_edit', '_controller' => 'App\\Controller\\MatiereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        183 => [[['_route' => 'app_matiere_delete', '_controller' => 'App\\Controller\\MatiereController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        211 => [[['_route' => 'app_promos_show', '_controller' => 'App\\Controller\\PromosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_promos_edit', '_controller' => 'App\\Controller\\PromosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'app_promos_delete', '_controller' => 'App\\Controller\\PromosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        268 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        289 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        307 => [[['_route' => 'reservation_create', '_controller' => 'App\\Controller\\ReservationController::create'], [], null, null, false, false, null]],
        322 => [[['_route' => 'reservation_calendar', '_controller' => 'App\\Controller\\ReservationController::calendar'], [], null, null, false, false, null]],
        335 => [[['_route' => 'reservation_save', '_controller' => 'App\\Controller\\ReservationController::save'], [], null, null, false, false, null]],
        362 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        383 => [
            [['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
