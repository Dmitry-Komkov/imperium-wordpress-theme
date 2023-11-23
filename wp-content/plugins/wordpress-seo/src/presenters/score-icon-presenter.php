<?php

namespace Yoast\WP\SEO\Presenters;

/**
 * Presenter class for a score icon.
 */
class Score_Icon_Presenter extends Abstract_Presenter {

	/**
	 * Holds the title.
	 *
	 * @var string
	 */
	protected $title;

	/**
<<<<<<< HEAD
	 * Holds the class.
	 *
	 * @var string
	 */
	protected $class;
=======
	 * Holds the CSS class.
	 *
	 * @var string
	 */
	protected $css_class;
>>>>>>> update

	/**
	 * Constructs a Score_Icon_Presenter.
	 *
<<<<<<< HEAD
	 * @param string $title The title and screen reader text.
	 * @param string $class The class.
	 */
	public function __construct( $title, $class ) {
		$this->title = $title;
		$this->class = $class;
=======
	 * @param string $title     The title and screen reader text.
	 * @param string $css_class The CSS class.
	 */
	public function __construct( $title, $css_class ) {
		$this->title     = $title;
		$this->css_class = $css_class;
>>>>>>> update
	}

	/**
	 * Presents the score icon.
	 *
	 * @return string The score icon.
	 */
	public function present() {
		return \sprintf(
			'<div aria-hidden="true" title="%1$s" class="wpseo-score-icon %3$s"><span class="wpseo-score-text screen-reader-text">%2$s</span></div>',
			\esc_attr( $this->title ),
			\esc_html( $this->title ),
<<<<<<< HEAD
			\esc_attr( $this->class )
=======
			\esc_attr( $this->css_class )
>>>>>>> update
		);
	}
}
