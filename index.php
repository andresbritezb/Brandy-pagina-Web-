
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BRANDY | Marca</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Pequeña mejora visual para tipografía */
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-neutral-950 text-neutral-100">
  <!-- Navbar -->
  <header class="sticky top-0 z-50 backdrop-blur bg-neutral-950/70 border-b border-white/10">
    <nav class="mx-auto max-w-6xl px-4 py-3 flex items-center justify-between">
      <a href="#inicio" class="flex items-center gap-3 font-semibold tracking-wide">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-pink-500 via-purple-500 to-indigo-500 shadow-lg">
          <span class="text-sm">B</span>
        </span>
        <span class="text-lg">BRANDY</span>
      </a>

      <div class="hidden md:flex items-center gap-6 text-sm text-neutral-200">
        <a class="hover:text-white" href="#productos">Productos</a>
        <a class="hover:text-white" href="#acerca">Acerca</a>
        <a class="hover:text-white" href="#testimonios">Testimonios</a>
        <a class="hover:text-white" href="#contacto">Contacto</a>
      </div>

      <a href="#contacto" class="inline-flex items-center justify-center rounded-xl px-4 py-2 text-sm font-medium bg-white text-neutral-950 hover:bg-neutral-200 transition">
        Cotizar
      </a>
    </nav>
  </header>

  <!-- Hero -->
  <main id="inicio">
    <section class="relative overflow-hidden">
      <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-pink-500/20 blur-3xl"></div>
      <div class="absolute -top-20 right-0 h-96 w-96 rounded-full bg-indigo-500/20 blur-3xl"></div>

      <div class="mx-auto max-w-6xl px-4 pt-16 pb-12 md:pt-20 md:pb-16 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
          <div>
            <p class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-neutral-200">
              <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
              Calidad
            </p>
            <h1 class="mt-4 text-4xl md:text-5xl font-semibold leading-tight">
              La marca que eleva tu estilo.
              <span class="block text-transparent bg-clip-text bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-400">
                BRANDY
              </span>
            </h1>
            <p class="mt-4 text-neutral-300 text-base md:text-lg">
              Creamos productos y soluciones pensadas para destacar. Desde la primera impresión hasta el último detalle.
            </p>

            <div class="mt-7 flex flex-col sm:flex-row gap-3">
              <a href="#productos" class="inline-flex items-center justify-center rounded-xl px-5 py-3 text-sm font-semibold bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 hover:opacity-95 transition">
                Ver productos
              </a>
              <a href="#acerca" class="inline-flex items-center justify-center rounded-xl px-5 py-3 text-sm font-semibold border border-white/15 bg-white/5 hover:bg-white/10 transition">
                Conocer la marca
              </a>
            </div>

            <div class="mt-8 grid grid-cols-3 gap-4">
              <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <div class="text-xl font-semibold">+120</div>
                <div class="text-xs text-neutral-300">Clientes</div>
              </div>
              <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <div class="text-xl font-semibold">4.9/5</div>
                <div class="text-xs text-neutral-300">Satisfacción</div>
              </div>
              <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <div class="text-xl font-semibold">24/7</div>
                <div class="text-xs text-neutral-300">Atención</div>
              </div>
            </div>
          </div>

          <div class="relative">
            <div class="rounded-3xl border border-white/10 bg-white/5 p-4">
              <div class="rounded-2xl overflow-hidden border border-white/10 bg-neutral-900">
                <div class="h-56 md:h-72 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-pink-500/40 via-purple-500/20 to-indigo-500/10"></div>
                <div class="p-5">
                  <div class="flex items-start justify-between gap-4">
                    <div>
                      <p class="text-sm text-neutral-300">Colección destacada</p>
                      <h3 class="mt-1 text-lg font-semibold">BRANDY Essentials</h3>
                    </div>
                    <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-neutral-200">Nuevo</span>
                  </div>

                  <div class="mt-4 grid grid-cols-2 gap-3">
                    <div class="rounded-xl border border-white/10 bg-white/5 p-3">
                      <div class="text-sm font-semibold">Materiales</div>
                      <div class="text-xs text-neutral-300 mt-1">Premium</div>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 p-3">
                      <div class="text-sm font-semibold">Diseño</div>
                      <div class="text-xs text-neutral-300 mt-1">Contemporáneo</div>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 p-3">
                      <div class="text-sm font-semibold">Envíos</div>
                      <div class="text-xs text-neutral-300 mt-1">Rápidos</div>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 p-3">
                      <div class="text-sm font-semibold">Soporte</div>
                      <div class="text-xs text-neutral-300 mt-1">Personalizado</div>
                    </div>
                  </div>

                  <div class="mt-5">
                    <a href="#contacto" class="w-full inline-flex items-center justify-center rounded-xl px-4 py-3 text-sm font-semibold bg-white text-neutral-950 hover:bg-neutral-200 transition">
                      Hablar con asesor
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4 rounded-2xl border border-white/10 bg-white/5 p-4 hidden lg:block">
              <div class="text-xs text-neutral-300">Tiempo promedio</div>
              <div class="mt-1 text-2xl font-semibold">48h</div>
              <div class="mt-2 text-xs text-neutral-300">Desde la cotización hasta la propuesta.</div>
              <div class="mt-3 h-2 rounded-full bg-white/10 overflow-hidden">
                <div class="h-full w-[72%] rounded-full bg-gradient-to-r from-pink-500 to-indigo-500"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Productos -->
    <section id="productos" class="mx-auto max-w-6xl px-4 py-12 md:py-16">
      <div class="flex items-end justify-between gap-6">
        <div>
          <h2 class="text-2xl md:text-3xl font-semibold">Productos</h2>
          <p class="mt-2 text-neutral-300">Selección pensada para acompañarte en cada momento.</p>
        </div>
        <a href="#contacto" class="hidden sm:inline-flex items-center justify-center rounded-xl px-4 py-2 text-sm font-semibold border border-white/15 bg-white/5 hover:bg-white/10 transition">Solicitar catálogo</a>
      </div>

      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <?php
        $cards = [
          [
            'title' => 'BRANDY Wear',
            'desc'  => 'Ropa y básicos con estilo definido.',
            'tag'   => 'Popular',
            'accent' => 'from-pink-500/40 via-purple-500/20 to-indigo-500/10',
          ],
          [
            'title' => 'BRANDY Studio',
            'desc'  => 'Accesorios de diseño para el día a día.',
            'tag'   => 'Nuevo',
            'accent' => 'from-indigo-500/40 via-purple-500/20 to-pink-500/10',
          ],
          [
            'title' => 'BRANDY Care',
            'desc'  => 'Cuidado y mantenimiento para que dure más.',
            'tag'   => 'Premium',
            'accent' => 'from-emerald-500/30 via-indigo-500/20 to-pink-500/10',
          ],
        ];
        foreach ($cards as $c) {
        ?>
          <article class="rounded-3xl border border-white/10 bg-white/5 overflow-hidden hover:border-white/20 transition">
            <div class="h-32 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] bg-gradient-to-r <?php echo htmlspecialchars($c['accent']); ?>"></div>
            <div class="p-6">
              <div class="flex items-start justify-between gap-4">
                <div>
                  <h3 class="text-lg font-semibold"><?php echo htmlspecialchars($c['title']); ?></h3>
                  <p class="mt-2 text-sm text-neutral-300"><?php echo htmlspecialchars($c['desc']); ?></p>
                </div>
                <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-neutral-200"><?php echo htmlspecialchars($c['tag']); ?></span>
              </div>
              <div class="mt-5">
                <a class="inline-flex w-full items-center justify-center rounded-xl px-4 py-2 text-sm font-semibold bg-white/10 border border-white/15 hover:bg-white/15 transition" href="#contacto">
                  Consultar disponibilidad
                </a>
              </div>
            </div>
          </article>
        <?php } ?>
      </div>
    </section>

    <!-- Acerca -->
    <section id="acerca" class="mx-auto max-w-6xl px-4 py-12 md:py-16">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div>
          <h2 class="text-2xl md:text-3xl font-semibold">Acerca de BRANDY</h2>
          <p class="mt-3 text-neutral-300 leading-relaxed">
            Somos una marca enfocada en crear experiencias: productos con personalidad, calidad constante y un enfoque cercano al cliente.
            Diseñamos para que te sientas bien desde el primer uso.
          </p>

          <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
              <div class="text-sm font-semibold">Diseño</div>
              <div class="text-sm text-neutral-300 mt-1">Estética moderna y materiales pensados.</div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
              <div class="text-sm font-semibold">Calidad</div>
              <div class="text-sm text-neutral-300 mt-1">Control y acabado para durar.</div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
              <div class="text-sm font-semibold">Servicio</div>
              <div class="text-sm text-neutral-300 mt-1">Asesoría y atención rápida.</div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
              <div class="text-sm font-semibold">Envíos</div>
              <div class="text-sm text-neutral-300 mt-1">Entrega eficiente y seguimiento.</div>
            </div>
          </div>
        </div>

        <div class="rounded-3xl border border-white/10 bg-white/5 p-4">
          <div class="rounded-2xl border border-white/10 bg-neutral-900 overflow-hidden">
            <div class="h-56 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-pink-500/30 via-purple-500/20 to-indigo-500/10"></div>
            <div class="p-6">
              <h3 class="text-lg font-semibold">Nuestra propuesta</h3>
              <p class="mt-2 text-neutral-300 text-sm">
                Te ayudamos a elegir, recomendar y sacar el mejor provecho de la marca.
              </p>
              <ul class="mt-4 space-y-3 text-sm text-neutral-200">
                <li class="flex gap-3">
                  <span class="mt-0.5 h-5 w-5 inline-flex items-center justify-center rounded-lg bg-gradient-to-r from-pink-500 to-indigo-500">✓</span>
                  <span>Catálogo claro con opciones por estilo y necesidad.</span>
                </li>
                <li class="flex gap-3">
                  <span class="mt-0.5 h-5 w-5 inline-flex items-center justify-center rounded-lg bg-gradient-to-r from-pink-500 to-indigo-500">✓</span>
                  <span>Respuesta rápida y acompañamiento durante la compra.</span>
                </li>
                <li class="flex gap-3">
                  <span class="mt-0.5 h-5 w-5 inline-flex items-center justify-center rounded-lg bg-gradient-to-r from-pink-500 to-indigo-500">✓</span>
                  <span>Soporte postventa con seguimiento.</span>
                </li>
              </ul>

              <div class="mt-6">
                <a href="#contacto" class="inline-flex w-full items-center justify-center rounded-xl px-4 py-3 text-sm font-semibold bg-white text-neutral-950 hover:bg-neutral-200 transition">
                  Contactar ahora
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="mx-auto max-w-6xl px-4 py-12 md:py-16">
      <div class="flex items-end justify-between gap-6">
        <div>
          <h2 class="text-2xl md:text-3xl font-semibold">Testimonios</h2>
          <p class="mt-2 text-neutral-300">Lo que dicen nuestros clientes.</p>
        </div>
      </div>

      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-5">
        <?php
        $testimonios = [
          ['name'=>'Lucía', 'text'=>'Excelente calidad y atención. Se nota el detalle en cada producto.', 'rating'=>5],
          ['name'=>'Marcos', 'text'=>'Muy buen diseño. Llegó rápido y la experiencia fue impecable.', 'rating'=>5],
          ['name'=>'Sofía', 'text'=>'Me ayudaron a elegir y todo quedó perfecto. Recomendadísimo.', 'rating'=>5],
        ];
        foreach ($testimonios as $t) {
        ?>
          <article class="rounded-3xl border border-white/10 bg-white/5 p-6">
            <div class="flex items-center justify-between gap-4">
              <h3 class="text-lg font-semibold"><?php echo htmlspecialchars($t['name']); ?></h3>
              <div class="flex gap-1">
                <?php for($i=0;$i<$t['rating'];$i++){ ?>
                  <span class="text-yellow-300">★</span>
                <?php } ?>
              </div>
            </div>
            <p class="mt-4 text-sm text-neutral-300 leading-relaxed">“<?php echo htmlspecialchars($t['text']); ?>”</p>
          </article>
        <?php } ?>
      </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="mx-auto max-w-6xl px-4 py-12 md:py-16">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
          <h2 class="text-2xl md:text-3xl font-semibold">Contacto</h2>
          <p class="mt-2 text-neutral-300">Escríbenos y te respondemos a la brevedad.</p>

          <div class="mt-6 space-y-3 text-sm text-neutral-200">
            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-4">
              <span class="h-10 w-10 rounded-xl bg-gradient-to-br from-pink-500 to-indigo-500 inline-flex items-center justify-center">📍</span>
              <div>
                <div class="font-semibold">Ubicación</div>
                <div class="text-neutral-300">Ciudad, País</div>
              </div>
            </div>
            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-4">
              <span class="h-10 w-10 rounded-xl bg-gradient-to-br from-pink-500 to-indigo-500 inline-flex items-center justify-center">✉️</span>
              <div>
                <div class="font-semibold">Email</div>
                <div class="text-neutral-300">hola@brandy.com</div>
              </div>
            </div>
            <div class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/5 p-4">
              <span class="h-10 w-10 rounded-xl bg-gradient-to-br from-pink-500 to-indigo-500 inline-flex items-center justify-center">📞</span>
              <div>
                <div class="font-semibold">Teléfono</div>
                <div class="text-neutral-300">+00 000 000 000</div>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-3xl border border-white/10 bg-white/5 p-4">
          <form method="post" action="">
            <div class="rounded-2xl border border-white/10 bg-neutral-900 p-6">
              <h3 class="text-lg font-semibold">Solicitar información</h3>
              <p class="mt-2 text-sm text-neutral-300">Este formulario es de ejemplo (no envía correo).</p>

              <?php
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombre = trim($_POST['nombre'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $mensaje = trim($_POST['mensaje'] ?? '');

                echo "<div class='mt-5 rounded-2xl border border-emerald-500/30 bg-emerald-500/10 p-4 text-sm text-emerald-200'>";
                echo "Gracias, ".htmlspecialchars($nombre ?: 'persona').'! Tu mensaje fue recibido (demo).';
                echo "</div>";

                echo "<pre class=\"mt-4 text-xs text-neutral-400 bg-white/5 border border-white/10 rounded-2xl p-4 overflow-auto\">";
                echo "EMAIL: ".htmlspecialchars($email)."\n";
                echo "MENSAJE: ".htmlspecialchars($mensaje)."";
                echo "</pre>";
              }
              ?>

              <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs text-neutral-300">Nombre</label>
                  <input name="nombre" required class="mt-2 w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm outline-none focus:border-white/30" placeholder="Tu nombre" />
                </div>
                <div>
                  <label class="block text-xs text-neutral-300">Email</label>
                  <input type="email" name="email" required class="mt-2 w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm outline-none focus:border-white/30" placeholder="tu@email.com" />
                </div>
              </div>

              <div class="mt-4">
                <label class="block text-xs text-neutral-300">Mensaje</label>
                <textarea name="mensaje" required rows="4" class="mt-2 w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm outline-none focus:border-white/30" placeholder="Cuéntanos qué necesitas..."></textarea>
              </div>

              <div class="mt-5 flex flex-col sm:flex-row gap-3">
                <button type="submit" class="inline-flex items-center justify-center rounded-xl px-4 py-3 text-sm font-semibold bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 hover:opacity-95 transition">
                  Enviar mensaje
                </button>
                <a href="#productos" class="inline-flex items-center justify-center rounded-xl px-4 py-3 text-sm font-semibold border border-white/15 bg-white/5 hover:bg-white/10 transition">
                  Ver productos
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="border-t border-white/10">
    <div class="mx-auto max-w-6xl px-4 py-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
      <div>
        <div class="flex items-center gap-3">
          <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-pink-500 via-purple-500 to-indigo-500 shadow-lg">B</span>
          <span class="font-semibold">BRANDY</span>
        </div>
        <p class="mt-2 text-sm text-neutral-400">© BRANDY. Todos los derechos reservados.</p>
      </div>
      <div class="flex gap-4 text-sm">
        <a class="text-neutral-300 hover:text-white" href="#inicio">Inicio</a>
        <a class="text-neutral-300 hover:text-white" href="#productos">Productos</a>
        <a class="text-neutral-300 hover:text-white" href="#contacto">Contacto</a>
      </div>
    </div>
  </footer>
</body>
</html>

