$(document).ready(function (){
    // One form with one submit button, hence this selector
    $("form").on("submit", function (e){
        e.preventDefault(e);

        // Delete current data
        //   tbody is where data is displayed.
        //   We remove/append tr to show a change
        //   in results. 
        $("tbody tr").remove();

        // Remove all current errors
        $("div.errors ul").remove();
        
        // Ignore empty values
        serializedData = $("form input")
            .filter(function (idx, elmt) {
                return $(elmt).val() != '';
            })
            .serialize();

        $.get({
            url: "/api/buildings",
            data: serializedData,
            success: successCallback,
            error: errorCallback
        });
    });
});

function successCallback(data) {
    if(data.length == 0) {
        var row = "<tr><td colspan='5'>No results</td></tr>";
        $("tbody").append(row);
    } else {
        for( let idx = 0; idx < data.length; idx++ ) {
            var row = "<td>"+data[idx].name+"</td>"+
                "<td>"+data[idx].price+"</td>"+
                "<td>"+data[idx].offices+"</td>"+
                "<td>"+data[idx].tables+"</td>"+
                "<td>"+data[idx].sqm+"</td>";
            
            row = "<tr>"+row+"</tr>";
            $("tbody").append(row);
        }
    }
}

function errorCallback(data) {
    data = data.responseJSON.errors;
    glob = data;
    console.log(data);
    var row = "<tr><td colspan='5'>Error Occured</td></tr>";
    $("tbody").append(row);

    var html = "";
    // Convert error response to ul
    $.each(data, function( key, value) { // dictionary
        $.each(value, function(idx, message) { // array
            html += "<li>"+message+"</li>";
        });
    });

    html = "<ul>"+html+"</ul>";
    $("div.errors").append(html);
}