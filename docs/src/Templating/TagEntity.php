<?php
/**
 * Abstract class TemplateEngine.
 *
 * @package AmpProject\AmpWP
 */

namespace AmpProject\AmpWP\Documentation\Templating;

/**
 * Entity object representing a doc-block tag.
 *
 * @property string   $name
 * @property string   $content
 * @property string[] $types
 * @property string   $variable
 */
final class TagEntity {

	use EntityConstruction;

	/**
	 * Get an associative array of known keys.
	 *
	 * @return string[]
	 */
	protected function get_known_keys() {
		return [
			'name',
			'content',
			'types',
			'variable',
		];
	}
}
