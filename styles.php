<style>
    :root{
        --color-base: #1d1d1d;
        --color-base-s: #3c3c3c;
        --color-base-acent: #ffffff47;
        --color-base-acent-s: #ffffff8f;
        --color-acent: #2ea1c5;

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
        align-items: center;
        justify-content: start;
        gap: 10px;
    }
    .sb{ justify-content: space-between; }
    .columna{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .full{
        width: 100%;
    }
    .panel {
        box-sizing: border-box;
        border-radius: 5px;
        background: var(--color-base);
        box-shadow: 0px 0px 0px 1px var(--color-base-acent);
    }

    /*-------------------*/
    /*CSS para los Inputs*/
    .input-c{ position: relative; }
    input{
        background-color: var(--color-base-s);
        color: white;
        border: none;
        padding: 11px 8px 12px 12px;
        border-radius: 5px;
        box-shadow: 0px 0px 0px 1px var(--color-base-acent);
        box-sizing: border-box;
        width: 100%;
    }
    .input-t {
        position: absolute;
        margin: 0;
        color: var(--color-base-acent);
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
    input:focus{ outline: none;box-shadow: 0px 0px 0px 1px var(--color-base-acent-s); }
    .input-c input:not(:placeholder-shown){ padding: 18px 12px 5px 8px; }
    .input-c input:not(:placeholder-shown) ~ .input-t { top: 3px;opacity: 1; }
    .input-c input:focus ~ .input-t { color: var(--color-base-acent-s); }

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
        background: var(--color-acent);
        border: none;
        border-radius: 5px;
        color: white;
        font-weight: 600;
        outline: none;
        cursor: pointer;
    }
    /*-------------------*/

</style>