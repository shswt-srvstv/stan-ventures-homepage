<section class="process">
    <div class="container">

        <h2>Simple Process.<br>Powerful Results.</h2>

        <div class="process-grid">
            <?php foreach ($content['process'] as $step): ?>
                <?php include '../app/components/process-step.php'; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>
