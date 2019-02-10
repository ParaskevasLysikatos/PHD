<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->string('RN')->nullable();
            $table->string('SUsername')->nullable();
			$table->string('SEmail')->nullable();
			$table->text('SFullname')->nullable();
			$table->string('Gender')->nullable();
			$table->string('SPhone')->nullable();
			$table->text('SCountry')->nullable();
			$table->string('Current_Employment')->nullable();
			$table->string('Last_Supervision_Record')->nullable();
			$table->string('Payment')->nullable();
			$table->string('Student_Record')->nullable();
			$table->date('Date_Of_Birth')->nullable();
			$table->date('FirstEntry')->nullable();
			$table->date('Year_of_Graduation')->nullable();
			$table->string('Mode_of_Attend')->nullable();
			$table->string('SPassword')->nullable();
			$table->text('Topic')->nullable();
			$table->date('Submission_Date')->nullable();
			$table->text('Ugraduate_Status')->nullable();
			$table->text('SDepartment')->nullable();
			$table->text('Departmental_Secretary')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}
