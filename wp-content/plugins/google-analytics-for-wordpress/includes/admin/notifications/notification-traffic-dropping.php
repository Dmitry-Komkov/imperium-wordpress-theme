<?php

/**
 * Add notification when the number of total sessions is less than the previous 30 days.
 * Recurrence: 30 Days
 *
 * @since 7.12.3
 */
final class MonsterInsights_Notification_Traffic_Dropping extends MonsterInsights_Notification_Event {

<<<<<<< HEAD
	public $notification_id = 'monsterinsights_notification_traffic_dropping';
	public $notification_interval = 30; // in days
	public $notification_type = array( 'basic', 'lite', 'master', 'plus', 'pro' );
=======
	public $notification_id       = 'monsterinsights_notification_traffic_dropping';
	public $notification_interval = 30; // in days
	public $notification_type     = array( 'basic', 'lite', 'master', 'plus', 'pro' );
>>>>>>> update
	public $notification_category = 'insight';
	public $notification_priority = 2;

	/**
	 * Build Notification
	 *
	 * @return array $notification notification is ready to add
	 *
	 * @since 7.12.3
	 */
	public function prepare_notification_data( $notification ) {
		$data                             = array();
		$report                           = $this->get_report();
		$data['prev_sessions_difference'] = isset( $report['data']['infobox']['sessions']['prev'] ) ? $report['data']['infobox']['sessions']['prev'] : 0;

		if ( ! empty( $data ) && $data['prev_sessions_difference'] < 0 ) {

<<<<<<< HEAD
			$is_em = defined( 'EXACTMETRICS_VERSION' );
=======
			$is_em = function_exists( 'ExactMetrics' );
>>>>>>> update

			$learn_more_url = $is_em
				? 'https://www.exactmetrics.com/epic-list-of-marketing-hacks-for-explosive-traffic-growth/'
				: 'https://www.monsterinsights.com/marketing-hacks-guaranteed-to-grow-your-traffic/';

			$notification['title'] = __( 'Your Website Traffic is Dropping', 'google-analytics-for-wordpress' );
			// Translators: Traffic dropping notification content
<<<<<<< HEAD
			$notification['content'] = sprintf( __( 'Your website traffic is decreasing and that’s a reason to take action now. Less traffic means less opportunities to make your brand known, make relationships and ultimately sell your service or product. <br><br>Follow the marketing hacks of %sthis article%s to start growing your traffic again.', 'google-analytics-for-wordpress' ), '<a href="' . $this->build_external_link( 'https://www.monsterinsights.com/marketing-hacks-guaranteed-to-grow-your-traffic/' ) . '" target="_blank">', '</a>' );
			$notification['btns']    = array(
				"learn_more"  => array(
=======
			$notification['content'] = sprintf( __( 'Your website traffic is decreasing and that’s a reason to take action now. Less traffic means less opportunities to make your brand known, make relationships and ultimately sell your service or product. <br><br>Follow the marketing hacks of %1$sthis article%2$s to start growing your traffic again.', 'google-analytics-for-wordpress' ), '<a href="' . $this->build_external_link( 'https://www.monsterinsights.com/marketing-hacks-guaranteed-to-grow-your-traffic/' ) . '" target="_blank">', '</a>' );
			$notification['btns']    = array(
				'learn_more'  => array(
>>>>>>> update
					'url'         => $this->build_external_link( $learn_more_url ),
					'text'        => __( 'Learn More', 'google-analytics-for-wordpress' ),
					'is_external' => true,
				),
<<<<<<< HEAD
				"view_report" => array(
					'url'  => $this->get_view_url( 'monsterinsights-report-overview', 'monsterinsights_reports' ),
					'text' => __( 'View Report', 'google-analytics-for-wordpress' )
=======
				'view_report' => array(
					'url'  => $this->get_view_url( 'monsterinsights-report-overview', 'monsterinsights_reports' ),
					'text' => __( 'View Report', 'google-analytics-for-wordpress' ),
>>>>>>> update
				),
			);

			return $notification;
		}

		return false;
	}

}

// initialize the class
<<<<<<< HEAD
new MonsterInsights_Notification_Traffic_Dropping();
=======
new MonsterInsights_Notification_Traffic_Dropping();
>>>>>>> update
