<section class="stats-testimonials">
    <div class="container">

        <div class="stats-row container">

            <div><h3>120k+</h3><p>Links Delivered</p></div>
            <div><h3>98%</h3><p>Client Retention</p></div>
            <div><h3>3.2M</h3><p>Keywords Improved</p></div>
        </div>

        <div class="testimonials-grid">
            <?php foreach ($content['testimonials'] as $testimonial): ?>
                <?php include '../app/components/testimonial-card.php'; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>
