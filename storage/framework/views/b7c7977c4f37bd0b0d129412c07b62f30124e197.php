<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/semantic.min.css')); ?>">
</head>
<body>
        <div class="ui container">
                <table class="ui green celled table center aligned tabelaRegistros" name="tabelaRegistros"
                id="tabelaRegistros">
                <thead>
                    <tr>
                        <th>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">#</font>
                            </font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Nome</font>
                            </font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Quantidade</font>
                            </font>
                        </th>
                        <th>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Ações</font>
                            </font>
                        </th>
                    </tr>
                </thead>
                <tbody id="tbodyRegistro">
                    <?php if(count($customers) > 0): ?>
                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($customer->id); ?></td>
                            <td><?php echo e($customer->first_name); ?></td>
                            <td><?php echo e($customer->last_name); ?></td>
                            <td><?php echo e($customer->email); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="center aligned">Não existe registros cadastrados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
  <script src="<?php echo e(asset('js/semantic.min.js')); ?>"></script>   
  <script>
      $(document).ready(function() {
         $('#tabelaRegistros').DataTable({
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Próximo",
                        "sLast":     "Último"
                    }
                }
            });
      });
  </script>
</body>
</html>