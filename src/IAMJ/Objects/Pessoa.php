<?php

namespace IAMJ\Objects;

class Pessoa
{
    private $nome;
    private $cpf;
    private $endereco;
    private $sexo;

    /**
     * @param $nome
     * @param $cpf
     * @param $endereco
     * @param $sexo
     */
    function __construct($nome = null, $cpf = null, $endereco = null, $sexo = null)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEndereco($endereco);
        $this->setSexo($sexo);
        return $this;
    }


    /**
     * @param mixed $cpf
     * @return Pessoa
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @param mixed $endereco
     * @return Pessoa
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @param mixed $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param $sexo
     * @return Pessoa
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }


}