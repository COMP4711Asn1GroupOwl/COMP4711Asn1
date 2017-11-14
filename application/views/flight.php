<div class="row">
	<table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Flight</th>
                <th>Airline</th>
                <th>To</th>
                <th>Terminal</th>
                <th>Community</th>
            </tr>
        </thead> 
        <tbody>
            {schedules}
            <tr>
                <td><a href="/info/flight/show/{planeCode}">{planeCode}</a></td>
                <td>Owl</td>
                <td>{dest}</td>
                <td>Main</td>
                <td>{community}</td>
            <tr/>
            {/schedules}
        </tbody>
    </table>
</div>