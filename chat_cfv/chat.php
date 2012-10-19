<!DOCTYPE html>
<html class="chat">
    <head>
        <script>window.user = 'Cámbienme lacras';window.last_asked = 0;window.server_current_time = <?php echo 1000 * (time()) ?>;</script>
        <meta charset="UTF-8" />
        <title>Barf! Chat 0.0.0.1</title>
        <link rel="stylesheet" href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" />
        <style>
            .chat, .chat body{
                width:100%;
                height:100%;
                margin:0px;
                padding:0px;
            }
            .chat .h3q{
                min-height:500px;
            }
            #receiver, #receiver li{
                width:100%;
                height:100%;
                float:left;
                margin:0px;
                padding:0px;
            }
            #receiver{
                overflow:hidden;
                overflow-y:scroll;
                height:500px;
            }
            #receiver li{
                min-height:1em;
                height:auto !important;
                padding:0.5em;
                word-wrap:break-word;
            }
            .chat h1q{
                height:25%;
            }
            .wide{
                width:540px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row span8 offset2 well h3q">
                <ul id="receiver" class="unstyled">

                </ul>
            </div>
            <div class="row span8 offset2 h1q">
                <form class="form-stacked">
                    <div class="input-prepend span8">
                        <span class="addon"><button id="write" class="btn btn-primary">Send!</button></span>
                        <input type="text" id="text-to-write" class="wide input xx-large" />
                    </div>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>
            var chat = function(configuration){
                configuration = !!configuration? configuration : {};
                var defaults = {
                    send_url: './send.php',
                    read_url: './read.php',
                    interval: 1000
                };
                var actual_config = (function(defaults, config){
                    if(config.constructor !== Object){
                        return defaults;
                    }
                    var res = {};
                    for(k in defaults){
                        if(!!config[k])
                            res[k] = config[k];
                        else res[k] = defaults[k];
                    }
                    return res;
                })(defaults, configuration);
                
                //acá esto no lo puede tocar nadie. 
                var send_message = function(message){
                    var serialized = $('<form><input type="text" name="data" value="'+message+'"/><input type="text" name="user" value="'+window.user+'"/></form>').serialize();
                    $.post(
                    actual_config.send_url, 
                    serialized, 
                    function(response){ 
                        //acá agregar validación de que el mensaje llegó pipí cucú
                        console.log(response);
                    }
                );
                };
                var read_message = function(callback){
                    var now = window.server_current_time;
                    window.setInterval(function(){
                        now+=actual_config.interval;

                        $.get(actual_config.read_url+'?after='+window.last_asked, function(response){
                            if(!!callback){
                                callback(response);
                            }
                        })
                    },actual_config.interval);
                }
                this.factory = function(cfg){
                    return {
                        send: send_message,
                        listen: read_message
                    };
                }    
                return this.factory(actual_config);
            };
            
            $(function(){
                var my_chat = new chat({interval:250});
                $('#write').on('click',function(evt){
                    evt.preventDefault();
                    my_chat.send($('#text-to-write').val());
                });
                my_chat.listen(function(response_text){
                    //acá se pone el código que hace algo con el texto de los mensajes
                    var response = $.parseJSON(response_text);
                    var message = response.message;
                    for(var i = 0, j = message.length; i < j; i++){
                        $('#receiver').append('<li>'+message[i].text+'</li>');
                        window.last_asked = message[i].date;
                    }
                    
                });
            });
        </script>
    </body>
</html>

