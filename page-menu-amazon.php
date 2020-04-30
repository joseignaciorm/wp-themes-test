<?php
get_header(); ?>

<div class="grid-container section-p-t-b">

	<!-- Menu Amazon -->
    <nav class="menu" id="menu">
        <div class="contenedor contenedor-botones-menu">
            <button class="btn-menu-barras" id="btn-menu-barras"><i class="fas fa-bars"></i></button>
            <button class="btn-menu-cerrar" id="btn-menu-cerrar"><i class="fas fa-times"></i></button>
        </div>

        <div class="contenedor contenedor-enlaces-nav">
            <div class="btn-departamentos" id="btn-departamentos">
                <p>Todos los <span>Departamentos</span></p>
                <i class="fas fa-caret-down"></i>
            </div>
            <div class="enlaces">
                <a href="#">Cuenta</a>
                <a href="#">Promociones</a>
                <a href="#">Mesa de regalos</a>
                <a href="#">Ayuda</a>
            </div>
        </div>

        <div class="contenedor contenedor-grid">
                <div class="grid activo" id="grid">
                    <div class="categorias">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
                        <h3 class="subtitulo">Categorías</h3>
                        <a href="#" data-categoria="tecnologia-y-computadoras">Tecnología y Computadoras <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="libros">Libros <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="hogar-y-cocina">Hogar y Cocina <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="juegos-y-juguetes">Juegos y Juguetes <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="salud-y-belleza">Salud y Belleza <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="alimentos-y-bebidas">Alimentos y Bebidas <i class="fas fa-angle-right"></i></a>
                    </div>

                    <div class="contenedor-subcategorias">
                        <div class="subcategoria activo" data-categoria="tecnologia-y-computadoras">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Tecnología y Computadoras</h3>
                                <a href="#">Laptops</a>
                                <a href="#">Tablets</a>
                                <a href="#">Computadoras de Escritorio</a>
                                <a href="#">Monitores</a>
                                <a href="#">Componentes</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="./img/tecnologia-banner-1.png" alt="">
                                </a>
                            </div>
    
                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="./img/tecnologia-galeria-1.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="./img/tecnologia-galeria-2.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="./img/tecnologia-galeria-3.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="./img/tecnologia-galeria-4.png" alt="">
                                </a>
                            </div>

                        </div>

                        <div class="subcategoria" data-categoria="libros">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Libros</h3>
                                <a href="#">Top Sellers</a>
                                <a href="#">Ciencia Ficcion</a>
                                <a href="#">Fantasia</a>
                                <a href="#">Miedo</a>
                            </div>
        
                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="./img/libros-banner-1.png" alt="">
                                </a>
                            </div>
        
                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="./img/libros-galeria-1.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="./img/libros-galeria-2.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="./img/libros-galeria-3.png" alt="">
                                </a>
                                <a href="#">
                                    <img src="./img/libros-galeria-4.png" alt="">
                                </a>
                            </div>
                        </div>
        
                        <div class="subcategoria" data-categoria="ropa-y-accesorios">
                                <div class="enlaces-subcategoria">
                                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                    <h3 class="subtitulo">Ropa y Accesorios</h3>
                                    <a href="#">Ropa</a>
                                    <a href="#">Zapatos</a>
                                    <a href="#">Accesorios</a>
                                    <a href="#">Relojes</a>
                                </div>
        
                                <div class="banner-subcategoria">
                                    <a href="#">
                                        <img src="./img/ropa-banner-1.png" alt="">
                                    </a>
                                </div>
        
                                <div class="galeria-subcategoria">
                                    <a href="#">
                                        <img src="./img/ropa-galeria-1.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/ropa-galeria-2.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/ropa-galeria-3.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/ropa-galeria-4.png" alt="">
                                    </a>
                                </div>
                        </div>
    
                        <div class="subcategoria" data-categoria="hogar-y-cocina">
                                <div class="enlaces-subcategoria">
                                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                    <h3 class="subtitulo">Hogar y Cocina</h3>
                                    <a href="#">Cocina</a>
                                    <a href="#">Electrodomesticos</a>
                                    <a href="#">Limpieza</a>
                                    <a href="#">Baño</a>
                                    <a href="#">Decoracion</a>
                                    <a href="#">Arte</a>
                                    <a href="#">Manualidades</a>
                                    <a href="#">Jardin</a>
                                </div>
        
                                <div class="banner-subcategoria">
                                    <a href="#">
                                        <img src="./img/hogar-banner-1.png" alt="">
                                    </a>
                                </div>
        
                                <div class="galeria-subcategoria">
                                    <a href="#">
                                        <img src="./img/hogar-galeria-1.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/hogar-galeria-2.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/hogar-galeria-3.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/hogar-galeria-4.png" alt="">
                                    </a>
                                </div>
                        </div>
    
                        <div class="subcategoria" data-categoria="juegos-y-juguetes">
                                <div class="enlaces-subcategoria">
                                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                    <h3 class="subtitulo">Juegos y Juguetes</h3>
                                    <a href="#">Juguetes</a>
                                    <a href="#">Juegos de Mesa</a>
                                    <a href="#">Aire Libre</a>
                                    <a href="#">Muñecas</a>
                                </div>
        
                                <div class="banner-subcategoria">
                                    <a href="#">
                                        <img src="./img/juegos-banner-1.png" alt="">
                                    </a>
                                </div>
        
                                <div class="galeria-subcategoria">
                                    <a href="#">
                                        <img src="./img/juegos-galeria-1.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/juegos-galeria-2.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/juegos-galeria-3.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/juegos-galeria-4.png" alt="">
                                    </a>
                                </div>
                        </div>
    
                        <div class="subcategoria" data-categoria="salud-y-belleza">
                                <div class="enlaces-subcategoria">
                                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                    <h3 class="subtitulo">Salud y Belleza</h3>
                                    <a href="#">Cuidado de la Piel</a>
                                    <a href="#">Maquillaje</a>
                                    <a href="#">Lociones</a>
                                    <a href="#">Shampoo</a>
                                </div>
        
                                <div class="banner-subcategoria">
                                    <a href="#">
                                        <img src="./img/belleza-banner-1.png" alt="">
                                    </a>
                                </div>
        
                                <div class="galeria-subcategoria">
                                    <a href="#">
                                        <img src="./img/belleza-galeria-1.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/belleza-galeria-2.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/belleza-galeria-3.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/belleza-galeria-4.png" alt="">
                                    </a>
                                </div>
                        </div>
    
                        <div class="subcategoria" data-categoria="alimentos-y-bebidas">
                                <div class="enlaces-subcategoria">
                                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                    <h3 class="subtitulo">Alimentos y Bebidas</h3>
                                    <a href="#">Alimentos</a>
                                    <a href="#">Bebidas</a>
                                </div>
        
                                <div class="banner-subcategoria">
                                    <a href="#">
                                        <img src="./img/comida-banner-1.png" alt="">
                                    </a>
                                </div>
        
                                <div class="galeria-subcategoria">
                                    <a href="#">
                                        <img src="./img/comida-galeria-1.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/comida-galeria-2.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/comida-galeria-3.png" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="./img/comida-galeria-4.png" alt="">
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    </nav>

</div>

<?php
get_footer();