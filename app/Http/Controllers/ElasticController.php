<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\User;
use App\Author;

class ElasticController extends Controller
{
    
	public function reindex($user_id) {

		$user = User::find($user_id);

		if(count($user) > 0 && $user->is_admin == 1) {

			$documents = Document::all();
			$documents->addToIndex();
			dd('¡Indexación de documentos realizada!');

		} else {
			dd('¡No tienes privilegios para reindexar!');
		}

	}

	public function search($user_id, $query) {

		
		$user = User::find($user_id);

		if(count($user) > 0) {
			
			$documents = Document::searchByQuery(array('match' => array('title' => $query)));
			dd($documents);

		} else {
			dd('El usuario no existe.');
			
		}


		


		

	}

}
