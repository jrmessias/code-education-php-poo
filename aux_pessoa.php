<?php

use \IAMJ\Objects\PessoaFisica as PessoaFisica;
use \IAMJ\Objects\PessoaJuridica as PessoaJuridica;

$pessoa = [];

$pessoa1 = new PessoaFisica();
$pessoa1->setNome('Diego Ferreira Dias')
    ->setCpf('582.306.840-90')
    ->setEndereco('Rua Luiz Laino, 1848, Sorocaba-SP')
    ->setEnderecoCobranca('Rua Amapá, 1446, Sorocaba-SP')
    ->setSexo('M')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa1);

$pessoa2 = new PessoaFisica();
$pessoa2->setNome('Luan Pereira Gomes')
    ->setCpf('776.789.343-00')
    ->setEndereco('Quadra 198, Luziânia-GO')
    ->setEnderecoCobranca('Rua Luiz Laino, 1848, Luziânia-GO')
    ->setSexo('M')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa2);

$pessoa3 = new PessoaFisica();
$pessoa3->setNome('Larissa Goncalves Dias')
    ->setCpf('606.663.736-39')
    ->setEndereco('2ª Travessa da Tranqüilidade, 1231, Salvador-BA')
    ->setEnderecoCobranca('Quadra Quadra 198, Salvador-BA')
    ->setSexo('F')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa3);

$pessoa4 = new PessoaFisica();
$pessoa4->setNome('Sofia Silva Santos')
    ->setCpf('264.383.757-64')
    ->setEndereco('Rua Pioneiro Giusepe Portolese, 603, Maringá-PR')
    ->setEnderecoCobranca('2ª Travessa da Tranqüilidade, 1231, Maringá-PR')
    ->setSexo('F')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa4);

$pessoa5 = new PessoaFisica();
$pessoa5->setNome('Livia Rodrigues Gomes')
    ->setCpf('662.927.696-58')
    ->setEndereco('Rua Pedro José Vieira, 627, Vitória-ES')
    ->setEnderecoCobranca('Rua Pioneiro Giusepe Portolese, 603, Vitória-ES')
    ->setSexo('F')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa5);

$pessoa6 = new PessoaJuridica();
$pessoa6->setNome('Luan Barbosa Castro')
    ->setCnpj('44.038.514/0001-01')
    ->setEndereco('Rua Hanah Daud, 1007, São José do Rio Preto-SP')
    ->setEnderecoCobranca('Rua Pedro José Vieira, 627, São José do Rio Preto-SP')
    ->setSexo('M')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa6);

$pessoa7 = new PessoaJuridica();
$pessoa7->setNome('Marisa Barbosa Oliveira')
    ->setCnpj('80.646.552/0001-00')
    ->setEndereco('Rua Félix de Otero, 1940, São Paulo-SP')
    ->setEnderecoCobranca('Rua Hanah Daud, 1007, São Paulo-SP')
    ->setSexo('F')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa7);

$pessoa8 = new PessoaJuridica();
$pessoa8->setNome('Estevan Martins Barbosa')
    ->setCnpj('78.944.175/0001-44')
    ->setEndereco('3ª Travessa Gersino Coelho, 1739, Salvador-BA')
    ->setEnderecoCobranca('Rua Félix de Otero, 1940, Salvador-BA')
    ->setSexo('M')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa8);

$pessoa9 = new PessoaJuridica();
$pessoa9->setNome('Beatriz Goncalves Martins')
    ->setCnpj('26.419.896/0001-31')
    ->setEndereco('Rua Um, 1594, Itapetininga-SP')
    ->setEnderecoCobranca('3ª Travessa Gersino Coelho, 1739, Itapetininga-SP')
    ->setSexo('F')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa9);

$pessoa10 = new PessoaJuridica();
$pessoa10->setNome('Vitoria Lima Gomes')
    ->setCnpj('23.828.082/0001-62')
    ->setEndereco('Rua Amapá, 1446, Votuporanga-SP')
    ->setEnderecoCobranca('Rua Um, 1594, Votuporanga-SP')
    ->setSexo('F')
    ->setAvaliacao(mt_rand(1, 5));

array_push($pessoa, $pessoa10);