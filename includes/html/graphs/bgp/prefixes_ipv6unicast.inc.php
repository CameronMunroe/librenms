<?php

$rrd_filename = rrd_name($device['hostname'], ['cbgp', $data['bgpPeerIdentifier'] . '.ipv6.unicast']);

require 'includes/html/graphs/bgp/prefixes.inc.php';
