

<!-- Vista para editar un elemento de la tabla -->

<body>
    
    <!-- Parte específica de nuestra vista -->
    <table>
        <tr>
            <th>Cod</th>
            <th>elemento</th>
        </tr>
        <?php
        foreach ($items as $item) {
            ?>
            <tr>
                <td>
                    <?php echo $item->getCodigo() ?>
                </td>
                <td>
                    <?php echo $item->getNombre() ?>
                </td>
                <td>
                    <a href="index.php?controlador=Item&accion=editar&codigo=<?php echo $item->getCodigo() ?>">Editar</a>
                </td>
                <td>
                    <a href="index.php?controlador=Item&accion=borrar&codigo=<?php echo $item->getCodigo() ?>">Borrar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="index.php?controlador=Item&accion=nuevo">Nuevo</a>

    
</body>

</html>