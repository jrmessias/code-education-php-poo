<?php

namespace IAMJ\Objects;

use IAMJ\Interfaces\Avaliacao;
use IAMJ\Interfaces\EnderecoCobranca;
use Exception;

class Pessoa implements Avaliacao, EnderecoCobranca
{
    /**
     * @var string $nome
     */
    protected $nome;
    /**
     * @var string $endereco
     */
    protected $endereco;
    /**
     * @var char $sexo
     */
    protected $sexo;
    /**
     * @var char $tipo
     */
    protected $tipo;
    /**
     * @var integer $avaliacao
     */
    protected $avaliacao;

    /**
     * @var string $enderecoCobranca
     */
    protected $enderecoCobranca;

    /**
     * @param string $nome
     * @param char $sexo
     * @param string $endereco
     * @param char $tipo
     */
    function __construct($nome = null, $sexo = null, $endereco = null, $tipo = null)
    {
        $this->setNome($nome);
        $this->setTipo($tipo);
        $this->setEndereco($endereco);
        $this->setSexo($sexo);
        return $this;
    }

    /**
     * @param string $endereco
     * @return Pessoa
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @param string $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param char $tipo
     * @return Pessoa
     */
    public function setTipo($tipo)
    {
        if (!in_array($tipo, array('F', 'J')))
            throw new Exception('Tipo inválido. (F ou J)');

        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @param char $sexo
     * @return Pessoa
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * @param integer $avaliacao
     * @return Pessoa
     */
    public function setAvaliacao($avaliacao)
    {
        if ($avaliacao <= 0 || $avaliacao > 5)
            throw new Exception('Avaliação inválida. (1 a 5)');

        $this->avaliacao = $avaliacao;
        return $this;
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

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return integer
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * @param string $endereco
     */
    public function setEnderecoCobranca($endereco)
    {
        $this->enderecoCobranca = $endereco;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }
}