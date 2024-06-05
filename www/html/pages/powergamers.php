<?php
if(!defined('INITIALIZED'))
exit;

$limit = 50;
$type = $_REQUEST['type'];


function coloured_value($valuein)
{
{
    if(abs($valuein) > 1000000000)
        $value2 = number_format(($valuein/1000000000),2)."B"; //Change the "2" to how many numbers you want to show after the decimal Ex 5 = 5.12345, 2 = 5.12
    elseif(abs($valuein) > 1000000)
        $value2 = number_format(($valuein/1000000),2)."M";
    elseif(abs($valuein) > 1000)
        $value2 = number_format(($valuein/1000),2)."K";
    elseif(abs($valuein) > 1)
        $value2 = number_format(($valuein/1),0)."xp";
}
    if($valuein > 0)
        return '<font color="green">+'.$value2.'</font>';
    elseif($valuein < 0)
        return '<font color="red">'.$value2.'</font>';
    else
        return '<font color="black">'.$valuein.'</font>';
}

if(empty($type))
$players = $SQL->query('SELECT * FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' < 2 ORDER BY ' . $SQL->fieldName('experience') . '-' . $SQL->fieldName('exphist_lastexp') . ' DESC LIMIT ' . $limit)->fetchAll();
elseif($type == "sum")
$players = $SQL->query('SELECT * FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' < 2 ORDER BY ' . $SQL->fieldName('exphist1') . '+' . $SQL->fieldName('exphist2') . '+' . $SQL->fieldName('exphist3') . '+' . $SQL->fieldName('exphist4') . '+' . $SQL->fieldName('exphist5') . '+' . $SQL->fieldName('exphist6') . '+' . $SQL->fieldName('exphist7') . '+' . $SQL->fieldName('experience') . '-' . $SQL->fieldName('exphist_lastexp') . ' DESC LIMIT ' . $limit)->fetchAll();
elseif($type >= 1 && $type <= 7)
$players = $SQL->query('SELECT * FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' < 2 ORDER BY ' . $SQL->fieldName('exphist' . (int) $type) . ' DESC LIMIT '.$limit)->fetchAll();
$main_content .= '<CENTER><H2>Ranking of powergamers</H2></CENTER><BR><TABLE BORDER="0" CELLPADDING="4" CELLSPACING="1" WIDTH="100%"><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD style="color:white"><B>Rank</B></TD><TD style="color:white"><B>Name</B></TD>';
if($type == "sum")
$main_content .= '<TD bgcolor="red"><b><center><a href="?subtopic=powergamers&type=sum">7 Days sum</a></center></B></TD>';
else
$main_content .= '<TD bgcolor="yellow"><b><center><a href="?subtopic=powergamers&type=sum">7 Days sum</a></center></B></TD>';
for($i = 7; $i >= 2; $i--)
{
if($type == $i)
$main_content .= '<TD bgcolor="red"><b><center><a href="?subtopic=powergamers&type='.$i.'">'.$i.' Days Ago</a></center></B></TD>';
else
$main_content .= '<TD bgcolor="yellow"><b><center><a href="?subtopic=powergamers&type='.$i.'">'.$i.' Days Ago</a></center></B></TD>';
}
if($type == 1)
$main_content .= '<TD bgcolor="red"><b><center><a href="?subtopic=powergamers&type=1">1 Day Ago</a></center></B></TD>';
else
$main_content .= '<TD bgcolor="yellow"><b><center><a href="?subtopic=powergamers&type=1">1 Day Ago</a></center></B></TD>';
if(empty($type))
$main_content .= '<TD bgcolor="red"><b><center><a href="?subtopic=powergamers">Today</a></center></B></TD>';
else
$main_content .= '<TD bgcolor="yellow"><b><center><a href="?subtopic=powergamers">Today</a></center></B></TD>';
$main_content .= '</TR>';
foreach($players as $player)
{
if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center">'.$number_of_rows.'. </td>';
if($player['online'] == 1)
$main_content .= '<td><a href="?subtopic=characters&name='.urlencode($player['name']).'"><b><font color="green">'.htmlspecialchars($player['name']).'</font></b></a>';
else
$main_content .= '<td><a href="?subtopic=characters&name='.urlencode($player['name']).'"><b><font color="red">'.htmlspecialchars($player['name']).'</font></b></a>';
$main_content .= '<br />'.$player['level'].' '.htmlspecialchars(Website::getVocationName($player['vocation'], $player['promotion'])).'</td><td align="right">'.coloured_value($player['exphist1'] + $player['exphist2'] + $player['exphist3'] + $player['exphist4'] + $player['exphist5'] + $player['exphist6'] + $player['exphist7'] + $player['experience'] - $player['exphist_lastexp']).'</td>';
$main_content .= '<td align="right">'.coloured_value($player['exphist7']).'</td><td align="right">'.coloured_value($player['exphist6']).'</td><td align="right">'.coloured_value($player['exphist5']).'</td><td align="right">'.coloured_value($player['exphist4']).'</td><td align="right">'.coloured_value($player['exphist3']).'</td><td align="right">'.coloured_value($player['exphist2']).'</td><td align="right">'.coloured_value($player['exphist1']).'</td><td align="right">'.coloured_value($player['experience']-$player['exphist_lastexp']).'</td></tr>';
}
$main_content .= '</TABLE>';