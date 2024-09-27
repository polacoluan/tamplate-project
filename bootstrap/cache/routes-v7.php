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
            '_route' => 'generated::4qAbKchSu5Q90Qal',
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
            '_route' => 'generated::L3s1VwLAj7XTynaM',
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
            '_route' => 'generated::cTn06g2eaVDGMxtm',
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
            '_route' => 'generated::Vm0L87wRkWToZ39G',
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
            '_route' => 'generated::LNDHFy2dMAQ24FqL',
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
            '_route' => 'generated::68hcsYZB2BtABXWG',
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
            '_route' => 'generated::ztHhZ8jUTzcKeKmp',
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
            '_route' => 'generated::2eoQRLDGMC1IoDJd',
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
            '_route' => 'generated::XdT1k4ZK7jyzN97t',
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
            '_route' => 'generated::9282kiHi4YHFPBwD',
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
            '_route' => 'generated::rp0cV5ixuOulpb6R',
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
            '_route' => 'generated::zQkvWYqlT0mK7Hgp',
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
            '_route' => 'generated::RMZDAlfnaqXbeCk4',
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
            '_route' => 'generated::41p6Ft3n7vucaRYZ',
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
            '_route' => 'generated::MCeclCAULJqbCJ1j',
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
            '_route' => 'generated::Ig7MrLNegRadj51r',
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
            '_route' => 'generated::cdB6wzLzkjBf7gXS',
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
            '_route' => 'generated::eACwsdV8YnjdivOc',
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
            '_route' => 'generated::T19axGoS8vIST0oA',
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
            '_route' => 'generated::up2QqO7MGKHWqZWQ',
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
            '_route' => 'generated::GxONhsd4xuyksMjz',
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
            '_route' => 'generated::J6w9EkrtjFINyjhx',
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
            '_route' => 'generated::Obxp2wpky6Bj35Hb',
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
            '_route' => 'generated::RhX3N0QrVuFSlOz9',
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
            '_route' => 'generated::gGlJ7eO9VFb1xlXF',
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
            '_route' => 'generated::k5i4SrzflJU6KwQn',
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
            '_route' => 'generated::yFbolQ3Xcf0mcRJI',
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
            '_route' => 'generated::pWLcCzpBd10xvexF',
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
            '_route' => 'generated::PBWr7HXeU4KNLUw6',
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
            '_route' => 'generated::6jkIHwSwSuxxsLyy',
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
            '_route' => 'generated::CrnKwbXqN659NDeg',
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
            '_route' => 'generated::sn2y7hA2J0JlXsZF',
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
            '_route' => 'generated::PI191a4FlmgZ7BFx',
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
            '_route' => 'generated::JwJo8efwjJ2PgpRY',
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
            '_route' => 'generated::2B3NNyUhAyBXIi9G',
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
            '_route' => 'generated::IvJ7dvmaRq22YP20',
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
            '_route' => 'generated::4CNmBnelXlo6C2bX',
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
            '_route' => 'generated::cAYHi2tJeeaQ2oMQ',
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
            '_route' => 'generated::8WrSJ4GPMuiav5gt',
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
            '_route' => 'generated::0LrWNsyUxpEI3FcP',
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
            '_route' => 'generated::dXhwWOuON84VYNXU',
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
            '_route' => 'generated::Fh292Ryle4al4jSI',
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
            '_route' => 'generated::8lRdiUPSVcwRSmqi',
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
            '_route' => 'generated::8IMbhrbBsqivGXNL',
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
            '_route' => 'generated::wjInJDcCTXPiLYnL',
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
            '_route' => 'generated::6ShXX1797sGt77mQ',
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
            '_route' => 'generated::uzOJzHbzR8Zagqld',
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
            '_route' => 'generated::ohh7sbsZ8lXMsbYX',
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
            '_route' => 'generated::NIru2Oo2JviZnTKC',
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
            '_route' => 'generated::mWHeZXdCSY52XA0V',
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
            '_route' => 'generated::ggRuva8f11w4dkUV',
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
            '_route' => 'generated::n4nJ2JTm6okBxcSJ',
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
    'generated::4qAbKchSu5Q90Qal' => 
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
        'as' => 'generated::4qAbKchSu5Q90Qal',
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
    'generated::L3s1VwLAj7XTynaM' => 
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
        'as' => 'generated::L3s1VwLAj7XTynaM',
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
    'generated::cTn06g2eaVDGMxtm' => 
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
        'as' => 'generated::cTn06g2eaVDGMxtm',
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
    'generated::Vm0L87wRkWToZ39G' => 
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
        'as' => 'generated::Vm0L87wRkWToZ39G',
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
    'generated::LNDHFy2dMAQ24FqL' => 
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
        'as' => 'generated::LNDHFy2dMAQ24FqL',
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
    'generated::68hcsYZB2BtABXWG' => 
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
        'as' => 'generated::68hcsYZB2BtABXWG',
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
    'generated::ztHhZ8jUTzcKeKmp' => 
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
        'as' => 'generated::ztHhZ8jUTzcKeKmp',
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
    'generated::2eoQRLDGMC1IoDJd' => 
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
        'as' => 'generated::2eoQRLDGMC1IoDJd',
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
    'generated::XdT1k4ZK7jyzN97t' => 
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
        'as' => 'generated::XdT1k4ZK7jyzN97t',
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
    'generated::Obxp2wpky6Bj35Hb' => 
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
        'as' => 'generated::Obxp2wpky6Bj35Hb',
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
    'generated::9282kiHi4YHFPBwD' => 
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
        'as' => 'generated::9282kiHi4YHFPBwD',
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
    'generated::JwJo8efwjJ2PgpRY' => 
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
        'as' => 'generated::JwJo8efwjJ2PgpRY',
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
    'generated::0LrWNsyUxpEI3FcP' => 
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
        'as' => 'generated::0LrWNsyUxpEI3FcP',
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
    'generated::2B3NNyUhAyBXIi9G' => 
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
        'as' => 'generated::2B3NNyUhAyBXIi9G',
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
    'generated::IvJ7dvmaRq22YP20' => 
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
        'as' => 'generated::IvJ7dvmaRq22YP20',
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
    'generated::yFbolQ3Xcf0mcRJI' => 
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
        'as' => 'generated::yFbolQ3Xcf0mcRJI',
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
    'generated::zQkvWYqlT0mK7Hgp' => 
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
        'as' => 'generated::zQkvWYqlT0mK7Hgp',
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
    'generated::4CNmBnelXlo6C2bX' => 
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
        'as' => 'generated::4CNmBnelXlo6C2bX',
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
    'generated::rp0cV5ixuOulpb6R' => 
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
        'as' => 'generated::rp0cV5ixuOulpb6R',
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
    'generated::pWLcCzpBd10xvexF' => 
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
        'as' => 'generated::pWLcCzpBd10xvexF',
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
    'generated::RhX3N0QrVuFSlOz9' => 
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
        'as' => 'generated::RhX3N0QrVuFSlOz9',
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
    'generated::gGlJ7eO9VFb1xlXF' => 
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
        'as' => 'generated::gGlJ7eO9VFb1xlXF',
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
    'generated::cAYHi2tJeeaQ2oMQ' => 
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
        'as' => 'generated::cAYHi2tJeeaQ2oMQ',
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
    'generated::PBWr7HXeU4KNLUw6' => 
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
        'as' => 'generated::PBWr7HXeU4KNLUw6',
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
    'generated::8WrSJ4GPMuiav5gt' => 
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
        'as' => 'generated::8WrSJ4GPMuiav5gt',
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
    'generated::k5i4SrzflJU6KwQn' => 
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
        'as' => 'generated::k5i4SrzflJU6KwQn',
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
    'generated::CrnKwbXqN659NDeg' => 
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
        'as' => 'generated::CrnKwbXqN659NDeg',
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
    'generated::sn2y7hA2J0JlXsZF' => 
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
        'as' => 'generated::sn2y7hA2J0JlXsZF',
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
    'generated::RMZDAlfnaqXbeCk4' => 
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
        'as' => 'generated::RMZDAlfnaqXbeCk4',
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
    'generated::41p6Ft3n7vucaRYZ' => 
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
        'as' => 'generated::41p6Ft3n7vucaRYZ',
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
    'generated::6jkIHwSwSuxxsLyy' => 
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
        'as' => 'generated::6jkIHwSwSuxxsLyy',
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
    'generated::PI191a4FlmgZ7BFx' => 
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
        'as' => 'generated::PI191a4FlmgZ7BFx',
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
    'generated::MCeclCAULJqbCJ1j' => 
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
        'as' => 'generated::MCeclCAULJqbCJ1j',
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
    'generated::uzOJzHbzR8Zagqld' => 
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
        'as' => 'generated::uzOJzHbzR8Zagqld',
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
    'generated::ohh7sbsZ8lXMsbYX' => 
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
        'as' => 'generated::ohh7sbsZ8lXMsbYX',
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
    'generated::Ig7MrLNegRadj51r' => 
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
        'as' => 'generated::Ig7MrLNegRadj51r',
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
    'generated::NIru2Oo2JviZnTKC' => 
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
        'as' => 'generated::NIru2Oo2JviZnTKC',
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
    'generated::cdB6wzLzkjBf7gXS' => 
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
        'as' => 'generated::cdB6wzLzkjBf7gXS',
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
    'generated::dXhwWOuON84VYNXU' => 
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
        'as' => 'generated::dXhwWOuON84VYNXU',
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
    'generated::Fh292Ryle4al4jSI' => 
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
        'as' => 'generated::Fh292Ryle4al4jSI',
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
    'generated::eACwsdV8YnjdivOc' => 
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
        'as' => 'generated::eACwsdV8YnjdivOc',
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
    'generated::8lRdiUPSVcwRSmqi' => 
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
        'as' => 'generated::8lRdiUPSVcwRSmqi',
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
    'generated::T19axGoS8vIST0oA' => 
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
        'as' => 'generated::T19axGoS8vIST0oA',
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
    'generated::8IMbhrbBsqivGXNL' => 
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
        'as' => 'generated::8IMbhrbBsqivGXNL',
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
    'generated::wjInJDcCTXPiLYnL' => 
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
        'as' => 'generated::wjInJDcCTXPiLYnL',
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
    'generated::up2QqO7MGKHWqZWQ' => 
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
        'as' => 'generated::up2QqO7MGKHWqZWQ',
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
    'generated::6ShXX1797sGt77mQ' => 
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
        'as' => 'generated::6ShXX1797sGt77mQ',
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
    'generated::GxONhsd4xuyksMjz' => 
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
        'as' => 'generated::GxONhsd4xuyksMjz',
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
    'generated::mWHeZXdCSY52XA0V' => 
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
        'as' => 'generated::mWHeZXdCSY52XA0V',
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
    'generated::ggRuva8f11w4dkUV' => 
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
        'as' => 'generated::ggRuva8f11w4dkUV',
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
    'generated::J6w9EkrtjFINyjhx' => 
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
        'as' => 'generated::J6w9EkrtjFINyjhx',
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
    'generated::n4nJ2JTm6okBxcSJ' => 
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
        'as' => 'generated::n4nJ2JTm6okBxcSJ',
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
