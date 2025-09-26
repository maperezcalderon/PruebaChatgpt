<section>
    <h2><?= htmlspecialchars($titulo ?? ''); ?></h2>
    <p>Si deseas más información, ponte en contacto con nosotros:</p>
    <dl class="contacto">
        <dt>Correo:</dt>
        <dd><a href="mailto:<?= htmlspecialchars($correo ?? ''); ?>"><?= htmlspecialchars($correo ?? ''); ?></a></dd>
        <dt>Teléfono:</dt>
        <dd><a href="tel:<?= htmlspecialchars($telefono ?? ''); ?>"><?= htmlspecialchars($telefono ?? ''); ?></a></dd>
    </dl>
</section>
