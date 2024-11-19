<div class="container mt-5">
    <h1 class="text-center">Resultados de la Búsqueda</h1>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Enlace</th>
                <th>Título</th>
                <th>Categoría</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($resultados)): ?>
                <?php foreach ($resultados as $resultado): ?>
                    <tr>
                        <td><?= $resultado['pk_vinculo']; ?></td>
                        <td><a href="<?= $resultado['enlace']; ?>" target="_blank"><?= $resultado['enlace']; ?></a></td>
                        <td><?= $resultado['titulo']; ?></td>
                        <td><?= $resultado['nombre_categoria']; ?></td>
                        <td><?= $resultado['tipo_categoria']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No se encontraron resultados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>