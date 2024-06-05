<?PHP
////////////////////////////////////////////////////////////////////////////////
//Houses that owners didn't login for x days should be cleaned by a Gamemaster//
///////////////////////////////////by klekSu////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////config/////////////////////////////////////
$level = 1000; //house of owners above this level won't be shown
$days = 14; //how many days player must be offline to show his house
$weeks = $days/14; //days/7 = weeks
$towns = array('No Town', 'Town 1', 'Town 2', 'Town 3');
//////////////////////////////////end of config/////////////////////////////////

//////////////////////////////////////query/////////////////////////////////////
$qe = $SQL->query('SELECT `players`.`account_id`,`players`.`id`,`players`.`name` as `name`,`players`.`level` as `level`, `players`.`lastlogin` AS `lastlogin`, `houses`.`owner`,`houses`.`id` AS `hid`, `houses`.`name` AS `hname`, `houses`.`town` AS `htown`, `accounts`.`id` FROM `players`,`houses`,`accounts` WHERE `accounts`.`id` = `players`.`account_id` AND `houses`.`owner` = `players`.`id` AND `players`.`level` < '.(int) $level.' AND `players`.`lastlogin` < UNIX_TIMESTAMP() - '.(int) $days.'*24*60*60 ORDER BY `htown` ASC, `lastlogin`;');
//////////////////////////////////end of query//////////////////////////////////

$main_content .= '
<H2>
   <CENTER>
       Casas de jogadores inativos que se pode usar comando <H2><b>!eject</b></H2> no mundo '.$config['site']['worlds'][(int) $_GET['world']].' que nao logaram a +'. (int) $weeks.' semana 
	   <br>
	   <font style="text-decoration: inherit; text-shadow:#000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px" size="2px" color="red">CUIDADO tudo que tem na casa vai para o DP do jogador inativo.... Mesmo perde 60% dos itens contido dentro da casa.</font>
   </CENTER>
</H2>';

$main_content .= '
<CENTER>
<TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%>
   <TR bgcolor="'.$config['site']['vdarkborder'].'">
       <TD><FONT COLOR="white"><B>Character Name</B></FONT></TD>
       <TD ALIGN="center"><FONT COLOR="white"><B>Last Login</B></FONT></TD>
       <TD ALIGN="center"><FONT COLOR="white"><B>House</B></FONT></TD>
       <TD ALIGN="right"><FONT COLOR="white"><B>Town</B></FONT></TD>
';

foreach( $qe as $k )
{
   if(is_int($number_of_rows / 2))
   {
       $bgcolor = $config['site']['darkborder'];
   }
   else
   {
       $bgcolor = $config['site']['lightborder'];
   }
   $number_of_rows++;

$main_content .= '
   <TR BGCOLOR="'.$bgcolor.'">
       <TD><A HREF="?subtopic=characters&name='.$k['name'].'">'.$k['name'].'</A> (Level: '.$k['level'].')</TD>
       <TD ALIGN="center">'.date("j F Y", $k['lastlogin']).'</TD>';
   if(!empty($k['hname']))
   {
       $main_content .= '
       <TD ALIGN="center">'.$k['hname'].'</TD>
       ';
   }
   else
   {
       $main_content .= '
       <TD ALIGN="center">No Name</TD>
       ';
   }
       $main_content .= '
       <TD ALIGN="right">'.$towns[$k['htown']].'</TD>
   </TR>';
}

$main_content .= '
</TABLE>
</CENTER>
';

?>