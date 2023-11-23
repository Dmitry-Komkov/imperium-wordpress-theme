<?php

<<<<<<< HEAD
namespace WBCR\Factory_Templates_102\Pages;
=======
namespace WBCR\Factory_Templates_118\Pages;
>>>>>>> update

// Exit if accessed directly
if( !defined('ABSPATH') ) {
	exit;
}

/**
 * Класс страницы, которая реализует функции мастера установки.
 *
<<<<<<< HEAD
 * Этот класс унаследован от стандартного шаблона страницы \Wbcr_FactoryPages449_ImpressiveThemplate,
 * поэтому все его инструменты могут быть применены и в этом классе. Но вы должны учитывать, что
 * поведение экшенов страницы было изменено. В данной реализации экшены используется для пагинации шагов.
 *
 * @package WBCR\Factory_Templates_102\Pages
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, Github: https://github.com/alexkovalevv
 * @since         2.2.2
 */
class Setup extends \WBCR\Factory_Templates_102\Impressive {
=======
 * Этот класс унаследован от стандартного шаблона страницы \Wbcr_FactoryPages467_ImpressiveThemplate,
 * поэтому все его инструменты могут быть применены и в этом классе. Но вы должны учитывать, что
 * поведение экшенов страницы было изменено. В данной реализации экшены используется для пагинации шагов.
 *
 * @package WBCR\Factory_Templates_118\Pages
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, Github: https://github.com/alexkovalevv
 * @since         2.2.2
 */
class Setup extends \WBCR\Factory_Templates_118\Impressive {
>>>>>>> update

	const DEFAULT_STEP = 'step0';

	/**
	 * @var string
	 */
	public $type = 'page';

	/**
	 * {@inheritDoc}
	 *
	 * @since   2.2.2 - добавлен
	 * @var bool
	 */
	public $page_parent_page = 'none';

	/**
	 * @var string
	 */
	public $menu_target = 'options-general.php';

	/**
	 * {@inheritDoc}
	 *
	 * @since   2.2.2 - добавлен
	 * @var bool
	 */
	public $show_right_sidebar_in_options = false;

	/**
	 * {@inheritDoc}
	 *
	 * @since  2.2.2 - добавлен
	 * @var bool
	 */
	public $available_for_multisite = false;

	/**
	 * {@inheritDoc}
	 *
	 * @since   2.2.2 - добавлен
	 * @var bool
	 */
	public $internal = true;

	private $current_step = 'step0';
	private $steps = [];

	/**
<<<<<<< HEAD
	 * @param \Wbcr_Factory450_Plugin $plugin
	 */
	public function __construct(\Wbcr_Factory450_Plugin $plugin)
	{
		$this->id = 'setup';

		$this->menu_title = __('Setup master', 'wbcr_factory_templates_102');
		$this->page_menu_short_description = __('Setup master', 'wbcr_factory_templates_102');
=======
	 * @param \Wbcr_Factory469_Plugin $plugin
	 */
	public function __construct(\Wbcr_Factory469_Plugin $plugin)
	{
		$this->id = 'setup';

		$this->menu_title = __('Setup master', 'wbcr_factory_templates_118');
		$this->page_menu_short_description = __('Setup master', 'wbcr_factory_templates_118');
>>>>>>> update
		parent::__construct($plugin);
	}

	public function getPageTitle()
	{
<<<<<<< HEAD
		return __('Setup', 'wbcr_factory_templates_102');
=======
		return __('Setup', 'wbcr_factory_templates_118');
>>>>>>> update
	}

	public function get_close_wizard_url()
	{
		return $this->plugin->getPluginPageUrl('quick_start');
	}

	/**
	 * Поведение экшенов страницы было изменено. В данной реализации экшены используется для пагинации шагов.
	 *
	 * @param string $action
	 *
	 * @throws \Exception
	 */
	public function executeByName($action)
	{
		$step = self::DEFAULT_STEP;

		if( false !== strpos($action, 'step') && isset($this->steps[$action]) ) {
			$step = $this->current_step = $action;
		}

		ob_start();
		$this->steps[$step]->html();
		$step_content = ob_get_clean();

		$this->showPage($step_content);
	}

	/**
	 * Регистрируем класс обработчик шага
	 *
	 * Класс обработчик полностью отвечает за шаблон и функционально шага.
	 *
	 * @param string $path
	 * @param string $class_name
	 * @throws \Exception
	 */
	protected function register_step($path, $class_name)
	{
		require_once $path;

		if( !class_exists($class_name) ) {
			throw new \Exception("Class {$class_name} is not found!");
		}

		$step = new $class_name($this);
		$this->steps[$step->get_id()] = $step;
	}

	/**
	 * Requests assets (js and css) for the page.
	 *
<<<<<<< HEAD
	 * @param \Wbcr_Factory450_ScriptList $scripts
	 * @param \Wbcr_Factory450_StyleList $styles
	 *
	 * @return void
	 * @see Wbcr_FactoryPages449_AdminPage
=======
	 * @param \Wbcr_Factory469_ScriptList $scripts
	 * @param \Wbcr_Factory469_StyleList $styles
	 *
	 * @return void
	 * @see Wbcr_FactoryPages467_AdminPage
>>>>>>> update
	 *
	 */
	public function assets($scripts, $styles)
	{
		parent::assets($scripts, $styles);

<<<<<<< HEAD
		$this->styles->add(FACTORY_TEMPLATES_102_URL . '/assets/css/page-setup.css');
=======
		$this->styles->add(FACTORY_TEMPLATES_118_URL . '/assets/css/page-setup.css');
>>>>>>> update

		// Require step assets
		if( isset($_GET['action']) && false !== strpos($_GET['action'], 'step') && isset($this->steps[$_GET['action']]) ) {
			$this->steps[$_GET['action']]->assets($scripts, $styles);
		}
	}

	/**
	 * {@inheritDoc}
	 *
	 * @param string $content
	 * @since   2.2.2 - добавлен
	 */
	protected function showPage($content = null)
	{
		?>
<<<<<<< HEAD
		<div class="w-factory-templates-102-setup">
			<ol class="w-factory-templates-102-setup-steps">
=======
		<div class="w-factory-templates-118-setup">
			<ol class="w-factory-templates-118-setup-steps">
>>>>>>> update
				<?php foreach($this->steps as $step): ?>
					<?php if( self::DEFAULT_STEP === $step->get_id() ) {
						continue;
					} ?>
					<li <?php if($this->current_step === $step->get_id()): ?>class="active"<?php endif; ?>><?php echo $step->get_title(); ?></li>
				<?php endforeach; ?>
			</ol>
<<<<<<< HEAD
			<div class="w-factory-templates-102-setup-content">
				<?php echo $content; ?>
			</div>
			<a class="w-factory-templates-102-setup-footer-links" href="<?php echo esc_url($this->get_close_wizard_url()); ?>">
				<?php _e('Not now', 'wbcr_factory_templates_102') ?>
=======
			<div class="w-factory-templates-118-setup-content">
				<?php echo $content; ?>
			</div>
			<a class="w-factory-templates-118-setup-footer-links" href="<?php echo esc_url($this->get_close_wizard_url()); ?>">
				<?php _e('Not now', 'wbcr_factory_templates_118') ?>
>>>>>>> update
			</a>
		</div>
		<?php
	}
}
