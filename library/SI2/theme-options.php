<?php defined('ABSPATH') or die();

/*
	Función para añadir google font
 */
if (!function_exists('si2_nartrans_theme_support_scripts')) :
	function si2_nartrans_theme_support_scripts()
	{
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300i,400,400i,500i,600,600i,700,700i,800&display=swap" rel="stylesheet', array(), '1.0.0', 'all');
    
    wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('google-fonts');
    wp_enqueue_style('font-awesome');
	}
endif;
add_action('wp_enqueue_scripts', 'si2_nartrans_theme_support_scripts');




if(!function_exists('si2_theme_supports')){
  /**
   * Configuración del tema
   */
  function si2_theme_supports(){

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    load_theme_textdomain( 'nar-trans', get_stylesheet_directory() . '/languages/SI2' );

    $menu_zones = array(
      'desktop_menu_left' => esc_html__( 'Menú superior izquierda (Escritorio)', 'nar-trans' ),
      'desktop_menu_right' => esc_html__( 'Menú superior derecha (Escritorio)', 'nar-trans' ),
      'mobile_menu_left' => esc_html__( 'Menú superior izquierda (Móvil)', 'nar-trans' ),
      'mobile_menu_right' => esc_html__( 'Menú superior derecha (Móvil)', 'nar-trans' ),

    );

    register_nav_menus( $menu_zones );

    unregister_nav_menu('top-bar-r');

  }
  add_action('after_setup_theme','si2_theme_supports');
}

/* 1. Crear setting page */
/**
 * Crear seccion settings page de metabox
 */
if(!function_exists('si2_settings_page')){
  add_filter( 'mb_settings_pages', 'si2_settings_page' );
  function si2_settings_page( $settings_pages ) {
    $settings_pages[] = array(
    'id'          => 'si2-theme',
    'option_name' => 'si2_theme',
    'menu_title'  => __('Opciones del tema','nar-trans'),
    'parent'      => 'themes.php',
    );
    return $settings_pages;
  }
}

/* 2. Registrar meta_boxes con las opciones del tema */
if(!function_exists('si2_settings_page_metaboxes')){
  add_filter( 'rwmb_meta_boxes', 'si2_settings_page_metaboxes' );
  function si2_settings_page_metaboxes( $meta_boxes ) {

    // PÁGINA DE CONFIGURACIÓN
    $meta_boxes[] = array(
      'settings_pages' => 'si2-theme',
      'title'     => __('Opciones del tema','nar-trans'),
      'tabs'      => array(
        /* 'appareance' => array(
          'label' => __('Apariencia','nar-trans'),
          'icon'  => 'dashicons-art',
        ), */
        'logos' => array(
          'label' => __('Logotipos','nar-trans'),
          'icon'  => 'dashicons-welcome-view-site',
        ),
        'social' => array(
          'label' => __('Redes sociales','nar-trans'),
          'icon'  => 'dashicons-admin-links',
        ),
        'zones' => array(
          'label' => __('Zonas personalizadas','nar-trans'),
          'icon'  => 'dashicons-layout',
				),
				'pages' => array(
          'label' => __('Páginas','nar-trans'),
          'icon'  => 'dashicons-format-aside',
        ),
      ),
      'tab_style' => 'left',
      //'tab_wrapper' => true,
      'fields'    => array(
        array(
          'type' => 'heading',
          'name' => __('Logotipo principal','nar-trans'),
          'desc' => __('Situado en la parte izquierda de la cabecera / navegación','nar-trans'),
          'tab' => 'logos',
        ),
        // Logotipo principal
        array(
          'id' => 'logo-left',
          'type' => 'group',
          'tab' => 'logos',
          'fields' => array(
            array(
              'id' => 'normal',
              'type' => 'group',
              'fields' => array(
                array(
                  'id'               => '1x',
                  'name'             => __('Normal (1x)','nar-trans'),
                  'desc'             => __('Medidas aconsejadas: 174x66px','nar-trans'),
                  'type'             => 'image_advanced',
                  'max_file_uploads' => 1,
                ),
                array(
                  'id'               => '2x',
                  'name'             => __('Normal retina (2x)','nar-trans'),
                  'desc'             => __('Medidas aconsejadas: 348x132px','nar-trans'),
                  'type'             => 'image_advanced',
                  'max_file_uploads' => 1,
                ),
              ),
            ),
          ),
        ),
        array(
          'type' => 'heading',
          'name' => __('Logotipo secundario','nar-trans'),
          'desc' => __('Situado en la parte derecha de la cabecera / navegación','nar-trans'),
          'tab' => 'logos',
        ),
        array(
          'id' => 'logo-right',
          'type' => 'group',
          'tab' => 'logos',
          'fields' => array(
            array(
              'id' => 'normal',
              'type' => 'group',
              'fields' => array(
                array(
                  'id'               => '1x',
                  'name'             => __('Normal (1x)','nar-trans'),
                  'desc'             => __('Medidas aconsejadas: 174x66px','nar-trans'),
                  'type'             => 'image_advanced',
                  'max_file_uploads' => 1,
                ),
                array(
                  'id'               => '2x',
                  'name'             => __('Normal retina (2x)','nar-trans'),
                  'desc'             => __('Medidas aconsejadas: 348x132px','nar-trans'),
                  'type'             => 'image_advanced',
                  'max_file_uploads' => 1,
                ),
              ),
            ),
            array(
              'name' => __('Título','nar-trans'),
              'desc' => __('Usado para añadir información al enlace','nar-trans'),
              'id' => 'title',
              'type' => 'text',
            ),
            array(
              'name' => __('Enlace','nar-trans'),
              'desc' => __('URL a la que apunta la imagen','nar-trans'),
              'id' => 'url',
              'type' => 'url',
            ),
            array(
              'name' => __('Destino','nar-trans'),
              'desc' => __('Donde abrir la URL','nar-trans'),
              'id' => 'target',
              'type' => 'select',
              'options' => array(
                '_self' => __('Misma pestaña','nar-trans'),
                '_blank' => __('Nueva pestaña','nar-trans'),
              ),
            ),
          ),
				),

				array(
					'id' => 'social-group',
					'type'	=>	'group',
					'tab'	=>	'social',
					'fields'	=>	array(
						array(
							'id' => 'twitter_url',
							'name' => __('Twitter', 'nar-trans'),
							'type' => 'text',
						),
						array(
							'id' => 'facebook_url',
							'name' => __('Facebook', 'nar-trans'),
							'type' => 'text',
						),
						array(
							'id' => 'instagram_url',
							'name' => __('Instagram', 'nar-trans'),
							'type' => 'text',
						),
						array(
							'id' => 'youtube_url',
							'name' => __('YouTube', 'nar-trans'),
							'type' => 'text',
						),
					),
				),

        array(
          'type' => 'heading',
          'name' => __('Logotipos footer','nar-trans'),
          'desc' => __('Logotipos que se encuentran en el footer de todas las páginas','nar-trans'),
          'tab' => 'logos',
        ),
        array(
          'id' => 'footer-logos',
          'type' => 'group',
          'tab' => 'logos',
          'clone' => true,
          'sortable' => true,
          'fields' => array(

            array(
              'id'               => 'title',
              'name'             => __('Nombre','nar-trans'),
              'type'             => 'text',
            ),
            array(
              'id'               => 'url',
              'name'             => __('URL','nar-trans'),
              'type'             => 'text',
            ),
            array(
              'id'               => '1x',
              'name'             => __('Normal (1x)','nar-trans'),
              'type'             => 'image_advanced',
              'max_file_uploads' => 1,
            ),
            array(
              'id'               => '2x',
              'name'             => __('Retina (2x)','nar-trans'),
              'type'             => 'image_advanced',
              'max_file_uploads' => 1,
            ),
          ),
        ),
        array(
          'type' => 'heading',
          'name' => __('Logotipo correo electrónico','nar-trans'),
          'desc' => __('Situado en la cabecera de los correos electrónicos','nar-trans'),
          'tab' => 'logos',
        ),
        array(
          'id'               => 'logo_mail',
          'name'             => __('Logotipo','nar-trans'),
          'type'             => 'image_advanced',
          'max_file_uploads' => 1,
          'tab' => 'logos',
        ),

        // ---- Pestaña Sidebars ------
        array(
          'type' => 'heading',
          'name' => __('Barra lateral','nar-trans'),
          'desc' => __('Crea una nueva zona de barra lateral para aplicar a una o varias páginas en concreto. Posteriormente en Apariencia / Widgets puedes gestionar el contenido de la misma.','nar-trans'),
          'tab' => 'zones',
        ),
        array(
          'name' => __('Barra lateral: Nombre zona sidebar','nar-trans'),
          'id' => 'sidebars',
          'tab' => 'zones',
          'type' => 'text',
					'clone' => true,
        ),

        // ---- Pestaña Páginas ------
				array(
					'id' => 'page-login',
					'name' => __('Iniciar sesión', 'nar-trans'),
					'type' => 'post',
					'post_type' => 'page',
					'tab' => 'pages',
        ),

        array(
					'id' => 'page-advanced-search',
					'name' => __('Búsqueda avanzada', 'nar-trans'),
					'type' => 'post',
					'post_type' => 'page',
					'tab' => 'pages',
        ),

        array(
					'id' => 'page-courses-list',
					'name' => __('Listado de asignaturas', 'nar-trans'),
					'type' => 'post',
					'post_type' => 'page',
					'tab' => 'pages',
				),

        array(
					'id' => 'single-course',
					'name' => __('Ficha asignatura', 'nar-trans'),
					'type' => 'post',
					'post_type' => 'page',
					'tab' => 'pages',
        ),

        array(
					'id' => 'single-programme',
					'name' => __('Ficha titulación', 'nar-trans'),
					'type' => 'post',
					'post_type' => 'page',
					'tab' => 'pages',
				),

      ),
    );

    // Preparar las sidebars
    $sidebars = si2_option('sidebars');
    $sidebar_options = array( '' => __('Por defecto','nar-trans'), );
    if(!empty($sidebars) && count($sidebars)) foreach($sidebars as $sidebar){
      $sidebar_options[sanitize_title($sidebar)] = $sidebar;
    }

    $meta_boxes[] = array(
      'post_types' => 'page',
      'id' => 'helper_menu',
      'title' => __('Zonas','nar-trans'),
      'fields' => array(
        array(
          'type' => 'heading',
          'name' => __('Barra lateral','nar-trans'),
        ),
        array(
          'id'    => 'sidebar',
          'name' => __('Zona a mostrar','nar-trans'),
          'type'  => 'select',
          'options' => $sidebar_options,
        ),
      ),
    );

    return $meta_boxes;
  }
}

/**
 * Registra las sidebars
 */
if(!function_exists('si2_register_sidebars')){
  add_action('widgets_init','si2_register_sidebars');
  function si2_register_sidebars(){

    $sidebars = si2_option('sidebars');
    if(!empty($sidebars) && count($sidebars)) foreach($sidebars as $sidebar){
      register_sidebar( array(
        'name'          => $sidebar,
        'id'            => sanitize_title($sidebar),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
      ) );
		}
  }
}

/**
 * Devuelve todas las opciones de configuración del tema
 * @return array() si no hay opciones aún configuradas
 */
if(!function_exists('si2_options')){
  add_action('init','si2_options');
  function si2_options(){
    global $SI2_THEME;

    // Setear
    if(empty($SI2_THEME) || !is_array($SI2_THEME)){
        $SI2_THEME = get_option( 'si2_theme', array() );
    }

    return $SI2_THEME;
  }
}

/* 5. Funciones de acceso a opciones del tema (si2_option) */
/**
 * Devuelve una sección o campo en concreto de las opciones del tema
 * @return false si no se encuentra la sección o el campo
 */
if(!function_exists('si2_option')){
  function si2_option($section,$field=NULL){
    $options = si2_options();

    if(isset($options[$section])){
        if(is_null($field)){
            return $options[$section];
        }elseif(isset($options[$section][$field])){
            return $options[$section][$field];
        }
    }

    return false;
  }
}


/* 6. Registrar sidebars */
/**
 * Registra las sidebars
 */
if(!function_exists('si2_register_sidebar')){
  /**
   * Registrar zonas de widgets
   */
  function si2_register_sidebar() {

    unregister_sidebar('footer-widgets');

    $sidebars = si2_option('sidebars');
    if(!empty($sidebars) && count($sidebars)) foreach($sidebars as $sidebar){
      register_sidebar( array(
        'name'          => $sidebar,
        'id'            => sanitize_title($sidebar),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1>',
				'after_title'   => '</h1>',
      ) );
    }

		register_sidebar(
			array(
				'id'            => 'footer-left',
				'name'          => __( 'Footer izquierda', 'nar-trans' ),
				'description'   => __( '', 'nar-trans' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
			)
    );

    register_sidebar(
			array(
				'id'            => 'footer-center',
				'name'          => __( 'Footer centro', 'nar-trans' ),
				'description'   => __( '', 'nar-trans' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
			)
		);

    register_sidebar(
			array(
				'id'            => 'footer-right',
				'name'          => __( 'Footer derecha', 'nar-trans' ),
				'description'   => __( '', 'nar-trans' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
			)
    );

    register_sidebar(
			array(
				'id'            => 'subfooter-left',
				'name'          => __( 'Footer inferior izquierda', 'nar-trans' ),
				'description'   => __( '', 'nar-trans' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
			)
    );

    register_sidebar(
			array(
				'id'            => 'subfooter-right',
				'name'          => __( 'Footer inferior derecha', 'nar-trans' ),
				'description'   => __( '', 'nar-trans' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
			)
    );

  }
  add_action( 'widgets_init', 'si2_register_sidebar' );
}


/* Obtener sidebar */
if(!function_exists('si2_get_current_sidebar')){
  /**
   * Coge el sidebar asociado a la página
   */
  function si2_get_current_sidebar(){
    $post_id = get_the_ID();
    $sidebar_name = 'sidebar-widgets';

    if( is_single() ) {
      $post_type = get_post_type( $post_id );
      $sidebars = si2_option( 'post_sidebars' );
      if( !empty( $sidebars['sidebar-'.$post_type] ) )
        $sidebar_name = $sidebars['sidebar-'.$post_type];

    } elseif( is_home() ) {
      $sidebars = si2_option( 'post_sidebars' );
      if( !empty( $sidebars['sidebar-home'] ) )
        $sidebar_name = $sidebars['sidebar-home'];
    } else {
      $sidebar = get_post_meta( $post_id, 'sidebar', true );
      if( !empty( $sidebar ) )
        $sidebar_name = $sidebar;
    }

    return apply_filters( 'si2_get_current_sidebar', $sidebar_name );
  }
}

if(!function_exists( 'si2_svg_icon')){
  /**
   * Obtiene el html de un icono en concreto si existe
   */
	function si2_svg_icon( $name ){
		ob_start();
		get_template_part( 'template-parts/icon', $name );
		$icon = ob_get_contents();
		ob_end_clean();
		return $icon;
	}
}

if(!function_exists('si2_icon')){
  /**
   * Obtiene el html de un icono y lo devuelve.
   * Si $echo = true, lo imprime directamente
   */
	function si2_icon( $name, $echo=false ){
		$icon = si2_svg_icon( $name );
		if( $echo )
			echo $icon;
		return $icon;
	}
}
