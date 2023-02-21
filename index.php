<?php 

/*
Autor: Jhonatan Jair Garcia Alfaro 
Alias: JGCODE47

MIT License

Copyright (c) 2018 Cryptlex

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

    include 'autoload.php'; 

#para utilizar simplemente deben enviar 3 parametros al controlador FileSave::FileSaveDirectory("ruta", "nombre_carpeta", $_FILE)
#dejo agregado un simple ejemplo con ajax y javascript puro espero den estrellas a mi github
?>

<input type="file" name="" id="archivo">
<button id="subirArchivo">Subir</button>
<script>
    const archivo = document.querySelector("#archivo")
    const btn = document.querySelector("#subirArchivo")

    btn.addEventListener("click", ()=>{
        const date = new FormData()
        date.append("file", archivo.files[0])
        async function SubmitFIle() {
        const response = await fetch('ajaxPost/envio.php', {
            method:"POST",
            body:date
        });
            return response.json()
         }
         Promise.resolve(SubmitFIle()).then(resp=>console.log(resp[1]))
    })


</script>