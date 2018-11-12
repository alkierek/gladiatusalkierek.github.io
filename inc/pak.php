<script type="text/javascript" src="8501/js/pakete2.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
            switch (jQuery('select[name="packageSelection"]').val()) {
                case 'allPackages':
                case 'currentPackages':
                    jQuery('select[name="packageAction"] option[value="sell"]').attr('disabled', 'disabled').hide();
                    jQuery('select[name="packageAction"] option[value="delete"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"]').val('delete');
                    break;
                    
                case 'resourcesInAllPackages':
                case 'resourcesOnCurrentPage':
                    jQuery('select[name="packageAction"] option[value="sell"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"] option[value="delete"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"]').val('sell');
                    break;
                    
                default:
                    jQuery('select[name="packageAction"] option[value="sell"]').attr('disabled', 'disabled').hide();
                    jQuery('select[name="packageAction"] option[value="delete"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"]').val('delete');
                    break;                    
            }
        
        jQuery('select[name="packageSelection"]').bind('change', function(){
            switch (jQuery(this).val()) {
                case 'allPackages':
                case 'currentPackages':
                    jQuery('select[name="packageAction"] option[value="sell"]').attr('disabled', 'disabled').hide();
                    jQuery('select[name="packageAction"] option[value="delete"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"]').val('delete');
                    break;
                    
                case 'resourcesInAllPackages':
                case 'resourcesOnCurrentPage':
                    jQuery('select[name="packageAction"] option[value="sell"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"] option[value="delete"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"]').val('sell');
                    break;
                    
                default:
                    jQuery('select[name="packageAction"] option[value="sell"]').attr('disabled', 'disabled').hide();
                    jQuery('select[name="packageAction"] option[value="delete"]').removeAttr('disabled').show();
                    jQuery('select[name="packageAction"]').val('delete');
                    break;                    
            }
        });
    });
    
    function capitaliseFirstLetter (string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function packageActionFunction()
    {
        var qry = jQuery('input[name=qry]').val();
        var f   = jQuery('select[name=f]').val();
        var fq  = jQuery('select[name=fq]').val();
        
        var inputQry = jQuery("<input>")
                     .attr("type", "hidden")
                     .attr("name", "qry").val(qry);
        var inputF   = jQuery("<input>")
                     .attr("type", "hidden")
                     .attr("name", "f").val(f);
        var inputFq  = jQuery("<input>")
                     .attr("type", "hidden")
                     .attr("name", "fq").val(fq);

        jQuery('form#pa').append(jQuery(inputQry));
        jQuery('form#pa').append(jQuery(inputF));
        jQuery('form#pa').append(jQuery(inputFq));

        var dialogToShow = jQuery('select[name="packageSelection"]').val() + capitaliseFirstLetter(jQuery('select[name="packageAction"]').val());
        blackoutDialogFlex('jQuery(\'form#pa\').submit();', '', true, dialogToShow);
    }
</script>