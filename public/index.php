<?php
$content = json_decode(file_get_contents(__DIR__.'/../app/data/content.json'), true);

require '../app/components/header.php';
require '../app/sections/hero.php';
require '../app/sections/logos.php';
require '../app/sections/services.php';
require '../app/sections/stats-testimonials.php';
require '../app/sections/case-studies.php';
require '../app/sections/process.php';
require '../app/sections/comparison.php';
require '../app/sections/cta.php';
require '../app/components/footer.php';   // ← THIS IS MISSING



