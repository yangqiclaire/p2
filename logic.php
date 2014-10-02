<?php
//generate world array
$wordlist=array ('hapless','wandering','safe','whispering',
	'battle','arch','incredible','cattle','gaping','flawless',
	'massive','messy','foolish','sophisticated','pumped','striped',
	'shiny','alike','absent','brash','right','offbeat','noxious','secret',
	'deer','digestion','ultra','disagreeable','brown','ossified','righteous',
	'utopian','violent','victorious','elastic','halting','fact','breezy',
	'outgoing','eggs','pretty','piquant','perpetual','outstanding','driving',
	'cushion','railway','powder','range','front','finger','rule','plane','quartz',
	'fruit','guide','glove','letters','middle','metal','line','shelf','secretary','shoes',
	'scissors','part','payment','screw','neck','hook','sticks','treatment','excuse','irritate',
	'harass','look','surprise','underwear','paddle','ignore','sugar','town','top','earn','cough',
	'scrub','scream','pine','trousers','toothpaste','bruise','winter','chop','watch','stop','snow','thaw'
);

/*assign values of variable 'count', 
set word number limits to 1-8.
*/ 
if (empty($_GET['count'])){
	$count=2;
}
else if ($_GET['count']>0 && $_GET['count']<=6){
	$count=$_GET['count'];
}

else {$count='';
}


if (isset($_GET['number'])){
	$number='checked';
}
else {$number='';
}


if (isset($_GET['number'])){
	$number='checked';
}
else {$number='';
}

if (isset($_GET['symbol'])){
	$symbol='checked';
}
else {$symbol='';
}

//generate passwords
$password=[];
for ($i=0; $i<$count; $i++) {
	$wordid=rand(0,count($wordlist)-1);
    $word=$wordlist[$wordid]; 
    array_push($password, $word);
}

//include number in passwords
if ($number=='checked') {
	$numberid=rand(0,9);
	$word=$word.$numberid;
    $password[$count-1]=$word;
}

//include symbol in passwords
$symbolarray=array ('!','@','#','$','%','^','&','~');
if ($symbol=='checked') {
	$symbolid=rand(0,count($symbolarray)-1);
	$word=$word.$symbolarray[$symbolid];
	$password[$count-1]=$word;
}



