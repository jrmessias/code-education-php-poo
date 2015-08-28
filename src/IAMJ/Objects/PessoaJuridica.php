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
     * @param string $sexo
     * @param string $cnpj
     * @param string $endereco
     */
    function __construct($nome = null, $sexo = null, $cnpj = null, $endereco = null)
    {
        $this->setNome($nome);
        $this->setCnpj($cnpj);
        $this->setEndereco($endereco);
        $this->setSexo($sexo);
        return $this;
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
