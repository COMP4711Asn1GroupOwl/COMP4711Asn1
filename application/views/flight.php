<div class="row">
	<table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Flight</th>
                <th>Airline</th>
                <th>To</th>
                <th>Time to Board</th>
                <th>Terminal</th>
                <th>Community</th>
                <th>Time to Arrive</th>
            </tr>
        </thead> 
        <tbody>
            {flights}
            <tr>
                <td><a href="/info/FlightController/show/{id}">{id}</a></td>
                <td>{airline}</td>
                <td>{to}</td>
                <td>{timeToBoard}</td>
                <td>{terminal}</td>
                <td>{community}</td>
                <td>{timeToArrive}</td>
            <tr/>
            {/flights}
        </tbody>
    </table>
</div>