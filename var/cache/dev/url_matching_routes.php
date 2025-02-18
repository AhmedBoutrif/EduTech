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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/base' => [[['_route' => 'app_base', '_controller' => 'App\\Controller\\BackControllerPhpController::index'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire/back' => [[['_route' => 'app_commentaireb_index', '_controller' => 'App\\Controller\\CommentaireController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire/back/new' => [[['_route' => 'app_commentaireb_new', '_controller' => 'App\\Controller\\CommentaireController::newBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cour' => [[['_route' => 'app_cour', '_controller' => 'App\\Controller\\CourController::index'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/feed' => [[['_route' => 'app_feed_index', '_controller' => 'App\\Controller\\FeedController::index'], null, ['GET' => 0], null, false, false, null]],
        '/feed/back' => [[['_route' => 'app_feedb_index', '_controller' => 'App\\Controller\\FeedController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/feed/new' => [[['_route' => 'app_feed_new', '_controller' => 'App\\Controller\\FeedController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feed/back/new' => [[['_route' => 'app_feedb_new', '_controller' => 'App\\Controller\\FeedController::newBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\HomeController::services'], null, null, null, false, false, null]],
        '/pricing' => [[['_route' => 'app_pricing', '_controller' => 'App\\Controller\\HomeController::pricing'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\HomeController::team'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'app_portfolio', '_controller' => 'App\\Controller\\HomeController::portfolio'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\HomeController::blog'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/userback' => [[['_route' => 'app_userback', '_controller' => 'App\\Controller\\UserControllerPhpController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/commentaire/(?'
                    .'|feed/([^/]++)/commentaire/new(*:247)'
                    .'|([^/]++)(*:263)'
                    .'|back/([^/]++)(*:284)'
                    .'|([^/]++)/edit(*:305)'
                    .'|back/([^/]++)/edit(*:331)'
                    .'|([^/]++)(*:347)'
                    .'|back/([^/]++)(*:368)'
                .')'
                .'|/feed/(?'
                    .'|([^/]++)(*:394)'
                    .'|back/([^/]++)(*:415)'
                    .'|([^/]++)/edit(*:436)'
                    .'|back/([^/]++)/edit(*:462)'
                    .'|([^/]++)(*:478)'
                    .'|back/([^/]++)(*:499)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        247 => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_commentaireb_show', '_controller' => 'App\\Controller\\CommentaireController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'app_commentaireb_edit', '_controller' => 'App\\Controller\\CommentaireController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        347 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        368 => [[['_route' => 'app_commentaireb_delete', '_controller' => 'App\\Controller\\CommentaireController::deleteBack'], ['id'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_feed_show', '_controller' => 'App\\Controller\\FeedController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        415 => [[['_route' => 'app_feedb_show', '_controller' => 'App\\Controller\\FeedController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        436 => [[['_route' => 'app_feed_edit', '_controller' => 'App\\Controller\\FeedController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        462 => [[['_route' => 'app_feedb_edit', '_controller' => 'App\\Controller\\FeedController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        478 => [[['_route' => 'app_feed_delete', '_controller' => 'App\\Controller\\FeedController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        499 => [
            [['_route' => 'app_feedb_delete', '_controller' => 'App\\Controller\\FeedController::deleteBack'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
