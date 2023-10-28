<?php
/**
 * Autoloader for Setup.
 *
 * @since 1.1.1
 *
 * @package Bcgov/Theme/Block
 */

namespace Bcgov\Theme\Block;

/**
 * Provides a simple autoloader for PHP classes that follow the Bcgov\Theme\Block namespace prefix.
 * Allows for loading multiple base directories when registering the class.
 */
class Loader {

    /**
     * An array of base directories to search for classes.
     *
     * @var array $base_dirs
     */
    private $base_dirs;

    /**
     * Constructs a new Loader instance with the given base directories.
     *
     * @param array $base_dirs An array of base directories to search for classes.
     */
    public function __construct( array $base_dirs ) {
        $this->base_dirs = $base_dirs;
    }

    /**
     * Registers the Loader instance as an autoloader with the PHP SPL.
     * This allows it to be used to automatically load classes when they are used.
     */
    public function register() {
        spl_autoload_register( [ $this, 'load_class' ] );
    }

    /**
     * Attempts to load the given class by searching through each of the base directories.
     * The class is only loaded if it uses the specified namespace prefix.
     *
     * @param string $qualified_class The fully qualified class name to load.
     */
    public function load_class( $qualified_class ) {
        // Namespace prefix.
        $prefix = 'Bcgov\\Theme\\Block\\';

        // Does the class use the namespace prefix?
        if ( strncmp( $prefix, $qualified_class, strlen( $prefix ) ) !== 0 ) {
            return;
        }

        // Get the relative class name.
        $relative_class = substr( $qualified_class, strlen( $prefix ) );

        // Replace namespace separators with directory separators.
        $filename = str_replace( '\\', '/', $relative_class ) . '.php';

        // Try to load the class from each base directory.
        foreach ( $this->base_dirs as $base_dir ) {
            $file = $base_dir . '/' . $filename;
            if ( file_exists( $file ) ) {
                require $file;
                return;
            }
        }
    }
}
