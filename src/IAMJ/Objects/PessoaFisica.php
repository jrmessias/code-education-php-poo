<?php

namespace IAMJ\Objects;


class PessoaFisica extends Pessoa
{
    /**
     * @var string $cpf
     */
    protected $cpf;

    /**
     * @param string $nome
     * @param string $endereco
     */
    function __construct($nome = null, $endereco = null)
    {
        parent::__construct($nome, $endereco);
    }

    /**
     * @param mixed $cpf
     * @return PessoaFisica
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        $this->tipo = 'F';
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

}