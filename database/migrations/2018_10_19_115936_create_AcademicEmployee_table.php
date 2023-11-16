<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcademicEmployeeTable extends Migration {

	public function up()
	{
		Schema::create('academic_employees', function(Blueprint $table) {
			$table->string('Role')->nullable();
			$table->string('Title')->nullable();
			$table->string('ACFullname')->nullable();
			$table->string('ACPassword')->nullable();
			$table->string('ACDepartment')->nullable();
			$table->string('ACCountry')->nullable();
			$table->string('ACEmail')->nullable();
			$table->string('ACPhone')->nullable();
            $table->string('ACUsername')->nullable();

		});
	}

	public function down()
	{
		Schema::drop('academic_employees');
	}
}
