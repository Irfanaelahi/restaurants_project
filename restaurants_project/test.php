<?php
if (extension_loaded('pgsql')) {
    echo "PostgreSQL Enabled";
} else {
    echo "PostgreSQL Not Enabled";
}
?>