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
     * @param string $sexo
     * @param string $cpf
     * @param string $endereco
     */
    function __construct($nome = null, $sexo = null, $cpf = null, $endereco = null)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEndereco($endereco);
        $this->setSexo($sexo);
        return $this;
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