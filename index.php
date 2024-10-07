<?php
// Get the hostname from the environment variable
$hostname = gethostname();

// Output a greeting message
echo "Hello from webserver#" . $hostname;
?>