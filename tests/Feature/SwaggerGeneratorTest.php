<?php

namespace LrvSwagger\Tests;

use LrvSwagger\Contact;
use LrvSwagger\DataType;
use LrvSwagger\ExternalDocs;
use LrvSwagger\Info;
use LrvSwagger\License;
use LrvSwagger\MediaType;
use LrvSwagger\OpenApi;
use LrvSwagger\Operation;
use LrvSwagger\Parameter;
use LrvSwagger\PathItem;
use LrvSwagger\Path;
use LrvSwagger\Property;
use LrvSwagger\RequestBody;
use LrvSwagger\Response;
use LrvSwagger\Schema;
use LrvSwagger\SecurityRequirement;
use LrvSwagger\Server;
use LrvSwagger\ServerVariable;
use Orchestra\Testbench\TestCase;

class SwaggerGeneratorTest extends TestCase
{
    /** @test */
    public function my_first_test()
    {
        $externalDocs = ExternalDocs::create('https://google.com', 'Search Google');

        $securityRequirement = SecurityRequirement::create('basic-auth');
        $server = Server::create('https://api.github.com/{apiKey}/locnguyen1842', 'Server API')
                            ->addVariable(ServerVariable::create('apiKey', 'APOPDSODPDDAS'));

        $contact = Contact::create('Loc Nguyen', 'https://github.com/locnguyen1842', 'locnguyen1842@gmail.com');
        $license = License::create('MIT 2.0', 'https://mit2.com');
        $info = Info::create('The sample swagger api')
                        ->setContact($contact)
                        ->setLicense($license);


        // $schema = DataType::createFromArray([
        //     'type' => 'string',
        //     'format' => 'date'
        // ]);

        $mediaType = MediaType::createFromArray([
            'application/json' => [
                'schema' => [
                    'type' => 'object',
                    'properties' => [
                        'name' => ['type' => 'string'],
                        'age' => ['type' => 'number'],
                    ]
                ]
            ]
        ]);


        $properties = Property::parseRecursiveFromArray([
            'name' => ['type' => 'string'],
            'address' => [
                'type' => 'object',
                'properties' => [
                    'street' => ['type' => 'string'],
                    'district' => ['type' => 'string'],
                    'country_code' => ['type' => 'number'],
                    'address_2' => [
                        'type' => 'object',
                        'properties' => [
                            'address_3' => ['type' => 'string'],
                            'address_4' => ['type' => 'string'],
                            'address_5' => ['type' => 'array', 'items' => ['type' => 'int']]
                        ]
                    ],
                    'street_2' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'address_3' => ['type' => 'string'],
                                'address_4' => ['type' => 'string'],
                                'address_5' => ['type' => 'array', 'items' => ['type' => 'int']]
                            ]
                        ]
                    ]
                ]
            ]
        ]);
        // dd($properties);
        $parameterForList = Parameter::create('page');
        $requestBody = RequestBody::create([$mediaType]);

        $pathGet = Path::create(
            '/users',
            PathItem::create(
                    'get',
                    Operation::create(Response::create('200', 'Successfully status'))
                        ->addResponse(Response::create('404', 'Not Found!'))
                        ->addTag('User')
                        ->setSummary('User Summary')
                        ->setDescription('User Description')
                        ->setExternalDocs($externalDocs)
                        ->setOperationId('getUserList')
                        ->addParameter($parameterForList)
                        ->setRequestBody($requestBody)
                        ->addSecurity($securityRequirement)
                        ->addServer($server)
                )
                ->setSummary('Get User List')
                ->setDescription('User List Description')
        );
        $pathPost = Path::create(
            '/users',
            PathItem::create(
                'post',
                Operation::create(
                    Response::create('200', 'Successfully status')
                )
            )
        );

        $openApi = OpenApi::create($info)
                            ->addPath($pathGet)
                            ->addPath($pathPost)
                            ->setExternalDocs($externalDocs)
                            ->addSecurity($securityRequirement)
                            ->addServer($server);

        dd($openApi);
        $this->assertTrue(true);

    }
}

