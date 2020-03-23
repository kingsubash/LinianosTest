<?php
/*
# Challenge
 
Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".
 
But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.
*/
$masterAr = array();
$strAr = array("Linio", "IT", "Linianos");
for ($i=1; $i <= 100; $i++) { 
	if($i % 3 == 0 || $i % 5 == 0){
		$masterAr[] = $strAr[ ($i % 3 == 0 && $i % 5 >= 1)+(($i % 3 == 0 && $i % 5 == 0) * 2)];
		continue;
	}
	$masterAr[] = $i;
}
foreach ($masterAr as $k => $v) {
	echo $v."<br>";
}


//Sample Output
/*

1
2
IT
4
Linio
IT
7
8
IT
Linio
11
IT
13
14
Linianos
16
17
IT
19
Linio
IT
22
23
IT
Linio
26
IT
28
29
Linianos
31
32
IT
34
Linio
IT
37
38
IT
Linio
41
IT
43
44
Linianos
46
47
IT
49
Linio
IT
52
53
IT
Linio
56
IT
58
59
Linianos
61
62
IT
64
Linio
IT
67
68
IT
Linio
71
IT
73
74
Linianos
76
77
IT
79
Linio
IT
82
83
IT
Linio
86
IT
88
89
Linianos
91
92
IT
94
Linio
IT
97
98
IT
Linio

*/
?>