/*****************************************************************************
 * Main javascript for Impact Chapter
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
 		);},
 	displayRole: function() { alert(this.impactrole); }
 }

/*****************************************************************************
 * TEST BLOCK ****************************************************************
 *****************************************************************************/
// Student.displayName();
