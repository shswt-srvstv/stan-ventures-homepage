<section class="cases">
    <div class="container">
        <h2>Proven Results</h2>
        <p class="cases-sub">Data-backed case studies from our partner agencies.</p>

        <div class="cases-grid">
            <?php foreach ($content['cases'] as $case): ?>
                <?php include '../app/components/case-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
