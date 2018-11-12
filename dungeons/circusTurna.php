                <div id="content">
                                <script type="text/javascript" src="8501/js/dragdrop2.js"></script>
<script type="text/javascript" src="8501/js/arena.js"></script>
<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>

<p class="buildingDesc">
    <img src="8501/img/npc/0/0_3.jpg" />
    En las sombras de la Arena se encuentra el Circo Turma. Lo cotidiano no tiene cabida aquí: todo es emoción, luchas, sangre y muertos para el disfrute de la élite de la sociedad. Sin embargo, en esta Arena ya no será sólo tu habilidad la que determine tu destino: todos los gladiadores deben registrarse indicando también los nombres de sus mercenarios. Éstos seguirán tus pasos a medida que entras en la Arena, puesto que sólo codo con codo podréis vencer en estas batallas. Cuantos más enemigos matéis en total, mayor será vuestra recompensa.</p>

    <h1 style="clear:both;">Liga de los combates de espectáculo (Nivel 10-19)</h1>
    <div style="margin:5px 20px 0px 20px; width: 90%;">
        <div class="title_box">
            <div class="title_inner">
                Cambiar estado de participación            </div>
        </div>
        <div class="title2_box">
            <div class="title2_inner">
                <div id="ct_state_current" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' ><div style=\'width:400px;\'>Activo: Puedes atacar a otros gladiadores, mejorar tu posición, robar oro y reunir experiencia. Sin embargo, los demás también te pueden atacar a ti y robarte oro.<br /><br />Pasivo: No puedes atacar a nadie ni alcanzar una posición. Todavía te pueden atacar, pero nadie te podrá quitar oro ni causarte daños a largo plazo.</div></td></tr></table>')">
                    Estado de participación actual: <span style="color:red;">Pasivo</span>
                </div>
                <div id="ct_state_change">
                    	<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
	<div id="blackoutDialogLeague" class="cancel_confirm">
		<div class="blackoutDialog_header pngfix">
			<div style="font-size:large;text-align:center;" id="header_League">Cambiar estado de participación</div>
		</div>
		<div class="blackoutDialog_body pngfix">
            <div class="blackoutDialog_icon">
                                    <img src="8501/img/ui/blackoutDialog/icon_question.jpg" align="left" vspace="0" hspace="20" />
                            </div>
			<div style="padding:5px;min-height:60px;" id="dialogTxtLeague"><p>Tiempo de espera para poder cambiar tu estado de participación de nuevo: 24 h</p>¿De verdad quieres cambiar tu estado de participación a <b>Activo</b>?</div>
			<table cellspacing="0" cellpadding="0" style="border-spacing:0px;width:80%;margin-top:20px;margin-left: 50px;">
				<tr>
					<td style="width:50%">
						<div class="al" style="padding:5px">
							<input type="submit" class="button1" value="Si" onclick="window.location.href = 'index.php?mod=arena&submod=grouparena&changeStatus=1&sh=acc8a7e22ab9cb4e2fb94e2f55f05660'" id="linkLeague" />
						</div>
					</td>
					<td style="width:50%">
						<div class="ar" style="padding:5px">
							<input type="submit" class="button1" value="No" onclick="blackoutDialog(false)" />
						</div>
					</td>
				</tr>
			</table>
		</div>
        <div class="blackoutDialog_footer pngfix"></div>
	</div>
	                    <input type="submit"  name="switchStatus" value="Cambiar" class="button2" onclick="blackoutDialog(true, 'blackoutDialogLeague', 350)" />
                </div>
                <br class="clearfloat" />
                            </div>
        </div>
    </div>

    <table width="90%" style="clear:both;margin:20px" cellspacing="0">
        <tr id="errorRow" style="display: none;">
            <td colspan="2">
                <div class="title_box">
                    <div class="title_inner" id="errorText"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td width="40%" valign="top">
                <div class="title_box">
                    <div class="title_inner">
                        Los mejores 5                    </div>
                </div>
                <div class="title2_box">
                    <div class="title2_inner">
                        <table width="100%">
                            <tr>
                                <th >lugar</th>
                                <th colspan="2">Nombre</th>
                            </tr>
                                                                                        <tr>
                                                                            <th>1<img src="8501/img/Pokal.gif" alt="" title="" border="0" align="top"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Vencé a este enemigo para ganar el premio mas grande.</td></tr></table>')" /></th>
                                        <td><a href="index.php?mod=player&p=16183&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">JitaRo</a></td>
                                        <td><center>2.829 <img src="8501/img/res2.gif" alt="Oro" title="Oro" border="0" /></center></td>
                                                                    </tr>
                                                                                            <tr>
                                                                            <th>2</th>
                                        <td colspan="2"><a href="index.php?mod=player&p=20887&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">Dogito</a></td>
                                                                    </tr>
                                                                                            <tr>
                                                                            <th>3</th>
                                        <td colspan="2"><a href="index.php?mod=player&p=20165&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">CarlosTuMachete</a></td>
                                                                    </tr>
                                                                                            <tr>
                                                                            <th>4</th>
                                        <td colspan="2"><a href="index.php?mod=player&p=18721&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">Anbry</a></td>
                                                                    </tr>
                                                                                            <tr>
                                                                            <th>5</th>
                                        <td colspan="2"><a href="index.php?mod=player&p=15741&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">Borhez</a></td>
                                                                    </tr>
                                                                                    </table>
                    </div>
                </div>
            </td>
            <td width="60%" valign="top">
                <div style="margin-left:3px">
                    <div class="title_box">
                        <div class="title_inner">Tu posición</div>
                    </div>
                    <div class="title2_box"><div class="title2_inner">
                        <table width="80%">
                            <tr>
                                <th width="20%">lugar</th>
                                <th width="50%">Nombre</th>
                                <th>&nbsp;</th>
                            </tr>
                                                                                                <tr>
                                        <th>294</th>
                                        <td><a href="index.php?mod=player&p=21554&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">luisadriel96</a></td>
                                        <!--<td><a href="index.php?mod=arena&pid=21554&sh=acc8a7e22ab9cb4e2fb94e2f55f05660"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Desafío</td></tr></table>')" ><img src="8501/img/fordern.gif" alt="" title="" border="0" /></a></td>-->
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                                                                                <tr>
                                        <th>295</th>
                                        <td><a href="index.php?mod=player&p=21640&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">Donswers</a></td>
                                        <!--<td><a href="index.php?mod=arena&pid=21640&sh=acc8a7e22ab9cb4e2fb94e2f55f05660"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Desafío</td></tr></table>')" ><img src="8501/img/fordern.gif" alt="" title="" border="0" /></a></td>-->
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                                                                                <tr>
                                        <th>296</th>
                                        <td><a href="index.php?mod=player&p=21756&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">fernando1991</a></td>
                                        <!--<td><a href="index.php?mod=arena&pid=21756&sh=acc8a7e22ab9cb4e2fb94e2f55f05660"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Desafío</td></tr></table>')" ><img src="8501/img/fordern.gif" alt="" title="" border="0" /></a></td>-->
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                                                                                <tr>
                                        <th>297</th>
                                        <td><a href="index.php?mod=player&p=21659&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">melio</a></td>
                                        <!--<td><a href="index.php?mod=arena&pid=21659&sh=acc8a7e22ab9cb4e2fb94e2f55f05660"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Desafío</td></tr></table>')" ><img src="8501/img/fordern.gif" alt="" title="" border="0" /></a></td>-->
                                        <td>
                                                                                    </td>
                                    </tr>
                                                                                        <tr>
                                <th>298</th>
                                <td colspan="2">ibobiixd</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
            </table>

<script type='text/javascript'>var tickerArray = new Array();function pad(n, width, z) {
  z = z || "0";
  n = n + "";
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}function doTicker(){
                                    n=new Date();
                                    if (tickerArray.length > 0)
                                    {
                                        for (i = 0; i < tickerArray.length; i++)
                                        {
                                            if (isNaN(document.getElementById(tickerArray[i]["id"])))
                                            {
                                                var e = document.getElementById(tickerArray[i]["id"]);
                                                s = tickerArray[i]["sek"];
                                                seconds = tickerArray[i]["sek"];
                                                m = 0;
                                                h = 0;
                                                d = 0;
                                                if (s < 0)
                                                    e.innerHTML = "---";
                                                else
                                                {
                                                    var timeTXT = s + " s";
                                                    if (s > 59)
                                                    {
                                                        m = Math.ceil(s / 60);
                                                        s = s-m * 60;
                                                        timeTXT = m + " m";
                                                    }
                                                    if (m > 59)
                                                    {
                                                        h = Math.ceil(m / 60);
                                                        m = m - h * 60;
                                                        timeTXT = h + " h";
                                                    }
                                                    if (h > 24)
                                                    {
                                                        d = Math.ceil(h / 24);
                                                        h = h-d * 24;
                                                        timeTXT = d + " d";
                                                    }

                                                    e.innerHTML = timeTXT;
var numdays    = Math.floor(seconds / 86400);
var numhours   = pad(Math.floor((seconds % 86400) / 3600), 2);
var numminutes = pad(Math.floor(((seconds % 86400) % 3600) / 60), 2);
var numseconds = pad(((seconds % 86400) % 3600) % 60, 2);

e.innerHTML = (numdays ? numdays + " d " : "") + numhours + ":" + numminutes + ":" + numseconds + "";
                                                    tickerArray[i]["sek"]--;
                                                }
                                            }
                                        }
                                    window.setTimeout("doTicker();",999);
                                }
                            }doTicker();</script>                        </div>
                    </div>
                </div>
