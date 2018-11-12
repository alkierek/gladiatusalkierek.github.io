function isFunction(functionToCheck)
{
    var getType = {};
    return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';
};

var Header = new Class({
    
    fade: function(elem, newValue, hook)
    {
        var that = this;
        
        if (jQuery(elem).text() != newValue) {
            jQuery(elem).fadeOut(function() {
                jQuery(this).text(newValue);
                
                if (isFunction(hook)) {
                    hook(that);
                }
                
                jQuery(this).fadeIn();
            });
        }
    },
    
    updateStatus: function(elem, data)
    {
        if (data.count > 0) {
            jQuery('#menue_' + elem).removeClass('menue_' + elem);
            jQuery('#menue_' + elem).addClass('menue_' + elem + '_highlight');
        } else {
            jQuery('#menue_' + elem).addClass('menue_' + elem);
            jQuery('#menue_' + elem).removeClass('menue_' + elem + '_highlight');
        }
        
        jQuery('#menue_' + elem).attr("href", data.link);
        jQuery('#menue_' + elem + ' .menue_new_count').remove();
        
        if (data.count > 0) {
            jQuery('<div>').addClass('menue_new_count')
                           .text((data.count > 99 ? '+' : data.count))
                           .appendTo(jQuery('#menue_' + elem));
        }
    },
    
    updateNews: function(news)
    {
        this.updateStatus('news', news);
    },
    
    updateReports: function(reports)
    {
        this.updateStatus('reports', reports);
    },
    
    updateMessages: function(messages)
    {
        this.updateStatus('messages', messages);
    },
    
    updatePackages: function(packages)
    {
        this.updateStatus('packages', packages);
    },
    
    getGold: function()
    {
        return $('sstat_gold_val').innerHTML.replace(/\./g, '').toInt();
    },

    updateGoldHook: function(that) {
        if (that.getGold() >= 1000000000) {
            jQuery('#sstat_gold_val').removeClass('headervalue_small')
                                     .addClass('headervalue_smaller');
        } else {
            jQuery('#sstat_gold_val').removeClass('headervalue_smaller')
                                     .addClass('headervalue_small');
        }
    },
    
    updateGold: function(gold)
    {
        this.fade('#sstat_gold_val', gold.text, this.updateGoldHook);
    },

    getRubies: function()
    {
        return $('sstat_ruby_val').innerHTML.replace(/\./g, '').toInt();
    },

    updateRubiesHook: function(that)
    {
        if (that.getRubies() >= 10000) {
            jQuery('#sstat_gold_val').removeClass('headervalue_small')
                                     .addClass('headervalue_smaller');
        } else {
            jQuery('#sstat_gold_val').removeClass('headervalue_smaller')
                                     .addClass('headervalue_small');
        }
    },
    
    updateRubies: function(rubies)
    {
        this.fade('#sstat_ruby_val', rubies.text, this.updateRubiesHook);
    },

    updateHighscore: function(highscore)
    {
        this.fade('#highscorePlace', highscore.value);
        jQuery("#icon_highscore").attr('onmouseover', 'return escape(\'' + highscore.tooltip + '\');');
    },

    updateLevel: function(level)
    {
        this.fade('#header_values_level', level);
    },

    updateHealth: function(health)
    {
        jQuery("#header_values_hp_bar").attr('onmouseover', 'return escape(\'' + health.tooltip + '\');');
        jQuery("#header_values_hp_bar_fill").animate({width: health.percentage +'%'}, 'slow');
        this.fade('#header_values_hp_percent', health.percentage + '%');
    },

    updateExperience: function(experience)
    {
        jQuery("#header_values_xp_bar").attr('onmouseover', 'return escape(\'' + experience.tooltip + '\');');
        jQuery("#header_values_xp_bar_fill").animate({width: experience.percentage +'%'}, 'slow');
        this.fade('#header_values_xp_percent', experience.percentage + '%');
    },
    
    updateLocations: function(elem, data)
    {
        this.fade('#' + elem + 'points_value_point', data.points);
        this.fade('#' + elem + 'points_value_pointmax', data.pointsMax);
    },

    updateArenas: function(elem, data)
    {
        this.fade('#' + elem + 'points_value_point', data.points);
        this.fade('#' + elem + 'points_value_pointmax', data.pointsMax);
    },

    updateActions: function(elem, data, actionsBlocked, progressBar)
    {
        this.fade('#cooldown_bar_text_' + elem, data.text);

        if (data.color === null) {
            jQuery("#cooldown_bar_text_dungeon").css('color', '');
        } else {
            jQuery("#cooldown_bar_text_dungeon").css('color', data.color);
        }

        jQuery('#icon_' + elem + 'points').attr('onmouseover', 'return escape(\'' + data.tooltip + '\');');
        
        if (actionsBlocked) {
            jQuery('#cooldown_bar_' + elem + ' a').removeAttr("href")
                                                .click(function(e){
                                                    e.preventDefault();
                                                    return false;
                                                }); 
            
        } else {
            jQuery('#cooldown_bar_' + elem + ' a').attr("href", data.link)
                                                .click(function(e){
                                                }); 
        }
        
        progressBar = new ProgressBar(
            'cooldown_bar_text_' + elem,
            'cooldown_bar_fill_' + elem,
            'cooldown_bar_fill_progress',
            'cooldown_bar_fill_ready',
            (!actionsBlocked ? data.text : '-'),
            data.cooldown.start,
            data.cooldown.time,
            data.cooldown.end
        );

        progressBar.init();
    },

    updateExpedition: function(data, actionsBlocked)
    {
        this.updateLocations('expedition', data);
        this.updateActions('expedition', data, actionsBlocked, expeditionProgressBar);
    },

    updateDungeon: function(data, actionsBlocked)
    {
        this.updateLocations('dungeon', data);
        this.updateActions('dungeon', data, actionsBlocked, dungeonProgressBar);
    },

    updateArena: function(data, actionsBlocked)
    {
        this.updateActions('arena', data, actionsBlocked, arenaProgressBar);
        this.fade('#arenaPlace', data.value);
    },

    updateGrouparena: function(data, actionsBlocked)
    {
        this.updateActions('ct', data, actionsBlocked, ctProgressBar);
        this.fade('#grouparenaPlace', data.value);
    },

    updateDungeonPoints: function(points, maxPoints)
    {
        $('dungeonpoints_value').innerHTML = points + ' / ' + maxPoints;
    },

    updateExpeditionPoints: function(points, maxPoints)
    {
        this.fade('#expeditionpoints_value_point', points);
        this.fade('#expeditionpoints_value_pointmax', maxPoints);
    },

    resetArenaCooldown: function()
    {
        arenaProgressBar.clear();
    },

    resetExpeditionCooldown: function()
    {
        expeditionProgressBar.clear();
    },

    resetDungeonCooldown: function()
    {
        dungeonProgressBar.clear();
    },
    
    update: function(data)
    {
//        console.log(data);
        if (!data.header) {
            return this;
        }
        
        this.updateNews(data.header.newNews);
        this.updateReports(data.header.newReports);
        this.updateMessages(data.header.newMessages);
        this.updatePackages(data.header.newPackages);

        this.updateGold(data.header.gold);
        this.updateRubies(data.header.rubies);
        this.updateHighscore(data.header.highscore);
        this.updateLevel(data.header.level);
        this.updateHealth(data.header.health);
        this.updateExperience(data.header.experience);
        
        this.updateExpedition(data.header.expedition, data.header.actionsBlocked);
        this.updateDungeon(data.header.dungeon, data.header.actionsBlocked);
        
        this.updateArena(data.header.arena, data.header.actionsBlocked);
        this.updateGrouparena(data.header.grouparena, data.header.actionsBlocked);
        
        tt_Init(true);
    }
});

var headerObject = new Header();
