<?php

use Illuminate\Database\Seeder;
use App\Ticket;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $ticket = new Ticket;
		 $ticket->ticket_code = "1CC";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 31;
		 $ticket->save();

		 $ticket = new Ticket;
		 $ticket->ticket_code = "1CD";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 32;
		 $ticket->save();

		 $ticket = new Ticket;
		 $ticket->ticket_code = "1CE";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 33;
		 $ticket->save();

		 $ticket = new Ticket;
		 $ticket->ticket_code = "1CF";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 34;
		 $ticket->save();

		 $ticket = new Ticket;
		 $ticket->ticket_code = "1CG";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 35;
		 $ticket->save();

		 $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 35;
		 $ticket->save();

		  $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 66;
		 $ticket->save();

		  $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 67;
		 $ticket->save();

		  $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 68;
		 $ticket->save();

		  $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 69;
		 $ticket->save();

		  $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 70;
		 $ticket->save();

		  $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 71;
		 $ticket->save();

		  $ticket = new Ticket;
		 $ticket->ticket_code = "1CH";
		 $ticket->price = 45000;
		 $ticket->stock = 10;
		 $ticket->id_studio = 1;
		 $ticket->id_schedule = 72;
		 $ticket->save();
    }
}
