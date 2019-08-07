<?php


namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

class Auth {

    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        $response = $handler->handle($request);
        $actual_content = (string) $response->getBody();

        $response = new Response();
        $response->getBody()->write("Hey ! I'm a 'before' middleware | ". $actual_content);
        
        return $response;
    }
}

?>