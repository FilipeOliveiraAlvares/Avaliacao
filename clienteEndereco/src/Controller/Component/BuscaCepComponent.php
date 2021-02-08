<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Client;

/**
 * BuscaCep component
 */
class BuscaCepComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function pesquisaCep($cep)
    {

        $http = new Client();

        // Simple get
        $response = $http->get('https://viacep.com.br/ws/' . $cep . ' /json/');

        return $response->json;
    }
}
