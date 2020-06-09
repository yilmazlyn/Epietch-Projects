<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/film' => [[['_route' => 'film', '_controller' => 'App\\Controller\\FilmController::index'], null, null, null, false, false, null]],
        '/addToFavorites' => [[['_route' => 'addFavorites', '_controller' => 'App\\Controller\\FilmController::addToFavorites'], null, ['POST' => 0], null, false, false, null]],
        '/films/lists' => [[['_route' => 'myList', '_controller' => 'App\\Controller\\FilmController::getMyLists'], null, null, null, false, false, null]],
        '/createList' => [[['_route' => 'createList', '_controller' => 'App\\Controller\\FilmController::createNewList'], null, null, null, false, false, null]],
        '/deleteList' => [[['_route' => 'deleteList', '_controller' => 'App\\Controller\\FilmController::deleteList'], null, null, null, false, false, null]],
        '/admin/mostFavorite' => [[['_route' => 'mostFavorite', '_controller' => 'App\\Controller\\FilmController::mostPopolarFilmsAdmin'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::accueil'], null, null, null, false, false, null]],
        '/searchFilm' => [[['_route' => 'searchFilms', '_controller' => 'App\\Controller\\HomeController::filmsBySearch'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/deleteUser' => [[['_route' => 'deleteUser', '_controller' => 'App\\Controller\\UserController::deleteUser'], null, ['POST' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'amdin', '_controller' => 'App\\Controller\\UserController::adminPanel'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::getUsers'], null, null, null, false, false, null]],
        '/usersAdmin' => [[['_route' => 'usersAdmin', '_controller' => 'App\\Controller\\UserController::getUsersForAdmin'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/add(?'
                    .'|List/([^/]++)/([^/]++)/([^/]++)(*:207)'
                    .'|ToList/([^/]++)/([^/]++)(*:239)'
                .')'
                .'|/edit(?'
                    .'|List/([^/]++)(*:269)'
                    .'|Profile(?'
                        .'|/([^/]++)(*:296)'
                        .'|Admin/([^/]++)(*:318)'
                    .')'
                .')'
                .'|/list/([^/]++)(*:342)'
                .'|/film(?'
                    .'|/([^/]++)(*:367)'
                    .'|s/favorite/([^/]++)(*:394)'
                .')'
                .'|/home/([^/]++)(?'
                    .'|(*:420)'
                    .'|/(?'
                        .'|([^/]++)(*:440)'
                        .'|year/([^/]++)(*:461)'
                    .')'
                .')'
                .'|/saveUser(?'
                    .'|/([^/]++)(*:492)'
                    .'|Admin/([^/]++)(*:514)'
                .')'
                .'|/deleteUserAccount/([^/]++)(*:550)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'addList', '_controller' => 'App\\Controller\\FilmController::addList'], ['ln', 'ld', 'idF'], null, null, false, true, null]],
        239 => [[['_route' => 'addToList', '_controller' => 'App\\Controller\\FilmController::addToList'], ['idL', 'idF'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'editList', '_controller' => 'App\\Controller\\FilmController::editList'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'editProfileUser', '_controller' => 'App\\Controller\\UserController::editProfileUser'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'editProfileAdmin', '_controller' => 'App\\Controller\\UserController::editProfileAdmin'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'listFilms', '_controller' => 'App\\Controller\\FilmController::getFilmsInList'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'getFilm', '_controller' => 'App\\Controller\\FilmController::getFilm'], ['idF'], null, null, false, true, null]],
        394 => [[['_route' => 'userFavoriteFilms', '_controller' => 'App\\Controller\\FilmController::getFavoriteFilms'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomeController::pageHome'], ['page'], null, null, false, true, null]],
        440 => [[['_route' => 'home_page_genre', '_controller' => 'App\\Controller\\HomeController::pageHomeByGenre'], ['page', 'genre'], null, null, false, true, null]],
        461 => [[['_route' => 'home_page_date', '_controller' => 'App\\Controller\\HomeController::pageHomeByDate'], ['page', 'date'], null, null, false, true, null]],
        492 => [[['_route' => 'editProfile', '_controller' => 'App\\Controller\\UserController::saveProfileUser'], ['id'], ['POST' => 0], null, false, true, null]],
        514 => [[['_route' => 'saveProfileAdmin', '_controller' => 'App\\Controller\\UserController::saveProfileAdmin'], ['id'], ['POST' => 0], null, false, true, null]],
        550 => [
            [['_route' => 'deleteUserAccount', '_controller' => 'App\\Controller\\UserController::deleteUserAccount'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
