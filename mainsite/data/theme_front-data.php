<?php

/**
 * theme_front-data.php
 */

//Texte de bienvenue
$data['welcome'] = 'Etiam porta sem malesuada magna mollis euismod. <br /><br />Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

//News et bons plans à afficher en page d'accueil ou en sidebar
$data['newsAndDeals'] = array(
  array(
    'title' => 'Sit Nullam Sem Tellus',
    'description' => 'Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. <br />Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.',
    'address' => '4, rue Arsène Houssaye',
    'zip_code' => '75008',
    'city' => 'Paris',
    'country' => 'France',
    'event_start' => '12/06/2012',
    'event_end' => '21/06/2012',
    'image' => 'https://www.google.fr/images/srpr/logo3w.png'),
  array(
    'title' => 'Etiam Ligula Malesuada Fringilla Cursus',
    'description' => 'Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br /><br /> Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor.',
    'address' => '4, rue du grand champ',
    'zip_code' => '13000',
    'city' => 'Marseille',
    'country' => 'France',
    'event_start' => '19/06/2012',
    'event_end' => '23/06/2012'
  ),
  array(
    'title' => 'Risus',
    'description' => 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.',
    'address' => '',
    'zip_code' => '',
    'city' => '',
    'country' => '',
    'event_start' => '30/06/2012',
    'event_end' => ''
  )
);

//Menus
$data['menu'] = array(
  array('title' => 'Malesuada', 'url' => 'http://www.google.fr'),
  array('title' => 'Euismod', 'submenu' => array(
    array('title' => 'Cursus', 'url' => 'http://www.google.fr'),
    array('title' => 'Fusce', 'url' => 'http://www.google.fr')
  ),
  array('title' => 'Ultricies', 'url' => 'http://www.google.fr'),
  array('title' => 'Dolor', 'url' => 'http://www.google.fr'),
));

//Carroussel
$data['carroussel'] = array(
  array('titre' => 'Inceptos Porta', 'description' => 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec ullamcorper nulla non metus auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.', 'url' => 'http://www.google.fr', 'image' => 'https://www.google.fr/images/srpr/logo3w.png'),
  array('titre' => 'Parturient Vestibulum Ligula', 'image' => 'https://www.google.fr/images/srpr/logo3w.png'),
  array('titre' => 'Ornare', 'description' => 'Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui.'),
);

//Plusieurs contacts pour le même site
$data['contacts'] = array(
  array(
    'nom' => 'Etiam Consectetur',
    'horaires' => array(
      array('day' => 'Lundi', 'from1' => '12', 'to1' => '13', 'from2' => '14', 'to2' => '19'),
      array('day' => 'Mardi', 'from1' => '12', 'to1' => '13'),
      array('day' => 'Mercredi', 'from1' => '12', 'to1' => '13', 'from2' => '14', 'to2' => '19'),
      array('day' => 'Jeudi', 'from1' => '12', 'to1' => '13', 'from2' => '14', 'to2' => '19'),
      array('day' => 'Vendredi', 'from1' => '12', 'to1' => '13', 'from2' => '14', 'to2' => '19'),
      array('day' => 'Samedi', 'from1' => '12', 'to1' => '13', 'from2' => '14', 'to2' => '19'))),
  array(
    'nom' => 'Etiam Consectetur',
    'address' => '4, rue du grand champ',
    'zip_code' => '13000',
    'city' => 'Marseille'
  )
);

//Critères de moteur de recherches
$data['criteres'] = array(
  array('label' => 'Prix', 'value' => array('1 000', '2 000', '5 000', '10 000', '30 000')),
  array('label' => 'De', 'value' => 'Paris (FR)'),
  array('label' => 'Vers', 'value' => '')
);

//Crédits (footer)
$data['credits'] = 'Photos credits : Sophie Martin';

