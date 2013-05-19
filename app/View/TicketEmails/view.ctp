
<form class="form-horizontal">
    <fieldset>
        <div id="legend" class="">
            <h2 class="section-title"><?php echo $ticketEmail['TicketEmail']['subject']; ?></h2>
        </div>




        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="input01">Emetteur</label>
            <div class="controls">
                <input type="text" placeholder="placeholder" class="input-xlarge uneditable-input" value="<?php echo $ticketEmail['TicketEmail']['from']; ?>">
                <p class="help-block"></p>
            </div>
        </div>

        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="input01">Objet</label>
            <div class="controls">
                <input type="text" placeholder="placeholder" class="input-xlarge uneditable-input" value="<?php echo $ticketEmail['TicketEmail']['subject']; ?>">
                <p class="help-block"></p>
            </div>
        </div>
        
        <div class="control-group">

            <!-- Text input-->
            <label class="control-label" for="input01">Date</label>
            <div class="controls">
                <input type="text" placeholder="placeholder" class="input-xlarge uneditable-textarea" value="<?php echo $ticketEmail['TicketEmail']['created']; ?>">
                <p class="help-block"></p>
            </div>
        </div>

        <div class="control-group">

            <!-- Textarea -->
            <label class="control-label">Textarea</label>
            <div class="controls">
                <div class="textarea">
                    <textarea class="uneditable-textarea"  rows="8"><?php echo $ticketEmail['TicketEmail']['plainmsg']; ?> </textarea>
                </div>
            </div>
        </div>

    </fieldset>
</form>
</div>


