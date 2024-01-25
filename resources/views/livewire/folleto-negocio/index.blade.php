<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header">
                    <!-- Fondo -->
                    <div class="background"></div>
                    <!-- Fondo -->

                    <nav class="navbar navbar-expand-lg p-3">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><div class="bg-white rounded-pill px-4 py-2"><img src="{{ asset('assets/img/general/logo-nikken.png') }}" srcset="{{ asset('assets/img/general/logo-nikken-2x.png') }} 2x" class="img-fluid" alt="Logo NIKKEN Latinoamérica"></div></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ms-auto navbar-dark bg-dark">
                                    <li class="nav-item"><a class="nav-link mx-2 active" href="#">Bienvenida</a></li>
                                    <li class="nav-item"><a class="nav-link mx-2 active" href="#">¿Quiénes somos?</a></li>
                                    <li class="nav-item"><a class="nav-link mx-2 active" href="#">Emprendedor</a></li>
                                    <li class="nav-item"><a class="nav-link mx-2 active" href="#">Empresario</a></li>
                                    <li class="nav-item"><a class="nav-link mx-2 active" href="#">Ruta del Éxito</a></li>

                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link mx-2 dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Blog</a></li>
                                            <li><a class="dropdown-item" href="#">About Us</a></li>
                                            <li><a class="dropdown-item" href="#">Contact us</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="row">
                        <div class="col">
                            <div class="p-5 m-5 content">
                                <h1 class="text-white fw-light text-uppercase mb-4">Mi folleto de <span class="fw-bold d-block">negocio</span></h1>
                                <p class="text-white custom text-justify">¡Felicidades! Por haber elegido ser parte de la comunidad de Bienestar más grande del mundo. En NIKKEN® nos sentimos felices cada vez que alguien como tú decide iniciar su negocio, gente entregada y entusiasta por mejorar el mundo y por dar a conocer contribuir a mejorar la calidad de vida de más personas.</p>
                            </div>
                        </div>

                        <div class="col position-relative"><img src="{{ asset('assets/img/general/bienvenida.png') }}" srcset="{{ asset('assets/img/general/bienvenida-2x.png') }} 2x" class="position-absolute banner" alt="Mi Folleto de Negocio"></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="step-1">
            <div class="row row-cols-4 mt-5">
                <div class="col-6 position-relative"><img src="{{ asset('assets/img/general/pilares-bienestar.png') }}" srcset="{{ asset('assets/img/general/pilares-bienestar-2x.png') }} 2x" class="img-fluid position-absolute start-0 end-0 mx-auto" alt="Pilares del Bienestar"></div>

                <div class="col-6">
                    <div class="p-5">
                        <h2 class="text-success fw-bold text-center my-4">¿Quiénes somos?</h2>
                        <p class="custom text-justify">Somos una comunidad colaborativa enfocada en el bienestar del ser humano con un concepto integral. Nuestro propósito de transformación invita a las personas a mejorar su calidad de vida a través del cuidado de los <strong>5 Pilares del Bienestar: Mente, Cuerpo, Familia, Finanzas y Sociedad</strong>.</p>
                    </div>
                </div>

                <div class="col-6 bg-light">
                    <div class="p-5">
                        <h2 class="text-success fw-bold text-center my-4">Nuestra Historia</h2>
                        <p class="custom text-justify">En 1975 nació NIKKEN® en Fukuoka- Japón como una compañía enfocada en el bienestar integral del ser humano.</p>

                        <ul>
                            <li><span class="fw-bold">Nuestra inspiración</span> es la naturaleza y su equilibrio.</li>
                            <li><span class="fw-bold">Nuestra filosofía</span> basada en la prevención y en ser mejores seres humanos.</li>
                        </ul>

                        <p class="custom text-justify">La historia de NIKKEN® está inspirada en la sencilla pero profunda filosofía japonesa basada en la prevención y el equilibrio. Vivir en balance es posible a través de las <span class="fw-bold">5 Fuentes de Energía Vital</span>:</p>

                        <div class="text-center">
                            <img src="{{ asset('assets/img/general/logo-aire.png') }}" srcset="{{ asset('assets/img/general/logo-aire-2x.png') }} 2x" class="img-fluid mx-2 mx-xxl-3 mt-4" alt="Logo Aire">
                            <img src="{{ asset('assets/img/general/logo-agua.png') }}" srcset="{{ asset('assets/img/general/logo-agua-2x.png') }} 2x" class="img-fluid mx-2 mx-xxl-3 mt-4" alt="Logo Agua">
                            <img src="{{ asset('assets/img/general/logo-luz.png') }}" srcset="{{ asset('assets/img/general/logo-luz-2x.png') }} 2x" class="img-fluid mx-2 mx-xxl-3 mt-4" alt="Logo Luz">
                            <img src="{{ asset('assets/img/general/logo-descanso.png') }}" srcset="{{ asset('assets/img/general/logo-descanso-2x.png') }} 2x" class="img-fluid mx-2 mx-xxl-3 mt-4" alt="Logo Descanso">
                            <img src="{{ asset('assets/img/general/logo-nutricion.png') }}" srcset="{{ asset('assets/img/general/logo-nutricion-2x.png') }} 2x" class="img-fluid mx-2 mx-xxl-3 mt-4" alt="Logo Nutrición">
                        </div>
                    </div>
                </div>

                <div class="col-6 bg-light border-bottom-right-radius">
                    <div class="p-5">
                        <h2 class="text-success fw-bold text-center my-4">Compromiso</h2>
                        <p class="custom text-justify">Nuestro compromiso en NIKKEN® es acompañarte a descubrir cómo puedes impactar  al mundo a través de la vivencia de una misión personal que te permita vivir en balance.</p>
                        <p class="custom text-justify">El primer paso para marcar la diferencia y alcanzar tus metas, radica en <span class="fw-bold">definir y vivir una misión personal</span> que te permita precisar el impacto que deseas generar en tu vida, en quienes te rodean y en el mundo.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="step-2">
            <div class="row mt-5">
                <div class="col position-relative"><img src="{{ asset('assets/img/general/motivacion-negocio.png') }}" srcset="{{ asset('assets/img/general/motivacion-negocio-2x.png') }} 2x" class="position-absolute custom z-index-1" alt="Dale un Motivo a tu Negocio"></div>

                <div class="col">
                    <div class="text-end mb-5 pb-3"><img src="{{ asset('assets/img/general/paso-1.png') }}" srcset="{{ asset('assets/img/general/paso-1-2x.png') }} 2x" class="img-fluid" alt="Paso 1"></div>

                    <div class="content">
                        <p class="fw-bold">Para construir un negocio se requiere esfuerzo y disciplina.</p>
                        <p class="custom text-justify">Una de las cosas que más nos motiva a dar ese esfuerzo extra es tener muy porqué estamos haciendo las comas. ¿Qué es lo que vamos a obtener a cambio de nuestro trabajo?</p>
                    </div>

                    <div class="bg-light position-relative border-bottom-left-radius">
                        <img src="{{ asset('assets/img/general/logo-emprendedor.png') }}" srcset="{{ asset('assets/img/general/logo-emprendedor-2x.png') }} 2x" class="img-fluid position-absolute bg-step" alt="Logo Emprendedor">

                        <div class="pb-4 pt-5 pe-4 content">
                            <p class="custom text-justify">Es por ello que te sugerimos <span class="fw-bold">escribir en detalle el motivo por el que decidiste unirte a NIKKEN®</span>.</p>
                            <p class="fw-bold mb-0">Descarga el PDF y describe:</p>
                            <p class="custom text-justify">si el tiempo y el dinero no fuera un problema ¿Cómo sería tu vida? ¿que harías? ¿qué tendrías?¿qué problemas solucionarías? y en términos generales ¿cómo  impactaría eso en tu vida y en la de tus seres queridos?</p>
                            <p class="custom text-justify">Se lo mas detallado posible. <span class="fw-bold">Mientras más claro lo tengas, más poderoso será tu motivo</span>.</p>

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Escribe tu respueta aquí..." id="step-2-form-comments" style="height: 120px"></textarea>
                                <label for="step-2-form-comments">Escribe tu respueta aquí...</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="step-3">
            <div class="background rounded-4 mt-5 p-5">
                <p class="text-white custom text-justify">Ahora que tienes claro tu porqué, es importante que te pongas objetivos. A diferencia de tu porqué, que puede ser tan amplio como lo desees, <span class="fw-bold">tus objetivos deben ser claros, específicos y medibles</span>.</p>

                <h2 class="text-white fw-bold lh-1 mt-4 mb-0">Objetivos de Bienestar</h2>
                <p class="text-white custom text-justify">¿Cuál es el objetivo de bienestar que te gustaría lograr tanto en ti como en tu familia? Comenta con tu patrocinador que productos te ayudarían a lograrlo y escríbelo.</p>

                <div class="form-floating pb-5 mb-2 mt-3">
                    <textarea class="form-control" placeholder="Escribe tu respueta aquí..." id="step-3-form-comments-one" style="height: 100px"></textarea>
                    <label for="step-3-form-comments-one">Escribe tu respueta aquí...</label>
                </div>
            </div>

            <div class="position-relative pe-5 content">
                <div class="bg-light px-5 py-5 border-radius-top-right border-bottom-right-radius">
                    <h2 class="text-success fw-bold mb-3">Objetivo Financiero</h2>

                    <p class="fw-bold mb-0">Corto plazo:</p>
                    <p>¿Cuál es tu urgencia a resolver? Ejemplo: pagar la renta, la colegiatura, pagar un tratamiento, pagar la mensualidad de un auto, ayudar a tus padres, ahorrar para un viaje. ¿Cuánto dinero adicional requieres al mes para lograrlo?</p>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Escribe tu respueta aquí..." id="step-3-form-comments-two" style="height: 80px"></textarea>
                        <label for="step-3-form-comments-two">Escribe tu respueta aquí...</label>
                    </div>

                    <p>Revisa junto con tu patrocinador o Líder ascendente, que acciones debes realizar para que eso ocurra:</p>

                    <div class="row gx-2 d-flex align-items-center mb-2">
                        <div class="col-auto"><input type="text" class="form-control" id="step-3-form-comments-three"></div>
                        <div class="col-auto"><p class="mb-0">nuevos inscritos con Kit Sistema de Agua PiMag®</p></div>
                        <div class="col"><input type="text" class="form-control" id="step-3-form-comments-four"></div>
                        <div class="col-auto"><p class="mb-0">= $</p></div>
                        <div class="col-auto"><input type="text" class="form-control" id="step-3-form-comments-five"></div>
                    </div>

                    <div class="row gx-2 d-flex align-items-center mb-4">
                        <div class="col-auto"><input type="text" class="form-control" id="step-3-form-comments-six"></div>
                        <div class="col-auto"><p class="mb-0">venta de Sistemas de Agua PiMag®</p></div>
                        <div class="col"><input type="text" class="form-control" id="step-3-form-comments-seven"></div>
                        <div class="col-auto"><p class="mb-0">= $</p></div>
                        <div class="col-auto"><input type="text" class="form-control" id="step-3-form-comments-eight"></div>
                    </div>

                    <div class="row d-flex align-items-end">
                        <div class="col">
                            <p class="fw-bold mb-0">Mediano Plazo:</p>
                            <p>¿Qué ingreso mensual deseas después de tu primer año para sentir que tu tiempo vale la pena?</p>
                            <input type="text" class="form-control mb-4" id="step-3-form-comments-nine">

                            <p class="fw-bold mb-0">Largo Plazo:</p>
                            <p>¿Qué ingreso necesitas en 5 años para cumplir tus sueños?</p>
                            <input type="text" class="form-control" id="step-3-form-comments-ten">
                        </div>

                        <div class="col-auto"><div class="pe-5"><img src="{{ asset('assets/img/general/logo-pdf.png') }}" srcset="{{ asset('assets/img/general/logo-pdf-2x.png') }} 2x" class="img-fluid" alt="Logo PDF"></div></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="step-4">
            <div class="position-relative">
                <h2 class="text-success fw-bold text-center mb-5 pt-4">Conoce tu Kit de Emprendimiento Virtual</h2>
                <img src="{{ asset('assets/img/general/paso-2.png') }}" srcset="{{ asset('assets/img/general/paso-2-2x.png') }} 2x" class="img-fluid position-absolute end-0 top-0" alt="Paso 2">
            </div>

            <div class="row gx-2">
                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-5.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-5.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 5">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-6.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-6.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 6">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-7.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-7.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 7">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-9.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-9.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 9">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col position-relative"><img src="{{ asset('assets/img/general/contacto.png') }}" srcset="{{ asset('assets/img/general/contacto-2x.png') }} 2x" class="position-absolute bottom-0" alt="NIKKEN Latinoamérica"></div>

                <div class="col-9">
                    <div class="bg-light py-4 pe-5 content border-radius-top-right">
                        <h3 class="h2 text-success fw-bold mb-1 mt-2">Contacta con tu equipo</h3>
                        <p class="fw-bold">Tambien es importante que te conectes con tu equipo y aproveches todas las herramientas de entrenamiento.</p>

                        <div class="row gx-2 d-flex align-items-center mb-2">
                            <div class="col-auto"><p class="mb-0">El próximo evento de tu línea ascendente (o patrocinador) será el</p></div>
                            <div class="col-auto"><input type="text" class="form-control" id="step-4-form-comments-one"></div>
                        </div>

                        <div class="row gx-2 d-flex align-items-center mb-2">
                            <div class="col-auto"><p class="mb-0">Regístrate al próximo evento Corporativo que será el</p></div>
                            <div class="col-auto"><input type="text" class="form-control" id="step-4-form-comments-two"></div>
                        </div>
                    </div>

                    <div class="bg-light py-4 pe-5 content background border-bottom-right-radius">
                        <h3 class="h2 text-white fw-bold">NIKKEN® Contacto</h3>
                        <p class="text-white"><span class="fw-bold">Descarga el PDF</span> y conoce cómo te apoyamos en la operación de tu negocio NIKKEN® a través de diferentes canales de servicio.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="step-5">
            <div class="position-relative mt-5">
                <h2 class="text-success fw-bold text-center pt-3">Inaugura tu Negocio</h2>
                <p class="text-center">Toma en cuenta estos sencillos para comenzar tu Negocio NIKKEN®</p>
                <img src="{{ asset('assets/img/general/paso-3.png') }}" srcset="{{ asset('assets/img/general/paso-3-2x.png') }} 2x" class="img-fluid position-absolute end-0 top-0" alt="Paso 3">
            </div>

            <div class="row gx-2 mt-5">
                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-10.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-10.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 10">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-11.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-11.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 11">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-12.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-12.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 12">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="bg-light rounded-4 position-relative p-2">
                        <a data-fancybox="gallery-1" href="{{ asset('assets/img/folleto-negocio/pagina-13.jpg') }}">
                            <img src="{{ asset('assets/img/folleto-negocio/pagina-13.jpg') }}" class="img-fluid rounded-4" alt="Folleto de Negocio Página 13">
                            <div class="bg-dark bg-opacity-25 rounded-4 d-flex align-items-center justify-content-center position-absolute top-0 start-0 end-0 bottom-0 p-2"><i class="fa-solid fa-eye text-white"></i></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col"></div>

                <div class="col-11">
                    <div class="background p-4 border-bottom-left-radius border-radius-top-left">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto"><img src="{{ asset('assets/img/general/tienda-virtual.png') }}" srcset="{{ asset('assets/img/general/tienda-virtual-2x.png') }} 2x" class="img-fluid" alt="Tienda Virtual"></div>

                            <div class="col position-relative">
                                <div class="content ms-3">
                                    <div class="h2 text-secondary fw-light text-uppercase position-absolute">Dale inicio a tu</div>
                                    <div class="h1 text-white fw-bold text-uppercase position-absolute">Negocio</div>

                                    <p class="text-white">Como Influencer de Bienestar, tienes el beneficio de contar con una Tienda Virtual  Personalizada, la cual la podrás compartir con tus clientes para seguir generando ventas y llegar a más personas.</p>

                                    <div class="row">
                                        <div class="col-auto">
                                            <h3 class="text-white fw-bold">Descarga la App</h3>

                                            <div class="d-flex mt-2">
                                                <img src="{{ asset('assets/img/general/logo-google-play.png') }}" srcset="{{ asset('assets/img/general/logo-google-play-2x.png') }} 2x" class="img-fluid me-2" alt="Logo Google Play">
                                                <img src="{{ asset('assets/img/general/logo-app-store.png') }}" srcset="{{ asset('assets/img/general/logo-app-store-2x.png') }} 2x" class="img-fluid" alt="Logo App Store">
                                            </div>
                                        </div>

                                        <div class="col-auto"><div class="divider"></div></div>

                                        <div class="col-auto">
                                            <div class="row border-bottom pb-3">
                                                <div class="col-auto"><h3 class="text-white fw-bold">Síguenos en:</h3></div>

                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="{{ asset('assets/img/general/logo-facebook.png') }}" class="img-fluid me-2" alt="Logo Facebook">
                                                        <img src="{{ asset('assets/img/general/logo-instagram.png') }}" class="img-fluid me-2" alt="Logo Instagram">
                                                        <img src="{{ asset('assets/img/general/logo-youtube.png') }}" class="img-fluid me-2" alt="Logo Youtube">
                                                        <img src="{{ asset('assets/img/general/logo-spotify.png') }}" class="img-fluid me-2" alt="Logo Spotify">
                                                        <img src="{{ asset('assets/img/general/logo-tiktok.png') }}" class="img-fluid" alt="Logo TikTok">
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="text-white text-center mt-2">www.nikkenlatam.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="step-6">
            <div class="position-relative mt-5">
                <h2 class="text-success fw-bold text-center pt-3">Herramientas Virtuales</h2>
                <p class="text-center mb-0">Al ser parte de la Comunidad, tienes acceso a <span class="fw-bold">herramientas virtuales personalizadas</span>.</p>
                <p class="text-center"><span class="fw-bold">Donde podrás compartir con tus clientes y/o prospectos:</span>.</p>

                <p class="text-center">Lo que somos  |  Nuestro modelo de negocio  |  Cientos de testimonios que sustentan los beneficios del producto  |  Las recompensas del negocio.</p>
                <img src="{{ asset('assets/img/general/paso-4.png') }}" srcset="{{ asset('assets/img/general/paso-4-2x.png') }} 2x" class="img-fluid position-absolute end-0 top-0" alt="Paso 4">

                <div class="content">
                    <div class="position-relative p-5 background border-radius-top-right border-bottom-right-radius">
                        <div class="row gx-2 position-absolute sliders">
                            <div class="col"><img src="{{ asset('assets/img/general/logo-seguimiento-perfecto.png') }}" srcset="{{ asset('assets/img/general/logo-seguimiento-perfecto-2x.png') }} 2x" class="img-fluid" alt="Logo Seguimiento Perfecto"></div>
                            <div class="col"><img src="{{ asset('assets/img/general/plan-compensacion.png') }}" srcset="{{ asset('assets/img/general/plan-compensacion-2x.png') }} 2x" class="img-fluid" alt="Plan Compensación"></div>
                            <div class="col"><img src="{{ asset('assets/img/general/logo-programas-especiales.png') }}" srcset="{{ asset('assets/img/general/logo-programas-especiales-2x.png') }} 2x" class="img-fluid" alt="Logo Programas Especiales"></div>
                        </div>

                        <hr class="text-white w-50 mx-auto">
                        <h2 class="text-white fw-bold mt-4">¡Planifica tus ganancias!</h2>

                        <div class="row">
                            <div class="col-auto"><p class="text-white mb-0">Retomemos tu objetivo financiero…</p></div>

                            <div class="col">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="step-6-form-one" value="0">
                                    <label class="form-check-label text-white" for="step-6-form-one">Corto Plazo</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="step-6-form-two" value="1">
                                    <label class="form-check-label text-white" for="step-6-form-two">Media Plazo</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="step-6-form-three" value="2">
                                    <label class="form-check-label text-white" for="step-6-form-three">Largo Plazo</label>
                                </div>
                            </div>
                        </div>

                        <p class="text-white fw-bold my-4">¿Qué tiene que suceder en NIKKEN® para que esto ocurra?</p>

                        <div class="row d-flex align-items-end">
                            <div class="col-8">
                                <div class="row d-flex align-items-center mb-2">
                                    <div class="col-auto"><p class="text-white mb-0">Venta personal (VP)</p></div>
                                    <div class="col"><input type="text" class="form-control" id="step-6-form-four"></div>
                                </div>

                                <div class="row d-flex align-items-center mb-2">
                                    <div class="col-auto"><p class="text-white mb-0">Nuevos Influencers con Kit Sistema de Agua</p></div>
                                    <div class="col"><input type="text" class="form-control" id="step-6-form-five"></div>
                                </div>

                                <div class="row d-flex align-items-center mb-2">
                                    <div class="col-auto"><p class="text-white mb-0">Rango a calificar para este ingreso</p></div>
                                    <div class="col"><input type="text" class="form-control" id="step-6-form-six"></div>
                                </div>

                                <div class="row d-flex align-items-center">
                                    <div class="col-auto"><p class="text-white mb-0">Requerimientos para el rango: VP</p></div>
                                    <div class="col"><input type="text" class="form-control" id="step-6-form-seven"></div>
                                    <div class="col-auto"><p class="text-white mb-0">VGP</p></div>
                                    <div class="col"><input type="text" class="form-control" id="step-6-form-eight"></div>
                                </div>
                            </div>

                            <div class="col"><img src="{{ asset('assets/img/general/logo-pdf-blanco.png') }}" srcset="{{ asset('assets/img/general/logo-pdf-blanco-2x.png') }} 2x" class="img-fluid" alt="Logo PDF"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="step-7">
            <div class="background mt-5">
                <div class="row">
                    <div class="col">
                        <div class="p-5 text-center mt-5">
                            <img src="{{ asset('assets/img/general/logo-universidad-nikken.png') }}" srcset="{{ asset('assets/img/general/logo-universidad-nikken-2x.png') }} 2x" class="img-fluid" alt="Logo Universidad NIKKEN">
                            <p class="text-center mt-5"><span class="fw-bold">¡Comienza preparándote con UNIVERSIDAD NIKKEN!</span> Una plataforma para el desarrollo, capacitación y entrenamiento en contenidos de interés de acuerdo al momento del negocio.</p>
                        </div>
                    </div>

                    <div class="col"><img src="{{ asset('assets/img/general/universidad-nikken.png') }}" srcset="{{ asset('assets/img/general/universidad-nikken-2x.png') }} 2x" class="img-fluid" alt="Universidad NIKKEN"></div>
                </div>
            </div>
        </section>

        <section class="step-8">
            <div class="background mt-5">
                <div class="row">
                    <div class="col">
                        <div class="bg-white position-relative p-2 mt-3 content border-radius-top-right border-bottom-right-radius custom z-index-1">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <p><span class="fw-bold">Dirigido:</span> Influencer que están iniciando (Directo, Ejecutivo y Plata).</p>
                                    <p class="mb-0"><span class="fw-bold">Objetivo:</span>  Capacitar de forma integral a la  comunidad de bienestar sobre todos los temas básicos de NIKKEN®.</p>
                                </div>

                                <div class="col-auto">
                                    <div class="pe-4">
                                        <img src="{{ asset('assets/img/general/logo-emprendedor.png') }}" srcset="{{ asset('assets/img/general/logo-emprendedor-2x.png') }} 2x" alt="Logo Emprendedor">
                                        <img src="{{ asset('assets/img/general/logo-seminario-basico.png') }}" srcset="{{ asset('assets/img/general/logo-seminario-basico-2x.png') }} 2x" class="ms-3" alt="Logo Seminario Básico">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white position-relative p-2 mt-3 content border-radius-top-right border-bottom-right-radius custom z-index-1">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <p><span class="fw-bold">Dirigido:</span> Influencer que están iniciando el negocio y desean fortalecer su visión personal desde la filosofía de los 5 pilares de bienestar.</p>
                                    <p class="mb-0"><span class="fw-bold">Objetivo:</span> Crear la visión y descubrir el propósito de vida basado en los 5 pilares del bienestar de NIKKEN® trabajando en creencias y paradigmas personales.</p>
                                </div>

                                <div class="col-auto">
                                    <div class="pe-4">
                                        <div class="row gx-2">
                                            <div class="col position-relative">
                                                <div class="with">
                                                    <img src="{{ asset('assets/img/general/logo-emprendedor.png') }}" srcset="{{ asset('assets/img/general/logo-emprendedor-2x.png') }} 2x" alt="Logo Emprendedor">
                                                    <img src="{{ asset('assets/img/general/logo-empresario.png') }}" srcset="{{ asset('assets/img/general/logo-empresario-2x.png') }} 2x" class="position-absolute end-0 bottom-0" alt="Logo Empresario">
                                                </div>
                                            </div>

                                            <div class="col"><img src="{{ asset('assets/img/general/logo-seminario-plata.png') }}" srcset="{{ asset('assets/img/general/logo-seminario-plata-2x.png') }} 2x" class="ms-3" alt="Logo Seminario Plata"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white position-relative p-2 mt-3 content border-radius-top-right border-bottom-right-radius custom z-index-1">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <p><span class="fw-bold">Dirigido:</span> Influencer que hayan tomado Seminario Básico y tienen la intención de fortalecer el negocio desde la visión personal y el fortalecimiento de grupos.</p>
                                    <p class="mb-0"><span class="fw-bold">Objetivo:</span> Entrenar a los asesores en temas, herramientas y conceptos de emprendimiento y desarrollo que los lleven a impactar a sus grupos.</p>
                                </div>

                                <div class="col-auto">
                                    <div class="pe-4">
                                        <div class="row gx-2">
                                            <div class="col position-relative">
                                                <div class="with">
                                                    <img src="{{ asset('assets/img/general/logo-emprendedor.png') }}" srcset="{{ asset('assets/img/general/logo-emprendedor-2x.png') }} 2x" alt="Logo Emprendedor">
                                                    <img src="{{ asset('assets/img/general/logo-empresario.png') }}" srcset="{{ asset('assets/img/general/logo-empresario-2x.png') }} 2x" class="position-absolute end-0 bottom-0" alt="Logo Empresario">
                                                </div>
                                            </div>

                                            <div class="col"><img src="{{ asset('assets/img/general/logo-seminario-intermedio.png') }}" srcset="{{ asset('assets/img/general/logo-seminario-intermedio-2x.png') }} 2x" class="py-3 ms-3" alt="Logo Seminario Intermedio"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white position-relative p-2 mt-3 content border-radius-top-right border-bottom-right-radius custom z-index-1">
                            <div class="row d-flex align-items-center">
                                <div class="col">
                                    <p><span class="fw-bold">Dirigido:</span> Influencer que quieran fortalecer habilidades personales, de negocio y de liderazgo.</p>
                                    <p class="mb-0"><span class="fw-bold">Objetivo:</span> Capacitar a la comunidad de bienestar para apoyarlo en la formación de equipos de alto rendimiento y liderazgo.</p>
                                </div>

                                <div class="col-auto">
                                    <div class="pe-4">
                                        <div class="row gx-2">
                                            <div class="col position-relative">
                                                <div class="with">
                                                    <img src="{{ asset('assets/img/general/logo-emprendedor.png') }}" srcset="{{ asset('assets/img/general/logo-emprendedor-2x.png') }} 2x" alt="Logo Emprendedor">
                                                    <img src="{{ asset('assets/img/general/logo-empresario.png') }}" srcset="{{ asset('assets/img/general/logo-empresario-2x.png') }} 2x" class="position-absolute end-0 bottom-0" alt="Logo Empresario">
                                                </div>
                                            </div>

                                            <div class="col"><img src="{{ asset('assets/img/general/logo-seminario-diamante.png') }}" srcset="{{ asset('assets/img/general/logo-seminario-diamante-2x.png') }} 2x" class="py-2 ms-3" alt="Logo Seminario Diamante"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto position-relative"><img src="{{ asset('assets/img/general/universidad-nikken.png') }}" srcset="{{ asset('assets/img/general/universidad-nikken-2x.png') }} 2x" class="position-absolute top-0 end-0" alt="Universidad NIKKEN"></div>
                </div>
            </div>
        </section>

        <section class="step-10">
            <div class="background mt-5 p-5">
                <div class="row my-4">
                    <div class="col"><img src="{{ asset('assets/img/general/ruta-exito.jpg') }}" srcset="{{ asset('assets/img/general/ruta-exito-2x.jpg') }} 2x" class="img-fluid" alt="Éxito"></div>

                    <div class="col">
                        <div class="title position-relative">
                            <h2 class="text-white fw-light text-uppercase lh-1">¡Disfruta del <span class="text">y</span> <span class="h1 fw-bold lh-1 d-block">el camino!</span></h2>
                            <p class="text-white">Recomendaciones de las acciones que hacen los equipos ganadores desde el primer dia:</p>

                            <img src="{{ asset('assets/img/general/logo-exito.png') }}" srcset="{{ asset('assets/img/general/logo-exito-2x.png') }} 2x" class="img-fluid" alt="Éxito">
                        </div>

                        <ul class="fa-ul text-white mb-0">
                            <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>1. Asegúrate que todos los días alguien se entere de NIKKEN® gracias a ti.</li>
                            <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>2. Añade todos los días a alguien nuevo a tu lista.</li>
                            <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>3. Usa las herramientas para todo.</li>
                            <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>4. Asiste a todos los eventos y hazlo de forma profesional.</li>
                            <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>5. Sal de casa preparado para el éxito.</li>
                            <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>6. Practica todos los días al menos media hora de desarrollo personal. </li>
                            <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>7. Se congruete: promueve bienestar 24hrs al día, es una filosofía de vida.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid bg-dark mt-4">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col text-center py-4">
                            <img src="{{ asset('assets/img/general/logo-nikken-blanco.png') }}" srcset="{{ asset('assets/img/general/logo-nikken-blanco-2x.png') }} 2x" class="img-fluid mb-2 mt-4" alt="Logo NIKKEN">
                            <p class="text-white">NIKKEN Latinoamérica 2024. © Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
