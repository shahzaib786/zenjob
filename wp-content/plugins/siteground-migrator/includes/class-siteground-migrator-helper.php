<?php
/**
 * The file that defines the class that handle provide additional information on how to fix environment issues.
 *
 * @link       https://www.siteground.com
 * @since      1.0.26
 *
 * @package    SiteGround_Migrator
 * @subpackage SiteGround_Migrator/includes
 */

/**
 * The helper class.
 *
 * Provide information on how to troubleshoot migration issue
 *
 * @since      1.0.26
 * @package    SiteGround_Migrator
 * @subpackage SiteGround_Migrator/includes
 * @author     SiteGround <hristo.p@siteground.com>
 */
class SiteGround_Migrator_Helper {

	/**
	 * Help articles.
	 *
	 * @var array
	 */
	private $articles = array(
		'https://www.siteground.com/kb/wordpress-migrator-allowed-memory-size-exhausted',
		'https://www.siteground.com/kb/wordpress-migrator-uncaught-pharexception-unable-open-new-phar',
		'https://www.siteground.com/kb/wordpress-migrator-long-tar-file-format',
		'https://www.siteground.com/kb/wordpress-migrator-curl-error-failed-connect-connection-refused',
		'https://www.siteground.com/kb/wordpress-migrator-curl-error-connection-timed-out',
		'https://www.siteground.com/kb/wordpress-migrator-can-not-download-manifest-file',
		'https://www.siteground.com/kb/wordpress-migrator-php-warning-getmypid-disabled',
		'https://www.siteground.com/kb/wordpress-migrator-can-not-connect-wp-migrator-plugin',
		'https://www.siteground.com/kb/wordpress-migrator-following-path-invalid-doesnt-exist',
		'https://www.siteground.com/kb/wordpress-migrator-out-of-memory-tried-to-allocate-bytes',
		'https://www.siteground.com/kb/wordpress-migrator-maximum-execution-time-seconds-exceeded',
	);

	/**
	 * The error strings we wil ltry to match.
	 *
	 * @var array
	 */
	private $error_strings = array(
		'allowed memory size of',
		'unable to open new phar',
		'tar-based phar',
		'failed to connect to wp-transfer-api.sgvps.net',
		'connection timed out after',
		'can not download manifest file',
		'getmypid() has been disabled',
		'can not connect to siteground wp-migrator',
		'the following path is invalid or doesn\'t exist',
		'out of memory',
		'maximum execution time of',
	);

	/**
	 * Get the error message
	 *
	 * @since  1.0.26
	 *
	 * @param  array $error Array containing error information.
	 *
	 * @return string       Custom error message.
	 */
	public function get_error_message( $error ) {
		// Return the old message if the error message is empty.
		if ( empty( $error['message'] ) ) {
			return esc_html__( 'We’ve encountered a critical error in your current hosting environment that prevents our plugin to complete the transfer.', 'siteground-migrator' );
		}

		// Build the error message.
		$message = $error['message'];

		if ( ! empty( $error['file'] ) ) {
			$message .= ' in ' . $error['file'];
		}

		if ( ! empty( $error['line'] ) ) {
			$message .= ' on line ' . $error['line'];
		}

		$article = $this->get_article( $error['message'] );

		if ( false === $article ) {
			return $message;
		}

		return $message . '<br><br> For more information on how to solve this problem, please read <a href="' . $article . '" target="_blank">this article</a>';
	}

	/**
	 * Get the help article by checking the error message.
	 *
	 * @since  1.0.26
	 *
	 * @param  array $error Array containing error information.
	 *
	 * @return int|bool     The article id or false otherwise.
	 */
	public function get_article( $error ) {
		foreach ( $this->error_strings as $index => $error_string ) {
			if ( false === stripos( $error, $error_string ) ) {
				continue;
			}

			return $this->articles[ $index ];
		}

		return false;
	}


}
