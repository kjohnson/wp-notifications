<?php
/**
 * Queue manager.
 *
 * @author Iron Bound Designs
 * @since  1.0
 */

namespace IronBound\WP_Notifications\Queue;

/**
 * Class Manager
 * @package IronBound\WP_Notifications\Queue
 */
final class Manager {

	/**
	 * @var array
	 */
	private static $queues = array();

	/**
	 * Register a queue.
	 *
	 * @since 1.0
	 *
	 * @param string $slug
	 * @param Queue  $queue
	 */
	public static function register( $slug, Queue $queue ) {
		self::$queues[ $slug ] = $queue;
	}

	/**
	 * Retrieve a queue.
	 *
	 * @since 1.0
	 *
	 * @param string $slug
	 *
	 * @return Queue
	 */
	public static function get( $slug ) {
		return isset( self::$queues[ $slug ] ) ? self::$queues[ $slug ] : null;
	}
}