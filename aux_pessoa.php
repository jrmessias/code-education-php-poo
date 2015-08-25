<?php

use \IAMJ\Objects\Pessoa as Pessoa;

$pessoa = [];

$pessoa1 = new Pessoa();
$pessoa1->setNome('Diego Ferreira Dias')
->setCpf('582.306.840-90')
->setEndereco('Rua Luiz Laino, 1848, Sorocaba-SP')
->setSexo('M');

array_push($pessoa, $pessoa1);

$pessoa2 = new Pessoa();
$pessoa2->setNome('Luan Pereira Gomes')
->setCpf('776.789.343-00')
->setEndereco('Quadra Quadra 198, Luziânia-GO')
->setSexo('M');

array_push($pessoa, $pessoa2);

$pessoa3 = new Pessoa();
$pessoa3->setNome('Larissa Goncalves Dias')
->setCpf('606.663.736-39')
->setEndereco('2ª Travessa da Tranqüilidade, 1231, Salvador-BA')
->setSexo('F');

array_push($pessoa, $pessoa3);

$pessoa4 = new Pessoa();
$pessoa4->setNome('Sofia Silva Santos')
->setCpf('264.383.757-64')
->setEndereco('Rua Pioneiro Giusepe Portolese, 603, Maringá-PR')
->setSexo('F');

array_push($pessoa, $pessoa4);

$pessoa5 = new Pessoa();
$pessoa5->setNome('Livia Rodrigues Gomes')
->setCpf('662.927.696-58')
->setEndereco('Rua Pedro José Vieira, 627, Vitória-ES')
->setSexo('F');

array_push($pessoa, $pessoa5);

$pessoa6 = new Pessoa();
$pessoa6->setNome('Luan Barbosa Castro')
    ->setCpf('470.573.841-14')
    ->setEndereco('Rua Hanah Daud, 1007, São José do Rio Preto-SP')
    ->setSexo('M');

array_push($pessoa, $pessoa6);

$pessoa7 = new Pessoa();
$pessoa7->setNome('Marisa Barbosa Oliveira')
    ->setCpf('286.474.302-71')
    ->setEndereco('Rua Félix de Otero, 1940, São Paulo-SP')
    ->setSexo('F');

array_push($pessoa, $pessoa7);

$pessoa8 = new Pessoa();
$pessoa8->setNome('Estevan Martins Barbosa')
    ->setCpf('135.951.876-28')
    ->setEndereco('3ª Travessa Gersino Coelho, 1739, Salvador-BA')
    ->setSexo('M');

array_push($pessoa, $pessoa8);

$pessoa9 = new Pessoa();
$pessoa9->setNome('Beatriz Goncalves Martins')
    ->setCpf('364.464.875-17')
    ->setEndereco('Rua Um, 1594, Itapetininga-SP')
    ->setSexo('F');

array_push($pessoa, $pessoa9);

$pessoa10 = new Pessoa();
$pessoa10->setNome('Vitoria Lima Gomes')
    ->setCpf('619.401.780-53')
    ->setEndereco('Rua Amapá, 1446, Votuporanga-SP')
    ->setSexo('F');

array_push($pessoa, $pessoa10);

