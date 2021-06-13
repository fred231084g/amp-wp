<?php

$pattern = str_replace( "\n", '|', rtrim( $argv[1]) );
$changed_files = explode( "\n", rtrim( $argv[2] ) );

$filtered_files = preg_grep("/^${pattern}$/m", $changed_files, PREG_GREP_INVERT );

echo $filtered_files ? count( $filtered_files ) : 0;
