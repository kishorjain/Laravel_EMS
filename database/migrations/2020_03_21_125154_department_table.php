<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Department', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departmentName');
            $table->decimal('salary',8,2)->default(0);
            $table->timestamp('created_at')->useCurrent();
            
        });
        DB::table('Department')->insert([
                'departmentName' => 'Testing',
                'salary' => 2500.00,
                
            ]
        );
        DB::table('Department')->insert([
                'departmentName' => 'SoftwareDevelopment',
                'salary' => 1500.00,
            ]
        );
        DB::table('Department')->insert([
                 'departmentName' => 'Devops',
                'salary' => 500.00,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Department');
    }
}
