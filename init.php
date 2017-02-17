<!--
/**
* Copyright 2015 IBM Corp. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the “License”);
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* https://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an “AS IS” BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
-->

<?php include 'db.php';?>
<?php

$sqlTable="DROP TABLE IF EXISTS VISITORS_TABLE";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
} else {
	//echo "Cannot drop table. "  . mysqli_error();
}


echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE VISITORS_TABLE (
 ID bigint(20) NOT NULL AUTO_INCREMENT,
 TIME TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
 NAME varchar(255) DEFAULT NULL,
 PRIMARY KEY (ID)
) DEFAULT CHARSET=utf8
";

if ($mysqli->query($sqlTable)) {
    echo "Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}


?>
