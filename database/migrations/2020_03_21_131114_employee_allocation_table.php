<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeAllocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmployeeAllocations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employeeId');
            $table->unsignedBigInteger('departmentId');
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('employeeId')->references('id')->on('Employees');
            $table->foreign('departmentId')->references('id')->on('department');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('EmployeeAllocations');
    }
}
