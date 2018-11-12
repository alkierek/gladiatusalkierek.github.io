<div class="cooldown_bar" id="cooldown_bar_expedition">
    <div class="cooldown_bar_fill" id="cooldown_bar_fill_expedition"></div>
    <div class="cooldown_bar_text" id="cooldown_bar_text_expedition">Ir a la Expedición</div>

    
    <a href="location.php?loc=<?php echo $uloc; ?>" class="cooldown_bar_link"></a>
</div>
<div class="cooldown_bar" id="cooldown_bar_dungeon">
    <div class="cooldown_bar_fill" id="cooldown_bar_fill_dungeon"></div>
    <div class="cooldown_bar_text" id="cooldown_bar_text_dungeon" style="color:#71641A">
                    a partir del nivel 10            </div>
    </div>
<div class="cooldown_bar" id="cooldown_bar_arena">
    <div class="cooldown_bar_fill" id="cooldown_bar_fill_arena"></div>
    <div class="cooldown_bar_text" id="cooldown_bar_text_arena" style="color:#71641A">
                    a partir del nivel 2            </div>
    </div>
<div class="cooldown_bar" id="cooldown_bar_ct">
    <div class="cooldown_bar_fill" id="cooldown_bar_fill_ct"></div>
    <div class="cooldown_bar_text" id="cooldown_bar_text_ct" style="color:#71641A">
                    a partir del nivel 10            </div>
    </div>

<script type="text/javascript">

    var expeditionProgressBar = new ProgressBar(
        'cooldown_bar_text_expedition',
        'cooldown_bar_fill_expedition',
        'cooldown_bar_fill_progress',
        'cooldown_bar_fill_ready',
                'Ir a la Expedición',
                0,
        1428275053,
        15    );
    expeditionProgressBar.init();

    var dungeonProgressBar = new ProgressBar(
        'cooldown_bar_text_dungeon',
        'cooldown_bar_fill_dungeon',
        'cooldown_bar_fill_progress',
        'cooldown_bar_fill_ready',
                'a partir del nivel 10',
                0,
        1428275053,
        600    );
    dungeonProgressBar.init();

    var arenaProgressBar = new ProgressBar(
        'cooldown_bar_text_arena',
        'cooldown_bar_fill_arena',
        'cooldown_bar_fill_progress',
        'cooldown_bar_fill_ready',
                'a partir del nivel 2',
                -900,
        1428275053,
        0    );
    arenaProgressBar.init();

    var ctProgressBar = new ProgressBar(
        'cooldown_bar_text_ct',
        'cooldown_bar_fill_ct',
        'cooldown_bar_fill_progress',
        'cooldown_bar_fill_ready',
                'a partir del nivel 10',
                -900,
        1428275053,
        0    );
    ctProgressBar.init();

</script>
        
