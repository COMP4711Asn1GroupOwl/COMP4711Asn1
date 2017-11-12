<div class="row">
    <br/>
    <form method="POST">
        <b>From</b>
        &nbsp;
        <select name="from">
            {options}
            <option value="{key}">{name}</option>
            {/options}
        </select>
        &nbsp;&nbsp;&nbsp;
        <b>To</b>
        &nbsp;
        <select name="to">
            {options}
            <option value="{key}">{name}</option>
            {/options}
        </select>        
        &nbsp;&nbsp;&nbsp;
        <button>Search</button>
    </form>
    <br/>
    <div>
        
        <b>Departure Location: </b><i>{base}</i>
        &nbsp;&nbsp;&nbsp;<b>>></b>&nbsp;&nbsp;&nbsp;
        <b>{target}</b>
    </div>
    <div>
        <table style="width:100%">
            <tr>
                <br/>
                <tr>
                    <td><b>Destination 1</b></td>
                    <td><b>Destination 2</b></td>
                    <td><b>Destination 3</b></td>
                </tr>
                {results}
                <tr>
                    <td>{1}</td>
                    <td>{2}</td>
                    <td>{3}</td>
                </tr>
                {/results}
            </tr>
        </table>
    </div>
    <br/>
</div>