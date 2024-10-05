<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => true,
    1 => 
    array (
      '/v1/password/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6wNLtsQFhBv93vi3',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/clients/web/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7tuGZ0Obs44FSk8u',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hLS2hWxCXpsh4816',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/clients/web/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JGPSCi7uAbIiia1N',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gt51GDBiapnUX4NE',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aujGWvoyy7B5fVyb',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8E1gRQ1gWVTDcJJ0',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::huSU8Tae5p6zQAv7',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'home-page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ycjMUSten1Prj17M',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login-page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVm8DlJ8OLz53lGY',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RE6rSQbs2TNXpkDx',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DvBswbh7shsj4wEu',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/unauthorized' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unauthorized-page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NeTvXEg587DDH7CV',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xknxvU0nQToJXazr',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/installment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dh21WKbE7TDxbGvw',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PhVhvOYPgBA2j58q',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2KNtr5DsmzKkcSDE',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4GqTpymYjJiHJQ56',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/payment-methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ngMJ0rsYMZIdF2a2',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oOreNg9z99yqJ14B',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/student' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6BnFTk6ytDyJpHeE',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B41DoVRD2zKiQD1Q',
          ),
          1 => 'apiato.test',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/docs/private' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'private_docs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/docs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'public_docs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/queries/explain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.queries.explain',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|(?i:apiato\\.test)\\.(?|/v1/(?|oauth/(?|tokens/([^/]++)(*:60)|clients/([^/]++)(?|(*:86))|personal\\-access\\-tokens/([^/]++)(*:127))|email/verify/([^/]++)/([^/]++)(*:166)|users/([^/]++)(?|/(?|roles(?|(*:203))|p(?|ermissions(?|(*:229))|assword(*:245)))|(*:255))|roles/([^/]++)(?|(*:281)|/permissions(?|(*:304)))|p(?|ermissions/([^/]++)(*:337)|ayment(?|/([^/]++)(?|(*:366))|\\-methods/([^/]++)(?|(*:396))))|installment/([^/]++)(?|(*:430))|student/([^/]++)(?|(*:458))))|(?:(?:[^./]*+\\.)++)(?|/_debugbar/c(?|lockwork/([^/]++)(*:523)|ache/([^/]++)(?:/([^/]++))?(*:558))))/?$}sDu',
    ),
    3 => 
    array (
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'user_id',
            1 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UddOZHb7aqq5tezY',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p43D8ePiVYZX0kHx',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FmHvqTaXVifc1CbD',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hspv1srgKOYB4Ceo',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ioh568XbIJSsEvCT',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jQ1HoUIJB226Mrr3',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l5eZ4zG9oPDd8bs2',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8ujDi4kSioLhpY1',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mO8MNoxjglUFCXat',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hjtViHzs3akVn8BI',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZhhFYFSkz3aKEqkF',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vCurUQrY9bkq5sAR',
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sidl6Qik0rCLIrrQ',
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9lwVdsQYVNWL8rSB',
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YI1ZZ3eEBSXOLTlB',
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cAGojOssqRn65509',
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jZitkFJyhmwu8Iwy',
          ),
          1 => 
          array (
            0 => 'role_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TPbDZovVnYQTTAPF',
          ),
          1 => 
          array (
            0 => 'permission_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kkZIFnA6aAzn9IgK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XfPB7FERLzfAWvIW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pt3OU5VskrWuIzP7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0GQDn6cyux6jlv5R',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XWitqw3fe3j0Gto8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kbNgP2zOXrRq8Mna',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bBZO8UhzrNJS0syA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CFumJEwHQjpxK4Ga',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K6gRww1BZLNJuKbJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vJTr941EknEGtFEa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E08zm55BrTJTxOdI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FcRBLqY4etTGrhN2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::6wNLtsQFhBv93vi3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/password/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\ForgotPasswordController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\ForgotPasswordController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6wNLtsQFhBv93vi3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7tuGZ0Obs44FSk8u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/clients/web/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\LoginProxyForWebClientController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\LoginProxyForWebClientController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::7tuGZ0Obs44FSk8u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hLS2hWxCXpsh4816' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\LogoutController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\LogoutController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::hLS2hWxCXpsh4816',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/oauth/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'throttle',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'v1/oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'namespace' => NULL,
        'prefix' => 'v1/oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JGPSCi7uAbIiia1N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/clients/web/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\RefreshProxyForWebClientController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\RefreshProxyForWebClientController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::JGPSCi7uAbIiia1N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gt51GDBiapnUX4NE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\RegisterUserController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\RegisterUserController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::gt51GDBiapnUX4NE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aujGWvoyy7B5fVyb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\ResetPasswordController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\ResetPasswordController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::aujGWvoyy7B5fVyb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8E1gRQ1gWVTDcJJ0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\SendVerificationEmailController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\SendVerificationEmailController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::8E1gRQ1gWVTDcJJ0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/email/verify/{user_id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'signed',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\VerifyEmailController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\VerifyEmailController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::huSU8Tae5p6zQAv7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\WelcomeController@unversioned',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\WelcomeController@unversioned',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'generated::huSU8Tae5p6zQAv7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ycjMUSten1Prj17M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\WelcomeController@versioned',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\API\\Controllers\\WelcomeController@versioned',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ycjMUSten1Prj17M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\HomePageController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\HomePageController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home-page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\LoginController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\LoginController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login-page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\LoginPageController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\LoginPageController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login-page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\LogoutController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authentication\\UI\\WEB\\Controllers\\LogoutController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UddOZHb7aqq5tezY' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'v1/users/{user_id}/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\AssignRolesToUserController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\AssignRolesToUserController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::UddOZHb7aqq5tezY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yVm8DlJ8OLz53lGY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\CreateRoleController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\CreateRoleController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::yVm8DlJ8OLz53lGY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vCurUQrY9bkq5sAR' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/roles/{role_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\DeleteRoleController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\DeleteRoleController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vCurUQrY9bkq5sAR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TPbDZovVnYQTTAPF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/permissions/{permission_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\FindPermissionByIdController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\FindPermissionByIdController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::TPbDZovVnYQTTAPF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sidl6Qik0rCLIrrQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/roles/{role_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\FindRoleByIdController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\FindRoleByIdController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Sidl6Qik0rCLIrrQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9lwVdsQYVNWL8rSB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/roles/{role_id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\GivePermissionsToRoleController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\GivePermissionsToRoleController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::9lwVdsQYVNWL8rSB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ioh568XbIJSsEvCT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/users/{user_id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\GivePermissionsToUserController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\GivePermissionsToUserController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Ioh568XbIJSsEvCT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DvBswbh7shsj4wEu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListPermissionsController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListPermissionsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::DvBswbh7shsj4wEu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YI1ZZ3eEBSXOLTlB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/roles/{role_id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListRolePermissionsController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListRolePermissionsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::YI1ZZ3eEBSXOLTlB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RE6rSQbs2TNXpkDx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListRolesController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListRolesController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::RE6rSQbs2TNXpkDx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jQ1HoUIJB226Mrr3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/users/{user_id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListUserPermissionsController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListUserPermissionsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jQ1HoUIJB226Mrr3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p43D8ePiVYZX0kHx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/users/{user_id}/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListUserRolesController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\ListUserRolesController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::p43D8ePiVYZX0kHx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FmHvqTaXVifc1CbD' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/users/{user_id}/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\RemoveUserRolesController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\RemoveUserRolesController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::FmHvqTaXVifc1CbD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cAGojOssqRn65509' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/roles/{role_id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\RevokeRolePermissionsController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\RevokeRolePermissionsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::cAGojOssqRn65509',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l5eZ4zG9oPDd8bs2' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/users/{user_id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\RevokeUserPermissionsController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\RevokeUserPermissionsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::l5eZ4zG9oPDd8bs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jZitkFJyhmwu8Iwy' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'v1/roles/{role_id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\SyncRolePermissionsController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\SyncRolePermissionsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::jZitkFJyhmwu8Iwy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hspv1srgKOYB4Ceo' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'v1/users/{user_id}/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\SyncUserRolesController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\API\\Controllers\\SyncUserRolesController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Hspv1srgKOYB4Ceo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unauthorized-page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unauthorized',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Containers\\AppSection\\Authorization\\UI\\WEB\\Controllers\\UnauthorizedPageController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\Authorization\\UI\\WEB\\Controllers\\UnauthorizedPageController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'unauthorized-page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mO8MNoxjglUFCXat' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/users/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\DeleteUserController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\DeleteUserController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::mO8MNoxjglUFCXat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hjtViHzs3akVn8BI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/users/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\FindUserByIdController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\FindUserByIdController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::hjtViHzs3akVn8BI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NeTvXEg587DDH7CV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\GetUserProfileController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\GetUserProfileController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::NeTvXEg587DDH7CV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xknxvU0nQToJXazr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\ListUsersController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\ListUsersController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::xknxvU0nQToJXazr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p8ujDi4kSioLhpY1' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'v1/users/{user_id}/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\UpdatePasswordController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\UpdatePasswordController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::p8ujDi4kSioLhpY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZhhFYFSkz3aKEqkF' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'v1/users/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\UpdateUserController@__invoke',
        'controller' => 'App\\Containers\\AppSection\\User\\UI\\API\\Controllers\\UpdateUserController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ZhhFYFSkz3aKEqkF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dh21WKbE7TDxbGvw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/installment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\CreateInstallmentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\CreateInstallmentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dh21WKbE7TDxbGvw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bBZO8UhzrNJS0syA' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/installment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\DeleteInstallmentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\DeleteInstallmentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::bBZO8UhzrNJS0syA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CFumJEwHQjpxK4Ga' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/installment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\FindInstallmentByIdController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\FindInstallmentByIdController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::CFumJEwHQjpxK4Ga',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PhVhvOYPgBA2j58q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/installment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\ListInstallmentsController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\ListInstallmentsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PhVhvOYPgBA2j58q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K6gRww1BZLNJuKbJ' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'v1/installment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\UpdateInstallmentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Installment\\UI\\API\\Controllers\\UpdateInstallmentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::K6gRww1BZLNJuKbJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2KNtr5DsmzKkcSDE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\CreatePaymentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\CreatePaymentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::2KNtr5DsmzKkcSDE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kkZIFnA6aAzn9IgK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\DeletePaymentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\DeletePaymentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kkZIFnA6aAzn9IgK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XfPB7FERLzfAWvIW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\FindPaymentByIdController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\FindPaymentByIdController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::XfPB7FERLzfAWvIW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4GqTpymYjJiHJQ56' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\ListPaymentsController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\ListPaymentsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::4GqTpymYjJiHJQ56',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pt3OU5VskrWuIzP7' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'v1/payment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\UpdatePaymentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Payment\\UI\\API\\Controllers\\UpdatePaymentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::pt3OU5VskrWuIzP7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ngMJ0rsYMZIdF2a2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/payment-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\CreatePaymentMethodController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\CreatePaymentMethodController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ngMJ0rsYMZIdF2a2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0GQDn6cyux6jlv5R' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/payment-methods/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\DeletePaymentMethodController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\DeletePaymentMethodController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::0GQDn6cyux6jlv5R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XWitqw3fe3j0Gto8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/payment-methods/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\FindPaymentMethodByIdController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\FindPaymentMethodByIdController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::XWitqw3fe3j0Gto8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOreNg9z99yqJ14B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/payment-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\ListPaymentMethodsController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\ListPaymentMethodsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::oOreNg9z99yqJ14B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kbNgP2zOXrRq8Mna' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'v1/payment-methods/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\UpdatePaymentMethodController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\PaymentMethod\\UI\\API\\Controllers\\UpdatePaymentMethodController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::kbNgP2zOXrRq8Mna',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6BnFTk6ytDyJpHeE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/student',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\CreateStudentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\CreateStudentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::6BnFTk6ytDyJpHeE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vJTr941EknEGtFEa' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/student/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\DeleteStudentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\DeleteStudentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::vJTr941EknEGtFEa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E08zm55BrTJTxOdI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/student/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\FindStudentByIdController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\FindStudentByIdController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::E08zm55BrTJTxOdI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B41DoVRD2zKiQD1Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/student',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\ListStudentsController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\ListStudentsController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::B41DoVRD2zKiQD1Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FcRBLqY4etTGrhN2' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'v1/student/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'http://apiato.test',
        'uses' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\UpdateStudentController@__invoke',
        'controller' => 'App\\Containers\\UniSection\\Student\\UI\\API\\Controllers\\UpdateStudentController',
        'namespace' => NULL,
        'prefix' => '/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::FcRBLqY4etTGrhN2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'private_docs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs/private',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Containers\\Vendor\\Documentation\\UI\\WEB\\Controllers\\Controller@showPrivateDocs',
        'controller' => 'App\\Containers\\Vendor\\Documentation\\UI\\WEB\\Controllers\\Controller@showPrivateDocs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'private_docs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'public_docs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Containers\\Vendor\\Documentation\\UI\\WEB\\Controllers\\Controller@showPublicDocs',
        'controller' => 'App\\Containers\\Vendor\\Documentation\\UI\\WEB\\Controllers\\Controller@showPublicDocs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'public_docs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.queries.explain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_debugbar/queries/explain',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'as' => 'debugbar.queries.explain',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
