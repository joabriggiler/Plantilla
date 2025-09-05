<script>
    // Como armar un input HTML simple:
    
    // <input correo_electrónico email r m=50 p="^[a-z]+$">
    // <input edad number min=18 max=120 r>
    // <input usuario text ao>
    // <input contraseña password r ph-Ingrese_su_contraseña>
    // <input codigo number d>
    
    // name (primer atributo inventado → normalizado y sin acentos/símbolos).
    // type (segundo atributo inventado, default "text").
    // r → required.
    // p → pattern (regex).
    // m → maxlength (valor numérico).
    // min / max → se mantienen iguales, si aparecen en crudo.
    // d → disabled.
    // a → autocomplete="on".
    // ao → autocomplete="off".
    // ph-xyz → placeholder fijo "xyz" (útil si no querés que lo arme con capitalización automática).
    
    document.querySelectorAll("input").forEach(input => {
        if (input.hasAttribute("name")) return;

        const raw = input.getAttributeNames();

        let name = raw[0] || "input";
        const type = raw[1] || "text";

        // Flags
        const required = raw.includes("r");
        const disabled = raw.includes("d");
        const autocompleteOn = raw.includes("a");
        const autocompleteOff = raw.includes("ao");

        // Extra valores
        const maxlengthAttr = raw.find(a => a.startsWith("m="));
        const patternAttr   = raw.find(a => a.startsWith("p="));
        const minAttr       = raw.find(a => a.startsWith("min="));
        const maxAttr       = raw.find(a => a.startsWith("max="));
        const phAttr        = raw.find(a => a.startsWith("ph-"));

        raw.forEach(attr => input.removeAttribute(attr)); // limpiar

        // Placeholder por defecto o personalizado
        let placeholder = phAttr 
            ? phAttr.replace(/^ph-/, "").replace(/_/g, " ")
            : name.replace(/_/g, " ").replace(/^./, c => c.toUpperCase());

        // Normalizar `name`
        name = name.normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .replace(/[+\-\/]/g, '');

        // Setear atributos reales
        input.setAttribute("name", name);
        input.setAttribute("type", type);
        input.setAttribute("placeholder", placeholder);

        if (required) input.setAttribute("required", "");
        if (disabled) input.setAttribute("disabled", "");
        if (autocompleteOn) input.setAttribute("autocomplete", "on");
        if (autocompleteOff) input.setAttribute("autocomplete", "off");

        if (maxlengthAttr) input.setAttribute("maxlength", maxlengthAttr.split("=")[1]);
        if (patternAttr) input.setAttribute("pattern", patternAttr.split("=")[1]);
        if (minAttr) input.setAttribute("min", minAttr.split("=")[1]);
        if (maxAttr) input.setAttribute("max", maxAttr.split("=")[1]);


        // Generar estructura HTML automaticamente
        input.outerHTML = `
            <div class="input-c full">
                ${input.outerHTML}
                <p class="input-t">${input.getAttribute("placeholder") || input.name}</p>
                <svg class="input-e" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <rect width="12" height="12" rx="6"></rect>
                    <path d="M6.72725 2.90906H5.27271L5.45452 6.90906H6.54543L6.72725 2.90906Z"></path>
                    <path d="M5.99998 7.63633C6.40164 7.63633 6.72725 7.96195 6.72725 8.36361C6.72725 8.76527 6.40164 9.09088 5.99998 9.09088C5.59832 9.09088 5.27271 8.76527 5.27271 8.36361C5.27271 7.96195 5.59832 7.63633 5.99998 7.63633Z"></path>
                </svg>
            </div>`;
    });

    // Adaptar abreviaciones HTML
    document.querySelectorAll("fila").forEach(fila => {
        let classAttr = "fila";
        if (fila.hasAttribute("class")) {
            classAttr += " " + fila.getAttribute("class");
        }

        const attrs = [...fila.attributes]
            .filter(a => a.name !== "class")
            .map(a => `${a.name}="${a.value}"`)
            .join(" ");

        fila.outerHTML = `<div class="${classAttr}" ${attrs}>${fila.innerHTML}</div>`;
    });
    document.querySelectorAll("columna").forEach(columna => {
        let classAttr = "columna";
        if (columna.hasAttribute("class")) {
            classAttr += " " + columna.getAttribute("class");
        }

        const attrs = [...columna.attributes]
            .filter(a => a.name !== "class")
            .map(a => `${a.name}="${a.value}"`)
            .join(" ");

        columna.outerHTML = `<div class="${classAttr}" ${attrs}>${columna.innerHTML}</div>`;
    });

    // Funcion para los acordeones
    var acc = document.getElementsByClassName("acordeon");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("acordeon-c-a");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                panel.style.opacity = 0;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                panel.style.opacity = 1;
            }
        });
    }

    // Funciones para superponer un contenedor
    function openFocus(){
        const html = `
            <div id="focusArea">
                <div class="panel columna p" style="width:280px;" tabindex="0">
                    <p class="tc">Los términos y condiciones son un acuerdo que establece las reglas de uso, derechos y responsabilidades entre una empresa y sus usuarios.</p>
                    <button onclick="closeFocus()">Entiendo</button>
                </div>
            </div>
        `;
        document.body.insertAdjacentHTML('afterbegin', html);

        const focus = document.getElementById("focusArea");
        focus.addEventListener("click", e => {if (e.target === focus) closeFocus()});
        document.addEventListener("keydown", function escListener(e){
        if(e.key === "Escape"){document.removeEventListener("keydown", escListener);closeFocus()}});
        setTimeout(() => {focus.style.opacity = 1}, 10);
    }

    function closeFocus(){
        const focus = document.getElementById("focusArea");
        if (!focus) return;

        focus.style.opacity = 0;
        focus.addEventListener("transitionend", () => {focus.remove();}, { once: true });
    }
</script>