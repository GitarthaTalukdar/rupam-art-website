<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Rupam Art — Premium Signage & Advertising</title>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
<style>
/* ============================================================
   Rupam Art — public/css/app.css
   Luxury-editorial aesthetic | Deep ink + warm gold palette
   ============================================================ */

/* ── Variables ──────────────────────────────────────────── */
:root {
    --ink:      #0d0c0a;
    --ink-soft: #1e1c18;
    --parchment:#f5f0e8;
    --cream:    #faf7f2;
    --gold:     #c9a84c;
    --gold-lt:  #e8c96a;
    --gold-dk:  #9a7530;
    --rust:     #8b3a2a;
    --text:     #2a2520;
    --muted:    #7a7060;
    --white:    #ffffff;

    --ff-display: 'Playfair Display', Georgia, serif;
    --ff-body:    'DM Sans', system-ui, sans-serif;

    --radius-sm: 6px;
    --radius-md: 14px;
    --radius-lg: 24px;

    --shadow-card: 0 4px 32px rgba(0,0,0,.10);
    --shadow-pop:  0 24px 80px rgba(0,0,0,.35);

    --transition: .3s cubic-bezier(.4,0,.2,1);
}

/* ── Reset ──────────────────────────────────────────────── */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;font-size:16px}
body{
    font-family:var(--ff-body);
    background:var(--cream);
    color:var(--text);
    line-height:1.6;
    overflow-x:hidden;
}
img{max-width:100%;display:block}
a{text-decoration:none;color:inherit}

/* ── Typography helpers ─────────────────────────────────── */
.section-tag{
    display:inline-block;
    font-size:.75rem;
    font-weight:500;
    letter-spacing:.18em;
    text-transform:uppercase;
    color:var(--gold-dk);
    margin-bottom:.75rem;
}
.section-title{
    font-family:var(--ff-display);
    font-size:clamp(1.8rem,4vw,3rem);
    font-weight:900;
    line-height:1.15;
    color:var(--ink);
    margin-bottom:1rem;
}
.section-sub{
    color:var(--muted);
    max-width:560px;
    margin:0 auto;
}
.section-header{text-align:center;margin-bottom:3rem}

/* ── Buttons ────────────────────────────────────────────── */
.btn-primary,.btn-ghost{
    display:inline-block;
    padding:.75rem 2rem;
    border-radius:var(--radius-sm);
    font-family:var(--ff-body);
    font-weight:500;
    font-size:.95rem;
    cursor:pointer;
    transition:var(--transition);
}
.btn-primary{
    background:var(--gold);
    color:var(--ink);
    border:2px solid var(--gold);
}
.btn-primary:hover{background:var(--gold-lt);border-color:var(--gold-lt);transform:translateY(-2px)}
.btn-ghost{
    background:transparent;
    color:var(--parchment);
    border:2px solid rgba(255,255,255,.35);
}
.btn-ghost:hover{border-color:var(--gold);color:var(--gold)}

/* ── Container ──────────────────────────────────────────── */
.container{width:min(1200px,92%);margin-inline:auto}

/* ══════════════════════════════════════════════════════════
   NAVBAR
══════════════════════════════════════════════════════════ */
.navbar{
    position:fixed;top:0;left:0;right:0;z-index:900;
    display:flex;align-items:center;justify-content:space-between;
    padding:.9rem 5%;
    background:rgba(13,12,10,.92);
    backdrop-filter:blur(12px);
    border-bottom:1px solid rgba(201,168,76,.18);
}
.brand{
    display:flex;align-items:center;gap:.6rem;
    font-family:var(--ff-display);
    font-size:1.4rem;
    color:var(--parchment);
}
.brand em{color:var(--gold);font-style:italic}
.brand-icon{color:var(--gold);font-size:1rem}
.nav-links{
    list-style:none;
    display:flex;align-items:center;gap:2rem;
}
.nav-links a{
    color:rgba(245,240,232,.75);
    font-size:.9rem;
    font-weight:400;
    letter-spacing:.03em;
    transition:color var(--transition);
}
.nav-links a:hover{color:var(--gold)}
.nav-cta{
    background:var(--gold)!important;
    color:var(--ink)!important;
    padding:.45rem 1.2rem;
    border-radius:var(--radius-sm);
    font-weight:500!important;
}
.nav-cta:hover{background:var(--gold-lt)!important}
.nav-toggle{display:none;background:none;border:none;color:var(--parchment);font-size:1.5rem;cursor:pointer}

/* ══════════════════════════════════════════════════════════
   HERO
══════════════════════════════════════════════════════════ */
.hero{
    position:relative;
    min-height:100svh;
    display:flex;align-items:center;
    overflow:hidden;
    padding-top:80px;
}
.hero-bg{
    position:absolute;inset:0;
    background:
        radial-gradient(ellipse 80% 60% at 60% 50%, #1e180a 0%, var(--ink) 70%);
}
.hero-grain{
    position:absolute;inset:0;
    background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.06'/%3E%3C/svg%3E");
    opacity:.4;pointer-events:none;
}
.hero-shape{
    position:absolute;border-radius:50%;pointer-events:none;
}
.s1{
    width:480px;height:480px;
    right:-120px;top:-80px;
    background:radial-gradient(circle,rgba(201,168,76,.18) 0%,transparent 70%);
}
.s2{
    width:300px;height:300px;
    left:5%;bottom:10%;
    background:radial-gradient(circle,rgba(139,58,42,.2) 0%,transparent 70%);
}
.s3{
    width:180px;height:180px;
    right:20%;top:55%;
    border:1px solid rgba(201,168,76,.15);
    animation:floatShape 6s ease-in-out infinite;
}
@keyframes floatShape{
    0%,100%{transform:translateY(0) rotate(0deg)}
    50%{transform:translateY(-20px) rotate(15deg)}
}
.hero-inner{
    position:relative;z-index:1;
    width:min(780px,90%);
    margin-inline:auto;
    text-align:center;
    animation:heroFadeUp .8s ease both;
}
@keyframes heroFadeUp{
    from{opacity:0;transform:translateY(30px)}
    to{opacity:1;transform:translateY(0)}
}
.hero-badge{
    display:inline-block;
    font-size:.75rem;
    letter-spacing:.18em;
    text-transform:uppercase;
    color:var(--gold);
    border:1px solid rgba(201,168,76,.35);
    padding:.35rem 1rem;
    border-radius:100px;
    margin-bottom:1.5rem;
}
.hero-heading{
    font-family:var(--ff-display);
    color:var(--parchment);
    line-height:1;
    margin-bottom:1.25rem;
}
.hero-heading .line-1{
    display:block;
    font-size:clamp(3.5rem,12vw,9rem);
    font-weight:400;
    letter-spacing:-.02em;
}
.hero-heading .line-2{
    display:block;
    font-size:clamp(2.5rem,9vw,6.5rem);
    font-weight:900;
    font-style:italic;
    color:var(--gold);
}
/* ★ Tagline — always visible, placed right under heading */
.hero-tagline{
    color:rgba(245,240,232,.72);
    font-size:clamp(.95rem,2vw,1.15rem);
    font-weight:300;
    max-width:600px;
    margin:0 auto 2.5rem;
    line-height:1.7;
    border-left:3px solid var(--gold);
    padding-left:1.2rem;
    text-align:left;
}
.hero-actions{
    display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;
}

/* ══════════════════════════════════════════════════════════
   PRODUCTS SECTION
══════════════════════════════════════════════════════════ */
.products-section{padding:6rem 0}

.products-grid{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(270px,1fr));
    gap:1.75rem;
}

/* ── Product Card ── */
.product-card{
    background:var(--white);
    border-radius:var(--radius-md);
    overflow:hidden;
    box-shadow:var(--shadow-card);
    transition:transform var(--transition),box-shadow var(--transition);
}
.product-card:hover{
    transform:translateY(-6px);
    box-shadow:0 12px 48px rgba(0,0,0,.14);
}
.card-img-wrap{
    position:relative;
    height:200px;
    overflow:hidden;
}
.card-img{
    width:100%;height:100%;
    object-fit:cover;
    transition:transform .5s ease;
}
.product-card:hover .card-img{transform:scale(1.06)}
.card-overlay{
    position:absolute;inset:0;
    background:linear-gradient(to top,rgba(13,12,10,.55),transparent);
    display:flex;align-items:flex-end;padding:1rem;
}
.card-icon{font-size:2rem;line-height:1}
.card-body{padding:1.25rem 1.5rem 1.5rem}
.card-title{
    font-family:var(--ff-display);
    font-size:1.25rem;
    font-weight:700;
    color:var(--ink);
    margin-bottom:.5rem;
}
.card-desc{color:var(--muted);font-size:.9rem;line-height:1.6;margin-bottom:1rem}
.card-link{
    font-weight:500;
    font-size:.88rem;
    color:var(--gold-dk);
    letter-spacing:.04em;
    transition:color var(--transition);
}
.card-link:hover{color:var(--rust)}

/* ══════════════════════════════════════════════════════════
   ABOUT SECTION
══════════════════════════════════════════════════════════ */
.about-section{
    padding:6rem 0;
    background:var(--ink);
}
.about-inner{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:4rem;
    align-items:center;
}
.about-img-wrap{position:relative}
.about-img{
    border-radius:var(--radius-md);
    height:480px;
    object-fit:cover;
    width:100%;
}
.about-badge-float{
    position:absolute;
    bottom:-1.25rem;right:-1.25rem;
    background:var(--gold);
    color:var(--ink);
    font-weight:700;
    font-size:.85rem;
    padding:.75rem 1.25rem;
    border-radius:var(--radius-sm);
    box-shadow:0 6px 24px rgba(0,0,0,.3);
}
.about-text .section-title{color:var(--parchment)}
.about-text p{color:rgba(245,240,232,.7);margin-bottom:1rem;font-size:.95rem}
.about-text .btn-primary{margin-top:1rem}

/* ══════════════════════════════════════════════════════════
   CONTACT SECTION
══════════════════════════════════════════════════════════ */
.contact-section{padding:6rem 0}
.contact-inner .section-header{margin-bottom:2.5rem}

.contact-form{
    max-width:700px;
    margin:0 auto;
    display:flex;flex-direction:column;gap:1.25rem;
}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
.form-group{display:flex;flex-direction:column;gap:.4rem}
.form-group label{font-size:.85rem;font-weight:500;color:var(--text)}
.form-group input,
.form-group select,
.form-group textarea{
    padding:.75rem 1rem;
    border:1.5px solid #d9d0c0;
    border-radius:var(--radius-sm);
    font-family:var(--ff-body);
    font-size:.95rem;
    color:var(--text);
    background:var(--white);
    transition:border-color var(--transition);
    resize:vertical;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    outline:none;
    border-color:var(--gold);
}
.form-submit{align-self:flex-start}

/* ══════════════════════════════════════════════════════════
   FOOTER
══════════════════════════════════════════════════════════ */
.footer{
    background:var(--ink-soft);
    padding:2.5rem 5%;
    border-top:1px solid rgba(201,168,76,.15);
}
.footer-inner{
    display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem;
}
.footer-brand{
    font-family:var(--ff-display);
    font-size:1.1rem;
    color:var(--gold);
    letter-spacing:.05em;
}
.footer-copy{color:rgba(245,240,232,.4);font-size:.82rem}

/* ══════════════════════════════════════════════════════════
   POP-UP
══════════════════════════════════════════════════════════ */
.popup-overlay{
    position:fixed;inset:0;z-index:9999;
    display:flex;align-items:center;justify-content:center;
    background:rgba(13,12,10,.72);
    backdrop-filter:blur(6px);
    opacity:0;visibility:hidden;
    transition:opacity .35s ease,visibility .35s;
}
.popup-overlay.show{opacity:1;visibility:visible}
.popup-card{
    position:relative;
    background:var(--cream);
    border-radius:var(--radius-lg);
    padding:2.5rem 2rem;
    max-width:440px;width:92%;
    text-align:center;
    box-shadow:var(--shadow-pop);
    border:1px solid rgba(201,168,76,.25);
    transform:translateY(20px) scale(.97);
    transition:transform .35s ease;
}
.popup-overlay.show .popup-card{transform:translateY(0) scale(1)}
.popup-close{
    position:absolute;top:.9rem;right:1rem;
    background:none;border:none;
    font-size:1.4rem;color:var(--muted);
    cursor:pointer;line-height:1;
    transition:color var(--transition);
}
.popup-close:hover{color:var(--rust)}
.popup-icon{font-size:2rem;color:var(--gold);margin-bottom:.75rem}
.popup-title{
    font-family:var(--ff-display);
    font-size:1.5rem;
    color:var(--ink);
    margin-bottom:.75rem;
}
.popup-msg{
    color:var(--muted);
    font-size:.9rem;
    line-height:1.7;
    margin-bottom:1.5rem;
}
.star-rating{
    display:flex;justify-content:center;gap:.35rem;
    font-size:2rem;
    margin-bottom:.5rem;
}
.star{
    color:#d9d0c0;
    cursor:pointer;
    transition:color .15s,transform .15s;
}
.star.active,.star.hover-active{color:var(--gold)}
.star:hover{transform:scale(1.2)}
.rating-label{
    font-size:.8rem;
    color:var(--muted);
    margin-bottom:1.25rem;
    min-height:1.2em;
}
.popup-submit{
    display:inline-block;
    padding:.65rem 1.75rem;
    background:var(--gold);
    color:var(--ink);
    border:none;border-radius:var(--radius-sm);
    font-family:var(--ff-body);
    font-weight:600;font-size:.9rem;
    cursor:pointer;
    transition:background var(--transition),transform var(--transition);
}
.popup-submit:hover{background:var(--gold-lt);transform:translateY(-1px)}

/* ══════════════════════════════════════════════════════════
   RESPONSIVE
══════════════════════════════════════════════════════════ */
@media(max-width:900px){
    .about-inner{grid-template-columns:1fr}
    .about-img{height:300px}
    .about-badge-float{right:.5rem;bottom:.5rem}
}
@media(max-width:640px){
    .nav-toggle{display:block}
    .nav-links{
        display:none;
        position:fixed;top:0;left:0;right:0;bottom:0;
        flex-direction:column;justify-content:center;align-items:center;
        background:rgba(13,12,10,.97);
        gap:2.5rem;
        z-index:800;
    }
    .nav-links.open{display:flex}
    .nav-links a{font-size:1.25rem}
    .form-row{grid-template-columns:1fr}
    .footer-inner{flex-direction:column;text-align:center}
    .hero-actions{flex-direction:column;align-items:center}
}
</style>
</head>
<body>
<!-- NAV -->
<nav class="navbar">
  <a href="#" class="brand">
    <span class="brand-icon">✦</span>
    <span>Rupam <em>Art</em></span>
  </a>
  <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">&#9776;</button>
  <ul class="nav-links" id="navLinks">
    <li><a href="#products">Products</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact" class="nav-cta">Contact Us</a></li>
  </ul>
</nav>

<main>
<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-bg"></div>
  <div class="hero-grain"></div>
  <div class="hero-inner">
    <div class="hero-badge">Est. 2000 · Assam, India</div>
    <h1 class="hero-heading">
      <span class="line-1">Rupam</span>
      <span class="line-2"><em>Art</em></span>
    </h1>
    <p class="hero-tagline">
      Crafting premium signage and refined advertising solutions since 2000 —
      elevating brand visibility to its finest.
    </p>
    <div class="hero-actions">
      <a href="#products" class="btn-primary">Explore Products</a>
      <a href="#contact" class="btn-ghost">Get in Touch</a>
    </div>
  </div>
  <div class="hero-shape s1"></div>
  <div class="hero-shape s2"></div>
  <div class="hero-shape s3"></div>
</section>

<!-- PRODUCTS -->
<section class="products-section" id="products">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Our Offerings</span>
      <h2 class="section-title">What We Create</h2>
      <p class="section-sub">Every piece is crafted with intent — bold enough to stop traffic, refined enough to build trust.</p>
    </div>
    <div class="products-grid">

      <article class="product-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=600&q=80" alt="Art Gallery" class="card-img" loading="lazy"/>
          <div class="card-overlay"><span class="card-icon">🖼️</span></div>
        </div>
        <div class="card-body">
          <h3 class="card-title">Art Gallery</h3>
          <p class="card-desc">Curated fine art and bespoke display solutions that transform any space into a statement.</p>
          <a href="#contact" class="card-link">Enquire →</a>
        </div>
      </article>

      <article class="product-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80" alt="Sign Boards" class="card-img" loading="lazy"/>
          <div class="card-overlay"><span class="card-icon">🪧</span></div>
        </div>
        <div class="card-body">
          <h3 class="card-title">Sign Boards</h3>
          <p class="card-desc">Precision-crafted signage engineered for maximum impact and lasting durability.</p>
          <a href="#contact" class="card-link">Enquire →</a>
        </div>
      </article>

      <article class="product-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1545224144-b38cd309ef69?w=600&q=80" alt="LED Signage" class="card-img" loading="lazy"/>
          <div class="card-overlay"><span class="card-icon">💡</span></div>
        </div>
        <div class="card-body">
          <h3 class="card-title">LED Signage</h3>
          <p class="card-desc">Vibrant, energy-efficient LED displays that command attention day and night.</p>
          <a href="#contact" class="card-link">Enquire →</a>
        </div>
      </article>

      <article class="product-card">
        <div class="card-img-wrap">
          <img src="https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=600&q=80" alt="Advertising Banners" class="card-img" loading="lazy"/>
          <div class="card-overlay"><span class="card-icon">📢</span></div>
        </div>
        <div class="card-body">
          <h3 class="card-title">Advertising Banners</h3>
          <p class="card-desc">Bold, weather-resistant banners that carry your brand message further.</p>
          <a href="#contact" class="card-link">Enquire →</a>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about-section" id="about">
  <div class="container about-inner">
    <div class="about-img-wrap">
      <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Rupam Art workshop" class="about-img"/>
      <div class="about-badge-float">25+ Years of Excellence</div>
    </div>
    <div class="about-text">
      <span class="section-tag">Our Story</span>
      <h2 class="section-title">Built on Craft,<br/>Driven by Vision</h2>
      <p>Since the year 2000, Rupam Art has been at the forefront of signage and advertising in Assam. What started as a small studio has grown into a trusted name for businesses who understand that first impressions are everything.</p>
      <p>From hand-crafted art boards to state-of-the-art LED installations, every project we take on carries the same promise: precision, durability, and visual impact that lasts.</p>
      <a href="#contact" class="btn-primary">Work With Us</a>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact-section" id="contact">
  <div class="container contact-inner">
    <div class="section-header">
      <span class="section-tag">Get In Touch</span>
      <h2 class="section-title">Let's Build Something<br/>Remarkable Together</h2>
    </div>
    <form class="contact-form" id="contactForm" novalidate>
      <div class="form-row">
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="e.g. Priya Sharma" required/>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required/>
        </div>
      </div>
      <div class="form-group">
        <label for="service">Service Interested In</label>
        <select id="service" name="service">
          <option value="">— Select a service —</option>
          <option>🖼️ Art Gallery</option>
          <option>🪧 Sign Boards</option>
          <option>💡 LED Signage</option>
          <option>📢 Advertising Banners</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="4" placeholder="Tell us about your project..."></textarea>
      </div>
      <button type="submit" class="btn-primary form-submit">Send Message →</button>
    </form>
  </div>
</section>
</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-inner">
    <p class="footer-brand">✦ Rupam Art</p>
    <p class="footer-copy">&copy; 2026 Rupam Art. Crafting excellence since 2000.</p>
  </div>
</footer>

<!-- POP-UP (Blade component: resources/views/components/popup.blade.php) -->
<div class="popup-overlay" id="popupOverlay" role="dialog" aria-modal="true" aria-labelledby="popupTitle">
  <div class="popup-card">
    <button class="popup-close" id="popupClose" aria-label="Close">&times;</button>
    <div class="popup-icon">✦</div>
    <h2 class="popup-title" id="popupTitle">Dear Patron,</h2>
    <p class="popup-msg">
      We hope you've found what you are looking for and so, we would love to hear from you.
      Alternatively, you may rate us to help us remain dedicated to what we're doing.
      We thank you, and hope to see you again!
    </p>
    <div class="star-rating" id="starRating" role="group" aria-label="Rate us">
      <span class="star" data-value="1" tabindex="0" role="button" aria-label="1 star">★</span>
      <span class="star" data-value="2" tabindex="0" role="button" aria-label="2 star">★</span>
      <span class="star" data-value="3" tabindex="0" role="button" aria-label="3 star">★</span>
      <span class="star" data-value="4" tabindex="0" role="button" aria-label="4 star">★</span>
      <span class="star" data-value="5" tabindex="0" role="button" aria-label="5 star">★</span>
    </div>
    <p class="rating-label" id="ratingLabel">Tap a star to rate</p>
    <button class="popup-submit" id="popupSubmit">Submit Rating</button>
  </div>
</div>

<script>
/**
 * Rupam Art — public/js/app.js
 * Handles: popup (5-second trigger), star rating, mobile nav
 */
document.addEventListener('DOMContentLoaded', () => {

    /* ── Mobile nav toggle ──────────────────────────────── */
    const toggle   = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');

    if (toggle && navLinks) {
        toggle.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });
        // Close nav when any link is tapped
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => navLinks.classList.remove('open'));
        });
    }

    /* ── Pop-up (show after 5 seconds on page) ──────────── */
    const overlay = document.getElementById('popupOverlay');
    const closeBtn = document.getElementById('popupClose');
    const submitBtn = document.getElementById('popupSubmit');
    const stars = document.querySelectorAll('.star');
    const ratingLabel = document.getElementById('ratingLabel');

    const LABELS = ['', 'Poor', 'Fair', 'Good', 'Great', 'Excellent!'];
    let selectedRating = 0;

    if (overlay) {
        // Trigger after 5 seconds
        setTimeout(() => overlay.classList.add('show'), 5000);

        closeBtn?.addEventListener('click', () => overlay.classList.remove('show'));

        // Close on overlay backdrop click
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) overlay.classList.remove('show');
        });

        // Close on Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') overlay.classList.remove('show');
        });

        /* Star rating */
        stars.forEach(star => {
            star.addEventListener('mouseover', () => {
                const val = +star.dataset.value;
                stars.forEach(s => {
                    s.classList.toggle('hover-active', +s.dataset.value <= val);
                });
                ratingLabel.textContent = LABELS[val];
            });

            star.addEventListener('mouseleave', () => {
                stars.forEach(s => s.classList.remove('hover-active'));
                ratingLabel.textContent = selectedRating
                    ? `You rated us: ${LABELS[selectedRating]}`
                    : 'Tap a star to rate';
            });

            star.addEventListener('click', () => {
                selectedRating = +star.dataset.value;
                stars.forEach(s => {
                    s.classList.toggle('active', +s.dataset.value <= selectedRating);
                });
                ratingLabel.textContent = `You rated us: ${LABELS[selectedRating]}`;
            });

            // Keyboard support
            star.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    star.click();
                }
            });
        });

        submitBtn?.addEventListener('click', () => {
            if (!selectedRating) {
                ratingLabel.textContent = 'Please select a rating first ★';
                return;
            }
            submitBtn.textContent = '✓ Thank you!';
            submitBtn.style.background = '#4caf50';
            submitBtn.disabled = true;
            setTimeout(() => overlay.classList.remove('show'), 1400);
        });
    }

    /* ── Contact form (basic client-side feedback) ──────── */
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = contactForm.querySelector('.form-submit');
            btn.textContent = '✓ Message Sent!';
            btn.style.background = '#4caf50';
            btn.disabled = true;
            setTimeout(() => {
                btn.textContent = 'Send Message →';
                btn.style.background = '';
                btn.disabled = false;
                contactForm.reset();
            }, 3000);
        });
    }

});
</script>
</body>
</html>