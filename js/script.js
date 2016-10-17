/*****************************************************************************
 * CUSTOM METHODS
 *****************************************************************************/
	(function($) {

		// VARIABLES ////////////////////////////////////////////////////////////////////
		// List of Canadian Provinces ---------------------------------------------------
		var can_provinces = {
			AB:	'Alberta', BC: 'British Columbia', LB: 'Labrador', MB: 'Manitoba', 
			NB: 'New Brunswick', NF: 'Newfoundland', NS: 'Nova Scotia', NU: 'Nunavut', 
			NW: 'North West Territory', ON: 'Ontario', PE: 'Prince Edward Island', 
			QC: 'Quebec', SK: 'Saskatchewen', YU: 'Yukon'};
		// List of USA States -----------------------------------------------------------
		var usa_states = {
			AL: 'Alabama', AK: 'Alaska', AZ: 'Arizona', AR: 'Arkansas', CA: 'California', 
			CO: 'Colorado', CT: 'Connecticut', DE: 'Delaware', DC: 'District of Columbia', 
			FL: 'Florida', GA: 'Georgia', HI: 'Hawaii', ID: 'Idaho', IL: 'Illinois', 
			IN: 'Indiana', IA: 'Iowa', KS: 'Kansas', KY: 'Kentucky', LA: 'Louisiana', 
			ME: 'Maine', MD: 'Maryland', MA: 'Massachusetts', MI: 'Michigan', MN: 'Minnesota', 
			MS: 'Mississippi', MO: 'Missouri', MT: 'Montana', NE: 'Nebraska', NV: 'Nevada', 
			NH: 'New Hampshire', NJ: 'New Jersey', NM: 'New Mexico', NY: 'New York', 
			NC: 'North Carolina', ND: 'North Dakota', OH: 'Ohio', OK: 'Oklahoma', OR: 'Oregon', 
			PA: 'Pennsylvania', RI: 'Rhode Island', SC: 'South Carolina', SD: 'South Dakota', 
			TN: 'Tennessee', TX: 'Texas', UT: 'Utah', VT: 'Vermont', VA: 'Virginia', 
			WA: 'Washington', WV: 'West Virginia', WI: 'Wisconsin', WY: 'Wyoming'};

		// METHODS //////////////////////////////////////////////////////////////////////
		// Get List of Canadian (CAN) Provinces
		$.fn.getCanadianProvinces = function() {
			//console.log("Number of Canadian provinces are: "+ Object.keys(can_provinces).length);
			var list_with_html_markup = "<option></option>"; // first list option is blank by default.
			$.each(can_provinces, function(index, value) {
				list_with_html_markup += "<option>"+value+"</option>";
			});
			this.empty().html(list_with_html_markup);
			return this;
		};
		// Get List of USA States
		$.fn.getUSAStates = function() {
			//console.log("Number of USA states are: "+ Object.keys(usa_states).length);
			var list_with_html_markup = "<option></option>"; // first list option is blank by default.
			$.each(usa_states, function(index, value) {
				list_with_html_markup += "<option>"+value+"</option>";
			});
			this.empty().html(list_with_html_markup);
			return this;
		};
		// Get List of Territories
			$.fn.getTerritories = function(country) {
			var territories;
			switch (country.toLowerCase()) {
				case "canada":
					territories = can_provinces;
					break;
				default:
					territories = usa_states;
					break;
			}
			//console.log("Number of territories are: "+ Object.keys(territories).length);
			var list_with_html_markup = "<option></option>"; // first list option is blank by default.
			$.each(territories, function(index, value) {
				list_with_html_markup += "<option>"+value+"</option>";
			});
			this.empty().html(list_with_html_markup);
			return this;
		};

	}(jQuery));

/*****************************************************************************
 * jQuery
 *****************************************************************************/
$(document).ready(function () {

	$('.menu-option').each( function(i, el) {
		if ( el !== undefined ) {
			$(this).css("color", "red");
			console.log("this element is: "+el);
		}
	});

	// TOOLTIP - note: there is an usage issue between <span> and <div>.
	// Create tooltip for each respective element with attribute 'data-tooltip'.
	// Add placement of tooltip with attribute 'data-tooltip-pos' in element tag.
	$('[data-tooltip]').each( function(i, el) {
		var $tooltip_placement;
		var $tooltip_text;

		if ( el !== undefined ) {
			if ( $(this).data('data-tooltip') != "" ) {
				// set vars to use
				$tooltip_text = $(this).attr('data-tooltip');
				$tooltip_placement = $(this).attr('data-tooltip-pos');
				// console output
				console.log('tooltip text: '+ $tooltip_text);
				console.log('tooltip placement: '+ $tooltip_placement);
				// set tooltip
				$(this).tooltip({ 
					title: $tooltip_text, 
					placement: $tooltip_placement
				});
			}
		}
	});

	// H3 Quote underneath Biblical Leadership Development Ministry on Home page.
    var quote = "Become a leader so you can focus on bigger things. Like. Learn. Live. Love. Laugh!";
	$('#likelearnlivelovequote').html( window.innerWidth > 999 ? "- "+quote+" -": quote );
});