<!DOCTYPE html>
<html lang="en">
<head>
  <title>Scorpion | Courage Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <style>
    .affix {
        top: 20px;
    }
    .bg-solid-blue {color: #fff; background-color: #1E88E5;}
    .bg-dodger-blue {color: #fff; background-color: #1E90FF;}
    .bg-lightsky-blue {color: #fff; background-color: #87CEFA;}
    .bg-cornflower-blue {color: #fff; background-color: #6495ED;}
    .bg-solid-gray {color: #fff; background-color: #888888;}
    .bg-light-gray {color: #fff; background-color: #D0D0D0;}
    .bg-solid-maroon {color: #fff; background-color: #990000;}
    .margin-top-10 {margin-top: 10px;}
    .margin-top-20 {margin-top: 20px;}
    .margin-top-30 {margin-top: 30px;}
    .blue {color: blue;}
    .green {color: green;}
    .red {color: red;}
    .yellow {color: #DAA520;}
    div#introduction {
        font-size: 16px;
        color: #1E90FF;
        padding-left: 0px;
    }
    div.col-sm-9 div {
        font-size: 28px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 30px;
        padding-right: 30px;
    }
    
    span.bold {font-weight: bold;}
    span.italic {font-style: italic;}
    span.underline {text-decoration: underline;}
    span.tip {font-weight: bold;}
    span.note {font-style: italic;}
    span.example {font-style: italic; font-weight: bold;}

    .section-content {font-size: 16px;}
    h1.section-title {font-size: 36px; font-weight: bold;}
    h2.section-title {font-size: 30px;}
    h3.section-title {font-size: 26px;}
    h4.section-title {font-size: 18px;}
    h5.section-title {font-size: 18px; font-style: italic;}

    .subpoint-lowercase-alpha {list-style-type: lower-alpha;}
    ol {font-size: 16px;}
    li.padding-left-10 {padding-left: 10px;}
    li.padding-left-20 {padding-left: 20px;}
    li.submenu {
        list-style-type: none;
        padding-left: 20px;
        font-size: 14px;
    }
    li.subsubmenu {
        list-style-type: none;
        padding-left: 40px;
        font-size: 12px;
    }
    li.analytics {list-style-type: none; display:none;}
    li.favorites {list-style-type: none; display:none;}
    li.feed {list-style-type: none; display:none;}
    li.filters {list-style-type: none; display:none;}
    li.mapping {list-style-type: none; display:none;}
    li.plugins {list-style-type: none; display:none;}
    li.projects {list-style-type: none; display:none;}    
    li.reporting {list-style-type: none; display:none;}
    li.users {list-style-type: none; display:none;}
    li.vernacular {list-style-type: none; display:none;}

  </style>
</head>
<body data-spy="scroll" data-target="#courageScroll" data-offset="15">

<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:100px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
          <div class="logo">
            <img src="<?php echo base_url().'/img/svg_active/scorpion.svg';?>" 
                class="img-circle"
                alt="Courage Services" 
                width="100" 
                height="100"
                style="background-color:#fff; padding-left:10px; padding-right:10px">
            </img>
          </div>
      </div>
      <div class="col-sm-9">
        <h1 style="text-align:center; font-size:50px;">Courage Services - Help Guide</h1>
      </div>
    </div>
  </div>
</div>
<br>

<div class="container">
  <div class="row">

    <nav class="col-sm-3" id="courageScroll">
      <!-- Help Navigaton List -->
      <div id="app-navigation-bar">
        <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="55">

          <!-- Navigation: Overview -->
          <li id="menu-app-overview"><a href="#app-overview">Scorpion Overview</a></li>

          <!-- Navigation: Vernacular -->
          <li id="menu-vernacular" class="menu"><a href="#vernacular-term">Vernacular</a></li>
          <li id="menu-analyst-term" class="submenu vernacular"><a href="#analyst-term">Analyst</a></li>
          <li id="menu-map-boundary-term" class="submenu vernacular"><a href="#map-boundary-term">Map Boundary</a></li>
          <li id="menu-stream-term" class="submenu vernacular"><a href="#stream-term">Stream</a></li>
          <li id="menu-tweet-term" class="submenu vernacular"><a href="#tweet-term">Tweet</a></li>
          <li id="menu-tweeter-term" class="submenu vernacular"><a href="#tweeter-term">Tweeter</a></li>

          <!-- Navigation: Users -->
          <li id="menu-users" class="menu"><a href="#users">Users</a></li>
          <li id="menu-manage-users" class="submenu users"><a href="#manage-users">Manage Users</a></li>
          <li id="menu-admin-user" class="subsubmenu users"><a href="#admin-user">Administrator</a></li>
          <li id="menu-map-analyst-user" class="subsubmenu users"><a href="#map-analyst-user">Map Analyst</a></li>
          <li id="menu-analyst-user" class="subsubmenu users"><a href="#analyst-user">Analyst</a></li>
          <li id="menu-adding-user" class="submenu users"><a href="#adding-user">Adding a User</a></li>
          <li id="menu-editing-user" class="submenu users"><a href="#editing-user">Editing a User</a></li>
          <li id="menu-deleting-user" class="submenu users"><a href="#deleting-user">Deleting a User</a></li>

          <!-- Navigation: Projects -->
          <li id="menu-projects" class="menu"><a href="#projects">Projects</a></li>
          <li id="menu-adding-project" class="submenu projects"><a href="#adding-project">Adding a Project</a></li>
          <li id="menu-editing-project" class="submenu projects"><a href="#editing-project">Editing a Project</a></li>
          <li id="menu-viewing-project" class="submenu projects"><a href="#viewing-project">Viewing a Project</a></li>
          <li id="menu-sharing-project" class="submenu projects"><a href="#sharing-project">Sharing a Project</a></li>
          <li id="menu-deleting-project" class="submenu projects"><a href="#deleting-project">Deleting a Project</a></li>
          <li id="menu-project-function-differences" class="submenu projects"><a href="#project-function-differences">Differences in functionality</a></li>
          <li id="menu-project-purpose-differences" class="submenu projects"><a href="#project-purpose-differences">Differences in purpose</a></li>
          <li id="menu-project-function-common" class="submenu projects"><a href="#project-function-common">Common functions</a></li>
          <li id="menu-project-max-min" class="subsubmenu projects"><a href="#project-max-min">Maximize/Minimize</a></li>
          <li id="menu-project-cancel" class="subsubmenu projects"><a href="#project-cancel">Cancel</a></li>
          <li id="menu-project-close" class="subsubmenu projects"><a href="#project-close">Close</a></li>
          <li id="menu-project-search" class="subsubmenu projects"><a href="#project-search">Search</a></li>
          <!--li id="menu-search-or" class="subsubmenu projects"><a href="#search-or">OR</a></li-->
          <!--li id="menu-search-and" class="subsubmenu projects"><a href="#search-and">AND</a></li-->
          <!--li id="menu-search-plus" class="subsubmenu projects"><a href="#search-plus">+</a></li-->
          <!--li id="menu-search-not" class="subsubmenu projects"><a href="#search-not">NOT</a></li-->
          <!--li id="menu-search-minus" class="subsubmenu projects"><a href="#search-minus">-</a></li-->
          <!--li id="menu-search-tilde" class="subsubmenu projects"><a href="#search-tilde">~</a></li-->
          <!--li id="menu-search-asterisk" class="subsubmenu projects"><a href="#search-asterisk">*</a></li-->
          <!--li id="menu-search-question-mark" class="subsubmenu projects"><a href="#search-question-mark">?</a></li-->
          <!--li id="menu-search-any-phrase" class="subsubmenu projects"><a href="#search-any-phrase">"any phrase"</a></li-->
          <!--li id="menu-search-compound-statement" class="subsubmenu projects"><a href="#search-compound-statement">(compound statement)</a></li-->
          <li id="menu-project-status" class="submenu projects"><a href="#project-status">Status</a></li>

          <!-- Navigation: Filters -->
          <li id="menu-filters" class="menu"><a href="#filters">Filters</a></li>
          <!--li id="menu-access-filters" class="subsubmenu filters"><a href="#access-filters">How to access?</a></li-->
          <li id="menu-geographic-filter" class="submenu filters"><a href="#geographic-filter">Geographic Filter</a></li>
          <!--li id="menu-activate-geographic-filter" class="subsubmenu filters"><a href="#activate-geographic-filter">How to activate?</a></li-->
          <!--li id="menu-deactivate-geographic-filter" class="subsubmenu filters"><a href="#deactivate-geographic-filter">How to deactivate?</a></li-->
          <li id="menu-keyword-filter" class="submenu filters"><a href="#keyword-filter">Keyword Filter</a></li>
          <!--li id="menu-activate-keyword-filter" class="subsubmenu filters"><a href="#activate-keyword-filter">How to activate?</a></li-->
          <!--li id="menu-deactivate-keyword-filter" class="subsubmenu filters"><a href="#deactivate-keyword-filter">How to deactivate?</a></li-->
          <li id="menu-language-filter" class="submenu filters"><a href="#language-filter">Language Filter</a></li>
          <!--li id="menu-activate-language-filter" class="subsubmenu filters"><a href="#activate-language-filter">How to activate?</a></li-->
          <!--li id="menu-deactivate-language-filter" class="subsubmenu filters"><a href="#deactivate-language-filter">How to deactivate?</a></li-->
          <li id="menu-list-of-languages" class="submenu filters"><a href="#list-of-languages">List of Languages</a></li>
          <li id="menu-sentiment-filter" class="submenu filters"><a href="#sentiment-filter">Sentiment Filter</a></li>
          <!--li id="menu-activate-sentiment-filter" class="subsubmenu filters"><a href="#activate-sentiment-filter">How to activate?</a></li-->
          <!--li id="menu-deactivate-sentiment-filter" class="subsubmenu filters"><a href="#deactivate-sentiment-filter">How to deactivate?</a></li-->
          <li id="menu-source-filter" class="submenu filters"><a href="#source-filter">Source Filter</a></li>
          <!--li id="menu-activate-source-filter" class="subsubmenu filters"><a href="#activate-source-filter">How to activate?</a></li-->
          <!--li id="menu-deactivate-source-filter" class="subsubmenu filters"><a href="#deactivate-source-filter">How to deactivate?</a></li-->
          <li id="menu-list-of-online-sources" class="submenu filters"><a href="#list-of-online-sources">List of Online Sources</a></li>

          <!-- Navigation: Feed -->
          <li id="menu-feed" class="menu"><a href="#feed">Feed</a></li>
          <li id="menu-feed-user-profile" class="submenu feed"><a href="#feed-user-profile">User Profile</a></li>
          <li id="menu-feed-data-source" class="submenu feed"><a href="#feed-data-source">Data Source</a></li>
          <li id="menu-feed-tweet" class="submenu feed"><a href="#feed-tweet">Tweet</a></li>
          <li id="menu-feed-media" class="submenu feed"><a href="#feed-media">Media</a></li>
          <li id="menu-feed-map" class="submenu feed"><a href="#feed-map">Find on the Map</a></li>
          <li id="menu-feed-translate" class="submenu feed"><a href="#feed-translate">Auto-Translate</a></li>
          <li id="menu-feed-ignore" class="submenu feed"><a href="#feed-ignore">Spam (Ingore User)</a></li>
          <li id="menu-feed-load-more" class="submenu feed"><a href="#feed-load-more">Load More</a></li>
          <li id="menu-feed-download-data" class="submenu feed"><a href="#feed-download-data">Download Data</a></li>
          <li id="menu-feed-download-csv" class="subsubmenu feed"><a href="#feed-download-csv">CSV</a></li>
          <!--li id="menu-feed-howto-csv" class="subsubmenu feed"><a href="#feed-howto-csv">How to download?</a></li-->
          <li id="menu-feed-download-shapefile" class="subsubmenu feed"><a href="#feed-download-shapefile">Shapefile</a></li>
          <!--li id="menu-feed-howto-shapefile" class="subsubmenu feed"><a href="#feed-howto-shapefile">How to download?</a></li-->

          <!-- Navigation: Analytics -->
          <li id="menu-analytics" class="menu"><a href="#analytics">Analytics Dashboard</a></li>
          <li id="menu-timeline-analysis" class="submenu analytics"><a href="#timeline-analysis">Timeline Analysis</a></li>
          <li id="menu-timeframe-edit" class="submenu analytics"><a href="#timeframe-edit">Alternative Time Frame (Date Range)</a></li>
          <li id="menu-top-users-analysis" class="submenu analytics"><a href="#top-users-analysis">Top Users Analysis</a></li>
          <li id="menu-top-hashtags-analysis" class="submenu analytics"><a href="#top-hashtags-analysis">Top Hashtags Analysis</a></li>
          <li id="menu-sentiment-analysis" class="submenu analytics"><a href="#sentiment-analysis">Sentiment Analysis</a></li>
          <li id="menu-positive-tweets" class="subsubmenu analytics"><a href="#positive-tweets">Positive tweets</a></li>
          <li id="menu-negative-tweets" class="subsubmenu analytics"><a href="#negative-tweets">Negative tweets</a></li>
          <li id="menu-neutral-tweets" class="subsubmenu analytics"><a href="#neutral-tweets">Neutral tweets</a></li>
          <li id="menu-unknown-tweets" class="subsubmenu analytics"><a href="#unknown-tweets">Unknown tweets</a></li>
          <li id="menu-language-analysis" class="submenu analytics"><a href="#language-analysis">Language Analysis</a></li>

          <!-- Navigation: Map -->
          <li id="menu-mapping" class="menu"><a href="#mapping">Mapping Dashboard</a></li>
          <li id="menu-map-location-search" class="submenu mapping"><a href="#map-location-search">Location Search</a></li>
          <li id="menu-map-basemaps" class="submenu mapping"><a href="#map-basemaps">Basemaps</a></li>
          <li id="menu-map-data-layers" class="submenu mapping"><a href="#map-data-layers">Data Layers</a></li>
          <!--li id="menu-map-activate-layer" class="subsubmenu mapping"><a href="#map-activate-layer">How to activate a layer?</a></li-->
          <!--li id="menu-map-layers-standard" class="subsubmenu mapping"><a href="#map-layers-standard">Layers (Standard)</a></li-->
          <!--li id="menu-map-layers-starred" class="submenu mapping"><a href="#map-layers-starred">Starred Layers</a></li-->
          <!--li id="menu-map-layers-custom" class="subsubmenu mapping"><a href="#map-layers-custom">User Layers (Custom)</a></li-->
          <!--li id="menu-map-add-user-layer" class="subsubmenu mapping"><a href="#map-add-user-layer">Adding a Custom User Layer</a></li-->
          <!--li id="menu-map-layer-on-off" class="subsubmenu mapping"><a href="#map-layer-on-off">How to turn on/off layer?</a></li-->
          <li id="menu-map-layer-options" class="submenu mapping"><a href="#map-layer-options">Layer Options</a></li>
          <!--li id="menu-map-layer-transparency" class="subsubmenu mapping"><a href="#map-layer-transparency">Transparency</a></li-->
          <!--li id="menu-map-layer-zoom" class="subsubmenu mapping"><a href="#map-layer-zoom">Zoom to Layer</a></li-->
          <!--li id="menu-map-layer-info" class="subsubmenu mapping"><a href="#map-layer-info">More Information</a></li-->
          <!--li id="menu-map-remove-layer" class="subsubmenu mapping"><a href="#map-remove-layer">Remove Layer</a></li-->
          <li id="menu-map-legend" class="submenu mapping"><a href="#map-legend">Legend</a></li>
          <li id="menu-map-delete-layer" class="submenu mapping"><a href="#map-delete-layer">Delete Layers</a></li>
          <li id="menu-map-geo-filters" class="submenu mapping"><a href="#map-geo-filters">Geo Filters</a></li>
          <li id="menu-map-data-filter" class="submenu mapping"><a href="#map-data-filter">Data Filter</a></li>
          <!--li id="menu-map-use-data-filter" class="subsubmenu mapping"><a href="#map-use-data-filter">Utilizing a data filter</a></li-->
          <!--li id="menu-map-data-filter-prereq" class="subsubmenu mapping"><a href="#map-data-filter-prereq">Prerequisite</a></li-->
          <!--li id="menu-map-use-filter-steps" class="subsubmenu mapping"><a href="#map-use-filter-steps">Steps</a></li-->
          <li id="menu-map-shape-filter" class="submenu mapping"><a href="#map-shape-filter">Shape Filter</a></li>
          <!--li id="menu-map-cancel-shape" class="subsubmenu mapping"><a href="#map-cancel-shape">Cancel drawing shape</a></li-->
          <!--li id="menu-map-polygon" class="subsubmenu mapping"><a href="#map-polygon">Polygon</a></li-->
          <!--li id="menu-map-draw-polygon" class="subsubmenu mapping"><a href="#map-draw-polygon">To draw a polygon</a></li-->
          <!--li id="menu-map-delete-last-point" class="subsubmenu mapping"><a href="#map-delete-last-point">Delete last point</a></li-->
          <!--li id="menu-map-box" class="subsubmenu mapping"><a href="#map-box">Box</a></li-->
          <!--li id="menu-map-draw-box" class="subsubmenu mapping"><a href="#map-draw-box">To draw a box</a></li-->
          <li id="menu-map-streamed-data-filter" class="submenu mapping"><a href="#map-streamed-data-filter">Streamed Data Filter - On/Off</a></li>
          <li id="menu-map-heatmap-or-point" class="submenu mapping"><a href="#map-heatmap-or-point">Heatmap vs. Point</a></li>
          <li id="menu-map-upload-data" class="submenu mapping"><a href="#map-upload-data">Upload Data</a></li>
          <!--li id="menu-map-upload-limits" class="subsubmenu mapping"><a href="#map-upload-limits">Upload Limitations</a></li-->
          <!--li id="menu-map-shapefile-reqs" class="submenu mapping"><a href="#map-shapefile-reqs">Shapefile Requirements</a></li-->
          <!--li id="menu-map-upload-from-file" class="submenu mapping"><a href="#map-upload-from-file">How to upload data from a file?</a></li-->
          <!--li id="menu-map-upload-steps" class="subsubmenu mapping"><a href="#map-upload-steps">Steps</a></li-->

          <!-- Navigation: Bug Reporting -->
          <li id="menu-reporting" class="menu"><a href="#reporting">Bug Reporting &amp; Feedback</a></li>
          <li id="menu-reporting-steps" class="submenu reporting"><a href="#reporting-steps">Steps</a></li>
          <li id="menu-bug-example" class="submenu reporting"><a href="#bug-example">Example - Bug</a></li>
          <!--li id="menu-bug-found" class="subsubmenu reporting"><a href="#bug-found">Bug Found</a></li-->
          <!--li id="menu-bug-description" class="subsubmenu reporting"><a href="#bug-description">Bug Description</a></li-->
          <li id="menu-feedback-example" class="submenu reporting"><a href="#feedback-example">Example - Feedback</a></li>
          <!--li id="menu-feedback-suggestion" class="subsubmenu reporting"><a href="#feedback-suggestion">Feedback Suggested</a></li-->
          <!--li id="menu-feedback-description" class="subsubmenu reporting"><a href="#feedback-description">Feedback Description</a></li-->

          <!-- Navigation: Sources -->
          <li id="menu-sources" class="menu"><a href="#sources">Sources Overview</a></li>

          <!-- Navigation: Favorites & Alerts -->
          <li id="menu-favorites-and-alerts" class="menu"><a href="#favorites">Favorites &amp; Alerts</a></li>
          <!--li id="menu-access-favorites" class="subsubmenu favorites"><a href="#access-favorites">How to access?</a></li-->
          <li id="menu-adding-favorite" class="submenu favorites"><a href="#adding-favorite">Adding a Favorite</a></li>
          <!--li id="menu-fav-by-social-media" class="subsubmenu favorites"><a href="#fav-by-social-media">By social media account</a></li-->
          <!--li id="menu-fav-by-keyword" class="subsubmenu favorites"><a href="#fav-by-keyword">By keyword combination</a></li-->
          <li id="menu-using-favorite" class="submenu favorites"><a href="#using-favorite">Using a Favorite</a></li>
          <li id="menu-editing-favorite" class="submenu favorites"><a href="#editing-favorite">Editing a Favorite</a></li>
          <li id="menu-deleting-favorite" class="submenu favorites"><a href="#deleting-favorite">Deleting a Favorite</a></li>
          <li id="menu-adding-alert" class="submenu favorites"><a href="#adding-alert">Adding an Alert</a></li>
          <!--li id="menu-access-notifications" class="subsubmenu favorites"><a href="#access-notifications">How to access notifications?</a></li-->
          <li id="menu-viewing-alert" class="submenu favorites"><a href="#viewing-alert">View Results of Alert</a></li>
          <li id="menu-dismissing-alert" class="submenu favorites"><a href="#dismissing-alert">Dismiss Alert</a></li>
          <li id="menu-removing-alert" class="submenu favorites"><a href="#removing-alert">Removing an Alert</a></li>

          <!-- Navigation: Browser Plugins -->
          <li id="menu-plugins" class="menu"><a href="#plugins">Adobe Flash Plugin</a></li>
          <li id="menu-chrome-plugin" class="submenu plugins"><a href="#chrome-plugin">Google Chrome</a></li>
          <li id="menu-firefox-plugin" class="submenu plugins"><a href="#firefox-plugin">Mozilla Firefox</a></li>

          <!-- Navigation: Contact -->
          <li id="menu-additional-help" class="menu"><a href="#help">Additional Help</a></li>

        </ul>
      </div>      
      <!--End: Navigation List-->
    </nav>

    <!--/***SECTIONS***************************************************************************/-->
    <div class="col-sm-9">

      <!--Section: Application Overview-->
      <div id="app-overview">
        <h1 class="section-title">Scorpion Overview</h1>
        <p class="section-content">The Scorpion application is a vital tool to help users understand a particular location,
          event, or population. The application leverages existing "clean" data and social media.
          This includes, but is not limited to:
          <ul>
            <li class="section-content">understanding the context of a certain location,</li>
            <li class="section-content">making better decisions regarding a location,</li>
            <li class="section-content">identifying trends of an area,</li>
            <li class="section-content">monitoring crises in real-time.</li>
          </ul>
          <p class="section-content">
            An instance of the Scorpion application can be created for a company's private usage.
          </p>
        </p>
      </div>

      <!--Section: Application Vernacular-->
      <div id="vernacular-term" class="vernacular">
        <h1 class="section-title">Vernacular</h1>
      </div>
      <div id="analyst-term" class="vernacular">
        <h2 class="section-title">Analyst</h2>
        <p class="section-content">A user who uses the Scorpion application to analyze data.</p>
      </div>
      <div id="map-boundary-term" class="vernacular">
        <h2 class="section-title">Map Boundary</h2>
        <p class="section-content">A boundary drawn on the Map view to limit the retrieval or display of data
          corresponding to the location within the boundary. These boundaries include
          drawing of a shape.
        </p>
      </div>
      <div id="stream-term" class="vernacular">
        <h2 class="section-title">Stream</h2>
        <p class="section-content">A live data stream or live streaming of online media.</p>
      </div>
      <div id="tweet-term" class="vernacular">
        <h2 class="section-title">Tweet</h2>
        <p class="section-content">A piece of news or conversation posted online (i.e. Internet). Typically, this
          is a word used in the Twitter world but used within our application practices to 
          precisely refer to any live streamed data into our media feed including posts
          from Twitter, YouTube, Instagram, Facebook, etc.
        </p>
      </div>
      <div id="tweeter-term" class="vernacular">
        <h2 class="section-title">Tweeter</h2>
        <p class="section-content">A user who tweets (i.e. posts online messages to the world).</p>
      </div>
      <!--end section: Application Vernacular-->

      <!--Section: Application Users-->
      <div id="users" class="users">
        <h1 class="section-title">Users</h1>
      </div>
      <div id="manage-users" class="users">
        <h2 class="section-title">Manage Users</h2>
        <p class="section-content">To access the "Manage Users" screen, click on "Manage Users" in the menu.
          There are three user roles: administrator, analyst, and map analyst.
        </p>
      </div>
      <div id="admin-user" class="users">
        <h3 class="section-title">Administrator</h3>
        <ul>
          <li class="section-content">has access to create or manage users.</li>
          <li class="section-content">has access to update his/her own user account information.</li>
          <li class="section-content">CAUTION: There is no "cancel" update button when editing a user account.</li>
        </ul>
      </div>
      <div id="map-analyst-user" class="users">
        <h3 class="section-title">Map Analyst</h3>
        <ul>
          <li class="section-content">does NOT have access to create or manage users.</li>
          <li class="section-content">has access to manage own user account information.</li>
        </ul>
      </div>
      <div id="analyst-user" class="users">
        <h3 class="section-title">Analyst</h3>
        <ul>
          <li class="section-content">does NOT have access to create or manage users.</li>
          <li class="section-content">does NOT have access to update his/her own user account information.</li>
        </ul>
      </div>
      <div id="adding-user" class="users">
        <h2 class="section-title">Adding a User</h2>
        <ol>
          <li class="section-content">Open the "Manage Users" screen.</li>
          <li class="section-content">Click on "New User".</li>
          <li class="section-content">Add the user information, organization and user role (permissions).</li>
          <ol>
            <li class="section-content subpoint-lowercase-alpha">
              NOTE: Can only update the user role (permissions) when logged in under
              a user account with Administrator permissions.
            </li>
          </ol>
          <li class="section-content">Click "Save".</li>
        </ol>
        <p class="section-content"><span class="tip">Tip:</span> 
          Click "Cancel" if any mistakes were made or no longer necessary to create user.
        </p>
      </div>
      <div id="editing-user" class="users">
        <h2 class="section-title">Editing a User</h2>
        <ol>
          <li class="section-content">Open the "Manage Users" screen.</li>
          <li class="section-content">Click on an existing user or click on the pencil icon of an existing user.</li>
          <li class="section-content">Update any user information, organization and user role (permissions).</li>
          <ol>
            <li class="section-content subpoint-lowercase-alpha">
              NOTE: Can only update the user role (permissions) when logged in under
              a user account with Administrator permissions.
            </li>
          </ol>
          <li class="section-content">Click "Save".</li>
        </ol>
        <p class="section-content"><span class="tip">Tip:</span> 
          Click "Cancel" if any mistakes were made or no longer necessary to create user.
        </p>
      </div>
      <div id="deleting-user" class="users">
        <h2 class="section-title">Deleting a User</h2>
        <p class="section-content">
          <span class="note">
            Note: Only an administrator has permissions to delete a user.
          </span>
        </p>
        <ol>
          <li class="section-content">Open the "Manage Users" screen.</li>
          <li class="section-content">Click on the garbage bin of an existing user desiring to delete.</li>
          <li class="section-content">Check the box for confirming the deletion of user.</li>
          <li class="section-content">Observe the "Delete" button appears.</li>
          <li class="section-content">Click "Delete".</li>
        </ol>
      </div>
      <!--end section: Application Users-->

      <!--Section: Application Projects - Stream vs Map-->
      <div id="projects" class="projects">
        <h1 class="section-title">Projects - Stream vs. Map</h1>
        <p class="section-content">
          In short, the Stream project is a modern Map project with social media data streaming.
          A Map project is a geo-spatial analytical project that uses data already added into the
          databases by credible sources. A Stream project is a data analytical project leveraging
          geo-spatial data with social media data that is continuously streamed from credible sources.
          A project cannot be converted between Stream and Map type.
        </p>
        <p class="section-content">
          All projects in the "Manage Projects" screen are listed in chronological order
          from most recently created (i.e. latest) to oldest (i.e. earliest) created.
        </p>
      </div>

      <div id="adding-project" class="projects">
        <h3 class="section-title">Adding a Project</h3>
        <ol>
          <li class="section-content">On the Manage Projects screen, click on "Add New Project".</li>
          <li class="section-content">Select either Map or Stream type.</li>
          <li class="section-content">Enter project title.</li>
          <li class="section-content">Optionally, enter project description.</li>
          <li class="section-content">Optionally, if adding a Stream project, then enter a country and/or region.</li>
          <li class="section-content">Click "Save".</li>
          <li class="section-content">See new project displayed in Manage Projects screen.</li>
        </ol>
        <p class="section-content">
          <span class="tip">Tip: </span>
          A new map project will display with a globe icon whereas an existing map project
          (having a selected map location) will display with the map aerial view of the location specified.
        </p>
      </div>

      <div id="editing-project" class="projects">
        <h3 class="section-title">Editing a Project</h3>
        <ol>
          <li class="section-content">On the Manage Projects screen, click the pencil icon on an existing project.</li>
          <li class="section-content">See "Edit Project" window display.</li>
          <li class="section-content">Edit project title and/or project description.</li>
          <li class="section-content">Click "Update".</li>
          <li class="section-content">See project updates displayed in Manage Projects screen.</li>
        </ol>
      </div>

      <div id="viewing-project" class="projects">
        <h3 class="section-title">Viewing a Project</h3>
        <p class="section-content">
          After creating a new project and opening the project, the header bar with menu, project title, 
          and notification symbol will display in addition to the view of the specific project type 
          (i.e. map view or stream view). A Stream project view will display these main sections: 
          search bar, live data streaming section, analysis section, and a map section. 
          A Map project view will display a map. Both project views will also display GUI options which 
          allow the user to manage their view such as zooming into a location on the map or displaying 
          tweets related to a specific city.
        </p>
      </div>

      <div id="sharing-project" class="projects">
        <h3 class="section-title">Sharing a Project</h3>
        <p class="section-content">
          A project instance is only accessible to one user and not accessible by multiple user. 
          When a project is shared, the project is actually copied to the desired user receiving 
          the shared project. A shared project:
          <ul>
            <li class="section-content">can be shared with many users</li>
            <li class="section-content">can be shared as many times desired</li>
            <li class="section-content">cannot be shared (or copied) to self</li>
          </ul>
          <p class="section-content">
            Multiple users will not see each other updates on a shared project. The shared project 
            is a copy of the project at the specified time when shared.
          </p>
          <ol>
            <li class="section-content">On the Manage Projects screen, click the Share icon (i.e. square with up arrow in center) 
              on an existing project.</li>
            <li class="section-content">See "Share Project" window display.</li>
            <li class="section-content">Select all desired users to share the project with.</li>
            <ol>
              <li class="section-content subpoint-lowercase-alpha">To see all the users, scroll up 
                and down the list of users.</li>
              <li class="section-content subpoint-lowercase-alpha">Selected users will highlight 
                in blue and display with a Selected User icon (i.e. person head with checkmark on side).</li>
            </ol>
            <li class="section-content">Click "Share".</li>
            <li class="section-content">See a Sharing Complete message display.</li>
          </ol>
        </p>
      </div>

      <div id="deleting-project" class="projects">
        <h3 class="section-title">Deleting a Project</h3>
        <ol>
          <li class="section-content">On the Manage Projects screen, click the garbage bin 
            on an existing project.</li>
          <li class="section-content">See "Delete Project" window display.</li>
          <li class="section-content">Check the box confirming the project deletion and "Delete"
            button will appear.</li>
          <li class="section-content">Click "Delete" button.</li>
          <li class="section-content">See a message confirming project is deleted and the project
            no longer displays in Manage Projects screen.</li>
        </ol>
      </div>

      <div id="project-function-differences" class="projects">
        <h2 class="section-title">Differences in functionality</h2>
        <p class="section-content">
          Many features from the classic Map project type are also included in the modern 
          Stream project type. However, there are a few sharp differences.
        </p>
        <h3 id="project-function-stream" class="section-title">Stream Project</h3>
        <p class="section-content">List of the new functionalities within Stream project:
          <ul>
            <li class="section-content">Live Streaming of social media data (Feeds)</li>
            <li class="section-content">Analysis dashboards including timeline, language, sentiment, top users 
              virtually socializing, and top hashtags used</li>
            <li class="section-content">Updated Layer feature</li>
          </ul>
          <p class="section-content">A data stream, by default on a new project, will display all data based on 
            scope limited by country and region selected (optional). Furthermore, the data 
            streamed can be limited by the drawing of a box or polygon within the Map 
            view of the Stream project.
          </p>
        </p>
        <h3 id="project-function-map" class="section-title">Map Project</h3>
        <p class="section-content">List of the classic functionalities within Map project, but not carried 
          into the Stream project:
          <ul>
            <li class="section-content">
              Tools
              <ul>
                <li class="section-content">export screen capture of map with data points</li>
              </ul>
            </li>
            <li class="section-content">
              Data filter (via Layer)
              <ul>
                <li class="section-content">filtering by data via the Attribute Table view
                  <ul>
                    <li class="section-content">filter by category</li>
                    <li class="section-content">highlight row(s)</li>
                    <li class="section-content">apply "Show Search" option</li>
                  </ul>
                </li>
                <li class="section-content">
                  a deprecated Editor option allows a Map Analyst 
                  to directly make edits to a standard layer and update 
                  legend associated
                </li>
              </ul>
            </li>
            <li class="section-content">
              DD (decimal degrees)
              <ul>
                <li class="section-content">
                  Search Location filter has option to search by decimal degrees 
                  (or place by coordinates like latitude/longitude) in addition 
                  to search by placename
                </li>
              </ul>
          </ul>
        </p>
      </div>

      <div id="project-purpose-differences" class="projects">
        <h2 class="section-title">Differences in purpose</h2>
        <h3 id="project-purpose-map" class="section-title">Map Project</h3>
        <p class="section-content">
          This is our classic type of a project which does not support live data streaming. 
          This project type only uses pre-plotted geolocation data. This is particularly useful 
          when a particular location does not have or has little access to the Internet. Under 
          such restrictions, the amount of live data streams is limited making the support for 
          live feeds unnecessary and, in certain cases, more confusing during data analysis. 
          Therefore, this project type is very useful during data analysis with simple focus on 
          pre-existing “clean” data.
        </p>
        <p class="section-content">
          <span class="tip">This requires Adobe’s Shockwave Flash support. Shockwave Flash is 
            available as a browser plugin for most browsers including Google Chrome and Mozilla Firefox.
          </span>
        </p>
        <p class="section-content">
          When the Map project is created and opened, a full map is displayed with the following button options:
          <ul>
            <li class="section-content">Change Basemap</li>
            <li class="section-content">Add Layer</li>
            <li class="section-content">Tools</li>
            <li class="section-content">
              User Guide - opens "https://www.scorpionportal.com/flash/assets/PortalUsersGuide.pdf" 
              which currently does not exist.
            </li>
            <li class="section-content">
              Find - location by city?
              <ul>
                <li>
                  Types to Search by
                  <ul>
                    <li>Placename</li>
                    <li>DD - decimal degree</li>
                  </ul>
                </li>
                <li>Zoom to location</li>
                <li>Clear location</li>
              </ul>
            </li>
            <li class="section-content">Activate/Deactivate Layers</li>
          </ul>
        </p>
        <h3 id="project-purpose-stream" class="section-title">Stream Project</h3>
        <p class="section-content">
          This is our modern type of project that maximizes social media data. A Stream project 
          also includes a full map with many of the options from the Map project, but styled in 
          a modern view. In addition to this Map view are the following other views (or components):
          <ul>
            <li class="section-content">Feed</li>
            <li class="section-content">Analysis
              <ul>
                <li class="section-content">Timeline</li>
                <li class="section-content">Top Users</li>
                <li class="section-content">Top Hashtags</li>
                <li class="section-content">Sentiments</li>
                <li class="section-content">Languages</li>
              </ul>
            </li>
          </ul>
          <p class="section-content">There are also these new features included:</p>
          <ul>
            <li class="section-content">Search Bar</li>
            <li class="section-content">Favorites</li>
            <li class="section-content">Filter</li>
            <li class="section-content">Alerts</li>
          </ul>
          <p class="section-content">
            In the Map view, the method to filter data corresponding to the plotted and/or tweeted 
            data points is NOT through a table format but through a list format with a keyword 
            search option. This Map view also has shape drawing options: box and polygon.
          </p>
        </p>
      </div>

      <div id="project-function-common" class="projects">
        <h2 class="section-title">Common functions</h2>
      </div>
      <div id="project-max-min" class="projects">
        <h3 class="section-title">Maximize/Minimize</h3>
        <p class="section-content">
          By clicking on this action, the view will be maximized or minimized from its current state. 
          <br/>Maximizing will display the view throughout entire body of webpage. The other views will minimize.
          <br/>Minimizing will display the view back to its original section in the body of webpage.
        </p>
      </div>
      <div id="project-cancel" class="projects">
        <h3 class="section-title">Cancel</h3>
        <p class="section-content">
          By clicking on any "Cancel" action, any changes made will not be saved and user will be returned to 
          previous state of application.
        </p>
      </div>
      <div id="project-close" class="projects">
        <h3 class="section-title">Close</h3>
        <p class="section-content">
          By clicking on any "Close" action, any changes made will not be automatically saved and user 
          will be returned to previous state of application.
        </p>
      </div>
      <div id="project-search" class="projects">
        <h3 class="section-title">Search</h3>
        <p class="section-content">
          The Search Bar is visible in an opened Stream project. The text entered into the Search field 
          will result in displaying tweets with the related text into the Feed (i.e. media feed frame). 
          A search with text will only find results in the language (or language of each character) entered. 
          For example, searching on “pope” (English) will not find results on “papa” (Spanish) or “pape” 
          (French). Searches are NOT case-sensitive.
          <br/></br/>
          The following are supported in the Search Bar:
          <br/><br/>
        </p>
      </div>
      <div id="search-or" class="projects">
        <h4 class="section-title"><span class="bold">OR</span></h4>
        <p class="section-content">
          Default search behavior and is implied.
          <br/>A search on any and all text entered. Words, phrases, and compound statements 
          separated by a space will use an "OR" search. One can add this "OR" explicitly if desired.
          <br/><span class="example">Example(s):</span>
          <br/>pope or obama, pope obama, pope OR obama
          <br/><br/>
        </p>
      </div>
      <div id="search-and" class="projects">
        <h4 class="section-title"><span class="bold">AND</span></h4>
        <p class="section-content">
          A search on a combination of text.
          <br/><span class="example">Example(s):</span>
          <br/>pope AND obama, pope and fiat
          <br/><br/>
        </p>
      </div>
      <div id="search-plus" class="projects">
        <h4 class="section-title"><span class="bold">+</span></h4>
        <p class="section-content">
          Maintaining support for previous syntax. An AND search for a single word, phrase or statement.
          <br/><span class="example">Example:</span> +pope +obama
          <br/><br/>
        </p>
      </div>
      <div id="search-not" class="projects">
        <h4 class="section-title"><span class="bold">NOT</span></h4>
        <p class="section-content">
          A search excluding terms from search results.
          <br/><span class="example">Example:</span> pope NOT obama
          <br/><br/>
        </p>
      </div>
      <div id="search-minus" class="projects">
        <h4 class="section-title"><span class="bold">-</span></h4>
        <p class="section-content">
          Same as NOT keyword search. For clarity, this is a minus or dash sign (not an underscore).
          See above.
          <br/><span class="example">Example:</span> pope -john
          <br/><br/>
        </p>
      </div>
      <div id="search-tilde" class="projects">
        <h4 class="section-title"><span class="bold">~</span></h4>
        <p class="section-content">
          A <span class="tip">
          <a target="_blank" href="https://en.wikipedia.org/wiki/Approximate_string_matching">fuzzy search</a>
          </span> 
          which is a process that locates tweets that are likely to
          be relevant to a search argument (i.e. text) even when it does not correspond exactly to the search
          text entered. Use the tilde (~) character to perform a fuzzy search.
          <br/><span class="example">Example:</span> ~pope
          <br/><br/>
        </p>
      </div>
      <div id="search-asterisk" class="projects">
        <h4 class="section-title"><span class="bold">*</span></h4>
        <p class="section-content">
          A wildcard search that is a substitution for <span class="underline">multiple</span> characters.
          CAUTION: Using this wildcard at the beginning or end of text phrase might lead to poor performance.
          Instead, try the fuzzy search (~).
          <br/><span class="example">Example:</span> p*pe
          <br/><br/>
        </p>
      </div>
      <div id="search-question-mark" class="projects">
        <h4 class="section-title"><span class="bold">?</span></h4>
        <p class="section-content">
          A wildcard search that is a substitution for a <span class="underline">single</span> character.
          <br/><span class="example">Example:</span> p?pe
          <br/><br/>
        </p>
      </div>
      <div id="search-any-phrase" class="projects">
        <h4 class="section-title">"any phrase"</h4>
        <p class="section-content">
          A search on a phrase will require surrounding double quotes. This will result in exact matches
          of that phrase.
          <br/><span class="example">Example:</span> "pope visit"
          <br/><br/>
        </p>
      </div>
      <div id="search-compound-statement" class="projects">
        <h4 class="section-title">(compound statement)</h4>
        <p class="section-content">
          A search on compound statements requires surrounding parenthesis. Several levels of nesting are
          supported.
          <br/><span class="example">Example:</span> (pope francis) AND (fiat cars)
          <br/><br/>
        </p>
      </div>
      <div id="project-status" class="projects">
        <h3 class="section-title">Status</h3>
        <p class="section-content">
          A Status Bar displays above the Search Bar in the Stream project and under the header bar in the 
          Map project.
        </p>
        <p class="section-content">
          In the Stream project, the Timeline is not reflective until highlighted in Timeline view. 
          The filters applied to the search results also appear on the Status Bar.
        </p>
        <p class="section-content">
          In the Map project, any announcements to analysts are place in the Status Bar along with the 
          project’s title.
        </p>
      </div>
      <!--end section: Application Projects -->

      <!--Section: Application Filters-->
      <div id="filters" class="filters">
        <h1 class="section-title">Filter</h1>
        <p class="section-content">
          Filters are only applied to Stream projects. Filters are used to display specific relevant 
          data streams (or tweets) according to the filter applied. For example, if I only want to see 
          tweets posted in English, then I would apply the Language Filter with English selected. 
          Filters are cached. The last filter applied upon user exiting the project will be kept. When 
          the user re-opens the project, the view will apply the last saved filter(s). If no filters 
          were applied, then the project will display results without any filters. The defaults of each 
          filter no longer apply with a filter has been saved for a project.
          <br/><br/>
          Filter updates are reflected in the Feed, Analysis, and the Map views.
        </p>
      </div>

      <div id="access-filters" class="filters">
        <h3 class="section-title">How to access?</h3>
        <ol>
          <li class="section-content">Open a Stream project.</li>
          <li class="section-content">View the main project view with the Feed, Analysis, Search Bar, and Map.</li>
          <li class="section-content">Click on the Filter symbol (i.e. funnel) and see Filter panel display on 
            right side of screen.</li>
        </ol>
      </div>

      <div id="geographic-filter" class="filters">
        <h2 class="section-title margin-top-30">Geographic Filter</h2>
        <p class="section-content">
          By default, the geographic filtering is applied. When this filter is applied, the tweets retrieved 
          will have a geolocation and will have been broadcasted from the specified map boundary (or boundaries) 
          created. Disabling this geographic filter will retrieve all tweets (with and without a geolocation in 
          addition to ignoring any map boundaries).
        </p>
      </div>

      <div id="activate-geographic-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to activate?</span></h4>        
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe at the top of the Filter panel is the Geographic 
            Filtering option.</li>
          <li class="section-content">Slide white dot to the <span class="bold">right</span> and 
            background of switch should appear blue.</li>
        </ol>
        <p class="section-content">
          <span class="tip">Tip: </span>Can also click on the right side of the switch and confirm dot 
          slides to right.
        </p>
      </div>

      <div id="deactivate-geographic-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to deactivate?</span></h4>
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe at the top of the Filter panel is the Geographic 
            Filtering option.</li>
          <li class="section-content">Slide white dot to the <span class="bold">left</span> and 
            background of switch should appear white.</li>
        </ol>
        <p class="section-content">          
          <span class="tip">Tip: </span>Can also click on the left side of the switch and confirm dot 
          slides to left.
        </p>         
      </div>

      <div id="keyword-filter" class="filters">
        <h2 class="section-title margin-top-30">Keyword Filter</h2>
        <p class="section-content">
          By default, no keywords are filtered. This is the "Ignored Terms" Filtering.
        </p>
      </div>

      <div id="activate-keyword-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to activate?</span></h4>        
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe near the top of the Filter panel is the "Ignore
            Terms" Filtering section.</li>
          <li class="section-content">Click on the "Add New Ignore Term" option.</li>
          <li class="section-content">Add term into the text field that will be ignored.</li>
          <li class="section-content">Click "Add" button.</li>
          <li class="section-content">See the new term to be ignored is now displayed under the 
            "Add New Ignore Term" option within the "Ignore Terms" Filtering section.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="deactivate-keyword-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to deactivate?</span></h4>
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe near the top of the Filter panel is the "Ignore Terms"
          Filtering section.</li>
          <li class="section-content">Click "X" button on the right side of the ignored term.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="language-filter" class="filters">
        <h2 class="section-title margin-top-30">Language Filter</h2>
        <p class="section-content">
          By default, no languages are filtered.
        </p>
      </div>

      <div id="activate-language-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to activate?</span></h4>        
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe in the left side of the Filter panel is the Language
            Filtering section.</li>
          <li class="section-content">Select (i.e. check) a language.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="deactivate-language-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to deactivate?</span></h4>
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe in the left side of the Filtering panel is the Language
            Filtering section.</li>
          <li class="section-content">Deselect (i.e. uncheck) a language.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="list-of-languages" class="filters">
        <h3 class="section-title">List of Languages</h3>
        <ol>
          <li class="section-content">Arabic (ar)</li>
          <li class="section-content">Bengali (bn)</li>
          <li class="section-content">Chinese (zh-tw, zh-cn, zh)</li>
          <li class="section-content">Czech (cs)</li>
          <li class="section-content">Danish (da)</li>
          <li class="section-content">Dutch (nl)</li>
          <li class="section-content">English (en, en-gb)</li>
          <li class="section-content">Filipino (fil)</li>
          <li class="section-content">Finnish (fi)</li>
          <li class="section-content">French (fr)</li>
          <li class="section-content">German (de)</li>
          <li class="section-content">Hebrew (he)</li>
          <li class="section-content">Hindi (hi)</li>
          <li class="section-content">Hungarian (hu)</li>
          <li class="section-content">Indonesian (id)</li>
          <li class="section-content">Italian (it)</li>
          <li class="section-content">Japanese (ja)</li>
          <li class="section-content">Korean (ko)</li>
          <li class="section-content">Malay (msa)</li>
          <li class="section-content">Norwegian (no)</li>
          <li class="section-content">Persian (fa)</li>
          <li class="section-content">Polish (pl)</li>
          <li class="section-content">Portuguese (pt)</li>
          <li class="section-content">Romanian (ro)</li>
          <li class="section-content">Russian (ru)</li>
          <li class="section-content">Spanish (es)</li>
          <li class="section-content">Swedish (sv)</li>
          <li class="section-content">Thai (th)</li>
          <li class="section-content">Turkish (tr)</li>
          <li class="section-content">Ukrainian (uk)</li>
          <li class="section-content">Vietnamese (vi)</li>
        </ol>
      </div>

      <div id="sentiment-filter" class="filters">
        <h2 class="section-title margin-top-30">Sentiment Filter</h2>
        <p class="section-content">
          By default, no sentiment are filtered. A sentiment is a tone or attitude understood 
          from the tweet. A sentiment is positive, negative, neutral, or unknown. The filter 
          options provided exclude the "unknown" option. A global standard sentiment algorithm 
          is used in this application.
        </p>
      </div>

      <div id="activate-sentiment-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to activate?</span></h4>        
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe in the right side of the Filter panel is the Sentiment
            Filtering section.</li>
          <li class="section-content">Select (i.e. check) a sentiment.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="deactivate-sentiment-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to deactivate?</span></h4>
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe in the right side of the Filter panel is the Sentiment
          Filtering section.</li>
          <li class="section-content">Deselect (i.e. uncheck) a sentiment.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="source-filter" class="filters">
        <h2 class="section-title margin-top-30">Source Filter</h2>
        <p class="section-content">
          By default, no sources are filtered. For an explanation of a source, please see section 
          "Sources Overview".
        </p>
      </div>

      <div id="activate-source-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to activate?</span></h4>        
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe in the right side of the Filter panel is the Source
            Filtering section.</li>
          <li class="section-content">Select (i.e. check) a source.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="deactivate-source-filter" class="filters">
        <h4 class="section-title margin-top-20"><span class="bold">How to deactivate?</span></h4>
        <ol>
          <li class="section-content">Access the Filtering panel.</li>
          <li class="section-content">Observe in the right side of the Filter panel is the Source
          Filtering section.</li>
          <li class="section-content">Deselect (i.e. uncheck) a source.</li>
          <li class="section-content">Click on "Update" button (in bottom right corner of Filter panel).</li>
        </ol>
      </div>

      <div id="list-of-online-sources" class="filters">
        <h3 class="section-title">List of Online Sources</h3>
        <ul>
          <li class="section-content">Bambuser</li>
          <li class="section-content">Flickr</li>
          <li class="section-content">Foursquare</li>
          <li class="section-content">Instagram</li>
          <li class="section-content">Twitter</li>
          <li class="section-content">VK</li>
          <li class="section-content">YouTube</li>
          <li class="section-content">News</li>
          <li class="section-content">Flashpoint</li>
        </ul>
      </div>
      <!--end section: Application Filters-->

      <!--Section: Application Feed-->
      <div id="feed" class="feed">
        <h1 class="section-title">Feed</h1>
        <p class="section-content">
          "Feed" is a live media feed. This is the ability to continuously retrieve and display content from a 
          media source, like Twitter, based on prescribed settings. In our application, the settings that 
          determine the results in the feed are the filters. Please see the "Filters" section for more details 
          on dictating the types of live feeds retrieved and displayed.
        </p>
        <p class="section-content">
          Within the Feed view, one can download the results into a CSV file, download the results into a 
          shapefile, or maximize/minimize view. There is also a scrollbar to scroll through the Feed results 
          although the ability exists to scroll without using the scrollbar.
        </p>
        <p class="section-content">
          Each collection of tweets forms a density spot on a map. The darker or bigger the spot on the map, 
          the larger the collection of tweets from that particular location on the map. This means the user 
          or users in that certain location on the map have created many tweets in order to create the 
          collection size. The more tweets, the larger the collection size (of tweets).
        <p>
        <p class="section-content">A tweet in the Feed will display with the following:</p>
        <ul>
          <li class="section-content">user profile photo with option to view user profile</li>
          <li class="section-content">data source</li>
          <li class="section-content">user’s tweet containing username, date and time posted, message 
            posted online, and media link (if included)</li>
          <li class="section-content">geolocation option to find on map</li>
          <li class="section-content">language option to translate into English</li>
          <li class="section-content">ignore user option</li>
        </ul>
        <p class="section-content">Following are the actions one can take on each result of the live feed.</p>
      </div>

      <div id="feed-user-profile" class="feed">
        <h2 class="section-title">View user profile</h2>
        <p class="section-content">
          By clicking on the circular image (usually a profile photo) on the right side of the tweet, 
          a dialog will display with the user’s profile and related information retrieved from the data 
          source’s profile page.
        </p>
      </div>

      <div id="feed-data-source" class="feed">
        <h2 class="section-title">View data source</h2>
        <p class="section-content">
          This is a simple display of the data source’s logo. For example, if a blue bird flying towards 
          the top right displays as the logo, then this is signifying the data source as Twitter.
        </p>
      </div>

      <div id="feed-tweet" class="feed">
        <h2 class="section-title">View tweet</h2>
        <p class="section-content">
          A tweet displayed contains the username of the tweeter, date and time of the tweet posted, 
          and message (which might include URL links, hashtags, other usernames, etc.). When an analyst 
          clicks on a username in the tweet, the username is added to the Search Bar providing an instant 
          search option solely on the username selected. In addition, the same method applies to an analyst 
          clicking on a hashtag in the tweet. An analyst can press Enter key and the Feed will filter results 
          to tweets only from the username (or hashtag) selected. When an analyst clicks on a URL link in 
          the tweet, a new browser tab will open and display the webpage associated to the URL link.
        </p>
      </div>

      <div id="feed-media" class="feed">
        <h2 class="section-title">View media</h2>
        <p class="section-content">
          If a tweet has a media file associated, then the media icon (which looks like a file with a 
          picture inserted) will display to the left of the tweet. By hovering the mouse over the media icon, 
          a pop-up will display with the view of the media.
        </p>
      </div>

      <div id="feed-map" class="feed">
        <h2 class="section-title">Find on the Map</h2>
        <p class="section-content">
          By clicking on the geolocation pinpoint icon to the left of the tweet, the geolocation will 
          display where the tweet was broadcasted in the Map view. In addition, the Map view will automatically 
          zoom into the tweet’s location. If a tweet does not have this icon displayed, then the tweet does 
          not have a geolocation associated.
        </p>
      </div>

      <div id="feed-translate" class="feed">
        <h2 class="section-title">Auto-Translate</h2>
        <p class="section-content">
          By clicking on this uppercase-A-lowercase-a icon (i.e. "Aa") to the left of the tweet, the 
          language of the tweet will be translated into English. In addition, clicking on this translation 
          icon will enable/disable any links, usernames, and hashtags. This function uses the Google 
          Translate tool.
        </p>
      </div>

      <div id="feed-ignore" class="feed">
        <h2 class="section-title">Spam (Ingore User)</h2>
        <p class="section-content">
          By clicking on this 'ignore user' icon to the left of the tweet, the Feed will update with 
          tweets EXCLUDING the username to be ignored. The Keyword filter will also update with the username 
          to be ignored (in the "Ignore Terms" subsection of filter).
        </p>
      </div>

      <div id="feed-load-more" class="feed">
        <h2 class="section-title">Load More</h2>
        <p class="section-content">
          When scrolling to the end of the Feed results near the bottom of the Feed section, an option 
          displays to user to load more Feed results (or tweets). By clicking on this 'load more' link, 
          the Feed will update with more tweets.
        </p>
      </div>

      <div id="feed-download-data" class="feed">
        <h2 class="section-title">Download Data</h2>
        <p class="section-content">
          There are two file formats to download data into: CSV and Shapefile.
        </p>
      </div>

      <div id="feed-download-csv" class="feed">
        <h3 class="section-title">CSV</h3>
        <p class="section-content">
          CSV is a comma-separated values file format. This downloads data in plain text with each value 
          separated by commas.
        </p>
      </div>

      <div id="feed-howto-csv" class="feed">
        <h4 class="section-title">How to download?</h4>
        <ol>
          <li class="section-content">Find the CSV download icon (i.e. square with down arrow in center) in the 
            top right corner of the Feed view.</li>
          <li class="section-content">Click on the CSV download icon.</li>
          <li class="section-content">See an Export Request Submitted message.</li>
          <li class="section-content">See downloading of CSV file with search result data in browser.</li>
          <li class="section-content">See an Export Complete message.</li>
          <li class="section-content">Open CSV file downloaded and see the search result data displayed.</li>
        </ol>
        <p class="section-content">
          <span class="tip">Tip: </span>A tooltip appears when the mouse hovers over the icon stating 
          "export to csv".<br/>
          <span class="note">Note: An application like Excel is best used to open a CSV file and view the data.</span>
        </p>
      </div>

      <div id="feed-download-shapefile" class="feed">
        <h3 class="section-title">Shapefile</h3>
        <p class="section-content">
          Shapefile is a geospatial vector data file format. This file is commonly used for geographic 
          information system (GIS) software and stores location, shape, and attributes of geographic 
          features. This is a zipped file containing the minimum files:
        </p>
        <ol>
          <li class="section-content">DBF</li>
          <li class="section-content">PRJ</li>
          <li class="section-content">SHP</li>
          <li class="section-content">SHX</li>
        </ol>
      </div>

      <div id="feed-howto-shapefile" class="feed">
        <h4 class="section-title">How to download?</h4>
        <ol>
          <li class="section-content">Find the Shapefile download icon (i.e. globe with down arrow pointing into square) in the 
            top right corner of the Feed view.</li>
          <li class="section-content">Click on the Shapefile download icon.</li>
          <li class="section-content">See an Export Request Submitted message.</li>
          <li class="section-content">See downloading of Shapefile file with search result data in browser.</li>
          <li class="section-content">See an Export Complete message.</li>
          <li class="section-content">Open Shapefile file downloaded and see the search result data displayed.</li>
        </ol>
        <p class="section-content">
          <span class="tip">Tip: </span>A tooltip appears when the mouse hovers over the icon stating 
          "export to shapefile".<br/>
          <span class="note">Note: A GIS application can be used to open a Shapefile file and view the data.
            Some of the recommended softwares are ArcGIS and QGIS (free).</span>
        </p>
      </div>
      <!--end section: Application Feed-->

      <!--Section: Application Analytics Dashboard-->
      <div id="analytics" class="analytics">
        <h1 class="section-title">Analytics Dashboard</h1>
        <p class="section-content">
          The analysis section features five analytical components all designed to help filter the data 
          displayed in the Feed and Map and provide a quick overview. By default, this dashboard is 
          minimized to fit within the greater project screen and the active display in this view is the 
          Timeline section of the dashboard. To see this entire Analytics Dashboard, maximize this view. 
          Notice when this view is maximized that tabs are displayed at bottom of the dashboard connecting 
          to each view (i.e. Feed, Map, and Analysis - which would currently highlight as active).
        </p>
      </div>

      <div id="timeline-analysis" class="analytics">
        <h2 class="section-title">Timeline Analysis</h2>
        <p class="section-content">
          This dashboard displays a timeline and history of all the tweets from the search results. 
          The time range is reflected in the Search Bar’s timeframe (which is accessible via the 
          calendar icon positioned to the right of the search bar). The timeline subsection is a 
          histogram with the y-axis in units of tweet quantity and the x-axis in units of date and 
          time. The history subsection is a line graph with the x-axis in units of dates. 
        </p>
        <p class="section-content">
          By hovering the mouse over the bar in the histogram, a pop-up will display with the actual 
          number of tweets and the date corresponding to the bar. By clicking a bar in the timeline, 
          the search results will update with the timeline specified by the clicked bar with a certain 
          time range.
        </p>
        <p class="section-content">
          By drawing a box on the history graph, the histogram will update according to the timeframe 
          selected in the history graph and the search results will update and display the tweets 
          reflected within the timeline.
        </p>
        <p class="section-content">
          There is a rolling one-year window that occurs with the data stored. Data is stored from today 
          to one year from today.
        </p>
      </div>

      <div id="timeframe-edit" class="analytics">
        <h3 class="section-title">Alternative Time Frame (Date Range)</h3>
        <ol>
          <li class="section-content">View the main project view with the Feed, Analysis, Search Bar, and Map.
            <ol>
              <li class="section-content subpoint-lowercase-alpha">
                If the Analysis subsection is maximized, then simply minimize this view to return to
                main project view.
              </li>
            </ol>
          </li>
          <li class="section-content">To edit, click on the Time Frame symbol (i.e. calendar) and see Date Range 
            dialog display.
          </li>
          <li class="section-content">Set the Start and End time.
            <ol>
              <li class="section-content subpoint-lowercase-alpha">
                If End time is left blank, then the time value will be now (i.e. the current time of 
                setting new date range).
              </li>
            </ol>
          </li>
          <li class="section-content"> 
            Click “Set” and search results will update according to new time frame.
          </li>
        </ol>
        <p class="section-content">
          <span class="note">Note: Time (clock) can actually be set as well within this Date Range dialog.</span>
        </p>
      </div>

      <div id="top-users-analysis" class="analytics">
        <h2 class="section-title">Top Users Analysis</h2>
        <p class="section-content">
          Bar graph ranking tweeters from top to bottom by number of tweets per tweeter. Most frequent 
          tweeter is at the top (based on the search results) and the next few frequent tweeters listed 
          thereafter towards bottom of view. At most at once, six tweeters are displayed. By clicking on 
          the bar related to the tweeter’s username, the username will display in the Search Bar and the 
          results will update accordingly. 
        </p>
      </div>

      <div id="top-hashtags-analysis" class="analytics">
        <h2 class="section-title">Top Hashtags Analysis</h2>
        <p class="section-content">
          Word cloud of top hashtags where hashtags display with greater prominence that are used more 
          frequently in tweets. By hovering the mouse over a hashtag (or any word without the actual 
          hashtag symbol or pound symbol), the hashtag will enlarge and signify that a mouse click will 
          update search results based on currently highlighted (or enlarged) hashtag. By clicking the 
          highlighted hashtag, the search results will update based on hashtag selected and the hashtag 
          will be inserted into the Search Bar. 
        </p>
        <p class="section-content">
          The word cloud continues to display in the Top Hashtags Analysis view and allows the analyst 
          to select a different hashtag if desired.
        </p>
      </div>

      <div id="sentiment-analysis" class="analytics">
        <h2 class="section-title">Sentiment Analysis</h2>
        <p class="section-content">
          Pie chart of positive, negative, neutral, and unknown (sentiment) tweets. Pie chart totals to 100 percent.
          <br/><span class="note">NOTE: The selection of a sentiment slice in this Analysis view does not 
          update the Filter for sentiments.</span>
        </p>
      </div>

      <div id="positive-tweets" class="analytics">
        <h3 class="section-title">Positive tweets</h3>
        <p class="section-content">
          Percentage is displayed (of <span class="bold">positive</span> tweets) along with a 
          <span class="bold green">green</span> color highlight. When this pie slice is clicked, 
          the sentiment analysis will display 100% <span class="bold">positive</span> sentiments 
          and the Feed will update to display only tweets with <span class="bold">positive</span> sentiments.
        </p>
      </div>

      <div id="negative-tweets" class="analytics">
        <h3 class="section-title">Negative tweets</h3>
        <p class="section-content">
          Percentage is displayed (of <span class="bold">negative</span> tweets) along with a 
          <span class="bold red">red</span> color highlight. When this pie slice is clicked, 
          the sentiment analysis will display 100% <span class="bold">negative</span> sentiments 
          and the Feed will update to display only tweets with <span class="bold">negative</span> sentiments.
        </p>
      </div>

      <div id="neutral-tweets" class="analytics">
        <h3 class="section-title">Neutral tweets</h3>
        <p class="section-content">
          Percentage is displayed (of <span class="bold">neutral</span> tweets) along with a 
          <span class="bold yellow">yellow</span> color highlight. When this pie slice is clicked, 
          the sentiment analysis will display 100% <span class="bold">neutral</span> sentiments 
          and the Feed will update to display only tweets with <span class="bold">neutral</span> sentiments.
        </p>
      </div>

      <div id="unknown-tweets" class="analytics">
        <h3 class="section-title">Unknown tweets</h3>
        <p class="section-content">
          Percentage is displayed (of tweets with an unrecognized sentiment) along with a 
          <span class="bold blue">blue</span> color highlight. When this pie slice is clicked, the 
          sentiment analysis will display 100% <span class="bold">unknown</span> sentiments and the 
          Feed will update to display only tweets with <span class="bold">unknown</span> sentiments.
        </p>
      </div>

      <div id="language-analysis" class="analytics">
        <h2 class="section-title">Language Analysis</h2>
        <p class="section-content">
          Pie chart of the speaking languages used in tweets. Pie chart totals to 100 percent. 
          The languages included are listed in List of Languages subsection under the Language 
          Filter section of this user guide. The coloring of each slice holds no particular meaning 
          other than to distinguish each language used. When a language slice is selected (or clicked), 
          the Language filter is updated along with the search results of the language applied.
        </p>
      </div>
      <!--end section: Application Analytics-->

      <!--Section: Application Mapping Dashboard-->
      <div id="mapping" class="mapping">
        <h1 class="section-title">Mapping Dashboard</h1>
        <p class="section-content">
          Within the Project view is a Map view (or subview). This view is a flat map of the world. 
          When a geographic scope is applied (not to be confused with geographic filtering which is 
          related to tweets with geolocation), the map will display as zoomed into that particular 
          geographic location.
        </p>
      </div>

      <div id="map-location-search" class="mapping">
        <h2 class="section-title">Location Search</h2>
        <p class="section-content">
          The Map has an option to search for a particular location on the map. This search is like 
          a filter to zoom the map into a specific location. This option is 
          symbolized with a "magnifying glass with global lens". In a Stream project, this is positioned 
          in the top left corner of the map. In Map project, this appears as a search box in the top center 
          of the map with options to locate by "placename" or "decimal degree", to zoom into location, 
          and to clear location search.
        </p>
      </div>

      <div id="map-basemaps" class="mapping">
        <h2 class="section-title">Basemaps</h2>
        <p class="section-content">
          A basemap is a type of visual of the map.
        </p>
        <p class="section-content">
          The Stream project offers basemap options more aligned with today’s most used technology 
          maps. The basemap options are:
        </p>
        <ol>
          <li class="section-content">Default (Google Streets)</li>
          <li class="section-content">Bing Imagery</li>
          <li class="section-content">Bing Hybrid</li>
          <li class="section-content">Google Streets</li>
          <li class="section-content">Google Imagery</li>
          <li class="section-content">Google Hybrid</li>
        </ol>
        <p class="section-content">
          The Map project’s basemap options are:
        </p>
        <ol>
          <li class="section-content">ESRI Streets</li>
          <li class="section-content">ESRI Imagery</li>
          <li class="section-content">ESRI Gray Canvas</li>
          <li class="section-content">Bing Road (like Google Streets)</li>
          <li class="section-content">Bing Aerial (like Bing Imagery)</li>
          <li class="section-content">Bing Aerial with Labels</li>
          <li class="section-content">National Geographic</li>
          <li class="section-content">Courage Night</li>
        </ol>
        <p class="section-content">
          The hybrid basemaps are the most preferred by most analyst.
        </p>
      </div>

      <div id="map-data-layers" class="mapping">
        <h2 class="section-title">Data Layers</h2>
        <p class="section-content">
          <span class="note">
            NOTE: This is also the “Add Data” function which is short for “Add Data Layer to  Map” function.
          </span><br/>
          A map layer is typically a layer preset with data points already confirmed and approved by a map 
          analyst. Layers are used to identify certain objects along with their specific locations on a 
          map. For example, I would add a data layer for finding Washington, DC schools if I wanted to 
          see all of the schools in the Washington, DC area. This is very helpful with finding tweets 
          from a certain location which adds context to the information publicized. For example, if I 
          see a spike in tweets from a particular location regarding a dance and then I add a school data 
          layer, then I can start making predictions in the direction of the dance being a school dance and 
          start asking more relevant questions like “is this an annual school dance like a prom?” or “is 
          this a random event like a charity dance function?”. The icon symbolizing the “Add Data Layer” 
          are three stacked sheets. 
        </p>
      </div>

      <div id="map-activate-layer" class="mapping">
        <h3 class="section-title">How to activate a layer?</h3>
        <ol>
          <li class="section-content">Click on the Layer icon (i.e. stacked sheets) on the map.</li>
          <li class="section-content">Click on arrow right (of either Layers or User Layers).</li>
          <li class="section-content">If Layers selected, click on arrow right of region.</li>
          <li class="section-content">Click on the plus icon (+) of desired layer and ensure it is glowing in 
            blue with white plus sign.</li>
          <li class="section-content">If in a Map project, drag the layer to the map to add layer.</li>
        </ol>
        <p class="section-content">
          <span class="note">
            <span class="bold">Caution: </span>
            Once a layer is selected (i.e. activated), then it cannot deselected to remove the layer. 
            To remove a layer, see subsection “Remove Layer” below under “Data” section.
          </span>
        </p>
      </div>

      <div id="map-layers-standard" class="mapping">
        <h3 class="section-title">Layers (Standard)</h3>
        <p class="section-content">
          There are standard layers, or layers already included, within the application. These standard 
          layers include but are not limited to:
        </p>
        <ul>
          <li class="section-content">schools</li>
          <li class="section-content">hospitals</li>
          <li class="section-content">mosques</li>
          <li class="section-content">pharmacies</li>
          <li class="section-content">police buildings</li>
          <li class="section-content">starbucks</li>
        </ul>
        <p class="section-content">
          Layers are organized by region and particularly by country. Layers are also useful for social 
          media aggregation on plotted locations.
        </p>
        <p class="section-content">
          There is a Map Chart on the Map view and easily seen in the maximized view mode. This Map Chart 
          shows the data layers applied and any legends associated with each layer applied.
        </p>
      </div>

      <div id="map-layers-starred" class="mapping">
        <h4 class="section-title">Starred Layers</h4>
        <p class="section-content">
          Any layer with a star (*) next to it is a recommended data layer for new users.
        </p>
      </div>

      <div id="map-layers-custom" class="mapping">
        <h3 class="section-title">User Layers (Custom)</h3>
        <p class="section-content">
          An analyst can add his/her own custom data layer (including option with file upload).
        </p>
      </div>

      <div id="map-add-user-layer" class="mapping">
        <h4 class="section-title">Adding a Custom User Layer</h4>
        <p class="section-content">
          To add a custom user layer, an analyst will need to upload a data layer from a file. 
          Please see "Upload Data" section.
        </p>
      </div>

      <div id="map-layer-on-off" class="mapping">
        <h4 class="section-title">How to turn on/off layer?</h4>
        <p class="section-content">
          In the Map Chart, click on the Data subview. Its subview will display the layers applied. 
          If the layer has a white checkmark and a blue background, then the layer is applied. No 
          checkmark next to layer means the layer is not applied.
        </p>
      </div>

      <div id="map-layer-options" class="mapping">
        <h4 class="section-title">Show Layer Options</h4>
        <p class="section-content">
          To see more options associated to the layer, click on the arrow right button and a Layer 
          Options dialog will display. The Layer Options dialog displays with options that include: 
          level of transparency, zooming to the layer, seeing more information regarding the layer, 
          and removing the layer from the map and Map Chart.
        </p>
      </div>

      <div id="map-transparency" class="mapping">
        <h5 class="section-title margin-top-20">Transparency</h5>
        <p class="section-content">
          There is a transparency slider that changes the level of transparency of the data’s visibility 
          on the map. This particularly useful when changing the brightness points on the map.
        </p>
      </div>

      <div id="map-layer-zoom" class="mapping">
        <h5 class="section-title margin-top-20">Zoom to Layer</h5>
        <p class="section-content">
          This shows what region of the map that the layer uses. A layer can use the whole world or 
          a small village. Zooming into the project’s region will exclude all the data points of the 
          layer outside of the region. So, an analyst can focus purely on the data points zoomed into 
          the region of the map being analyzed.
        </p>
        <p class="section-content">
          For example, a project is focused on Washington, DC. A layer applied corresponds to showing 
          only schools. Clicking on the layer’s zoom function will show the analyst only the schools 
          within and nearby Washington, DC.
        </p>
        <p class="section-content">
          <span class="tip">Tip: </span>If the map shows the whole world after clicking the Zoom option, 
          then simply zoom into the regional focus of the project and notice the effect.
        </p>
      </div>

      <div id="map-layer-info" class="mapping">
        <h5 class="section-title margin-top-20">More Information</h5>
        <p class="section-content">
          An analyst can view more information regarding the layer created by clicking on the Info icon 
          (i.e. "i" symbol).
        </p>
      </div>

      <div id="map-remove-layer" class="mapping">
        <h5 class="section-title margin-top-20">Remove Layer</h5>
        <p class="section-content">
          To remove a layer from the map (and Map Chart), within the Data subview (of all layers) follow these steps:
        </p>
        <ol>
          <li class="section-content">Click on the arrow right button of layer desired, </li>
          <li class="section-content">See Layer Options dialog display,</li>
          <li class="section-content">Click on Remove.</li>
        </ol>
      </div>

      <div id="map-legend" class="mapping">
        <h3 class="section-title">Legend</h3>
        <p class="section-content">
          A legend is provided for the map when layers are applied. There will be symbols on the map 
          and these symbols have its explanations in the legend. In addition, ranges can also be explained 
          in a legend. Legends are auto-created by our map analyst according to industry standards.
        </p>
      </div>

      <div id="map-delete-layer" class="mapping">
        <h3 class="section-title">Delete Layers</h3>
        <p class="section-content">
          A Delete Layers button is display on the map as a garbage bin icon. Click on this button and 
          save to delete all layers on the map.
        </p>
      </div>

      <div id="map-geo-filters" class="mapping">
        <h2 class="section-title margin-top-30">Geo Filters</h2>
        <p class="section-content">
          Within the Map view of a Stream project, the data streamed or mapped points can be limited by 
          the drawing of a box or polygon (filter) on the map. In addition, there is a general data filter 
          with a tooltip "Filter Data" to add further keyword searches in finding specific results on the map.
        </p>
      </div>

      <div id="map-data-filter" class="mapping">
        <h3 class="section-title">Data Filter</h3>
        <p class="section-content">
          The Map view must be maximized or in full screen mode to see this Data Filter (i.e. represented 
          with a funnel icon). This Data Filter is only applicable to the static data layers (i.e. mapped points).
        </p>
        <p class="section-content">
          <span class="tip">Tip: </span>
            In a Stream project, turn off social media streaming on the map (i.e. bird’s foot icon) to see 
            the filtering of mapped points clearly.
        </p>
      </div>

      <div id="map-use-data-filter" class="mapping">
        <h4 class="section-title margin-top-20">Utilizing a data filter</h4>
        <h5 id="map-data-filter-prereq" class="section-title">Prerequisite</h5>
        <p class="section-content">
          A data layer needs to be added prior to filtering data further on a map by keyword(s). Each data 
          layer allows you to filter among the individual data points using preset filters provided. Multiple 
          filters can be used at once. If no data filters display within this Filter Data dialog, then the data 
          layer added does not have any preset data filters.
        </p>
      </div>

      <div id="map-use-filter-steps" class="mapping">
        <h5 class="section-title">Steps</h5>
        <ol>
          <li class="section-content">Within the map (maximized or full screen), click on the Filter Data button 
            located in the bottom right corner of the map and see the Filter Data dialog display.</li>
          <li class="section-content">Notice that options to further filter data is available after adding of 
            layers with preset data filters.</li>
          <li class="section-content">
            Enter a keyword in the Keyword Search within this dialog or expand and choose one of the listed keywords.
            <ol>
              <li class="section-content subpoint-lowercase-alpha">To activate a filter, click on the plus icon (+) 
                and ensure the button is glowing in a blue background with white plus sign.</li>
              <li class="section-content subpoint-lowercase-alpha">To deactivate a filter, click on the plus icon (+) 
                and ensure the button has a white background with blue plus sign.</li>
            </ol>
          </li>
          <li class="section-content">See the map results update with added data filter.</li>
        </ol>
      </div>

      <div id="map-shape-filter" class="mapping">
        <h3 class="section-title">Shape Filter</h3>
        <p class="section-content">
          Drawing a shape on the map will filter the data results from within the shape drawn. Any data 
          outside of the shape will be excluded from the search results. Multiple shapes can be drawn on 
          the same map and results will include all data within those shapes.
        </p>
      </div>

      <div id="map-cancel-shape" class="mapping">
        <h4 class="section-title margin-top-20">Cancel drawing shape</h4>
        <p class="section-content">
          If one decides after initiating the drawing of a shape to cancel the drawing, then one would 
          click on the "Cancel" option displayed next to the shape.
        </p>
      </div>

      <div id="map-polygon" class="mapping">
        <h4 class="section-title">Polygon</h4>
        <h5 id="map-draw-polygon" class="section-title">To draw a polygon</h5>
        <ol>
          <li class="section-content">Within the map, click on the polygon icon located on the right side 
            of the map.</li>
          <li class="section-content">Next, click on a boundary point where the polygon drawing will begin 
            on the map.</li>
          <li class="section-content">Make the next mouse clicks in the shape of a polygon around the desired 
            region.</li>
        </ol>
        <p class="section-content">
          <span class="note">
            Note: A <span class="bold">minimum of three boundary points </span> are required to draw a polygon. 
            This has been tested up to fifty (50) points for one polygon. The last boundary point to be made on 
            the map will display a message advising analyst to click first boundary point to close shape and 
            activate filtering.
          </span>
        </p>
        <h5 id="map-delete-last-point" class="section-title">Delete last point</h5>
        <p class="section-content">
          While drawing the polygon if a boundary point was accidentally drawn, then click on the "Delete
          last point" option next to the polygon shape icon.
        </p>
      </div>

      <div id="map-box" class="mapping">
        <h4 class="section-title">Box</h4>
        <h5 id="map-draw-box" class="section-title">To draw a box</h5>
        <ol>
          <li class="section-content">Within the map, click on the box (square) icon located on the right side 
            of the map.</li>
          <li class="section-content">Next, click on a boundary point where the rectangle drawing will begin on 
            the map and drag the mouse to where the opposite corner of the rectangle will be drawn.</li>
          <li class="section-content">Release the mouse to finish drawing the rectangle around the desired 
            region and the filtering will automatically begin.</li>
        </ol>
      </div>

      <div id="map-streamed-data-filter" class="mapping">
        <h3 class="section-title">Streamed Data Filter - On/Off</h3>
        <p class="section-content">
          There is an 'streamed data on/off' option on the map of a Stream project located on the right side 
          of the map. This option is usually halfway between the top and bottom of the map. The icon 
          representing this option looks like a bird’s foot facing right. This option shows certain streamed 
          data (i.e. tweets with geolocation) on the map. When this option is highlighted in blue, then this 
          option is turned on and tweets will appear. When this option is white and gray, then this option is 
          off and tweets will not be displayed on the map.
        </p>
      </div>

      <div id="heatmap-or-point" class="mapping">
        <h2 class="section-title">Heatmap vs. Point</h2>
        <p class="section-content">
          The heatmap or point feature is applicable to the data layers or the stream data (if using a 
          Stream project).
        </p>
        <p class="section-content">
          <span class="bold">Heatmap </span>provides a map view based on the density of data. The more 
          dense a location is with data points or tweets, the closer the color shows in representation 
          of hot (i.e. red). The less dense a location is with data points or tweets, the closer the color 
          shows in representation of cold (i.e. blue).
        </p>        
        <p class="section-content">
          <span class="bold">Point</span> (or Data Point) provides a map view with simply points plotted 
          on the map. The more points or tweets are located in a particular area, the greater the size 
          of the overall plotted points or streamed tweets on the map.
        </p>
      </div>

      <div id="map-upload-data" class="mapping">
        <h2 class="section-title">Upload Data</h2>
        <p class="section-content">
          The ability exists for an analyst to upload data into the application. There are two file formats 
          acceptable for uploading data into the application: 1) shapefile and 2) CSV.<br/>
          <span class="note">Note: A CSV is a comma-separated values file, i.e. plain text values 
          separated by commas.</span>
        </p>
      </div>

      <div id="map-upload-limits" class="mapping">
        <h3 class="section-title">Upload Limitations</h3>
        <p class="section-content">IMPORTANT: File size limit is 20 MB.</p>
      </div>

      <div id="map-shapefile-reqs" class="mapping">
        <h3 class="section-title">Shapefile Requirements</h3>
        <p class="section-content">The zipped Shapefile MUST contain the minimum following files:</p>
        <ol>
          <li class="section-content">DBF</li>
          <li class="section-content">PRJ</li>
          <li class="section-content">SHP</li>
          <li class="section-content">SHX</li>
        </ol>
      </div>

      <div id="map-upload-from-file" class="mapping">
        <h3 class="section-title">How to upload data from a file?</h3>
        <h4 id="map-upload-steps" class="section-title">Steps</h4>
        <ol>
          <li class="section-content">In the Map view, click on the Layers icon (i.e. 3 stacked sheets).</li>
          <li class="section-content">See Add Data Layer dialog display.</li>
          <li class="section-content">Select User Layers.</li>
          <li class="section-content">Click "Add Layer" and see File Upload dialog displays.</li>
          <li class="section-content">Drag &amp; Drop or upload CSV, KML, or zipped Shapefile.</li>
          <li class="section-content">See "Upload Data" dialog displays with filename displayed near top of 
            dialog.</li>
          <li class="section-content">Add or update the following:
            <ol>
              <li class="section-content subpoint-lowercase-alpha">
                Layer Name
                <ol>
                  <li class="section-content">Enter text.</li>
                </ol>
              </li>
              <li class="section-content subpoint-lowercase-alpha">
                Layer Description
                <ol>
                  <li class="section-content">Enter text.</li>
                </ol>
              </li>
              <li class="section-content subpoint-lowercase-alpha">
                Layer Style
                <ol>
                  <li class="section-content">Select fill color.</li>
                  <li class="section-content">Select size: minimum is 2, maximum is 20, and recommendation 
                    is 5.</li>
                </ol>
              </li>
              <li class="section-content subpoint-lowercase-alpha">
                Layer Permissions
                <ol>
                  <li class="section-content">Select Private (current user only) or Public (any user with
                    this project shared can use).</li>
                </ol>
              </li>
            </ol>
          </li>
          <li class="section-content">Click "Upload".</li>
          <li class="section-content">See Upload progress bar.</li>
          <li class="section-content">Once upload completes, a file upload completed message will display 
            and map view will regain focus.</li>
          <li class="section-content">In the Map view, click on the Layers icon (i.e. 3 stacked sheets).</li>
          <li class="section-content">See Add Data Layer dialog display and select User Layers.</li>
          <li class="section-content">See and select the new uploaded data layer listed by clicking on the 
            Add Layer icon (i.e. plus sign).
            <ol>
              <li class="section-content subpoint-lowercase-alpha">When the plus sign is white with blue 
                background, then layer is on (i.e. activated).</li>
              <li class="section-content subpoint-lowercase-alpha">When the plus sign is blue with white 
                background, then layer is off (i.e. deactivated).</li>
            </ol>
          </li>
          <li class="section-content">See the layer applied to the map and search results.</li>
        </ol>
      </div>
      <!--end section: Application Map-->

      <!--Section: Application Bug Reporting-->
      <div id="reporting" class="reporting">
        <h1 class="section-title">Bug Reporting &amp; Providing Feedback</h1>
        <p class="section-content">
          To report any bugs found or provide any feedback to the product development team, please click 
          on the menu option to report bug. A form will display requesting for details specific to the 
          bug or feedback along with any files to upload. Notice the text field for collecting bug 
          information or feedback is required to submit this report.
        </p>
        <h2 id="reporting-steps" class="section-title">Steps</h2>
        <ol>
          <li class="section-content">Under the menu, click on "Report Bug" option.</li>
          <li class="section-content">See a form display asking for details on the bug or feedback 
            along with any files to upload with report.</li>
          <li class="section-content">Enter the bug information or feedback and upload any related files.</li>
          <li class="section-content">Click “Send” button to submit form.</li>
        </ol>
      </div>

      <div id="bug-example" class="reporting">
        <h2 class="section-title">Example - Bug</h2>
        <h3 id="bug-found" class="section-title">Bug Found</h3>
        <p class="section-content">Map project description by default is null.</p>
        <h3 id="bug-description" class="section-title">Bug Description</h3>
        <p class="section-content">When I create a new Map project, I can only enter the project title. 
          After entering the title and selecting the project type as "Map", I save the new project. The 
          new project now displays in the "Manage Projects" view. However, my new project has a "null" 
          description that is added by default. There was no text field to enter a project description 
          during the creation of a new Map project. Either this description field should be available 
          on the "Create Project" form displayed or the description by default should state "new map 
          project".
        </p>
      </div>
      <div id="feedback-example" class="reporting">
        <h2 class="section-title">Example - Feedback</h2>
        <h3 id="feedback-suggestion" class="section-title">Feedback Suggested</h3>
        <p class="section-content">Update the value within text field from "Project Title" to "Enter 
          project title here...".
        </p>
        <h3 id="feedback-description" class="section-title">Feedback Description</h3>
        <p class="section-content">
          The wording can be confusing to users since "Project Title" is stated twice on the form. 
          This can be interpreted also as a mistake on the developer's part. As such, a user might 
          not know whether to enter text in this field since there's nothing alerting the user that 
          text can be entered into this field. Please update the "Project Title" in the text field 
          to state "Enter project title here...". In addition, the text value does not disappear 
          when the user presses the backspace or delete button. This adds confusion because then 
          the user may think this is not a text field or perhaps it's read only. Update this text 
          field to allow key recognition of Backspace and Delete button. Once these keys are pressed 
          within the text field, the text value will be removed leaving a blank value in this field 
          until user enters text. When user enters no text and leaves this field empty, then the 
          default value "Enter project title here..." will reappear.
        </p>
      </div>
      <!--end section: Application Bug Reporting-->

      <!--Section: Application Sources Overview-->
      <div id="sources" class="sources">
        <h1 class="section-title">Sources Overview</h1>
        <p class="section-content">
          A source is a credible data storage location (online or offline). An example of an online 
          source is Twitter. All live media streaming connect to an online source. An offline source 
          is a database hosted by a company and accessed only internally for further security purposes. 
          The Map view maximizes the benefits of an offline source. An example of an offline source is 
          Courage’s "clean" geolocation database. By "clean", this is data stored in the database that 
          has been screened, examined, and validated before being stored.
        </p>
        <p class="section-content">
          See the subsection “List of Online Sources” under section "Source Filter" for the list of 
          online sources currently used.
        </p>
      </div>
      <!--end section: Application Sources Overview-->

      <!--Section: Application Favorites and Alerts-->
      <div id="favorites" class="favorites">
        <h1 class="section-title">Favorites &amp; Alerts</h1>
        <p class="section-content">
          What if you wanted to save different search terms, especially if you have a lot of key search 
          terms that you switch among in analyzing data? Well, you're in luck! In our application we 
          call this capability "saving favorites". You can save a Favorite search term or search phrase 
          within a Stream project and use whenever you wish until you delete it.
        </p>
      </div>

      <div id="access-favorites" class="favorites">
        <h2 class="section-title">How to access?</h2>
        <ol>
          <li class="section-content">Open a Stream project.</li>
          <li class="section-content">View the main project view with the Feed, Analysis, Search Bar, and Map.</li>
          <li class="section-content">Click on the Favorite icon (i.e. star) and see Favorites dialog display.</li>
        </ol>
      </div>

      <div id="adding-favorite" class="favorites">
        <h2 class="section-title">Adding a Favorite</h2>
        <ol>
          <li class="section-content">Access the Favorites dialog.</li>
          <li class="section-content">Click on “Add New Favorite”.</li>
          <li class="section-content">See a new blank Favorite row displays.</li>
          <li class="section-content">Enter Favorite title (required) and search phrase (required).
            <ol>
              <li class="section-content subpoint-lowercase-alpha">
                Overwrite any text next to the star under title for the new title.
              </li>
              <li class="section-content subpoint-lowercase-alpha">
                Overwrite any text next to the magnifying glass under search phrase for the 
                new search phrase to be saved.
              </li>
            </ol>
          </li>
          <li class="section-content">Click “Save”.</li>
        </ol>
        <p class="section-content">
          <span class="note">Note: New favorites saved are, by default, NOT enabled with the alert feature.</span>
        </p>
      </div>

      <div id="fav-by-social-media" class="favorites">
        <h3 class="section-title">By social media account</h3>
        <ol>
          <li class="section-content">In a Stream project, click on a username (e.g. @supergeek) in a tweet 
            within the Feed.</li>
          <li class="section-content">Click on the Favorite icon.</li>
          <li class="section-content">Click on "Add New Favorite".</li>
          <li class="section-content">See a new Favorite row display with Search Phrase containing the username.</li>
          <li class="section-content">Enter Favorite title.</li>
          <li class="section-content">Click "Save".</li>
        </ol>
      </div>

      <div id="fav-by-keyword" class="favorites">
        <h3 class="section-title">By keyword combination</h3>
        <ol>
          <li class="section-content">In a Stream project, enter a key term or phrase in the Search Bar.</li>
          <li class="section-content">Optionally, press Enter and ensure satisfaction with the results.</li>
          <li class="section-content">Click on the Favorite icon.</li>
          <li class="section-content">Click on "Add New Favorite".</li>
          <li class="section-content">See a new Favorite row display with Search Phrase containing the search 
            keywords.
          </li>
          <li class="section-content">Enter Favorite title.</li>
          <li class="section-content">Click "Save".</li>
        </ol>
      </div>

      <div id="using-favorite" class="favorites">
        <h2 class="section-title">Using a Favorite</h2>
        <ol>
          <li class="section-content">Access the Favorites dialog.</li>
          <li class="section-content">Click on either the Favorite’s title or search phrase.</li>
          <li class="section-content">See the Favorites dialog disappear and the main project view 
            updated with results corresponding to the Favorite selected.</li>
        </ol>
        <p class="section-content">
          <span class="tip">Tip: </span>
          The Favorite’s search phrase will also populate the Search Bar related to the updated results.
        </p>
      </div>

      <div id="editing-favorite" class="favorites">
        <h2 class="section-title">Editing a Favorite</h2>
        <ol>
          <li class="section-content">Access the Favorites dialog.</li>
          <li class="section-content">Click on the Edit icon (i.e. pencil) of desired Favorite item to edit.</li>
          <li class="section-content">Edit Favorite title and/or search phrase.</li>
          <li class="section-content">Click "Save".</li>
        </ol>
      </div>

      <div id="deleting-favorite" class="favorites">
        <h2 class="section-title">Deleting a Favorite</h2>
        <ol>
          <li class="section-content">Access the Favorites dialog.</li>
          <li class="section-content">Click on the Remove icon (i.e. an "X" mark) of desired Favorite item 
            to remove.</li>
          <li class="section-content">Click "Save".</li>
        </ol>
      </div>

      <div id="adding-alert" class="favorites">
        <h2 class="section-title">Adding an Alert</h2>
        <p class="section-content">
          Alerts are notifications displayed to the analyst from the Header Bar upon login. These 
          notifications are displayed within the Notifications dialog. An alert is dependent and 
          attached to a favorite.
        </p>
        <p class="section-content">
          By default, new Favorites are saved with alerts NOT enabled. This is symbolized with 
          the Notification icon having a strikethrough. When strikethrough is not displayed on 
          the notification icon, then the Favorite item has alert feature enabled and the application 
          will log notifications to alert analyst that new tweets have been found according to the 
          Favorite item saved.
        </p>
        <ol>
          <li class="section-content">Access the Favorites dialog.</li>
          <li class="section-content">Notice each Favorite item has a Notification icon (i.e. bell) next to it.</li>
          <li class="section-content">Click on the Notification icon and ensure no strikethrough appears on icon 
            to enable.</li>
        </ol>
      </div>

      <div id="access-notifications" class="favorites">
        <h3 class="section-title">How to access notifications?</h3>
        <ol>
          <li class="section-content">After logging in, see the Notifications icon (i.e. bell) on the far right 
            side of the Header Bar.</li>
          <li class="section-content">Click on the Notifications icon and see Notifications dialog display 
            with notifications.</li>
          <li class="section-content">If no notifications display, then no alerts were triggered.</li>
          <li class="section-content">When a notification displays, the notification will contain the 
            following:
            <ol>
              <li class="section-content subpoint-lowercase-alpha">Number of matches (tweets with favorite 
                search phrase)</li>
              <li class="section-content subpoint-lowercase-alpha">Start Date of the tweet watch.</li>
              <li class="section-content subpoint-lowercase-alpha">Option to view the matching results.</li>
              <li class="section-content subpoint-lowercase-alpha">Option to dismiss the notification.</li>
            </ol>
          </li>
        </ol>
      </div>

      <div id="viewing-alert" class="favorites">
        <h3 class="section-title">View Results of Alert</h3>
        <ol>
          <li class="section-content">Access the Notifications dialog.</li>
          <li class="section-content">Click "View" on the desired notification.</li>
          <li class="section-content">See the main project view update with the search results.</li>
        </ol>
        <p class="section-content">
          <span class="note">
            Note: When the notification is viewed, it is removed from the Notifications dialog after viewing.
          </span>
        </p>
      </div>

      <div id="dismissing-alert" class="favorites">
        <h3 class="section-title">Dismiss Alert</h3>
        <ol>
          <li class="section-content">Access the Notifications dialog.</li>
          <li class="section-content">Click "Dismiss" on the desired notification.</li>
          <li class="section-content">See the notification is removed from the Notifications dialog.</li>
        </ol>
      </div>

      <div id="removing-alert" class="favorites">
        <h3 class="section-title">Removing an Alert</h3>
        <ol>
          <li class="section-content">Access the Favorites dialog.</li>
          <li class="section-content">Notice each Favorite item has a Notification icon (i.e. bell) next to it.</li>
          <li class="section-content">To disable alert, click on Notification icon and ensure icon displays 
            with a strikethrough.</li>
        </ol>
      </div>
      <!--end section: Application Favorites and Alerts-->

      <!--Section: Adobe Flash Plugin-->
      <div id="plugins" class="plugins">
        <h1 class="section-title">Adobe Flash Plugin</h1>
        <p class="section-content">
          The Adobe Flash plugin is REQUIRED to run the Map project. Without this, a black page will display. 
          Some browsers might be nice enough to display an error detected with the use of Adobe Flash. 
          You can turn certain plugins on and off at any time.
        </p>
      </div>

      <div id="chrome-plugin" class="plugins">
        <h2 class="section-title">Google Chrome</h2>
        <ol>
          <li class="section-content">On your computer, open Chrome.</li>
          <li class="section-content">In the address bar at the top, type 
            <span class="green">chrome://plugins/</span> and press 
            <span class="bold">Enter</span>.
          </li>
          <li class="section-content">Next to the plugin you’d like to use or turn off, click 
            <span class="bold">Enable</span> or <span class="bold">Disable</span>.</li>
        </ol>
        <p class="section-content">
          <span class="note">
            Note: When you visit a page with a plugin that’s turned off, you’ll see a message 
            that says the plugin has been disabled instead of seeing the video or audio that’s on the page.
          </span>
        </p>
      </div>

      <div id="firefox-plugin" class="plugins">
        <h2 class="section-title">Mozilla Firefox</h2>
        <ol>
          <li class="section-content">On your computer, open Firefox.</li>
          <li class="section-content">Within the menu at the top right corner, select Add-ons and go to Plugins.</li>
          <li class="section-content">See list of plugins and set Shockwave Flash to 
            <span class="bold">Ask to Activate</span>.
          </li>
        </ol>
        <p class="section-content">
          <span class="note">
            Note: The plugin will stay disabled per default but can be activated on a per-site basis.
          </span>
        </p>
      </div>
      <!--end section: Application Favorites and Alerts-->

      <!--Section: Additional Help-->
      <div id="help" class="help">
        <h1 class="section-title">Need Additional Help?</h1>
        <p class="section-content">
          Please contact an application expert at Courage Services and we’ll gladly provide assistance, 
          answer any questions, and listen to any feedback. We can also be reach via email,
          <a href="mailto:mark.polyak@courageservices.com?Subject=Need%20Additional%20Help" target="_top"> 
            mark.polyak@courageservices.com
          </a>.
        </p>
      </div>
      <!--end section: Additional Help-->

    </div><!--end: SECTIONS-->

  </div><!--end row-->
</div><!--end container-->

</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){

      /**ONLY DISPLAY MENU WHEN MOUSEOVER MENU SECTION OR PAGE SECTION!**/
            /*Show Menu - By Menu Item Only*/
      $("#app-overview").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".vernacular").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "BLOCK");
      });
      $(".users").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "BLOCK");
        $("li.vernacular").css("display", "none");
      });
      $(".projects").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "BLOCK");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".filters").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "BLOCK");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".filters").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "BLOCK");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".feed").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "BLOCK");        
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".analytics").mouseover(function(){
        $("li.analytics").css("display", "BLOCK");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".mapping").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "BLOCK");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".reporting").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "BLOCK");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".favorites").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "BLOCK");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "none");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });
      $(".plugins").mouseover(function(){
        $("li.analytics").css("display", "none");
        $("li.favorites").css("display", "none");
        $("li.feed").css("display", "none");        
        $("li.filters").css("display", "none");
        $("li.mapping").css("display", "none");
        $("li.plugins").css("display", "BLOCK");
        $("li.projects").css("display", "none");
        $("li.reporting").css("display", "none");
        $("li.users").css("display", "none");
        $("li.vernacular").css("display", "none");
      });

    });
  </script>
</html>                                   
