
<?php

class TicketEmailsController extends AppController {

    public function getAllEmails() {
        // si le visiteur est loger 
        if (!isset($_SESSION['UserAuth']['User']['username'])) {
            $this->Session->setFlash('Vous Devez Connectez d\'abord... !', 'message',array('typeMsg'=>'error'));
            $this->redirect('/login');
        }
        $ticketEmails = $this->TicketEmail->find('all');
//        'all', array(
//    // Set recursive to 1 to also gets attachments,
//    // presented in a separate [Attachment][0] model.
//    // Recursive attachments (someone forwarded an email as 
//    // an attachment, which in turn had a pdf attached) are just
//    // squashed to 1 list of files.
//    'recursive' => -1,
//    'conditions' => array(
//        'answered' => 0,
//        'deleted' => 0,
//        'draft' => 0,
//        'flagged' => 0,
//        'recent' => 0,
//        'seen' => 0
////        'from' => 'kevin@true.nl',
//    ),
//));
        $this->set(compact('ticketEmails'));
    }

    public function view($id=null) {
// Get one
        $mbox = imap_open("{imap.gmail.com:993/ssl/imap}INBOX", "test.messagrie", "Eclipse1091")
                or die("Connexion impossible : " . imap_last_error());
        $ticketEmail = $this->TicketEmail->find('first', array(
            'conditions' => array(
                'id' => strval($id),
            ),
                ));
        imap_close($mbox);
       $this->set(compact('ticketEmail'));
    }

    public function getSubject($value = '') {

// Get subject
        $this->TicketEmail->id = 21879;
        $subject = $this->TicketEmail->field('subject');
        print(compact('subject'));
    }

    public function deleteOne($value = '') {
// Delete one
        $mbox = imap_open("{imap.gmail.com:993/ssl/imap}INBOX", "test.messagrie", "Eclipse1091")
                or die("Connexion impossible : " . imap_last_error());
        imap_delete($mbox, intval($this->request->data['TicketEmail']['checkbox']));
        imap_expunge($mbox);
        imap_close($mbox);

        $this->Session->setFlash('Message supprimé', 'message');
        $this->redirect($this->referer());
    }

    public function deleteMany($value = '') {
// Delete many
        $this->TicketEmail->deleteAll(array(
            'deleted' => 0,
            'seen' => 0,
            'from' => 'test.messagrie@gmail.com',
        ));
    }

    public function sendMail() {
        $data = $this->request->data;
        $email = new CakeEmail('gmail');
        $email->from('test.messagrie@gmail.com');
        $email->to($data['TicketEmail']['Email']);
        $email->subject($data['TicketEmail']['Subject']);
        $email->send($data['TicketEmail']['Message']);
        $this->Session->setFlash('Message Envoyée ...', 'message');
        $this->redirect($this->referer());
    }

}

?>