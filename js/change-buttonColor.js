function changeTheColorOfButton() {
    if (location.search !== "") {
        var parameter = get_query()['building'];
        document.getElementById(parameter).className = "btn btn-darkorange .shiny";
     } 
}