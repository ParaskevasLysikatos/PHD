<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentTable extends Migration {

	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->text('RN')->nullable();
            $table->string('SUsername')->nullable();
			$table->text('SEmail')->nullable();
			$table->text('SFullname')->nullable();
			$table->string('SGender')->nullable();
			$table->string('SPhone')->nullable();
			$table->text('SCountry')->nullable();
			$table->string('SCurrentEmployment')->nullable();
			$table->text('SPayment')->nullable();
			$table->date('SDateOfBirth')->nullable();
			$table->date('SFirstEntry')->nullable();
			$table->date('SYearOfGraduation')->nullable();
			$table->string('SModeOfAttend')->nullable();
			$table->text('SPassword')->nullable();
			$table->text('STopic')->nullable();
			$table->date('SubmissionDate')->nullable();
			$table->text('SUpgradeStatus')->nullable();
			$table->text('SDepartment')->nullable();
			$table->text('SDepartmentalSec')->nullable();

		});
	}

	public function down()
	{
		Schema::drop('students');
	}
}
