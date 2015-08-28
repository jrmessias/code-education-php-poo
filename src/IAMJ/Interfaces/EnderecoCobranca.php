<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 27/08/2015
 * Time: 21:54
 */

namespace IAMJ\Interfaces;


interface EnderecoCobranca
{
    /**
     * @param string $endereco
     * @return mixed
     */
    public function setEnderecoCobranca($endereco);
    public function getEnderecoCobranca();
}