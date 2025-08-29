<style>
    :root{
        --color-base: #3c3c3c;

        --e-color: #F23D4F;
    }
    body, div, p, input, svg{ transition: all .2s cubic-bezier(0.23, 1, 0.320, 1);font-family: Arial, Helvetica, sans-serif; }
    body{
        margin: 0;
        background-color: #252525;
        min-height: 100vh;
        width: 100%;

        display: flex;
        justify-content: center;
        align-items: center;
    }
    .fila{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
    }
    .columna{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .fw{
        width: 100%;
    }

    /*-------------------*/
    /*CSS para los Inputs*/
    .input-c{ position: relative; }
    input{
        background-color: var(--color-base);
        color: white;
        border: none;
        padding: 11px 8px 12px 12px;
        border-radius: 5px;
        box-shadow: 0px 0px 0px 1px #ffffff47;
        box-sizing: border-box;
        width: 100%;
    }
    .input-t {
        position: absolute;
        margin: 0;
        color: #ffffff61;
        font-size: 12px;
        line-height: 10px;
        left: 4px;
        top: 8px;
        padding: 4px;
        border-radius: 5px;
        opacity: 0;
        pointer-events: none;
    }
    /*Input Focus*/
    input:focus{ outline: none;box-shadow: 0px 0px 0px 1px #ffffff8f; }
    .input-c input:not(:placeholder-shown){ padding: 18px 12px 5px 8px; }
    .input-c input:not(:placeholder-shown) ~ .input-t { top: 3px;opacity: 1; }
    .input-c input:focus ~ .input-t { color: #ffffffab; }

    /*Input Error*/
    .input-e{
        width: 10px;
        position: absolute;
        top: 6px;
        right: 6px;
        opacity: 0;
    }
    .input-e rect{ fill: var(--e-color); }
    .input-e path{ fill: var(--color-base); }
    .input-c input:required:user-invalid { box-shadow: 0px 0px 0px 1px var(--e-color); }
    .input-c input:required:user-invalid ~ .input-t { color: var(--e-color); }
    .input-c input:required:user-invalid ~ .input-e { opacity: 1; }

    button {
        width: 100%;
        padding: 11px 10px 11px 10px;
        background: #2ea1c5;
        border: none;
        border-radius: 5px;
        color: white;
        font-weight: 600;
        outline: none;
        cursor: pointer;
    }
    /*-------------------*/

</style>