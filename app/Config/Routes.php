<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Nosotros', 'Home::Nosotros');
$routes->get('Productos', 'Home::Productos');
$routes->get('Contacto', 'Home::Contacto');
$routes->get('Metodos de Pagos', 'Home::metodosPagos');
$routes->get('Sucursales', 'Home::sucursales');
$routes->get('login', 'Home::login');
$routes->post('enviarlogin', 'login_controller::auth');
$routes->get('logout', 'login_controller::logout');
$routes->get('register', 'usuario_controller::create');
$routes->post('enviar-form', 'usuario_controller::formValidation');
$routes->get('error', 'Home::error');
$routes->get('panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('carrito', 'carrito_Controller::muestra',  ['filter' => 'cliente']);
$routes->get('catalogo', 'carrito_Controller::catalogo');

$routes->get('crud_usuario', 'usuario_crud_controller::index', ['filter' => 'auth']);
$routes->get('user-form', 'usuario_crud_controller::create', ['filter' => 'auth']);
$routes->get('users-list', 'usuario_crud_controller::index', ['filter' => 'auth']);
$routes->get('create-user', 'usuario_crud_controller::create', ['filter' => 'auth']);
$routes->post('store-user', 'usuario_crud_controller::store', ['filter' => 'auth']);
$routes->get('edit-view/(:num)', 'usuario_crud_controller::singleUser/$1', ['filter' => 'auth']);
$routes->post('update-user', 'Usuario_crud_controller::update', ['filter' => 'auth']);
$routes->get('deletelogico/(:num)', 'usuario_crud_controller::deletelogico/$1', ['filter' => 'auth']);
$routes->get('activar/(:num)', 'usuario_crud_controller::activar/$1', ['filter' => 'auth']);

$routes->get('crud_productos', 'producto_controller::index', ['filter' => 'auth']);
$routes->get('/crear', 'producto_controller::index', ['filter' => 'auth']);
$routes->get('/agregar', 'producto_controller::index', ['filter' => 'auth']);
$routes->get('/produ-form', 'producto_controller::creaproducto', ['filter' => 'auth']);
$routes->post('/enviar-prod', 'producto_controller::store', ['filter' => 'auth']);
$routes->get('/editar/(:num)', 'producto_controller::singleproducto/$1', ['filter' => 'auth']);
$routes->post('modifica/(:num)', 'producto_controller::modifica/$1', ['filter' => 'auth']);
$routes->get('borrar/(:num)', 'producto_controller::deleteproducto/$1');
$routes->get('/eliminados', 'producto_controller::eliminados', ['filter' => 'auth']);
$routes->get('activar_pro/(:num)', 'producto_controller::activarproducto/$1', ['filter' => 'auth']);

$routes->get('/todos_p','carrito_controller::catalogo');
$routes->get('/muestro','carrito_controller::muestra',['filter' => 'cliente']);
$routes->get('/actualizar_carrito','carrito_controller::actualizar_carrito',['filter' => 'cliente']);
$routes->post('carrito_add','carrito_controller::add',['filter' => 'cliente']);
$routes->get('/carrito_elimina/(:any)','carrito_controller::remove/$1',['filter' => 'cliente']);
$routes->get('/borrar','carrito_controller::borrar_carrito',['filter' => 'cliente']);
$routes->get('/carrito-comprar','Ventascontroller::registrar_venta',['filter' => 'cliente']);
$routes->get('/carrito_suma/(:any)','carrito_controller::carrito_suma/$1');
$routes->get('/carrito_resta/(:any)','carrito_controller::carrito_resta/$1');

$routes->get('vista_compras/(:num)','ventasController::ver_Factura/$1', ['filter' => 'cliente']);
$routes->get('ver_factura_usuario/(:num)','ventasController::ver_facturas_usuario/$1',['filter' => 'cliente']);
$routes->get('/ventas','ventasController::ventas', ['filter' => 'cliente']);
$routes->get('ver_factura_usuario', 'ventasController::misFacturas', ['filter' => 'cliente']);


//rutas de consultas
$routes->post('enviar-contacto', 'contacto_controller::enviar');
$routes->post('guardar-consulta', 'contacto_controller::guardar');
$routes->get('listar-consultas', 'contacto_controller::listar');
$routes->post('responder_consulta', 'contacto_controller::responder_consulta');
$routes->post('eliminar_consulta', 'contacto_controller::eliminar_consulta');
