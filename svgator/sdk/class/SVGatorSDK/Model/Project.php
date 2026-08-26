<?php

namespace SVGatorSDK\Model;

/**
 * Populated straight from the API response, so it deliberately carries
 * whichever fields the API returns - "folder" and "settings" among them -
 * rather than only the ones declared below.
 *
 * Creating those undeclared properties is deprecated as of PHP 8.2 and an
 * Error as of PHP 9, so the class opts in explicitly. On PHP < 8.0 the
 * attribute below is parsed as a comment, keeping the SDK's PHP 5.4 floor.
 */
#[\AllowDynamicProperties]
class Project {
	public $id;
	public $title;
	public $preview;
	public $created;
	public $updated;

	public function __construct($params = []) {
		$this->populate($params);
	}

	public function populate($params = []) {
		foreach($params as $key => $value) {
			try {
				$this->{$key} = $value;
			} catch(\Exception $e) {
			}
		}
	}
}
