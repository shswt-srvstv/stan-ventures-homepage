<section class="services">
    <div class="container">

        <div class="services-head">
            <div>
                <h2>
                    Our SEO Services That<br>
                    <span>Drive Scalable Growth</span>
                </h2>
                <p>Flexible, white-label, and built for long-term results.</p>
            </div>

            <a href="#" class="catalog-btn">View Full Catalog</a>
        </div>

        <div class="services-grid">
            <?php foreach ($content['services'] as $service): ?>
                <?php include '../app/components/service-card.php'; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>
