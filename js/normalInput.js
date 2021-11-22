let normalInputCollection = document.getElementsByClassName("normalInput");

for (const normalInput of normalInputCollection) {

    // box ------------------------------------------------------------------------------------------------------------

    let box = normalInput.getElementsByClassName("normalInput__box")[0];

    // lbl ------------------------------------------------------------------------------------------------------------

    let lbl = normalInput.getElementsByClassName("normalInput__lbl")[0];

    let lbl_topInitial = lbl.style.top;
    let lbl_topFocus = 0;
    let lbl_fontSizeInitial = lbl.style.fontSize;
    let lbl_fontSizeFocus = "var(--font-size-xs)";
    let lbl_colorInitial = lbl.style.color;

    let lbl_colorFocus = "var(--primary-color-a)";
    if      (normalInput.classList.contains("normalInput-lbl-color-focus-v-secondary")) lbl_colorFocus = "var(--secondary-color-a)";
    else if (normalInput.classList.contains("normalInput-lbl-color-focus-v-light"))     lbl_colorFocus = "var(--grayscale-color-1)";
    else if (normalInput.classList.contains("normalInput-lbl-color-focus-v-dark"))      lbl_colorFocus = "var(--grayscale-color-4)";

    // line ----------------------------------------------------------------------------------------------------------

    let line = document.createElement("span");
    line.className = "normalInput__line";
    normalInput.appendChild(line);

    let line_heightInitial = line.style.height;
    let line_heightFocus = "2px";

    let line_bgPositionInitial = normalInput.clientWidth + "px";
    let line_bgPositionFocus = (normalInput.clientWidth * 3) + "px";

    let line_colorInitial = "var(--gray-color-1)";
    if      (normalInput.classList.contains("normalInput-line-color-initial-v-primary"))   line_colorInitial = "var(--primary-color-a)";
    else if (normalInput.classList.contains("normalInput-line-color-initial-v-secondary")) line_colorInitial = "var(--secondary-color-a)";
    else if (normalInput.classList.contains("normalInput-line-color-initial-v-dark"))      line_colorInitial = "var(--gray-color-5)";

    let line_colorFocus = "var(--primary-color-a)";
    if      (normalInput.classList.contains("normalInput-line-color-focus-v-secondary")) line_colorFocus = "var(--secondary-color-a)";
    else if (normalInput.classList.contains("normalInput-line-color-focus-v-light"))     line_colorFocus = "var(--gray-color-1)";
    else if (normalInput.classList.contains("normalInput-line-color-focus-v-dark"))      line_colorFocus = "var(--gray-color-5)";

    line.style.backgroundSize = (normalInput.clientWidth * 3) + "px 1px";
    line.style.backgroundImage = "linear-gradient(90deg, " + line_colorFocus + " 0%, " + line_colorFocus + " 33.33%, " + line_colorInitial + " 66.66%, " + line_colorInitial + " 100%)";

    // Events ---------------------------------------------------------------------------------------------------------

    function blur() {

        lbl.style.top = lbl_topInitial;
        lbl.style.fontSize = lbl_fontSizeInitial;
        lbl.style.color = lbl_colorInitial;

        line.style.height = line_heightInitial;
        line.style.backgroundPosition = line_bgPositionInitial;
    }

    blur();

    box.addEventListener("blur", function f() {

        if (box.value == "") blur();
    });

    box.addEventListener("focus", function f() {

        lbl.style.top = lbl_topFocus;
        lbl.style.fontSize = lbl_fontSizeFocus;
        lbl.style.color = lbl_colorFocus;

        line.style.height = line_heightFocus;
        line.style.backgroundPosition = line_bgPositionFocus;
    });
}
