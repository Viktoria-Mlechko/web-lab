function ShowElement(element, disp = "block")
{
    let marginTop = parseInt(getComputedStyle(element).marginTop);
    let nowMarginTop = 0;

    let opacity = parseInt(getComputedStyle(element).opacity);
    let nowOpacity = 0;

    let marginBot = parseInt(getComputedStyle(element).marginBottom);
    let nowMarginBot = 0;

    element.style.display = disp;
    element.style.marginTop = 0;
    element.style.opacity = 0;
    element.style.marginBottom = 0;



    let growUp = setInterval(function()
    {
        if (marginTop > nowMarginTop)
        {
            nowMarginTop += 1;
            element.style.marginTop = nowMarginTop + "px";
        }
        else if (marginBot > nowMarginBot)
        {
            nowMarginBot += 1;
            element.style.marginBottom = nowMarginBot + "px";
        }
        else 
        {
            let showInterval = setInterval(function() {
                if (opacity > nowOpacity)
                {
                    nowOpacity += 0.1;
                    element.style.opacity = nowOpacity;
                }
                else 
                {
                    clearInterval(showInterval);
                }
            }, 50);
            clearInterval(growUp);
        }   
     }, 2);
}

function HideElement(element)
{

}