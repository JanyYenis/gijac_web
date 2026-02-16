<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GIJAC WEB</title>
    <meta name="description" content="GIJAC WEB: Desarrollo web, automatización de procesos e implementación de chatbots con inteligencia artificial. Innovamos tu mundo digital." />
    <meta name="keywords"
        content="tailwind, tailwindcss, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
        Node.js, Flask, Symfony &amp; Laravel starter kits, admin themes, web design, figma, web development, free templates,
        free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
        bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="article">
    <meta property="og:title" content="GIJAC WEB - Te ayudamos a crecer">
    <meta property="og:url" content="https://keenthemes.com/metronic">
    <meta property="og:site_name" content="GIJAC WEB">
    <link rel="shortcut icon" href="{{ asset('build/img/logo_mini.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
     @vite([
        'resources/js/app.js',
        'resources/css/style.css',
        'resources/js/script.js'
    ])

    <link rel="shortcut icon" href="{{ asset('build/img/logo_mini.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <a class="skip-link" href="#inicio">Saltar al contenido</a>
    <header id="header" class="site-header" aria-label="Encabezado principal">
      <div class="container nav-wrap">
        <a href="#inicio" class="brand" aria-label="Ir al inicio">
          <img src="{{ asset('build/img/logo_mini.png') }}" alt="Logo de GIJAC WEB" width="40" height="40" />
          <span class="brand-text">GIJAC WEB</span>
        </a>

        <nav class="nav" aria-label="Navegación principal">
          <button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="Abrir menú">
            <span class="sr-only">Abrir menú</span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </button>
          <ul id="primary-menu" class="menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#sobre">Sobre nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#testimonios">Testimonios</a></li>
            <li><a class="btn-primary btn-sm" href="#contacto">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main id="inicio">
      <section class="section-hero">
        <div class="container hero-grid">
          <div class="hero-content reveal">
            <h1 class="gradient-text">Innovamos tu mundo digital</h1>
            <p class="lead">
              Desarrollo web a medida, automatización de procesos y chatbots con inteligencia artificial para escalar tu negocio.
            </p>
            <div class="hero-cta">
              <a href="#contacto" class="btn-primary">Habla con nosotros</a>
              <a href="#servicios" class="btn-ghost">Ver servicios</a>
            </div>
            <ul class="hero-highlights">
              <li>Soluciones modernas y seguras</li>
              <li>Integraciones con WhatsApp Business</li>
              <li>Enfoque en resultados medibles</li>
            </ul>
          </div>
          <div class="hero-art reveal delay-1" aria-hidden="true">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="grid-lines">
                <img src="{{ asset('build/img/img1.png') }}">
            </div>
          </div>
        </div>
      </section>
      <section id="sobre" class="section about">
        <div class="container">
          <div class="section-head reveal">
            <span class="eyebrow">Quiénes somos</span>
            <h2>Sobre GIJAC WEB</h2>
            <p class="section-desc">
              Somos un equipo especializado en construir experiencias digitales de alto impacto. Combinamos diseño, desarrollo e inteligencia artificial para crear productos que impulsan tu crecimiento.
            </p>
          </div>

          <div class="about-cards">
            <article class="card reveal">
              <h3>Misión</h3>
              <p>
                Potenciar a las empresas mediante soluciones tecnológicas simples, eficientes y escalables que mejoren sus procesos y la relación con sus clientes.
              </p>
            </article>
            <article class="card reveal delay-1">
              <h3>Visión</h3>
              <p>
                Ser referentes en innovación digital en Latinoamérica, impulsando la adopción inteligente de IA y automatización en organizaciones de todos los tamaños.
              </p>
            </article>
            <article class="card reveal delay-2">
              <h3>Valores</h3>
              <p>
                Transparencia, excelencia técnica, aprendizaje continuo y compromiso con resultados.
              </p>
            </article>
          </div>
        </div>
      </section>
      <section id="servicios" class="section services">
        <div class="container">
          <div class="section-head center reveal">
            <span class="eyebrow">Qué hacemos</span>
            <h2>Servicios</h2>
            <p class="section-desc">
              Te acompañamos de punta a punta: estrategia, diseño, desarrollo, implementación y soporte.
            </p>
          </div>

          <div class="services-grid">
            <article class="service-card reveal">
              <div class="icon">
                <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true">
                  <defs>
                    <linearGradient id="grad1" x1="0" y1="0" x2="1" y2="1">
                      <stop offset="0%" stop-color="#00AEEF" />
                      <stop offset="100%" stop-color="#005F99" />
                    </linearGradient>
                  </defs>
                  <path fill="url(#grad1)" d="M3 4h18v14H3zM3 4l9 7 9-7M7 20h10" stroke="none"/>
                </svg>
              </div>
              <h3>Desarrollo Web</h3>
              <p>Sitios y aplicaciones rápidas, accesibles y optimizadas para SEO.</p>
            </article>

            <article class="service-card reveal delay-1">
              <div class="icon">
                <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true">
                  <defs>
                    <linearGradient id="grad2" x1="0" y1="0" x2="1" y2="1">
                      <stop offset="0%" stop-color="#00AEEF" />
                      <stop offset="100%" stop-color="#005F99" />
                    </linearGradient>
                  </defs>
                  <path fill="url(#grad2)" d="M12 2a7 7 0 0 0-7 7v3a7 7 0 0 0 7 7h1l3 3v-3a7 7 0 0 0 3-6V9a7 7 0 0 0-7-7z"/>
                </svg>
              </div>
              <h3>Chatbots con IA</h3>
              <p>Atención 24/7, generación de leads y soporte inteligente integrado a tus canales.</p>
            </article>

            <article class="service-card reveal delay-2">
              <div class="icon">
                <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true">
                  <defs>
                    <linearGradient id="grad3" x1="0" y1="0" x2="1" y2="1">
                      <stop offset="0%" stop-color="#00AEEF" />
                      <stop offset="100%" stop-color="#005F99" />
                    </linearGradient>
                  </defs>
                  <path fill="url(#grad3)" d="M10 2h4v4h-4zM4 10h4v4H4zm12 0h4v4h-4zM10 18h4v4h-4zM8 12h8v2H8z"/>
                </svg>
              </div>
              <h3>Automatización de Procesos</h3>
              <p>Integra y orquesta herramientas para reducir tareas repetitivas y errores.</p>
            </article>

            <article class="service-card reveal delay-3">
              <div class="icon">
                <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true">
                  <defs>
                    <linearGradient id="grad4" x1="0" y1="0" x2="1" y2="1">
                      <stop offset="0%" stop-color="#00AEEF" />
                      <stop offset="100%" stop-color="#005F99" />
                    </linearGradient>
                  </defs>
                  <path fill="url(#grad4)" d="M20 3H4a1 1 0 0 0-1 1v16l4-3h13a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"/>
                  <circle cx="8" cy="10" r="1.5" fill="#0B1A24"/>
                  <circle cx="12" cy="10" r="1.5" fill="#0B1A24"/>
                  <circle cx="16" cy="10" r="1.5" fill="#0B1A24"/>
                </svg>
              </div>
              <h3>Integraciones con WhatsApp Business</h3>
              <p>Conecta tu canal más usado con bots, CRM y flujos automatizados.</p>
            </article>
          </div>
        </div>
      </section>
      <section id="proyectos" class="section projects">
        <div class="container">
          <div class="section-head reveal">
            <span class="eyebrow">Casos reales</span>
            <h2>Proyectos</h2>
            <p class="section-desc">Algunos ejemplos de nuestro trabajo. Reemplaza las imágenes por tus propias capturas.</p>
          </div>

          <div class="projects-grid">
            <a class="project-card reveal" href="#" aria-label="Proyecto 1 (enlace de ejemplo)">
              <img src="{{ asset('build/img/proyectos/ekomeritos.png') }}" alt="Proyecto 1: EcoRecicla" />
              <div class="overlay">
                <h3>EcoRecicla</h3>
                <p>Plataforma para la recolección de materiales reciclables.</p>
              </div>
            </a>

            <a class="project-card reveal delay-1" href="#" aria-label="Proyecto 2 (enlace de ejemplo)">
              <img src="{{ asset('build/img/proyectos/GMB.png') }}" alt="Proyecto 2: GIJAC MESSAGE BUISNESS"/>
              <div class="overlay">
                <h3>GIJAC MESSAGE BUISNESS</h3>
                <p>La app que te ayudará a mejorar la comunicación con tus clientes por el canal más importante, WhatsApp.</p>
              </div>
            </a>
            {{-- <a class="project-card reveal delay-2" href="#" aria-label="Proyecto 3 (enlace de ejemplo)">
              <img src="img/portfolio-3.svg" alt="Proyecto 3: Chatbot IA" />
              <div class="overlay">
                <h3>Chatbot IA</h3>
                <p>Atención al cliente 24/7</p>
              </div>
            </a> --}}
          </div>
        </div>
      </section>
      <section id="testimonios" class="section testimonials">
        <div class="container">
          <div class="section-head center reveal">
            <span class="eyebrow">Confianza</span>
            <h2>Testimonios</h2>
          </div>

          <div class="testimonials-grid">
            <figure class="testimonial-card reveal">
              <blockquote>
                “El nuevo sitio aumentó nuestras conversiones en un 35%. Equipo ágil y muy profesional.”
              </blockquote>
              <figcaption>
                <span class="name">Luis Marin</span>
                <span class="role">CEO, Reciiclar</span>
              </figcaption>
            </figure>

            <figure class="testimonial-card reveal delay-1">
              <blockquote>
                “Automatizamos procesos clave y ahorramos horas semanales. La integración con WhatsApp fue clave.”
              </blockquote>
              <figcaption>
                <span class="name">Carlos Pérez</span>
                <span class="role">COO, LogiPlus</span>
              </figcaption>
            </figure>

            <figure class="testimonial-card reveal delay-2">
              <blockquote>
                “El chatbot con IA redujo tickets y mejoró la satisfacción del cliente. Recomendados.”
              </blockquote>
              <figcaption>
                <span class="name">Ana Rodríguez</span>
                <span class="role">CX Lead, CareCo</span>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <section id="contacto" class="section contact">
        <div class="container">
          <div class="section-head reveal">
            <span class="eyebrow">Hablemos</span>
            <h2>Contacto</h2>
            <p class="section-desc">Cuéntanos sobre tu proyecto y te responderemos a la brevedad.</p>
          </div>

          <div class="contact-grid">
            <form id="contact-form" class="contact-form reveal" novalidate>
              <div class="form-field">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required minlength="3" />
                <small class="error-msg" aria-live="polite"></small>
              </div>

              <div class="form-field">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required />
                <small class="error-msg" aria-live="polite"></small>
              </div>

              <div class="form-field">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" placeholder="Cuéntanos sobre tu idea" rows="5" required minlength="10"></textarea>
                <small class="error-msg" aria-live="polite"></small>
              </div>

              <button type="submit" class="btn-primary full">Enviar mensaje</button>
              <p id="form-status" class="form-status" role="status" aria-live="polite"></p>
            </form>

            <aside class="contact-info reveal delay-1">
              <div class="info-card">
                <h3>Información</h3>
                <ul class="info-list">
                  <li>
                    <span class="info-label">Correo</span>
                    <a href="mailto:info@gijac.co">info@gijac.co</a>
                  </li>
                  <li>
                    <span class="info-label">Teléfono</span>
                    <a href="tel:+573171789584">+57 (317) - 178- 9584</a>
                  </li>
                  <li>
                    <span class="info-label">Dirección</span>
                    <span>Corregimiento de Navarro, callejón El Recuerdo</span>
                  </li>
                </ul>
              </div>

              <div class="info-card">
                <h3>Redes</h3>
                <div class="socials">
                  <a href="#" aria-label="LinkedIn">
                    <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true">
                      <defs>
                        <linearGradient id="grad-link" x1="0" y1="0" x2="1" y2="1">
                          <stop offset="0%" stop-color="#00AEEF" />
                          <stop offset="100%" stop-color="#005F99" />
                        </linearGradient>
                      </defs>
                      <path fill="url(#grad-link)" d="M4 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM3 8h2v13H3zM9 8h4v2h.1c.6-1.1 2-2.2 4.1-2.2 4.4 0 5.2 2.9 5.2 6.6V21h-2v-5.5c0-1.3 0-3-1.8-3s-2.1 1.4-2.1 2.9V21h-2V8H9z"/>
                    </svg>
                  </a>
                  <a href="#" aria-label="X">
                    <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true">
                      <defs>
                        <linearGradient id="grad-x" x1="0" y1="0" x2="1" y2="1">
                          <stop offset="0%" stop-color="#00AEEF" />
                          <stop offset="100%" stop-color="#005F99" />
                        </linearGradient>
                      </defs>
                      <path fill="url(#grad-x)" d="M3 3h5.5l4.3 6L18.5 3H21l-7 9 7 9h-5.5l-4.3-6-5.7 6H3l7-9z"/>
                    </svg>
                  </a>
                  <a href="#" aria-label="WhatsApp">
                    <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true">
                      <defs>
                        <linearGradient id="grad-wa" x1="0" y1="0" x2="1" y2="1">
                          <stop offset="0%" stop-color="#00AEEF" />
                          <stop offset="100%" stop-color="#005F99" />
                        </linearGradient>
                      </defs>
                      <path fill="url(#grad-wa)" d="M20 3.9A10 10 0 0 1 3.5 19.9L2 22l2.3-.6A10 10 0 1 1 20 3.9zM7.9 7.7c.2-.4.5-.4.7-.4h.6c.2 0 .4 0 .6.4.2.4.8 1.9.8 1.9s.1.3-.1.5l-.5.6c-.1.1-.2.3 0 .6.2.3.8 1.3 1.9 2 .9.5 1.3.4 1.5.2l.6-.7c.1-.1.3-.2.6-.1.2.1 1.9.9 1.9.9.2.1.3.1.4.2.1.2.1.5 0 .9-.1.4-.7 1.3-1.6 1.5-.8.2-2.1.1-3.7-.8-1.9-1-3.1-2.7-3.4-3.2-.3-.4-1-1.6-1-2.9 0-1.3.6-2.1.8-2.3z"/>
                    </svg>
                  </a>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>
    </main>
    <footer class="site-footer" role="contentinfo">
      <div class="container footer-grid">
        <div class="footer-brand">
          <img src="{{ asset('build/img/logo.png') }}" alt="Logo de GIJAC WEB" width="45" height="45" />
          <span>GIJAC WEB</span>
        </div>
        <div class="footer-meta">
          <span>© <span id="year"></span> GIJAC WEB. Todos los derechos reservados.</span>
        </div>
        <ul class="footer-links">
          <li><a href="#sobre">Sobre</a></li>
          <li><a href="#servicios">Servicios</a></li>
          <li><a href="#proyectos">Proyectos</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
