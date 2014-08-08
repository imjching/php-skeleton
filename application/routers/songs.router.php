<?

// GET route
$app->get('/songs/(index)', function () use ($app) {
	// load a model, perform an action, pass the returned data to a variable
    // NOTE: please write the name of the model "LikeThis"
    $songs_model = $app->controller->loadModel('SongsModel');
    $songs = $songs_model->getAllSongs();

    // load another model, perform an action, pass the returned data to a variable
    // NOTE: please write the name of the model "LikeThis"
    $stats_model = $app->controller->loadModel('StatsModel');
    $amount_of_songs = $stats_model->getAmountOfSongs();

    // render the view, pass the data
    $app->render('songs/index', array('songs' => $songs, 'amount_of_songs' => $amount_of_songs));
});

// GET route
$app->map('/songs/addsong', function () use ($app) {
	// if we have POST data to create a new song entry
    if (isset($_POST["submit_add_song"])) {
        // load model, perform an action on the model
        $songs_model = $app->controller->loadModel('SongsModel');
        $songs_model->addSong($_POST["artist"], $_POST["track"],  $_POST["link"]);
    }
    // where to go after song has been added
	$app->redirect(URL . 'songs/index');
})->via('GET', 'POST');

// GET route
$app->get('/songs/deletesong/:song_id', function ($song_id) use ($app) {
    // if we have an id of a song that should be deleted
    if (isset($song_id)) {
        // load model, perform an action on the model
        $songs_model = $app->controller->loadModel('SongsModel');
        $songs_model->deleteSong($song_id);
    }
    // where to go after song has been deleted
	$app->redirect(URL . 'songs/index');
});