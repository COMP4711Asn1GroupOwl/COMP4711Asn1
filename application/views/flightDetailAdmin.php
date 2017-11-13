<div class="row">
	<div class="span4">
        <form role="form" action="/info/flight/submit" method="post">
            {fmodel} 
            <br />
            {fairline}
            <br />
            {fto}
            <br />
            {fterminal}
            <br />
            {fcommunity}
            {zsubmit}
        </form>
        <a href="/info/flight/cancel"><input type="button" value="Cancel"/></a>
        <a href="/info/flight/delete"><input type="button" value="Delete"/></a>
	</div>
    <br/>
</div>