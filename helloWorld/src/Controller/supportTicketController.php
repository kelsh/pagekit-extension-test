<?php

namespace Pagekit\helloWorld\Controller;

use Pagekit\Application as App;



class supportTicketController{




    public function indexAction(){

         $module = App::module('helloWorld');
      $config = $module->config;
       $user = App::user();
        $db = App::db();
        $supportTicketsTable = $db->getUtility()->getTable('@support_tickets');
         $userId = $user->id;

        /*if($user->hasRole(1)){
            return "User is Anonymous";
        }else{
            dump($user);
        }*/

        /**
         * @Route("/post/new", name="post/new",  methods="POST")
         * @Access("support: new ticket || support: manage tickets")
         * @Request({'what':'string'})
         */
        public function newSupportTicket(){
            private $timestamp = date('Y-m-d G:i:s');

            Application::db()->insert('@support_tickets', [
                'ticket_id' => null,
                'user_id' => $userId,
                'ticket_creation_date' => $timestamp,
                'ticket_modified' => null,
                'ticket_content'=> $request.content;
            ]);
        }



        return [
            dump($user),
            '$view'  => [
                'title' => '$view->title',
                'name' => 'supportTicket:views/support/index.php'
            ],
            'message' => $userId,
            'itDoesntMatter' => "It doesn't matter i guess",

        ];
    }

}