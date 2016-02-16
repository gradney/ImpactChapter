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
		/*
		// Standard
		$('[data-tooltip]').tooltip({ 
			title: 'psst, give a tip...', 
			placement: 'right'
		});
		*/

/*****************************************************************************
 * Main JavaScript for Impact Chapter
 * - using object literal pattern
 * note: objects extend off classes, modules group functions
 *****************************************************************************/

 var Student = {
 	impactid: 0,
 	firstname: 'unknown',
 	lastname: 'unknown',
 	school: 'unknown',
 	gradyear: '0000',
 	fiveyearprogram: false,
 	major: 'unknown',
 	alternativemajor: 'unknown',
 	minor: 'unknown',
 	secondlanguage: 'none',
 	birthdate: '00-00-0000',
 	city: 'unknown',
 	state: 'unknown',
 	country: 'unknown',
 	impactmember: false,
 	impactleader: false,
 	impactrole: 'none',
 	saved: false,
 	baptized: false,
 	churchhome: 'none',
 	// Getters
 	getFirstName: function() { return firstname; },
 	getLastName: function() { return lastname; },
 	getSchool: function() { return school; },
 	getGradYear: function() { return gradyear; },
 	isFiveYearProgram: function() { return fiveyearprogram; },
 	getMajor: function() { return major; },
 	getAlternativeMajor: function() { return alternativemajor; },
 	getMinor: function() { return minor; },
 	getSecondLanguage: function() { return secondlanguage; },
 	getBirthDate: function() { return birthdate; },
 	getCity: function() { return city; },
 	getState: function() { return state; },
 	getCountry: function() { return country; },
 	isImpactMember: function() { return impactmember; },
 	isImpactLeader: function() { return impactleader; },
 	getImpactRole: function() { return impactrole; },
 	isSaved: function() { return saved; },
 	isBaptized: function() { return baptized; },
 	getChurchHome: function() { return churchhome; },
 	// Setters
 	setFirstName: function(newfirstname) { this.firstname = newfirstname; },
 	getLastName: function(newlastname) { this.lastname = newlastname; },
 	setSchool: function(newschool) { this.school = newschool; },
 	setGradYear: function(newgradyear) { this.gradyear = newgradyear; },
 	setMajor: function(newmajor) { this.major = newmajor; },
 	setAlternativeMajor: function(newalternativemajor) { this.alternativemajor = newalternativemajor; },
 	setMinor: function(newminor) { this.minor = newminor; },
 	setSecondLanguage: function(newsecondlanguage) { this.secondlanguage = newsecondlanguage; },
 	setBirthDate: function(newbirthdate) { this.birthdate = newbirthdate; },
 	setCity: function(newcity) { this.city = newcity; },
 	setState: function(newstate) { this.state = newstate; },
 	setCountry: function(newcountry) { this.country = newcountry; },
 	setImpactRole: function(newrole) { this.impactrole = newrole; },
 	setChurchHome: function(newchurchhome) { this.churchhome = newchurchhome; },
 	// Boolean Setters
 	yesFiveYearProgram: function() { this.fiveyearprogram = true; },
 	yesImpactMember: function() { this.impactmember = true; },
 	yesImpactLeader: function() { this.impactleader = true; },
 	yesSaved: function() { this.saved = true; },
 	yesBaptized: function() { this.baptized = true; },
 	noFiveYearProgram: function() { this.fiveyearprogram = true; },
 	noImpactMember: function() { this.impactmember = true; },
 	noImpactLeader: function() { this.impactleader = true; },
 	noSaved: function() { this.saved = true; },
 	noBaptized: function() { this.baptized = true; },
 	// Custom
 	displayName: function() { alert(this.firstname+' '+this.lastname); },
 	displaySchoolInfo: function() { console.log(
 		'School: '+this.school+', '+
 		'Class: '+this.gradyear+', '+
 		'Major: '+this.major+', '+
 		'Minor: '+this.minor+', '+
 		'2nd Language: '+this.secondlanguage+', '+
 		'5-year program: '+this.fiveyearprogram
 		);
 	},
 	displayRole: function() { alert(this.impactrole); }
 };

/*****************************************************************************
 * TEST BLOCK ****************************************************************
 *****************************************************************************/
// Student.displayName();
