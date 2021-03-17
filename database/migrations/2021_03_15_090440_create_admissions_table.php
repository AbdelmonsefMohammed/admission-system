<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('applyingforyear')->nullable();
            $table->string('applicant_email')->unique()->nullable();
            $table->bigInteger('applicant_phone')->nullable();
            $table->set('applicant', ['father', 'mother','guardian'])->nullable();
            $table->string('date_of_birth')->nullable();
            $table->set('gender', ['male', 'female'])->nullable();
            $table->string('placeofbirth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('previosschool')->nullable();
            $table->integer('national_id')->nullable();
            $table->integer('passportnumber')->nullable();
            $table->string('homelanguage')->nullable();
            $table->string('otherlanguage')->nullable();
            $table->string('fathername')->nullable();
            $table->string('fathernationality')->nullable();
            $table->integer('fathermobile')->nullable();
            $table->string('fatheremail')->unique()->nullable();
            $table->string('fatherstreet')->nullable();
            $table->string('fatherflat')->nullable();
            $table->string('fatherstate')->nullable();
            $table->string('fathercity')->nullable();
            $table->string('fatherpostal')->nullable();
            $table->string('fatheroccupation')->nullable();
            $table->string('fatherbusiness')->nullable();
            $table->string('fathercompanyname')->nullable();
            $table->string('fatheruniversity')->nullable();
            $table->string('mothername')->nullable();
            $table->string('mothernationality')->nullable();
            $table->integer('mothermobile')->nullable();
            $table->string('motheremail')->unique()->nullable();
            $table->string('motherstreet')->nullable();
            $table->string('motherflat')->nullable();
            $table->string('motherstate')->nullable();
            $table->string('mothercity')->nullable();
            $table->string('motherpostal')->nullable();
            $table->string('motheroccupation')->nullable();
            $table->string('motherbusiness')->nullable();
            $table->string('mothercompanyname')->nullable();
            $table->string('motheruniversity')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_nationality')->nullable();
            $table->integer('guardian_mobile')->nullable();
            $table->string('guardian_email')->unique()->nullable();
            $table->string('guardian_street')->nullable();
            $table->string('guardian_flat')->nullable();
            $table->string('guardian_state')->nullable();
            $table->string('guardian_city')->nullable();
            $table->string('guardian_postal')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_business')->nullable();
            $table->string('guardian_companyname')->nullable();
            $table->string('guardian_university')->nullable();
            $table->longText('siblings_names')->nullable();
            $table->longText('siblings_currentschools')->nullable();
            $table->longText('siblings_grades')->nullable();
            $table->longText('siblings_ages')->nullable();
            $table->longText('emergency_firstname')->nullable();
            $table->longText('emergency_lastname')->nullable();
            $table->unsignedBigInteger('emergency_contact_mobile')->nullable();
            $table->longText('emergency_relationtothechild')->nullable();
            $table->string('filepath')->nullable();
            $table->string('filename')->nullable();
            $table->boolean('full')->default(0);
            $table->set('status', ['new','accepted', 'rejected','scedualed_for_appointment'])->default('new');
            $table->longText('comment')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
