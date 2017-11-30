<div class="row">
	<div class="span4">
        <form role="form" action="/info/FlightController/submit" method="post">
            {fmodel} 
            <br />
            {fairline}
            <br />
            {fto}
            <br />
            {ftimeToBoard}
            <br />
            {fterminal}
            <br />
            {fcommunity}
            <br />
            {ftimeToArrive}
            {zsubmit}
        </form>
        <a href="/info/FlightController"><input type="button" value="Cancel"/></a>
        <a href="/info/FlightController/delete/{key}"><input type="button" value="Delete"/></a>
	</div>
    <br/>
</div>