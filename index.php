<?php
/**
 * Created by PhpStorm.
 * User: iann0036
 * Date: 4/05/14
 * Time: 8:48 PM
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">

    <title>CAP Protocol</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CAP Protocol</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Create Alert</a></li>
                <li><a href="#current">Current Alerts</a></li>
                <li><a href="#current">All Alerts</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <div class="starter-template">
        <h1>Create Event</h1>
        <br />
        <form>
            <p><label>Identifier:</label>&nbsp;<input type="text" /></p>
            <p><label>Sender:</label>&nbsp;<input type="text" /></p>
            <p><label>Sent:</label>&nbsp;<input type="text" value="2014-05-04T12:00:00+10:00" /></p>
            <p><label>Status:</label>&nbsp;<select>
                    <option>Actual</option>
                    <option>Exercise</option>
                    <option>System</option>
                    <option>Test</option>
                    <option>Draft</option>
                </select></p>
            <p><label>Message Type:</label>&nbsp;<select>
                    <option>Alert</option>
                    <option>Update</option>
                    <option>Cancel</option>
                    <option>Ack</option>
                    <option>Error</option>
                </select></p>
            <p><label>Source:</label>&nbsp;<input type="text" /></p>
            <p><label>Scope:</label>&nbsp;<select>
                    <option>Public</option>
                    <option>Restricted</option>
                    <option>Private</option>
                </select></p>
            <p><label>Restriction:</label>&nbsp;<input type="text" /></p>
            <p><label>Addresses:</label>&nbsp;<input type="text" /></p>
            <p><label>Code*:</label>&nbsp;<select>
                    <option>urn:oasis:names:tc:emergency:cap:1.2:profile:CAP-AU:1.0</option>
                </select></p>
            <p><label>Note:</label>&nbsp;<input type="text" /></p>
            <p><label>References:</label>&nbsp;<input type="text" /></p>
            <p><label>Incidents:</label>&nbsp;<input type="text" /></p>
            <hr>
            <h3>Info</h3>
            <p><label>Language:</label>&nbsp;<select>
                    <option>en-US</option>
                </select></p>
            <p>
                <label>Category:</label>&nbsp;
                <input type="checkbox" value="Geo" />Geo<br />
                <input type="checkbox" value="Met" />Met<br />
                <input type="checkbox" value="Safety" />Safety<br />
                <input type="checkbox" value="Security" />Security<br />
                <input type="checkbox" value="Rescue" />Rescue<br />
                <input type="checkbox" value="Fire" />Fire<br />
                <input type="checkbox" value="Health" />Health<br />
                <input type="checkbox" value="Env" />Env<br />
                <input type="checkbox" value="Transport" />Transport<br />
                <input type="checkbox" value="Infra" />Infra<br />
                <input type="checkbox" value="CBRNE" />CBRNE<br />
                <input type="checkbox" value="Other" />Other
            </p>
            <p><label>Event:</label>&nbsp;<select>
                    <option>Administration</option>
                    <option>Air Quality</option>
                    <option>Animal Health</option>
                    <option>Animal Disease</option>
                    <option>Animal Feed</option>
                    <option>Animal Pest</option>
                    <option>Animal Quarantine</option>
                    <option>Animal Welfare</option>
                    <option>Aquatic Animal Disease</option>
                    <option>Aquatic Animal Pest</option>
                    <option>Marine Disease</option>
                    <option>Marine Pest</option>
                    <option>Plague</option>
                    <option>Sheep Grazier Warning</option>
                    <option>Animals</option>
                    <option>Animal Attack</option>
                    <option>Dangerous Animal</option>
                    <option>Aviation</option>
                    <option>Aircraft Crash</option>
                    <option>Aircraft Incident</option>
                    <option>Airport Closure</option>
                    <option>Airport Lightening Threat</option>
                    <option>Airport Thunder Threat</option>
                    <option>Airspace Closure</option>
                    <option>Aviation Security</option>
                    <option>Falling Object</option>
                    <option>Notice to Airmen</option>
                    <option>Satellite / Space Re-entry Debris</option>
                    <option>Civil</option>
                    <option>Building Collapse</option>
                    <option>Civil Emergency</option>
                    <option>Demonstration</option>
                    <option>Public Event</option>
                    <option>Volunteer Request</option>
                    <option>Criminal Activity</option>
                    <option>Cyber Crime</option>
                    <option>Dangerous Person</option>
                    <option>Terrorism</option>
                    <option>Fire</option>
                    <option>Bushfire</option>
                    <option>Fire Ban</option>
                    <option>Fire Danger Level</option>
                    <option>Forest Fire</option>
                    <option>Fire Weather</option>
                    <option>Grass Fire</option>
                    <option>Industrial Fire</option>
                    <option>Smoke Alert</option>
                    <option>Structure Fire</option>
                    <option>Total Fire Ban</option>
                    <option>Flood</option>
                    <option>Dam Failure</option>
                    <option>Flash Flood</option>
                    <option>High Water Level</option>
                    <option>King Tide</option>
                    <option>Levee Failure</option>
                    <option>Storm Surge</option>
                    <option>Riverine Flood</option>
                    <option>Geological</option>
                    <option>Avalanche</option>
                    <option>Earthquake</option>
                    <option>Karst Hazard</option>
                    <option>Lahar</option>
                    <option>Landslide</option>
                    <option>Lava Flow</option>
                    <option>Magnetic Storm</option>
                    <option>Meteorite</option>
                    <option>Pyroclastic Flow</option>
                    <option>Pyroclastic Surge</option>
                    <option>Tsunami</option>
                    <option>Volcanic Ash Cloud</option>
                    <option>Volcano</option>
                    <option>Hazardous Materials</option>
                    <option>Asbestos</option>
                    <option>Biological Hazard</option>
                    <option>Chemical Hazard</option>
                    <option>Explosive Hazard</option>
                    <option>Major Pollution</option>
                    <option>Radiological Hazard</option>
                    <option>Toxic Plume</option>
                    <option>Health</option>
                    <option>Ambulance</option>
                    <option>Blood Supply</option>
                    <option>Comminicable Disease</option>
                    <option>Drinking Water</option>
                    <option>Drug Safety</option>
                    <option>Drug Supply</option>
                    <option>Food Safety</option>
                    <option>Food Supply</option>
                    <option>Hospital</option>
                    <option>Human Quarantine</option>
                    <option>Zoonotic Disase</option>
                    <option>Marine</option>
                    <option>Freezing Spray</option>
                    <option>Gale Wind</option>
                    <option>Hurricane Force Wind</option>
                    <option>Iceberg</option>
                    <option>Large Coastal Surf</option>
                    <option>Large Swell Waves</option>
                    <option>Maritime / Marine Security</option>
                    <option>NAutical Incident</option>
                    <option>Oil Spill</option>
                    <option>Squall</option>
                    <option>Storm Force Wind</option>
                    <option>Strong Wind</option>
                    <option>Waterspout</option>
                    <option>Mission Person</option>
                    <option>Missing Vulnerable Person</option>
                    <option>Other Non-Urgent Alerts</option>
                    <option>Other Urgent Alerts</option>
                    <option>Plant Health</option>
                    <option>Plant Disease</option>
                    <option>Plant Pest</option>
                    <option>Plant Quarantine</option>
                    <option>Preparedness Reminders</option>
                    <option>Emergency Preparedness Reminder</option>
                    <option>Product Safety</option>
                    <option>Public Services</option>
                    <option>Facility Closure</option>
                    <option>Facility Lockdown</option>
                    <option>Service or Facility</option>
                    <option>Transit</option>
                    <option>Railway</option>
                    <option>Railway Incident</option>
                    <option>Train / Rail Crash</option>
                    <option>Rescue</option>
                    <option>Distress Beacon</option>
                    <option>Roadway</option>
                    <option>Bridge Closure</option>
                    <option>Bridge Collapse</option>
                    <option>Hazardous Road Conditions</option>
                    <option>Motor Vehicle Accident</option>
                    <option>Roadway Closure</option>
                    <option>Roadway Delay</option>
                    <option>Roadway Incident</option>
                    <option>Roadway Usage Condition</option>
                    <option>Traffic Report</option>
                    <option>Search</option>
                    <option>Over Water Search</option>
                    <option>Over Land Search</option>
                    <option>Air Search</option>
                    <option>Storm</option>
                    <option>Blizzard</option>
                    <option>Dust Storm</option>
                    <option>Hail</option>
                    <option>Rainfall</option>
                    <option>Snowfall</option>
                    <option>Thunderstorm</option>
                    <option>Tornado</option>
                    <option>Tropical Cyclone</option>
                    <option>Weather</option>
                    <option>Temperature</option>
                    <option>Extreme Heat</option>
                    <option>Frost</option>
                    <option>Wind Chill</option>
                    <option>Test Message</option>
                    <option>Utility</option>
                    <option>Cable Service</option>
                    <option>Communications Service</option>
                    <option>Diesel Supply</option>
                    <option>Electricity Supply</option>
                    <option>Heating Oil Supply</option>
                    <option>Internet Service</option>
                    <option>Landline Service</option>
                    <option>Mobile Service</option>
                    <option>Natural Gas Supply</option>
                    <option>Petrol Supply</option>
                    <option>Pipeline Rupture</option>
                    <option>Satellite Service</option>
                    <option>Sewer System</option>
                    <option>Telephone Service</option>
                    <option>Triple Zero</option>
                    <option>Waste Management</option>
                    <option>Water Supply</option>
                    <option>Wind</option>
                    <option>Water Quality</option>
                    <option>Wind Change</option>
                    <option>Blue Green Algae</option>
                </select></p>
            <p>
                <label>Response Type:</label>&nbsp;
                <input type="checkbox" value="Shelter" />Shelter<br />
                <input type="checkbox" value="Evacuate" />Evacuate<br />
                <input type="checkbox" value="Prepare" />Prepare<br />
                <input type="checkbox" value="Execute" />Execute<br />
                <input type="checkbox" value="Avoid" />Avoid<br />
                <input type="checkbox" value="Monitor" />Monitor<br />
                <input type="checkbox" value="Assess" />Assess<br />
                <input type="checkbox" value="AllClear" />All Clear<br />
                <input type="checkbox" value="None" />None
            </p>
            <p><label>Urgency:</label>&nbsp;<select>
                    <option>Immediate</option>
                    <option>Expected</option>
                    <option>Future</option>
                    <option>Past</option>
                    <option>Unknown</option>
                </select></p>
            <p><label>Severity:</label>&nbsp;<select>
                    <option>Extreme</option>
                    <option>Severe</option>
                    <option>Moderate</option>
                    <option>Minor</option>
                    <option>Unknown</option>
                </select></p>
            <p><label>Certainty:</label>&nbsp;<select>
                    <option>Observed</option>
                    <option>Likely</option>
                    <option>Possible</option>
                    <option>Unlikely</option>
                    <option>Unknown</option>
                </select></p>
            <p><label>Audience:</label>&nbsp;<input type="text" /></p>
            <hr>
            <h6>
                Event Code(s)
            </h6>
            <p>Key - Value</p>
            <p><label>Effective:</label>&nbsp;<input type="text" /></p>
            <p><label>Onset:</label>&nbsp;<input type="text" /></p>
            <p><label>Expires:</label>&nbsp;<input type="text" /></p>
            <p><label>Sender Name:</label>&nbsp;<input type="text" /></p>
            <p><label>Headline:</label>&nbsp;<input type="text" /></p>
            <p><label>Description:</label>&nbsp;<input type="text" /></p>
            <p><label>Instruction:</label>&nbsp;<input type="text" /></p>
            <p><label>Web:</label>&nbsp;<input type="text" /></p>
            <p><label>Contact:</label>&nbsp;<input type="text" /></p>
            <hr>
            <h6>
                Parameter(s)
            </h6>
            <p>Key - Value</p>
            <hr>
            <h6>Resource(s)</h6>
            <p><label>Resource Description:</label>&nbsp;<input type="text" /></p>
            <p><label>MIME Type:</label>&nbsp;<input type="text" /></p>
            <p><label>Size:</label>&nbsp;<input type="text" /></p>
            <p><label>URI:</label>&nbsp;<input type="text" /></p>
            <p><label>Dereferenced URI:</label>&nbsp;<input type="text" /></p>
            <p><label>Digest:</label>&nbsp;<input type="text" /></p>
            <hr>
            <h6>
                Area(s)
            </h6>
            <p><label>Area Description*:</label>&nbsp;<input type="text" /></p>
            <p><label>Polygon(s):</label>&nbsp;<input type="text" /></p>
            <p><label>Circle(s):</label>&nbsp;<input type="text" /></p>
            <hr>
            <h6>
                Geocode(s)
            </h6>
            <p>Key - Value</p>
            <p><label>Altitude:</label>&nbsp;<input type="text" /></p>
            <p><label>Ceiling:</label>&nbsp;<input type="text" /></p>
            <p><input type="submit" /></p>
        </form>
        <hr>
        <footer>(c) iann0036</footer>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
