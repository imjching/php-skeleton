<?

// GET route
$app->get('/(index)', function () use ($app) {
	$app->render('home/index');
});

// GET route
$app->get('/home/exampleone/', function () use ($app) {
	$app->render('home/example_one');
});


// GET route
$app->get('/home/exampletwo/', function () use ($app) {
	$app->render('home/example_two');
});