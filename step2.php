<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="css/screen.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
  <h1>Your City, <?php echo $_POST["cityName"]; ?></h1>
  <div class="info">Step1 &gt; <strong>Step 2 </strong>&gt; Step 3</div>
  <form>
    <h2>Demographics</h2>
    <p>With a population of X, your city covers Y sq. miles, with a density of Z</p>
  <table>
    <tbody>
      <tr>
        <th scope="row">Population</th>
        <td>X</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">Area (in sq. miles not including water)</th>
        <td>Y</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">Density</th>
        <td>Z</td>
        <td><label for="range3">Range:</label>
          <input name="range3" type="range" id="range3" max="40000" min="2000" value="5500"></td>
      </tr>
    </tbody>
  </table>
  <h3>Races:</h3>
  <table>
    <tbody>
      <tr>
        <th scope="col">Race Name</th>
        <th scope="col">Population</th>
        <th scope="col">Percent</th>
        <th scope="col">Affluence</th>
      </tr>
      <tr>
        <td>Race01</td>
        <td>X</td>
        <td>100%</td>
        <td>
          <select name="raceAffluence0" id="raceAffluence0">
            <option value="5">Dominant</option>
            <option value="4">Affluent</option>
            <option value="3" selected="selected">Average</option>
            <option value="2">Low-class</option>
            <option value="1">Poor</option>
          </select></td>
      </tr>
      <tr>
        <td>Race02</td>
        <td>X</td>
        <td>100%</td>
        <td>
          <select name="raceAffluence0" id="raceAffluence0">
            <option value="5">Dominant</option>
            <option value="4">Affluent</option>
            <option value="3" selected="selected">Average</option>
            <option value="2">Low-class</option>
            <option value="1">Poor</option>
          </select></td>
      </tr>
    </tbody>
  </table>
  <h3>Possible Districts (Uncheck any to remove them):</h3>
<ul>
	<li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Civic</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Ruined Civic</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Racial Neighborhood (RaceX)</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Embassy District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Finance District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Fine Shops</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Lord's Keep</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Vacant Lord's Keep</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Magic District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Noble Estates</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Park District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">University</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Wealthy Residential</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Avg. Residential</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Garrison</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Guildhall District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Former Guildhall District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Marketplace</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Professionals</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Shops</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Temple District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Adventurer's Quarter</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Angler's Wharf</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Apartment Homes</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Caravan District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Ghetto</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Racial Ghetto</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Inn District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Red Light District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Shantytown</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Slave Quarter</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Slum</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Industrial District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Undercity</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Warehouse District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Waterfront District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Remnent Neighborhood</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Immigrant Enclave</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Necropolis</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Boat Town</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Coliseum/Arena</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Prison District</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Docks</label></li>
    <li><label><input type="checkbox" name="districts" value="civic" checked="checked" id="districts_0">Rural</label></li>
</ul>
  <h2>Rough City Topography</h2>
  <table class="map">
    <tbody class="map">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <h2>City Timeline</h2>
  <table>
    <tbody>
      <tr>
        <th scope="row">Years 0-25</th>
        <td>Great Years</td>
        <td>Foundation</td>
        <td>Growth (X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 25-50</th>
        <td>Good Years</td>
        <td>&nbsp;</td>
        <td>Growth (X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 51-75</th>
        <td>OK Years</td>
        <td>&nbsp;</td>
        <td>Growth (X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 76-100</th>
        <td>Bad Years</td>
        <td>&nbsp;</td>
        <td>Growth (0 districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 101-125</th>
        <td>Terrible Years</td>
        <td>&nbsp;</td>
        <td>Growth (-X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 126-150</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Growth (X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 175</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Growth (-X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 200</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Growth (X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 225</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Growth (-X districts)</td>
        <td>Total Districts</td>
      </tr>
      <tr>
        <th scope="row">Years 250</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Growth (X districts)</td>
        <td>Total Districts</td>
      </tr>
    </tbody>
  </table>
  <h2>Economy</h2>
  <p>Total Assets:X gp<br>
    GP Limit: X gp<br />
  Crime Rate:</p>
  <p>Economic Focus:</p>
  <div class="span-4 prepend-2">
    <h4>Lowest Class/Beggars</h4>
    <p>Population %:<br>
      Population #:<br>
    Racial Breakdown:<br>
    Notes:
    </p>
  </div>
  <div class="span-4">
    <h4>Lower Class/Peasantry</h4>
    <p>Population %:<br>
      Population #:<br>
    Racial Breakdown:<br>
    Notes:
    </p>
  </div>
  <div class="span-4">
    <h4>Middle Class/Merchantry</h4>
    <p>Population %:<br>
      Population #:<br>
    Racial Breakdown:<br>
    Notes:
    </p>
  </div>
  <div class="span-4">
    <h4>Upper Class/Nobility</h4>
    <p>Population %:<br>
      Population #:<br>
    Racial Breakdown:<br>
    Notes:
    </p>
  </div>
  <div class="span-4 append-2 last">
    <h4>Highest Class/Royalty</h4>
    <p>Population %:<br>
      Population #:<br>
    Racial Breakdown:<br>
    Professions/Classes:
    </p>
  </div>
  <h3 class="clear">Guilds</h3>
  <ul>
    <li>Alchemists</li>
    <li>Magic</li>
    <li>Smithing</li>
    <li>Weavers</li>
    </ul>
  <h2>Politics</h2>
  <p>Government:</p>
  <p>Main Governing Body:</p>
  <p>Additional Power Centers:</p>
  <ul>
        <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">X Guild</label></li>
        <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">X Guild</label></li>
        <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">
        Y Racial</label></li>
        <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">
        Y Racial</label></li>
      <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">
        Z Temple
      </label></li>
        <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">
        Z Temple</label></li>
        <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">
        Criminal Organization</label></li>
        <li><label><input type="checkbox" name="powerCenter" value="guild" checked="checked" id="powerCenter_0">
        Noble Family</label></li>
  </ul>
  <p>Law Rank:<br>
    Legal Effects:
    <br>
  </p>
  
  </form>
</div>
</body>
</html>