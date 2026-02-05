Stan Ventures Homepage — Technical Assessment
Project Overview

This project is a pixel-perfect implementation of the Stan Ventures homepage based on the provided Figma design.
The goal was to demonstrate:

Clean PHP architecture (no hardcoded HTML blocks)

Component-based structure

Dynamic data rendering using PHP arrays

Semantic HTML5 and modern CSS layout

Attention to spacing, typography, and responsiveness

Architecture Decisions

The project is structured to mimic a lightweight component-based architecture using raw PHP.

stan-homepage/
│
├── public/
│   ├── index.php
│   └── assets/
│       ├── css/style.css
│       ├── images/
│       └── js/
│
└── app/
    ├── components/
    │   ├── header.php
    │   └── footer.php
    │
    ├── sections/
    │   ├── hero.php
    │   ├── logos.php
    │   ├── services.php
    │   ├── stats-testimonials.php
    │   ├── case-studies.php
    │   ├── process.php
    │   └── comparison.php
    │
    └── data/
        ├── services.php
        ├── testimonials.php
        ├── cases.php
        └── comparison.php

Why this structure?

components/ → reusable layout blocks (header, footer)

sections/ → individual homepage sections for clarity and maintainability

data/ → dynamic content separated from markup (as required)

public/ → web root and asset management

This ensures scalability and maintainability rather than a static HTML implementation.

Dynamic Content Handling

The following sections are populated using PHP arrays:

Services

Testimonials

Case Studies

Comparison Table

This avoids repeating HTML and demonstrates reusable component loops.

Example:

foreach ($services as $service) {
    // reusable card component
}

Frontend Approach

Pure CSS3 using Flexbox and Grid

CSS Variables for color consistency

Pixel-accurate spacing from Figma

Proper typography using Inter font

Hover states for buttons and cards

Fully responsive layout (Desktop, Tablet, Mobile)

How to Run Locally
Requirements

PHP 8.0+

Steps

Open terminal in the project root

Run:

php -S localhost:8000 -t public


Open browser:

http://localhost:8000

Additional Considerations Implemented

Clean component structure

Separation of concerns (data vs layout)

Reusable card components

Image optimization

Semantic HTML

Ready for scaling into multiple pages

Time Taken

Approximately 8 hours to complete from setup to pixel-perfect finish.