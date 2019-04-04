<?php

// $schemaList = "SELECT schema_name FROM information_schema.schemata;";
$schemaList = "SELECT DISTINCT table_schema FROM information_schema.tables WHERE table_schema != 'pg_catalog' AND table_schema != 'information_schema';";