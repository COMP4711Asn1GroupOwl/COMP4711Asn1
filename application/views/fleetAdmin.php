<div class="row">
	<div>
        <form role="form" action="/info/FleetController/submit" method="post">
            {fmodel}
            {fmanufacturer}
            {fseats}
            {freach}
            {fcruise}
            {ftakeoff}
            {fhourly}
            {zsubmit}
        </form>
        <a href="/info/FleetController"><input type="button" value="Cancel"/></a>
        <a href="/info/FleetController/delete/{key}"><input type="button" value="Delete"/></a>
    </div>
    <br/>
</div>