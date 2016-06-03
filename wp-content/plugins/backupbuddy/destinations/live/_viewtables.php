<?php
/* BackupBuddy Stash Live Remote Tables Viewer (table format; not file format)
 *
 * @author Dustin Bolton
 * @since 7.0
 *
 */

require_once( pb_backupbuddy::plugin_path() . '/destinations/live/live_periodic.php' );
$catalog = backupbuddy_live_periodic::get_catalog();




$tables_list = array();
foreach( $catalog['tables'] as $table_name => $table ) {
	$pendingDelete = __( 'No', 'it-l10n-backupbuddy' );
	if ( true === $table['d'] ) {
		$pendingDelete = __( 'Yes', 'it-l10n-backupbuddy' );
	}
	$tables_list[] = array(
		$table_name,
		pb_backupbuddy::$format->date( pb_backupbuddy::$format->localize_time( $table['a'] ) ) . '<br><span class="description">(' . pb_backupbuddy::$format->time_ago( $table['a'] ) . ' ago)</span>',
		pb_backupbuddy::$format->date( pb_backupbuddy::$format->localize_time( $table['m'] ) ) . '<br><span class="description">(' . pb_backupbuddy::$format->time_ago( $table['m'] ) . ' ago)</span>',
		pb_backupbuddy::$format->date( pb_backupbuddy::$format->localize_time( $table['b'] ) ) . '<br><span class="description">(' . pb_backupbuddy::$format->time_ago( $table['b'] ) . ' ago)</span>',
		pb_backupbuddy::$format->file_size( $table['s'] ),
		(string)$table['t'],
		$pendingDelete
	);
}

pb_backupbuddy::$ui->list_table(
	$tables_list,
	array(
		'action'		=>	pb_backupbuddy::page_url(),
		'columns'		=>	array(
								__( 'Database Tables', 'it-l10n-backupbuddy' ) . ' <img src="' . pb_backupbuddy::plugin_url() . '/images/sort_down.png" style="vertical-align: 0px;" title="Sorted alphabetically">',
								__( 'Added', 'it-l10n-backupbuddy' ),
								__( 'Modified', 'it-l10n-backupbuddy' ),
								__( 'Transferred', 'it-l10n-backupbuddy' ),
								__( 'Size', 'it-l10n-backupbuddy' ),
								__( 'Send Retries', 'it-l10n-backupbuddy' ),
								__( 'Pending Delete?', 'it-l10n-backupbuddy' ),
							),
		'css'			=>		'width: 100%',
	)
);
