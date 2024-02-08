document.addEventListener("DOMContentLoaded", function () {
    let buscador = document.getElementById("buscador");

    buscador.addEventListener("input", function () {
        let input = buscador.value.toLowerCase();

        // Quitamos el resaltado anterior antes de aplicar el nuevo
        document.querySelectorAll("span.highlight").forEach(span => {
            span.outerHTML = span.innerHTML;
        });

        // Resaltamos el texto coincidente
        if (input.trim() !== '') {
            highlightMatches(input);
        }
    });
});

function highlightMatches(input) {
    let regex = new RegExp(input, "gi");
    let elements = document.querySelectorAll("*:not(script)");

    elements.forEach(element => {
        if (element.childNodes.length === 1 && element.childNodes[0].nodeType === Node.TEXT_NODE) {
            let texto = element.textContent;
            element.innerHTML = texto.replace(regex, match => `<span class="highlight">${match}</span>`);
        }
    });
}
