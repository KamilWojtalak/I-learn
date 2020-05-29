<?php

// Retrieve the Subreddit

// Create a function to extract the name of the subreddit from its URL.

// subReddit("https://www.reddit.com/r/funny/") ➞ "funny"

// subReddit("https://www.reddit.com/r/relationships/") ➞ "relationships"

// subReddit("https://www.reddit.com/r/mildlyinteresting/") ➞ "mildlyinteresting"

function subReddit($link) {
	$link_array = explode( '/', $link );
	return $link_array[count($link_array) - 2];
}