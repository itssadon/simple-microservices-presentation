<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
$app->add(new \Slim\Middleware\JwtAuthentication([
    "path" => "/users",
    "secret" => "supersecretkeyyoushouldnotcommittogithub",
    "rules" => [
        new \Slim\Middleware\JwtAuthentication\RequestMethodRule([
            "passthrough" => ["GET"]
        ])
    ]
]));

