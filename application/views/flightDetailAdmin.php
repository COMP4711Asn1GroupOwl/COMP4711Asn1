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
        <a href="/info/flight/cancel"><input type="button" value="Cancel"/></a>
        <a href="/info/flight/delete"><input type="button" value="Delete"/></a>
	</div>
    <br/>
</div>