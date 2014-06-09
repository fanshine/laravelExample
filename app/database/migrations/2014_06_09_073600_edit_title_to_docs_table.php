<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTitleToDocsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('docs', function($table) {
            // $table->dropColumn('title');
            // $table->updateColumn('title', 'string')->length(68);
            DB::statement('ALTER TABLE docs MODIFY COLUMN title VARCHAR(100)');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('docs', function() {
            DB::statement('ALTER TABLE docs MODIFY COLUMN title VARCHAR(124)');
        });
	}

}
