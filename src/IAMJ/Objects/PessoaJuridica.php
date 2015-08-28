<?php

namespace IAMJ\Objects;


class PessoaJuridica extends Pessoa
{
    /**
     * @var string $cnpj
     */
    protected $cnpj;

    /**
     * @param string $nome
     * @param string $endereco
     */
    function __construct($nome = null, $endereco = null)
    {
        parent::__construct($nome, $endereco);
    }

    /**
     * @param mixed $cnpj
     * @return PessoaJuridica
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        $this->tipo = 'J';
        return $this;
    }

    /**
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

}
