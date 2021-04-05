<?php

namespace LrvSwagger\Tests;

use LrvSwagger\Info;
use LrvSwagger\OpenApi;
use LrvSwagger\Operation;
use LrvSwagger\PathItem;
use LrvSwagger\Path;
use LrvSwagger\Response;
use LrvSwagger\Server;
use LrvSwagger\ServerVariable;
use Orchestra\Testbench\TestCase;

class SwaggerGeneratorTest extends TestCase
{
    /** @test */
    public function my_first_test()
    {
        $info = Info::create('The sample swagger api');
        $path = Path::create(
            '/users',
            PathItem::create(
                'get',
                Operation::create(
                    Response::create('200', 'Successfully status')
                )
            )
        );

        $openApi = new OpenApi($info, $path);
        $server = Server::create('http://localhost.com', 'localhost');

        dd($info, $openApi);
        $this->assertTrue(true);

    }
}

