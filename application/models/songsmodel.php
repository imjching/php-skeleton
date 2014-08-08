<?php

class SongsModel
{

	private $_table = 'song';

    /**
     * Get all songs from database
     */
    public function getAllSongs()
    {
        //$sql = "SELECT id, artist, track, link FROM song";
		return ORM::for_table($this->_table)->select('id')->select('artist')->select('track')->select('link')->find_many();
    }

    /**
     * Add a song to database
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addSong($artist, $track, $link)
    {
        // clean the input from javascript code for example
        $artist = strip_tags($artist);
        $track = strip_tags($track);
        $link = strip_tags($link);

        //$sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = ORM::for_table($this->_table)->create();
		$query->artist = $artist;
        $query->track = $track;
        $query->link = $link;
        $query->save();
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        //$sql = "DELETE FROM song WHERE id = :song_id";
		$query = ORM::for_table($this->_table)->find_one($song_id);
		if ($query) {
			$query->delete();
		}
    }
}
