<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properities -->
    <title>PHP POO</title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/assets/semantic/dist/semantic.min.css">
    <script src="<?php echo SITE_URL; ?>/assets/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/semantic/dist/semantic.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/tablesort.min.js"></script>
    <script>
        $(document).ready(function () {
            // Ordenação na tabela
            $sortTable = $('.sortable.table');
            if ($.fn.tablesort !== undefined && $sortTable.size() > 0) {
                $sortTable.tablesort();
            }

            // Modal com dados
            $(document).on('click', '.show-modal', function(e){
                e.preventDefault();
                $('.'+$(this).attr('data-target')).modal('show');
            });
        });
    </script>

    <style type="text/css">
        *, a{
            outline: none !important;
        }
    </style>

</head>
<body>

<div class="ui main text container">
    <h1 class="ui header">PHP OO - Code Education</h1>

    <p>Exercício 3</p>
</div>

<hr>

<div class="ui text container">
    <div class="ui warning message">
        Clique no título da coluna para ordenar.
    </div>

    <table class="ui sortable green stretched striped celled table">
        <thead>
        <tr>
            <th class="">Nome</th>
            <th class="">CPF</th>
            <th class="">Tipo</th>
            <th class="">Avaliação</th>
            <th class="">Ver</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($pessoa as $p) {
            $documento = ($p->getTipo() == 'F') ? $p->getCpf() : $p->getCnpj();
            ?>

            <tr>
                <td><?php echo $p->getNome(); ?></td>
                <td><?php echo $documento; ?></td>
                <td><?php echo $p->getTipo(); ?></td>
                <td><?php echo $p->getAvaliacao().' '.str_repeat('<i class="star icon"></i>', $p->getAvaliacao()); ?></td>
                <td><a class="ui show-modal" data-target="m<?php echo onlyNumbers($documento); ?>" href="#"><i class="search icon"></i></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <?php
    foreach ($pessoa as $p) {

        ?>
        <div class="ui basic modal m<?php echo onlyNumbers(($p->getTipo() == 'F') ? $p->getCpf() : $p->getCnpj()); ?>">
            <i class="close icon"></i>

            <div class="header">
                <?php echo $p->getNome(); ?>
            </div>
            <div class="content">
                <div class="description">
                    <p>Nome: <?php echo $p->getNome(); ?></p>
                    <p>Endereço: <?php echo $p->getEndereco(); ?></p>
                    <p>Endereço de Cobrança: <?php echo $p->getEnderecoCobranca(); ?></p>
                    <p>CPF/CNPJ: <?php echo ($p->getTipo() == 'F') ? $p->getCpf() : $p->getCnpj(); ?></p>
                    <p>Pessoa: <?php echo $p->getTipo(); ?></p>
                    <p>Sexo: <?php echo $p->getSexo(); ?></p>
                    <p>Avaliação: <?php echo str_repeat('<i class="star icon"></i>', $p->getAvaliacao()); ?></p>
                </div>
            </div>
            <div class="actions">
                <div class="two fluid ui inverted buttons">
                    <div class="ui green basic inverted button deny">
                        <i class="checkmark icon"></i>
                        Ok
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    ?>
</div>
</body>

</html>
