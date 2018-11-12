    <script type="text/javascript">
        var tutorialData = {"forge":{"settingsTitle":"Mostrar tutorial de forja","steps":[{"settingsName":"Selecciona el objeto","text":"<br>\u00a1Te doy la bienvenida a la Herrer\u00eda! Me alegro de que est\u00e9s aqu\u00ed.<br><br>Si quieres, puedes crear tu propio equipamiento. Elige el objeto que prefieras, selecciona un prefijo o un sufijo y adelante. <br><br>Ten en cuenta que solo puedes forjar prefijos y sufijos que hayas aprendido previamente. Para ello puedes completar \"expediciones\" y buscar \"pergaminos\". <br><br>Reconocer\u00e1s el prefijo o sufijo que te otorga un pergamino a trav\u00e9s de su nombre: <br>As\u00ed, el \"Pergamino de Tinuviel\" te permite aprender el prefijo \"Tinuviel\", y el \"Pergamino del amor\" desbloquea el sufijo \"del amor\". <br><br>Una vez seleccionado el objeto deseado, el cuadro a la derecha te aportar\u00e1 toda la informaci\u00f3n necesaria, como por ejemplo la duraci\u00f3n de la forja, los recursos necesarios o la probabilidad de \u00e9xito del proceso. <br><br>Tras cerrar el acuerdo de alquiler recibir\u00e1s un dep\u00f3sito de forja en el que puedes ir almacenando poco a poco todos los recursos que necesites para el objeto. <br><br>Atenci\u00f3n: Si cambias de idea y deseas cancelar la forja, recuperar\u00e1s la mayor parte de tus recursos, \u00a1pero el coste de alquiler no se te reembolsar\u00e1!<br><br>","visibility":true},{"settingsName":"Cazadores y coleccionistas","text":"<br>Este es el dep\u00f3sito de forja. Puedes dejar aqu\u00ed todos los recursos que necesites para el objeto de tu elecci\u00f3n. Arrastra los recursos al inventario del dep\u00f3sito y se guardar\u00e1n de forma autom\u00e1tica. La probabilidad de \u00e9xito y el nivel de calidad del objeto depende, obviamente, de los recursos que utilices para crearlo. <br><br>El secreto es muy simple: cuanto mejores sean los recursos que utilices, \u00a1mejor ser\u00e1 el resultado! <br><br>Una vez hayas reunido todo lo necesario, no tienes m\u00e1s que hacer clic sobre \"Forjar\" para iniciar el proceso.<br><br>","visibility":true},{"settingsName":"\u00a1EUREKA!","text":"<br>\u00a1Enhorabuena! Acabas de forjar un objeto. Arr\u00e1stralo de la Herrer\u00eda a tu inventario.<br><br>","visibility":true},{"settingsName":"\u00a1Qu\u00e9 desastre!","text":"<br>Vaya, ha surgido un grave error durante la forja. Est\u00e1s ante los restos que han sobrevivido al proceso. <br><br>Sin embargo, recuperas parte de los recursos que hab\u00edas utilizado y puedes decidir qu\u00e9 es lo que quieres hacer con ellos: <br>Podemos empaquetarlos y envi\u00e1rtelos, o tambi\u00e9n tienes la posibilidad de almacenarlos en un nuevo dep\u00f3sito de forja a cambio de una peque\u00f1a tasa. En este \u00faltimo caso, podr\u00e1s reutilizarlos para repetir el proceso y volver a forjar el mismo objeto.<br><br>","visibility":true}]}};

        function updateTutorialState(category, step, visibility) {
            return function() {
                var option               = new Array();
                option['spinnerVisible'] = false;
                sendAjax(
                    jQuery(this), 
                    'ajax.php', 
                    'mod=settings&submod=updateTutorialState&category=' + category + '&step=' + step + '&visibility=' + !jQuery('#tutorialDoNotShowAgain').prop('checked'), 
                    null, 
                    null, 
                    option
                );
                
                tutorialData[category].steps[step].visibility = !jQuery('#tutorialDoNotShowAgain').prop('checked');
            }
        }
        
        function showTutorial(data)
        {
            if (tutorialData[data.category] !== undefined && 
                tutorialData[data.category].steps[data.step] !== undefined && 
                tutorialData[data.category].steps[data.step].visibility === true
            ) {
                var tutorialContainer = jQuery('.tutorial');
                var content           = tutorialData[data.category].steps[data.step];
                
                tutorialContainer.find('.title').html(content.settingsName);
                tutorialContainer.find('.text').html(content.text);
                
                tutorialContainer.fadeIn("normal");
                jQuery('#tutorialDoNotShowAgain').on('click', updateTutorialState(data.category, data.step, jQuery(this)));
            }
        }
        
        jQuery(document).ready(function() {
            jQuery('.tutorial .awesome-button').on('click', function(){
                jQuery('.tutorial').fadeOut('normal');
            })
        });
    </script>
    <div class="tutorial" style="display: none;">
        <div class="title">
        </div>
        <div class="text">
        </div>
        <div class="footer">
            <input type="checkbox" name="tutorialDoNotShowAgain" id="tutorialDoNotShowAgain"  />
            <label for="tutorialDoNotShowAgain">No mostrar más este paso del tutorial</label>
            <br />
            <div class="awesome-button">Cerrado</div>
        </div>
    </div>