<section class="comparison">
    <div class="container">

        <h2 class="comparison-title">Why Agencies Switch to Us</h2>

        <div class="comparison-box">

            <div class="comparison-head">
                <div></div>
                <div>STAN VENTURES</div>
                <div>FATJOE</div>
            </div>

            <?php foreach ($content['comparison'] as $item): ?>
                <div class="comparison-row">
                    <div class="feature"><?= $item ?></div>
                    <div class="tick">✓</div>
                    <div class="cross">✕</div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
