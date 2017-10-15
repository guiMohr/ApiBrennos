<?php
return [
    'router' => [
        'routes' => [
            'brennos.rest.local' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/local[/:local_id]',
                    'defaults' => [
                        'controller' => 'brennos\\V1\\Rest\\Local\\Controller',
                    ],
                ],
            ],
            'brennos.rest.evento' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/evento[/:evento_id]',
                    'defaults' => [
                        'controller' => 'brennos\\V1\\Rest\\Evento\\Controller',
                    ],
                ],
            ],
            'brennos.rest.foto' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/foto[/:foto_id]',
                    'defaults' => [
                        'controller' => 'brennos\\V1\\Rest\\Foto\\Controller',
                    ],
                ],
            ],
            'brennos.rest.usuario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuario[/:usuario_id]',
                    'defaults' => [
                        'controller' => 'brennos\\V1\\Rest\\Usuario\\Controller',
                    ],
                ],
            ],
            'brennos.rest.comentario' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/comentario[/:comentario_id]',
                    'defaults' => [
                        'controller' => 'brennos\\V1\\Rest\\Comentario\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'brennos.rest.local',
            1 => 'brennos.rest.evento',
            2 => 'brennos.rest.foto',
            3 => 'brennos.rest.usuario',
            4 => 'brennos.rest.comentario',
        ],
    ],
    'zf-rest' => [
        'brennos\\V1\\Rest\\Local\\Controller' => [
            'listener' => 'brennos\\V1\\Rest\\Local\\LocalResource',
            'route_name' => 'brennos.rest.local',
            'route_identifier_name' => 'local_id',
            'collection_name' => 'local',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'DELETE',
                3 => 'PATCH',
                4 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \brennos\V1\Rest\Local\LocalEntity::class,
            'collection_class' => \brennos\V1\Rest\Local\LocalCollection::class,
            'service_name' => 'local',
        ],
        'brennos\\V1\\Rest\\Evento\\Controller' => [
            'listener' => 'brennos\\V1\\Rest\\Evento\\EventoResource',
            'route_name' => 'brennos.rest.evento',
            'route_identifier_name' => 'evento_id',
            'collection_name' => 'evento',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'DELETE',
                4 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \brennos\V1\Rest\Evento\EventoEntity::class,
            'collection_class' => \brennos\V1\Rest\Evento\EventoCollection::class,
            'service_name' => 'evento',
        ],
        'brennos\\V1\\Rest\\Foto\\Controller' => [
            'listener' => 'brennos\\V1\\Rest\\Foto\\FotoResource',
            'route_name' => 'brennos.rest.foto',
            'route_identifier_name' => 'foto_id',
            'collection_name' => 'foto',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'DELETE',
                4 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \brennos\V1\Rest\Foto\FotoEntity::class,
            'collection_class' => \brennos\V1\Rest\Foto\FotoCollection::class,
            'service_name' => 'foto',
        ],
        'brennos\\V1\\Rest\\Usuario\\Controller' => [
            'listener' => 'brennos\\V1\\Rest\\Usuario\\UsuarioResource',
            'route_name' => 'brennos.rest.usuario',
            'route_identifier_name' => 'usuario_id',
            'collection_name' => 'usuario',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'DELETE',
                4 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \brennos\V1\Rest\Usuario\UsuarioEntity::class,
            'collection_class' => \brennos\V1\Rest\Usuario\UsuarioCollection::class,
            'service_name' => 'usuario',
        ],
        'brennos\\V1\\Rest\\Comentario\\Controller' => [
            'listener' => 'brennos\\V1\\Rest\\Comentario\\ComentarioResource',
            'route_name' => 'brennos.rest.comentario',
            'route_identifier_name' => 'comentario_id',
            'collection_name' => 'comentario',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'DELETE',
                4 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \brennos\V1\Rest\Comentario\ComentarioEntity::class,
            'collection_class' => \brennos\V1\Rest\Comentario\ComentarioCollection::class,
            'service_name' => 'comentario',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'brennos\\V1\\Rest\\Local\\Controller' => 'HalJson',
            'brennos\\V1\\Rest\\Evento\\Controller' => 'HalJson',
            'brennos\\V1\\Rest\\Foto\\Controller' => 'HalJson',
            'brennos\\V1\\Rest\\Usuario\\Controller' => 'HalJson',
            'brennos\\V1\\Rest\\Comentario\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'brennos\\V1\\Rest\\Local\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Evento\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Foto\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Comentario\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'brennos\\V1\\Rest\\Local\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Evento\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Foto\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Usuario\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/json',
            ],
            'brennos\\V1\\Rest\\Comentario\\Controller' => [
                0 => 'application/vnd.brennos.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \brennos\V1\Rest\Local\LocalEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.local',
                'route_identifier_name' => 'local_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \brennos\V1\Rest\Local\LocalCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.local',
                'route_identifier_name' => 'local_id',
                'is_collection' => true,
            ],
            \brennos\V1\Rest\Evento\EventoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.evento',
                'route_identifier_name' => 'evento_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \brennos\V1\Rest\Evento\EventoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.evento',
                'route_identifier_name' => 'evento_id',
                'is_collection' => true,
            ],
            \brennos\V1\Rest\Foto\FotoEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.foto',
                'route_identifier_name' => 'foto_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \brennos\V1\Rest\Foto\FotoCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.foto',
                'route_identifier_name' => 'foto_id',
                'is_collection' => true,
            ],
            \brennos\V1\Rest\Usuario\UsuarioEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.usuario',
                'route_identifier_name' => 'usuario_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \brennos\V1\Rest\Usuario\UsuarioCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.usuario',
                'route_identifier_name' => 'usuario_id',
                'is_collection' => true,
            ],
            \brennos\V1\Rest\Comentario\ComentarioEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.comentario',
                'route_identifier_name' => 'comentario_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \brennos\V1\Rest\Comentario\ComentarioCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brennos.rest.comentario',
                'route_identifier_name' => 'comentario_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'brennos\\V1\\Rest\\Local\\LocalResource' => [
                'adapter_name' => 'postgres',
                'table_name' => 'local',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'brennos\\V1\\Rest\\Local\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'brennos\\V1\\Rest\\Local\\LocalResource\\Table',
            ],
            'brennos\\V1\\Rest\\Evento\\EventoResource' => [
                'adapter_name' => 'postgres',
                'table_name' => 'evento',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'brennos\\V1\\Rest\\Evento\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'brennos\\V1\\Rest\\Evento\\EventoResource\\Table',
            ],
            'brennos\\V1\\Rest\\Foto\\FotoResource' => [
                'adapter_name' => 'postgres',
                'table_name' => 'foto',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'brennos\\V1\\Rest\\Foto\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'brennos\\V1\\Rest\\Foto\\FotoResource\\Table',
            ],
            'brennos\\V1\\Rest\\Usuario\\UsuarioResource' => [
                'adapter_name' => 'postgres',
                'table_name' => 'usuario',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'brennos\\V1\\Rest\\Usuario\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'brennos\\V1\\Rest\\Usuario\\UsuarioResource\\Table',
            ],
            'brennos\\V1\\Rest\\Comentario\\ComentarioResource' => [
                'adapter_name' => 'postgres',
                'table_name' => 'comentario',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'brennos\\V1\\Rest\\Comentario\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'brennos\\V1\\Rest\\Comentario\\ComentarioResource\\Table',
            ],
        ],
    ],
    'zf-content-validation' => [
        'brennos\\V1\\Rest\\Local\\Controller' => [
            'input_filter' => 'brennos\\V1\\Rest\\Local\\Validator',
        ],
        'brennos\\V1\\Rest\\Evento\\Controller' => [
            'input_filter' => 'brennos\\V1\\Rest\\Evento\\Validator',
        ],
        'brennos\\V1\\Rest\\Foto\\Controller' => [
            'input_filter' => 'brennos\\V1\\Rest\\Foto\\Validator',
        ],
        'brennos\\V1\\Rest\\Usuario\\Controller' => [
            'input_filter' => 'brennos\\V1\\Rest\\Usuario\\Validator',
        ],
        'brennos\\V1\\Rest\\Comentario\\Controller' => [
            'input_filter' => 'brennos\\V1\\Rest\\Comentario\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'brennos\\V1\\Rest\\Local\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'nome_fantasia',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'razao_social',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'inscricao_estadual',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            4 => [
                'name' => 'cnpj',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'data_fundacao',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            6 => [
                'name' => 'foto_perfil',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'brennos\\V1\\Rest\\Evento\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'id_local',
                'required' => false,
                'filters' => [],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'postgres',
                            'table' => 'local',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'foto_perfil',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            4 => [
                'name' => 'imagem_divulgacao',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'data',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            6 => [
                'name' => 'horario_inicial',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            7 => [
                'name' => 'horario_final',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            8 => [
                'name' => 'comentario',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            9 => [
                'name' => 'descricao',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'brennos\\V1\\Rest\\Foto\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'data',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'brennos\\V1\\Rest\\Usuario\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'nome',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'data_nascimento',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'sexo',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => null,
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'cpf',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'cargo',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'brennos\\V1\\Rest\\Comentario\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'id_usuario',
                'required' => false,
                'filters' => [],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'postgres',
                            'table' => 'usuario',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'data',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
];
