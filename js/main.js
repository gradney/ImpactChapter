/****************************************************************************************
 *  JavaScript - Admin | Main (Overall)
 *  Page Outline:
 *  - JavaScript
 *  - jQuery DOM "ready" execution
 ***************************************************************************************/

/************************************************************************************
 * jQuery DOM ready executable
 ************************************************************************************/
$(document).ready( function (){

    console.log("Yes!, JavaScript is enabled and there are no fatal errors stopping our script execution.");

    // ** TOOLTIP ****
    // Create tooltip for each respective element with attribute 'data-tooltip'.
    // Add placement of tooltip with attribute 'data-tooltip-pos' in element tag.
    $('[data-tooltip]').each( function(i, el){
        var $tooltip_placement;
        var $tooltip_text;

        if ( el !== undefined ) {
            if ( $(this).data('data-tooltip') != "" ) {
                // set vars to use
                $tooltip_text = $(this).attr('data-tooltip');
                $tooltip_placement = $(this).attr('data-tooltip-pos');
                // console output
                // console.log('tooltip text: '+ $tooltip_text);
                // console.log('tooltip placement: '+ $tooltip_placement);
                // set tooltip
                $(this).tooltip({ 
                    title: $tooltip_text, 
                    placement: $tooltip_placement
                });
            }
        }
    });

    // ** LOGOUT ****
    $('#logout').on('click', function(){
        window.location = "/logout";
    });

}); //end jquery



