<div class="row-fluid">
    <a class="quick-button metro blue span4" href="/info/FleetController/">
        <i class="icon-plane"></i>
        <p class="centerText">Number of Airplanes</p>
        <span class="badge fontSize">{airplaneCount}</span>
    </a>

    <a class="quick-button metro green span4" href="/info/FlightController/">
        <i class="icon-fighter-jet"></i>
        <p class="centerText">Number of Airlines</p>
        <span class="badge fontSize">{airlineCount}</span>
    </a>

    <a class="quick-button metro red span4" href="/info/booking/">
        <i class="icon-briefcase"></i>
        <p class="centerText">Book Flight</p>
    </a>
</div>
<div class="box-content tablePadding">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Base Airport</th>
                <th>Destination 1</th>
                <th>Destination 2</th>
                <th>Destination 3</th>
            </tr>
        </thead> 
        <tbody>
            <tr>
                <td>{baseAirport}</td>
                <td>{dest1Airport}</td>
                <td>{dest2Airport}</td>
                <td>{dest3Airport}</td>
            <tr/>
        </tbody>
    </table>
</div>
