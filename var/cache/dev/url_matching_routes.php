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
        '/certificat' => [[['_route' => 'app_certificat_index', '_controller' => 'App\\Controller\\CertificatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/certificat/new' => [[['_route' => 'app_certificat_new', '_controller' => 'App\\Controller\\CertificatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/certificat/back/certificat' => [[['_route' => 'app_certificatb_index', '_controller' => 'App\\Controller\\CertificatController::indexb'], null, ['GET' => 0], null, false, false, null]],
        '/certificat/back/new' => [[['_route' => 'app_certificatb_new', '_controller' => 'App\\Controller\\CertificatController::newb'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\ChatController::chat'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cours/new' => [[['_route' => 'app_cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours/afficherblog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\CoursController::affichier'], null, ['GET' => 0], null, false, false, null]],
        '/cours/back' => [[['_route' => 'app_coursb_index', '_controller' => 'App\\Controller\\CoursController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/cours/back/new' => [[['_route' => 'app_coursb_new', '_controller' => 'App\\Controller\\CoursController::newBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/feed' => [[['_route' => 'app_feed', '_controller' => 'App\\Controller\\FeedController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\HomeController::services'], null, null, null, false, false, null]],
        '/pricing' => [[['_route' => 'app_pricing', '_controller' => 'App\\Controller\\HomeController::pricing'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\HomeController::team'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'app_portfolio', '_controller' => 'App\\Controller\\HomeController::portfolio'], null, null, null, false, false, null]],
        '/test-ai' => [[['_route' => 'test_ai', '_controller' => 'App\\Controller\\OpenAITestController::test'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/question/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quiz' => [[['_route' => 'app_quiz_index', '_controller' => 'App\\Controller\\QuizController::index'], null, ['GET' => 0], null, false, false, null]],
        '/quiz/new' => [[['_route' => 'app_quiz_new', '_controller' => 'App\\Controller\\QuizController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quiz/back/quiz' => [[['_route' => 'app_quizb_index', '_controller' => 'App\\Controller\\QuizController::indexb'], null, ['GET' => 0], null, false, false, null]],
        '/quiz/back/new' => [[['_route' => 'app_quizb_new', '_controller' => 'App\\Controller\\QuizController::newb'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|ertificat(?'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:234)'
                                .'|/edit(*:247)'
                            .')'
                            .'|certificat/(?'
                                .'|(\\d+)(*:275)'
                                .'|([^/]++)/jouer(*:297)'
                            .')'
                            .'|back/([^/]++)(?'
                                .'|/edit(*:327)'
                                .'|(*:335)'
                            .')'
                        .')'
                        .'|back/([^/]++)(*:358)'
                    .')'
                    .'|ours/(?'
                        .'|(\\d+)(?'
                            .'|(*:383)'
                        .')'
                        .'|(\\d+)/edit(*:402)'
                        .'|cours/([^/]++)/blogdetails(*:436)'
                        .'|back/(?'
                            .'|(\\d+)(*:457)'
                            .'|(\\d+)/edit(*:475)'
                            .'|(\\d+)(*:488)'
                        .')'
                    .')'
                .')'
                .'|/qu(?'
                    .'|estion/([^/]++)(?'
                        .'|(*:523)'
                        .'|/edit(*:536)'
                        .'|(*:544)'
                    .')'
                    .'|iz/(?'
                        .'|quiz/([^/]++)/result(*:579)'
                        .'|([^/]++)(*:595)'
                        .'|(\\d+)(*:608)'
                        .'|([^/]++)/edit(*:629)'
                        .'|quiz/([^/]++)/play(*:655)'
                        .'|back/(?'
                            .'|quiz/([^/]++)/result(*:691)'
                            .'|([^/]++)(*:707)'
                            .'|(\\d+)(*:720)'
                            .'|([^/]++)/edit(*:741)'
                            .'|quiz/([^/]++)/play(*:767)'
                        .')'
                    .')'
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
        234 => [[['_route' => 'app_certificat_show', '_controller' => 'App\\Controller\\CertificatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        247 => [[['_route' => 'app_certificat_edit', '_controller' => 'App\\Controller\\CertificatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [[['_route' => 'app_certificat_delete', '_controller' => 'App\\Controller\\CertificatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        297 => [[['_route' => 'app_certificat_jouer', '_controller' => 'App\\Controller\\CertificatController::jouer'], ['id'], null, null, false, false, null]],
        327 => [[['_route' => 'app_certificatb_edit', '_controller' => 'App\\Controller\\CertificatController::editb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [[['_route' => 'app_certificatb_delete', '_controller' => 'App\\Controller\\CertificatController::deleteb'], ['id'], ['POST' => 0], null, false, true, null]],
        358 => [[['_route' => 'app_certificatb_show', '_controller' => 'App\\Controller\\CertificatController::showb'], ['id'], ['GET' => 0], null, false, true, null]],
        383 => [
            [['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null],
        ],
        402 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        436 => [[['_route' => 'app_cours_blogdetails', '_controller' => 'App\\Controller\\CoursController::details'], ['id'], null, null, false, false, null]],
        457 => [[['_route' => 'app_coursb_show', '_controller' => 'App\\Controller\\CoursController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        475 => [[['_route' => 'app_coursb_edit', '_controller' => 'App\\Controller\\CoursController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        488 => [[['_route' => 'app_coursb_delete', '_controller' => 'App\\Controller\\CoursController::deleteBack'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        523 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        544 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        579 => [[['_route' => 'app_quiz_result', '_controller' => 'App\\Controller\\QuizController::result'], ['id'], ['GET' => 0], null, false, false, null]],
        595 => [[['_route' => 'app_quiz_show', '_controller' => 'App\\Controller\\QuizController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        608 => [[['_route' => 'app_quiz_delete', '_controller' => 'App\\Controller\\QuizController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        629 => [[['_route' => 'app_quiz_edit', '_controller' => 'App\\Controller\\QuizController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        655 => [[['_route' => 'app_quiz_play', '_controller' => 'App\\Controller\\QuizController::playAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        691 => [[['_route' => 'app_quizb_result', '_controller' => 'App\\Controller\\QuizController::resultb'], ['id'], ['GET' => 0], null, false, false, null]],
        707 => [[['_route' => 'app_quizb_show', '_controller' => 'App\\Controller\\QuizController::showb'], ['id'], ['GET' => 0], null, false, true, null]],
        720 => [[['_route' => 'app_quizb_delete', '_controller' => 'App\\Controller\\QuizController::deleteb'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        741 => [[['_route' => 'app_quizb_edit', '_controller' => 'App\\Controller\\QuizController::editb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        767 => [
            [['_route' => 'app_quizb_play', '_controller' => 'App\\Controller\\QuizController::playActionb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
