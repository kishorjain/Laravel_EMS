<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employeeName');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->timestamp('dateofbirth');
            $table->string('gender');
            $table->timestamp('dateofjoin')->nullable();
            $table->timestamp('created_at')->useCurrent();
            
        });

        DB::table('Employees')->insert([
                'employeeName' => 'rajesh',
                'email' => 'rajesh@example.com',
                'mobile' => '9886445701',
                'dateofbirth'=>'1990-02-14',
                'gender'=>'male',
                'dateofjoin'=>'2020-02-14',
            ]
        );
        DB::table('Employees')->insert([
                'employeeName' => 'kumar',
                'email' => 'kumar@example.com',
                'mobile' => '9886445702',
                'dateofbirth'=>'1990-02-14',
                'gender'=>'male',
                'dateofjoin'=>'2020-03-14',
            ]);
        DB::table('Employees')->insert([
                'employeeName' => 'ramesh',
                'email' => 'ramesh@example.com',
                'mobile' => '9886445703',
                'dateofbirth'=>'1990-02-14',
                'gender'=>'male',
                'dateofjoin'=>'2020-03-14',
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employees');
    }
}
