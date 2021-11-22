let normalBtns = document.getElementsByClassName("normalBtn");

for (const item of normalBtns) {

    let ratio = 3;

    if (item.classList.contains("normalBtn-ratio-v-1")) ratio = 1;
    else if (item.classList.contains("normalBtn-ratio-v-2")) ratio = 2;
    else if (item.classList.contains("normalBtn-ratio-v-4")) ratio = 4;
    else if (item.classList.contains("normalBtn-ratio-v-5")) ratio = 5;
    else if (item.classList.contains("normalBtn-ratio-v-6")) ratio = 6;
    else if (item.classList.contains("normalBtn-ratio-v-7")) ratio = 7;

    item.style.width = (item.clientHeight * ratio) + "px";
}

let comboBtnCollection = document.getElementsByClassName("comboBtn");

for (const comboBtn of comboBtnCollection) {

    let ratio = 4;

    if (comboBtn.classList.contains("comboBtn-ratio-v-5")) ratio = 5;
    else if (comboBtn.classList.contains("comboBtn-ratio-v-6")) ratio = 6;
    else if (comboBtn.classList.contains("comboBtn-ratio-v-7")) ratio = 7;
    else if (comboBtn.classList.contains("comboBtn-ratio-v-8")) ratio = 8;
    else if (comboBtn.classList.contains("comboBtn-ratio-v-9")) ratio = 9;

    comboBtn.style.width = (comboBtn.clientHeight * ratio) + "px";

    let text = comboBtn.getElementsByClassName("comboBtn__text")[0];
    let text_startingPositionTop = comboBtn.clientHeight / 2 - text.clientHeight / 2;
    let text_startingPositionLeft = comboBtn.clientWidth / 2 - text.clientWidth / 2;

    text.style.top = text_startingPositionTop + "px";
    text.style.left = text_startingPositionLeft + "px";

    let icon = comboBtn.getElementsByClassName("comboBtn__icon")[0];
    let icon_startingPositionTop = comboBtn.clientHeight / 2 - icon.clientHeight / 2;
    let icon_startingPositionRight = icon.clientWidth * -1;

    icon.style.top = icon_startingPositionTop + "px";
    icon.style.right = icon_startingPositionRight + "px";

    comboBtn.addEventListener("mouseover", function f() {

        text.style.left = (text_startingPositionTop + text_startingPositionTop * 0.5) + "px";
        icon.style.right = icon_startingPositionTop + "px";
        icon.style.opacity = 1;
    });

    comboBtn.addEventListener("mouseout", function f() {

        text.style.left = text_startingPositionLeft + "px";
        icon.style.right = icon_startingPositionRight + "px";
    });
}
