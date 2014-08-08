<?php

class StatsModel
{

	private $_table = 'song';
	
    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        //$sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
		return ORM::for_table($this->_table)->count();
    }
}
