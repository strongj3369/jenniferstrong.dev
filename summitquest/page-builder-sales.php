<?php

/**
 * Template Name: Builder Tier Summit Quest Sales
 * Description: Fictional sales page for SummitQuest Adventures — Everest Experience.
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title('|', true, 'right'); ?>SummitQuest Adventures</title>

    <style>
        :root {
            --bt-bg-page: #020617;
            --bt-bg-deep: #020818;
            --bt-bg-section: #071427;
            --bt-bg-soft: #0c2340;
            --bt-bg-card: #0f213f;
            --bt-bg-card-soft: #132847;
            --bt-border-subtle: rgba(255, 255, 255, 0.08);
            --bt-text-main: #f9fafb;
            --bt-text-muted: #9ca3af;
            --bt-text-soft: #cbd5f5;
            --bt-accent: #3dd68c;
            --bt-accent-soft: rgba(61, 214, 140, 0.1);
            --bt-accent-secondary: #60a5fa;
            --bt-danger: #fb7185;
            --bt-radius-lg: 18px;
            --bt-radius-xl: 24px;
            --bt-radius-pill: 999px;
            --bt-shadow-soft: 0 24px 60px rgba(0, 0, 0, 0.6);
            --bt-shadow-card: 0 18px 40px rgba(0, 0, 0, 0.4);
            --bt-font-main: system-ui, -apple-system, BlinkMacSystemFont, "Inter", sans-serif;
            --bt-container-max: 1200px;
        }

        body.summitquest-body {
            margin: 0;
            padding: 0;
            font-family: var(--bt-font-main);
            color: var(--bt-text-main);
            background: radial-gradient(circle at top left, #0b2348 0%, var(--bt-bg-page) 40%, #020617 100%);
        }

        .bt-page {
            min-height: 100vh;
            background:
                radial-gradient(circle at top right, rgba(96, 165, 250, 0.18), transparent 55%),
                radial-gradient(circle at bottom left, rgba(61, 214, 140, 0.12), transparent 60%);
            padding-bottom: 6rem;
            padding-bottom: 0 !important;
        }





        .bt-container {
            max-width: var(--bt-container-max);
            padding: 0 1.5rem;
            margin: 0 auto;
        }

        .bt-section {
            padding: 5rem 0;
        }

        .bt-section--tight {
            padding: 3.5rem 0;
        }

        .bt-section--dark {
            background: var(--bt-bg-section);
        }

        .bt-section--deep {
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.9), #020617);
        }

        .bt-section+.bt-section--dark {
            margin-top: -2rem;
            padding-top: 6rem;
            border-radius: 32px 32px 0 0;
        }

        .bt-kicker {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.15rem 0.9rem;
            border-radius: var(--bt-radius-pill);
            background: rgba(15, 23, 42, 0.75);
            border: 1px solid rgba(148, 163, 184, 0.4);
            color: var(--bt-text-soft);
            font-size: 0.8rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .bt-kicker-dot {
            width: 6px;
            margin-right: 6px;
            height: 6px;
            border-radius: 999px;
            background: var(--bt-accent);
            box-shadow: 0 0 0 6px rgba(61, 214, 140, 0.25);
        }

        .bt-eyebrow {
            font-size: 0.9rem;
            color: var(--bt-text-soft);
            margin-bottom: 0.65rem;
        }

        .bt-heading-xl {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            line-height: 1.05;
            letter-spacing: -0.04em;
            margin: 0 0 1.25rem;
        }

        .bt-heading-lg {
            font-size: 2rem;
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin: 0 0 0.75rem;
        }

        .bt-heading-md {
            font-size: 1.3rem;
            letter-spacing: -0.02em;
            margin: 0 0 0.4rem;
        }

        .bt-text-lead {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--bt-text-soft);
            max-width: 32rem;
        }

        .bt-text-muted {
            font-size: 0.9rem;
            line-height: 1.6;
            color: var(--bt-text-muted);
        }

        .bt-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.4rem 1rem;
            border-radius: var(--bt-radius-pill);
            font-size: 0.8rem;
            border: 1px solid rgba(148, 163, 184, 0.45);
            color: var(--bt-text-soft);
            background: rgba(15, 23, 42, 0.85);
        }

        .bt-pill span.bt-pill-highlight {
            color: var(--bt-accent);
            font-weight: 500;
        }

        .bt-button-row {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
            margin-top: 2rem;
        }

        .bt-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            padding: 0.85rem 1.8rem;
            border-radius: var(--bt-radius-pill);
            font-size: 0.95rem;
            font-weight: 500;
            border: 1px solid transparent;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease-out;
            white-space: nowrap;
        }

        .bt-btn-primary {
            background: radial-gradient(circle at top left, #4ade80, #22c55e 30%, #16a34a 80%);
            color: #052e16;
            box-shadow: 0 12px 25px rgba(34, 197, 94, 0.35);
            /* softened */
        }


        .bt-btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 28px 55px rgba(34, 197, 94, 0.6);
        }

        .bt-btn-outline {
            background: transparent;
            border-color: rgba(148, 163, 184, 0.6);
            color: var(--bt-text-soft);
        }

        .bt-btn-outline:hover {
            background: rgba(15, 23, 42, 0.9);
            border-color: rgba(148, 163, 184, 0.9);
        }

        .bt-btn-secondary {
            background: rgba(15, 23, 42, 0.9);
            border-color: rgba(148, 163, 184, 0.4);
            color: var(--bt-text-soft);
        }

        .bt-btn-secondary:hover {
            background: rgba(15, 23, 42, 1);
            border-color: rgba(148, 163, 184, 0.9);
        }

        .bt-btn-icon-circle {
            width: 1.9rem;
            height: 1.9rem;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.9);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }

        .bt-hero {
            padding-top: 4.5rem;
        }

        .bt-hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.1fr);
            gap: 3rem;
            align-items: stretch;
        }

        .bt-hero-left {
            display: flex;
            flex-direction: column;
            gap: 1.4rem;
            justify-content: center;
        }

        .bt-hero-metrics {
            display: flex;
            flex-wrap: wrap;
            gap: 1.25rem;
            margin-top: 1.25rem;
        }

        .bt-metric {
            display: flex;
            flex-direction: column;
            gap: 0.1rem;
        }

        .bt-metric-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--bt-text-muted);
        }

        .bt-metric-value {
            font-size: 0.95rem;
            color: var(--bt-text-soft);
        }

        .bt-hero-right {
            position: relative;
        }

        .bt-hero-panel {
            position: relative;
            height: 100%;
            min-height: 360px;
            border-radius: 28px;
            padding: 1.4rem;
            background:
                linear-gradient(145deg, rgba(15, 23, 42, 0.90), rgba(15, 23, 42, 0.86)),
                radial-gradient(circle at 20% 0%, rgba(96, 165, 250, 0.35), transparent 55%),
                radial-gradient(circle at 80% 100%, rgba(45, 212, 191, 0.2), transparent 60%);
            box-shadow: var(--bt-shadow-soft);
            overflow: hidden;
        }

        .bt-hero-photo {
            position: absolute;
            inset: 0.7rem;
            border-radius: 22px;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            opacity: 0.7;
            filter: saturate(1.05) contrast(1.05);
            background-image: url('http://learning-platform.local/wp-content/uploads/2025/11/builder-hero-summit.png');
        }

        .bt-hero-overlay {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .bt-hero-dash-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.3rem 0.8rem;
            border-radius: var(--bt-radius-pill);
            background: rgba(15, 23, 42, 0.75);
            border: 1px solid rgba(148, 163, 184, 0.4);
            font-size: 0.75rem;
            color: var(--bt-text-soft);
            margin-bottom: 0.75rem;
        }

        .bt-hero-dash {
            margin-top: auto;
            align-self: flex-start;
            padding: 1rem 1.1rem;
            border-radius: 18px;
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(148, 163, 184, 0.35);
            backdrop-filter: blur(16px);
            min-width: 260px;
            max-width: 320px;
            box-shadow: var(--bt-shadow-card);
        }

        .bt-hero-dash-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            /* <-- THIS fixes the pill position */
            gap: 0.75rem;
        }


        .bt-hero-dash-title {
            font-size: 0.85rem;
            color: var(--bt-text-soft);
        }

        .bt-hero-dash-tag-mini {
            font-size: 0.7rem;
            padding: 0.3rem 0.65rem;
            /* FIXED: taller + wider */
            margin-left: 0.5rem;
            border-radius: 999px;
            background: rgba(22, 163, 74, 0.16);
            color: #bbf7d0;
            border: 1px solid rgba(74, 222, 128, 0.6);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.3rem 0.65rem;
            line-height: 1.1;
            text-align: center;
        }



        .bt-hero-dash-main {
            font-size: 1.25rem;
            letter-spacing: 0.02em;
            margin-bottom: 0.2rem;
        }

        .bt-hero-dash-sub {
            font-size: 0.75rem;
            color: var(--bt-text-muted);
            margin-bottom: 0.8rem;
        }

        .bt-hero-dash-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.65rem;
        }

        .bt-progress-track {
            position: relative;
            flex: 1;
            height: 6px;
            border-radius: 999px;
            background: rgba(30, 64, 175, 0.6);
            overflow: hidden;
        }

        .bt-progress-fill {
            position: absolute;
            inset: 0;
            width: 0;
            background: linear-gradient(to right, #4ade80, #22c55e);
            transition: width 1.15s ease-out;
        }

        .bt-hero-badges {
            position: absolute;
            right: 1rem;
            top: 1.2rem;
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
            align-items: flex-end;
        }

        .bt-hero-badge {
            padding: 0.4rem 0.9rem;
            border-radius: var(--bt-radius-pill);
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(148, 163, 184, 0.45);
            font-size: 0.75rem;
            color: var(--bt-text-soft);
            backdrop-filter: blur(14px);
        }

        .bt-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.5rem;
        }

        .bt-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 2.25rem;
        }

        .bt-card {
            border-radius: var(--bt-radius-lg);
            background: linear-gradient(145deg, var(--bt-bg-card), var(--bt-bg-card-soft));
            border: 1px solid rgba(148, 163, 184, 0.3);
            padding: 1.4rem 1.5rem;
            box-shadow: var(--bt-shadow-card);
            position: relative;
            overflow: hidden;
        }

        .bt-card-soft {
            background: rgba(15, 23, 42, 0.9);
            border-color: rgba(148, 163, 184, 0.25);
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.7);
        }


        .bt-card-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 0.6rem;
        }

        .bt-card-tag {
            font-size: 0.75rem;
            padding: 0.25rem 0.7rem;
            border-radius: var(--bt-radius-pill);
            border: 1px solid rgba(148, 163, 184, 0.4);
            color: var(--bt-text-soft);
            background: rgba(15, 23, 42, 0.9);
        }

        .bt-card-tag--accent {
            background: var(--bt-accent-soft);
            border-color: rgba(34, 197, 94, 0.8);
            color: #bbf7d0;
        }

        .bt-card-tag--blue {
            background: rgba(37, 99, 235, 0.2);
            border-color: rgba(96, 165, 250, 0.9);
            color: #dbeafe;
        }

        /* body text inside cards */
        .bt-card p {
            margin: 0.4rem 0 1rem;
            /* extra space above the image/footer */
            font-size: 0.9rem;
            color: var(--bt-text-soft);
        }

        /* footer layout for all highlight cards (top + bottom) */
        #sq-highlights .bt-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1.2rem;
            margin-top: 0.9rem;
            font-size: 0.85rem;
            color: #9fb3c8;
        }

        /* keep dot + text on one line and vertically centered */
        #sq-highlights .bt-card-footer span {
            display: flex;
            align-items: center;
        }

        /* base dot style used in Summit Simulation footer */
        #sq-highlights .bt-card-footer .bt-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #9fb3c8;
            margin-right: 8px;
        }

        /* top-row highlight cards use green accent dot with glow */
        #sq-highlights .bt-grid-2 .bt-card-footer .bt-dot {
            background: var(--bt-accent);
            box-shadow: 0 0 0 5px rgba(34, 197, 94, 0.2);
        }



        /* Make highlight card images taller and more visible */
        .bt-card-thumb {
            height: 300px !important;
            /* Increase from the ~140px default */
            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }


        /* MAPPED THUMB IMAGES */
        .bt-thumb-villages {
            background-image: url('http://learning-platform.local/wp-content/uploads/2025/11/builder-himalayan-villiage2.png');
        }

        .bt-thumb-basecamp {
            background-image: url('http://learning-platform.local/wp-content/uploads/2025/11/builder-base-camp3.png');
        }

        .bt-thumb-summit {
            background-image: url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-training-day4.png');
        }

        .bt-thumb-dinner {
            background-image: url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-dinner7.png');
        }

        .bt-tag-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
            margin-top: 0.65rem;
        }

        .bt-tag {
            font-size: 0.75rem;
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(148, 163, 184, 0.4);
            color: var(--bt-text-soft);
        }

        .bt-feature-row {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.2fr);
            gap: 2.5rem;
            align-items: center;
        }

        .bt-feature-panel {
            border-radius: 24px;
            padding: 1.6rem 1.8rem;
            border: 1px solid rgba(148, 163, 184, 0.35);
            box-shadow: var(--bt-shadow-card);
            background:
                linear-gradient(to bottom, rgba(15, 23, 42, 0.88), rgba(15, 23, 42, 0.96)),
                url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-summit-ridge5.png') center/cover no-repeat;
        }

        .bt-feature-panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.1rem;
            gap: 1rem;
        }

        .bt-feature-panel-label {
            font-size: 0.75rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: rgba(191, 219, 254, 0.9);
        }

        .bt-itinerary-label {
            font-size: 0.8rem;
            color: var(--bt-text-soft);
            margin-bottom: 0.4rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
        }

        .bt-feature-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.75rem;
        }

        .bt-feature-cell {
            padding: 0.9rem 1rem;
            border-radius: 16px;
            background: rgba(15, 23, 42, 0.92);
            border: 1px solid rgba(148, 163, 184, 0.35);
            font-size: 0.85rem;
            color: var(--bt-text-soft);
        }

        .bt-feature-cell strong {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
        }

        .bt-feature-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 0.9rem;
            font-size: 0.78rem;
            color: var(--bt-text-muted);
        }

        .bt-feature-bar {
            width: 100%;
            height: 6px;
            border-radius: 999px;
            background: rgba(30, 64, 175, 0.7);
            overflow: hidden;
            position: relative;
        }

        .bt-feature-bar-fill {
            position: absolute;
            inset: 0;
            width: 82%;
            background: linear-gradient(to right, #4ade80, #22c55e);
        }

        .bt-pricing-row {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(0, 1.1fr);
            gap: 2rem;
            align-items: center;
        }

        .bt-pricing-card {
            border-radius: 24px;
            background: rgba(15, 23, 42, 0.96);
            padding: 1.6rem 1.75rem;
            border: 1px solid rgba(148, 163, 184, 0.4);
            box-shadow: var(--bt-shadow-card);
        }

        .bt-price-main {
            font-size: 2rem;
            font-weight: 600;
            letter-spacing: -0.04em;
            margin: 0.4rem 0;
        }

        .bt-price-main span {
            font-size: 0.9rem;
            color: var(--bt-text-muted);
            font-weight: 400;
        }

        .bt-price-note {
            font-size: 0.9rem;
            color: var(--bt-text-soft);
        }

        .bt-price-list {
            margin: 1.3rem 0 1.3rem;
            padding: 0;
            list-style: none;
            display: grid;
            gap: 0.55rem;
            font-size: 0.9rem;
            color: var(--bt-text-soft);
        }

        .bt-price-list li {
            display: flex;
            gap: 0.55rem;
            align-items: flex-start;
        }

        .bt-check {
            margin-top: 0.3rem;
            width: 14px;
            height: 14px;
            border-radius: 999px;
            background: rgba(34, 197, 94, 0.15);
            border: 1px solid rgba(22, 163, 74, 0.8);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            color: #bbf7d0;
        }

        .bt-testimonials {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.5rem;
        }

        .bt-test-card {
            border-radius: 20px;
            background: radial-gradient(circle at top left, rgba(96, 165, 250, 0.2), transparent 55%),
                radial-gradient(circle at bottom right, rgba(34, 197, 94, 0.18), transparent 60%),
                rgba(2, 6, 23, 0.95);
            padding: 1.3rem 1.4rem;
            border: 1px solid rgba(148, 163, 184, 0.5);
            box-shadow: var(--bt-shadow-card);
            font-size: 0.9rem;
            color: var(--bt-text-soft);
        }

        .bt-test-name {
            margin-top: 0.85rem;
            font-size: 0.85rem;
            color: rgba(209, 213, 219, 0.98);
        }

        .bt-test-meta {
            font-size: 0.75rem;
            color: var(--bt-text-muted);
        }

        .bt-stars {
            margin-top: 0.5rem;
            font-size: 0.85rem;
            color: #fde68a;
        }

        .bt-faq-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.3fr);
            gap: 2.25rem;
        }

        .bt-faq-list {
            border-radius: 20px;
            background: rgba(15, 23, 42, 0.98);
            border: 1px solid rgba(148, 163, 184, 0.4);
            padding: 1.3rem 1.4rem;
            box-shadow: var(--bt-shadow-card);
        }

        .bt-faq-item+.bt-faq-item {
            border-top: 1px solid rgba(148, 163, 184, 0.35);
            margin-top: 0.4rem;
            padding-top: 0.4rem;
        }

        .bt-faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            cursor: pointer;
            padding: 0.4rem 0;
        }

        .bt-faq-question h4 {
            font-size: 0.95rem;
            margin: 0;
        }

        .bt-faq-toggle {
            width: 26px;
            height: 26px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: var(--bt-text-soft);
        }

        .bt-faq-answer {
            font-size: 0.85rem;
            color: var(--bt-text-muted);
            line-height: 1.6;
            padding-bottom: 0.45rem;
            display: none;
        }

        .bt-faq-item.open .bt-faq-answer {
            display: block;
        }

        .bt-faq-item.open .bt-faq-toggle {
            border-color: var(--bt-accent);
            color: #bbf7d0;
            background: rgba(34, 197, 94, 0.09);
        }

        .bt-final-cta {
            text-align: center;
            max-width: 640px;
            margin: 0 auto;
        }

        .bt-final-cta p {
            margin: 0.8rem 0 1.6rem;
            color: var(--bt-text-soft);
            font-size: 0.95rem;
        }

        .bt-final-meta {
            margin-top: 1.3rem;
            font-size: 0.8rem;
            color: var(--bt-text-muted);
        }

        .bt-subtle-divider {
            height: 1px;
            background: radial-gradient(circle, rgba(148, 163, 184, 0.6) 0, transparent 70%);
            opacity: 0.5;
            margin: 3rem 0;
        }

        .bt-badge-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            font-size: 0.8rem;
            color: var(--bt-text-muted);
            margin-top: 0.9rem;
        }

        .bt-badge-soft {
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.5);
            background: rgba(15, 23, 42, 0.9);
        }

        /* ROUTE SECTION (PREMIUM FLOATING LAYOUT) */
        .bt-route-section {
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.7), rgba(2, 6, 23, 0.95));
            padding: 5rem 0 6rem;
        }

        .bt-route-title-wrap {
            text-align: center;
            max-width: 900px;
            margin: 0 auto 2.5rem;
        }

        .bt-route-premium-wrapper {
            position: relative;
            display: grid;
            grid-template-columns: 1.12fr auto 1fr;
            gap: 2rem;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
        }

        .bt-route-premium-image img {
            width: 100%;
            max-width: 650px;
            border-radius: 22px;
            box-shadow: 0 32px 70px rgba(0, 0, 0, 0.65);
            border: 1px solid rgba(148, 163, 184, 0.25);
            margin: 0 auto;
            display: block;
        }

        .bt-route-floating {
            display: flex;
            flex-direction: column;
            gap: 1.75rem;
            position: relative;
            z-index: 3;
        }

        .bt-route-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(14px);
            border-radius: 18px;
            padding: 1.1rem 1.25rem;
            width: 100%;
            min-width: 315px;
            /* sweet spot for your content */
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.45);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .nowrap {
            white-space: nowrap;
        }



        .bt-route-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 25px 55px rgba(0, 0, 0, 0.6);
        }

        .bt-route-card h4 {
            font-size: 1.05rem;
            color: var(--bt-text-soft);
            margin-bottom: 0.35rem;
        }

        .bt-route-card p {
            font-size: 0.9rem;
            color: var(--bt-text-muted);
            line-height: 1.5;
        }

        /* VR FEATURE SECTION */
        .bt-section--vr {
            background: radial-gradient(circle at top right, rgba(56, 189, 248, 0.25), rgba(15, 23, 42, 1));
        }

        .bt-vr-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(0, 1.1fr);
            gap: 2.5rem;
            align-items: center;
        }

        .bt-vr-media {
            position: relative;
        }

        .bt-vr-media img {
            width: 100%;
            border-radius: 22px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(148, 163, 184, 0.3);
            display: block;
        }

        .bt-vr-chip-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1.1rem;
            font-size: 0.8rem;
        }

        .bt-vr-chip {
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.95);
            border: 1px solid rgba(148, 163, 184, 0.55);
            color: var(--bt-text-soft);
        }

        /* PRICING SECTION BG (image + gradient) */
        .bt-section--pricing {
            background:
                linear-gradient(to bottom, rgba(15, 23, 42, 0.85), rgba(2, 6, 23, 0.96)),
                url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-pricing-section11.png') center/cover no-repeat;
        }

        .bt-pricing-gear {
            margin-top: 1.5rem;
            width: 420px;
            /* ← NEW: wider container */
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.3);
            box-shadow: 0 20px 55px rgba(0, 0, 0, 0.7);
            filter: drop-shadow(0 0 28px rgba(180, 205, 255, 0.22));
        }


        .bt-pricing-gear img {
            width: 100%;
            /* fill container */
            height: auto;
            display: block;
        }




        /* TESTIMONIALS BACKGROUND */
        .bt-section--testimonials {
            background:
                linear-gradient(to bottom, rgba(7, 16, 32, 0.94), rgba(2, 6, 23, 0.98)),
                url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-dividerbackground9.png') center/cover no-repeat;
        }

        /* RESPONSIVE */
        @media (max-width: 960px) {

            .bt-hero-grid,
            .bt-pricing-row,
            .bt-feature-row,
            .bt-faq-grid,
            .bt-vr-grid {
                grid-template-columns: minmax(0, 1fr);
            }

            .bt-hero {
                padding-top: 3.75rem;
            }

            .bt-hero-right {
                order: -1;
            }

            .bt-hero-panel {
                min-height: 320px;
            }
        }

        @media (max-width: 1100px) {
            .bt-route-premium-wrapper {
                grid-template-columns: 1fr;
            }

            .bt-route-floating.left,
            .bt-route-floating.right {
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }

            .bt-route-card {
                width: calc(50% - 1rem);
                min-width: 220px;
            }
        }

        @media (max-width: 768px) {

            .bt-grid-3,
            .bt-testimonials {
                grid-template-columns: minmax(0, 1fr);
            }

            .bt-grid-2,
            .bt-feature-grid {
                grid-template-columns: minmax(0, 1fr);
            }

            .bt-section {
                padding: 3.5rem 0;
            }

            .bt-section--dark {
                padding-top: 4rem;
            }

            .bt-button-row {
                flex-direction: column;
                align-items: stretch;
            }

            .bt-btn {
                width: 100%;
                justify-content: center;
            }

            .bt-route-card {
                width: 100%;
            }
        }

        @media (max-width: 600px) {
            .bt-route-premium-image img {
                max-width: 100%;
            }
        }
    </style>



<body <?php body_class('summitquest-body'); ?>>
    <div class="bt-page">

        <!-- HERO -->
        <section class="bt-section bt-hero">
            <div class="bt-container">
                <div class="bt-hero-grid">
                    <div class="bt-hero-left">
                        <div class="bt-kicker">
                            <span class="bt-kicker-dot"></span>
                            SummitQuest Adventures · Everest Experience
                        </div>

                        <h1 class="bt-heading-xl">
                            Conquer the world’s highest peak — safely, virtually.
                        </h1>

                        <p class="bt-text-lead">
                            The SummitQuest Everest Experience combines immersive simulations, expert guidance, and
                            structured reflection so you can “climb” Everest, build resilience, and return with a story
                            you’ll never forget — without leaving your desk.
                        </p>

                        <div class="bt-button-row">
                            <a href="#sq-packages" class="bt-btn bt-btn-primary">
                                Book your adventure
                                <span class="bt-btn-icon-circle">→</span>
                            </a>
                            <a href="#sq-itinerary" class="bt-btn bt-btn-outline">
                                View the 8-day itinerary
                            </a>
                        </div>

                        <div class="bt-hero-metrics">
                            <div class="bt-metric">
                                <span class="bt-metric-label">FORMAT</span>
                                <span class="bt-metric-value">Guided virtual expedition · 8 days · live + on-demand</span>
                            </div>
                            <div class="bt-metric">
                                <span class="bt-metric-label">EXPERIENCE LEVEL</span>
                                <span class="bt-metric-value">No prior climbing experience required.</span>
                            </div>
                        </div>
                    </div>

                    <div class="bt-hero-right">
                        <div class="bt-hero-panel">
                            <div class="bt-hero-photo"></div>

                            <div class="bt-hero-overlay">
                                <div class="bt-hero-badges">
                                    <div class="bt-hero-badge">Spring 2026 · Everest Cohort</div>
                                    <div class="bt-hero-badge">Live guides · Small group format</div>
                                </div>

                                <div class="bt-hero-dash-tag">
                                    <span>Everest Expedition Dashboard</span>
                                </div>

                                <div class="bt-hero-dash">
                                    <div class="bt-hero-dash-header">
                                        <div>
                                            <div class="bt-hero-dash-title">SummitQuest · Everest Experience</div>
                                            <div class="bt-hero-dash-sub">Track your journey from arrival to summit simulation.</div>
                                        </div>
                                        <span class="bt-hero-dash-tag-mini">Now enrolling</span>
                                    </div>

                                    <div class="bt-hero-dash-row">
                                        <div class="bt-text-muted" style="font-size:0.8rem;">Spots reserved</div>
                                        <div style="font-size:0.9rem;color:var(--bt-text-soft);">18 / 24</div>
                                    </div>
                                    <div class="bt-hero-dash-row">
                                        <div class="bt-progress-track">
                                            <div class="bt-progress-fill" data-progress="75"></div>
                                        </div>
                                        <div class="bt-text-muted" style="font-size:0.78rem;">Cohort capacity 75%</div>
                                    </div>

                                    <div class="bt-hero-dash-row" style="margin-top:0.75rem;">
                                        <div class="bt-text-muted" style="font-size:0.8rem;">
                                            Next departure: <span style="color:var(--bt-text-soft);">May 3 · Virtual Base Camp check-in</span>
                                        </div>
                                        <div class="bt-btn-icon-circle" style="font-size:0.9rem;">▶</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ABOUT & HIGHLIGHTS -->
        <section class="bt-section bt-section--dark" id="sq-highlights">
            <div class="bt-container">

                <!-- ABOUT + TOP TWO HIGHLIGHTS -->
                <div class="bt-grid-2" style="align-items:flex-start;margin-bottom:2.2rem;">
                    <div>
                        <p class="bt-eyebrow">About the expedition</p>
                        <h2 class="bt-heading-lg">An Everest-inspired journey for modern adventurers.</h2>

                        <p class="bt-text-lead">
                            Led by SummitQuest founder <strong>Jordan Steele</strong>, the Everest Experience blends the
                            psychology of high-altitude climbing with immersive, risk-free simulations you can join from
                            anywhere in the world.
                        </p>

                        <p class="bt-text-muted" style="margin-top:1rem;">
                            <strong>Jordan Steele · CEO & Head Guide</strong><br />
                            After a decade guiding treks in the Himalayas, Jordan created SummitQuest in 2022 to bring the
                            clarity, courage, and community of the mountains to people who may never step on a glacier — but
                            still want to know what they’re capable of.
                        </p>

                        <div class="bt-badge-row">
                            <span class="bt-badge-soft">Immersive, story-driven expedition</span>
                            <span class="bt-badge-soft">Live debriefs & reflection</span>
                            <span class="bt-badge-soft">Leadership & resilience lenses</span>
                        </div>
                    </div>

                    <!-- TOP TWO HIGHLIGHT CARDS -->
                    <div class="bt-grid-2">

                        <!-- Himalayan Villages -->
                        <div class="bt-card">
                            <div class="bt-card-header">
                                <h3 class="bt-heading-md">Trek through Himalayan “villages”</h3>
                                <span class="bt-card-tag bt-card-tag--accent">Guided</span>
                            </div>
                            <p>
                                Begin your adventure in simulated Himalayan villages — meeting your team, connecting with local
                                characters, and facing your first altitude-inspired decisions.
                            </p>
                            <div class="bt-card-thumb" style="background-image:url('http://learning-platform.local/wp-content/uploads/2025/11/builder-himalayan-villiage2.png');"></div>

                            <div class="bt-card-footer">
                                <span><span class="bt-dot"></span> Story-driven role-play</span>
                                <span>Cultural immersion modules</span>
                            </div>
                        </div>

                        <!-- Virtual Base Camp -->
                        <div class="bt-card bt-card-soft">
                            <div class="bt-card-header">
                                <h3 class="bt-heading-md">Virtual Base Camp & summit push</h3>
                                <span class="bt-card-tag bt-card-tag--blue">Signature</span>
                            </div>
                            <p>
                                Experience the grind of Base Camp rotations, altitude challenges, and interactive scenarios —
                                all leading toward your fully guided Summit Simulation.
                            </p>

                            <div class="bt-card-thumb" style="background-image:url('http://learning-platform.local/wp-content/uploads/2025/11/builder-base-camp3.png');"></div>

                            <div class="bt-card-footer">
                                <span>Altitude challenge decisions</span>
                                <span>Immersive expedition modules</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- BOTTOM THREE HIGHLIGHTS -->
                <div class="bt-grid-3">

                    <!-- Acclimatization Labs -->
                    <div class="bt-card">
                        <div class="bt-card-header">
                            <h3 class="bt-heading-md">Guided acclimatization labs</h3>
                        </div>
                        <p>
                            Navigate “thin air” challenges designed to sharpen your pacing, teamwork, mindset, and split-second
                            judgment — without the frostbite.
                        </p>
                        <div class="bt-card-thumb" style="background-image:url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-training-day4.png');"></div>
                    </div>

                    <!-- Summit Simulation (Signature Highlight) -->
                    <div class="bt-card">
                        <div class="bt-card-header">
                            <h3 class="bt-heading-md">Summit Simulation</h3>
                            <span class="bt-card-tag bt-card-tag--blue">Signature</span>
                        </div>
                        <p>
                            A high-stakes, fully guided simulation where your choices determine how your team reaches the top —
                            and how you lead through pressure on the descent.
                        </p>

                        <!-- ✔ FIXED: Sunrise image -->
                        <div class="bt-card-thumb" style="background-image:url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-day7sunrise.png');"></div>

                        <div class="bt-card-footer">
                            <span><span class="bt-dot"></span> Interactive decision modules</span>
                            <span>Expert debrief & feedback</span>
                        </div>

                    </div>


                    <!-- Kathmandu Celebration -->
                    <div class="bt-card bt-card-soft">
                        <div class="bt-card-header">
                            <h3 class="bt-heading-md">Kathmandu celebration</h3>
                        </div>
                        <p>
                            Close your expedition with a simulated cultural dinner — lantern-lit tables, warm community, and a
                            guided reflection on the “Everest” you want to climb next in real life.
                        </p>
                        <div class="bt-card-thumb" style="background-image:url('http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-dinner7-1.png');"></div>
                    </div>

                </div>

            </div>
        </section>





        <!-- ROUTE MAP SECTION (FULL WIDTH, PREMIUM FLOATING CARDS) -->
        <section class="bt-section bt-route-section">
            <div class="bt-container bt-route-title-wrap">
                <p class="bt-eyebrow">Your Everest Route</p>
                <h2 class="bt-heading-lg">Your journey, mapped from Base Camp to Summit.</h2>
                <p class="bt-text-lead" style="margin:0 auto;">
                    A cinematic overview of the path you’ll follow during the SummitQuest Everest Experience. From Base
                    Camp to the Summit Ridge, this route mirrors the journey taken by real-world expeditions — adapted
                    into an immersive, risk-free virtual adventure.
                </p>
            </div>

            <div class="bt-route-premium-wrapper">
                <!-- LEFT FLOATING CARDS -->
                <div class="bt-route-floating left">
                    <div class="bt-route-card">
                        <h4>Base Camp — 17,600 ft / 5,364 m</h4>
                        <p>Where your adventure begins. Orientation, acclimatization basics, and your first view of Everest.</p>
                    </div>
                    <div class="bt-route-card">
                        <h4>ABC — 21,300 ft / 6,492 m</h4>
                        <p>A transition zone focused on pacing, gear prep, and altitude awareness.</p>
                    </div>
                    <div class="bt-route-card">
                        <h4>Camp 2 — 24,750 ft / 7,544 m</h4>
                        <p>Glacier-inspired challenges build resilience and teamwork.</p>
                    </div>
                </div>

                <!-- CENTER MAP IMAGE -->
                <div class="bt-route-premium-image">
                    <img
                        src="http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-second-map8.png"
                        alt="SummitQuest Everest Route Map" />
                </div>

                <!-- RIGHT FLOATING CARDS -->
                <div class="bt-route-floating right">
                    <div class="bt-route-card">
                        <h4>Camp 3 — 26,700 ft / 8,138 m</h4>
                        <p>The final acclimatization zone. Learn to stay calm, strategic, and focused under pressure.</p>
                    </div>
                    <div class="bt-route-card">
                        <h4>Summit Ridge — 28,000+ ft</h4>
                        <p>Weather calls, timing decisions, and mental readiness define this stage.</p>
                    </div>
                    <div class="bt-route-card">
                        <h4>Summit — 29,032 ft / 8,848 m</h4>
                        <p>Your defining moment. Celebrate, reflect, and prepare for your return to Base Camp.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ITINERARY -->
        <section class="bt-section" id="sq-itinerary">
            <div class="bt-container">
                <div class="bt-feature-row">
                    <div>
                        <p class="bt-eyebrow">8-day sample itinerary</p>
                        <h2 class="bt-heading-lg">From arrival to summit simulation — mapped out.</h2>
                        <p class="bt-text-lead">
                            Every day of the Everest Experience layers in new context, challenges, and reflection so you’re
                            not just “playing a game” — you’re rehearsing for the hardest things you want to tackle in life.
                        </p>

                        <ul class="bt-price-list" style="margin-top:1.4rem;">
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Day 1:</strong> Arrival &amp; orientation — meet your team, set intentions, and
                                    explore the virtual Kathmandu hub.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Days 2–3:</strong> Trek to Base Camp — simulated trails, cultural encounters,
                                    and early altitude decisions.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Days 4–6:</strong> Acclimatization &amp; training — rotation days, gear choices,
                                    and resilience labs.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Day 7:</strong> Summit Simulation — your guided push to the top.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Day 8:</strong> Return &amp; Reflection Workshop — celebrate and translate
                                    lessons back into your everyday life.</span>
                            </li>
                        </ul>

                        <a href="#sq-packages" class="bt-btn bt-btn-secondary">
                            See packages & what’s included
                        </a>
                    </div>

                    <div class="bt-feature-panel">
                        <div class="bt-feature-panel-header">
                            <div>
                                <div class="bt-feature-panel-label">Inside the SummitQuest hub</div>
                                <div class="bt-heading-md">Your Everest journey at a glance.</div>
                            </div>
                        </div>

                        <div class="bt-itinerary-label">Key milestones</div>
                        <div class="bt-feature-grid">
                            <div class="bt-feature-cell">
                                <strong>Arrival · Day 1</strong>
                                Check in to the virtual Kathmandu hub, meet Jordan and your guides, and complete your
                                pre-expedition briefing.
                            </div>
                            <div class="bt-feature-cell">
                                <strong>Base Camp · Days 2–3</strong>
                                Trek through simulated Himalayan villages, navigating choices around pace, risk, and group
                                morale.
                            </div>
                            <div class="bt-feature-cell">
                                <strong>Training · Days 4–6</strong>
                                Acclimatization exercises, mindset labs, and scenario-based challenges inspired by real
                                expedition decisions.
                            </div>
                            <div class="bt-feature-cell">
                                <strong>Summit · Day 7</strong>
                                A fully guided Summit Simulation — including the critical call: push higher, or turn back?
                            </div>
                        </div>

                        <div class="bt-feature-meta">
                            <span>Average daily time commitment: 60–90 minutes.</span>
                            <div class="bt-feature-bar">
                                <div class="bt-feature-bar-fill"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bt-subtle-divider"></div>

        <!-- VR SUMMIT SIMULATION FEATURE -->
        <section class="bt-section bt-section--dark bt-section--vr">
            <div class="bt-container">
                <div class="bt-vr-grid">
                    <div>
                        <p class="bt-eyebrow">Summit Simulation · Day 7</p>
                        <h2 class="bt-heading-lg">Experience the summit through an immersive VR-guided climb.</h2>
                        <p class="bt-text-lead">
                            Step into a guided Summit Simulation where your decisions shape the route, pace, and outcome of
                            your team’s final push. It’s part adventure, part leadership lab — all from the safety of your
                            screen.
                        </p>

                        <ul class="bt-price-list" style="margin-top:1.3rem;">
                            <li>
                                <span class="bt-check">✓</span>
                                <span>Real Everest-inspired terrain brought to life through cinematic visuals.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span>Decision points around weather, timing, and teamwork — with guided debriefs.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span>Optional VR headset integration for an even deeper immersion.</span>
                            </li>
                        </ul>

                        <div class="bt-vr-chip-row">
                            <span class="bt-vr-chip">Summit Simulation</span>
                            <span class="bt-vr-chip">VR-ready modules</span>
                            <span class="bt-vr-chip">Guided debrief</span>
                        </div>
                    </div>

                    <div class="bt-vr-media">
                        <img
                            src="http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-vr-image6.png"
                            alt="SummitQuest VR Summit Simulation" />
                    </div>
                </div>
            </div>
        </section>

        <!-- PRICING / PACKAGES -->
        <section class="bt-section bt-section--deep bt-section--pricing" id="sq-packages">
            <div class="bt-container">
                <div class="bt-pricing-row">
                    <div>
                        <p class="bt-eyebrow">Pricing & packages</p>
                        <h2 class="bt-heading-lg">Choose how far you want to climb.</h2>
                        <p class="bt-text-lead">
                            Whether you’re here for the story, the leadership training, or the full Everest-style challenge,
                            there’s a SummitQuest package to match your appetite for adventure.
                        </p>

                        <div class="bt-badge-row">
                            <span class="bt-badge-soft">Group & team licenses available</span>
                            <span class="bt-badge-soft">Live cohorts & on-demand options</span>
                        </div>

                        <div class="bt-pricing-gear #sq-highlights">
                            <img
                                src="http://learning-platform.local/wp-content/uploads/2025/11/builder-summit-3fanned-1.png"
                                alt="SummitQuest adventure tier collage" />
                        </div>

                    </div>

                    <div class="bt-pricing-card">
                        <div class="bt-pill">
                            SummitQuest Adventures <span class="bt-pill-highlight">· Everest Experience</span>
                        </div>

                        <p class="bt-price-note" style="margin-top:0.9rem;">
                            All packages include access to the SummitQuest platform, expedition community, and reflection
                            materials.
                        </p>

                        <p class="bt-price-main">
                            From $499 <span>USD · per participant</span>
                        </p>

                        <ul class="bt-price-list">
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Base Camp Explorer — $499</strong><br />
                                    Intro trek, cultural immersion scenes, and guided reflection sessions focused on values,
                                    pacing, and decision-making.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Summit Challenger — $999</strong><br />
                                    Full 8-day Everest Experience including Summit Simulation, altitude challenge modules, and
                                    small-group coaching.</span>
                            </li>
                            <li>
                                <span class="bt-check">✓</span>
                                <span><strong>Ultimate Everest — $1,499</strong><br />
                                    Everything in Summit Challenger plus extended leadership labs, a bonus integration session,
                                    and custom “Climb Your Everest” action plan.</span>
                            </li>
                        </ul>

                        <div class="bt-button-row" style="margin-top:1.4rem;">
                            <a href="#" class="bt-btn bt-btn-primary">
                                Reserve your spot
                                <span class="bt-btn-icon-circle">→</span>
                            </a>
                            <a href="#sq-faq" class="bt-btn bt-btn-outline">
                                Talk with our team first
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section class="bt-section bt-section--dark bt-section--testimonials">
            <div class="bt-container">
                <p class="bt-eyebrow">What past climbers are saying</p>
                <h2 class="bt-heading-lg">They didn’t leave their desk — but everything else felt real.</h2>

                <div class="bt-testimonials" style="margin-top:2rem;">
                    <div class="bt-test-card">
                        <p>
                            “I felt like I conquered Everest without leaving my desk. The way the story, decisions, and
                            reflection came together helped me see exactly where I play small in my real life.”
                        </p>
                        <div class="bt-stars">★★★★★</div>
                        <div class="bt-test-name">Alex R.</div>
                        <div class="bt-test-meta">Summit Challenger participant</div>
                    </div>

                    <div class="bt-test-card">
                        <p>
                            “The clarity and structure made me believe I could tackle anything. By Day 8, ‘Everest’ felt
                            less like a mountain and more like a metaphor I could actually use.”
                        </p>
                        <div class="bt-stars">★★★★★</div>
                        <div class="bt-test-name">Priya M.</div>
                        <div class="bt-test-meta">Ultimate Everest participant</div>
                    </div>

                    <div class="bt-test-card">
                        <p>
                            “It’s part adventure, part leadership lab. Our remote team still references moments from the
                            expedition when we’re making tough calls together.”
                        </p>
                        <div class="bt-stars">★★★★★</div>
                        <div class="bt-test-name">Daniel K.</div>
                        <div class="bt-test-meta">Team-based Base Camp Explorer group</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="bt-section" id="sq-faq">
            <div class="bt-container">
                <div class="bt-faq-grid">
                    <div>
                        <p class="bt-eyebrow">FAQ</p>
                        <h2 class="bt-heading-lg">Your questions, answered before you “clip in.”</h2>
                        <p class="bt-text-lead">
                            This is a fictional expedition on a real platform — built to feel like a true adventure while
                            staying safe, accessible, and flexible for your schedule.
                        </p>
                    </div>

                    <div class="bt-faq-list">
                        <div class="bt-faq-item open">
                            <div class="bt-faq-question">
                                <h4>Is this a real climb on Everest?</h4>
                                <div class="bt-faq-toggle">–</div>
                            </div>
                            <div class="bt-faq-answer" style="display:block;">
                                No actual travel or high-altitude exposure is involved. The Everest Experience is a guided,
                                story-driven simulation designed to mirror the emotional, strategic, and team dynamics of a
                                real expedition — without the physical risk.
                            </div>
                        </div>

                        <div class="bt-faq-item">
                            <div class="bt-faq-question">
                                <h4>Do I need VR gear to participate?</h4>
                                <div class="bt-faq-toggle">+</div>
                            </div>
                            <div class="bt-faq-answer">
                                VR is optional. You can complete the entire experience from a laptop using interactive scenes,
                                video, and guided exercises. If you have a compatible headset, some modules can be explored in
                                richer detail.
                            </div>
                        </div>

                        <div class="bt-faq-item">
                            <div class="bt-faq-question">
                                <h4>How much time should I set aside each day?</h4>
                                <div class="bt-faq-toggle">+</div>
                            </div>
                            <div class="bt-faq-answer">
                                Most participants spend 60–90 minutes per day. You can follow the suggested 8-day rhythm or
                                space modules out over a few weeks to match your schedule.
                            </div>
                        </div>

                        <div class="bt-faq-item">
                            <div class="bt-faq-question">
                                <h4>What is your refund or reschedule policy?</h4>
                                <div class="bt-faq-toggle">+</div>
                            </div>
                            <div class="bt-faq-answer">
                                Because this is a fictional template, you can set any refund and reschedule policy you like
                                for practice. In a real offer, we recommend clearly stated deadlines for cancellations and
                                the option to move to a later cohort when life happens.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- FINAL CTA -->
        <section class="bt-section bt-section--deep">
            <div class="bt-container">
                <div class="bt-final-cta">
                    <p class="bt-eyebrow">Your Everest is waiting</p>
                    <h2 class="bt-heading-lg">Ready to climb your Everest with SummitQuest?</h2>
                    <p>
                        Whether your “summit” is a new project, a life decision, or simply proving something to yourself,
                        the Everest Experience gives you a safe place to practice courage — one step, one camp, one
                        decision at a time.
                    </p>

                    <div class="bt-button-row" style="justify-content:center;">
                        <a href="#" class="bt-btn bt-btn-primary">
                            Join SummitQuest today
                            <span class="bt-btn-icon-circle">→</span>
                        </a>
                    </div>

                    <div class="bt-final-meta">
                        This is a fictional sales page template created for learning and practice. Customize the copy,
                        images, and policies to match your own version of “Everest.”
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /.bt-page -->






    <!-- php wp_footer(); -->
    <script>
        // FAQ toggle
        document.addEventListener('click', function(e) {
            const question = e.target.closest('.bt-faq-question');
            if (!question) return;
            const item = question.parentElement;
            const open = item.classList.contains('open');
            document.querySelectorAll('.bt-faq-item').forEach(function(el) {
                el.classList.remove('open');
                const ans = el.querySelector('.bt-faq-answer');
                const toggle = el.querySelector('.bt-faq-toggle');
                if (ans && toggle) {
                    ans.style.display = 'none';
                    toggle.textContent = '+';
                }
            });
            if (!open) {
                item.classList.add('open');
                const ans = item.querySelector('.bt-faq-answer');
                const toggle = item.querySelector('.bt-faq-toggle');
                if (ans && toggle) {
                    ans.style.display = 'block';
                    toggle.textContent = '–';
                }
            }
        });

        // Animate expedition progress bar on load
        document.addEventListener('DOMContentLoaded', function() {
            const bar = document.querySelector('.bt-progress-fill');
            if (bar) {
                const target = bar.getAttribute('data-progress') || 0;
                requestAnimationFrame(function() {
                    bar.style.width = target + '%';
                });
            }
        });

        // Smooth scroll for in-page anchors
        document.addEventListener('click', function(e) {
            const link = e.target.closest('a[href^="#"]');
            if (!link) return;
            const id = link.getAttribute('href').slice(1);
            if (!id) return;
            const target = document.getElementById(id);
            if (!target) return;
            e.preventDefault();
            window.scrollTo({
                top: target.getBoundingClientRect().top + window.pageYOffset - 80,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>