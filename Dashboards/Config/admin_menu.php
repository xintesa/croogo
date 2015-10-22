<?php

CroogoNav::add('sidebar', 'dashboard', array(
	'icon' => 'home',
	'title' => __d('croogo', 'Dashboard'),
	'url' => Configure::read('Croogo.dashboardUrl'),
	'weight' => 0,
));

CroogoNav::add('sidebar', 'settings.children.dashboard', array(
	'title' => __d('croogo', 'Dashboard'),
	'url' => array(
		'plugin' => 'dashboards',
		'controller' => 'dashboards_dashboards',
		'action' => 'index',
	),
));