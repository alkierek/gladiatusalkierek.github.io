<script type="text/javascript" src="8501/js/misc.js"></script>


<div id="mission_cat_character">
<div class="contentboard_start">
<div class="contentboard_header_medium"><div class="contentboard_inner"><div class="missions_header_content">Desarrollo de personaje</div></div></div>
<!-- MISION 1  -->
<div id="mission_slot_reach_level">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_reach_level" class="missions_data">
<div id="mission_title_reach_level" class="missions_slot_title">Alcanza el nivel <?php echo $requiere2; ?></div>
<?php if ($mision1c == 1) {
    ?>
<a id="finish_reach_level" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=reach_level" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere1; ?> / <?php echo $requiere2; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision1p; ?>%;"></div></div></div>
<?php
}
?>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_reach_level">
<div id="mission_reach_level_reward_god_1" class="missions_slot_reward">10 <img src="8501/img//ui/gods/minerva_s16.png" title="Minerva" align="absmiddle" border="0" /></div>
<div id="mission_reach_level_reward_god_2" class="missions_slot_reward">10 <img src="8501/img//ui/gods/diana_s16.png" title="Diana" align="absmiddle" border="0" /></div>
<div id="mission_reach_level_reward_god_3" class="missions_slot_reward">10 <img src="8501/img//ui/gods/vulcanus_s16.png" title="Vulcano" align="absmiddle" border="0" /></div>
<div id="mission_reach_level_reward_god_4" class="missions_slot_reward">10 <img src="8501/img//ui/gods/mars_s16.png" title="Marte" align="absmiddle" border="0" /></div>
<div id="mission_reach_level_reward_god_5" class="missions_slot_reward">10 <img src="8501/img//ui/gods/apollo_s16.png" title="Apolo" align="absmiddle" border="0" /></div>
<div id="mission_reach_level_reward_god_6" class="missions_slot_reward">10 <img src="8501/img//ui/gods/merkur_s16.png" title="Mercurio" align="absmiddle" border="0" /></div>
</div>

</div>

</div>
</div>
<!-- MISION 2  -->
<div id="mission_slot_skills_train_all">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_skills_train_all" class="missions_data">
<div id="mission_title_skills_train_all" class="missions_slot_title">Aumenta todas las habilidades a <?php echo $requiere4; ?></div>
<?php if ($mision2c == 1) {
    ?>
<a id="finish_skills_train_all" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=skills_train_all" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere3; ?> / <?php echo $requiere5; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision2p; ?>%;"></div></div></div>
<?php
}
?>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_skills_train_all">
<div id="mission_skills_train_all_reward_god_1" class="missions_slot_reward">6 <img src="8501/img//ui/gods/minerva_s16.png" title="Minerva" align="absmiddle" border="0" /></div>
<div id="mission_skills_train_all_reward_god_2" class="missions_slot_reward">6 <img src="8501/img//ui/gods/diana_s16.png" title="Diana" align="absmiddle" border="0" /></div>
<div id="mission_skills_train_all_reward_god_3" class="missions_slot_reward">6 <img src="8501/img//ui/gods/vulcanus_s16.png" title="Vulcano" align="absmiddle" border="0" /></div>
<div id="mission_skills_train_all_reward_god_4" class="missions_slot_reward">6 <img src="8501/img//ui/gods/mars_s16.png" title="Marte" align="absmiddle" border="0" /></div>
<div id="mission_skills_train_all_reward_god_5" class="missions_slot_reward">6 <img src="8501/img//ui/gods/apollo_s16.png" title="Apolo" align="absmiddle" border="0" /></div>
<div id="mission_skills_train_all_reward_god_6" class="missions_slot_reward">6 <img src="8501/img//ui/gods/merkur_s16.png" title="Mercurio" align="absmiddle" border="0" /></div>
</div>
</div>

</div>
</div>

<div class="contentboard_footer_short"><div class="contentboard_inner"></div></div>

</div>
</div>

<div id="mission_cat_expedition">
<div class="contentboard_start">
<div class="contentboard_header_medium"><div class="contentboard_inner"><div class="missions_header_content">Expediciones</div></div></div><div id="mission_slot_expedition_mob_complete">

<div class="contentboard_slot contentboard_slot_active">
<!-- MISION 3  -->
<div id="mission_data_expedition_mob_complete" class="missions_data">
<div id="mission_title_expedition_mob_complete" class="missions_slot_title">Sondea a <?php echo $requiere7; ?> adversario de expedición.</div>
<?php if ($mision3c == 1) {
    ?>
<a id="finish_expedition_mob_complete" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=expedition_mob_complete" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere6; ?> / <?php echo $requiere7; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision3p; ?>%;"></div></div></div>
<?php
}
?>
</div>
<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_expedition_mob_complete">
<div id="mission_expedition_mob_complete_reward_god_1" class="missions_slot_reward">&nbsp;</div>
<div id="mission_expedition_mob_complete_reward_god_2" class="missions_slot_reward">5 <img src="8501/img//ui/gods/diana_s16.png" title="Diana" align="absmiddle" border="0" /></div>
<div id="mission_expedition_mob_complete_reward_god_3" class="missions_slot_reward">&nbsp;</div>
<div id="mission_expedition_mob_complete_reward_god_4" class="missions_slot_reward">&nbsp;</div>
<div id="mission_expedition_mob_complete_reward_god_5" class="missions_slot_reward">&nbsp;</div>
<div id="mission_expedition_mob_complete_reward_god_6" class="missions_slot_reward">2 <img src="8501/img//ui/gods/merkur_s16.png" title="Mercurio" align="absmiddle" border="0" /></div>
</div>
</div>

</div>
</div>
<!-- MISION 4  -->
<div id="mission_slot_expedition_boss">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_expedition_boss" class="missions_data">
<div id="mission_title_expedition_boss" class="missions_slot_title">Derrota en expedición a <?php echo $requiere9; ?> jefe de zona</div>
<?php if ($mision4c == 1) {
    ?>
<a id="finish_expedition_boss" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=expedition_boss" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere8; ?> / <?php echo $requiere9; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision4p; ?>%;"></div></div></div>
<?php
}
?>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_expedition_boss">
<div id="mission_expedition_boss_reward_god_1" class="missions_slot_reward">3 <img src="8501/img//ui/gods/minerva_s16.png" title="Minerva" align="absmiddle" border="0" /></div>
<div id="mission_expedition_boss_reward_god_2" class="missions_slot_reward">12 <img src="8501/img//ui/gods/diana_s16.png" title="Diana" align="absmiddle" border="0" /></div>
<div id="mission_expedition_boss_reward_god_3" class="missions_slot_reward">&nbsp;</div>
<div id="mission_expedition_boss_reward_god_4" class="missions_slot_reward">&nbsp;</div>
<div id="mission_expedition_boss_reward_god_5" class="missions_slot_reward">&nbsp;</div>
<div id="mission_expedition_boss_reward_god_6" class="missions_slot_reward">&nbsp;</div>
</div>
</div>

</div></div>

<div class="contentboard_footer_short"><div class="contentboard_inner"></div></div>

</div>
</div>


<div id="mission_cat_arena">
<div class="contentboard_start">
<div class="contentboard_header_medium"><div class="contentboard_inner"><div class="missions_header_content">Arenas (proximamente)</div></div></div>
<!-- MISION 5  -->
<div id="mission_slot_arena_wins">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_arena_wins" class="missions_data">
<div id="mission_title_arena_wins" class="missions_slot_title">Vence más de 10 gladiadores en la Arena</div>
<div id="mission_slot_state" class="missions_slot_state">6 / 10<div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: 60%;"></div></div></div>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_arena_wins">
<div id="mission_arena_wins_reward_god_1" class="missions_slot_reward">2 <img src="8501/img//ui/gods/minerva_s16.png" title="Minerva" align="absmiddle" border="0" /></div>
<div id="mission_arena_wins_reward_god_2" class="missions_slot_reward">&nbsp;</div>
<div id="mission_arena_wins_reward_god_3" class="missions_slot_reward">&nbsp;</div>
<div id="mission_arena_wins_reward_god_4" class="missions_slot_reward">6 <img src="8501/img//ui/gods/mars_s16.png" title="Marte" align="absmiddle" border="0" /></div>
<div id="mission_arena_wins_reward_god_5" class="missions_slot_reward">&nbsp;</div>
<div id="mission_arena_wins_reward_god_6" class="missions_slot_reward">&nbsp;</div>
</div>
</div>

</div>
</div>
<!-- MISION 6  -->
<div id="mission_slot_arena_ranking">
<div class="contentboard_slot contentboard_slot_active">
<div id="mission_data_arena_ranking" class="missions_data"><div id="mission_title_arena_ranking" class="missions_slot_title">Alcanza el lugar 20 en la Arena</div></div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_arena_ranking">
<div id="mission_arena_ranking_reward_god_1" class="missions_slot_reward">&nbsp;</div>
<div id="mission_arena_ranking_reward_god_2" class="missions_slot_reward">3 <img src="8501/img//ui/gods/diana_s16.png" title="Diana" align="absmiddle" border="0" /></div>
<div id="mission_arena_ranking_reward_god_3" class="missions_slot_reward">&nbsp;</div>
<div id="mission_arena_ranking_reward_god_4" class="missions_slot_reward">5 <img src="8501/img//ui/gods/mars_s16.png" title="Marte" align="absmiddle" border="0" /></div>
<div id="mission_arena_ranking_reward_god_5" class="missions_slot_reward">&nbsp;</div>
<div id="mission_arena_ranking_reward_god_6" class="missions_slot_reward">&nbsp;</div>
</div>
</div>

</div>
</div>

<div class="contentboard_footer_short"><div class="contentboard_inner"></div></div>

</div>
</div>


<div id="mission_cat_equipment">
<div class="contentboard_start">

<div class="contentboard_header_medium"><div class="contentboard_inner"><div class="missions_header_content">Equipo</div></div></div>
<!-- MISION 7  -->
<div id="mission_slot_skills_damage">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_skills_damage" class="missions_data">
<div id="mission_title_skills_damage" class="missions_slot_title">Aumenta un valor de daño de <?php echo $requiere15; ?></div>
<?php if ($mision7c == 1) {
    ?>
<a id="finish_skills_damage" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=skills_damage" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere14; ?> / <?php echo $requiere15; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision7p; ?>%;"></div></div></div>
<?php
}
?>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_skills_damage">
<div id="mission_skills_damage_reward_god_1" class="missions_slot_reward">&nbsp;</div>
<div id="mission_skills_damage_reward_god_2" class="missions_slot_reward">&nbsp;</div>
<div id="mission_skills_damage_reward_god_3" class="missions_slot_reward">4 <img src="8501/img//ui/gods/vulcanus_s16.png" title="Vulcano" align="absmiddle" border="0" /></div>
<div id="mission_skills_damage_reward_god_4" class="missions_slot_reward">&nbsp;</div>
<div id="mission_skills_damage_reward_god_5" class="missions_slot_reward">3 <img src="8501/img//ui/gods/apollo_s16.png" title="Apolo" align="absmiddle" border="0" /></div>
<div id="mission_skills_damage_reward_god_6" class="missions_slot_reward">&nbsp;</div>
</div></div>

</div>
</div>
<!-- MISION 8  -->
<div id="mission_slot_skills_armor">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_skills_armor" class="missions_data">
<div id="mission_title_skills_armor" class="missions_slot_title">Alcanza un valor de armadura de <?php echo $requiere17; ?></div>
<?php if ($mision8c == 1) {
    ?>
<a id="finish_skills_armor" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=skills_armor" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere16; ?> / <?php echo $requiere17; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision8p; ?>%;"></div></div></div>
<?php
}
?>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_skills_armor">
<div id="mission_skills_armor_reward_god_1" class="missions_slot_reward">&nbsp;</div>
<div id="mission_skills_armor_reward_god_2" class="missions_slot_reward">&nbsp;</div>
<div id="mission_skills_armor_reward_god_3" class="missions_slot_reward">4 <img src="8501/img//ui/gods/vulcanus_s16.png" title="Vulcano" align="absmiddle" border="0" /></div>
<div id="mission_skills_armor_reward_god_4" class="missions_slot_reward">&nbsp;</div>
<div id="mission_skills_armor_reward_god_5" class="missions_slot_reward">&nbsp;</div>
<div id="mission_skills_armor_reward_god_6" class="missions_slot_reward">3 <img src="8501/img//ui/gods/merkur_s16.png" title="Mercurio" align="absmiddle" border="0" /></div>
</div></div>

</div>
</div>

<div class="contentboard_footer_short"><div class="contentboard_inner"></div></div>

</div>
</div>


<div id="mission_cat_misc">
<div class="contentboard_start">

<div class="contentboard_header_medium"><div class="contentboard_inner"><div class="missions_header_content">Otros</div></div></div>
<!-- MISION 9  -->
<div id="mission_slot_items_upgrade_permanent">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_items_upgrade_permanent" class="missions_data">
<div id="mission_title_items_upgrade_permanent" class="missions_slot_title">Obten <?php echo $requiere20; ?> acumulaciones de dioses</div>
<?php if ($mision9c == 1) {
    ?>
<a id="finish_items_upgrade_permanent" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=items_upgrade_permanent" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere19; ?> / <?php echo $requiere20; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision9p; ?>%;"></div></div></div>
<?php
}
?>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_items_upgrade_permanent">
<div id="mission_items_upgrade_permanent_reward_god_1" class="missions_slot_reward">&nbsp;</div>
<div id="mission_items_upgrade_permanent_reward_god_2" class="missions_slot_reward">&nbsp;</div>
<div id="mission_items_upgrade_permanent_reward_god_3" class="missions_slot_reward">8 <img src="8501/img//ui/gods/vulcanus_s16.png" title="Vulcano" align="absmiddle" border="0" /></div>
<div id="mission_items_upgrade_permanent_reward_god_4" class="missions_slot_reward">&nbsp;</div>
<div id="mission_items_upgrade_permanent_reward_god_5" class="missions_slot_reward">5 <img src="8501/img//ui/gods/apollo_s16.png" title="Apolo" align="absmiddle" border="0" /></div>
<div id="mission_items_upgrade_permanent_reward_god_6" class="missions_slot_reward">&nbsp;</div>
</div></div>

</div>
</div>
<!-- MISION 10  -->
<div id="mission_slot_quests">
<div class="contentboard_slot contentboard_slot_active">

<div id="mission_data_quests" class="missions_data">
<div id="mission_title_quests" class="missions_slot_title">Concluye <?php echo $requiere22; ?> misiones</div>
<?php if ($mision10c == 1) {
    ?>
<a id="finish_quests" class="quest_slot_button quest_slot_button_finish" href="missions.php?finishTask&missionId=quests" title="Terminar misión"></a>
    <?php
} else { ?>
<div id="mission_slot_state" class="missions_slot_state"><?php echo $requiere21; ?> / <?php echo $requiere22; ?><div class="progress_bar missions_progress_bar"><div class="progress_bar_1" style="width: <?php echo $mision10p; ?>%;"></div></div></div>
<?php
}
?>
</div>

<div class="missions_slot_reward_box"><span class="missions_slot_reward_text">Recompensa:</span><div id="mission_rewards_quests">
<div id="mission_quests_reward_god_1" class="missions_slot_reward">&nbsp;</div>
<div id="mission_quests_reward_god_2" class="missions_slot_reward">2 <img src="8501/img//ui/gods/diana_s16.png" title="Diana" align="absmiddle" border="0" /></div>
<div id="mission_quests_reward_god_3" class="missions_slot_reward">&nbsp;</div>
<div id="mission_quests_reward_god_4" class="missions_slot_reward">&nbsp;</div>
<div id="mission_quests_reward_god_5" class="missions_slot_reward">6 <img src="8501/img//ui/gods/apollo_s16.png" title="Apolo" align="absmiddle" border="0" /></div>
<div id="mission_quests_reward_god_6" class="missions_slot_reward">&nbsp;</div>
</div></div>

</div>
</div>

<div class="contentboard_footer_short"><div class="contentboard_inner"></div></div>

</div>
</div>


<script type="text/javascript">
$('finish_expedition_mob_complete').addEvent('click', function(event) {
event.stop();
sendRequest('get', $('finish_expedition_mob_complete').get('href'), '', 'mission_data_expedition_mob_complete');
});
</script>