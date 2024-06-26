<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
    </head>
    <body>
        <?php
include("../view/inc/header.php");
?>
<div class="contactPage">
    <h1>Leave me a message</h1>
    <div class="contactHolder">
        <form action="" class="contactForm" method="POST">
            <div class="formInp">
                <label for="name" class="contactLabel">Name</label>
                <input type="text" class="contactInp" name="name">
            </div>
            <div class="formInp">
                <label for="email" class="contactLabel">Email</label>
                <input type="text" class="contactInp" name="email">
            </div>
            <div class="formInp">
                <label for="message" class="contactLabel messLabel">Message</label>
                <textarea class="contactInp" name="message"></textarea>
            </div>
            <button type="submit" class="sendBut">Send</button>
        </form>
    </div>
    <div class="messageWindow">
        <?php
            $i = 1;
            foreach ($messages as $message) : ?>                                  
                    <div class="messageHolder" id="message<?=$i?>">                                        
                        <h4><?=$message["name"]?></span> sent this message the <?= (new DateTime($message['datemessage']))->setTimezone(new DateTimeZone('GMT+1'))->format('d-m-Y @ H\:i')?></h4>  
                        <p><?= wordwrap($message["message"], 28, "\n", true) ?></p>
                        
                        <div class="replyField" id="replyField<?=$i?>">
                            <?php
            
   
            foreach ($replies as $reply) :
                if ($reply['parent_message_id'] == $message['id']) {
                    ?> 
                        <h5 title="<?= (new DateTime($reply['date_reply']))->format('d-m-Y @ H\:i')?>"><?=$reply['reply_name']?> replied : <?=$reply['reply_to_parent']?></h5>   
                        <?php }   
                     endforeach;  ?>
                                <form action="" class="replyForm" method="POST">
                                    
                                        <label for="nameRep" class="replyContactLabel">Name</label>
                                        <input type="text" class="replyContactInp" name="nameRep">
                                        <input type="text" class="replyContactInp" name="parent_id" id="parentIdField" style="display: none;" value="<?=$message['id']?>">
                                  
                                    <div class="replyFormInp">
                                        <label for="messageRep" class="replyContactLabel messLabel">Message</label>
                                        <textarea class="replyContactInp" name="messageRep"></textarea>
                                    </div>
                                    <button type="submit" class="sendReply">Send</button>
                                </form>
                            </div>   
                        </div>
                    
                            <?php
                    $i++;
                endforeach;                                                             
                ?>
                
            </div>
        </div>
        <script src="scripts/script.js"></script>
        
    </body>
</html>