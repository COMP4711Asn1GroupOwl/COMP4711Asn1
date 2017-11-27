<div class="row">
	<div>
        <form role="form" action="/info/fleet/submit" method="post">
            {fmodel}
            {fmanufacturer}
            {fseats}
            {freach}
            {fcruise}
            {ftakeoff}
            {fhourly}
            {zsubmit}
        </form>
        <a href="/info/Fleet"><input type="button" value="Cancel"/></a>
        <a href="/info/Fleet/delete/{fmodel}"><input type="button" value="Delete"/></a>
    </div>
    <br/>
</div>