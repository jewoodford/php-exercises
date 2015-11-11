<?php

function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	$contentsArray = explode("\n", $contents);
	$contacts = [];
	$indivContacts = [];
	foreach ($contentsArray as $contact) {
		$tempIndivContacts = explode('|', $contact);
		$indivContacts['name'] = $tempIndivContacts[0];
		$indivContacts['phone'] = substr_replace($tempIndivContacts[1], '-', 3, 0);
		$indivContacts['phone'] = substr_replace($indivContacts['phone'], '-', 7, 0);
		array_push($contacts, $indivContacts);
	}
	return $contacts;

}

var_dump(parseContacts('contacts.txt'));
