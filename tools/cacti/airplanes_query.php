#! /usr/bin/php
<?php
    require_once("database.php");

    $result = sql_query("SELECT * FROM plane_trade WHERE plane_type=".intval($argv[1]));
    $planes = sql_fetch_assoc($result);

/*
id 	plane_type 	start_phase 	stock 	avarage_stock 	acquisitions 	avarage_acquisitions 	sales 	avarage_sales 	cost_factor
2 	0 	no 	14 	15.4456231358377 	0 	0.0902500000007085 	0 	0.000254504823282379 	0.234073393600129
3 	1 	no 	0 	0.0020210048371123 	0 	0.00637903666356492 	0 	0.826387686696181 	0.536765889054125
4 	2 	no 	663 	662.157854927459 	0 	1.11424279730839 	0 	3.1140651877807 	1.51794833583869
5 	3 	no 	725 	729.508283848936 	0 	1.71468674553433 	6 	1.20021671937876 	1.34759534369865
6 	4 	no 	120 	105.724435175238 	0 	0.881851453821059 	0 	0.575661172259397 	1.07425579525405
7 	5 	no 	0 	2.70855595394302e-05 	0 	0.0011108354800784 	0 	0.000190864315696411 	3.82977225924914
8 	6 	yes 	0 	0 	0 	0 	0 	0 	1.35
9 	7 	yes 	0 	0 	0 	0 	0 	0 	1.35
10 	8 	no 	127 	128.975389121545 	1 	0.330958378046197 	0 	0.227577375813264 	1.83579657841793
11 	9 	no 	5 	5.00000043622325 	0 	4.21529123504839e-05 	0 	1.82194662504781e-10 	1.27801371118693
12 	10 	no 	32 	32.5418367708646 	0 	0.051727117249196 	0 	0.0194381044732338 	0.598193172333773
13 	11 	yes 	0 	0 	0 	0 	0 	0 	1.35
14 	12 	no 	12 	12 	0 	1.77105969180347e-25 	0 	7.48427751347364e-35 	0.0017662428607999
15 	13 	no 	107 	105.348690609147 	0 	0.00812970236750621 	0 	0.0938362065817303 	0.0816630229125248
16 	14 	no 	13 	11.5541786613998 	0 	0.129264453670443 	0 	0.383140454708787 	1.84096937324986

*/

    echo time().':'.$planes[stock].':'.(round($planes[cost_factor]*100)).':'.(round($planes[gain_factor]*100));

?>