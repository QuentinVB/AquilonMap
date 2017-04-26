function toggle(trigger,container)
{
    switch(triggerState)
    {
        case true:
            triggerState = false;
            container.style.display="none";
            trigger.style.backgroundImage="url('./assets/img/ic_expand_more_black_18dp.png')";
        break;
        case false:
            triggerState = true;
            container.style.display="block";
            trigger.style.backgroundImage="url('./assets/img/ic_expand_less_black_18dp.png')";
        break;
    }
}

var menu = document.getElementsByClassName("toggleableMenu");

for (var index = 0; index < menu.length; index++) {
    var element = menu[index];
    var trigger = element.getElementsByTagName("span")[0];
    var container = element.getElementsByTagName("div")[0];
    var triggerState = false;
    trigger.addEventListener("click", function (e) {             
            toggle(trigger,container);
        }
    );
    toggle(trigger,container);
}

