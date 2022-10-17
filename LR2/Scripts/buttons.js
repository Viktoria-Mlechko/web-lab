let showFilterBtn = document.getElementsByClassName("search-area-showFilters-btn")[0];
let hidden = true;

showFilterBtn.addEventListener("click", function() {
    let filter = document.getElementsByClassName("filter")[0];
    if (hidden == true)
    {
        ShowElement(filter, "flex");
    }
    hidden = false;
});