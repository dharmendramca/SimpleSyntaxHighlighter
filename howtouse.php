<?php
//Include require class;
require_once("SimpleSyntaxHighlighter.php");
$simple=new SimpleSyntaxHighlighter;


$match='Boat pistol bicycle grenade post-tank-traps table tanto neon rifle spook bomb sign drugs. Girl 3D-printed faded tattoo office systemic military-grade j-pop corrupted drone pen warehouse free-market camera engine hacker tanto';
$syntax='Construct denim savant rifle ablative alcohol apophenia katana. Receding assault augmented reality spook Chiba advert alcohol Shibuya decay industrial grade carbon. Singularity savant vinyl saturation point warehouse faded dissident sunglasses film assault claymore mine bridge post. Marketing shrine semiotics sentient cardboard jeans neural bomb motion BASE spook convenience store dissident towards shoes Kowloon. Tank-traps convenience store San Francisco girl render-farm j-pop otaku boy claymore mine grenade cartel. Boat pistol bicycle grenade post-tank-traps table tanto neon rifle spook bomb sign drugs. Girl 3D-printed faded tattoo office systemic military-grade j-pop corrupted drone pen warehouse free-market camera engine hacker tanto. ';

$color="Yellow";


echo $simple->HighlightThis($match,$syntax, $color);

?>

