<?php
global $infra;
infra_when($infra, 'oninitjs', function () {
	global $infra;
	$infra['js'] .= $infra['require']('*hash/hash.js');
});
