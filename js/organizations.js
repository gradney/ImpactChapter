/****************************************************************************************
 *  JavaScript - Admin | Organizations Page
 *  Page Outline:
 *  - JavaScript
 *  - jQuery custom methods
 *  - jQuery DOM "ready" execution
 ***************************************************************************************/
var doIdebug = true;
var countries = {
    US: 'United States',
    AF: 'Afghanistan', AX: 'Aland Islands', AL: 'Albania', DZ: 'Algeria', 
    AS: 'American Samoa', AD: 'Andorra', AO: 'Angola', AI: 'Anguilla', 
    AQ: 'Antarctica', AG: 'Antigua and Barbuda', AR: 'Argentina', AM: 'Armenia', 
    AW: 'Aruba', AC: 'Ascension Island', AU: 'Australia', AT: 'Austria', 
    AZ: 'Azerbaijan', BS: 'Bahamas', BH: 'Bahrain', BB: 'Barbados', 
    BD: 'Bangladesh', BY: 'Belarus', BE: 'Belgium', BZ: 'Belize', BJ: 'Benin', 
    BM: 'Bermuda', BT: 'Bhutan', BW: 'Botswana', BO: 'Bolivia', 
    BA: 'Bosnia and Herzegovina', BV: 'Bouvet Island', BR: 'Brazil', 
    IO: 'British Indian Ocean Territory', BN: 'Brunei Darussalam', 
    BG: 'Bulgaria', BF: 'Burkina Faso', BI: 'Burundi', KH: 'Cambodia', 
    CM: 'Cameroon', CA: 'Canada', CV: 'Cape Verde', KY: 'Cayman Islands', 
    CF: 'Central African Republic', TD: 'Chad', CL: 'Chile', CN: 'China', 
    CX: 'Christmas Island', CC: 'Cocos (Keeling) Islands', CO: 'Colombia', 
    KM: 'Comoros', CG: 'Congo', CD: 'Congo, Democratic Republic', 
    CK: 'Cook Islands', CR: 'Costa Rica', CI: 'Cote D\'Ivoire (Ivory Coast)', 
    HR: 'Croatia (Hrvatska)', CU: 'Cuba', CY: 'Cyprus', CZ: 'Czech Republic',
    //CS: 'Czechoslovakia (former)', 
    DK: 'Denmark', DJ: 'Djibouti', DM: 'Dominica', DO: 'Dominican Republic', 
    TP: 'East Timor', EC: 'Ecuador', EG: 'Egypt', SV: 'El Salvador', 
    GQ: 'Equatorial Guinea', ER: 'Eritrea', EE: 'Estonia', ET: 'Ethiopia', 
    EU: 'European Union', FK: 'Falkland Islands (Malvinas)', 
    FO: 'Faroe Islands', FJ: 'Fiji', FI: 'Finland', FR: 'France', 
    //FX: 'France, Metropolitan',
    GF: 'French Guiana', PF: 'French Polynesia', 
    TF: 'French Southern Territories', MK: 'F.Y.R.O.M. (Macedonia)', GA: 'Gabon',
    GM: 'Gambia', GE: 'Georgia', DE: 'Germany', GH: 'Ghana', GI: 'Gibraltar', 
    GB: 'Great Britain (UK)', GR: 'Greece', GL: 'Greenland', GD: 'Grenada', 
    GP: 'Guadeloupe', GU: 'Guam', GT: 'Guatemala', GG: 'Guernsey', GN: 'Guinea',
    GW: 'Guinea-Bissau', GY: 'Guyana', HT: 'Haiti', 
    HM: 'Heard and McDonald Islands', HN: 'Honduras', HK: 'Hong Kong', 
    HU: 'Hungary', IS: 'Iceland', IN: 'India', ID: 'Indonesia', IR: 'Iran',
    IQ: 'Iraq', IE: 'Ireland', IL: 'Israel', IM: 'Isle of Man', IT: 'Italy', 
    JE: 'Jersey', JM: 'Jamaica', JP: 'Japan', JO: 'Jordan', KZ: 'Kazakhstan', 
    KE: 'Kenya', KI: 'Kiribati', KP: 'Korea (North)', KR: 'Korea (South)', 
    KW: 'Kuwait', KG: 'Kyrgyzstan', LA: 'Laos', LV: 'Latvia', LB: 'Lebanon', 
    LI: 'Liechtenstein', LR: 'Liberia', LY: 'Libya', LS: 'Lesotho', 
    LT: 'Lithuania', LU: 'Luxembourg', MO: 'Macau', MG: 'Madagascar', 
    MW: 'Malawi', MY: 'Malaysia', MV: 'Maldives', ML: 'Mali', MT: 'Malta', 
    MH: 'Marshall Islands', MQ: 'Martinique', MR: 'Mauritania', MU: 'Mauritius', 
    YT: 'Mayotte', MX: 'Mexico', FM: 'Micronesia', MC: 'Monaco', MD: 'Moldova', 
    MN: 'Mongolia', ME: 'Montenegro', MS: 'Montserrat', MA: 'Morocco', 
    MZ: 'Mozambique', MM: 'Myanmar', NA: 'Namibia', NR: 'Nauru', NP: 'Nepal', 
    NL: 'Netherlands', AN: 'Netherlands Antilles', NT: 'Neutral Zone', 
    NC: 'New Caledonia', NZ: 'New Zealand (Aotearoa)', NI: 'Nicaragua', 
    NE: 'Niger', NG: 'Nigeria', NU: 'Niue', NF: 'Norfolk Island', 
    MP: 'Northern Mariana Islands', NO: 'Norway', OM: 'Oman', PK: 'Pakistan', 
    PW: 'Palau', PS: 'Palestinian Territory - Occupied', PA: 'Panama', 
    PG: 'Papua New Guinea', PY: 'Paraguay', PE: 'Peru', PH: 'Philippines', 
    PN: 'Pitcairn', PL: 'Poland', PT: 'Portugal', PR: 'Puerto Rico',
    QA: 'Qatar', RE: 'Reunion', RO: 'Romania', RU: 'Russian Federation', 
    RW: 'Rwanda', GS: 'S. Georgia and S. Sandwich Isls.', 
    KN: 'Saint Kitts and Nevis', LC: 'Saint Lucia', 
    VC: 'Saint Vincent & the Grenadines', WS: 'Samoa', SM: 'San Marino', 
    ST: 'Sao Tome and Principe', SA: 'Saudi Arabia', SN: 'Senegal', 
    RS: 'Serbia', YU: 'Serbia and Montenegro (former)', SC: 'Seychelles',
    SL: 'Sierra Leone', SG: 'Singapore', SI: 'Slovenia', SK: 'Slovak Republic', 
    SB: 'Solomon Islands', SO: 'Somalia', ZA: 'South Africa', ES: 'Spain', 
    LK: 'Sri Lanka', SH: 'St. Helena', PM: 'St. Pierre and Miquelon', 
    SD: 'Sudan', SR: 'Suriname', SJ: 'Svalbard & Jan Mayen Islands', 
    SZ: 'Swaziland', SE: 'Sweden', CH: 'Switzerland', SY: 'Syria', TW: 'Taiwan', 
    TJ: 'Tajikistan',TZ: 'Tanzania', TH: 'Thailand', TG: 'Togo', TK: 'Tokelau', 
    TO: 'Tonga', TT: 'Trinidad and Tobago', TN: 'Tunisia', TR: 'Turkey', 
    TM: 'Turkmenistan', TC: 'Turks and Caicos Islands', TV: 'Tuvalu', 
    UG: 'Uganda', UA: 'Ukraine', AE: 'United Arab Emirates', 
    UK: 'United Kingdom', UM: 'US Minor Outlying Islands', 
    UY: 'Uruguay', 
    //SU: 'USSR (former)', 
    UZ: 'Uzbekistan', VU: 'Vanuatu', VA: 'Vatican City State (Holy See)', 
    VE: 'Venezuela', VN: 'Viet Nam', VG: 'British Virgin Islands', 
    VI: 'Virgin Islands (U.S.)', WF: 'Wallis and Futuna Islands', 
    EH: 'Western Sahara', YE: 'Yemen', ZM: 'Zambia', 
    //ZR: 'Zaire (See CD Congo, Democratic Republic)', 
    ZW: 'Zimbabwe' };


/** START EDITING RECORD **/
function startEditing(id)
{
    var tr_node = document.getElementById("record-"+id).parentNode; 
    var td_nodelist = tr_node.getElementsByTagName("TD");
    var td_total = td_nodelist.length;
    var tr_total = tr_node.parentNode.getElementsByTagName("TR").length;

    // Set Field Values.
    // TODO: Convert into Record Object.
    var title = document.getElementById("title-"+id).innerText;
    var user_limit = document.getElementById('user-limit-'+id).innerText;
    var stream_limit = document.getElementById('stream-limit-'+id).innerText;
    var group_max = document.getElementById('group-max-'+id).innerText;
    var arcgis_user = document.getElementById('arcgis-user-'+id).innerText;
    var countries_avail = document.getElementById('countries-avail-'+id).innerText;
    var map_options = {
                map_download: document.getElementById('map-download-'+id).innerText,
                map_editable: document.getElementById('map-editable-'+id).innerText,
                map_anonymize: document.getElementById('anonymize-'+id).innerText
    };

    //---------------------------//
    // Enable Edit Mode display.
    //---------------------------//

    // 1.a. Set inner HTML.
    var title_in_edit_mode = '<input id="title-'+id+'" style="width:10em" type="text" value="'+title+'" autofocus/>';
    var user_limit_in_edit_mode = '<input class="text-center" style="width:2em" type="text" value="'+user_limit+'" />';
    var stream_limit_in_edit_mode = '<input class="text-center" style="width:2em" type="text" value="'+stream_limit+'" />';
    var group_max_in_edit_mode = '<input class="text-center" style="width:2em" type="text" value="'+group_max+'" />';
    var arcgis_user_in_edit_mode = '<input style="width:10em" type="text" value="'+arcgis_user+'" />';

    // 1.b. Set inner HTML with SELECT tags and proper values.
    var map_download_in_edit_mode;
    var map_editable_in_edit_mode; 
    var anonymize_in_edit_mode;    
    var html_select_markup;

    for(var key in map_options) {

        if (doIdebug) { console.log("evaluating map option: " + key); }

        if (String(map_options[key]).toLowerCase() == "true")
        {
            html_select_markup = '<select>'
                                    +'<option value="false">No</option>'
                                    +'<option value="true" selected>Yes</option>'
                                    +'</select>';
        }
        else
        {
            html_select_markup = '<select>'
                                    +'<option value="false" selected>No</option>'
                                    +'<option value="true">Yes</option>'
                                    +'</select>';
        }

        if (key.includes("download")) { map_download_in_edit_mode = html_select_markup; }
        if (key.includes("edit")) { map_editable_in_edit_mode = html_select_markup; }
        if (key.includes("anonym")) { anonymize_in_edit_mode = html_select_markup; }
    }

    // 1.c. Set inner HTML with proper Multi-Select option for Countries Available.
    var countries_avail_in_edit_mode = displayCountriesAsEditable(id, countries_avail);

    // 2. Replace with inner HTML.
    document.getElementById('title-'+id).innerHTML = title_in_edit_mode;
    document.getElementById('user-limit-'+id).innerHTML = user_limit_in_edit_mode;
    document.getElementById('stream-limit-'+id).innerHTML = stream_limit_in_edit_mode;
    document.getElementById('group-max-'+id).innerHTML = group_max_in_edit_mode;
    //document.getElementById('arcgis-user-'+id).innerHTML = arcgis_user_in_edit_mode;
    document.getElementById('countries-avail-'+id).innerHTML = countries_avail_in_edit_mode;
    document.getElementById('map-download-'+id).innerHTML = map_download_in_edit_mode;
    document.getElementById('map-editable-'+id).innerHTML = map_editable_in_edit_mode;
    document.getElementById('anonymize-'+id).innerHTML = anonymize_in_edit_mode;

    //---------------------------------------------------//
    // Add Background-Color for Record (light yellow)
    //---------------------------------------------------//
    document.getElementById('record-'+id).parentNode.style.backgroundColor = 'rgba(255,255,0,0.3)';

    //-----------------------------------------//
    // Update Buttons (Unsaved, Edit disabled).
    //-----------------------------------------//
    document.getElementById('save-button-'+id).innerHTML = '<i class="fa fa-save"></i>';
    document.getElementById('save-button-'+id).disabled = false;
    document.getElementById('save-button-'+id).style.color = "#006dcc";
    document.getElementById('edit-button-'+id).disabled = true;
    document.getElementById('edit-button-'+id).style.color = "gray";
}

/** STOP EDITING RECORD **/
function stopEditing(id)
{
    var saved_record = {
        id : id,
        title : document.getElementById("title-"+id).firstChild.value,
        user_limit : document.getElementById('user-limit-'+id).firstChild.value,
        stream_limit : document.getElementById('stream-limit-'+id).firstChild.value,
        group_max : document.getElementById('group-max-'+id).firstChild.value,
        //arcgis_user : document.getElementById('arcgis-user-'+id).firstChild.value,
        countries_avail : "",
        map_download : document.getElementById('map-download-'+id).firstChild.value,
        map_editable : document.getElementById('map-editable-'+id).firstChild.value,
        anonymize : document.getElementById('anonymize-'+id).firstChild.value  
    };

    // Add all selected countries.
    var countries_array = new Array();
    var countries_select_node = document.getElementById('countries-selection-'+id);
    var options_selected_nodelist = countries_select_node.getElementsByTagName("OPTION");

    for (var i = 0; i < options_selected_nodelist.length; i++) {

        if (options_selected_nodelist[i].selected)
            { countries_array.push(options_selected_nodelist[i].value); }
    }

    saved_record.countries_avail = countries_array; //console.log("# of countries = "+countries_array.length);

    //---------------------//
    // Data Validation.
    //---------------------//
    // if(isNaN(saved_record.user_limit)) {
    //     //alert("<strong>Users</strong> must be a number. Please enter a valid number.");
    //     $("#user-limit-error").dialog();
    //     document.getElementById('user-limit-'+id).firstChild.style.border = "1px solid red";
    //     return;
    // }

    saved_record.map_download = (saved_record.map_download.toUpperCase() == "TRUE") 
                                ? saved_record.map_download.toUpperCase()
                                : saved_record.map_download;

    saved_record.map_editable = (saved_record.map_editable.toUpperCase() == "TRUE") 
                                ? saved_record.map_editable.toUpperCase()
                                : saved_record.map_editable;

    saved_record.anonymize = (saved_record.anonymize.toUpperCase() == "TRUE") 
                                ? saved_record.anonymize.toUpperCase()
                                : saved_record.anonymize;

    //--------------------------//
    // Send Values to Server.
    //--------------------------//
    $.post('action/editorganization',
        {
            organizationid : saved_record.id,
            organizationname: saved_record.title,
            numberofusers : saved_record.user_limit,
            projectlimit : saved_record.stream_limit,
            groupmax : saved_record.group_max,
            //arcgisuser : saved_record.arcgis_user,
            countriesavailable : saved_record.countries_avail,
            mapdownload : saved_record.map_download,
            mapeditable : saved_record.map_editable,
            anonymize : saved_record.anonymize
        },
        function(data, status){
            console.log("update record data: "+data+"\nupdate record status: "+status);
        }
    );

    //-----------------------------------------//
    // Update display of Countries.
    //-----------------------------------------//
    saved_record.countries_avail = saved_record.countries_avail.toString().replace(/,/g , ",<br/>");

    //-----------------------------------------//
    // Set Field Values in Record Display.
    //-----------------------------------------//
    document.getElementById('title-'+id).innerHTML = saved_record.title;
    document.getElementById('user-limit-'+id).innerHTML = saved_record.user_limit;
    document.getElementById('stream-limit-'+id).innerHTML = saved_record.stream_limit;
    document.getElementById('group-max-'+id).innerHTML = saved_record.group_max;
    //document.getElementById('arcgis-user-'+id).innerHTML = saved_record.arcgis_user;
    document.getElementById('countries-avail-'+id).innerHTML = saved_record.countries_avail;
    document.getElementById('map-download-'+id).innerHTML = saved_record.map_download;
    document.getElementById('map-editable-'+id).innerHTML = saved_record.map_editable;
    document.getElementById('anonymize-'+id).innerHTML = saved_record.anonymize;

    //---------------------------------------------------//
    // Remove Background-Color for Record.
    //---------------------------------------------------//
    document.getElementById('record-'+id).parentNode.style.backgroundColor = 'transparent';

    //-----------------------------------------//
    // Update Buttons (Saved, Edit enabled).
    //-----------------------------------------//
    document.getElementById('save-button-'+id).innerHTML = '<i class="fa fa-check"></i>';
    document.getElementById('save-button-'+id).disabled = true;
    document.getElementById('save-button-'+id).style.color = "gray";
    document.getElementById('edit-button-'+id).disabled = false;
    document.getElementById('edit-button-'+id).style.color = "#006dcc";
}

function displayCountriesAsEditable(id, countries)
{
    var list_of_countries = "";
    var countries_avail = document.getElementById('countries-avail-'+id).innerText;
    var countries_dropdown_html_markup = '<select multiple  style="width:10em" id="countries-selection-'+id+'">';
    countries_dropdown_html_markup += '<option value="&#42;"></option>'; // Add option "all countries".

    for(var country_code in this.countries)
    {
        var country_selected = ( countries_avail.includes(this.countries[country_code]) ) ? true : false;

        if (this.doIdebug) { console.log("Adding country to dropdown: " +this.countries[country_code]); }
        countries_dropdown_html_markup += '<option value="'+this.countries[country_code]+'"';
        if (country_selected) { countries_dropdown_html_markup += ' selected'; }
        countries_dropdown_html_markup += '>'+this.countries[country_code]+'</option>';
    }

    countries_dropdown_html_markup += '</select>';

    return countries_dropdown_html_markup;
}


/************************************************************************************
 * jQuery custom methods
 ************************************************************************************/
(function($)
{
    // VARIABLES
    // List of Canadian Provinces ---------------------------------------------------
    var can_provinces = {
        AB: 'Alberta', BC: 'British Columbia', LB: 'Labrador', MB: 'Manitoba', 
        NB: 'New Brunswick', NF: 'Newfoundland', NS: 'Nova Scotia', NU: 'Nunavut', 
        NW: 'North West Territory', ON: 'Ontario', PE: 'Prince Edward Island', 
        QC: 'Quebec', SK: 'Saskatchewen', YU: 'Yukon'};
    // List of USA States -----------------------------------------------------------
    // Reference: http://www.50states.com/abbreviations.htm#.VroML_krIdU
    var usa_states = {
        AL: 'Alabama', AK: 'Alaska', AS: 'American Samoa', AZ: 'Arizona', 
        AR: 'Arkansas', CA: 'California', CO: 'Colorado', CT: 'Connecticut', 
        DE: 'Delaware', DC: 'District of Columbia', 
        FM: 'Federated States of Micronesia', FL: 'Florida', GU: 'Gaum', 
        GA: 'Georgia', HI: 'Hawaii', ID: 'Idaho', IL: 'Illinois', 
        IN: 'Indiana', IA: 'Iowa', KS: 'Kansas', KY: 'Kentucky', LA: 'Louisiana', 
        //MH: 'Marshall Islands', 
        ME: 'Maine', MD: 'Maryland', MA: 'Massachusetts', MI: 'Michigan', 
        MN: 'Minnesota', MS: 'Mississippi', MO: 'Missouri', MT: 'Montana', 
        NE: 'Nebraska', NV: 'Nevada', NH: 'New Hampshire', NJ: 'New Jersey', 
        NM: 'New Mexico', NY: 'New York', NC: 'North Carolina', ND: 'North Dakota', 
        MP: 'Northern Marianas Islands',
        OH: 'Ohio', OK: 'Oklahoma', OR: 'Oregon', //PW: 'Palau',
        PA: 'Pennsylvania', PR: 'Puerto Rico', RI: 'Rhode Island', 
        SC: 'South Carolina', SD: 'South Dakota', TN: 'Tennessee', TX: 'Texas', 
        UT: 'Utah', VT: 'Vermont', VI: 'Virgin Islands', VA: 'Virginia', 
        WA: 'Washington', WV: 'West Virginia', WI: 'Wisconsin', WY: 'Wyoming'};
    // List of Countries ------------------------------------------------------------
    // Reference: http://www.state.gov/misc/list/
    // NOTE: Can also get the GLOBAL_COUNTRIES from global_administrative.js file.
    var countries = {
        US: 'United States',
        AF: 'Afghanistan', AX: 'Aland Islands', AL: 'Albania', DZ: 'Algeria', 
        AS: 'American Samoa', AD: 'Andorra', AO: 'Angola', AI: 'Anguilla', 
        AQ: 'Antarctica', AG: 'Antigua and Barbuda', AR: 'Argentina', AM: 'Armenia', 
        AW: 'Aruba', AC: 'Ascension Island', AU: 'Australia', AT: 'Austria', 
        AZ: 'Azerbaijan', BS: 'Bahamas', BH: 'Bahrain', BB: 'Barbados', 
        BD: 'Bangladesh', BY: 'Belarus', BE: 'Belgium', BZ: 'Belize', BJ: 'Benin', 
        BM: 'Bermuda', BT: 'Bhutan', BW: 'Botswana', BO: 'Bolivia', 
        BA: 'Bosnia and Herzegovina', BV: 'Bouvet Island', BR: 'Brazil', 
        IO: 'British Indian Ocean Territory', BN: 'Brunei Darussalam', 
        BG: 'Bulgaria', BF: 'Burkina Faso', BI: 'Burundi', KH: 'Cambodia', 
        CM: 'Cameroon', CA: 'Canada', CV: 'Cape Verde', KY: 'Cayman Islands', 
        CF: 'Central African Republic', TD: 'Chad', CL: 'Chile', CN: 'China', 
        CX: 'Christmas Island', CC: 'Cocos (Keeling) Islands', CO: 'Colombia', 
        KM: 'Comoros', CG: 'Congo', CD: 'Congo, Democratic Republic', 
        CK: 'Cook Islands', CR: 'Costa Rica', CI: 'Cote D\'Ivoire (Ivory Coast)', 
        HR: 'Croatia (Hrvatska)', CU: 'Cuba', CY: 'Cyprus', CZ: 'Czech Republic',
        //CS: 'Czechoslovakia (former)', 
        DK: 'Denmark', DJ: 'Djibouti', DM: 'Dominica', DO: 'Dominican Republic', 
        TP: 'East Timor', EC: 'Ecuador', EG: 'Egypt', SV: 'El Salvador', 
        GQ: 'Equatorial Guinea', ER: 'Eritrea', EE: 'Estonia', ET: 'Ethiopia', 
        EU: 'European Union', FK: 'Falkland Islands (Malvinas)', 
        FO: 'Faroe Islands', FJ: 'Fiji', FI: 'Finland', FR: 'France', 
        //FX: 'France, Metropolitan',
        GF: 'French Guiana', PF: 'French Polynesia', 
        TF: 'French Southern Territories', MK: 'F.Y.R.O.M. (Macedonia)', GA: 'Gabon',
        GM: 'Gambia', GE: 'Georgia', DE: 'Germany', GH: 'Ghana', GI: 'Gibraltar', 
        GB: 'Great Britain (UK)', GR: 'Greece', GL: 'Greenland', GD: 'Grenada', 
        GP: 'Guadeloupe', GU: 'Guam', GT: 'Guatemala', GG: 'Guernsey', GN: 'Guinea',
        GW: 'Guinea-Bissau', GY: 'Guyana', HT: 'Haiti', 
        HM: 'Heard and McDonald Islands', HN: 'Honduras', HK: 'Hong Kong', 
        HU: 'Hungary', IS: 'Iceland', IN: 'India', ID: 'Indonesia', IR: 'Iran',
        IQ: 'Iraq', IE: 'Ireland', IL: 'Israel', IM: 'Isle of Man', IT: 'Italy', 
        JE: 'Jersey', JM: 'Jamaica', JP: 'Japan', JO: 'Jordan', KZ: 'Kazakhstan', 
        KE: 'Kenya', KI: 'Kiribati', KP: 'Korea (North)', KR: 'Korea (South)', 
        KW: 'Kuwait', KG: 'Kyrgyzstan', LA: 'Laos', LV: 'Latvia', LB: 'Lebanon', 
        LI: 'Liechtenstein', LR: 'Liberia', LY: 'Libya', LS: 'Lesotho', 
        LT: 'Lithuania', LU: 'Luxembourg', MO: 'Macau', MG: 'Madagascar', 
        MW: 'Malawi', MY: 'Malaysia', MV: 'Maldives', ML: 'Mali', MT: 'Malta', 
        MH: 'Marshall Islands', MQ: 'Martinique', MR: 'Mauritania', MU: 'Mauritius', 
        YT: 'Mayotte', MX: 'Mexico', FM: 'Micronesia', MC: 'Monaco', MD: 'Moldova', 
        MN: 'Mongolia', ME: 'Montenegro', MS: 'Montserrat', MA: 'Morocco', 
        MZ: 'Mozambique', MM: 'Myanmar', NA: 'Namibia', NR: 'Nauru', NP: 'Nepal', 
        NL: 'Netherlands', AN: 'Netherlands Antilles', NT: 'Neutral Zone', 
        NC: 'New Caledonia', NZ: 'New Zealand (Aotearoa)', NI: 'Nicaragua', 
        NE: 'Niger', NG: 'Nigeria', NU: 'Niue', NF: 'Norfolk Island', 
        MP: 'Northern Mariana Islands', NO: 'Norway', OM: 'Oman', PK: 'Pakistan', 
        PW: 'Palau', PS: 'Palestinian Territory - Occupied', PA: 'Panama', 
        PG: 'Papua New Guinea', PY: 'Paraguay', PE: 'Peru', PH: 'Philippines', 
        PN: 'Pitcairn', PL: 'Poland', PT: 'Portugal', PR: 'Puerto Rico',
        QA: 'Qatar', RE: 'Reunion', RO: 'Romania', RU: 'Russian Federation', 
        RW: 'Rwanda', GS: 'S. Georgia and S. Sandwich Isls.', 
        KN: 'Saint Kitts and Nevis', LC: 'Saint Lucia', 
        VC: 'Saint Vincent & the Grenadines', WS: 'Samoa', SM: 'San Marino', 
        ST: 'Sao Tome and Principe', SA: 'Saudi Arabia', SN: 'Senegal', 
        RS: 'Serbia', YU: 'Serbia and Montenegro (former)', SC: 'Seychelles',
        SL: 'Sierra Leone', SG: 'Singapore', SI: 'Slovenia', SK: 'Slovak Republic', 
        SB: 'Solomon Islands', SO: 'Somalia', ZA: 'South Africa', ES: 'Spain', 
        LK: 'Sri Lanka', SH: 'St. Helena', PM: 'St. Pierre and Miquelon', 
        SD: 'Sudan', SR: 'Suriname', SJ: 'Svalbard & Jan Mayen Islands', 
        SZ: 'Swaziland', SE: 'Sweden', CH: 'Switzerland', SY: 'Syria', TW: 'Taiwan', 
        TJ: 'Tajikistan',TZ: 'Tanzania', TH: 'Thailand', TG: 'Togo', TK: 'Tokelau', 
        TO: 'Tonga', TT: 'Trinidad and Tobago', TN: 'Tunisia', TR: 'Turkey', 
        TM: 'Turkmenistan', TC: 'Turks and Caicos Islands', TV: 'Tuvalu', 
        UG: 'Uganda', UA: 'Ukraine', AE: 'United Arab Emirates', 
        UK: 'United Kingdom', UM: 'US Minor Outlying Islands', 
        UY: 'Uruguay', 
        //SU: 'USSR (former)', 
        UZ: 'Uzbekistan', VU: 'Vanuatu', VA: 'Vatican City State (Holy See)', 
        VE: 'Venezuela', VN: 'Viet Nam', VG: 'British Virgin Islands', 
        VI: 'Virgin Islands (U.S.)', WF: 'Wallis and Futuna Islands', 
        EH: 'Western Sahara', YE: 'Yemen', ZM: 'Zambia', 
        //ZR: 'Zaire (See CD Congo, Democratic Republic)', 
        ZW: 'Zimbabwe' };

    //=========================================================================
    // METHODS
    //=========================================================================
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
    // Get List of Countries
    $.fn.getCountries = function() {
        //console.log("Number of Countries are: "+ Object.keys(countries).length);
        var list_with_html_markup;// = "<option></option>"; // first list option is blank by default except for multi-select.
        $.each(countries, function(index, value) {
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

    // Get List of Map Project Folders
    $.fn.getMapProjects = function() {
        var thisElement = this; // using "this" within ajax callback refers to its own jqxhr object.
        var list_with_html_markup = "";
        $.get('action/getmapuserroleprojects', "json")
        .done(function(data, status) {
                //console.log("data: "+data+"\nstatus: "+ status);
                // note: array = $.parseJSON(data)
                $.each($.parseJSON(data), function(index, value) {
                    list_with_html_markup += "<option>"+value+"</option>";
                });
               thisElement.empty().html(list_with_html_markup);
        });
        return this;
    }    

}(jQuery));

/************************************************************************************
 * jQuery DOM ready executable
 ************************************************************************************/
$(document).ready(function () {

    // ** DROP-DOWN SELECTIONS ****
    // When form loads, 
    // populate the list with countries and set with default country,
    // populate the list with territories of the default country.
    var default_country = "United States";
    $('#country').getCountries();
    $('#country').val(default_country);
    $('select#territory').getTerritories(default_country);
    $('#projectsavailable').getMapProjects();
    $('#countriesavailable').getCountries();
    //$('#countriesavailable').val(default_country);

    // Update list of territories based on Country selected.
    $('select#country').change(function(){
        var country_selected = $(this).val();
        $('select#territory').getTerritories(country_selected);
    });

    // **FORM RESET - Reset Organization Event Handler ****
    $("#reset").click(function() {
        $(this).closest('form').find("input, textarea").val("");
        $(this).closest('form').find("input[type=checkbox], input[type=radio]").prop("checked", "false");
        // reset <select> elements based on attr 'multiple' exists.
        $("#addOrganizationModal select").each( function( index, value ){
            var identity = $(this).attr('id');
            if (identity.length > 0)
            {
                var isMulti = $(this).is("[multiple]");
                if (isMulti)
                    $(this).prop("selectedIndex", "-1");
                else
                    $(this).prop("selectedIndex", "0");
            }
        });
    });

    // ** FORM FIELDS, VALUES ****
    var $addform = $('#form-add-organization');
    var $organizationname = $('#organizationname');
    var $numberofusers = $('#numberofusers');
    var $mapdownload = $('#mapdownload');
    var $mapeditable = $('#mapeditable');
    var $anonymize = $('#anonymize');
    var $arcgisuser = $('#arcgisuser');
    var $countriesavailable = $('#countriesavailable');
    var $projectsavailable = $('#projectsavailable');
    var $email = $('#email');
    var $phone = $('#phone');

    var $editform = $('#form-edit-organization');
    var $editedorganizationid = $('#editedorganizationid');
    var $editedorganizationname = $('#editedorganizationname');
    var $editednumberofusers = $('#editednumberofusers');
    var $editedmapdownload = $('#editedmapdownload');
    var $editedmapeditable = $('#editedmapeditable');
    var $editedanonymize = $('#editedanonymize');
    var $editedarcgisuser = $('#editedarcgisuser');
    var $editedcountriesavailable = $('#editedcountriesavailable');
    var $editedemail = $('#editedemail');
    var $editedphone = $('#editedphone');

    var $deleteform = $('#form-delete-organization');
    var $oldorganizationid = $('#oldorganizationid');
    var $oldorganizationname = $('#oldorganizationname');

    $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^\w+$/i.test( value );
    }, "Only letters, numbers, and underscores allowed." );

    // ** FORM ADD - Add Organization Event Handler ****
    $($addform).validate({
        debug: true,
        errorClass: "invalid",
        validClass: "valid",
        rules: {
            organizationname: {
                required: true,
                alphanumeric: true
            }
        },  
        messages: {
            organizationname: { required: 'Please enter the name of your organization.' },
        },
        submitHandler: function($addform)
        {
            $.ajax({
                url: 'action/addorganization',
                type: 'POST',
                data: {
                    organizationname: $organizationname.val(),
                    userlimit: $numberofusers.val(),
                    mapdownload: $mapdownload.val(),
                    mapeditable: $mapeditable.val(),
                    anonymize: $anonymize.val(),
                    arcgisuser: $arcgisuser.val(),
                    countriesavailable: $countriesavailable.val(),
                    projectsavailable: $projectsavailable.val(),
                    email: $email.val(),
                    phone: $phone.val()
                },
                success: function(result)
                {
                    if (result == 'fail')
                    {
                        console.log("Failed to add an Organization.");
                        console.log("Error Msg: "+ result);
                    }
                    else 
                    {
                        window.location.href = './organizations';
                        console.log("result: "+ result);
                    }
                }
            });
        },
        highlight: function(element, errorClass, validClass)
        {
            if (!$(element).is("em"))
            {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element).css("background-color", "yellow");
            }
        },
        unhighlight: function(element, errorClass, validClass)
        {
            $(element).removeClass(errorClass).addClass(validClass);
            $(element).css("background-color", "transparent");
        },
        errorPlacement: function(error, element)
        {
            error.insertAfter(element).css("color", "red");
        }
    }); //end form validation
/*
    // ** FORM EDIT - Update Organization Event Handler ****
    $($editform).validate({
        debug: true,
        errorClass: "invalid",
        validClass: "valid",
        rules: {
            organizationid: "required",
            organizationname: {
                required: true,
                alphanumeric: true
            }
        },            
        messages: {
            organizationname: { required: 'Please enter the name of your organization.' },
        },
        submitHandler: function($addform)
        {
            $.ajax({
                url: 'action/editorganization',
                type: 'POST',
                data: {
                    organizationid: $editedorganizationid.val(),
                    organizationname: $editedorganizationname.val(),
                    numberofusers: $editednumberofusers.val(),
                    mapdownload: $editedmapdownload.val(),
                    mapeditable: $editedmapeditable.val(),
                    arcgisuser: $editedarcgisuser.val(),
                    countriesavailable: $editedcountriesavailable.val(),
                    email: $editedemail.val(),
                    phone: $editedphone.val()
                },
                success: function(result)
                {
                    if (result == 'fail')
                    {
                        console.log("Failed to update Organization.");
                        console.log("Error Msg: "+ result);
                    }
                    else 
                    {
                        window.location.href = './organizations';
                        console.log("result: "+ result);
                    }
                }
            });
        },
        highlight: function(element, errorClass, validClass)
        {
            if (!$(element).is("em"))
            {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element).css("background-color", "yellow");
            }
        },
        unhighlight: function(element, errorClass, validClass)
        {
            $(element).removeClass(errorClass).addClass(validClass);
            $(element).css("background-color", "transparent");
        },
        errorPlacement: function(error, element)
        {
            error.insertAfter(element).css("color", "red");
        }
    }); //end form validation
*/

    // ** FORM DELETE - Delete Organization Event Handler ****
    $($deleteform).validate({
        debug: true,
        errorClass: "invalid",
        validClass: "valid",
        rules: {
            oldorganizationid: "required",            
            oldorganizationname: "required",
        },
        messages: {
            oldorganizationid: { required: 'Please enter the Organization ID.' },
            oldorganizationname: { required: 'Please enter the Organization Name.' },
        },
        submitHandler: function($deleteform)
        {
            $.ajax({
                url: 'action/deleteorganization',
                type: 'POST',
                data: {
                    organizationid: $oldorganizationid.val(),
                    organizationname: $oldorganizationname.val()
                },
                success: function(result)
                {
                    if (result == 'fail')
                    {
                        console.log("Failed to delete organization #"+$oldorganizationid+".");
                        console.log("Error Msg: "+ result);
                    }
                    else 
                    {
                        window.location.href = './organizations';
                        console.log("result: "+ result);
                    }
                }
            });
        },
        highlight: function(element, errorClass, validClass)
        {
            if (!$(element).is("em"))
            {
                $(element).addClass(errorClass).removeClass(validClass);
                $(element).css("background-color", "yellow");
            }
        },
        unhighlight: function(element, errorClass, validClass)
        {
            $(element).removeClass(errorClass).addClass(validClass);
            $(element).css("background-color", "transparent");
        },
        errorPlacement: function(error, element)
        {
            error.insertAfter(element).css("color", "red");
        }
    }); //end form validation

    // ArcGIS field validation
    // NOTE: Workaround since we cannot directly retrieve ArcGIS users from server due to security settings.
    $('#arcgisuser').blur( function() {

        // Show status when performance is slow.
        $("small").remove(":contains('Username')");
        $('#arcgisuser').after('<small style="color:black">Validating, please wait...</small>');
        $('#projects-section-stream-col').css("padding-bottom","0px");

        var input = $('#arcgisuser').val();
        var results;

        // get the list of all the available users.
        $.ajax({
                url: "../admin/action/getMapUsers",
                type: 'GET',
                dataType: 'json',
                error: function(xhr, textStatus, errorThrown) {
                    console.log(textStatus.toUpperCase());
                    console.log(errorThrown);
                    console.log(xhr);
                },
                success: function(data, textStatus, xhr) {
                    results = data;
                }
            })
            // evaluate the results with the field value.
            .done(function() {

                var invalid = false;

                if(Array.isArray(results))
                {
                    // evaluate username input.
                    for (var i = 0; i < results.length; i++)
                    {
                        if (input === results[i].username)
                        {
                            invalid = true;
                            break;
                        }
                    }

                    // if username invalid, flag; else, clear any flags.
                    if (invalid)
                    {
                        // check the last char and if NAN then add number; else, increase number.
                        var orgname = $('#organizationname').val();
                        orgname = (orgname.length === 0) ? "needorgname" : orgname;

                        var lastchar = orgname.substr(orgname.length - 1);
                        var number;
                        if (!isNaN(lastchar))
                            number = ++lastchar;
                        else
                            number = 1;
                        var suggestion = orgname+number;

                        // show message.
                        $("#arcgisuser").nextAll('small').remove();
                        $('#arcgisuser').after('<small style="color:red">Username already taken.'
                                                +'<br/>Try "'+suggestion+'"?</small>');
                        $('#arcgisuser').css("background-color","pink");
                        $('#add-organization').prop("disabled", true);
                        $('#projects-section-stream-col').css("padding-bottom","40px");
                    }
                    else
                    {
                        $("#arcgisuser").nextAll('small').remove();
                        $('#arcgisuser').css("background-color","transparent");
                        $('#add-organization').prop("disabled", false);
                        $('#projects-section-stream-col').css("padding-bottom","0px");
                    }
                }
                else
                    { console.log("Error: Results are not in array format as expected."); }
            });
    }); //end field validation

}); //end jquery
