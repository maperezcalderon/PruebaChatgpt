<section>
    <h2><?= htmlspecialchars($titulo ?? ''); ?></h2>
    <p>Estas son algunas de las soluciones que ofrecemos:</p>
    <ul>
        <?php foreach (($servicios ?? []) as $servicio): ?>
            <li><?= htmlspecialchars($servicio); ?></li>
        <?php endforeach; ?>
    </ul>
</section>
