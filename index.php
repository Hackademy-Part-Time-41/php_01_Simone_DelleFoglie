<?php




// TRACCIA 1
$Integer = 0;
$float = 1.3445;
$String = 'ciao';
$Boolean = true;

var_dump($Integer);
var_dump($float);
var_dump($String);
var_dump($Boolean);

const Integer = 0;
const float = 1.908;
const String = 'ciao';
const Boolean = true;


//TRACCIA 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = "tutto";

echo "$text1 $text2 $text3$text4 $text5 $text6 $text7 $text8";


//TRACCIA 3



$words1 = [
	'una',
	'vita',
	'colle',
	'mi',
	'rosso',
	[
	'oscura',
	'era',
		[
		'mezzo',
        'di',
			[
			'cammin',
			'Nel',
				[
				'selva',
				'la',
					[
					'via',
					'una',
					]
				],
			]
		],
	'ritrovai',
	'per'
	],
	'diritta'
];

$words2 = [
    'elemento1' => 'nostra',
    'elemento2' => [
    'Virgilio',
    'smarrita',
    'ché'
    ]
];

// var_dump($words1);
// var_dump($words2);

$result = $words1[5][2][2][1].' '.$words1[5][2][0].' '.$words1[5][2][1].' '.$words1[5][2][2][0].' '.$words1[5][2][1].' '.$words2['elemento1'].' '.$words1[1].' '.$words1[3].' '.$words1[5][3].' '.$words1[5][4].' '.$words1[5][2][2][2][2][1].' '.$words1[5][2][2][2][0].' '.$words1[5][0].', '.$words2['elemento2'][2].' '.$words1[5][2][2][2][1].' '.$words1[6].' '.$words1[5][2][2][2][2][0].' '.$words1[5][1].' '.$words2['elemento2'][1].'.';

echo $result;
