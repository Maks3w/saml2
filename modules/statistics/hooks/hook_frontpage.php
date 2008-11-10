<?php
/**
 * Hook to add the modinfo module to the frontpage.
 *
 * @param array &$links  The links on the frontpage, split into sections.
 */
function statistics_hook_frontpage(&$links) {
	assert('is_array($links)');
	assert('array_key_exists("links", $links)');

	$links['links'][] = array(
		'href' => SimpleSAML_Module::getModuleURL('statistics/showstats.php'),
		'text' => 'Show statistics',
	);

}
?>